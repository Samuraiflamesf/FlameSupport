<?php

namespace App\Providers;

use App\Repository\SupportRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use SupportORM;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       $this->app->bind(
        SupportRepositoryInterface::class,
        SupportORM::class
    );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
