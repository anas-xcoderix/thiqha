<?php

namespace App\Http\Controllers\User;

use App\Enums\CategoryType;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Services\User\ProductCatalogService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductsController extends Controller
{
    public function __construct(
        private readonly ProductCatalogService $productCatalog,
    ) {}

    public function index(Request $request): View
    {
        $productCategories = Category::query()
            ->where('type', CategoryType::Product)
            ->orderBy('name_en')
            ->get();

        $activeCategoryId = $request->integer('category_id') ?: null;

        $products = $this->productCatalog->paginatedForStorefront($activeCategoryId, 12);

        return view('user.pages.products', compact('productCategories', 'products', 'activeCategoryId'));
    }

    public function show(Product $product): View
    {
        abort_unless(
            $product->category && $product->category->type === CategoryType::Product,
            404
        );

        $product->load([
            'images' => fn ($q) => $q->orderBy('sort_order')->orderBy('id'),
            'category',
            'inventory',
        ]);

        $relatedProducts = $this->productCatalog->relatedInCategory(
            (int) $product->category_id,
            (int) $product->id,
            8,
        );

        return view('user.pages.product-details', compact('product', 'relatedProducts'));
    }
}
