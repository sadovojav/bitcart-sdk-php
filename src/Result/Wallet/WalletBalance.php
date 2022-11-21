<?php

declare(strict_types=1);


namespace Bitcart\Result\Wallet;

class WalletBalance
{
    public readonly string $confirmed;
    public readonly string $unconfirmed;
    public readonly string $unmatured;
    public readonly string $lightning;
}