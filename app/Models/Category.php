<?php

namespace App\Models;

use App\Enums\CategoryType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'logo',
        'name_en',
        'name_ar',
        'type',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'type' => CategoryType::class,
        ];
    }

    public function logoUrl(): ?string
    {
        if ($this->logo === null || $this->logo === '') {
            return null;
        }

        return asset('storage/'.$this->logo);
    }

    public function displayName(): string
    {
        return app()->getLocale() === 'ar' ? $this->name_ar : $this->name_en;
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
