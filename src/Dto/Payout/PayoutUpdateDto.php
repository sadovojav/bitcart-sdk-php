<?php

declare(strict_types=1);

namespace Bitcart\Dto\Payout;

use Bitcart\Dto\AbstractDto;
use Bitcart\Enums\Currency;
use Bitcart\Enums\PayoutStatus;

class PayoutUpdateDto extends AbstractDto
{
    /**
     * @param  string  $amount
     * @param  string  $destination
     * @param  string  $storeId
     * @param  string  $walletId
     * @param  Currency  $currency
     * @param  PayoutStatus|null  $status
     * @param  string  $notificationUrl
     * @param  int  $maxFee
     * @param  string  $txHash
     * @param  int|null  $usedFee
     */
    public function __construct(
        public string $amount,
        public string $destination,
        public string $storeId,
        public string $walletId,
        public Currency $currency,
        public ?PayoutStatus $status = null,
        public string $notificationUrl = '',
        public int $maxFee = 0,
        public string $txHash = '',
        public ?int $usedFee = null,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['id'],
            $data['amount'],
            $data['destination'],
            $data['storeId'],
            $data['walletId'],
            $data['currency'],
            $data['status'],
            $data['notificationUrl'],
            $data['maxFee'],
            $data['txHash'],
            $data['usedFee'],
        );
    }
}
