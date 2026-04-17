<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Profile\UpdateProfilePasswordRequest;
use App\Models\User;
use App\Services\User\Profile\ProfilePasswordService;
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
