<?php

declare(strict_types=1);

namespace Bitcart\Dto;

class PluginSettingsDto extends AbstractDto
{
    /**
     * @param  ShopifyDto  $shopify
     */
    public function __construct(
        public ?ShopifyDto $shopify,
    ) {
    }
}
