<?php

namespace App\Services;

use App\Enums\UserRole;
use App\Http\Requests\Auth\RegisterPartnerRequest;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Contracts\Filesystem\Factory as FilesystemFactory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PartnerRegistrationService
{
    private const DOCUMENT_DISK = 'public';

    private const DOCUMENT_DIRECTORY = 'partners/documents';

    /**
     * Request file input name => Partner model column for stored path.
     *
     * @var array<string, string>
     */
    private const DOCUMENT_FILE_TO_PATH_COLUMN = [
        'commercial_registration_copy' => 'commercial_registration_copy_path',
        'chamber_commerce_certificate' => 'chamber_commerce_certificate_path',
        'civil_id_signatory' => 'civil_id_signatory_path',
        'official_power_of_attorney' => 'official_power_of_attorney_path',
        'declaration_account_file' => 'declaration_account_file_path',
        'municipal_license' => 'municipal_license_path',
        'copy_signatory_civil_id' => 'copy_signatory_civil_id_path',
    ];

    public function __construct(
        private readonly FilesystemFactory $filesystem,
    ) {}

    public function register(RegisterPartnerRequest $request): User
    {
        return $this->registerWithValidatedData(
            $request->validated(),
            $this->collectUploadedDocuments($request),
        );
    }

    /**
     * Register a partner from validated payload and uploaded files (useful for tests and non-HTTP callers).
     *
     * @param  array<string, mixed>  $validated
     * @param  array<string, UploadedFile>  $documentFiles  Keys match request file input names.
     */
    public function registerWithValidatedData(array $validated, array $documentFiles): User
    {
        return DB::transaction(function () use ($validated, $documentFiles) {
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'password' => Hash::make($validated['password']),
                'role' => UserRole::Partner,
            ]);

            $documentPaths = $this->persistDocumentUploads($documentFiles);

            Partner::create([
                'user_id' => $user->id,
                'official_company_trade_name' => $validated['official_company_trade_name'],
                'commercial_registration_number' => $validated['commercial_registration_number'],
                'account_manager_name' => $validated['account_manager_name'],
                'number_of_employees' => $validated['number_of_employees'],
                'operations_phone' => $validated['operations_phone'],
                'office_address' => $validated['office_address'] ?? null,
                'website_link' => $validated['website_link'] ?? null,
                'company_bank_account_name' => $validated['company_bank_account_name'],
                'iban' => $validated['iban'],
                'bank_authorization_letter' => $validated['bank_authorization_letter'] ?? null,
                'activity_classification' => $validated['activity_classification'],
                'specification' => $validated['specification'],
                ...$documentPaths,
            ]);

            return $user;
        });
    }

    /**
     * @return array<string, UploadedFile>
     */
    private function collectUploadedDocuments(RegisterPartnerRequest $request): array
    {
        $files = [];

        foreach (array_keys(self::DOCUMENT_FILE_TO_PATH_COLUMN) as $inputName) {
            if (! $request->hasFile($inputName)) {
                continue;
            }

            /** @var UploadedFile $file */
            $file = $request->file($inputName);
            $files[$inputName] = $file;
        }

        return $files;
    }

    /**
     * @param  array<string, UploadedFile>  $documentFiles
     * @return array<string, string>
     */
    private function persistDocumentUploads(array $documentFiles): array
    {
        $paths = [];

        foreach (self::DOCUMENT_FILE_TO_PATH_COLUMN as $inputName => $columnName) {
            $file = $documentFiles[$inputName] ?? null;

            if (! $file instanceof UploadedFile) {
                continue;
            }

            $paths[$columnName] = $this->filesystem
                ->disk(self::DOCUMENT_DISK)
                ->putFile(self::DOCUMENT_DIRECTORY, $file);
        }

        return $paths;
    }
}
