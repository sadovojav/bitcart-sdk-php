<?php

declare(strict_types=1);

namespace Bitcart\Dto;

use Bitcart\Enums\Coin;
use Bitcart\Enums\ContractInterface;

class WalletDto extends AbstractDto
{
    /**
     * @param  string  $name
     * @param  string  $xpub
     * @param  Coin  $currency
     * @param  ContractInterface|null  $contract
     * @param  string  $label
     * @param  string  $hint
     * @param  bool  $lightningEnabled
     */
    public function __construct(
        public string $name,
        public string $xpub,
        public Coin $currency,
        public ?ContractInterface $contract = null,
        public string $label = '',
        public string $hint = '',
        public bool $lightningEnabled = false,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['name'],
            $data['xpub'],
            $data['currency'],
            $data['contract'],
            $data['label'],
            $data['hint'],
            $data['lightningEnabled'],
        );
    }
}
