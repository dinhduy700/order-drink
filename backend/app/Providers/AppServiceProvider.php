<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Domain\OrderSession\Repositories\OrderSessionRepositoryInterface;
use App\Infrastructure\Repositories\OrderSessionRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
		$this->app->bind(OrderSessionRepositoryInterface::class, OrderSessionRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
