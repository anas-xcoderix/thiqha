<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CategoryType;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductCategory\StoreProductCategoryRequest;
use App\Http\Requests\Admin\ProductCategory\UpdateProductCategoryRequest;
use App\Models\Category;
use App\Services\Category\CategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductCategoryController extends Controller
{
    public function __construct(
        private readonly CategoryService $categoryService,
    ) {}

    public function index(): View
    {
        $categories = $this->categoryService->paginateByType(CategoryType::Product);

        return view('admin.product-categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('admin.product-categories.create');
    }

    public function store(StoreProductCategoryRequest $request): RedirectResponse
    {
        $this->categoryService->create(
            $request->safe()->only(['name_en', 'name_ar']),
            CategoryType::Product,
            $request->file('logo'),
        );

        return redirect()
            ->route('admin.product-categories.index')
            ->with('status', __('Product category created successfully.'));
    }

    public function show(Category $category): View
    {
        $this->ensureProduct($category);

        return view('admin.product-categories.show', compact('category'));
    }

    public function edit(Category $category): View
    {
        $this->ensureProduct($category);

        return view('admin.product-categories.edit', compact('category'));
    }

    public function update(UpdateProductCategoryRequest $request, Category $category): RedirectResponse
    {
        $this->ensureProduct($category);

        $this->categoryService->update(
            $category,
            $request->safe()->only(['name_en', 'name_ar']),
            $request->file('logo'),
        );

        return redirect()
            ->route('admin.product-categories.index')
            ->with('status', __('Product category updated successfully.'));
    }

    public function destroy(Category $category): RedirectResponse
    {
        $this->ensureProduct($category);

        $this->categoryService->delete($category);

        return redirect()
            ->route('admin.product-categories.index')
            ->with('status', __('Product category deleted successfully.'));
    }

    private function ensureProduct(Category $category): void
    {
        abort_unless($category->type === CategoryType::Product, 404);
    }
}
