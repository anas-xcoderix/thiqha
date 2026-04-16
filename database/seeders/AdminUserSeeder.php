<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    private const ADMIN_EMAIL = 'admin@gmail.com';

    private const ADMIN_NAME = 'Administrator';

    private const ADMIN_PHONE = '000000000';

    private const ADMIN_PASSWORD = 'password';

    public function run(): void
    {
        User::query()->updateOrCreate(
            ['email' => self::ADMIN_EMAIL],
            [
                'name' => self::ADMIN_NAME,
                'phone' => self::ADMIN_PHONE,
                'password' => self::ADMIN_PASSWORD,
                'role' => UserRole::Admin,
            ],
        );
    }
}
