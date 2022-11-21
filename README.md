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

## Best practices
- Always use an API key with as little permissions as possible.

## Contribute
We run static analyzer [Psalm](https://psalm.dev/) and [PHP-CS-fixer](https://github.com/FriendsOfPhp/PHP-CS-Fixer) for codestyle when you open a pull-request. Please check if there are any errors and fix them accordingly.

### Codestyle
We use PSR-12 code style to ensure proper formatting and spacing. You can test and format your code using composer commands. Before doing a PR you can run `composer cs-check` and `composer cs-fix` which will run php-cs-fixer.