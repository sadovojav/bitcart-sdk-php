<?php

declare(strict_types=1);

namespace Bitcart\Dto;

class WalletDto extends AbstractDto
{
    /**
     * @param  string  $name
     * @param  string  $xpub
     * @param  string  $currency
     * @param  bool  $lightningEnabled
     * @param  string  $label
     * @param  string  $hint
     * @param  string  $contract
     */
    public function __construct(
        public string $name,
        public string $xpub = '',
        public string $currency = 'btc',
        public bool $lightningEnabled = false,
        public string $label = '',
        public string $hint = '',
        public string $contract = ''
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['name'],
            $data['xpub'],
            $data['currency'],
            $data['lightningEnabled'],
            $data['label'],
            $data['hint'],
            $data['contract'],
        );
    }
}
