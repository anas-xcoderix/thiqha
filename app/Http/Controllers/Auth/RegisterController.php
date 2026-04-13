<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function storeUser(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:32'],
            'password' => ['required', 'confirmed', Password::defaults()],
            'terms' => ['accepted'],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $this->normalizePhone($validated['phone']),
            'password' => $validated['password'],
            'role' => 'user',
        ]);

        Auth::login($user);

        return redirect('/')->with('status', __('Your account has been created.'));
    }

    public function storePartner(Request $request): RedirectResponse
    {
        $validated = $request->validate([
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
        ]);

        return DB::transaction(function () use ($validated, $request) {
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $this->normalizePhone($validated['phone']),
                'password' => $validated['password'],
                'role' => 'partner',
            ]);

            $paths = [
                'commercial_registration_copy_path' => $request->file('commercial_registration_copy')->store('partners/documents', 'public'),
                'chamber_commerce_certificate_path' => $request->file('chamber_commerce_certificate')->store('partners/documents', 'public'),
                'civil_id_signatory_path' => $request->file('civil_id_signatory')->store('partners/documents', 'public'),
                'official_power_of_attorney_path' => $request->file('official_power_of_attorney')->store('partners/documents', 'public'),
                'declaration_account_file_path' => $request->file('declaration_account_file')->store('partners/documents', 'public'),
            ];

            if ($request->hasFile('municipal_license')) {
                $paths['municipal_license_path'] = $request->file('municipal_license')->store('partners/documents', 'public');
            }
            if ($request->hasFile('copy_signatory_civil_id')) {
                $paths['copy_signatory_civil_id_path'] = $request->file('copy_signatory_civil_id')->store('partners/documents', 'public');
            }

            Partner::create([
                'user_id' => $user->id,
                'official_company_trade_name' => $validated['official_company_trade_name'],
                'commercial_registration_number' => $validated['commercial_registration_number'],
                'account_manager_name' => $validated['account_manager_name'],
                'number_of_employees' => $validated['number_of_employees'],
                'operations_phone' => $this->normalizePhone($validated['operations_phone']),
                'office_address' => $validated['office_address'] ?? null,
                'website_link' => $validated['website_link'] ?? null,
                'company_bank_account_name' => $validated['company_bank_account_name'],
                'iban' => $validated['iban'],
                'bank_authorization_letter' => $validated['bank_authorization_letter'] ?? null,
                'activity_classification' => $validated['activity_classification'],
                'specification' => $validated['specification'],
                ...$paths,
            ]);

            Auth::login($user);

            return redirect('/')->with('status', __('Your partner application has been submitted.'));
        });
    }

    private function normalizePhone(string $phone): string
    {
        $digits = preg_replace('/\D/', '', $phone);

        return $digits !== '' ? $digits : $phone;
    }
}
