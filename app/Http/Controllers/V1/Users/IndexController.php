<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\Users;

use App\Http\Resources\V1\UserResource;
use App\Http\Responses\V1\CollectionResponse;
use App\Models\User;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

final class IndexController
{
    public function __invoke(Request $request): Responsable
    {
        return new CollectionResponse(
            data: UserResource::collection(
                resource: User::query()->get(),
            ),
        );
    }
}
