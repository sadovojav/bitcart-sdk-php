<?php

declare(strict_types=1);

namespace Bitcart\Enums\Contracts;

use Bitcart\Traits\EnumToArray;
use Bitcart\Enums\ContractInterface;

enum SBCH: string implements ContractInterface
{
    use EnumToArray;

//    case 1BCH = 'BCH';
    case ARG = 'ARG';
    case AXIEBCH = 'AXIEBCH';
    case BCBCH = 'BCBCH';
    case BCBNB = 'BCBNB';
    case BCETH = 'BCETH';
    case BCUSDT = 'BCUSDT';
    case BPAD = 'BPAD';
    case CATS = 'CATS';
    case CLK = 'CLK';
    case CLY = 'CLY';
    case DAO = 'DAO';
    case DMAX = 'DMAX';
    case EBEN = 'EBEN';
    case EMBER = 'EMBER';
    case FARM = 'FARM';
    case FATCAT = 'FATCAT';
    case FIRE = 'FIRE';
    case FLEX = 'FLEX';
    case FLEXUSD = 'FLEXUSD';
    case GAME = 'GAME';
    case GBCH = 'GBCH';
    case GOB = 'GOB';
    case GOC = 'GOC';
    case HAM = 'HAM';
    case HOLY = 'HOLY';
    case JOY = 'JOY';
    case KAIJU = 'KAIJU';
    case KNUTH = 'KNUTH';
    case LAW = 'LAW';
    case LAWETP = 'LAWETP';
    case LAWUSD = 'LAWUSD';
    case LIGHTNING = 'LIGHTNING';
    case LNS = 'LNS';
    case MILK = 'MILK';
    case MIST = 'MIST';
    case MMMM = 'MMMM';
    case PTS = 'PTS';
    case PUMP = 'PUMP';
    case SIDX = 'SIDX';
    case SPICE = 'SPICE';
    case TANGO = 'TANGO';
    case UATX = 'UATX';
    case WAT = 'WAT';
    case XLNS = 'XLNS';
    case XMIST = 'XMIST';
    case XTANGO = 'XTANGO';
    case sBUSD = 'sBUSD';
}
