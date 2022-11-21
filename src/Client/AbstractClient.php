<?php

declare(strict_types=1);

namespace Bitcart\Client;

use Bitcart\Exception\BadRequestException;
use Bitcart\Exception\ForbiddenException;
use Bitcart\Exception\RequestException;
use Bitcart\Http\ClientInterface;
use Bitcart\Http\CurlClient;
use Bitcart\Http\Response;

class AbstractClient
{
    private ?string $apiKey;
    private string $baseUrl;
    private string $apiPath = '/api/';
    private null|ClientInterface|CurlClient $httpClient;
    protected string $endpoint;

    public function __construct(string $baseUrl, ?string $apiKey = null, ClientInterface $client = null)
    {
        $this->baseUrl = rtrim($baseUrl, '/');
        $this->apiKey = $apiKey;

        if ($client === null) {
            $client = new CurlClient();
        }
        $this->httpClient = $client;
    }

    protected function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    protected function getApiUrl(): string
    {
        return $this->baseUrl . $this->apiPath;
    }

    protected function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    protected function getHttpClient(): ClientInterface
    {
        return $this->httpClient;
    }

    protected function getRequestHeaders(): array
    {
        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];

        if (!is_null($this->getApiKey())) {
            $headers['Authorization'] = 'bearer ' . $this->getApiKey();
        }

        return $headers;
    }

    protected function getExceptionByStatusCode(string $method, string $url, Response $response): RequestException
    {
        $exceptions = [
            ForbiddenException::STATUS => ForbiddenException::class,
            BadRequestException::STATUS => BadRequestException::class,
        ];

        $class = $exceptions[$response->getStatus()] ?? RequestException::class;

        return new $class($method, $url, $response);
    }

    protected function getEndpoint(): string
    {
        return $this->getApiUrl() . $this->endpoint;
    }
}
