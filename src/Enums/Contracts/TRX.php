<?php

declare(strict_types=1);

namespace Bitcart\Enums\Contracts;

use Bitcart\Traits\EnumToArray;
use Bitcart\Enums\ContractInterface;

enum TRX: string implements ContractInterface
{
    use EnumToArray;

    case BTCST = 'BTCST';
    case BTT = 'BTT';
    case JST = 'JST';
    case NFT = 'NFT';
    case TUSD = 'TUSD';
    case USDC = 'USDC';
    case USDD = 'USDD';
    case USDT = 'USDT';
    case WIN = 'WIN';
}
