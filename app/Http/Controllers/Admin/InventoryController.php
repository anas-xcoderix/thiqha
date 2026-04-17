<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Inventory\UpdateInventoryRequest;
use App\Models\Inventory;
use App\Services\Inventory\InventoryService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class InventoryController extends Controller
{
    public function __construct(
        private readonly InventoryService $inventoryService,
    ) {}

    public function index(): View
    {
        $inventories = $this->inventoryService->paginateForAdmin();

        return view('admin.inventory.index', compact('inventories'));
    }

    public function show(Inventory $inventory): View
    {
        $inventory->load(['product.category', 'product.images']);

        return view('admin.inventory.show', compact('inventory'));
    }

    public function edit(Inventory $inventory): View
    {
        $inventory->load(['product.category']);

        return view('admin.inventory.edit', compact('inventory'));
    }

    public function update(UpdateInventoryRequest $request, Inventory $inventory): RedirectResponse
    {
        $this->inventoryService->updateStock($inventory, (int) $request->validated('stock'));

        return redirect()
            ->route('admin.inventory.index')
            ->with('status', __('Inventory updated successfully.'));
    }
}
