<?php

declare(strict_types=1);

namespace Bitcart\Dto;

use Bitcart\Enums\Coin;

class StoreDto extends AbstractDto
{
    /**
     * @param  string  $name
     * @param  array  $wallets
     * @param  Coin  $defaultCurrency
     * @param  CheckoutSettingsDto  $checkoutSettings
     */
    public function __construct(
        public string $name,
        public array $wallets,
        public Coin $defaultCurrency = Coin::BTC,
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
