<?php

namespace App\Http\Requests\User\Profile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProfileAddressRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()->address === null;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        $regions = array_keys(config('profile.regions', []));

        return [
            'region' => ['required', 'string', Rule::in($regions)],
            'piece_number' => ['required', 'string', 'max:120'],
            'street_name' => ['required', 'string', 'max:255'],
            'building_number' => ['required', 'string', 'max:80'],
            'floor' => ['nullable', 'string', 'max:80'],
            'flat' => ['nullable', 'string', 'max:80'],
        ];
    }

    protected function getRedirectUrl(): string
    {
        return route('profile.index');
    }
}
