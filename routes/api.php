<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

/**
 * Version 1
 */
Route::prefix('v1')->as('v1:')->group(
    base_path('routes/v1/api.php'),
);

/**
 * Other Versions ....
 */
