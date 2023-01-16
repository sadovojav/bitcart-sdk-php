<?php

declare(strict_types=1);

namespace Bitcart\Result\Invoice;

final class Invoice
{
    public readonly array $metadata;
    public readonly string $created;
    public readonly string $price;
    public readonly ?string $store_id;
    public readonly string $currency;
    public readonly ?string $sent_amount;
    public readonly string $paid_currency;
    public readonly string $order_id;
    public readonly string $redirect_url;
    public readonly string $notification_url;
    public readonly ?string $buyer_email;
    public readonly string $promocode;
    public readonly string $shipping_address;
    public readonly string $notes;
    public readonly ?string $discount;
    public readonly string $status;
    public readonly array $tx_hashes;
//    public readonly $products;
    public readonly string $id;
    public readonly string $user_id;
    public readonly int $time_left;
    public readonly int $expiration;
    public readonly int $expiration_seconds;
    /** @var Payment[] */
    public readonly array $payments;
}
