<?php

declare(strict_types=1);

use App\Http\Controllers\V1\Users\IndexController;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    IndexController::class,
)->name('index');
