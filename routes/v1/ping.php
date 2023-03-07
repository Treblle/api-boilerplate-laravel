<?php

declare(strict_types=1);

use App\Http\Controllers\V1\Ping\ShowController;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    ShowController::class,
)->name('show');
