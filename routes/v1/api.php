<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

/**
 * Ping Routes
 */
Route::prefix('ping')->as('ping:')->group(
    base_path('routes/v1/ping.php'),
);


require __DIR__ . '/../auth.php';
