<?php

namespace App\Services\User\Profile;

use App\Models\User;

class ProfilePasswordService
{
    public function update(User $user, string $plainPassword): void
    {
        $user->forceFill([
            'password' => $plainPassword,
        ])->save();
    }
}
