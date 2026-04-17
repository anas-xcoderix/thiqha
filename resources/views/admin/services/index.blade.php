@extends('admin.layouts.app')

@section('title', __('Thiqah services'))
@section('heading', __('Thiqah services'))
@section('subheading', __('Home page “Thiqah Services” cards — stored in the services table.'))

@section('content')
    <div class="mb-6 flex flex-wrap items-center justify-between gap-3">
        <p class="text-sm text-gray-600">{{ __('Manage offerings shown on the public home page.') }}</p>
        <a href="{{ route('admin.services.create') }}" class="btn-leaf inline-flex items-center gap-2 bg-primary px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-navy">
            <i class="fa-solid fa-plus" aria-hidden="true"></i>
            {{ __('Add service') }}
        </a>
    </div>

    <div class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-card">
        <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm">
                <thead class="border-b border-gray-100 bg-cream/50 text-xs font-semibold uppercase tracking-wide text-gray-500">
                    <tr>
                        <th class="px-5 py-3">{{ __('Order') }}</th>
                        <th class="px-5 py-3">{{ __('Icon') }}</th>
                        <th class="px-5 py-3">{{ __('Name (EN)') }}</th>
                        <th class="px-5 py-3">{{ __('Name (AR)') }}</th>
                        <th class="px-5 py-3 text-right">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-gray-700">
                    @forelse ($services as $service)
                        <tr class="hover:bg-cream/40">
                            <td class="px-5 py-3 text-gray-500">{{ $service->sort_order }}</td>
                            <td class="px-5 py-3">
                                <div class="inline-flex items-center justify-center py-0.5">
                                    <div class="flex h-12 w-12 shrink-0 rotate-45 items-center justify-center rounded-[14px] bg-[#816EA2] shadow-lg shadow-[#9381BB]/20">
                                        <div class="-rotate-45">
                                            <img src="{{ $service->iconForDisplay() }}" alt="" class="h-6 w-6 object-contain brightness-0 invert">
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-3 font-medium text-navy">{{ $service->name_en }}</td>
                            <td class="px-5 py-3" dir="rtl">{{ $service->name_ar }}</td>
                            <td class="px-5 py-3 text-right">
                                <div class="flex flex-wrap justify-end gap-2">
                                    <a href="{{ route('admin.services.show', $service) }}" class="rounded-lg border border-gray-200 px-2.5 py-1.5 text-xs font-semibold text-navy hover:bg-cream">{{ __('View') }}</a>
                                    <a href="{{ route('admin.services.edit', $service) }}" class="rounded-lg border border-primary/25 bg-primary/5 px-2.5 py-1.5 text-xs font-semibold text-primary hover:bg-primary/10">{{ __('Edit') }}</a>
                                    <form action="{{ route('admin.services.destroy', $service) }}" method="post" class="inline" onsubmit="return confirm(@json(__('Delete this service?')));">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="rounded-lg border border-red-200 bg-red-50 px-2.5 py-1.5 text-xs font-semibold text-red-700 hover:bg-red-100">{{ __('Delete') }}</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-5 py-12 text-center text-sm text-gray-500">{{ __('No services yet. Run the seeder or add one.') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if ($services->hasPages())
            <div class="border-t border-gray-100 bg-white px-5 py-4">
                {{ $services->links() }}
            </div>
        @endif
    </div>
@endsection
