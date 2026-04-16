<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\StoreProfileAddressRequest;
use App\Http\Requests\Profile\UpdateProfileAddressRequest;
use App\Models\Address;
use App\Services\Profile\ProfileAddressService;
use Illuminate\Http\RedirectResponse;

class AddressController extends Controller
{
    public function __construct(
        private readonly ProfileAddressService $profileAddressService,
    ) {}

    public function store(StoreProfileAddressRequest $request): RedirectResponse
    {
        $this->profileAddressService->create($request->user(), $request->validated());

        return redirect()
            ->route('profile.index')
            ->with('alert', [
                'type' => 'success',
                'title' => __('Address saved'),
            ]);
    }

    public function update(UpdateProfileAddressRequest $request, Address $address): RedirectResponse
    {
        $this->profileAddressService->update($address, $request->validated());

        return redirect()
            ->route('profile.index')
            ->with('alert', [
                'type' => 'success',
                'title' => __('Address updated'),
            ]);
    }
}
