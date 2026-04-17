<?php

namespace App\Http\Controllers\User;

use App\Enums\CategoryType;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Category;
use App\Services\User\ProductCatalogService;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(
        private readonly ProductCatalogService $productCatalog,
    ) {}

    public function index(): View
    {
        $thiqahServices = Service::query()
            ->orderBy('sort_order')
            ->orderBy('id')
            ->limit(5)
            ->get();

        $serviceProviderCategories = Category::query()
            ->where('type', CategoryType::ServiceProvider)
            ->orderBy('name_en')
            ->get();

        $productCategories = Category::query()
            ->where('type', CategoryType::Product)
            ->orderBy('name_en')
            ->get();

        $homeProducts = $this->productCatalog->featuredForHome(24);

        return view('user.pages.home', compact('serviceProviderCategories', 'productCategories', 'homeProducts', 'thiqahServices'));
    }
}
