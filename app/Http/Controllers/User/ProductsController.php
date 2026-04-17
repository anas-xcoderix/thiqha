<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ProductsController extends Controller
{
    public function index(): View
    {
        return view('user.pages.products');
    }

    public function show(string $product): View
    {
        return view('user.pages.product-details', [
            'id' => (int) $product,
        ]);
    }
}
