<?php

namespace App\Http\Requests\Admin\Inventory;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInventoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'stock' => ['required', 'integer', 'min:0'],
        ];
    }
}
