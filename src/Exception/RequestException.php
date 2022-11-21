<?php

declare(strict_types=1);

namespace Bitcart\Exception;

use Bitcart\Http\ResponseInterface;

class RequestException extends BitcartException
{
    public function __construct(string $method, string $url, ResponseInterface $response)
    {
        $message = 'Error during ' . $method . ' to ' . $url . '. Got response (' . $response->getStatus() . '): ' . $response->getBody();
        parent::__construct($message, $response->getStatus());
    }
}
