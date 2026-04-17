<?php

namespace App\Http\Controllers\User;

use App\Enums\CategoryType;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\View\View;

class ServiceProviderController extends Controller
{
    public function index(): View
    {
        $serviceProviderCategories = Category::query()
            ->where('type', CategoryType::ServiceProvider)
            ->orderBy('name_en')
            ->get();

        return view('user.pages.service-provider', compact('serviceProviderCategories'));
    }
}
