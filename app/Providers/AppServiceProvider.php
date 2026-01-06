<?php

namespace App\Providers;

use App\Repositories\Contracts\LahanRepositoryInterface;
use App\Repositories\LahanRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Repository bindings
        $this->app->bind(LahanRepositoryInterface::class, LahanRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
