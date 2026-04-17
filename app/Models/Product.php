<?php

namespace App\Models;

use App\Enums\DiscountType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name_en',
        'name_ar',
        'detail_en',
        'detail_ar',
        'specification_en',
        'specification_ar',
        'price',
        'discount_type',
        'discount',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'discount' => 'decimal:2',
            'discount_type' => DiscountType::class,
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class)->orderBy('sort_order')->orderBy('id');
    }

    public function inventory(): HasOne
    {
        return $this->hasOne(Inventory::class);
    }

    public function displayName(): string
    {
        return app()->getLocale() === 'ar' ? $this->name_ar : $this->name_en;
    }

    public function finalUnitPrice(): float
    {
        $price = (float) $this->price;
        $discount = (float) $this->discount;

        if ($this->discount_type === DiscountType::Percentage) {
            return max(0, round($price * (1 - min(100, $discount) / 100), 2));
        }

        return max(0, round($price - $discount, 2));
    }
}
