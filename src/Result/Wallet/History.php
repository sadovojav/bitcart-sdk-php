<?php

declare(strict_types=1);

namespace Bitcart\Result\Wallet;

final class History
{
    public readonly string $date;
    public readonly string $txid;
    public readonly string $amount;
}
