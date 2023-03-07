<?php

declare(strict_types=1);

namespace App\Http\Responses\Concerns;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\ResourceCollection;
use JustSteveKing\StatusCode\Http;
use Symfony\Component\HttpFoundation\Response;
use TiMacDonald\JsonApi\JsonApiResourceCollection;

trait ReturnsJsonResponse
{
    /**
     * @param array{message: string}|JsonApiResourceCollection|ResourceCollection|AnonymousResourceCollection $data
     * @param Http $status
     */
    public function __construct(
        private readonly array|JsonApiResourceCollection|ResourceCollection|AnonymousResourceCollection $data,
        private readonly Http $status = Http::OK,
    ) {
    }

    public function toResponse($request): Response
    {
        return new JsonResponse(
            data: $this->data,
            status: $this->status->value,
        );
    }
}
