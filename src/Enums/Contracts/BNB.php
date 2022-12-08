<?php

declare(strict_types=1);

namespace Bitcart\Enums\Contracts;

use Bitcart\Traits\EnumToArray;
use Bitcart\Enums\ContractInterface;

enum BNB: string implements ContractInterface
{
    use EnumToArray;

//    case 1INCH = '1INCH';
    case AAVE = 'AAVE';
    case ALICE = 'ALICE';
    case ANKR = 'ANKR';
    case ANY = 'ANY';
    case AXS = 'AXS';
    case BAT = 'BAT';
    case BNX = 'BNX';
    case BSW = 'BSW';
    case BTCB = 'BTCB';
    case BTCST = 'BTCST';
    case BTT = 'BTT';
    case BTTOLD = 'BTTOLD';
    case BUSD = 'BUSD';
    case BabyDoge = 'BabyDoge';
    case C98 = 'C98';
    case CAKE = 'CAKE';
    case CEEK = 'CEEK';
    case CELR = 'CELR';
    case CHR = 'CHR';
    case COMP = 'COMP';
    case CTSI = 'CTSI';
    case DAI = 'DAI';
    case ELF = 'ELF';
    case EPS = 'EPS';
    case FRAX = 'FRAX';
    case FXS = 'FXS';
    case GAL = 'GAL';
    case GALA = 'GALA';
    case GMT = 'GMT';
    case INJ = 'INJ';
    case KNC = 'KNC';
    case LDO = 'LDO';
    case LINK = 'LINK';
    case MCT = 'MCT';
    case MDX = 'MDX';
    case METIS = 'METIS';
    case MKR = 'MKR';
    case MVL = 'MVL';
    case NFT = 'NFT';
    case ONG = 'ONG';
    case ORBS = 'ORBS';
    case PAXG = 'PAXG';
    case PROM = 'PROM';
    case RACA = 'RACA';
    case RAY = 'RAY';
    case ROSE = 'ROSE';
    case SFUND = 'SFUND';
    case SLP = 'SLP';
    case SNX = 'SNX';
    case SURE = 'SURE';
    case SUSHI = 'SUSHI';
    case TLM = 'TLM';
    case TUSD = 'TUSD';
    case TWT = 'TWT';
    case UNI = 'UNI';
    case USDC = 'USDC';
    case USDD = 'USDD';
    case USDN = 'USDN';
    case USDP = 'USDP';
    case USDT = 'USDT';
    case WBNB = 'WBNB';
    case WIN = 'WIN';
    case WOO = 'WOO';
    case WRX = 'WRX';
    case XCN = 'XCN';
    case XVS = 'XVS';
    case YFI = 'YFI';
    case vUSDC = 'vUSDC';
}
