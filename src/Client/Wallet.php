<?php

declare(strict_types=1);

namespace Bitcart\Client;

use Bitcart\Dto\SearchDto;
use Bitcart\Dto\WalletDto;
use Bitcart\Result\Wallet\History;
use Bitcart\Result\Wallet\WalletBalance;
use Bitcart\Result\Wallet\WalletSearch;
use CuyZ\Valinor\Mapper\Source\JsonSource;
use CuyZ\Valinor\MapperBuilder;

class Wallet extends AbstractClient
{
    protected string $endpoint = 'wallets';
    
    public function createWallet(WalletDto $wallet): \Bitcart\Result\Wallet\Wallet
    {
        $url = $this->getEndpoint();
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        $body = json_encode(
            $wallet->toArray(),
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->mapper()
                ->map(
                    \Bitcart\Result\Wallet\Wallet::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getWallet(string $walletId): \Bitcart\Result\Wallet\Wallet
    {
        $url = $this->getEndpoint() . '/' . $walletId;
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->mapper()
                ->map(
                    \Bitcart\Result\Wallet\Wallet::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getWalletsCount(): int
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

    public function getWallets(SearchDto $search): WalletSearch
    {
        $url = $this->getEndpoint() . '?' . http_build_query($search->toArray());
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->mapper()
                ->map(
                    WalletSearch::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getWalletsBalance(): string
    {
        $url = $this->getEndpoint() . '/balance';
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return $response->getBody();
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getWalletBalance(string $walletId):  WalletBalance
    {
        $url = $this->getEndpoint() . '/' . $walletId . '/balance';
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->mapper()
                ->map(
                    WalletBalance::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function updateWallet(string $walletId, WalletDto $wallet): \Bitcart\Result\Wallet\Wallet
    {
        $url = $this->getEndpoint() . '/' . $walletId;
        $headers = $this->getRequestHeaders();
        $method = 'PATCH';

        $body = json_encode(
            $wallet->toArray(),
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->mapper()
                ->map(
                    \Bitcart\Result\Wallet\Wallet::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function deleteWallet(string $walletId): \Bitcart\Result\Wallet\Wallet
    {
        $url = $this->getEndpoint() . '/' . $walletId;

        $headers = $this->getRequestHeaders();
        $method = 'DELETE';

        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->mapper()
                ->map(
                    \Bitcart\Result\Wallet\Wallet::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getWalletHistoryAll(): string
    {
        $url = $this->getEndpoint() . '/history/all';
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return $response->getBody();
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    /**
     * @param  string  $walletId
     * @return array<string, History>
     */
    public function getWalletHistory(string $walletId)
    {
        $url = $this->getEndpoint() . '/history/' . $walletId;
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->mapper()
                ->map(
                    'array<' . \Bitcart\Result\Wallet\History::class . '>',
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }
}
