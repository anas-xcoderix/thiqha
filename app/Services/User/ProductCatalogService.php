<?php

namespace App\Services\User;

use App\Enums\CategoryType;
use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class ProductCatalogService
{
    /**
     * @return Collection<int, Product>
     */
    public function featuredForHome(int $limit = 24): Collection
    {
        return Product::query()
            ->whereHas('category', fn ($q) => $q->where('type', CategoryType::Product))
            ->with([
                'images' => fn ($q) => $q->orderBy('sort_order')->orderBy('id'),
                'category',
            ])
            ->latest('id')
            ->limit($limit)
            ->get();
    }

    public function paginatedForStorefront(?int $categoryId, int $perPage = 12): LengthAwarePaginator
    {
        return Product::query()
            ->whereHas('category', fn ($q) => $q->where('type', CategoryType::Product))
            ->when($categoryId, fn ($q, int $id) => $q->where('category_id', $id))
            ->with([
                'images' => fn ($q) => $q->orderBy('sort_order')->orderBy('id'),
                'category',
            ])
            ->latest('id')
            ->paginate($perPage)
            ->withQueryString();
    }

    /**
     * @return Collection<int, Product>
     */
    public function relatedInCategory(int $categoryId, int $excludeProductId, int $limit = 8): Collection
    {
        return Product::query()
            ->where('category_id', $categoryId)
            ->where('id', '!=', $excludeProductId)
            ->with([
                'images' => fn ($q) => $q->orderBy('sort_order')->orderBy('id'),
                'category',
            ])
            ->latest('id')
            ->limit($limit)
            ->get();
    }
}
