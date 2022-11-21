<?php

declare(strict_types=1);

namespace Bitcart\Result\User;

class UserSearch
{
    public readonly int $count;
    public readonly ?string $next;
    public readonly ?string $previous;
    /** @var User[] */
    public readonly array $result;
}
