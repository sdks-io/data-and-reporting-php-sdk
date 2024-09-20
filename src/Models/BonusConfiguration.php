<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class BonusConfiguration implements \JsonSerializable
{
    /**
     * @var array
     */
    private $pricingAccountId = [];

    /**
     * @var array
     */
    private $pricingAccountNumber = [];

    /**
     * @var array
     */
    private $pricingAccountShortName = [];

    /**
     * @var array
     */
    private $pricingAccountFullName = [];

    /**
     * @var array
     */
    private $feeRuleId = [];

    /**
     * @var array
     */
    private $feeRuleDescription = [];

    /**
     * @var array
     */
    private $feeRuleDateEffective = [];

    /**
     * @var array
     */
    private $feeRuleDateTerminated = [];

    /**
     * @var array
     */
    private $bonusPaidTo = [];

    /**
     * @var array
     */
    private $bonusPaidToAccountId = [];

    /**
     * @var array
     */
    private $bonusPaidToAccountNumber = [];

    /**
     * @var array
     */
    private $bonusPaidToAccountShortName = [];

    /**
     * @var array
     */
    private $bonusPaidToAccountFullName = [];

    /**
     * @var array
     */
    private $frequency = [];

    /**
     * @var array
     */
    private $nextCalculationDate = [];

    /**
     * @var array
     */
    private $previousCalculatedDate = [];

    /**
     * @var array
     */
    private $feeRuleBasis = [];

    /**
     * @var array
     */
    private $feeRuleCurrencyCode = [];

    /**
     * @var array
     */
    private $feeRuleCurrencySymbol = [];

    /**
     * @var array
     */
    private $feeRuleAvailableFrom = [];

    /**
     * @var array
     */
    private $feeRuleAvailableTo = [];

    /**
     * @var FeeRuleLocation[]|null
     */
    private $feeRuleLocations;

    /**
     * @var FeeRuleTier[]|null
     */
    private $feeRuleTiers;

    /**
     * @var AssociatedAccount[]|null
     */
    private $associatedAccounts;

    /**
     * @var FeeRuleProduct[]|null
     */
    private $feeRuleProducts;

    /**
     * Returns Pricing Account Id.
     * Account identifier of the Pricing Account associated with the Payer.
     */
    public function getPricingAccountId(): ?int
    {
        if (count($this->pricingAccountId) == 0) {
            return null;
        }
        return $this->pricingAccountId['value'];
    }

    /**
     * Sets Pricing Account Id.
     * Account identifier of the Pricing Account associated with the Payer.
     *
     * @maps PricingAccountId
     */
    public function setPricingAccountId(?int $pricingAccountId): void
    {
        $this->pricingAccountId['value'] = $pricingAccountId;
    }

    /**
     * Unsets Pricing Account Id.
     * Account identifier of the Pricing Account associated with the Payer.
     */
    public function unsetPricingAccountId(): void
    {
        $this->pricingAccountId = [];
    }

    /**
     * Returns Pricing Account Number.
     * Account number of the Pricing Account associated with the Payer.
     */
    public function getPricingAccountNumber(): ?string
    {
        if (count($this->pricingAccountNumber) == 0) {
            return null;
        }
        return $this->pricingAccountNumber['value'];
    }

    /**
     * Sets Pricing Account Number.
     * Account number of the Pricing Account associated with the Payer.
     *
     * @maps PricingAccountNumber
     */
    public function setPricingAccountNumber(?string $pricingAccountNumber): void
    {
        $this->pricingAccountNumber['value'] = $pricingAccountNumber;
    }

    /**
     * Unsets Pricing Account Number.
     * Account number of the Pricing Account associated with the Payer.
     */
    public function unsetPricingAccountNumber(): void
    {
        $this->pricingAccountNumber = [];
    }

    /**
     * Returns Pricing Account Short Name.
     * Short name of the Pricing Account associated with the Payer.
     */
    public function getPricingAccountShortName(): ?string
    {
        if (count($this->pricingAccountShortName) == 0) {
            return null;
        }
        return $this->pricingAccountShortName['value'];
    }

    /**
     * Sets Pricing Account Short Name.
     * Short name of the Pricing Account associated with the Payer.
     *
     * @maps PricingAccountShortName
     */
    public function setPricingAccountShortName(?string $pricingAccountShortName): void
    {
        $this->pricingAccountShortName['value'] = $pricingAccountShortName;
    }

    /**
     * Unsets Pricing Account Short Name.
     * Short name of the Pricing Account associated with the Payer.
     */
    public function unsetPricingAccountShortName(): void
    {
        $this->pricingAccountShortName = [];
    }

    /**
     * Returns Pricing Account Full Name.
     * Full name of the Pricing Account associated with the Payer.
     */
    public function getPricingAccountFullName(): ?string
    {
        if (count($this->pricingAccountFullName) == 0) {
            return null;
        }
        return $this->pricingAccountFullName['value'];
    }

    /**
     * Sets Pricing Account Full Name.
     * Full name of the Pricing Account associated with the Payer.
     *
     * @maps PricingAccountFullName
     */
    public function setPricingAccountFullName(?string $pricingAccountFullName): void
    {
        $this->pricingAccountFullName['value'] = $pricingAccountFullName;
    }

    /**
     * Unsets Pricing Account Full Name.
     * Full name of the Pricing Account associated with the Payer.
     */
    public function unsetPricingAccountFullName(): void
    {
        $this->pricingAccountFullName = [];
    }

    /**
     * Returns Fee Rule Id.
     * Bonus or association bonus configuration identifier that is associated to the payer.
     */
    public function getFeeRuleId(): ?int
    {
        if (count($this->feeRuleId) == 0) {
            return null;
        }
        return $this->feeRuleId['value'];
    }

    /**
     * Sets Fee Rule Id.
     * Bonus or association bonus configuration identifier that is associated to the payer.
     *
     * @maps FeeRuleId
     */
    public function setFeeRuleId(?int $feeRuleId): void
    {
        $this->feeRuleId['value'] = $feeRuleId;
    }

    /**
     * Unsets Fee Rule Id.
     * Bonus or association bonus configuration identifier that is associated to the payer.
     */
    public function unsetFeeRuleId(): void
    {
        $this->feeRuleId = [];
    }

    /**
     * Returns Fee Rule Description.
     * Bonus or association bonus configuration description that is associated to the payer.
     */
    public function getFeeRuleDescription(): ?string
    {
        if (count($this->feeRuleDescription) == 0) {
            return null;
        }
        return $this->feeRuleDescription['value'];
    }

    /**
     * Sets Fee Rule Description.
     * Bonus or association bonus configuration description that is associated to the payer.
     *
     * @maps FeeRuleDescription
     */
    public function setFeeRuleDescription(?string $feeRuleDescription): void
    {
        $this->feeRuleDescription['value'] = $feeRuleDescription;
    }

    /**
     * Unsets Fee Rule Description.
     * Bonus or association bonus configuration description that is associated to the payer.
     */
    public function unsetFeeRuleDescription(): void
    {
        $this->feeRuleDescription = [];
    }

    /**
     * Returns Fee Rule Date Effective.
     * The bonus or association bonus configuration becomes effective on the payer from this date.
     * Format: YYYYMMDD
     */
    public function getFeeRuleDateEffective(): ?string
    {
        if (count($this->feeRuleDateEffective) == 0) {
            return null;
        }
        return $this->feeRuleDateEffective['value'];
    }

    /**
     * Sets Fee Rule Date Effective.
     * The bonus or association bonus configuration becomes effective on the payer from this date.
     * Format: YYYYMMDD
     *
     * @maps FeeRuleDateEffective
     */
    public function setFeeRuleDateEffective(?string $feeRuleDateEffective): void
    {
        $this->feeRuleDateEffective['value'] = $feeRuleDateEffective;
    }

    /**
     * Unsets Fee Rule Date Effective.
     * The bonus or association bonus configuration becomes effective on the payer from this date.
     * Format: YYYYMMDD
     */
    public function unsetFeeRuleDateEffective(): void
    {
        $this->feeRuleDateEffective = [];
    }

    /**
     * Returns Fee Rule Date Terminated.
     * The bonus or association bonus configuration is terminated for the payer on this date.
     * Format: YYYYMMDD
     */
    public function getFeeRuleDateTerminated(): ?string
    {
        if (count($this->feeRuleDateTerminated) == 0) {
            return null;
        }
        return $this->feeRuleDateTerminated['value'];
    }

    /**
     * Sets Fee Rule Date Terminated.
     * The bonus or association bonus configuration is terminated for the payer on this date.
     * Format: YYYYMMDD
     *
     * @maps FeeRuleDateTerminated
     */
    public function setFeeRuleDateTerminated(?string $feeRuleDateTerminated): void
    {
        $this->feeRuleDateTerminated['value'] = $feeRuleDateTerminated;
    }

    /**
     * Unsets Fee Rule Date Terminated.
     * The bonus or association bonus configuration is terminated for the payer on this date.
     * Format: YYYYMMDD
     */
    public function unsetFeeRuleDateTerminated(): void
    {
        $this->feeRuleDateTerminated = [];
    }

    /**
     * Returns Bonus Paid To.
     * Configuration to specify how the bonus is paid.
     *
     * Format: ID-Description
     *
     * Example:
     *
     * 1-Pay to Payer
     *
     * 2-Pay to invoice levels before the payer
     *
     * 3-Pay to specific customer
     *
     * 4-Pay to Association Customer
     *
     * 5-Pay to Associated Customers
     */
    public function getBonusPaidTo(): ?string
    {
        if (count($this->bonusPaidTo) == 0) {
            return null;
        }
        return $this->bonusPaidTo['value'];
    }

    /**
     * Sets Bonus Paid To.
     * Configuration to specify how the bonus is paid.
     *
     * Format: ID-Description
     *
     * Example:
     *
     * 1-Pay to Payer
     *
     * 2-Pay to invoice levels before the payer
     *
     * 3-Pay to specific customer
     *
     * 4-Pay to Association Customer
     *
     * 5-Pay to Associated Customers
     *
     * @maps BonusPaidTo
     */
    public function setBonusPaidTo(?string $bonusPaidTo): void
    {
        $this->bonusPaidTo['value'] = $bonusPaidTo;
    }

    /**
     * Unsets Bonus Paid To.
     * Configuration to specify how the bonus is paid.
     *
     * Format: ID-Description
     *
     * Example:
     *
     * 1-Pay to Payer
     *
     * 2-Pay to invoice levels before the payer
     *
     * 3-Pay to specific customer
     *
     * 4-Pay to Association Customer
     *
     * 5-Pay to Associated Customers
     */
    public function unsetBonusPaidTo(): void
    {
        $this->bonusPaidTo = [];
    }

    /**
     * Returns Bonus Paid to Account Id.
     * Account identifier of the specific account to which the bonus is paid back
     */
    public function getBonusPaidToAccountId(): ?int
    {
        if (count($this->bonusPaidToAccountId) == 0) {
            return null;
        }
        return $this->bonusPaidToAccountId['value'];
    }

    /**
     * Sets Bonus Paid to Account Id.
     * Account identifier of the specific account to which the bonus is paid back
     *
     * @maps BonusPaidToAccountId
     */
    public function setBonusPaidToAccountId(?int $bonusPaidToAccountId): void
    {
        $this->bonusPaidToAccountId['value'] = $bonusPaidToAccountId;
    }

    /**
     * Unsets Bonus Paid to Account Id.
     * Account identifier of the specific account to which the bonus is paid back
     */
    public function unsetBonusPaidToAccountId(): void
    {
        $this->bonusPaidToAccountId = [];
    }

    /**
     * Returns Bonus Paid to Account Number.
     * Account number of the specific account to which the bonus is paid back
     */
    public function getBonusPaidToAccountNumber(): ?string
    {
        if (count($this->bonusPaidToAccountNumber) == 0) {
            return null;
        }
        return $this->bonusPaidToAccountNumber['value'];
    }

    /**
     * Sets Bonus Paid to Account Number.
     * Account number of the specific account to which the bonus is paid back
     *
     * @maps BonusPaidToAccountNumber
     */
    public function setBonusPaidToAccountNumber(?string $bonusPaidToAccountNumber): void
    {
        $this->bonusPaidToAccountNumber['value'] = $bonusPaidToAccountNumber;
    }

    /**
     * Unsets Bonus Paid to Account Number.
     * Account number of the specific account to which the bonus is paid back
     */
    public function unsetBonusPaidToAccountNumber(): void
    {
        $this->bonusPaidToAccountNumber = [];
    }

    /**
     * Returns Bonus Paid to Account Short Name.
     * Short name of the specific account to which the bonus is paid back
     */
    public function getBonusPaidToAccountShortName(): ?string
    {
        if (count($this->bonusPaidToAccountShortName) == 0) {
            return null;
        }
        return $this->bonusPaidToAccountShortName['value'];
    }

    /**
     * Sets Bonus Paid to Account Short Name.
     * Short name of the specific account to which the bonus is paid back
     *
     * @maps BonusPaidToAccountShortName
     */
    public function setBonusPaidToAccountShortName(?string $bonusPaidToAccountShortName): void
    {
        $this->bonusPaidToAccountShortName['value'] = $bonusPaidToAccountShortName;
    }

    /**
     * Unsets Bonus Paid to Account Short Name.
     * Short name of the specific account to which the bonus is paid back
     */
    public function unsetBonusPaidToAccountShortName(): void
    {
        $this->bonusPaidToAccountShortName = [];
    }

    /**
     * Returns Bonus Paid to Account Full Name.
     * Full name of the specific account to which the bonus is paid back
     */
    public function getBonusPaidToAccountFullName(): ?string
    {
        if (count($this->bonusPaidToAccountFullName) == 0) {
            return null;
        }
        return $this->bonusPaidToAccountFullName['value'];
    }

    /**
     * Sets Bonus Paid to Account Full Name.
     * Full name of the specific account to which the bonus is paid back
     *
     * @maps BonusPaidToAccountFullName
     */
    public function setBonusPaidToAccountFullName(?string $bonusPaidToAccountFullName): void
    {
        $this->bonusPaidToAccountFullName['value'] = $bonusPaidToAccountFullName;
    }

    /**
     * Unsets Bonus Paid to Account Full Name.
     * Full name of the specific account to which the bonus is paid back
     */
    public function unsetBonusPaidToAccountFullName(): void
    {
        $this->bonusPaidToAccountFullName = [];
    }

    /**
     * Returns Frequency.
     * Frequency of the configuration.
     * Format: ID-Description
     * Examples:
     * 1-Daily (all days)
     * 2-Daily (only working days)
     * 3-Weekly – Monday
     */
    public function getFrequency(): ?string
    {
        if (count($this->frequency) == 0) {
            return null;
        }
        return $this->frequency['value'];
    }

    /**
     * Sets Frequency.
     * Frequency of the configuration.
     * Format: ID-Description
     * Examples:
     * 1-Daily (all days)
     * 2-Daily (only working days)
     * 3-Weekly – Monday
     *
     * @maps Frequency
     */
    public function setFrequency(?string $frequency): void
    {
        $this->frequency['value'] = $frequency;
    }

    /**
     * Unsets Frequency.
     * Frequency of the configuration.
     * Format: ID-Description
     * Examples:
     * 1-Daily (all days)
     * 2-Daily (only working days)
     * 3-Weekly – Monday
     */
    public function unsetFrequency(): void
    {
        $this->frequency = [];
    }

    /**
     * Returns Next Calculation Date.
     * The next bonus is calculated for the payer on this date.
     * Format: YYYYMMDD
     */
    public function getNextCalculationDate(): ?string
    {
        if (count($this->nextCalculationDate) == 0) {
            return null;
        }
        return $this->nextCalculationDate['value'];
    }

    /**
     * Sets Next Calculation Date.
     * The next bonus is calculated for the payer on this date.
     * Format: YYYYMMDD
     *
     * @maps NextCalculationDate
     */
    public function setNextCalculationDate(?string $nextCalculationDate): void
    {
        $this->nextCalculationDate['value'] = $nextCalculationDate;
    }

    /**
     * Unsets Next Calculation Date.
     * The next bonus is calculated for the payer on this date.
     * Format: YYYYMMDD
     */
    public function unsetNextCalculationDate(): void
    {
        $this->nextCalculationDate = [];
    }

    /**
     * Returns Previous Calculated Date.
     * The previous bonus was calculated for the payer on this date.
     * Format: YYYYMMDD
     */
    public function getPreviousCalculatedDate(): ?string
    {
        if (count($this->previousCalculatedDate) == 0) {
            return null;
        }
        return $this->previousCalculatedDate['value'];
    }

    /**
     * Sets Previous Calculated Date.
     * The previous bonus was calculated for the payer on this date.
     * Format: YYYYMMDD
     *
     * @maps PreviousCalculatedDate
     */
    public function setPreviousCalculatedDate(?string $previousCalculatedDate): void
    {
        $this->previousCalculatedDate['value'] = $previousCalculatedDate;
    }

    /**
     * Unsets Previous Calculated Date.
     * The previous bonus was calculated for the payer on this date.
     * Format: YYYYMMDD
     */
    public function unsetPreviousCalculatedDate(): void
    {
        $this->previousCalculatedDate = [];
    }

    /**
     * Returns Fee Rule Basis.
     * Fee Rule Basis configured.
     * Format: ID-Description
     * Example:
     * 1-Currency Per Unit
     * 2-Percentage of Uplift
     * 3-Lump Sum
     */
    public function getFeeRuleBasis(): ?string
    {
        if (count($this->feeRuleBasis) == 0) {
            return null;
        }
        return $this->feeRuleBasis['value'];
    }

    /**
     * Sets Fee Rule Basis.
     * Fee Rule Basis configured.
     * Format: ID-Description
     * Example:
     * 1-Currency Per Unit
     * 2-Percentage of Uplift
     * 3-Lump Sum
     *
     * @maps FeeRuleBasis
     */
    public function setFeeRuleBasis(?string $feeRuleBasis): void
    {
        $this->feeRuleBasis['value'] = $feeRuleBasis;
    }

    /**
     * Unsets Fee Rule Basis.
     * Fee Rule Basis configured.
     * Format: ID-Description
     * Example:
     * 1-Currency Per Unit
     * 2-Percentage of Uplift
     * 3-Lump Sum
     */
    public function unsetFeeRuleBasis(): void
    {
        $this->feeRuleBasis = [];
    }

    /**
     * Returns Fee Rule Currency Code.
     * ISO currency code of the currency configured in the Bonus Configuration, if any.
     */
    public function getFeeRuleCurrencyCode(): ?string
    {
        if (count($this->feeRuleCurrencyCode) == 0) {
            return null;
        }
        return $this->feeRuleCurrencyCode['value'];
    }

    /**
     * Sets Fee Rule Currency Code.
     * ISO currency code of the currency configured in the Bonus Configuration, if any.
     *
     * @maps FeeRuleCurrencyCode
     */
    public function setFeeRuleCurrencyCode(?string $feeRuleCurrencyCode): void
    {
        $this->feeRuleCurrencyCode['value'] = $feeRuleCurrencyCode;
    }

    /**
     * Unsets Fee Rule Currency Code.
     * ISO currency code of the currency configured in the Bonus Configuration, if any.
     */
    public function unsetFeeRuleCurrencyCode(): void
    {
        $this->feeRuleCurrencyCode = [];
    }

    /**
     * Returns Fee Rule Currency Symbol.
     * Currency symbol of the currency configured in the Bonus Configuration, if any.
     */
    public function getFeeRuleCurrencySymbol(): ?string
    {
        if (count($this->feeRuleCurrencySymbol) == 0) {
            return null;
        }
        return $this->feeRuleCurrencySymbol['value'];
    }

    /**
     * Sets Fee Rule Currency Symbol.
     * Currency symbol of the currency configured in the Bonus Configuration, if any.
     *
     * @maps FeeRuleCurrencySymbol
     */
    public function setFeeRuleCurrencySymbol(?string $feeRuleCurrencySymbol): void
    {
        $this->feeRuleCurrencySymbol['value'] = $feeRuleCurrencySymbol;
    }

    /**
     * Unsets Fee Rule Currency Symbol.
     * Currency symbol of the currency configured in the Bonus Configuration, if any.
     */
    public function unsetFeeRuleCurrencySymbol(): void
    {
        $this->feeRuleCurrencySymbol = [];
    }

    /**
     * Returns Fee Rule Available From.
     * This bonus or association bonus is available from this date.
     * Format: YYYYMMDD
     */
    public function getFeeRuleAvailableFrom(): ?string
    {
        if (count($this->feeRuleAvailableFrom) == 0) {
            return null;
        }
        return $this->feeRuleAvailableFrom['value'];
    }

    /**
     * Sets Fee Rule Available From.
     * This bonus or association bonus is available from this date.
     * Format: YYYYMMDD
     *
     * @maps FeeRuleAvailableFrom
     */
    public function setFeeRuleAvailableFrom(?string $feeRuleAvailableFrom): void
    {
        $this->feeRuleAvailableFrom['value'] = $feeRuleAvailableFrom;
    }

    /**
     * Unsets Fee Rule Available From.
     * This bonus or association bonus is available from this date.
     * Format: YYYYMMDD
     */
    public function unsetFeeRuleAvailableFrom(): void
    {
        $this->feeRuleAvailableFrom = [];
    }

    /**
     * Returns Fee Rule Available To.
     * This bonus or association bonus configuration will not be available from this date.
     * Format: YYYYMMDD
     */
    public function getFeeRuleAvailableTo(): ?string
    {
        if (count($this->feeRuleAvailableTo) == 0) {
            return null;
        }
        return $this->feeRuleAvailableTo['value'];
    }

    /**
     * Sets Fee Rule Available To.
     * This bonus or association bonus configuration will not be available from this date.
     * Format: YYYYMMDD
     *
     * @maps FeeRuleAvailableTo
     */
    public function setFeeRuleAvailableTo(?string $feeRuleAvailableTo): void
    {
        $this->feeRuleAvailableTo['value'] = $feeRuleAvailableTo;
    }

    /**
     * Unsets Fee Rule Available To.
     * This bonus or association bonus configuration will not be available from this date.
     * Format: YYYYMMDD
     */
    public function unsetFeeRuleAvailableTo(): void
    {
        $this->feeRuleAvailableTo = [];
    }

    /**
     * Returns Fee Rule Locations.
     *
     * @return FeeRuleLocation[]|null
     */
    public function getFeeRuleLocations(): ?array
    {
        return $this->feeRuleLocations;
    }

    /**
     * Sets Fee Rule Locations.
     *
     * @maps FeeRuleLocations
     *
     * @param FeeRuleLocation[]|null $feeRuleLocations
     */
    public function setFeeRuleLocations(?array $feeRuleLocations): void
    {
        $this->feeRuleLocations = $feeRuleLocations;
    }

    /**
     * Returns Fee Rule Tiers.
     *
     * @return FeeRuleTier[]|null
     */
    public function getFeeRuleTiers(): ?array
    {
        return $this->feeRuleTiers;
    }

    /**
     * Sets Fee Rule Tiers.
     *
     * @maps FeeRuleTiers
     *
     * @param FeeRuleTier[]|null $feeRuleTiers
     */
    public function setFeeRuleTiers(?array $feeRuleTiers): void
    {
        $this->feeRuleTiers = $feeRuleTiers;
    }

    /**
     * Returns Associated Accounts.
     *
     * @return AssociatedAccount[]|null
     */
    public function getAssociatedAccounts(): ?array
    {
        return $this->associatedAccounts;
    }

    /**
     * Sets Associated Accounts.
     *
     * @maps AssociatedAccounts
     *
     * @param AssociatedAccount[]|null $associatedAccounts
     */
    public function setAssociatedAccounts(?array $associatedAccounts): void
    {
        $this->associatedAccounts = $associatedAccounts;
    }

    /**
     * Returns Fee Rule Products.
     *
     * @return FeeRuleProduct[]|null
     */
    public function getFeeRuleProducts(): ?array
    {
        return $this->feeRuleProducts;
    }

    /**
     * Sets Fee Rule Products.
     *
     * @maps FeeRuleProducts
     *
     * @param FeeRuleProduct[]|null $feeRuleProducts
     */
    public function setFeeRuleProducts(?array $feeRuleProducts): void
    {
        $this->feeRuleProducts = $feeRuleProducts;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (!empty($this->pricingAccountId)) {
            $json['PricingAccountId']            = $this->pricingAccountId['value'];
        }
        if (!empty($this->pricingAccountNumber)) {
            $json['PricingAccountNumber']        = $this->pricingAccountNumber['value'];
        }
        if (!empty($this->pricingAccountShortName)) {
            $json['PricingAccountShortName']     = $this->pricingAccountShortName['value'];
        }
        if (!empty($this->pricingAccountFullName)) {
            $json['PricingAccountFullName']      = $this->pricingAccountFullName['value'];
        }
        if (!empty($this->feeRuleId)) {
            $json['FeeRuleId']                   = $this->feeRuleId['value'];
        }
        if (!empty($this->feeRuleDescription)) {
            $json['FeeRuleDescription']          = $this->feeRuleDescription['value'];
        }
        if (!empty($this->feeRuleDateEffective)) {
            $json['FeeRuleDateEffective']        = $this->feeRuleDateEffective['value'];
        }
        if (!empty($this->feeRuleDateTerminated)) {
            $json['FeeRuleDateTerminated']       = $this->feeRuleDateTerminated['value'];
        }
        if (!empty($this->bonusPaidTo)) {
            $json['BonusPaidTo']                 = $this->bonusPaidTo['value'];
        }
        if (!empty($this->bonusPaidToAccountId)) {
            $json['BonusPaidToAccountId']        = $this->bonusPaidToAccountId['value'];
        }
        if (!empty($this->bonusPaidToAccountNumber)) {
            $json['BonusPaidToAccountNumber']    = $this->bonusPaidToAccountNumber['value'];
        }
        if (!empty($this->bonusPaidToAccountShortName)) {
            $json['BonusPaidToAccountShortName'] = $this->bonusPaidToAccountShortName['value'];
        }
        if (!empty($this->bonusPaidToAccountFullName)) {
            $json['BonusPaidToAccountFullName']  = $this->bonusPaidToAccountFullName['value'];
        }
        if (!empty($this->frequency)) {
            $json['Frequency']                   = $this->frequency['value'];
        }
        if (!empty($this->nextCalculationDate)) {
            $json['NextCalculationDate']         = $this->nextCalculationDate['value'];
        }
        if (!empty($this->previousCalculatedDate)) {
            $json['PreviousCalculatedDate']      = $this->previousCalculatedDate['value'];
        }
        if (!empty($this->feeRuleBasis)) {
            $json['FeeRuleBasis']                = $this->feeRuleBasis['value'];
        }
        if (!empty($this->feeRuleCurrencyCode)) {
            $json['FeeRuleCurrencyCode']         = $this->feeRuleCurrencyCode['value'];
        }
        if (!empty($this->feeRuleCurrencySymbol)) {
            $json['FeeRuleCurrencySymbol']       = $this->feeRuleCurrencySymbol['value'];
        }
        if (!empty($this->feeRuleAvailableFrom)) {
            $json['FeeRuleAvailableFrom']        = $this->feeRuleAvailableFrom['value'];
        }
        if (!empty($this->feeRuleAvailableTo)) {
            $json['FeeRuleAvailableTo']          = $this->feeRuleAvailableTo['value'];
        }
        if (isset($this->feeRuleLocations)) {
            $json['FeeRuleLocations']            = $this->feeRuleLocations;
        }
        if (isset($this->feeRuleTiers)) {
            $json['FeeRuleTiers']                = $this->feeRuleTiers;
        }
        if (isset($this->associatedAccounts)) {
            $json['AssociatedAccounts']          = $this->associatedAccounts;
        }
        if (isset($this->feeRuleProducts)) {
            $json['FeeRuleProducts']             = $this->feeRuleProducts;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
