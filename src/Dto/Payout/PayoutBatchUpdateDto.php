<?php

declare(strict_types=1);

namespace Bitcart\Dto\Payout;

use Bitcart\Dto\AbstractDto;
use Bitcart\Enums\Command;

class PayoutBatchUpdateDto extends AbstractDto
{
    /**
     * @param  array  $ids
     * @param  Command  $command
     * @param  array  $options
     */
    public function __construct(
        public array $ids,
        public Command $command,
        public array $options = [],
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['ids'],
            $data['command'],
            $data['options'],
        );
    }
}
