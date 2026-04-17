<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('user.auth.register');
    }
}
