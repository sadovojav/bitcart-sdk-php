<?php

declare(strict_types=1);

namespace Bitcart\Dto\Invoice;

use Bitcart\Dto\AbstractDto;
use Bitcart\Enums\Currency;

class InvoiceDto extends AbstractDto
{
    /**
     * @param  int|float  $price
     * @param  string  $storeId
     * @param  Currency|null  $currency
     * @param  string  $paidCurrency
     * @param  string  $orderId
     * @param  string  $notificationUrl
     * @param  string  $redirectUrl
     * @param  string  $buyerEmail
     * @param  string  $promocode
     * @param  string  $shippingAddress
     * @param  string  $notes
     * @param  string  $discount
     * @param  string  $status
     */
    public function __construct(
        public int|float $price,
        public string $storeId,
        public ?Currency $currency,
        public string $paidCurrency = '',
        public int $sentAmount = 0,
        public string $orderId = '',
        public string $notificationUrl = '',
        public string $redirectUrl = '',
        public string $buyerEmail = '',
        public string $promocode = '',
        public string $shippingAddress = '',
        public string $notes = '',
        public string $discount = '',
        public string $status = '',
        public array $metadata = []
    ) {
    }

    public function fromArray(array $data)
    {
        return new static(
            $data['price'],
            $data['storeId'],
            $data['currency'],
            $data['paidCurrency'],
            $data['sentAmount'],
            $data['orderId'],
            $data['notificationUrl'],
            $data['redirectUrl'],
            $data['buyerEmail'],
            $data['promocode'],
            $data['shippingAddress'],
            $data['notes'],
            $data['discount'],
            $data['status'],
            $data['metadata'],
        );
    }
}
