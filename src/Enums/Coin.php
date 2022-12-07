<?php

declare(strict_types=1);

namespace Bitcart\Enums;

enum Coin: string
{
    case BTC = 'btc';
    case BTH = 'bth';
    case ETH = 'eth';
    case BNB = 'bnb';
    case SBSH = 'sbsh';
    case LTC = 'ltc';
    case MATIC = 'matic';
    case BSTY = 'bsty';
    case TRX = 'trx';
    case XRG = 'xrg';
    case GRS = 'grs';
}
