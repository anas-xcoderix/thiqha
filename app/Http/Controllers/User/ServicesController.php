<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ServicesController extends Controller
{
    public function index(): View
    {
        return view('user.pages.services');
    }
}
