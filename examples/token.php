<?php

require_once "../vendor/autoload.php";

$baseUrl = '';
$token = 'Y0Q-ZSbgeL8WIqAHuWhHmtQU2QhSaCQhesKwG0AZnaM';

$tokenIdToDelete = 'RZPJfHLuRlWPJ4A7PIqenSYwjIXAKCySNO-5pZtvOgU';

$tokenClient = (new \Bitcart\Client\Token($baseUrl, $token));

// POST /token
//$token = $tokenClient->createToken($email, $password);
//var_dump($token);

// GET /tokens
//$tokens = $tokenClient->getTokens(new \Bitcart\Dto\SearchDto());
//var_dump($tokens);

// GET /token/current
//$token = $tokenClient->getCurrentToken();
//var_dump($token);

// GET /token/count
//$tokenCount = $tokenClient->getTokensCount();
//var_dump($tokenCount);

// DELETE /token/{model_id}
//$token = $tokenClient->deleteToken($tokenIdToDelete);
//var_dump($token);