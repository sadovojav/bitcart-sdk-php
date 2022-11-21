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
//$invoiceDto = new \Bitcart\Dto\InvoiceDto(
//    price: 5,
//    storeId: $storeId,
//    currency: \Bitcart\Enums\Currency::USD->value,
//    notificationUrl: 'https://9305-46-98-145-33.ngrok.io'
//);
//$invoice = $invoiceClient->createInvoice($invoiceDto);
//var_dump($invoice);

//$invoiceDto = new \Bitcart\Dto\InvoiceDto(
//    price: '10',
//    storeId: $storeId,
//    currency: \Bitcart\Enums\Currency::USD->value
//);
//$invoice = $invoiceClient->updateInvoice($invoiceId, $invoiceDto);
//var_dump($invoice);