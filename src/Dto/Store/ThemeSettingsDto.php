<?php

declare(strict_types=1);

namespace Bitcart\Dto\Store;

use Bitcart\Dto\AbstractDto;

class ThemeSettingsDto extends AbstractDto
{
    /**
     * @param  string  $storeThemeUrl
     * @param  string  $checkoutThemeUrl
     */
    public function __construct(
        public string $storeThemeUrl = '',
        public string $checkoutThemeUrl = '',
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['storeThemeUrl'],
            $data['checkoutThemeUrl'],
        );
    }
}
