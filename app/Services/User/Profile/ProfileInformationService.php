<?php

namespace App\Services\User\Profile;

use App\Models\User;

class ProfileInformationService
{
    /**
     * @param  array{name: string, email: string, phone: string}  $data
     */
    public function update(User $user, array $data): void
    {
        $user->forceFill([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
        ])->save();
    }
}
