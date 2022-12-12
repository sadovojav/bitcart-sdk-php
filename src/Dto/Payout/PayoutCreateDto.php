<?php

declare(strict_types=1);

namespace Bitcart\Dto\Payout;

use Bitcart\Dto\AbstractDto;
use Bitcart\Enums\Coin;
use Bitcart\Enums\ContractInterface;
use Bitcart\Enums\Currency;

class PayoutCreateDto extends AbstractDto
{
    /**
     * @param  float  $amount
     * @param  string  $destination
     * @param  string  $storeId
     * @param  string  $walletId
     * @param  Currency|Coin|ContractInterface  $currency
     * @param  string  $notificationUrl
     * @param  int  $maxFee
     */
    public function __construct(
        public float $amount,
        public string $destination,
        public string $storeId,
        public string $walletId,
        public Currency|Coin|ContractInterface $currency,
        public string $notificationUrl = '',
        public int $maxFee = 0,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['amount'],
            $data['destination'],
            $data['storeId'],
            $data['walletId'],
            $data['currency'],
            $data['notificationUrl'],
            $data['maxFee'],
        );
    }
}
