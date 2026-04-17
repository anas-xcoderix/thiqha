<?php

namespace App\Services\Catalog;

use App\Models\Service;
use Illuminate\Http\UploadedFile;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;

class ServiceCatalogService
{
    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return Service::query()
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->paginate($perPage)
            ->withQueryString();
    }

    /**
     * @param  array{name_en: string, name_ar: string, sort_order?: int|string|null}  $data
     */
    public function create(array $data, UploadedFile $logo): Service
    {
        $path = $this->storeLogo($logo);

        return Service::query()->create([
            'slug' => Service::uniqueSlugFromEnglishName($data['name_en']),
            'name_en' => $data['name_en'],
            'name_ar' => $data['name_ar'],
            'sort_order' => (int) ($data['sort_order'] ?? 0),
            'logo' => $path,
        ]);
    }

    /**
     * @param  array{name_en: string, name_ar: string, sort_order?: int|string|null}  $data
     */
    public function update(Service $service, array $data, ?UploadedFile $logo = null): Service
    {
        if ($logo !== null) {
            $this->deleteUploadedLogoIfAny($service->logo);
            $service->logo = $this->storeLogo($logo);
        }

        $service->name_en = $data['name_en'];
        $service->name_ar = $data['name_ar'];
        $service->sort_order = (int) ($data['sort_order'] ?? 0);
        $service->save();

        return $service->refresh();
    }

    public function delete(Service $service): void
    {
        $this->deleteUploadedLogoIfAny($service->logo);
        $service->delete();
    }

    private function storeLogo(UploadedFile $file): string
    {
        return $file->store('services', 'public');
    }

    private function deleteUploadedLogoIfAny(?string $path): void
    {
        if (! Service::isStoredUpload($path)) {
            return;
        }

        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
