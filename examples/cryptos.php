<?php

require_once "../vendor/autoload.php";

$baseUrl = '';
$token = 'Y0Q-ZSbgeL8WIqAHuWhHmtQU2QhSaCQhesKwG0AZnaM';

$cryptoClient = (new \Bitcart\Client\Crypto($baseUrl, $token));

// GET /cryptos
//$cryptos = $cryptoClient->getCryptos();
//var_dump($cryptos);

// GET /cryptos/supported
//$cryptos = $cryptoClient->getSupported();
//var_dump($cryptos);

// GET /cryptos/rate
//$cryptosRate = $cryptoClient->getRate('btc');
//var_dump($cryptosRate);

// GET /cryptos/fiatlist
//$fiatList = $cryptoClient->getFiatList();
//var_dump($fiatList);