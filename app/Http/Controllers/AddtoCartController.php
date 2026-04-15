<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddtoCartController extends Controller
{
    public function index()
    {
        return view('pages.add-to-cart');
    }
}
