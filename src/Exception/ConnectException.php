<?php

declare(strict_types=1);

namespace Bitcart\Exception;

class ConnectException extends BitcartException
{
    public function __construct(string $curlErrorMessage, int $curlErrorCode)
    {
        parent::__construct($curlErrorMessage, $curlErrorCode);
    }
}
