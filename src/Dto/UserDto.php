<?php

declare(strict_types=1);

namespace Bitcart\Dto;

class UserDto extends AbstractDto
{
    /**
     * @param  string  $email
     * @param  string  $password
     * @param  SettingsDto  $settings
     * @param  bool  $isSuperuser
     */
    public function __construct(
        public string $email,
        public string $password,
        public SettingsDto $settings,
        public bool $isSuperuser = false
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['email'],
            $data['password'],
            $data['settings'],
            $data['isSuperuser']
        );
    }
}
