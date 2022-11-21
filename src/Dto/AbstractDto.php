<?php

declare(strict_types=1);

namespace Bitcart\Dto;

class AbstractDto
{
    public function toArray(bool $decamelize = true): array
    {
        $arr = (array)$this;

        if ($decamelize) {
            $data = [];

            foreach ($arr as $key => $value) {
                $data[$this->decamelize($key)] = $value;
            }

            return $data;
        }

        return $arr;
    }

    private function decamelize($string): string
    {
        return strtolower(preg_replace(['/([a-z\d])([A-Z])/', '/([^_])([A-Z][a-z])/'], '$1_$2', $string));
    }
}
