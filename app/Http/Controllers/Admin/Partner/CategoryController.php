<?php

namespace App\Http\Controllers\Admin\Partner;

use App\Enums\CategoryType;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Partner\StorePartnerCategoryRequest;
use App\Http\Requests\Admin\Partner\UpdatePartnerCategoryRequest;
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

        return view('admin.partner.categories.index', compact('categories'));
    }

    public function create(): View
    {
        return view('admin.partner.categories.create');
    }

    public function store(StorePartnerCategoryRequest $request): RedirectResponse
    {
        $this->categoryService->create(
            $request->safe()->only(['name_en', 'name_ar']),
            CategoryType::ServiceProvider,
            $request->file('logo'),
        );

        return redirect()
            ->route('admin.partner.categories.index')
            ->with('status', __('Partner category created successfully.'));
    }

    public function show(Category $category): View
    {
        $this->ensureServiceProvider($category);

        return view('admin.partner.categories.show', compact('category'));
    }

    public function edit(Category $category): View
    {
        $this->ensureServiceProvider($category);

        return view('admin.partner.categories.edit', compact('category'));
    }

    public function update(UpdatePartnerCategoryRequest $request, Category $category): RedirectResponse
    {
        $this->ensureServiceProvider($category);

        $this->categoryService->update(
            $category,
            $request->safe()->only(['name_en', 'name_ar']),
            $request->file('logo'),
        );

        return redirect()
            ->route('admin.partner.categories.index')
            ->with('status', __('Partner category updated successfully.'));
    }

    public function destroy(Category $category): RedirectResponse
    {
        $this->ensureServiceProvider($category);

        $this->categoryService->delete($category);

        return redirect()
            ->route('admin.partner.categories.index')
            ->with('status', __('Partner category deleted successfully.'));
    }

    private function ensureServiceProvider(Category $category): void
    {
        abort_unless($category->type === CategoryType::ServiceProvider, 404);
    }
}
