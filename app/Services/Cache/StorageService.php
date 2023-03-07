<?php

declare(strict_types=1);

namespace App\Services\Cache;

use Closure;
use Illuminate\Support\Facades\Cache;

final class StorageService
{
     public function remember(string $key, Closure $callback, int $ttl = 3600): mixed
     {
         return Cache::remember(
             key: $key,
             ttl: $ttl,
             callback: $callback,
         );
     }
}
