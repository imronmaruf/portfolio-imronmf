<?php

namespace App\Providers;

use App\Repositories\ProfileRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\ProfileRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ProfileRepositoryInterface::class, ProfileRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
