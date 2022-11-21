<?php

declare(strict_types=1);


namespace Bitcart\Result\Payout;

class Payout
{
    public readonly string $created;
    public readonly string $amount;
    public readonly string $destination;
    public readonly string $store_id;
    public readonly string $wallet_id;
    public readonly string $currency;
    public readonly string $notification_url;
    public readonly ?int $max_fee;
    public readonly string $status;
    public readonly string $id;
    public readonly string $user_id;
    public readonly ?string $tx_hash;
    public readonly ?int $used_fee;
    public readonly string $wallet_currency;
}