<?php

declare(strict_types=1);

namespace Bitcart\Enums\Contracts;

use Bitcart\Traits\EnumToArray;
use Bitcart\Enums\ContractInterface;

enum MATIC: string implements ContractInterface
{
    use EnumToArray;

    case AAVE = 'AAVE';
    case ANKR = 'ANKR';
    case BAL = 'BAL';
    case BUSD = 'BUSD';
    case CTSI = 'CTSI';
    case DAI = 'DAI';
    case ELON = 'ELON';
    case FRAX = 'FRAX';
    case GLM = 'GLM';
    case HEX = 'HEX';
    case KAVA = 'KAVA';
    case KNC = 'KNC';
    case LINK = 'LINK';
    case MV = 'MV';
    case NEXO = 'NEXO';
    case ORBS = 'ORBS';
    case PLA = 'PLA';
    case PYR = 'PYR';
    case REQ = 'REQ';
    case RNDR = 'RNDR';
    case SAND = 'SAND';
    case SNX = 'SNX';
    case SURE = 'SURE';
    case SUSHI = 'SUSHI';
    case TEL = 'TEL';
    case UNI = 'UNI';
    case USDC = 'USDC';
    case USDT = 'USDT';
    case WBNB = 'WBNB';
    case WBTC = 'WBTC';
    case WOO = 'WOO';
    case WRX = 'WRX';
    case XPRT = 'XPRT';
}
