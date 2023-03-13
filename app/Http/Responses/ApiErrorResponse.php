<?php

declare(strict_types=1);

namespace App\Http\Responses;

use App\Enum\Error;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use JustSteveKing\StatusCode\Http;
use Symfony\Component\HttpFoundation\Response;

final readonly class ApiErrorResponse implements Responsable
{
    public function __construct(
        private string $title,
        private string $description,
        private Error $code,
        private Http $status = Http::INTERNAL_SERVER_ERROR,
    ) {}

    public function toResponse($request): Response
    {
        return new JsonResponse(
            data: [
                'title' => $this->title,
                'description' => $this->description,
                'code' => $this->code->value,
                'status' => $this->status->value,
            ],
            status: $this->status->value,
        );
    }
}
