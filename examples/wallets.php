<?php

require_once "../vendor/autoload.php";

$baseUrl = '';
$token = 'Y0Q-ZSbgeL8WIqAHuWhHmtQU2QhSaCQhesKwG0AZnaM';

$walletClient = (new \Bitcart\Client\Wallet($baseUrl, $token));

$walletBtcId = 'DaEqeuWKBjVTwPwmKSSXofZHwFPkYhyl';
$walletTrxId = 'YDLfGdhIhmLNasHBwzRWVZmFqYUQkgfp';
$walletEthId = 'PGMfcIJljplxiweNlRTVnYMGdmDoukIZ';

$walletBtcXpub = 'xpub6GJV5MgfjoqGREQSfyERMbwJ1DpadX5Du8t5gGmesLiAUGm42pbwMHBLjFHDihn6sdJNKTA5JEAu9GUjiXdYmWJUmHeSA24sB3iyuXab19C';
$walletTrxXpub = '0287a5a95440bbe9fdcc3d9962a0e9a6431a7e3347e73c05e7b6833ee0a8d56730';
$walletEthXpub = '03e98216653d7ca27ddfeb982069dbbdee8e57b70f08df2b2ba82cf1a9eaafcf23';

// POST /wallets
//$wallet = $walletClient->createWallet((new \Bitcart\DTO\WalletDto(
//    name: 'Wallet ETH',
//    xpub: $walletEthXpub,
//    currency: \Bitcart\Enums\Coin::ETH,
//)));
//var_dump($wallet);

// GET /wallets
//$wallets = $walletClient->getWallets(new \Bitcart\Dto\SearchDto());
//var_dump($wallets);

// GET /wallets/count
//$walletsCount = $walletClient->getWalletsCount();
//var_dump($walletsCount);

// PATCH /wallets/{model_id}
//$wallet = $walletClient->updateWallet($walletBtcId, (new \Bitcart\Dto\WalletDto(
//    'Wallet BTC',
//    $walletBtcXpub,
//    label: 'TEST'
//)));
//var_dump($wallet);

// GET /wallets/balance
//$walletsBalance = $walletClient->getWalletsBalance();
//var_dump($walletsBalance);

// GET /wallets/{model_id}/balance
//$walletBalance = $walletClient->getWalletBalance($walletBtcId);
//var_dump($walletBalance);

// GET /wallets/history/all
//$walletHistoryAll = $walletClient->getWalletHistoryAll();
//var_dump($walletHistoryAll);

// GET /wallets/history/{model_id}
//$walletHistory = $walletClient->getWalletHistory($walletBtcId);
//var_dump($walletHistory);