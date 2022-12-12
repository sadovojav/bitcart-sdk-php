<?php

declare(strict_types=1);

namespace Bitcart\Dto\Invoice;

use Bitcart\Dto\AbstractDto;

class CustomerDto extends AbstractDto
{
    /**
     * @param  string  $buyer_email
     * @param  string  $shipping_address
     * @param  string  $notes
     */
    public function __construct(
        public string $buyer_email = '',
        public string $shipping_address = '',
        public string $notes = ''
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['buyer_email'],
            $data['shipping_address'],
            $data['notes'],
        );
    }
}
