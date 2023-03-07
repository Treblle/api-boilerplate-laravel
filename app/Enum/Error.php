<?php

declare(strict_types=1);

namespace App\Enum;

enum Error: string
{
    case AUTH_001 = 'https://docs.api.com/errors/auth_001';
    case AUTH_002 = 'https://docs.api.com/errors/auth_002';
    case AUTH_003 = 'https://docs.api.com/errors/auth_003';
    case AUTH_004 = 'https://docs.api.com/errors/auth_004';
}
