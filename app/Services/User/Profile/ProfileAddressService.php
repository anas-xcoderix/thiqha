<?php

namespace App\Services\User\Profile;

use App\Models\Address;
use App\Models\User;

class ProfileAddressService
{
    /**
     * @param  array<string, mixed>  $data
     */
    public function create(User $user, array $data): Address
    {
        return $user->address()->create($data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function update(Address $address, array $data): void
    {
        $address->update($data);
    }
}
