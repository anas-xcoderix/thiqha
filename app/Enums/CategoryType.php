<?php

namespace App\Enums;

enum CategoryType: string
{
    case ServiceProvider = 'service_provider';
    case Product = 'product';

    public function label(): string
    {
        return match ($this) {
            self::ServiceProvider => __('Service provider'),
            self::Product => __('Product'),
        };
    }
}
