<?php

declare(strict_types=1);

namespace Bitcart\Client;

use CuyZ\Valinor\MapperBuilder;
use Bitcart\Result\Crypto\CryptoSearch;
use CuyZ\Valinor\Mapper\Source\JsonSource;

class Crypto extends AbstractClient
{
    protected string $endpoint = 'cryptos';

    public function getCryptos(): CryptoSearch
    {
        $url = $this->getEndpoint();
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    CryptoSearch::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getSupported(): array
    {
        $url = $this->getEndpoint() . '/supported';
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getRate(string $currency = 'btc', string $fiatCurrency = 'USD'): float
    {
        $url = $this->getEndpoint() . '/rate?currency=' . $currency . '&fiat_currency=' . $fiatCurrency;
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (float)$response->getBody();
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getFiatList(string $query = ''): array
    {
        $url = $this->getEndpoint() . '/fiatlist?query=' . $query;
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }
}
