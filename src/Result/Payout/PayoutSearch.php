<?php

declare(strict_types=1);

namespace Bitcart\Result\Payout;

class PayoutSearch
{
    public readonly int $count;
    public readonly ?string $next;
    public readonly ?string $previous;
    /** @var Payout[] */
    public readonly array $result;
}
