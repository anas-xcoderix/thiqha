<?php

namespace App\Http\Requests\Partner;

use App\Support\PhoneNumber;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class RegisterPartnerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        if ($this->has('phone') && is_string($this->input('phone'))) {
            $this->merge([
                'phone' => PhoneNumber::normalize($this->input('phone')),
            ]);
        }
        if ($this->has('operations_phone') && is_string($this->input('operations_phone'))) {
            $this->merge([
                'operations_phone' => PhoneNumber::normalize($this->input('operations_phone')),
            ]);
        }
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:32'],
            'password' => ['required', 'confirmed', Password::defaults()],
            'official_company_trade_name' => ['required', 'string', 'max:255'],
            'commercial_registration_number' => ['required', 'string', 'max:255'],
            'commercial_registration_copy' => ['required', 'file', 'max:10240', 'mimes:pdf,jpg,jpeg,png,doc,docx'],
            'chamber_commerce_certificate' => ['required', 'file', 'max:10240', 'mimes:pdf,jpg,jpeg,png,doc,docx'],
            'municipal_license' => ['nullable', 'file', 'max:10240', 'mimes:pdf,jpg,jpeg,png,doc,docx'],
            'civil_id_signatory' => ['required', 'file', 'max:10240', 'mimes:pdf,jpg,jpeg,png,doc,docx'],
            'copy_signatory_civil_id' => ['nullable', 'file', 'max:10240', 'mimes:pdf,jpg,jpeg,png,doc,docx'],
            'official_power_of_attorney' => ['required', 'file', 'max:10240', 'mimes:pdf,jpg,jpeg,png,doc,docx'],
            'account_manager_name' => ['required', 'string', 'max:255'],
            'number_of_employees' => ['required', 'integer', 'min:1'],
            'operations_phone' => ['required', 'string', 'max:32'],
            'office_address' => ['nullable', 'string', 'max:500'],
            'website_link' => ['nullable', 'string', 'max:500'],
            'company_bank_account_name' => ['required', 'string', 'max:255'],
            'iban' => ['required', 'string', 'max:64'],
            'bank_authorization_letter' => ['required', 'string', 'max:2000'],
            'declaration_account_file' => ['required', 'file', 'max:10240', 'mimes:pdf,jpg,jpeg,png,doc,docx'],
            'activity_classification' => ['required', 'string', Rule::in([
                'Subcontractor',
                'Main Contractor',
                'Designer',
                'Supervisor/Consultant',
                'Supplier',
            ])],
            'specification' => ['required', 'string', Rule::in(['Electrical', 'Plumbing'])],
            'partner_terms' => ['accepted'],
            'role' => ['prohibited'],
        ];
    }
}
