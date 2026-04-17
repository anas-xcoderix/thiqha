<?php

namespace App\Services\Inventory;

use App\Models\Inventory;
use Illuminate\Pagination\LengthAwarePaginator;

class InventoryService
{
    public function paginateForAdmin(int $perPage = 15): LengthAwarePaginator
    {
        return Inventory::query()
            ->with(['product.category'])
            ->latest('id')
            ->paginate($perPage)
            ->withQueryString();
    }

    public function updateStock(Inventory $inventory, int $stock): Inventory
    {
        $inventory->stock = max(0, $stock);
        $inventory->save();

        return $inventory->fresh(['product.category']);
    }
}
