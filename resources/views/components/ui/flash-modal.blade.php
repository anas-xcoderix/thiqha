@props([
    'autoDismissMs' => 5000,
])

@php
    /** @var \Illuminate\Support\ViewErrorBag|null $errors */
    $errors = $errors ?? null;

    $flash = session('alert');
    if (is_array($flash)) {
        $flash = array_merge([
            'type' => 'success',
            'title' => '',
            'message' => null,
            'messages' => null,
        ], $flash);
        $flash['type'] = in_array($flash['type'], ['success', 'error'], true) ? $flash['type'] : 'success';
    } else {
        $flash = null;
    }

    if ($flash === null && session()->has('status') && (string) session('status') !== '') {
        $flash = [
            'type' => 'success',
            'title' => __('Your Request sent Successfully !'),
            'message' => (string) session('status'),
            'messages' => null,
        ];
    }

    if ($flash === null && session()->has('error') && (string) session('error') !== '') {
        $flash = [
            'type' => 'error',
            'title' => __('Unable to complete your request'),
            'message' => (string) session('error'),
            'messages' => null,
        ];
    }

    if ($flash === null && $errors instanceof \Illuminate\Support\MessageBag && $errors->isNotEmpty()) {
        $all = $errors->all();
        $flash = [
            'type' => 'error',
            'title' => __('Unable to complete your request'),
            'message' => null,
            'messages' => $all,
        ];
    }

    $autoDismissMs = max(0, (int) $autoDismissMs);
@endphp

@if (! empty($flash))
    @php
        $isSuccess = $flash['type'] === 'success';
        $toastRole = $isSuccess ? 'status' : 'alert';
    @endphp

    {{-- Scoped styles --}}
    <style>
        #thiqha-flash-toast {
            font-family: 'Figtree', 'Nunito', ui-rounded, system-ui, sans-serif;
        }

        #thiqha-flash-toast .toast-card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid rgba(0,0,0,0.07);
            box-shadow:
                0 2px 4px rgba(0,0,0,0.04),
                0 8px 24px rgba(0,0,0,0.08),
                0 24px 48px rgba(0,0,0,0.06);
            overflow: hidden;
            position: relative;
        }

        /* Progress bar */
        #thiqha-flash-toast .toast-progress {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            width: 100%;
            border-radius: 0 0 20px 20px;
            overflow: hidden;
        }
        #thiqha-flash-toast .toast-progress-inner {
            height: 100%;
            width: 100%;
            transform-origin: left center;
            border-radius: inherit;
            animation: toastShrink linear forwards;
        }

        #thiqha-flash-toast.is-success .toast-progress-inner {
            background: linear-gradient(90deg, #10b981, #34d399);
        }
        #thiqha-flash-toast.is-error .toast-progress-inner {
            background: linear-gradient(90deg, #ef4444, #f87171);
        }

        @keyframes toastShrink {
            from { transform: scaleX(1); }
            to   { transform: scaleX(0); }
        }

        /* Icon ring */
        #thiqha-flash-toast .icon-ring {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        #thiqha-flash-toast.is-success .icon-ring {
            background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%);
            border: 1.5px solid rgba(16,185,129,0.2);
        }
        #thiqha-flash-toast.is-error .icon-ring {
            background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%);
            border: 1.5px solid rgba(239,68,68,0.2);
        }

        /* Title */
        #thiqha-flash-toast .toast-title {
            font-size: 0.9375rem;
            font-weight: 700;
            line-height: 1.3;
            letter-spacing: -0.01em;
        }
        #thiqha-flash-toast.is-success .toast-title { color: #059669; }
        #thiqha-flash-toast.is-error   .toast-title { color: #dc2626; }

        /* Body */
        #thiqha-flash-toast .toast-body {
            font-size: 0.8125rem;
            line-height: 1.6;
            color: #6b7280;
            margin-top: 2px;
        }

        /* Close btn */
        #thiqha-flash-toast .toast-close {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            border: 1px solid rgba(0,0,0,0.08);
            background: #f9fafb;
            color: #9ca3af;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.15s, color 0.15s, transform 0.15s;
            outline: none;
        }
        #thiqha-flash-toast .toast-close:hover {
            background: #f3f4f6;
            color: #374151;
            transform: scale(1.1);
        }
        #thiqha-flash-toast .toast-close:focus-visible {
            box-shadow: 0 0 0 2px #6366f1;
        }

        /* Confetti dots decoration for success */
        #thiqha-flash-toast .confetti-dots {
            position: absolute;
            top: 0; right: 0;
            width: 100px; height: 80px;
            pointer-events: none;
            overflow: hidden;
        }
        #thiqha-flash-toast .confetti-dots span {
            position: absolute;
            border-radius: 50%;
            opacity: 0.18;
        }
    </style>

    <div
        id="thiqha-flash-toast"
        class="fixed top-4 right-4 z-[9999] w-[min(22rem,calc(100vw-2rem))] transform transition-all duration-300 ease-out translate-x-full opacity-0 {{ $isSuccess ? 'is-success' : 'is-error' }}"
        role="{{ $toastRole }}"
        aria-live="{{ $isSuccess ? 'polite' : 'assertive' }}"
        aria-labelledby="thiqha-flash-toast-title"
    >
        <div class="toast-card">
            @if ($isSuccess)
                <div class="confetti-dots" aria-hidden="true">
                    <span style="width:28px;height:28px;background:#10b981;top:-8px;right:14px;"></span>
                    <span style="width:14px;height:14px;background:#f59e0b;top:18px;right:-4px;"></span>
                    <span style="width:10px;height:10px;background:#6366f1;top:6px;right:48px;"></span>
                    <span style="width:8px;height:8px;background:#ec4899;top:40px;right:22px;border-radius:2px;transform:rotate(30deg);"></span>
                </div>
            @endif

            {{-- Close --}}
            <button
                type="button"
                class="toast-close"
                data-flash-close
                aria-label="{{ __('Close') }}"
            >
                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M1 1L9 9M9 1L1 9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                </svg>
            </button>

            {{-- Main content --}}
            <div class="relative z-10 flex items-start gap-3.5 px-4 pt-4 pb-5">

                {{-- Icon --}}
                <div class="icon-ring mt-0.5" aria-hidden="true">
                    @if ($isSuccess)
                        <span style="display:none;align-items:center;justify-content:center;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 13l4 4L19 7" stroke="#10b981" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    @else
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" stroke="#ef4444" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    @endif
                </div>

                {{-- Text --}}
                <div class="flex-1 min-w-0 pr-6">
                    <h2
                        id="thiqha-flash-toast-title"
                        class="toast-title"
                    >{{ $flash['title'] }}</h2>

                    <div class="toast-body max-h-32 overflow-y-auto">
                        @php
                            $messages   = is_array($flash['messages'] ?? null) ? $flash['messages'] : null;
                            $bodyMessage = isset($flash['message']) && $flash['message'] !== null && $flash['message'] !== ''
                                ? (string) $flash['message']
                                : null;
                        @endphp

                        @if ($messages !== null && count($messages) > 0)
                            @if (count($messages) === 1)
                                <p>{{ $messages[0] }}</p>
                            @else
                                <ul class="list-disc space-y-0.5 pl-4">
                                    @foreach ($messages as $line)
                                        <li>{{ $line }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        @elseif ($bodyMessage !== null)
                            <p>{!! nl2br(e($bodyMessage)) !!}</p>
                        @endif
                    </div>
                </div>
            </div>

            {{-- Progress bar --}}
            @if ($autoDismissMs > 0)
                <div class="toast-progress" aria-hidden="true">
                    <div
                        class="toast-progress-inner"
                        id="thiqha-flash-toast-progress"
                    ></div>
                </div>
            @endif
        </div>
    </div>

    <script>
        (function () {
            var root = document.getElementById('thiqha-flash-toast');
            if (!root) return;

            var ms = {{ $autoDismissMs }};

            function slideIn() {
                root.classList.remove('translate-x-full', 'opacity-0');
            }

            function dismiss() {
                if (root._thiqhaFlashTid) {
                    clearTimeout(root._thiqhaFlashTid);
                    root._thiqhaFlashTid = null;
                }
                root.classList.add('translate-x-full', 'opacity-0');
                window.setTimeout(function () { root.remove(); }, 300);
            }

            window.requestAnimationFrame(function () {
                window.requestAnimationFrame(slideIn);
            });
            if (ms > 0) {
                var bar = document.getElementById('thiqha-flash-toast-progress');
                if (bar) {
                    bar.style.animationDuration = ms + 'ms';
                    bar.addEventListener('animationend', dismiss);
                }
                root._thiqhaFlashTid = window.setTimeout(dismiss, ms);
            }

            // Close button
            root.querySelectorAll('[data-flash-close]').forEach(function (el) {
                el.addEventListener('click', dismiss);
            });
        })();
    </script>
@endif
