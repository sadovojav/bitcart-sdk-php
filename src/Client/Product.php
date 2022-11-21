<?php

declare(strict_types=1);


namespace Bitcart\Client;

use Bitcart\Dto\ProductDto;
use Bitcart\Dto\SearchDto;
use CuyZ\Valinor\Mapper\Source\JsonSource;
use CuyZ\Valinor\MapperBuilder;

class Product extends AbstractClient
{
    protected string $endpoint = 'products';

    public function createProduct(ProductDto $product): \Bitcart\Result\Product\Product
    {
        $url = $this->getEndpoint();
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        $body = [
            'data' => json_encode($product->toArray(), JSON_THROW_ON_ERROR),
        ];

        $headers['Content-Type'] = 'multipart/form-data';

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Product\Product::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getProduct(string $productId): \Bitcart\Result\Product\Product
    {
        $url = $this->getEndpoint() . '/' . $productId;
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Product\Product::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getProducts(SearchDto $search): \Bitcart\Result\Product\ProductSearch
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
                    \Bitcart\Result\Product\ProductSearch::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getProductsCount(): int
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

    public function getCategories(string $storeId): array
    {
        $url = $this->getEndpoint() . '/categories?store=' . $storeId;
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getMaxPrice(string $storeId): string
    {
        $url = $this->getEndpoint() . '/maxprice?store=' . $storeId;
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (string)$response->getBody();
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function updateProduct(string $productId, ProductDto $product): \Bitcart\Result\Product\Product
    {
        $url = $this->getEndpoint() . '/' . $productId;
        $headers = $this->getRequestHeaders();
        $method = 'PATCH';

        $body = [
            'data' => json_encode($product->toArray(), JSON_THROW_ON_ERROR),
        ];

        $headers['Content-Type'] = 'multipart/form-data';

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Product\Product::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function deleteProduct(string $productId): \Bitcart\Result\Product\Product
    {
        $url = $this->getEndpoint() . '/' . $productId;
        $headers = $this->getRequestHeaders();
        $method = 'DELETE';

        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Product\Product::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }
}