<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();

            $table->string('official_company_trade_name');
            $table->string('commercial_registration_number');
            $table->string('commercial_registration_copy_path')->nullable();
            $table->string('chamber_commerce_certificate_path')->nullable();
            $table->string('municipal_license_path')->nullable();
            $table->string('civil_id_signatory_path')->nullable();
            $table->string('copy_signatory_civil_id_path')->nullable();
            $table->string('official_power_of_attorney_path')->nullable();

            $table->string('account_manager_name')->nullable();
            $table->unsignedInteger('number_of_employees')->nullable();
            $table->string('operations_phone', 32)->nullable();
            $table->string('office_address')->nullable();
            $table->string('website_link')->nullable();

            $table->string('company_bank_account_name')->nullable();
            $table->string('iban', 64)->nullable();
            $table->text('bank_authorization_letter')->nullable();
            $table->string('declaration_account_file_path')->nullable();
            $table->string('activity_classification')->nullable();
            $table->string('specification')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
