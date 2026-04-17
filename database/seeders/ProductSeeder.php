<?php

namespace Database\Seeders;

use App\Enums\CategoryType;
use App\Enums\DiscountType;
use App\Models\Category;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $this->purgeProducts();

        $categories = Category::query()
            ->where('type', CategoryType::Product)
            ->orderBy('id')
            ->get();

        if ($categories->isEmpty()) {
            return;
        }

        $templates = [
            [
                'name_en' => 'Cable reel 25 m',
                'name_ar' => 'بكرة كابل 25 م',
                'detail_en' => 'Heavy-duty cable reel with thermal protection and ergonomic winding handle. Suitable for job sites and workshops.',
                'detail_ar' => 'بكرة كابلات قوية مع حماية حرارية ومقبض لف مريح. مناسبة لمواقع العمل والورش.',
                'specification_en' => "Length: 25 m\nSockets: 3-way 13A\nMaterial: Galvanized steel",
                'specification_ar' => "الطول: 25 م\nمقابس: 3 طرق 13A\nالمادة: فولاذ مجلفن",
                'price' => 89.00,
                'discount_type' => DiscountType::Percentage,
                'discount' => 10,
                'stock' => 120,
                'file' => 'product1.png',
            ],
            [
                'name_en' => 'Industrial extension cord',
                'name_ar' => 'سلك تمديد صناعي',
                'detail_en' => 'High visibility cable with reinforced housing. Rated for continuous duty in demanding environments.',
                'detail_ar' => 'كابل عالي الوضوح مع غلاف معزز. مصنف للعمل المتواصل في البيئات القاسية.',
                'specification_en' => "Cable gauge: 2.5 mm²\nIP rating: IP44",
                'specification_ar' => "مقطع الكابل: 2.5 مم²\nتصنيف IP: IP44",
                'price' => 45.50,
                'discount_type' => DiscountType::Fixed,
                'discount' => 5.50,
                'stock' => 200,
                'file' => 'product2.png',
            ],
            [
                'name_en' => 'LED work light 50W',
                'name_ar' => 'مصباح عمل LED 50 واط',
                'detail_en' => 'Bright, energy-efficient LED flood for indoor and outdoor temporary lighting.',
                'detail_ar' => 'إضاءة LED قوية وموفرة للطاقة للإضاءة المؤقتة داخلية وخارجية.',
                'specification_en' => "Power: 50 W\nColor temperature: 5000 K",
                'specification_ar' => "القدرة: 50 و\nدرجة حرارة اللون: 5000 كلفن",
                'price' => 32.00,
                'discount_type' => DiscountType::Percentage,
                'discount' => 0,
                'stock' => 75,
                'file' => 'product3.png',
            ],
            [
                'name_en' => 'Portable tool box',
                'name_ar' => 'صندوق أدوات متنقل',
                'detail_en' => 'Stackable organizer with metal latches and reinforced corners.',
                'detail_ar' => 'منظم قابل للتراص مع أقفال معدنية وزوايا معززة.',
                'specification_en' => "Dimensions: 50 × 25 × 25 cm\nWeight: 3.2 kg",
                'specification_ar' => "الأبعاد: 50 × 25 × 25 سم\nالوزن: 3.2 كجم",
                'price' => 24.99,
                'discount_type' => DiscountType::Fixed,
                'discount' => 0,
                'stock' => 40,
                'file' => 'product4.png',
            ],
        ];

        foreach ($categories as $category) {
            foreach ($templates as $template) {
                $product = Product::query()->create([
                    'category_id' => $category->id,
                    'name_en' => $template['name_en'].' ('.$category->name_en.')',
                    'name_ar' => $template['name_ar'].' ('.$category->name_ar.')',
                    'detail_en' => $template['detail_en'],
                    'detail_ar' => $template['detail_ar'],
                    'specification_en' => $template['specification_en'],
                    'specification_ar' => $template['specification_ar'],
                    'price' => $template['price'],
                    'discount_type' => $template['discount_type'],
                    'discount' => $template['discount'],
                ]);

                $path = $this->copyPublicHomeImage($template['file'], $product->id);
                if ($path !== null) {
                    ProductImage::query()->create([
                        'product_id' => $product->id,
                        'path' => $path,
                        'sort_order' => 0,
                    ]);
                }

                Inventory::query()->create([
                    'product_id' => $product->id,
                    'stock' => $template['stock'],
                ]);
            }
        }
    }

    private function purgeProducts(): void
    {
        foreach (Product::query()->with('images')->get() as $product) {
            foreach ($product->images as $image) {
                if ($image->path && Storage::disk('public')->exists($image->path)) {
                    Storage::disk('public')->delete($image->path);
                }
            }
        }

        Product::query()->delete();

        if (Storage::disk('public')->exists('products')) {
            Storage::disk('public')->deleteDirectory('products');
        }
    }

    private function copyPublicHomeImage(string $filename, int $productId): ?string
    {
        $src = public_path('img/images/home/'.$filename);
        if (! File::isFile($src)) {
            return null;
        }

        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION) ?: 'png');
        $relative = 'products/'.$productId.'/seed-'.Str::random(8).'.'.$extension;
        Storage::disk('public')->put($relative, File::get($src));

        return $relative;
    }
}
