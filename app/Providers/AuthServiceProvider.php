<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('applicant', function () {
            return auth()->user()->role == 0;
        });

        Gate::define('admin', function () {
            return auth()->user()->role == 1;
        });

        Gate::define('proctor', function () {
            return auth()->user()->role == 2;
        });

        Gate::define('personnel', function () {
            return auth()->user()->role == 3;
        });
    }
}