<?php

declare(strict_types=1);


namespace Bitcart\Result\Invoice;

class Payment
{
    public readonly ?string $discount;
    public readonly string $contract;
    public readonly bool $lightning;
    public readonly ?string $node_id;
    public readonly float $recommended_fee;
    public readonly string $lookup_field;
    public readonly string $symbol;
    public readonly string $label;
    public readonly string $amount;
    public readonly int $divisibility;
    public readonly string $payment_address;
    public readonly ?string $rhash;
    public readonly string $payment_url;
    public readonly string $hint;
    public readonly int $confirmations;
    public readonly string $created;
    public readonly string $rate;
    public readonly string $currency;
    public readonly string $id;
    public readonly string $rate_str;
    public readonly string $name;
}