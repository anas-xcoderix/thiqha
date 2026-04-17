<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Partner\RegisterPartnerRequest;
use App\Services\Partner\PartnerRegistrationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class PartnerRegisterController extends Controller
{
    public function __construct(
        private readonly PartnerRegistrationService $partnerRegistrationService,
    ) {}

    public function store(RegisterPartnerRequest $request): RedirectResponse
    {
        $user = $this->partnerRegistrationService->register($request);

        Auth::login($user);

        return redirect('/')->with('status', __('Your partner application has been submitted.'));
    }
}
