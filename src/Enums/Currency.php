<?php

declare(strict_types=1);

namespace Bitcart\Enums;

use Bitcart\Traits\EnumToArray;

enum Currency: string
{
    use EnumToArray;

    case ARS = 'ARS';
    case AUD = 'AUD';
    case BHD = 'BHD';
    case BMD = 'BMD';
    case BRL = 'BRL';
    case CAD = 'CAD';
    case CHF = 'CHF';
    case CLP = 'CLP';
    case CNY = 'CNY';
    case CZK = 'CZK';
    case DKK = 'DKK';
    case EUR = 'EUR';
    case GBP = 'GBP';
    case HKD = 'HKD';
    case HUF = 'HUF';
    case IDR = 'IDR';
    case ILS = 'ILS';
    case INR = 'INR';
    case JPY = 'JPY';
    case KRW = 'KRW';
    case KWD = 'KWD';
    case LKR = 'LKR';
    case MMK = 'MMK';
    case MXN = 'MXN';
    case MYR = 'MYR';
    case NGN = 'NGN';
    case NOK = 'NOK';
    case NZD = 'NZD';
    case PHP = 'PHP';
    case PKR = 'PKR';
    case PLN = 'PLN';
    case RUB = 'RUB';
    case SAR = 'SAR';
    case SEK = 'SEK';
    case SGD = 'SGD';
    case THB = 'THB';
    case TRY = 'TRY';
    case TWD = 'TWD';
    case UAH = 'UAH';
    case USD = 'USD';
    case VEF = 'VEF';
    case VND = 'VND';
    case ZAR = 'ZAR';
}
