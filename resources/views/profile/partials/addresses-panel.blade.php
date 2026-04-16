{{-- Expects: $user (App\Models\User) with address relationship loaded --}}
@php
    $regions = config('profile.regions', []);
    $address = $user->address;
@endphp

<div class="bg-white rounded-2xl shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] px-8 py-7 flex flex-col box-border w-full 2xl:max-w-[90rem]">
    <h2 class="text-[18px] font-bold mb-6">{{ __('Address') }}</h2>
    <form method="post" action="{{ $address ? route('address.update', $address) : route('address.store') }}" class="flex flex-col gap-4">
        @csrf
        @if ($address)
            @method('PUT')
        @endif
        <div>
            <label class="text-[14px] font-bold mb-1.5 block">{{ __('Region') }} <span class="text-red-500">*</span></label>
            <div class="h-[42px] border border-[#dde3ee] rounded-lg flex items-center px-3.5 bg-white w-full max-w-[80%] relative @error('region') border-red-500 @enderror">
                <select name="region" required class="flex-1 h-full text-[13px] text-primary focus:outline-none bg-transparent appearance-none pr-8 cursor-pointer">
                    @unless ($address)
                        <option value="" disabled @selected(! old('region'))>{{ __('Choose Region') }}</option>
                    @endunless
                    @foreach ($regions as $value => $label)
                        <option value="{{ $value }}" @selected(old('region', $address?->region) === $value)>{{ $label }}</option>
                    @endforeach
                </select>
                <div class="absolute right-3 pointer-events-none text-[#b0b8c9]">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                </div>
            </div>
            <x-auth.field-error name="region"/>
        </div>
        <div>
            <label class="text-[14px] font-bold mb-1.5 block text-right w-full max-w-[80%]">{{ __('Piece number') }} <span class="text-red-500">*</span></label>
            <input type="text" name="piece_number" value="{{ old('piece_number', $address?->piece_number) }}" required dir="rtl" placeholder="{{ __('Enter number') }}"
                   class="h-[42px] border border-[#dde3ee] rounded-lg px-3.5 text-[13px] text-primary placeholder-[#b0b8c9] focus:outline-none focus:border-primary w-full max-w-[80%] text-right @error('piece_number') border-red-500 @enderror"/>
            <x-auth.field-error name="piece_number"/>
        </div>
        <div>
            <label class="text-[14px] font-bold mb-1.5 block">{{ __('Street Name') }} <span class="text-red-500">*</span></label>
            <input type="text" name="street_name" value="{{ old('street_name', $address?->street_name) }}" required placeholder="{{ __('Enter Name') }}"
                   class="h-[42px] border border-[#dde3ee] rounded-lg px-3.5 text-[13px] text-primary placeholder-[#b0b8c9] focus:outline-none focus:border-primary w-full max-w-[80%] @error('street_name') border-red-500 @enderror"/>
            <x-auth.field-error name="street_name"/>
        </div>
        <div>
            <label class="text-[14px] font-bold mb-1.5 block">{{ __('Building Number') }} <span class="text-red-500">*</span></label>
            <input type="text" name="building_number" value="{{ old('building_number', $address?->building_number) }}" required placeholder="{{ __('Enter Number') }}"
                   class="h-[42px] border border-[#dde3ee] rounded-lg px-3.5 text-[13px] text-primary placeholder-[#b0b8c9] focus:outline-none focus:border-primary w-full max-w-[80%] @error('building_number') border-red-500 @enderror"/>
            <x-auth.field-error name="building_number"/>
        </div>
        <div>
            <label class="text-[14px] font-bold mb-1.5 block">{{ __('Floor') }}</label>
            <input type="text" name="floor" value="{{ old('floor', $address?->floor) }}" placeholder="{{ __('Enter Floor') }}"
                   class="h-[42px] border border-[#dde3ee] rounded-lg px-3.5 text-[13px] text-primary placeholder-[#b0b8c9] focus:outline-none focus:border-primary w-full max-w-[80%] @error('floor') border-red-500 @enderror"/>
            <x-auth.field-error name="floor"/>
        </div>
        <div>
            <label class="text-[14px] font-bold mb-1.5 block">{{ __('Flat') }}</label>
            <input type="text" name="flat" value="{{ old('flat', $address?->flat) }}" placeholder="{{ __('Enter Flat') }}"
                   class="h-[42px] border border-[#dde3ee] rounded-lg px-3.5 text-[13px] text-primary placeholder-[#b0b8c9] focus:outline-none focus:border-primary w-full max-w-[80%] @error('flat') border-red-500 @enderror"/>
            <x-auth.field-error name="flat"/>
        </div>
        <div class="mt-6">
            <button type="submit" class="h-[46px] bg-[#20395D] text-white rounded-[10px] text-[15px] font-bold transition-colors w-full max-w-[80%]">{{ __('Save address') }}</button>
        </div>
    </form>
</div>
