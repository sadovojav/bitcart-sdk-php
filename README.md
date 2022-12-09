# Bitcart API PHP client library
This library makes it easier to integrate Bitcart in your PHP application.

## Approach
This library takes an opinionated approach to API with the aim of making your developer life as easy and convenient as possible.
For this reason, we have decided to structure arguments a bit differently, but still allow full and advanced use cases.

The general reasoning behind the arguments an API client takes are in this order:
- First the required parameters => method arguments with NULL not allowed
- Recommended parameters => method arguments with NULL as default
- Optional parameters => arguments with NULL as default
- Lastly the advanced parameters => Inside an extra class

## How to use

```
composer require sadovojav/bitcart-sdk-php
```

```
// Require the autoload file.
require __DIR__ . '/../src/autoload.php';

// Example to create user.
$baseUrl = ''; // e.g. https://your.bitract-server.tld

try {
    // POST /users
    $user = (new \Bitcart\Client\User($baseUrl))->createUser(\Bitcart\DTO\UserDto::fromArray([
       'email' => 'user@example.com',
       'password' => 'some_password',
       'settings' => (new \Bitcart\DTO\SettingsDto()),
    ]));
    var_dump($user);
} catch (\Throwable $e) {
    echo "Error: " . $e->getMessage();
}
```

## Checklist
<details>
  <summary>Open</summary><br/>

### USERS
- [x] GET /users/stats
- [x] GET /users/me
- [x] POST /users/me/settings
- [x] GET /users/count
- [x] GET /users/{model_id}
- [x] DELETE /users/{model_id}
- [x] PATCH /users/{model_id}
- [x] GET /users
- [x] POST /users
- [ ] POST /users/batch

### WALLETS
- [ ] GET /wallets/history/all
- [x] GET /wallets/history/{model_id}
- [x] GET /wallets/balance
- [x] GET /wallets/{model_id}/balance
- [ ] GET /wallets/{model_id}/checkin
- [ ] GET /wallets/{model_id}/channels
- [ ] POST /wallets/{model_id}/channels/open
- [ ] POST /wallets/{model_id}/channels/close
- [ ] POST /wallets/{model_id}/inpay
- [x] GET /wallets/count
- [x] GET /wallets/{model_id}
- [x] DELETE /wallets/{model_id}
- [x] PATCH /wallets/{model_id}
- [x] GET /wallets
- [x] POST /wallets
POST /wallets/batch

#### STORES
- [x] GET /stores/{model_id}/ping
- [x] PATCH /stores/{model_id}/checkout_settings
- [x] PATCH /stores/{model_id}/theme_settings
- [x] PATCH /stores/{model_id}/plugin_settings
- [x] GET /stores/count
- [x] GET /stores/{model_id}
- [x] DELETE /stores/{model_id}
- [x] PATCH /stores/{model_id}
- [x] GET /stores
- [x] POST /stores
- [ ] POST /stores/batch
- [ ] GET /stores/{store_id}/integrations/shopify/{order_id}

#### INVOICES
- [ ] GET /invoices/order_id/{order_id}
- [ ] GET /invoices/export
- [ ] PATCH /invoices/{model_id}/customer
- [x] GET /invoices/count
- [x] GET /invoices/{model_id}
- [x] DELETE /invoices/{model_id}
- [x] PATCH /invoices/{model_id}
- [x] GET /invoices
- [x] POST /invoices
- [ ] POST /invoices/batch

#### PRODUCTS
- [x] GET /products/maxprice
- [x] GET /products/categories
- [x] GET /products/count
- [x] GET /products/{model_id}
- [x] DELETE /products/{model_id}
- [x] PATCH /products/{model_id}
- [x] GET /products
- [x] POST /products
- [ ] POST /products/batch

#### PAYOUTS
- [x] GET /payouts/count
- [x] GET /payouts/{model_id}
- [x] DELETE /payouts/{model_id}
- [x] PATCH /payouts/{model_id}
- [x] GET /payouts
- [x] POST /payouts
- [x] POST /payouts/batch

#### TOKEN
- [x] GET /token
- [x] POST /token
- [x] GET /token/current
- [x] GET /token/count
- [x] DELETE /token/{model_id}
- [x] PATCH /token/{model_id}

### CRYPTOS
- [x] GET /cryptos
- [x] GET /cryptos/supported
- [x] GET /cryptos/rate
- [x] GET /cryptos/fiatlist
- [ ] GET /cryptos/tokens/{currency}
- [ ] GET /cryptos/tokens/{currency}/abi
- [ ] GET /cryptos/explorer/{currency}
- [ ] GET /cryptos/rpc/{currency}
</details>

## Best practices
- Always use an API key with as little permissions as possible.

## Contribute
We run static analyzer [Psalm](https://psalm.dev/) and [PHP-CS-fixer](https://github.com/FriendsOfPhp/PHP-CS-Fixer) for codestyle when you open a pull-request. Please check if there are any errors and fix them accordingly.

### Codestyle
We use PSR-12 code style to ensure proper formatting and spacing. You can test and format your code using composer commands. Before doing a PR you can run `composer cs-check` and `composer cs-fix` which will run php-cs-fixer.
