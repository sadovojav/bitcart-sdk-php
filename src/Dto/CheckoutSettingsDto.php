<?php

declare(strict_types=1);

namespace Bitcart\Dto;

class CheckoutSettingsDto extends AbstractDto
{
    /**
     * @param  int  $expiration
     * @param  int  $transactionSpeed
     * @param  int  $underpaidPercentage
     * @param  string  $customLogoLink
     * @param  int  $recommendedFeeTargetBlocks
     * @param  bool  $showRecommendedFee
     * @param  bool  $useDarkMode
     * @param  bool  $useHtmlTemplates
     * @param  bool  $emailRequired
     * @param  bool  $askAddress
     * @param  bool  $randomizeWalletSelection
     */
    public function __construct(
        public int $expiration = 15,
        public int $transactionSpeed = 0,
        public int $underpaidPercentage = 0,
        public string $customLogoLink = '',
        public int $recommendedFeeTargetBlocks = 1,
        public bool $showRecommendedFee = true,
        public bool $useDarkMode = false,
        public bool $useHtmlTemplates = false,
        public bool $emailRequired = false,
        public bool $askAddress = false,
        public bool $randomizeWalletSelection = false
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new static(
            $data['expiration'],
            $data['transactionSpeed'],
            $data['underpaidPercentage'],
            $data['customLogoLink'],
            $data['recommendedFeeTargetBlocks'],
            $data['showRecommendedFee'],
            $data['useDarkMode'],
            $data['useHtmlTemplates'],
            $data['emailRequired'],
            $data['askAddress'],
            $data['randomizeWalletSelection'],
        );
    }
}
