<?php

namespace App\Services\Category;

use App\Enums\CategoryType;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\UploadedFile;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;

class CategoryService
{
    public function paginateByType(CategoryType $type, int $perPage = 15): LengthAwarePaginator
    {
        return Category::query()
            ->where('type', $type)
            ->latest('id')
            ->paginate($perPage)
            ->withQueryString();
    }

    /**
     * @return Collection<int, Category>
     */
    public function productCategoriesForSelect(): Collection
    {
        return Category::query()
            ->where('type', CategoryType::Product)
            ->orderBy('name_en')
            ->get(['id', 'name_en', 'name_ar']);
    }

    /**
     * @param  array{name_en: string, name_ar: string}  $data
     */
    public function create(array $data, CategoryType $type, UploadedFile $logo): Category
    {
        $path = $this->storeLogo($logo);

        return Category::query()->create([
            'name_en' => $data['name_en'],
            'name_ar' => $data['name_ar'],
            'type' => $type,
            'logo' => $path,
        ]);
    }

    /**
     * @param  array{name_en: string, name_ar: string}  $data
     */
    public function update(Category $category, array $data, ?UploadedFile $logo = null): Category
    {
        if ($logo !== null) {
            $this->deleteStoredLogo($category->logo);
            $category->logo = $this->storeLogo($logo);
        }

        $category->name_en = $data['name_en'];
        $category->name_ar = $data['name_ar'];
        $category->save();

        return $category->refresh();
    }

    public function delete(Category $category): void
    {
        $this->deleteStoredLogo($category->logo);
        $category->delete();
    }

    private function storeLogo(UploadedFile $file): string
    {
        return $file->store('categories', 'public');
    }

    private function deleteStoredLogo(?string $path): void
    {
        if ($path === null || $path === '') {
            return;
        }

        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
