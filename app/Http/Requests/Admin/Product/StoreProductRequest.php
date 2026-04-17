<?php

namespace App\Http\Requests\Admin\Product;

use App\Enums\CategoryType;
use App\Enums\DiscountType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class StoreProductRequest extends FormRequest
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
            'category_id' => [
                'required',
                'integer',
                Rule::exists('categories', 'id')->where('type', CategoryType::Product->value),
            ],
            'name_en' => ['required', 'string', 'max:255'],
            'name_ar' => ['required', 'string', 'max:255'],
            'detail_en' => ['required', 'string'],
            'detail_ar' => ['required', 'string'],
            'specification_en' => ['nullable', 'string'],
            'specification_ar' => ['nullable', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'discount_type' => ['required', 'string', Rule::enum(DiscountType::class)],
            'discount' => ['required', 'numeric', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
            'images' => ['required', 'array', 'min:1'],
            'images.*' => ['image', 'max:4096'],
        ];
    }

    public function withValidator(Validator $validator): void
    {
        $validator->after(function (Validator $validator): void {
            $type = DiscountType::tryFrom((string) $this->input('discount_type'));
            if ($type === null) {
                return;
            }
            $price = (float) $this->input('price', 0);
            $discount = (float) $this->input('discount', 0);
            if ($type === DiscountType::Percentage && $discount > 100) {
                $validator->errors()->add('discount', __('Percentage discount cannot exceed 100.'));
            }
            if ($type === DiscountType::Fixed && $discount > $price) {
                $validator->errors()->add('discount', __('Fixed discount cannot be greater than price.'));
            }
        });
    }
}
