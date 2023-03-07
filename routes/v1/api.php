<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

/**
 * Ping Routes
 */
Route::prefix('ping')->as('ping:')->group(
    base_path('routes/v1/ping.php'),
);

/**
 * User Routes
 */
Route::prefix('users')->as('users:')->middleware(['auth'])->group(
    base_path('routes/v1/users.php'),
);

require __DIR__ . '/../auth.php';
