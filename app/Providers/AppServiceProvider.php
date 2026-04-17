<?php

namespace App\Providers;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        AuthenticationException::redirectUsing(fn () => route('login.index'));

        Blade::anonymousComponentPath(resource_path('views/user/components'));
        Blade::anonymousComponentPath(resource_path('views/admin/components'));
        Blade::anonymousComponentPath(resource_path('views/partner/components'));
    }
}
