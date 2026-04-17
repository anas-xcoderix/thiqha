<?php

namespace App\Services\User\Auth;

use App\Enums\UserRole;
use App\Http\Requests\User\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class LoginService
{
    public function __construct(
        private readonly AuthFactory $auth,
    ) {}

    public function login(LoginRequest $request): RedirectResponse
    {
        $guard = $this->auth->guard();

        if (! $guard->attempt(
            $request->safe()->only(['email', 'password']),
            $request->boolean('remember')
        )) {
            $this->throwInvalidCredentialsException();
        }

        $request->session()->regenerate();

        $request->session()->flash('alert', [
            'type' => 'success',
            'title' => __('Welcome Back'),
        ]);

        /** @var User $user */
        $user = $guard->user();

        $defaultPath = match ($user->role) {
            UserRole::Admin => route('admin.dashboard'),
            UserRole::Partner => route('partner.dashboard'),
            default => route('home.index'),
        };

        return redirect()->intended($defaultPath);
    }

    private function throwInvalidCredentialsException(): never
    {
        $message = __('These credentials do not match our records.');

        $exception = ValidationException::withMessages([
            'email' => [$message],
        ]);

        $exception->response = back()
            ->withErrors(['email' => $message])
            ->onlyInput('email');

        throw $exception;
    }
}
