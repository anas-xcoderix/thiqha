{{-- Expects: $user (App\Models\User) --}}
<p class="text-[15px] font-semibold tracking-[0.2px]">{{ $user->name }}</p>
<p class="mt-1 text-[13px] font-semibold text-[#868787] tracking-[0.4px] break-all">{{ $user->email }}</p>
<p class="mt-[3px] text-[13px] font-semibold text-[#868787]">{{ $user->phone ?: '—' }}</p>
