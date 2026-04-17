<?php

namespace App\Http\Controllers\Partner;

use App\Enums\CategoryType;
use App\Http\Controllers\Controller;
use App\Http\Requests\Partner\Category\StoreCategoryRequest;
use App\Http\Requests\Partner\Category\UpdateCategoryRequest;
use App\Models\Category;
use App\Services\Category\CategoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function __construct(
        private readonly CategoryService $categoryService,
    ) {}

    public function index(): View
    {
        $categories = $this->categoryService->paginateByType(CategoryType::ServiceProvider);

        return view('partner.categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('partner.categories.create');
    }

    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        $this->categoryService->create(
            $request->safe()->only(['name_en', 'name_ar']),
            CategoryType::ServiceProvider,
            $request->file('logo'),
        );

        return redirect()
            ->route('partner.categories.index')
            ->with('status', __('Category created successfully.'));
    }

    public function show(Category $category): View
    {
        $this->ensureServiceProvider($category);

        return view('partner.categories.show', compact('category'));
    }

    public function edit(Category $category): View
    {
        $this->ensureServiceProvider($category);

        return view('partner.categories.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category): RedirectResponse
    {
        $this->ensureServiceProvider($category);

        $this->categoryService->update(
            $category,
            $request->safe()->only(['name_en', 'name_ar']),
            $request->file('logo'),
        );

        return redirect()
            ->route('partner.categories.index')
            ->with('status', __('Category updated successfully.'));
    }

    public function destroy(Category $category): RedirectResponse
    {
        $this->ensureServiceProvider($category);

        $this->categoryService->delete($category);

        return redirect()
            ->route('partner.categories.index')
            ->with('status', __('Category deleted successfully.'));
    }

    private function ensureServiceProvider(Category $category): void
    {
        abort_unless($category->type === CategoryType::ServiceProvider, 404);
    }
}
