<?php

declare(strict_types=1);

namespace Bitcart\Dto\Store;

use Bitcart\Dto\AbstractDto;
use Bitcart\Enums\Currency;

class StoreUpdateDto extends AbstractDto
{
    /**
     * @param  string  $name
     * @param  array  $wallets
     * @param  Currency  $defaultCurrency
     * @param  CheckoutSettingsDto|array  $checkoutSettings
     * @param  ThemeSettingsDto|array  $themeSettings
     * @param  PluginSettingsDto|array  $pluginSettings
     */
    public function __construct(
        public string $name,
        public array $wallets,
        public Currency $defaultCurrency = Currency::USD,
        public CheckoutSettingsDto|array $checkoutSettings = [],
        public ThemeSettingsDto|array $themeSettings = [],
        public PluginSettingsDto|array $pluginSettings = [],
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['name'],
            $data['wallets'],
            $data['defaultCurrency'],
            $data['checkoutSettings'],
            $data['themeSettings'],
            $data['pluginSettings'],
        );
    }
}
