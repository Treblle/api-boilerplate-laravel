<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

final class RouteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware(['api', 'treblle'])
                ->as('api:')
                ->group(
                    base_path('routes/api.php')
                );
        });
    }

    protected function configureRateLimiting(): void
    {
        RateLimiter::for(
            name: 'api',
            callback: static fn (Request $request): Limit => Limit::perMinute(
                maxAttempts: 60,
            )->by(
                key: $request->user()?->id ?: $request->ip(),
            ),
        );
    }
}
