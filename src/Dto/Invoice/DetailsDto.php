<?php

declare(strict_types=1);

namespace Bitcart\Dto\Invoice;

use Bitcart\Dto\AbstractDto;

class DetailsDto extends AbstractDto
{
    /**
     * @param  string  $id
     * @param  string  $address
     */
    public function __construct(
        public string $id,
        public string $address,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['id'],
            $data['address'],
        );
    }
}
