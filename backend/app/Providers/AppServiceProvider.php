<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Domain\Team\Repositories\TeamRepositoryInterface;
use App\Infrastructure\Repositories\TeamRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
		$this->app->bind(TeamRepositoryInterface::class, TeamRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
