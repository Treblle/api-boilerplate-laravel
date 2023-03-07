<?php

declare(strict_types=1);

use App\Http\Controllers\V1\Users\IndexController;
use App\Models\User;
use JustSteveKing\StatusCode\Http;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\getJson;

it('returns the correct status code if unauthenticated', function (): void {
    getJson(
        uri: action(IndexController::class)
    )->assertStatus(
        status: Http::UNAUTHORIZED->value,
    );
});

it('returns the correct status code if authenticated', function (): void {
    actingAs(User::factory()->create())->getJson(
        uri: action(IndexController::class)
    )->assertStatus(
        status: Http::OK->value,
    );
});



