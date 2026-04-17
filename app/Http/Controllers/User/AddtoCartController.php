<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AddtoCartController extends Controller
{
    public function index(): View
    {
        return view('user.pages.add-to-cart');
    }
}
