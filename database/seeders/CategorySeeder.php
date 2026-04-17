<?php

namespace Database\Seeders;

use App\Enums\CategoryType;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::query()->delete();

        if (Storage::disk('public')->exists('categories')) {
            Storage::disk('public')->deleteDirectory('categories');
        }

        foreach ($this->serviceProviderRows() as $row) {
            $logo = $this->copyPublicHomeImage($row['file']);
            if ($logo === null) {
                continue;
            }
            Category::query()->create([
                'name_en' => $row['name_en'],
                'name_ar' => $row['name_ar'],
                'type' => CategoryType::ServiceProvider,
                'logo' => $logo,
            ]);
        }

        foreach ($this->productRows() as $row) {
            $logo = $this->copyPublicHomeImage($row['file']);
            if ($logo === null) {
                continue;
            }
            Category::query()->create([
                'name_en' => $row['name_en'],
                'name_ar' => $row['name_ar'],
                'type' => CategoryType::Product,
                'logo' => $logo,
            ]);
        }
    }

    /**
     * @return list<array{name_en: string, name_ar: string, file: string}>
     */
    private function serviceProviderRows(): array
    {
        return [
            ['name_en' => 'Construction', 'name_ar' => 'البناء', 'file' => 'construction.png'],
            ['name_en' => 'Electricity', 'name_ar' => 'الكهرباء', 'file' => 'electricity.png'],
            ['name_en' => 'Plumbing', 'name_ar' => 'السباكة', 'file' => 'plumbing.png'],
            ['name_en' => 'Carpentry', 'name_ar' => 'النجارة', 'file' => 'carpentry.png'],
        ];
    }

    /**
     * @return list<array{name_en: string, name_ar: string, file: string}>
     */
    private function productRows(): array
    {
        return [
            ['name_en' => 'Building', 'name_ar' => 'المباني', 'file' => 'building.png'],
            ['name_en' => 'Electrical', 'name_ar' => 'الكهرباء', 'file' => 'electric.png'],
            ['name_en' => 'Lighting', 'name_ar' => 'الإضاءة', 'file' => 'Lighting.png'],
            ['name_en' => 'Plumbing', 'name_ar' => 'السباكة', 'file' => 'plumbing.png'],
        ];
    }

    private function copyPublicHomeImage(string $filename): ?string
    {
        $src = public_path('img/images/home/'.$filename);
        if (! File::isFile($src)) {
            return null;
        }

        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION) ?: 'png');
        $slug = Str::slug(pathinfo($filename, PATHINFO_FILENAME)) ?: 'category';
        $relative = 'categories/seed-'.$slug.'-'.Str::lower(Str::random(8)).'.'.$extension;
        Storage::disk('public')->put($relative, File::get($src));

        return $relative;
    }
}
