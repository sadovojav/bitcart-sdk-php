<?php

declare(strict_types=1);

namespace Bitcart\Enums;

use Bitcart\Traits\EnumToArray;

enum Command: string
{
    use EnumToArray;

    case APPROVE = 'approve';
    case SEND = 'send';
    case DELETE = 'delete';
}
