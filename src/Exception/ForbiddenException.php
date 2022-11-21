<?php

declare(strict_types=1);

namespace Bitcart\Exception;

class ForbiddenException extends RequestException
{
    public const STATUS = 403;
}
