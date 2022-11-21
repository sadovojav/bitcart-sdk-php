<?php

declare(strict_types=1);

namespace Bitcart\Dto;

class SettingsDto extends AbstractDto
{
    /**
     * @param  string  $balanceCurrency
     * @param  bool  $fetchBalance
     */
    public function __construct(
        public string $balanceCurrency = 'USD',
        public bool $fetchBalance = true
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['balanceCurrency'],
            $data['fetchBalance'],
        );
    }
}
