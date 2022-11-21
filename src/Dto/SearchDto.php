<?php

declare(strict_types=1);

namespace Bitcart\Dto;

class SearchDto extends AbstractDto
{
    /**
     * @param  int  $offset
     * @param  int  $limit
     * @param  string  $query
     * @param  string  $sort
     * @param  bool  $desc
     */
    public function __construct(
        public int $offset = 0,
        public int $limit = 5,
        public string $query = '',
        public string $sort = '',
        public bool $desc = true,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['offset'],
            $data['limit'],
            $data['query'],
            $data['sort'],
            $data['desc'],
        );
    }
}
