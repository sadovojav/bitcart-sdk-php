<?php

declare(strict_types=1);

namespace Bitcart\Result\Store;

final class CheckoutSettings
{
    public readonly int $expiration;
    public readonly int $transaction_speed;
    public readonly int|float $underpaid_percentage;
    public readonly string $custom_logo_link;
    public readonly int $recommended_fee_target_blocks;
    public readonly bool $show_recommended_fee;
    public readonly bool $use_dark_mode;
    public readonly bool $use_html_templates;
    public readonly bool $email_required;
    public readonly bool $ask_address;
    public readonly bool $randomize_wallet_selection;
}
