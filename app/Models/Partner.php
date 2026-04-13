<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Partner extends Model
{
    protected $fillable = [
        'user_id',
        'official_company_trade_name',
        'commercial_registration_number',
        'commercial_registration_copy_path',
        'chamber_commerce_certificate_path',
        'municipal_license_path',
        'civil_id_signatory_path',
        'copy_signatory_civil_id_path',
        'official_power_of_attorney_path',
        'account_manager_name',
        'number_of_employees',
        'operations_phone',
        'office_address',
        'website_link',
        'company_bank_account_name',
        'iban',
        'bank_authorization_letter',
        'declaration_account_file_path',
        'activity_classification',
        'specification',
    ];

    protected function casts(): array
    {
        return [
            'number_of_employees' => 'integer',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
