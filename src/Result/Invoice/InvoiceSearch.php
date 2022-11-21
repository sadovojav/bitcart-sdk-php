<?php

declare(strict_types=1);

namespace Bitcart\Result\Invoice;

class InvoiceSearch
{
    public readonly int $count;
    public readonly ?string $next;
    public readonly ?string $previous;
    /** @var Invoice[] */
    public readonly array $result;
}
