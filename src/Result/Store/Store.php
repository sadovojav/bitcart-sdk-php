<?php

declare(strict_types=1);

namespace Bitcart\Result\Store;

final class Store
{
    public readonly string $id;
    public readonly string $name;
    public readonly string $user_id;
    public readonly string $default_currency;
    public readonly CheckoutSettings $checkout_settings;
    public readonly ThemeSettings $theme_settings;
    public readonly PluginSettings $plugin_settings;
    public readonly CurrencyData $currency_data;
    public readonly string $created;
    /** @var string[] $wallets */
    public readonly array $wallets;
}
