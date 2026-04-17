<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Service\StoreServiceRequest;
use App\Http\Requests\Admin\Service\UpdateServiceRequest;
use App\Models\Service;
use App\Services\Catalog\ServiceCatalogService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function __construct(
        private readonly ServiceCatalogService $serviceCatalog,
    ) {}

    public function index(): View
    {
        $services = $this->serviceCatalog->paginate();

        return view('admin.services.index', compact('services'));
    }

    public function create(): View
    {
        return view('admin.services.create');
    }

    public function store(StoreServiceRequest $request): RedirectResponse
    {
        $this->serviceCatalog->create(
            $request->safe()->only(['name_en', 'name_ar', 'sort_order']),
            $request->file('logo'),
        );

        return redirect()
            ->route('admin.services.index')
            ->with('status', __('Thiqah service created successfully.'));
    }

    public function show(Service $service): View
    {
        return view('admin.services.show', compact('service'));
    }

    public function edit(Service $service): View
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(UpdateServiceRequest $request, Service $service): RedirectResponse
    {
        $this->serviceCatalog->update(
            $service,
            $request->safe()->only(['name_en', 'name_ar', 'sort_order']),
            $request->file('logo'),
        );

        return redirect()
            ->route('admin.services.index')
            ->with('status', __('Thiqah service updated successfully.'));
    }

    public function destroy(Service $service): RedirectResponse
    {
        $this->serviceCatalog->delete($service);

        return redirect()
            ->route('admin.services.index')
            ->with('status', __('Thiqah service deleted successfully.'));
    }
}
