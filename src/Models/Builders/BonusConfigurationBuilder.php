<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\BonusConfiguration;

/**
 * Builder for model BonusConfiguration
 *
 * @see BonusConfiguration
 */
class BonusConfigurationBuilder
{
    /**
     * @var BonusConfiguration
     */
    private $instance;

    private function __construct(BonusConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new bonus configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new BonusConfiguration());
    }

    /**
     * Sets pricing account id field.
     */
    public function pricingAccountId(?int $value): self
    {
        $this->instance->setPricingAccountId($value);
        return $this;
    }

    /**
     * Unsets pricing account id field.
     */
    public function unsetPricingAccountId(): self
    {
        $this->instance->unsetPricingAccountId();
        return $this;
    }

    /**
     * Sets pricing account number field.
     */
    public function pricingAccountNumber(?string $value): self
    {
        $this->instance->setPricingAccountNumber($value);
        return $this;
    }

    /**
     * Unsets pricing account number field.
     */
    public function unsetPricingAccountNumber(): self
    {
        $this->instance->unsetPricingAccountNumber();
        return $this;
    }

    /**
     * Sets pricing account short name field.
     */
    public function pricingAccountShortName(?string $value): self
    {
        $this->instance->setPricingAccountShortName($value);
        return $this;
    }

    /**
     * Unsets pricing account short name field.
     */
    public function unsetPricingAccountShortName(): self
    {
        $this->instance->unsetPricingAccountShortName();
        return $this;
    }

    /**
     * Sets pricing account full name field.
     */
    public function pricingAccountFullName(?string $value): self
    {
        $this->instance->setPricingAccountFullName($value);
        return $this;
    }

    /**
     * Unsets pricing account full name field.
     */
    public function unsetPricingAccountFullName(): self
    {
        $this->instance->unsetPricingAccountFullName();
        return $this;
    }

    /**
     * Sets fee rule id field.
     */
    public function feeRuleId(?int $value): self
    {
        $this->instance->setFeeRuleId($value);
        return $this;
    }

    /**
     * Unsets fee rule id field.
     */
    public function unsetFeeRuleId(): self
    {
        $this->instance->unsetFeeRuleId();
        return $this;
    }

    /**
     * Sets fee rule description field.
     */
    public function feeRuleDescription(?string $value): self
    {
        $this->instance->setFeeRuleDescription($value);
        return $this;
    }

    /**
     * Unsets fee rule description field.
     */
    public function unsetFeeRuleDescription(): self
    {
        $this->instance->unsetFeeRuleDescription();
        return $this;
    }

    /**
     * Sets fee rule date effective field.
     */
    public function feeRuleDateEffective(?string $value): self
    {
        $this->instance->setFeeRuleDateEffective($value);
        return $this;
    }

    /**
     * Unsets fee rule date effective field.
     */
    public function unsetFeeRuleDateEffective(): self
    {
        $this->instance->unsetFeeRuleDateEffective();
        return $this;
    }

    /**
     * Sets fee rule date terminated field.
     */
    public function feeRuleDateTerminated(?string $value): self
    {
        $this->instance->setFeeRuleDateTerminated($value);
        return $this;
    }

    /**
     * Unsets fee rule date terminated field.
     */
    public function unsetFeeRuleDateTerminated(): self
    {
        $this->instance->unsetFeeRuleDateTerminated();
        return $this;
    }

    /**
     * Sets bonus paid to field.
     */
    public function bonusPaidTo(?string $value): self
    {
        $this->instance->setBonusPaidTo($value);
        return $this;
    }

    /**
     * Unsets bonus paid to field.
     */
    public function unsetBonusPaidTo(): self
    {
        $this->instance->unsetBonusPaidTo();
        return $this;
    }

    /**
     * Sets bonus paid to account id field.
     */
    public function bonusPaidToAccountId(?int $value): self
    {
        $this->instance->setBonusPaidToAccountId($value);
        return $this;
    }

    /**
     * Unsets bonus paid to account id field.
     */
    public function unsetBonusPaidToAccountId(): self
    {
        $this->instance->unsetBonusPaidToAccountId();
        return $this;
    }

    /**
     * Sets bonus paid to account number field.
     */
    public function bonusPaidToAccountNumber(?string $value): self
    {
        $this->instance->setBonusPaidToAccountNumber($value);
        return $this;
    }

    /**
     * Unsets bonus paid to account number field.
     */
    public function unsetBonusPaidToAccountNumber(): self
    {
        $this->instance->unsetBonusPaidToAccountNumber();
        return $this;
    }

    /**
     * Sets bonus paid to account short name field.
     */
    public function bonusPaidToAccountShortName(?string $value): self
    {
        $this->instance->setBonusPaidToAccountShortName($value);
        return $this;
    }

    /**
     * Unsets bonus paid to account short name field.
     */
    public function unsetBonusPaidToAccountShortName(): self
    {
        $this->instance->unsetBonusPaidToAccountShortName();
        return $this;
    }

    /**
     * Sets bonus paid to account full name field.
     */
    public function bonusPaidToAccountFullName(?string $value): self
    {
        $this->instance->setBonusPaidToAccountFullName($value);
        return $this;
    }

    /**
     * Unsets bonus paid to account full name field.
     */
    public function unsetBonusPaidToAccountFullName(): self
    {
        $this->instance->unsetBonusPaidToAccountFullName();
        return $this;
    }

    /**
     * Sets frequency field.
     */
    public function frequency(?string $value): self
    {
        $this->instance->setFrequency($value);
        return $this;
    }

    /**
     * Unsets frequency field.
     */
    public function unsetFrequency(): self
    {
        $this->instance->unsetFrequency();
        return $this;
    }

    /**
     * Sets next calculation date field.
     */
    public function nextCalculationDate(?string $value): self
    {
        $this->instance->setNextCalculationDate($value);
        return $this;
    }

    /**
     * Unsets next calculation date field.
     */
    public function unsetNextCalculationDate(): self
    {
        $this->instance->unsetNextCalculationDate();
        return $this;
    }

    /**
     * Sets previous calculated date field.
     */
    public function previousCalculatedDate(?string $value): self
    {
        $this->instance->setPreviousCalculatedDate($value);
        return $this;
    }

    /**
     * Unsets previous calculated date field.
     */
    public function unsetPreviousCalculatedDate(): self
    {
        $this->instance->unsetPreviousCalculatedDate();
        return $this;
    }

    /**
     * Sets fee rule basis field.
     */
    public function feeRuleBasis(?string $value): self
    {
        $this->instance->setFeeRuleBasis($value);
        return $this;
    }

    /**
     * Unsets fee rule basis field.
     */
    public function unsetFeeRuleBasis(): self
    {
        $this->instance->unsetFeeRuleBasis();
        return $this;
    }

    /**
     * Sets fee rule currency code field.
     */
    public function feeRuleCurrencyCode(?string $value): self
    {
        $this->instance->setFeeRuleCurrencyCode($value);
        return $this;
    }

    /**
     * Unsets fee rule currency code field.
     */
    public function unsetFeeRuleCurrencyCode(): self
    {
        $this->instance->unsetFeeRuleCurrencyCode();
        return $this;
    }

    /**
     * Sets fee rule currency symbol field.
     */
    public function feeRuleCurrencySymbol(?string $value): self
    {
        $this->instance->setFeeRuleCurrencySymbol($value);
        return $this;
    }

    /**
     * Unsets fee rule currency symbol field.
     */
    public function unsetFeeRuleCurrencySymbol(): self
    {
        $this->instance->unsetFeeRuleCurrencySymbol();
        return $this;
    }

    /**
     * Sets fee rule available from field.
     */
    public function feeRuleAvailableFrom(?string $value): self
    {
        $this->instance->setFeeRuleAvailableFrom($value);
        return $this;
    }

    /**
     * Unsets fee rule available from field.
     */
    public function unsetFeeRuleAvailableFrom(): self
    {
        $this->instance->unsetFeeRuleAvailableFrom();
        return $this;
    }

    /**
     * Sets fee rule available to field.
     */
    public function feeRuleAvailableTo(?string $value): self
    {
        $this->instance->setFeeRuleAvailableTo($value);
        return $this;
    }

    /**
     * Unsets fee rule available to field.
     */
    public function unsetFeeRuleAvailableTo(): self
    {
        $this->instance->unsetFeeRuleAvailableTo();
        return $this;
    }

    /**
     * Sets fee rule locations field.
     */
    public function feeRuleLocations(?array $value): self
    {
        $this->instance->setFeeRuleLocations($value);
        return $this;
    }

    /**
     * Sets fee rule tiers field.
     */
    public function feeRuleTiers(?array $value): self
    {
        $this->instance->setFeeRuleTiers($value);
        return $this;
    }

    /**
     * Sets associated accounts field.
     */
    public function associatedAccounts(?array $value): self
    {
        $this->instance->setAssociatedAccounts($value);
        return $this;
    }

    /**
     * Sets fee rule products field.
     */
    public function feeRuleProducts(?array $value): self
    {
        $this->instance->setFeeRuleProducts($value);
        return $this;
    }

    /**
     * Initializes a new bonus configuration object.
     */
    public function build(): BonusConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
