<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    protected $fillable = [
        'slug',
        'logo',
        'name_en',
        'name_ar',
        'sort_order',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'sort_order' => 'integer',
        ];
    }

    public function logoUrl(): ?string
    {
        if ($this->logo === null || $this->logo === '') {
            return null;
        }

        // Same paths as static home.blade.php (under public/).
        if (str_starts_with($this->logo, 'img/')) {
            return asset($this->logo);
        }

        return asset('storage/'.$this->logo);
    }

    /**
     * Icon for storefront cards: logo column (public img/ or storage upload), else slug fallback.
     */
    public function iconForDisplay(): string
    {
        if ($url = $this->logoUrl()) {
            return $url;
        }

        return match ($this->slug) {
            'water-tank' => asset('img/images/home/water-tank.png'),
            'soil' => asset('img/images/home/soil.png'),
            'bricks' => asset('img/images/home/bricks.png'),
            'contracts' => asset('img/images/home/contracts.png'),
            'insurance' => asset('img/images/home/insurance.png'),
            default => asset('img/images/home/water-tank.png'),
        };
    }

    /**
     * Uploaded admin icons live under storage/app/public/services/.
     */
    public static function isStoredUpload(?string $logo): bool
    {
        return $logo !== null && $logo !== '' && str_starts_with($logo, 'services/');
    }

    public static function uniqueSlugFromEnglishName(string $nameEn, ?int $ignoreId = null): string
    {
        $base = Str::slug($nameEn);
        if ($base === '') {
            $base = 'service';
        }

        $slug = $base;
        $n = 2;
        while (static::query()
            ->where('slug', $slug)
            ->when($ignoreId !== null, fn ($q) => $q->where('id', '!=', $ignoreId))
            ->exists()) {
            $slug = $base.'-'.$n;
            $n++;
        }

        return $slug;
    }
}
