<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\TesterRepository;
use App\Repositories\TesterRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TesterRepositoryInterface::class, TesterRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
