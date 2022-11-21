<?php

declare(strict_types=1);

namespace Bitcart\Result\Store;

final class CurrencyData
{
    public readonly string $name;
    public readonly int $divisibility;
    public readonly string $symbol;
    public readonly bool $crypto;
}
