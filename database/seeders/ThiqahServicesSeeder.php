<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ThiqahServicesSeeder extends Seeder
{
    /**
     * Default home “Thiqah Services” rows (services table).
     * Logo paths match the original static home section (public/img/images/home/…).
     */
    public function run(): void
    {
        $rows = [
            ['slug' => 'water-tank', 'name_en' => 'Water Tanker', 'name_ar' => 'صهريج مياه', 'sort_order' => 1, 'logo' => 'img/images/home/water-tank.png'],
            ['slug' => 'soil', 'name_en' => 'Soil', 'name_ar' => 'تربة', 'sort_order' => 2, 'logo' => 'img/images/home/soil.png'],
            ['slug' => 'bricks', 'name_en' => 'Bricks', 'name_ar' => 'طوب', 'sort_order' => 3, 'logo' => 'img/images/home/bricks.png'],
            ['slug' => 'contracts', 'name_en' => 'Contracts', 'name_ar' => 'عقود', 'sort_order' => 4, 'logo' => 'img/images/home/contracts.png'],
            ['slug' => 'insurance', 'name_en' => 'Insurance', 'name_ar' => 'تأمين', 'sort_order' => 5, 'logo' => 'img/images/home/insurance.png'],
        ];

        foreach ($rows as $row) {
            Service::query()->updateOrCreate(
                ['slug' => $row['slug']],
                [
                    'name_en' => $row['name_en'],
                    'name_ar' => $row['name_ar'],
                    'sort_order' => $row['sort_order'],
                    'logo' => $row['logo'],
                ],
            );
        }
    }
}
