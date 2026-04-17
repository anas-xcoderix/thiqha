<?php

namespace App\Services\Product;

use App\Enums\DiscountType;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\UploadedFile;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    public function paginateForAdmin(int $perPage = 15): LengthAwarePaginator
    {
        return Product::query()
            ->with(['category', 'images', 'inventory'])
            ->latest('id')
            ->paginate($perPage)
            ->withQueryString();
    }

    /**
     * @param  array<string, mixed>  $attributes
     * @param  list<UploadedFile>  $images
     */
    public function create(array $attributes, array $images, int $initialStock): Product
    {
        return DB::transaction(function () use ($attributes, $images, $initialStock) {
            $product = Product::query()->create($attributes);

            $this->storeUploadedImages($product, $images);

            Inventory::query()->create([
                'product_id' => $product->id,
                'stock' => max(0, $initialStock),
            ]);

            return $product->load(['category', 'images', 'inventory']);
        });
    }

    /**
     * @param  array<string, mixed>  $attributes
     * @param  list<UploadedFile>  $newImages
     * @param  list<int|string>  $deleteImageIds
     */
    public function update(Product $product, array $attributes, array $newImages, array $deleteImageIds): Product
    {
        return DB::transaction(function () use ($product, $attributes, $newImages, $deleteImageIds) {
            $product->update($attributes);

            if ($deleteImageIds !== []) {
                $this->deleteImagesForProduct($product, $deleteImageIds);
            }

            if ($newImages !== []) {
                $this->storeUploadedImages($product, $newImages);
            }

            return $product->fresh(['category', 'images', 'inventory']);
        });
    }

    public function delete(Product $product): void
    {
        DB::transaction(function () use ($product) {
            $product->load('images');
            foreach ($product->images as $image) {
                $this->deleteStoredFile($image->path);
            }
            $product->delete();
        });
    }

    /**
     * @param  list<UploadedFile>  $images
     */
    private function storeUploadedImages(Product $product, array $images): void
    {
        $baseOrder = (int) $product->images()->max('sort_order') + 1;

        foreach (array_values($images) as $index => $file) {
            if (! $file instanceof UploadedFile) {
                continue;
            }
            $path = $file->store('products/'.$product->id, 'public');
            ProductImage::query()->create([
                'product_id' => $product->id,
                'path' => $path,
                'sort_order' => $baseOrder + $index,
            ]);
        }
    }

    /**
     * @param  list<int|string>  $imageIds
     */
    private function deleteImagesForProduct(Product $product, array $imageIds): void
    {
        $ids = array_map('intval', $imageIds);

        $images = ProductImage::query()
            ->where('product_id', $product->id)
            ->whereIn('id', $ids)
            ->get();

        foreach ($images as $image) {
            $this->deleteStoredFile($image->path);
            $image->delete();
        }
    }

    private function deleteStoredFile(string $path): void
    {
        if ($path === '') {
            return;
        }

        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }

    /**
     * @return array{name_en: string, name_ar: string, category_id: int, detail_en: string, detail_ar: string, specification_en: ?string, specification_ar: ?string, price: float|string, discount_type: DiscountType, discount: float|string}
     */
    public function normalizeProductPayload(array $validated): array
    {
        return [
            'name_en' => $validated['name_en'],
            'name_ar' => $validated['name_ar'],
            'category_id' => (int) $validated['category_id'],
            'detail_en' => $validated['detail_en'],
            'detail_ar' => $validated['detail_ar'],
            'specification_en' => $this->nullableText($validated['specification_en'] ?? null),
            'specification_ar' => $this->nullableText($validated['specification_ar'] ?? null),
            'price' => $validated['price'],
            'discount_type' => DiscountType::from((string) $validated['discount_type']),
            'discount' => $validated['discount'],
        ];
    }

    private function nullableText(mixed $value): ?string
    {
        if ($value === null) {
            return null;
        }

        $s = is_string($value) ? trim($value) : '';

        return $s === '' ? null : $s;
    }
}
