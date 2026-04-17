<?php

namespace App\Http\Controllers\User\Auth;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    public function store(RegisterUserRequest $request): RedirectResponse
    {
        $user = User::create([
            ...$request->safe()->only(['name', 'email', 'phone']),
            'password' => Hash::make($request->password),
            'role' => UserRole::User,
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect('/')->with('status', __('Your account has been created.'));
    }
}
