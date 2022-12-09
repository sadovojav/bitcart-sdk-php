<?php

declare(strict_types=1);

namespace Bitcart\Dto\Store;

use Bitcart\Dto\AbstractDto;
use Bitcart\Dto\ShopifyDto;

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
