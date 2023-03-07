<?php

declare(strict_types=1);

namespace App\Http\Responses\V1;

use App\Http\Responses\Concerns\ReturnsJsonResponse;
use Illuminate\Contracts\Support\Responsable;

final class ModelResponse implements Responsable
{
    use ReturnsJsonResponse;
}
