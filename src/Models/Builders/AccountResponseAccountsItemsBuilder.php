<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\AccountResponseAccountsItems;

/**
 * Builder for model AccountResponseAccountsItems
 *
 * @see AccountResponseAccountsItems
 */
class AccountResponseAccountsItemsBuilder
{
    /**
     * @var AccountResponseAccountsItems
     */
    private $instance;

    private function __construct(AccountResponseAccountsItems $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new account response accounts items Builder object.
     */
    public static function init(): self
    {
        return new self(new AccountResponseAccountsItems());
    }

    /**
     * Sets account full name field.
     */
    public function accountFullName(?string $value): self
    {
        $this->instance->setAccountFullName($value);
        return $this;
    }

    /**
     * Unsets account full name field.
     */
    public function unsetAccountFullName(): self
    {
        $this->instance->unsetAccountFullName();
        return $this;
    }

    /**
     * Sets account id field.
     */
    public function accountId(?int $value): self
    {
        $this->instance->setAccountId($value);
        return $this;
    }

    /**
     * Unsets account id field.
     */
    public function unsetAccountId(): self
    {
        $this->instance->unsetAccountId();
        return $this;
    }

    /**
     * Sets account number field.
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Unsets account number field.
     */
    public function unsetAccountNumber(): self
    {
        $this->instance->unsetAccountNumber();
        return $this;
    }

    /**
     * Sets account short name field.
     */
    public function accountShortName(?string $value): self
    {
        $this->instance->setAccountShortName($value);
        return $this;
    }

    /**
     * Unsets account short name field.
     */
    public function unsetAccountShortName(): self
    {
        $this->instance->unsetAccountShortName();
        return $this;
    }

    /**
     * Sets best of indicator field.
     */
    public function bestOfIndicator(?bool $value): self
    {
        $this->instance->setBestOfIndicator($value);
        return $this;
    }

    /**
     * Sets billing frequency type field.
     */
    public function billingFrequencyType(?string $value): self
    {
        $this->instance->setBillingFrequencyType($value);
        return $this;
    }

    /**
     * Unsets billing frequency type field.
     */
    public function unsetBillingFrequencyType(): self
    {
        $this->instance->unsetBillingFrequencyType();
        return $this;
    }

    /**
     * Sets billing frequency type id field.
     */
    public function billingFrequencyTypeId(?int $value): self
    {
        $this->instance->setBillingFrequencyTypeId($value);
        return $this;
    }

    /**
     * Unsets billing frequency type id field.
     */
    public function unsetBillingFrequencyTypeId(): self
    {
        $this->instance->unsetBillingFrequencyTypeId();
        return $this;
    }

    /**
     * Sets billing run frequency field.
     */
    public function billingRunFrequency(?string $value): self
    {
        $this->instance->setBillingRunFrequency($value);
        return $this;
    }

    /**
     * Unsets billing run frequency field.
     */
    public function unsetBillingRunFrequency(): self
    {
        $this->instance->unsetBillingRunFrequency();
        return $this;
    }

    /**
     * Sets billing run frequency type id field.
     */
    public function billingRunFrequencyTypeId(?int $value): self
    {
        $this->instance->setBillingRunFrequencyTypeId($value);
        return $this;
    }

    /**
     * Unsets billing run frequency type id field.
     */
    public function unsetBillingRunFrequencyTypeId(): self
    {
        $this->instance->unsetBillingRunFrequencyTypeId();
        return $this;
    }

    /**
     * Sets col co country code field.
     */
    public function colCoCountryCode(?string $value): self
    {
        $this->instance->setColCoCountryCode($value);
        return $this;
    }

    /**
     * Unsets col co country code field.
     */
    public function unsetColCoCountryCode(): self
    {
        $this->instance->unsetColCoCountryCode();
        return $this;
    }

    /**
     * Sets currency code field.
     */
    public function currencyCode(?string $value): self
    {
        $this->instance->setCurrencyCode($value);
        return $this;
    }

    /**
     * Unsets currency code field.
     */
    public function unsetCurrencyCode(): self
    {
        $this->instance->unsetCurrencyCode();
        return $this;
    }

    /**
     * Sets currency symbol field.
     */
    public function currencySymbol(?string $value): self
    {
        $this->instance->setCurrencySymbol($value);
        return $this;
    }

    /**
     * Unsets currency symbol field.
     */
    public function unsetCurrencySymbol(): self
    {
        $this->instance->unsetCurrencySymbol();
        return $this;
    }

    /**
     * Sets day 1 run field.
     */
    public function day1Run(?int $value): self
    {
        $this->instance->setDay1Run($value);
        return $this;
    }

    /**
     * Unsets day 1 run field.
     */
    public function unsetDay1Run(): self
    {
        $this->instance->unsetDay1Run();
        return $this;
    }

    /**
     * Sets day 2 run field.
     */
    public function day2Run(?int $value): self
    {
        $this->instance->setDay2Run($value);
        return $this;
    }

    /**
     * Unsets day 2 run field.
     */
    public function unsetDay2Run(): self
    {
        $this->instance->unsetDay2Run();
        return $this;
    }

    /**
     * Sets day 3 run field.
     */
    public function day3Run(?int $value): self
    {
        $this->instance->setDay3Run($value);
        return $this;
    }

    /**
     * Unsets day 3 run field.
     */
    public function unsetDay3Run(): self
    {
        $this->instance->unsetDay3Run();
        return $this;
    }

    /**
     * Sets day 4 run field.
     */
    public function day4Run(?int $value): self
    {
        $this->instance->setDay4Run($value);
        return $this;
    }

    /**
     * Unsets day 4 run field.
     */
    public function unsetDay4Run(): self
    {
        $this->instance->unsetDay4Run();
        return $this;
    }

    /**
     * Sets frequency type field.
     */
    public function frequencyType(?string $value): self
    {
        $this->instance->setFrequencyType($value);
        return $this;
    }

    /**
     * Unsets frequency type field.
     */
    public function unsetFrequencyType(): self
    {
        $this->instance->unsetFrequencyType();
        return $this;
    }

    /**
     * Sets gross amount field.
     */
    public function grossAmount(?float $value): self
    {
        $this->instance->setGrossAmount($value);
        return $this;
    }

    /**
     * Unsets gross amount field.
     */
    public function unsetGrossAmount(): self
    {
        $this->instance->unsetGrossAmount();
        return $this;
    }

    /**
     * Sets international poslanguage code field.
     */
    public function internationalPOSLanguageCode(?string $value): self
    {
        $this->instance->setInternationalPOSLanguageCode($value);
        return $this;
    }

    /**
     * Unsets international poslanguage code field.
     */
    public function unsetInternationalPOSLanguageCode(): self
    {
        $this->instance->unsetInternationalPOSLanguageCode();
        return $this;
    }

    /**
     * Sets international poslanguage id field.
     */
    public function internationalPOSLanguageID(?int $value): self
    {
        $this->instance->setInternationalPOSLanguageID($value);
        return $this;
    }

    /**
     * Unsets international poslanguage id field.
     */
    public function unsetInternationalPOSLanguageID(): self
    {
        $this->instance->unsetInternationalPOSLanguageID();
        return $this;
    }

    /**
     * Sets invoice account id field.
     */
    public function invoiceAccountID(?int $value): self
    {
        $this->instance->setInvoiceAccountID($value);
        return $this;
    }

    /**
     * Unsets invoice account id field.
     */
    public function unsetInvoiceAccountID(): self
    {
        $this->instance->unsetInvoiceAccountID();
        return $this;
    }

    /**
     * Sets invoice account number field.
     */
    public function invoiceAccountNumber(?string $value): self
    {
        $this->instance->setInvoiceAccountNumber($value);
        return $this;
    }

    /**
     * Unsets invoice account number field.
     */
    public function unsetInvoiceAccountNumber(): self
    {
        $this->instance->unsetInvoiceAccountNumber();
        return $this;
    }

    /**
     * Sets invoice account short name field.
     */
    public function invoiceAccountShortName(?string $value): self
    {
        $this->instance->setInvoiceAccountShortName($value);
        return $this;
    }

    /**
     * Unsets invoice account short name field.
     */
    public function unsetInvoiceAccountShortName(): self
    {
        $this->instance->unsetInvoiceAccountShortName();
        return $this;
    }

    /**
     * Sets invoice distribution methods field.
     */
    public function invoiceDistributionMethods(?array $value): self
    {
        $this->instance->setInvoiceDistributionMethods($value);
        return $this;
    }

    /**
     * Sets is international field.
     */
    public function isInternational(?bool $value): self
    {
        $this->instance->setIsInternational($value);
        return $this;
    }

    /**
     * Unsets is international field.
     */
    public function unsetIsInternational(): self
    {
        $this->instance->unsetIsInternational();
        return $this;
    }

    /**
     * Sets is invoice point field.
     */
    public function isInvoicePoint(?bool $value): self
    {
        $this->instance->setIsInvoicePoint($value);
        return $this;
    }

    /**
     * Unsets is invoice point field.
     */
    public function unsetIsInvoicePoint(): self
    {
        $this->instance->unsetIsInvoicePoint();
        return $this;
    }

    /**
     * Sets last modified date field.
     */
    public function lastModifiedDate(?string $value): self
    {
        $this->instance->setLastModifiedDate($value);
        return $this;
    }

    /**
     * Unsets last modified date field.
     */
    public function unsetLastModifiedDate(): self
    {
        $this->instance->unsetLastModifiedDate();
        return $this;
    }

    /**
     * Sets local currency code field.
     */
    public function localCurrencyCode(?string $value): self
    {
        $this->instance->setLocalCurrencyCode($value);
        return $this;
    }

    /**
     * Unsets local currency code field.
     */
    public function unsetLocalCurrencyCode(): self
    {
        $this->instance->unsetLocalCurrencyCode();
        return $this;
    }

    /**
     * Sets local currency symbol field.
     */
    public function localCurrencySymbol(?string $value): self
    {
        $this->instance->setLocalCurrencySymbol($value);
        return $this;
    }

    /**
     * Unsets local currency symbol field.
     */
    public function unsetLocalCurrencySymbol(): self
    {
        $this->instance->unsetLocalCurrencySymbol();
        return $this;
    }

    /**
     * Sets local poslanguage code field.
     */
    public function localPOSLanguageCode(?string $value): self
    {
        $this->instance->setLocalPOSLanguageCode($value);
        return $this;
    }

    /**
     * Unsets local poslanguage code field.
     */
    public function unsetLocalPOSLanguageCode(): self
    {
        $this->instance->unsetLocalPOSLanguageCode();
        return $this;
    }

    /**
     * Sets local poslanguage id field.
     */
    public function localPOSLanguageID(?int $value): self
    {
        $this->instance->setLocalPOSLanguageID($value);
        return $this;
    }

    /**
     * Unsets local poslanguage id field.
     */
    public function unsetLocalPOSLanguageID(): self
    {
        $this->instance->unsetLocalPOSLanguageID();
        return $this;
    }

    /**
     * Sets net amount field.
     */
    public function netAmount(?float $value): self
    {
        $this->instance->setNetAmount($value);
        return $this;
    }

    /**
     * Unsets net amount field.
     */
    public function unsetNetAmount(): self
    {
        $this->instance->unsetNetAmount();
        return $this;
    }

    /**
     * Sets outstanding balance field.
     */
    public function outstandingBalance(?float $value): self
    {
        $this->instance->setOutstandingBalance($value);
        return $this;
    }

    /**
     * Unsets outstanding balance field.
     */
    public function unsetOutstandingBalance(): self
    {
        $this->instance->unsetOutstandingBalance();
        return $this;
    }

    /**
     * Sets paid amount field.
     */
    public function paidAmount(?float $value): self
    {
        $this->instance->setPaidAmount($value);
        return $this;
    }

    /**
     * Unsets paid amount field.
     */
    public function unsetPaidAmount(): self
    {
        $this->instance->unsetPaidAmount();
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Unsets status field.
     */
    public function unsetStatus(): self
    {
        $this->instance->unsetStatus();
        return $this;
    }

    /**
     * Sets status reason field.
     */
    public function statusReason(?string $value): self
    {
        $this->instance->setStatusReason($value);
        return $this;
    }

    /**
     * Unsets status reason field.
     */
    public function unsetStatusReason(): self
    {
        $this->instance->unsetStatusReason();
        return $this;
    }

    /**
     * Sets total active card groups field.
     */
    public function totalActiveCardGroups(?int $value): self
    {
        $this->instance->setTotalActiveCardGroups($value);
        return $this;
    }

    /**
     * Unsets total active card groups field.
     */
    public function unsetTotalActiveCardGroups(): self
    {
        $this->instance->unsetTotalActiveCardGroups();
        return $this;
    }

    /**
     * Sets total active cards field.
     */
    public function totalActiveCards(?int $value): self
    {
        $this->instance->setTotalActiveCards($value);
        return $this;
    }

    /**
     * Unsets total active cards field.
     */
    public function unsetTotalActiveCards(): self
    {
        $this->instance->unsetTotalActiveCards();
        return $this;
    }

    /**
     * Sets total blocked cards field.
     */
    public function totalBlockedCards(?int $value): self
    {
        $this->instance->setTotalBlockedCards($value);
        return $this;
    }

    /**
     * Unsets total blocked cards field.
     */
    public function unsetTotalBlockedCards(): self
    {
        $this->instance->unsetTotalBlockedCards();
        return $this;
    }

    /**
     * Sets total cancelled cards field.
     */
    public function totalCancelledCards(?int $value): self
    {
        $this->instance->setTotalCancelledCards($value);
        return $this;
    }

    /**
     * Unsets total cancelled cards field.
     */
    public function unsetTotalCancelledCards(): self
    {
        $this->instance->unsetTotalCancelledCards();
        return $this;
    }

    /**
     * Sets total cards field.
     */
    public function totalCards(?int $value): self
    {
        $this->instance->setTotalCards($value);
        return $this;
    }

    /**
     * Unsets total cards field.
     */
    public function unsetTotalCards(): self
    {
        $this->instance->unsetTotalCards();
        return $this;
    }

    /**
     * Sets total expired cards field.
     */
    public function totalExpiredCards(?int $value): self
    {
        $this->instance->setTotalExpiredCards($value);
        return $this;
    }

    /**
     * Unsets total expired cards field.
     */
    public function unsetTotalExpiredCards(): self
    {
        $this->instance->unsetTotalExpiredCards();
        return $this;
    }

    /**
     * Sets total fraud cards field.
     */
    public function totalFraudCards(?int $value): self
    {
        $this->instance->setTotalFraudCards($value);
        return $this;
    }

    /**
     * Unsets total fraud cards field.
     */
    public function unsetTotalFraudCards(): self
    {
        $this->instance->unsetTotalFraudCards();
        return $this;
    }

    /**
     * Sets total new cards field.
     */
    public function totalNewCards(?int $value): self
    {
        $this->instance->setTotalNewCards($value);
        return $this;
    }

    /**
     * Unsets total new cards field.
     */
    public function unsetTotalNewCards(): self
    {
        $this->instance->unsetTotalNewCards();
        return $this;
    }

    /**
     * Sets total renewal pending cards field.
     */
    public function totalRenewalPendingCards(?int $value): self
    {
        $this->instance->setTotalRenewalPendingCards($value);
        return $this;
    }

    /**
     * Unsets total renewal pending cards field.
     */
    public function unsetTotalRenewalPendingCards(): self
    {
        $this->instance->unsetTotalRenewalPendingCards();
        return $this;
    }

    /**
     * Sets total replaced cards field.
     */
    public function totalReplacedCards(?int $value): self
    {
        $this->instance->setTotalReplacedCards($value);
        return $this;
    }

    /**
     * Unsets total replaced cards field.
     */
    public function unsetTotalReplacedCards(): self
    {
        $this->instance->unsetTotalReplacedCards();
        return $this;
    }

    /**
     * Sets total temporary block cards by customer field.
     */
    public function totalTemporaryBlockCardsByCustomer(?int $value): self
    {
        $this->instance->setTotalTemporaryBlockCardsByCustomer($value);
        return $this;
    }

    /**
     * Unsets total temporary block cards by customer field.
     */
    public function unsetTotalTemporaryBlockCardsByCustomer(): self
    {
        $this->instance->unsetTotalTemporaryBlockCardsByCustomer();
        return $this;
    }

    /**
     * Sets total temporary block cards by shell field.
     */
    public function totalTemporaryBlockCardsByShell(?int $value): self
    {
        $this->instance->setTotalTemporaryBlockCardsByShell($value);
        return $this;
    }

    /**
     * Unsets total temporary block cards by shell field.
     */
    public function unsetTotalTemporaryBlockCardsByShell(): self
    {
        $this->instance->unsetTotalTemporaryBlockCardsByShell();
        return $this;
    }

    /**
     * Sets vatamount field.
     */
    public function vATAmount(?float $value): self
    {
        $this->instance->setVATAmount($value);
        return $this;
    }

    /**
     * Unsets vatamount field.
     */
    public function unsetVATAmount(): self
    {
        $this->instance->unsetVATAmount();
        return $this;
    }

    /**
     * Sets is partner card field.
     */
    public function isPartnerCard(?int $value): self
    {
        $this->instance->setIsPartnerCard($value);
        return $this;
    }

    /**
     * Unsets is partner card field.
     */
    public function unsetIsPartnerCard(): self
    {
        $this->instance->unsetIsPartnerCard();
        return $this;
    }

    /**
     * Sets tolls customer id field.
     */
    public function tollsCustomerId(?string $value): self
    {
        $this->instance->setTollsCustomerId($value);
        return $this;
    }

    /**
     * Unsets tolls customer id field.
     */
    public function unsetTollsCustomerId(): self
    {
        $this->instance->unsetTollsCustomerId();
        return $this;
    }

    /**
     * Sets tolls colco country type id field.
     */
    public function tollsColcoCountryTypeId(?string $value): self
    {
        $this->instance->setTollsColcoCountryTypeId($value);
        return $this;
    }

    /**
     * Unsets tolls colco country type id field.
     */
    public function unsetTollsColcoCountryTypeId(): self
    {
        $this->instance->unsetTollsColcoCountryTypeId();
        return $this;
    }

    /**
     * Sets contracts field.
     */
    public function contracts(?array $value): self
    {
        $this->instance->setContracts($value);
        return $this;
    }

    /**
     * Sets is consortium member field.
     */
    public function isConsortiumMember(?string $value): self
    {
        $this->instance->setIsConsortiumMember($value);
        return $this;
    }

    /**
     * Unsets is consortium member field.
     */
    public function unsetIsConsortiumMember(): self
    {
        $this->instance->unsetIsConsortiumMember();
        return $this;
    }

    /**
     * Initializes a new account response accounts items object.
     */
    public function build(): AccountResponseAccountsItems
    {
        return CoreHelper::clone($this->instance);
    }
}
