<?php

declare(strict_types=1);

namespace Bitcart\Dto;

class ThemeSettingsDto extends AbstractDto
{
    /**
     * @param  string  $storeThemeUrl
     * @param  string  $adminThemeUrl
     */
    public function __construct(
        public string $storeThemeUrl = '',
        public string $adminThemeUrl = '',
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['storeThemeUrl'],
            $data['adminThemeUrl'],
        );
    }
}
