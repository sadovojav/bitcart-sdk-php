<?php

require_once "../vendor/autoload.php";

$baseUrl = '';
$token = 'Y0Q-ZSbgeL8WIqAHuWhHmtQU2QhSaCQhesKwG0AZnaM';

$storeId = 'ArkySKBpKxVxrutCVqFePgAqFchoeTlR';
$invoiceId = 'tLclEwXPgYgcSCMQVeBzkO';

$invoiceClient = (new \Bitcart\Client\Invoice($baseUrl, $token));

// GET /invoices/count
//$invoicesCount = $invoiceClient->getInvoicesCount();
//var_dump($invoicesCount);

// GET /invoices
//$invoices = $invoiceClient->getInvoices(new \Bitcart\Dto\SearchDto());
//var_dump($invoices);

// GET /invoices/{model_id}
//$invoice = $invoiceClient->getInvoice($invoiceId);
//var_dump($invoice);

// POST /invoices
//$invoiceDto = new \Bitcart\Dto\Invoice\InvoiceDto(
//    price: 5,
//    storeId: $storeId,
//    currency: \Bitcart\Enums\Currency::USD,
//    notificationUrl: 'https://0113-194-150-105-251.ngrok.io'
//);
//$invoice = $invoiceClient->createInvoice($invoiceDto);
//var_dump($invoice);

//$invoiceDto = new \Bitcart\Dto\Invoice\InvoiceDto(
//    price: '10',
//    storeId: $storeId,
//    currency: \Bitcart\Enums\Currency::USD
//);
//$invoice = $invoiceClient->updateInvoice($invoiceId, $invoiceDto);
//var_dump($invoice);

// PATCH /invoices/{model_id}/details
//$invoice = $invoiceClient->updateDetails('QjKMDzDAuISwHKUcFWUNSI', \Bitcart\Dto\Invoice\DetailsDto::fromArray([
//    'id' => 'NyXUqTWqzYJdQutPlelZPxrXRQRWvqUZ',
//    'address' => 'z7aT3Tg8RWj6QM1NsDTSwfwPgHXmAKVB7H'
//]));
//var_dump($invoice);

// PATCH /invoices/{model_id}/customer
//$invoice = $invoiceClient->updateCustomer('QjKMDzDAuISwHKUcFWUNSI', \Bitcart\Dto\Invoice\CustomerDto::fromArray([
//    'notes' => 'Lorem ipsum',
//]));
//var_dump($invoice);