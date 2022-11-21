<?php

require_once "../vendor/autoload.php";

$baseUrl = '';
$token = 'Y0Q-ZSbgeL8WIqAHuWhHmtQU2QhSaCQhesKwG0AZnaM';

$storeId = 'ArkySKBpKxVxrutCVqFePgAqFchoeTlR';

$walletBtcId = 'DaEqeuWKBjVTwPwmKSSXofZHwFPkYhyl';
$walletTrxId = 'YDLfGdhIhmLNasHBwzRWVZmFqYUQkgfp';
$walletEthId = 'PGMfcIJljplxiweNlRTVnYMGdmDoukIZ';

$storeClient = (new \Bitcart\Client\Store($baseUrl, $token));

// POST /stores
//$store = $storeClient->createStore((new \Bitcart\DTO\StoreDto('Store #1', [
//    $walletBtcId,
//    $walletTrxId,
//    $walletEthId,
//])));
//var_dump($store);

// GET /stores/{model_id}
//$store = $storeClient->getStore($storeId);
//var_dump($store);

// GET /stores
//$stores = $storeClient->getStores(new \Bitcart\Dto\SearchDto());
//var_dump($stores);

// GET /stores/count
//$storesCount = $storeClient->getStoresCount();
//var_dump($storesCount);

// GET /stores/{model_id}/ping
//$storePing = $storeClient->getStorePingById($storeId);
//var_dump($storePing);

// PATCH /stores/{model_id}/checkout_settings
//$store = $storeClient->updateCheckoutSettings($storeId, new \Bitcart\Dto\CheckoutSettingsDto(
//    expiration: 1440,
//    transactionSpeed: 2
//));
//var_dump($store);

// PATCH /stores/{model_id}/theme_settings
//$store = $storeClient->updateThemeSettings($storeId, new \Bitcart\Dto\ThemeSettingsDto('https://loder.com'));
//var_dump($store);

// PATCH /stores/{model_id}/plugin_settings
//$store = $storeClient->updatePluginSettings($storeId, new \Bitcart\Dto\PluginSettingsDto(
//    new \Bitcart\Dto\ShopifyDto("TEST Shop name")
//));
//var_dump($store);