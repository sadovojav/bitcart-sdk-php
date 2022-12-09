<?php

declare(strict_types=1);

namespace Bitcart\Client;

use Bitcart\Dto\SearchDto;
use Bitcart\Dto\Store\CheckoutSettingsDto;
use Bitcart\Dto\Store\PluginSettingsDto;
use Bitcart\Dto\Store\StoreUpdateDto;
use Bitcart\Dto\Store\ThemeSettingsDto;
use Bitcart\Dto\Store\StoreCreateDto;
use CuyZ\Valinor\Mapper\Source\JsonSource;
use CuyZ\Valinor\MapperBuilder;

class Store extends AbstractClient
{
    protected string $endpoint = 'stores';

    /**
     * @throws \JsonException
     */
    public function createStore(StoreCreateDto $store): \Bitcart\Result\Store\Store
    {
        $url = $this->getEndpoint();
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        $body = json_encode(
            [
                'name' => $store->name,
                'default_currency' => $store->defaultCurrency->value,
                'checkout_settings' => $store->checkoutSettings->toArray(),
                'wallets' => $store->wallets
            ],
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Store\Store::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getStore(string $storeId): \Bitcart\Result\Store\Store
    {
        $url = $this->getEndpoint() . '/' . $storeId;
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Store\Store::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function updateStore(string $storeId, StoreUpdateDto $store): \Bitcart\Result\Store\Store
    {
        $url = $this->getEndpoint() . '/' . $storeId;
        $headers = $this->getRequestHeaders();
        $method = 'PATCH';

        $body = json_encode(
            $store->toArray(),
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Store\Store::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getStores(SearchDto $search): \Bitcart\Result\Store\StoreSearch
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
                    \Bitcart\Result\Store\StoreSearch::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getStoresCount(): int
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

    public function getStorePingById(string $storeId): string
    {
        $url = $this->getEndpoint() . '/' . $storeId . '/ping';
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return $response->getBody();
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function updateCheckoutSettings(string $storeId, CheckoutSettingsDto $pluginSettings): \Bitcart\Result\Store\Store
    {
        $url = $this->getEndpoint() . '/' . $storeId . '/checkout_settings';
        $headers = $this->getRequestHeaders();
        $method = 'PATCH';

        $body = json_encode(
            $pluginSettings->toArray(),
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Store\Store::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function updateThemeSettings(string $storeId, ThemeSettingsDto $themeSettings): \Bitcart\Result\Store\Store
    {
        $url = $this->getEndpoint() . '/' . $storeId . '/theme_settings';
        $headers = $this->getRequestHeaders();
        $method = 'PATCH';

        $body = json_encode(
            $themeSettings->toArray(),
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Store\Store::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function updatePluginSettings(string $storeId, PluginSettingsDto $pluginSettings): \Bitcart\Result\Store\Store
    {
        $url = $this->getEndpoint() . '/' . $storeId . '/plugin_settings';
        $headers = $this->getRequestHeaders();
        $method = 'PATCH';

        $body = json_encode(
            $pluginSettings->toArray(),
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Store\Store::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function deleteStore(string $storeId): \Bitcart\Result\Store\Store
    {
        $url = $this->getEndpoint() . '/' . $storeId;
        $headers = $this->getRequestHeaders();
        $method = 'DELETE';

        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Store\Store::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }
}
