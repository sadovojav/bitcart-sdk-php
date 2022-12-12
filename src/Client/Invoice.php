<?php

declare(strict_types=1);

namespace Bitcart\Client;

use Bitcart\Dto\Invoice\CustomerDto;
use Bitcart\Dto\Invoice\DetailsDto;
use Bitcart\Dto\Invoice\InvoiceDto;
use Bitcart\Dto\SearchDto;
use Bitcart\Result\Invoice\InvoiceSearch;
use CuyZ\Valinor\Mapper\Source\JsonSource;
use CuyZ\Valinor\MapperBuilder;

class Invoice extends AbstractClient
{
    protected string $endpoint = 'invoices';

    public function createInvoice(InvoiceDto $invoice): \Bitcart\Result\Invoice\Invoice
    {
        $url = $this->getEndpoint();
        $headers = $this->getRequestHeaders();
        $method = 'POST';

        $body = json_encode(
            $invoice->toArray(),
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Invoice\Invoice::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function updateInvoice(string $invoiceId, InvoiceDto $invoice): \Bitcart\Result\Invoice\Invoice
    {
        $url = $this->getEndpoint() . '/' . $invoiceId;
        $headers = $this->getRequestHeaders();
        $method = 'PATCH';

        $data = $invoice->toArray();
        $data['price'] = (string)$data['price'];

        $body = json_encode(
            $data,
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Invoice\Invoice::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getInvoice(string $invoiceId): \Bitcart\Result\Invoice\Invoice
    {
        $url = $this->getEndpoint() . '/' . $invoiceId;
        $headers = $this->getRequestHeaders();
        $method = 'GET';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Invoice\Invoice::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function getInvoicesCount(): int
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

    public function getInvoices(SearchDto $search): InvoiceSearch
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
                    InvoiceSearch::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function deleteInvoice(string $invoiceId): \Bitcart\Result\Invoice\Invoice
    {
        $url = $this->getEndpoint() . '/' . $invoiceId;
        $headers = $this->getRequestHeaders();
        $method = 'DELETE';
        $response = $this->getHttpClient()->request($method, $url, $headers);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Invoice\Invoice::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function updateCustomer(string $invoiceId, CustomerDto $customer)
    {
        $url = $this->getEndpoint() . '/' . $invoiceId . '/customer';
        $headers = $this->getRequestHeaders();
        $method = 'PATCH';

        $body = json_encode(
            $customer->toArray(),
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return (new MapperBuilder())
                ->flexible()
                ->mapper()
                ->map(
                    \Bitcart\Result\Invoice\Invoice::class,
                    new JsonSource($response->getBody())
                );
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }

    public function updateDetails(string $invoiceId, DetailsDto $details): bool
    {
        $url = $this->getEndpoint() . '/' . $invoiceId . '/details';
        $headers = $this->getRequestHeaders();
        $method = 'PATCH';

        $body = json_encode(
            $details->toArray(),
            JSON_THROW_ON_ERROR
        );

        $response = $this->getHttpClient()->request($method, $url, $headers, $body);

        if ($response->getStatus() === 200) {
            return filter_var($response->getBody(), FILTER_VALIDATE_BOOLEAN);
        }

        throw $this->getExceptionByStatusCode($method, $url, $response);
    }
}
