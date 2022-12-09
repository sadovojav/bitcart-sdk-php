<?php

require_once "../vendor/autoload.php";

$baseUrl = '';
$token = 'Y0Q-ZSbgeL8WIqAHuWhHmtQU2QhSaCQhesKwG0AZnaM';

$storeId = 'ArkySKBpKxVxrutCVqFePgAqFchoeTlR';

$payoutId = 'dyYfwBOelXOnPUBzqPWVWRWOlNYCQpgc';

$walletBtcId = 'DaEqeuWKBjVTwPwmKSSXofZHwFPkYhyl';
$walletTrxId = 'YDLfGdhIhmLNasHBwzRWVZmFqYUQkgfp';
$walletEthId = 'PGMfcIJljplxiweNlRTVnYMGdmDoukIZ';

$payoutClient = (new \Bitcart\Client\Payout($baseUrl, $token));

// GET /payouts/count
//$payoutsCount = $payoutClient->getPayoutsCount();
//var_dump($payoutsCount);

// POST /payouts
//$payout = $payoutClient->createPayout(new \Bitcart\Dto\Payout\PayoutCreateDto(
//    amount: 20,
//    destination: "TSwfwPgHXmAKVz7aT3Tg8RWj6QM1NsDB7H",
//    storeId: $storeId,
//    walletId: $walletTrxId,
//    currency: \Bitcart\Enums\Currency::USD
//));
//var_dump($payout);

// GET /payouts
//$payouts = $payoutClient->getPayouts(new \Bitcart\Dto\SearchDto());
//var_dump($payouts);

// GET /payouts/{model_id}
//$payout = $payoutClient->getPayout($payoutId);
//var_dump($payout);

// PATCH /payouts/{model_id}
//$payout = $payoutClient->updatePayout($payoutId, new \Bitcart\Dto\Payout\PayoutUpdateDto(
//    amount: '12',
//    destination: 'TSwfwPgHXmAKVz7aT3Tg8RWj6QM1NsDB7H',
//    storeId: $storeId,
//    walletId: $walletTrxId,
//    currency: \Bitcart\Enums\Currency::USD,
//));
//var_dump($payout);

// POST /payouts/batch
//$batchUpdateResult = $payoutClient->batchUpdatePayout(new \Bitcart\Dto\PayoutUpdateDto(
//    ids: [
//        'oXwmqmWudLUlBAqupLUHYZNfSpSjgQFR'
//    ],
//    command: \Bitcart\Enums\Command::APPROVE,
//));
//var_dump($batchUpdateResult);

