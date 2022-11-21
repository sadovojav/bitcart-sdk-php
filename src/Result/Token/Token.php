<?php

declare(strict_types=1);

namespace Bitcart\Result\Token;

final class Token
{
    public function __construct(
        public readonly string $id,
        public readonly string $created,
        public readonly string $app_id,
        public readonly string $redirect_url,
        public readonly array $permissions,
        public readonly string $user_id,
        public ?string $access_token,
        public ?string $token_type
    ) {
        $this->access_token = $id;
        $this->token_type = 'bearer';
    }
}
