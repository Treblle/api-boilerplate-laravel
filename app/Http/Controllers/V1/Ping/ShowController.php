<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\Ping;

use App\Http\Responses\V1\MessageResponse;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

final class ShowController
{
    public function __invoke(Request $request): Responsable
    {
        return new MessageResponse(
            data: [
                'message' => strval(trans('messages.service.online')),
            ],
        );
    }
}
