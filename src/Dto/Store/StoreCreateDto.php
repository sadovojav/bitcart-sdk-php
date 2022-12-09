<?php

declare(strict_types=1);

namespace Bitcart\Dto\Store;

use Bitcart\Dto\AbstractDto;
use Bitcart\Enums\Currency;

class StoreCreateDto extends AbstractDto
{
    /**
     * @param  string  $name
     * @param  array  $wallets
     * @param  Currency  $defaultCurrency
     * @param  CheckoutSettingsDto  $checkoutSettings
     */
    public function __construct(
        public string $name,
        public array $wallets,
        public Currency $defaultCurrency = Currency::USD,
        public CheckoutSettingsDto $checkoutSettings = new CheckoutSettingsDto(),
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['name'],
            $data['wallets'],
            $data['defaultCurrency'],
            $data['checkoutSettings'],
        );
    }
}
