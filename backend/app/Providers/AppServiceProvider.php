<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Domain\OrderSession\Repositories\OrderSessionRepositoryInterface;
use App\Infrastructure\Repositories\OrderSessionRepository;

use App\Domain\TrackingOrder\Repositories\TrackingOrderRepositoryInterface;
use App\Infrastructure\Repositories\TrackingOrderRepository;

use App\Domain\Auth\Repositories\AdminRepositoryInterface;
use App\Infrastructure\Repositories\AdminRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
		$this->app->bind(OrderSessionRepositoryInterface::class, OrderSessionRepository::class);
		$this->app->bind(AdminRepositoryInterface::class, AdminRepository::class);
		$this->app->bind(TrackingOrderRepositoryInterface::class, TrackingOrderRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
