<?php

declare(strict_types=1);

namespace Bitcart\Client;

use Bitcart\Dto\SearchDto;
use Bitcart\Result\Token\TokenSearch;
use CuyZ\Valinor\MapperBuilder;
use CuyZ\Valinor\Mapper\Source\JsonSource;

class Token extends AbstractClient
{
    protected string $endpoint = 'token';

    public function createToken(
        string $email,
        string $password,
        array $permissions = ['full_control'],
        bool $strict = true
    ): \Bitcart\Result\Token\Token {
        $url = $this->getEndpoint();
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        $body = json_encode(
            [
                'email' => $email,
                'password' => $password,
                'permissions' => $permissions,
                'strict' => $strict
            ],
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Token\Token::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getCurrentToken(): \Bitcart\Result\Token\Token
    {
        $url = $this->getEndpoint() . '/current';
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Token\Token::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getTokensCount(): int
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

    public function getTokens(SearchDto $search): TokenSearch
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
                    TokenSearch::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function updateToken(string $tokenId, string $redirectUrl): \Bitcart\Result\Token\Token {
        $url = $this->getEndpoint() . '/' . $tokenId;
        $headers = $this->getRequestHeaders();
        $method = 'PATCH';

        $body = json_encode(
            [
                'redirect_url' => $redirectUrl
            ],
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Token\Token::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function deleteToken(string $tokenId): bool
    {
        $url = $this->getEndpoint() . '/' . urlencode($tokenId);
        $headers = $this->getRequestHeaders();
        $method = 'DELETE';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Token\Token::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }
}
