{{-- Expects: $user (App\Models\User) --}}
<div class="bg-white rounded-2xl shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] px-8 py-7 flex flex-col justify-between box-border 2xl:max-w-[90rem] min-h-[432px]">
    <h2 class="text-[18px] font-bold mb-5">{{ __('Edit Info') }}</h2>
    <form method="post" action="{{ route('profile.update', ['profile' => $user]) }}" class="flex flex-col gap-4 flex-1">
        @csrf
        @method('PUT')
        <div>
            <label class="text-[14px] font-bold mb-1.5 block" for="profile_name">{{ __('Full Name') }} <span class="text-red-500">*</span></label>
            <input id="profile_name" type="text" name="name" value="{{ old('name', $user->name) }}" required
                   class="h-[42px] border border-[#dde3ee] rounded-lg px-3.5 text-[13px] text-primary placeholder-[#b0b8c9] focus:outline-none focus:border-primary w-full max-w-[80%] @error('name') border-red-500 @enderror"/>
            <x-auth.field-error name="name"/>
        </div>
        <div>
            <label class="text-[14px] font-bold mb-1.5 block" for="profile_email">{{ __('Email') }} <span class="text-red-500">*</span></label>
            <input id="profile_email" type="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="username"
                   class="h-[42px] border border-[#dde3ee] rounded-lg px-3.5 text-[13px] text-primary placeholder-[#b0b8c9] focus:outline-none focus:border-primary w-full max-w-[80%] @error('email') border-red-500 @enderror"/>
            <x-auth.field-error name="email"/>
        </div>
        <div>
            <label class="text-[14px] font-bold mb-1.5 block" for="profile_phone">{{ __('Phone Number') }} <span class="text-red-500">*</span></label>
            <div class="h-[42px] border border-[#dde3ee] rounded-lg flex items-center overflow-hidden bg-white w-full max-w-[80%] @error('phone') border-red-500 @enderror">
                <div class="flex items-center gap-1.5 px-3 border-r border-[#dde3ee] h-full bg-[#faf8f4] shrink-0">
                    <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <rect width="22" height="5" fill="#007A3D"/>
                        <rect y="5" width="22" height="5" fill="#FFFFFF"/>
                        <rect y="10" width="22" height="5" fill="#CE1126"/>
                        <polygon points="0,0 7,7.5 0,15" fill="#000000"/>
                    </svg>
                    <span class="text-[13px] font-bold text-primary whitespace-nowrap">+965</span>
                </div>
                <input id="profile_phone" type="tel" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="{{ __('Enter Phone') }}"
                       class="flex-1 h-full px-3 text-[13px] text-primary placeholder-[#b0b8c9] focus:outline-none bg-transparent"/>
            </div>
            <x-auth.field-error name="phone"/>
        </div>
        <div class="mt-5">
            <button type="submit" class="h-[46px] bg-[#20395D] text-white rounded-[10px] text-[15px] font-bold transition-colors w-full max-w-[80%]">{{ __('Save changes') }}</button>
        </div>
    </form>
</div>

<div class="bg-white rounded-2xl shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] px-8 py-6 flex flex-col justify-between box-border w-full 2xl:max-w-[90rem] min-h-[392px]">
    <h2 class="text-[18px] font-bold mb-5">{{ __('Change Password') }}</h2>
    <form method="post" action="{{ route('password.update', ['password' => $user]) }}" class="flex flex-col gap-4 flex-1">
        @csrf
        @method('PUT')
        <div>
            <label class="text-[14px] font-bold mb-1.5 block" for="current_password">{{ __('Current password') }}</label>
            <div class="h-[42px] border border-[#dde3ee] rounded-lg flex items-center px-3.5 bg-white w-full max-w-[80%] @error('current_password') border-red-500 @enderror">
                <input id="current_password" type="password" name="current_password" required autocomplete="current-password" placeholder="{{ __('Enter Password') }}"
                       class="flex-1 text-[13px] text-primary placeholder-[#b0b8c9] focus:outline-none bg-transparent"/>
            </div>
            <x-auth.field-error name="current_password"/>
        </div>
        <div>
            <label class="text-[14px] font-bold mb-1.5 block" for="new_password">{{ __('New Password') }}</label>
            <div class="h-[42px] border border-[#dde3ee] rounded-lg flex items-center px-3.5 bg-white w-full max-w-[80%] @error('password') border-red-500 @enderror">
                <input id="new_password" type="password" name="password" required autocomplete="new-password" placeholder="{{ __('Enter Password') }}"
                       class="flex-1 text-[13px] text-primary placeholder-[#b0b8c9] focus:outline-none bg-transparent"/>
            </div>
            <x-auth.field-error name="password"/>
        </div>
        <div>
            <label class="text-[14px] font-bold mb-1.5 block" for="new_password_confirmation">{{ __('Confirm New Password') }}</label>
            <div class="h-[42px] border border-[#dde3ee] rounded-lg flex items-center px-3.5 bg-white w-full max-w-[80%]">
                <input id="new_password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Enter Password') }}"
                       class="flex-1 text-[13px] text-primary placeholder-[#b0b8c9] focus:outline-none bg-transparent"/>
            </div>
        </div>
        <div class="mt-5">
            <button type="submit" class="h-[46px] bg-[#20395D] text-white rounded-[10px] text-[15px] font-bold transition-colors w-full max-w-[80%]">{{ __('Update password') }}</button>
        </div>
    </form>
</div>
