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
//$payout = $payoutClient->createPayout(new \Bitcart\Dto\PayoutDto(
//    amount: 0.00030917,
//    destination: "bc1q87gj8xlx0f09wk9smlz8frdglnlt7hhhy5kgw4",
//    storeId: $storeId,
//    walletId: $walletBtcId
//));
//var_dump($payout);

// GET /payouts
//$payouts = $payoutClient->getPayouts(new \Bitcart\Dto\SearchDto());
//var_dump($payouts);

// GET /payouts/{model_id}
//$payout = $payoutClient->getPayout($payoutId);
//var_dump($payout);

