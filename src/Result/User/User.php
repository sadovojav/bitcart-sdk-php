<?php

declare(strict_types=1);

namespace Bitcart\Result\User;

class User
{
    public readonly string $id;
    public readonly string $email;
    public readonly bool $is_superuser;
    public readonly Settings $settings;
    public readonly string $created;
    public readonly ?string $password;
}
