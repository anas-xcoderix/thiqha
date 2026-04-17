<?php

namespace App\Models;

use App\Enums\CategoryType;
use Illuminate\Database\Eloquent\Model;

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
}
