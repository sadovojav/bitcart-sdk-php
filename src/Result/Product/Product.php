<?php

declare(strict_types=1);

namespace Bitcart\Result\Product;

final class Product
{
    public readonly string $created;
    public readonly string $status;
    public readonly string $price;
    public readonly int $quantity;
    public readonly string $name;
    public readonly string $download_url;
    public readonly string $description;
    public readonly string $category;
    public readonly ?string $image;
    public readonly string $store_id;
//    public readonly array $discounts;
//    public readonly array $templates;
    public readonly string $id;
    public readonly string $user_id;
}
