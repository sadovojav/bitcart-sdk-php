<?php

declare(strict_types=1);

namespace Bitcart\Enums;

use Bitcart\Traits\EnumToArray;

enum PayoutStatus: string
{
    use EnumToArray;

    case PENDING = 'pending';
    case CANCELLED = 'cancelled';
}
