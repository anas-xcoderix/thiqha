<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\UpdateProfileInformationRequest;
use App\Models\User;
use App\Services\Profile\ProfileInformationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function __construct(
        private readonly ProfileInformationService $profileInformationService,
    ) {}

    public function index(Request $request): View
    {
        $user = $request->user()->load('address');

        return view('pages.profile', compact('user'));
    }

    public function update(UpdateProfileInformationRequest $request, User $profile): RedirectResponse
    {
        $this->profileInformationService->update($profile, $request->validated());

        return redirect()
            ->route('profile.index')
            ->with('alert', [
                'type' => 'success',
                'title' => __('Profile updated'),
                'message' => __('Your details were saved.'),
            ]);
    }
}
