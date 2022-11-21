<?php

declare(strict_types=1);

namespace Bitcart\Result\Wallet;

class WalletSearch
{
    public readonly int $count;
    public readonly ?string $next;
    public readonly ?string $previous;
    /** @var Wallet[] */
    public readonly array $result;
}
