<?php

declare(strict_types=1);

namespace Bitcart\Dto;

class ShopifyDto extends AbstractDto
{
    /**
     * @param  string  $shopName
     * @param  string  $apiKey
     * @param  string  $apiSecret
     */
    public function __construct(
        public string $shopName = "",
        public string $apiKey = "",
        public string $apiSecret = "",
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['shopName'],
            $data['apiKey'],
            $data['apiSecret'],
        );
    }
}
