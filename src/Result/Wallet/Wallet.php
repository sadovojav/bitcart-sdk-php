<?php

declare(strict_types=1);

namespace Bitcart\Result\Wallet;

final class Wallet
{
    public readonly string $id;
    public readonly string $name;
    public readonly string $xpub;
    public readonly string $currency;
    public readonly bool $lightning_enabled;
    public readonly string $label;
    public readonly string $hint;
    public readonly string $contract;
    public readonly ?array $additional_xpub_data;
    public readonly string $user_id;
    public readonly bool $error;
    public readonly string $balance;
    public readonly string $created;
}
