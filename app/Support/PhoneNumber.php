<?php

namespace App\Support;

final class PhoneNumber
{
    public static function normalize(string $phone): string
    {
        $digits = preg_replace('/\D/', '', $phone);

        return $digits !== '' ? $digits : $phone;
    }
}
