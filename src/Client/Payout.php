<?php

declare(strict_types=1);

namespace Bitcart\Client;

use Bitcart\Dto\PayoutDto;
use Bitcart\Dto\SearchDto;
use Bitcart\Result\Payout\PayoutSearch;
use CuyZ\Valinor\Mapper\Source\JsonSource;
use CuyZ\Valinor\MapperBuilder;

class Payout extends AbstractClient
{
    protected string $endpoint = 'payouts';

    /**
     * @throws \JsonException
     */
    public function createPayout(PayoutDto $payout): \Bitcart\Result\Payout\Payout
    {
        $url = $this->getEndpoint();
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        $body = json_encode(
            $payout->toArray(),
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Payout\Payout::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getPayout(string $payoutId): \Bitcart\Result\Payout\Payout
    {
        $url = $this->getEndpoint() . '/' . $payoutId;
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Payout\Payout::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getPayouts(SearchDto $search): PayoutSearch
    {
        $url = $this->getEndpoint() . '?' . http_build_query($search->toArray());
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    PayoutSearch::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getPayoutsCount(): int
    {
        $url = $this->getEndpoint() . '/count';
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (int)$response->getBody();
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function deletePayout(string $payoutId): \Bitcart\Result\Payout\Payout
    {
        $url = $this->getEndpoint() . '/' . $payoutId;
        $headers = $this->getRequestHeaders();
        $method = 'DELETE';

        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->mapper()
                ->map(
                    \Bitcart\Result\Payout\Payout::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }
}