<?php

declare(strict_types=1);

namespace Bitcart\Dto;

class ProductDto extends AbstractDto
{
    /**
     * @param  string  $name
     * @param  string  $price
     * @param  string  $quantity
     * @param  string  $category
     * @param  string  $storeId
     * @param  string  $discounts
     * @param  string  $downloadUrl
     * @param  string  $description
     */
    public function __construct(
        public string $name,
        public string $price,
        public string $quantity,
        public string $storeId,
        public string $category = '',
        public string $discounts = '',
        public string $downloadUrl = '',
        public string $description = '',
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['name'],
            $data['price'],
            $data['quantity'],
            $data['category'],
            $data['storeId'],
            $data['discounts'],
            $data['downloadUrl'],
            $data['description'],
        );
    }
}
