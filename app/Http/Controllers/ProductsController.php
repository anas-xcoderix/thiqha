<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProductsController extends Controller
{
    public function index(): View
    {
        return view('pages.products');
    }

    public function show(string $product): View
    {
        return view('pages.product-details', [
            'id' => (int) $product,
        ]);
    }
}
