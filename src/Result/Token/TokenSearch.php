<?php

declare(strict_types=1);

namespace Bitcart\Result\Token;

class TokenSearch
{
    public readonly int $count;
    public readonly ?string $next;
    public readonly ?string $previous;
    /** @var Token[] */
    public readonly array $result;
}
