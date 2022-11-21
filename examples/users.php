<?php

require_once "../vendor/autoload.php";

$baseUrl = '';
$email = '';
$password = '';

$userId = 'AICzsRCAhLbeOnzPeNNGlMskRFCklfnv';
$token = 'Y0Q-ZSbgeL8WIqAHuWhHmtQU2QhSaCQhesKwG0AZnaM';

$userClient = (new \Bitcart\Client\User($baseUrl, $token));

// POST /users
//(new \Bitcart\Client\User($baseUrl))->createUser(\Bitcart\DTO\UserDto::fromArray([
//    'email' => 'user@example.com',
//    'password' => 'parole51',
//    'settings' => (new \Bitcart\DTO\SettingsDto()),
//    'isSuperuser' => false
//]));

// GET /users/me
//$user = $userClient->getCurrentUserInfo();
//var_dump($user);

// GET /users/{model_id}
//$user = $userClient->getUserInfoById('');
//var_dump($user);

// GET /users/stats
//$stats = $userClient->getStats();
//var_dump($stats);

// GET /users/count
//$usersCount = $userClient->getUsersCount();
//var_dump($usersCount);

// DELETE /users/{model_id}
//$deleteUser = $userClient->deleteUser('VrQFbFFAjTpBQOIcJihGaMSIQbkYCFIm', true);
//var_dump($deleteUser);

//$userId = 'cEqavZLjEyvUqJzAjaARrzOTcIRSbHUs';

// PATCH /users/{model_id}
//$user = $userClient->updateUser($userId, \Bitcart\Dto\UserDto::fromArray([
//    'email' => 'user@example.com',
//    'password' => 'some_new_password',
//    'settings' => (new \Bitcart\Dto\SettingsDto('EUR')),
//    'isSuperuser' => true
//]));
//var_dump($user);

// GET /users
//$users = $userClient->getUsers(new \Bitcart\Dto\SearchDto());
//var_dump($users);

// POST /users/me/settings
//$user = $userClient->setSettings(new \Bitcart\Dto\SettingsDto('EUR'));
//var_dump($user);