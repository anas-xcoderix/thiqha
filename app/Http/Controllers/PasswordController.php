<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\UpdateProfilePasswordRequest;
use App\Models\User;
use App\Services\Profile\ProfilePasswordService;
use Illuminate\Http\RedirectResponse;

class PasswordController extends Controller
{
    public function __construct(
        private readonly ProfilePasswordService $profilePasswordService,
    ) {}

    public function update(UpdateProfilePasswordRequest $request, User $password): RedirectResponse
    {
        $this->profilePasswordService->update($password, $request->validated('password'));

        return redirect()
            ->route('profile.index')
            ->with('alert', [
                'type' => 'success',
                'title' => __('Password updated'),
                'message' => __('Your password has been changed.'),
            ]);
    }
}
