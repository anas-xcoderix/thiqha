<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreProductRequest;
use App\Http\Requests\Admin\Product\UpdateProductRequest;
use App\Models\Product;
use App\Services\Category\CategoryService;
use App\Services\Product\ProductService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function __construct(
        private readonly ProductService $productService,
        private readonly CategoryService $categoryService,
    ) {}

    public function index(): View
    {
        $products = $this->productService->paginateForAdmin();

        return view('admin.products.index', compact('products'));
    }

    public function create(): View
    {
        $productCategories = $this->categoryService->productCategoriesForSelect();

        return view('admin.products.create', compact('productCategories'));
    }

    public function store(StoreProductRequest $request): RedirectResponse
    {
        $images = array_values(array_filter((array) $request->file('images', [])));

        $this->productService->create(
            $this->productService->normalizeProductPayload(
                $request->safe()->only([
                    'name_en', 'name_ar', 'category_id', 'detail_en', 'detail_ar',
                    'specification_en', 'specification_ar', 'price', 'discount_type', 'discount',
                ])->all()
            ),
            $images,
            (int) $request->validated('stock'),
        );

        return redirect()
            ->route('admin.products.index')
            ->with('status', __('Product created successfully.'));
    }

    public function show(Product $product): View
    {
        $product->load(['category', 'images', 'inventory']);

        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product): View
    {
        $product->load(['images', 'inventory']);
        $productCategories = $this->categoryService->productCategoriesForSelect();

        return view('admin.products.edit', compact('product', 'productCategories'));
    }

    public function update(UpdateProductRequest $request, Product $product): RedirectResponse
    {
        $deleteIds = array_map('intval', (array) ($request->validated('delete_image_ids') ?? []));
        $newImages = array_values(array_filter((array) $request->file('images', [])));

        $this->productService->update(
            $product,
            $this->productService->normalizeProductPayload(
                $request->safe()->only([
                    'name_en', 'name_ar', 'category_id', 'detail_en', 'detail_ar',
                    'specification_en', 'specification_ar', 'price', 'discount_type', 'discount',
                ])->all()
            ),
            $newImages,
            $deleteIds,
        );

        return redirect()
            ->route('admin.products.index')
            ->with('status', __('Product updated successfully.'));
    }

    public function destroy(Product $product): RedirectResponse
    {
        $this->productService->delete($product);

        return redirect()
            ->route('admin.products.index')
            ->with('status', __('Product deleted successfully.'));
    }
}
