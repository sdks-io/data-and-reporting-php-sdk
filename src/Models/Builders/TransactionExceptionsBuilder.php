<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\ExceptionSiteLocation;
use ShellDataReportingAPIsLib\Models\TransactionExceptions;

/**
 * Builder for model TransactionExceptions
 *
 * @see TransactionExceptions
 */
class TransactionExceptionsBuilder
{
    /**
     * @var TransactionExceptions
     */
    private $instance;

    private function __construct(TransactionExceptions $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new transaction exceptions Builder object.
     */
    public static function init(): self
    {
        return new self(new TransactionExceptions());
    }

    /**
     * Sets sales item id field.
     */
    public function salesItemId(?float $value): self
    {
        $this->instance->setSalesItemId($value);
        return $this;
    }

    /**
     * Unsets sales item id field.
     */
    public function unsetSalesItemId(): self
    {
        $this->instance->unsetSalesItemId();
        return $this;
    }

    /**
     * Sets card id field.
     */
    public function cardId(?int $value): self
    {
        $this->instance->setCardId($value);
        return $this;
    }

    /**
     * Unsets card id field.
     */
    public function unsetCardId(): self
    {
        $this->instance->unsetCardId();
        return $this;
    }

    /**
     * Sets product id field.
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
        return $this;
    }

    /**
     * Unsets product id field.
     */
    public function unsetProductId(): self
    {
        $this->instance->unsetProductId();
        return $this;
    }

    /**
     * Sets transaction guid field.
     */
    public function transactionGUID(?string $value): self
    {
        $this->instance->setTransactionGUID($value);
        return $this;
    }

    /**
     * Unsets transaction guid field.
     */
    public function unsetTransactionGUID(): self
    {
        $this->instance->unsetTransactionGUID();
        return $this;
    }

    /**
     * Sets transaction date field.
     */
    public function transactionDate(?string $value): self
    {
        $this->instance->setTransactionDate($value);
        return $this;
    }

    /**
     * Unsets transaction date field.
     */
    public function unsetTransactionDate(): self
    {
        $this->instance->unsetTransactionDate();
        return $this;
    }

    /**
     * Sets customer invoice value total gross field.
     */
    public function customerInvoiceValueTotalGross(?float $value): self
    {
        $this->instance->setCustomerInvoiceValueTotalGross($value);
        return $this;
    }

    /**
     * Unsets customer invoice value total gross field.
     */
    public function unsetCustomerInvoiceValueTotalGross(): self
    {
        $this->instance->unsetCustomerInvoiceValueTotalGross();
        return $this;
    }

    /**
     * Sets card pan field.
     */
    public function cardPAN(?string $value): self
    {
        $this->instance->setCardPAN($value);
        return $this;
    }

    /**
     * Unsets card pan field.
     */
    public function unsetCardPAN(): self
    {
        $this->instance->unsetCardPAN();
        return $this;
    }

    /**
     * Sets card expiry field.
     */
    public function cardExpiry(?string $value): self
    {
        $this->instance->setCardExpiry($value);
        return $this;
    }

    /**
     * Unsets card expiry field.
     */
    public function unsetCardExpiry(): self
    {
        $this->instance->unsetCardExpiry();
        return $this;
    }

    /**
     * Sets transaction time field.
     */
    public function transactionTime(?string $value): self
    {
        $this->instance->setTransactionTime($value);
        return $this;
    }

    /**
     * Unsets transaction time field.
     */
    public function unsetTransactionTime(): self
    {
        $this->instance->unsetTransactionTime();
        return $this;
    }

    /**
     * Sets utcoffset field.
     */
    public function uTCOffset(?string $value): self
    {
        $this->instance->setUTCOffset($value);
        return $this;
    }

    /**
     * Unsets utcoffset field.
     */
    public function unsetUTCOffset(): self
    {
        $this->instance->unsetUTCOffset();
        return $this;
    }

    /**
     * Sets fleet id input field.
     */
    public function fleetIdInput(?string $value): self
    {
        $this->instance->setFleetIdInput($value);
        return $this;
    }

    /**
     * Unsets fleet id input field.
     */
    public function unsetFleetIdInput(): self
    {
        $this->instance->unsetFleetIdInput();
        return $this;
    }

    /**
     * Sets odometer input field.
     */
    public function odometerInput(?int $value): self
    {
        $this->instance->setOdometerInput($value);
        return $this;
    }

    /**
     * Unsets odometer input field.
     */
    public function unsetOdometerInput(): self
    {
        $this->instance->unsetOdometerInput();
        return $this;
    }

    /**
     * Sets driver name field.
     */
    public function driverName(?string $value): self
    {
        $this->instance->setDriverName($value);
        return $this;
    }

    /**
     * Unsets driver name field.
     */
    public function unsetDriverName(): self
    {
        $this->instance->unsetDriverName();
        return $this;
    }

    /**
     * Sets vehicle registration field.
     */
    public function vehicleRegistration(?string $value): self
    {
        $this->instance->setVehicleRegistration($value);
        return $this;
    }

    /**
     * Unsets vehicle registration field.
     */
    public function unsetVehicleRegistration(): self
    {
        $this->instance->unsetVehicleRegistration();
        return $this;
    }

    /**
     * Sets invoice currency code field.
     */
    public function invoiceCurrencyCode(?string $value): self
    {
        $this->instance->setInvoiceCurrencyCode($value);
        return $this;
    }

    /**
     * Unsets invoice currency code field.
     */
    public function unsetInvoiceCurrencyCode(): self
    {
        $this->instance->unsetInvoiceCurrencyCode();
        return $this;
    }

    /**
     * Sets invoice currency symbol field.
     */
    public function invoiceCurrencySymbol(?string $value): self
    {
        $this->instance->setInvoiceCurrencySymbol($value);
        return $this;
    }

    /**
     * Unsets invoice currency symbol field.
     */
    public function unsetInvoiceCurrencySymbol(): self
    {
        $this->instance->unsetInvoiceCurrencySymbol();
        return $this;
    }

    /**
     * Sets transaction currency code field.
     */
    public function transactionCurrencyCode(?string $value): self
    {
        $this->instance->setTransactionCurrencyCode($value);
        return $this;
    }

    /**
     * Unsets transaction currency code field.
     */
    public function unsetTransactionCurrencyCode(): self
    {
        $this->instance->unsetTransactionCurrencyCode();
        return $this;
    }

    /**
     * Sets transaction currency symbol field.
     */
    public function transactionCurrencySymbol(?string $value): self
    {
        $this->instance->setTransactionCurrencySymbol($value);
        return $this;
    }

    /**
     * Unsets transaction currency symbol field.
     */
    public function unsetTransactionCurrencySymbol(): self
    {
        $this->instance->unsetTransactionCurrencySymbol();
        return $this;
    }

    /**
     * Sets transaction net amount field.
     */
    public function transactionNetAmount(?float $value): self
    {
        $this->instance->setTransactionNetAmount($value);
        return $this;
    }

    /**
     * Unsets transaction net amount field.
     */
    public function unsetTransactionNetAmount(): self
    {
        $this->instance->unsetTransactionNetAmount();
        return $this;
    }

    /**
     * Sets transaction tax field.
     */
    public function transactionTax(?float $value): self
    {
        $this->instance->setTransactionTax($value);
        return $this;
    }

    /**
     * Unsets transaction tax field.
     */
    public function unsetTransactionTax(): self
    {
        $this->instance->unsetTransactionTax();
        return $this;
    }

    /**
     * Sets transaction gross amount field.
     */
    public function transactionGrossAmount(?float $value): self
    {
        $this->instance->setTransactionGrossAmount($value);
        return $this;
    }

    /**
     * Unsets transaction gross amount field.
     */
    public function unsetTransactionGrossAmount(): self
    {
        $this->instance->unsetTransactionGrossAmount();
        return $this;
    }

    /**
     * Sets invoice net amount field.
     */
    public function invoiceNetAmount(?float $value): self
    {
        $this->instance->setInvoiceNetAmount($value);
        return $this;
    }

    /**
     * Unsets invoice net amount field.
     */
    public function unsetInvoiceNetAmount(): self
    {
        $this->instance->unsetInvoiceNetAmount();
        return $this;
    }

    /**
     * Sets invoice tax field.
     */
    public function invoiceTax(?float $value): self
    {
        $this->instance->setInvoiceTax($value);
        return $this;
    }

    /**
     * Unsets invoice tax field.
     */
    public function unsetInvoiceTax(): self
    {
        $this->instance->unsetInvoiceTax();
        return $this;
    }

    /**
     * Sets invoice gross amount field.
     */
    public function invoiceGrossAmount(?float $value): self
    {
        $this->instance->setInvoiceGrossAmount($value);
        return $this;
    }

    /**
     * Unsets invoice gross amount field.
     */
    public function unsetInvoiceGrossAmount(): self
    {
        $this->instance->unsetInvoiceGrossAmount();
        return $this;
    }

    /**
     * Sets purchased in country field.
     */
    public function purchasedInCountry(?string $value): self
    {
        $this->instance->setPurchasedInCountry($value);
        return $this;
    }

    /**
     * Unsets purchased in country field.
     */
    public function unsetPurchasedInCountry(): self
    {
        $this->instance->unsetPurchasedInCountry();
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
     * Sets account name field.
     */
    public function accountName(?string $value): self
    {
        $this->instance->setAccountName($value);
        return $this;
    }

    /**
     * Unsets account name field.
     */
    public function unsetAccountName(): self
    {
        $this->instance->unsetAccountName();
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
     * Sets quantity field.
     */
    public function quantity(?float $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Unsets quantity field.
     */
    public function unsetQuantity(): self
    {
        $this->instance->unsetQuantity();
        return $this;
    }

    /**
     * Sets fuel product field.
     */
    public function fuelProduct(?bool $value): self
    {
        $this->instance->setFuelProduct($value);
        return $this;
    }

    /**
     * Unsets fuel product field.
     */
    public function unsetFuelProduct(): self
    {
        $this->instance->unsetFuelProduct();
        return $this;
    }

    /**
     * Sets unit price in transaction currency field.
     */
    public function unitPriceInTransactionCurrency(?float $value): self
    {
        $this->instance->setUnitPriceInTransactionCurrency($value);
        return $this;
    }

    /**
     * Unsets unit price in transaction currency field.
     */
    public function unsetUnitPriceInTransactionCurrency(): self
    {
        $this->instance->unsetUnitPriceInTransactionCurrency();
        return $this;
    }

    /**
     * Sets unit price in invoice currency field.
     */
    public function unitPriceInInvoiceCurrency(?float $value): self
    {
        $this->instance->setUnitPriceInInvoiceCurrency($value);
        return $this;
    }

    /**
     * Unsets unit price in invoice currency field.
     */
    public function unsetUnitPriceInInvoiceCurrency(): self
    {
        $this->instance->unsetUnitPriceInInvoiceCurrency();
        return $this;
    }

    /**
     * Sets unit discount transaction currency field.
     */
    public function unitDiscountTransactionCurrency(?float $value): self
    {
        $this->instance->setUnitDiscountTransactionCurrency($value);
        return $this;
    }

    /**
     * Unsets unit discount transaction currency field.
     */
    public function unsetUnitDiscountTransactionCurrency(): self
    {
        $this->instance->unsetUnitDiscountTransactionCurrency();
        return $this;
    }

    /**
     * Sets unit discount invoice currency field.
     */
    public function unitDiscountInvoiceCurrency(?float $value): self
    {
        $this->instance->setUnitDiscountInvoiceCurrency($value);
        return $this;
    }

    /**
     * Unsets unit discount invoice currency field.
     */
    public function unsetUnitDiscountInvoiceCurrency(): self
    {
        $this->instance->unsetUnitDiscountInvoiceCurrency();
        return $this;
    }

    /**
     * Sets is invoiced field.
     */
    public function isInvoiced(?bool $value): self
    {
        $this->instance->setIsInvoiced($value);
        return $this;
    }

    /**
     * Unsets is invoiced field.
     */
    public function unsetIsInvoiced(): self
    {
        $this->instance->unsetIsInvoiced();
        return $this;
    }

    /**
     * Sets invoice number field.
     */
    public function invoiceNumber(?string $value): self
    {
        $this->instance->setInvoiceNumber($value);
        return $this;
    }

    /**
     * Unsets invoice number field.
     */
    public function unsetInvoiceNumber(): self
    {
        $this->instance->unsetInvoiceNumber();
        return $this;
    }

    /**
     * Sets invoice date field.
     */
    public function invoiceDate(?string $value): self
    {
        $this->instance->setInvoiceDate($value);
        return $this;
    }

    /**
     * Unsets invoice date field.
     */
    public function unsetInvoiceDate(): self
    {
        $this->instance->unsetInvoiceDate();
        return $this;
    }

    /**
     * Sets site code field.
     */
    public function siteCode(?string $value): self
    {
        $this->instance->setSiteCode($value);
        return $this;
    }

    /**
     * Unsets site code field.
     */
    public function unsetSiteCode(): self
    {
        $this->instance->unsetSiteCode();
        return $this;
    }

    /**
     * Sets site name field.
     */
    public function siteName(?string $value): self
    {
        $this->instance->setSiteName($value);
        return $this;
    }

    /**
     * Unsets site name field.
     */
    public function unsetSiteName(): self
    {
        $this->instance->unsetSiteName();
        return $this;
    }

    /**
     * Sets site country field.
     */
    public function siteCountry(?string $value): self
    {
        $this->instance->setSiteCountry($value);
        return $this;
    }

    /**
     * Unsets site country field.
     */
    public function unsetSiteCountry(): self
    {
        $this->instance->unsetSiteCountry();
        return $this;
    }

    /**
     * Sets location field.
     */
    public function location(?ExceptionSiteLocation $value): self
    {
        $this->instance->setLocation($value);
        return $this;
    }

    /**
     * Sets card group name field.
     */
    public function cardGroupName(?string $value): self
    {
        $this->instance->setCardGroupName($value);
        return $this;
    }

    /**
     * Unsets card group name field.
     */
    public function unsetCardGroupName(): self
    {
        $this->instance->unsetCardGroupName();
        return $this;
    }

    /**
     * Sets receipt number field.
     */
    public function receiptNumber(?string $value): self
    {
        $this->instance->setReceiptNumber($value);
        return $this;
    }

    /**
     * Unsets receipt number field.
     */
    public function unsetReceiptNumber(): self
    {
        $this->instance->unsetReceiptNumber();
        return $this;
    }

    /**
     * Sets product code field.
     */
    public function productCode(?string $value): self
    {
        $this->instance->setProductCode($value);
        return $this;
    }

    /**
     * Unsets product code field.
     */
    public function unsetProductCode(): self
    {
        $this->instance->unsetProductCode();
        return $this;
    }

    /**
     * Sets product name field.
     */
    public function productName(?string $value): self
    {
        $this->instance->setProductName($value);
        return $this;
    }

    /**
     * Unsets product name field.
     */
    public function unsetProductName(): self
    {
        $this->instance->unsetProductName();
        return $this;
    }

    /**
     * Sets product group id field.
     */
    public function productGroupId(?int $value): self
    {
        $this->instance->setProductGroupId($value);
        return $this;
    }

    /**
     * Unsets product group id field.
     */
    public function unsetProductGroupId(): self
    {
        $this->instance->unsetProductGroupId();
        return $this;
    }

    /**
     * Sets product group name field.
     */
    public function productGroupName(?string $value): self
    {
        $this->instance->setProductGroupName($value);
        return $this;
    }

    /**
     * Unsets product group name field.
     */
    public function unsetProductGroupName(): self
    {
        $this->instance->unsetProductGroupName();
        return $this;
    }

    /**
     * Sets del co exchange rate field.
     */
    public function delCoExchangeRate(?float $value): self
    {
        $this->instance->setDelCoExchangeRate($value);
        return $this;
    }

    /**
     * Unsets del co exchange rate field.
     */
    public function unsetDelCoExchangeRate(): self
    {
        $this->instance->unsetDelCoExchangeRate();
        return $this;
    }

    /**
     * Sets col co exchange rate field.
     */
    public function colCoExchangeRate(?float $value): self
    {
        $this->instance->setColCoExchangeRate($value);
        return $this;
    }

    /**
     * Unsets col co exchange rate field.
     */
    public function unsetColCoExchangeRate(): self
    {
        $this->instance->unsetColCoExchangeRate();
        return $this;
    }

    /**
     * Sets is shell site field.
     */
    public function isShellSite(?bool $value): self
    {
        $this->instance->setIsShellSite($value);
        return $this;
    }

    /**
     * Unsets is shell site field.
     */
    public function unsetIsShellSite(): self
    {
        $this->instance->unsetIsShellSite();
        return $this;
    }

    /**
     * Sets network field.
     */
    public function network(?string $value): self
    {
        $this->instance->setNetwork($value);
        return $this;
    }

    /**
     * Unsets network field.
     */
    public function unsetNetwork(): self
    {
        $this->instance->unsetNetwork();
        return $this;
    }

    /**
     * Sets site group id field.
     */
    public function siteGroupId(?int $value): self
    {
        $this->instance->setSiteGroupId($value);
        return $this;
    }

    /**
     * Unsets site group id field.
     */
    public function unsetSiteGroupId(): self
    {
        $this->instance->unsetSiteGroupId();
        return $this;
    }

    /**
     * Sets site group name field.
     */
    public function siteGroupName(?string $value): self
    {
        $this->instance->setSiteGroupName($value);
        return $this;
    }

    /**
     * Unsets site group name field.
     */
    public function unsetSiteGroupName(): self
    {
        $this->instance->unsetSiteGroupName();
        return $this;
    }

    /**
     * Sets posting date field.
     */
    public function postingDate(?string $value): self
    {
        $this->instance->setPostingDate($value);
        return $this;
    }

    /**
     * Unsets posting date field.
     */
    public function unsetPostingDate(): self
    {
        $this->instance->unsetPostingDate();
        return $this;
    }

    /**
     * Sets issuer code field.
     */
    public function issuerCode(?string $value): self
    {
        $this->instance->setIssuerCode($value);
        return $this;
    }

    /**
     * Unsets issuer code field.
     */
    public function unsetIssuerCode(): self
    {
        $this->instance->unsetIssuerCode();
        return $this;
    }

    /**
     * Sets purchased in country code field.
     */
    public function purchasedInCountryCode(?string $value): self
    {
        $this->instance->setPurchasedInCountryCode($value);
        return $this;
    }

    /**
     * Unsets purchased in country code field.
     */
    public function unsetPurchasedInCountryCode(): self
    {
        $this->instance->unsetPurchasedInCountryCode();
        return $this;
    }

    /**
     * Sets customer country code field.
     */
    public function customerCountryCode(?string $value): self
    {
        $this->instance->setCustomerCountryCode($value);
        return $this;
    }

    /**
     * Unsets customer country code field.
     */
    public function unsetCustomerCountryCode(): self
    {
        $this->instance->unsetCustomerCountryCode();
        return $this;
    }

    /**
     * Sets customer country field.
     */
    public function customerCountry(?string $value): self
    {
        $this->instance->setCustomerCountry($value);
        return $this;
    }

    /**
     * Unsets customer country field.
     */
    public function unsetCustomerCountry(): self
    {
        $this->instance->unsetCustomerCountry();
        return $this;
    }

    /**
     * Sets release code field.
     */
    public function releaseCode(?string $value): self
    {
        $this->instance->setReleaseCode($value);
        return $this;
    }

    /**
     * Unsets release code field.
     */
    public function unsetReleaseCode(): self
    {
        $this->instance->unsetReleaseCode();
        return $this;
    }

    /**
     * Sets card group id field.
     */
    public function cardGroupId(?string $value): self
    {
        $this->instance->setCardGroupId($value);
        return $this;
    }

    /**
     * Unsets card group id field.
     */
    public function unsetCardGroupId(): self
    {
        $this->instance->unsetCardGroupId();
        return $this;
    }

    /**
     * Sets card sequence number field.
     */
    public function cardSequenceNumber(?string $value): self
    {
        $this->instance->setCardSequenceNumber($value);
        return $this;
    }

    /**
     * Unsets card sequence number field.
     */
    public function unsetCardSequenceNumber(): self
    {
        $this->instance->unsetCardSequenceNumber();
        return $this;
    }

    /**
     * Sets check digit field.
     */
    public function checkDigit(?string $value): self
    {
        $this->instance->setCheckDigit($value);
        return $this;
    }

    /**
     * Unsets check digit field.
     */
    public function unsetCheckDigit(): self
    {
        $this->instance->unsetCheckDigit();
        return $this;
    }

    /**
     * Sets fleet iddescription field.
     */
    public function fleetIDDescription(?string $value): self
    {
        $this->instance->setFleetIDDescription($value);
        return $this;
    }

    /**
     * Unsets fleet iddescription field.
     */
    public function unsetFleetIDDescription(): self
    {
        $this->instance->unsetFleetIDDescription();
        return $this;
    }

    /**
     * Sets vatrate field.
     */
    public function vATRate(?float $value): self
    {
        $this->instance->setVATRate($value);
        return $this;
    }

    /**
     * Unsets vatrate field.
     */
    public function unsetVATRate(): self
    {
        $this->instance->unsetVATRate();
        return $this;
    }

    /**
     * Sets vatcategory field.
     */
    public function vATCategory(?string $value): self
    {
        $this->instance->setVATCategory($value);
        return $this;
    }

    /**
     * Unsets vatcategory field.
     */
    public function unsetVATCategory(): self
    {
        $this->instance->unsetVATCategory();
        return $this;
    }

    /**
     * Sets effective discount in trx currency field.
     */
    public function effectiveDiscountInTrxCurrency(?string $value): self
    {
        $this->instance->setEffectiveDiscountInTrxCurrency($value);
        return $this;
    }

    /**
     * Unsets effective discount in trx currency field.
     */
    public function unsetEffectiveDiscountInTrxCurrency(): self
    {
        $this->instance->unsetEffectiveDiscountInTrxCurrency();
        return $this;
    }

    /**
     * Sets transaction type field.
     */
    public function transactionType(?string $value): self
    {
        $this->instance->setTransactionType($value);
        return $this;
    }

    /**
     * Unsets transaction type field.
     */
    public function unsetTransactionType(): self
    {
        $this->instance->unsetTransactionType();
        return $this;
    }

    /**
     * Sets pinindicator field.
     */
    public function pINIndicator(?string $value): self
    {
        $this->instance->setPINIndicator($value);
        return $this;
    }

    /**
     * Unsets pinindicator field.
     */
    public function unsetPINIndicator(): self
    {
        $this->instance->unsetPINIndicator();
        return $this;
    }

    /**
     * Sets vatapplicable field.
     */
    public function vATApplicable(?string $value): self
    {
        $this->instance->setVATApplicable($value);
        return $this;
    }

    /**
     * Unsets vatapplicable field.
     */
    public function unsetVATApplicable(): self
    {
        $this->instance->unsetVATApplicable();
        return $this;
    }

    /**
     * Sets net invoice indicator field.
     */
    public function netInvoiceIndicator(?string $value): self
    {
        $this->instance->setNetInvoiceIndicator($value);
        return $this;
    }

    /**
     * Unsets net invoice indicator field.
     */
    public function unsetNetInvoiceIndicator(): self
    {
        $this->instance->unsetNetInvoiceIndicator();
        return $this;
    }

    /**
     * Sets customer currency code field.
     */
    public function customerCurrencyCode(?string $value): self
    {
        $this->instance->setCustomerCurrencyCode($value);
        return $this;
    }

    /**
     * Unsets customer currency code field.
     */
    public function unsetCustomerCurrencyCode(): self
    {
        $this->instance->unsetCustomerCurrencyCode();
        return $this;
    }

    /**
     * Sets customer currency symbol field.
     */
    public function customerCurrencySymbol(?string $value): self
    {
        $this->instance->setCustomerCurrencySymbol($value);
        return $this;
    }

    /**
     * Unsets customer currency symbol field.
     */
    public function unsetCustomerCurrencySymbol(): self
    {
        $this->instance->unsetCustomerCurrencySymbol();
        return $this;
    }

    /**
     * Sets effective unit discount in customer currency field.
     */
    public function effectiveUnitDiscountInCustomerCurrency(?float $value): self
    {
        $this->instance->setEffectiveUnitDiscountInCustomerCurrency($value);
        return $this;
    }

    /**
     * Unsets effective unit discount in customer currency field.
     */
    public function unsetEffectiveUnitDiscountInCustomerCurrency(): self
    {
        $this->instance->unsetEffectiveUnitDiscountInCustomerCurrency();
        return $this;
    }

    /**
     * Sets effective discount in customer currency field.
     */
    public function effectiveDiscountInCustomerCurrency(?float $value): self
    {
        $this->instance->setEffectiveDiscountInCustomerCurrency($value);
        return $this;
    }

    /**
     * Unsets effective discount in customer currency field.
     */
    public function unsetEffectiveDiscountInCustomerCurrency(): self
    {
        $this->instance->unsetEffectiveDiscountInCustomerCurrency();
        return $this;
    }

    /**
     * Sets vaton net amount in customer currency field.
     */
    public function vATonNetAmountInCustomerCurrency(?float $value): self
    {
        $this->instance->setVATonNetAmountInCustomerCurrency($value);
        return $this;
    }

    /**
     * Unsets vaton net amount in customer currency field.
     */
    public function unsetVATonNetAmountInCustomerCurrency(): self
    {
        $this->instance->unsetVATonNetAmountInCustomerCurrency();
        return $this;
    }

    /**
     * Sets discount type field.
     */
    public function discountType(?string $value): self
    {
        $this->instance->setDiscountType($value);
        return $this;
    }

    /**
     * Unsets discount type field.
     */
    public function unsetDiscountType(): self
    {
        $this->instance->unsetDiscountType();
        return $this;
    }

    /**
     * Sets transaction status field.
     */
    public function transactionStatus(?string $value): self
    {
        $this->instance->setTransactionStatus($value);
        return $this;
    }

    /**
     * Unsets transaction status field.
     */
    public function unsetTransactionStatus(): self
    {
        $this->instance->unsetTransactionStatus();
        return $this;
    }

    /**
     * Sets payer group field.
     */
    public function payerGroup(?string $value): self
    {
        $this->instance->setPayerGroup($value);
        return $this;
    }

    /**
     * Unsets payer group field.
     */
    public function unsetPayerGroup(): self
    {
        $this->instance->unsetPayerGroup();
        return $this;
    }

    /**
     * Sets refund flag field.
     */
    public function refundFlag(?string $value): self
    {
        $this->instance->setRefundFlag($value);
        return $this;
    }

    /**
     * Unsets refund flag field.
     */
    public function unsetRefundFlag(): self
    {
        $this->instance->unsetRefundFlag();
        return $this;
    }

    /**
     * Sets original sales item id field.
     */
    public function originalSalesItemId(?float $value): self
    {
        $this->instance->setOriginalSalesItemId($value);
        return $this;
    }

    /**
     * Unsets original sales item id field.
     */
    public function unsetOriginalSalesItemId(): self
    {
        $this->instance->unsetOriginalSalesItemId();
        return $this;
    }

    /**
     * Sets delco name field.
     */
    public function delcoName(?string $value): self
    {
        $this->instance->setDelcoName($value);
        return $this;
    }

    /**
     * Unsets delco name field.
     */
    public function unsetDelcoName(): self
    {
        $this->instance->unsetDelcoName();
        return $this;
    }

    /**
     * Sets delco code field.
     */
    public function delcoCode(?string $value): self
    {
        $this->instance->setDelcoCode($value);
        return $this;
    }

    /**
     * Unsets delco code field.
     */
    public function unsetDelcoCode(): self
    {
        $this->instance->unsetDelcoCode();
        return $this;
    }

    /**
     * Sets payer number field.
     */
    public function payerNumber(?string $value): self
    {
        $this->instance->setPayerNumber($value);
        return $this;
    }

    /**
     * Unsets payer number field.
     */
    public function unsetPayerNumber(): self
    {
        $this->instance->unsetPayerNumber();
        return $this;
    }

    /**
     * Sets payer name field.
     */
    public function payerName(?string $value): self
    {
        $this->instance->setPayerName($value);
        return $this;
    }

    /**
     * Unsets payer name field.
     */
    public function unsetPayerName(): self
    {
        $this->instance->unsetPayerName();
        return $this;
    }

    /**
     * Sets card expiry period field.
     */
    public function cardExpiryPeriod(?string $value): self
    {
        $this->instance->setCardExpiryPeriod($value);
        return $this;
    }

    /**
     * Unsets card expiry period field.
     */
    public function unsetCardExpiryPeriod(): self
    {
        $this->instance->unsetCardExpiryPeriod();
        return $this;
    }

    /**
     * Sets authorisation code field.
     */
    public function authorisationCode(?string $value): self
    {
        $this->instance->setAuthorisationCode($value);
        return $this;
    }

    /**
     * Unsets authorisation code field.
     */
    public function unsetAuthorisationCode(): self
    {
        $this->instance->unsetAuthorisationCode();
        return $this;
    }

    /**
     * Sets transaction id field.
     */
    public function transactionId(?string $value): self
    {
        $this->instance->setTransactionId($value);
        return $this;
    }

    /**
     * Unsets transaction id field.
     */
    public function unsetTransactionId(): self
    {
        $this->instance->unsetTransactionId();
        return $this;
    }

    /**
     * Sets transaction line field.
     */
    public function transactionLine(?string $value): self
    {
        $this->instance->setTransactionLine($value);
        return $this;
    }

    /**
     * Unsets transaction line field.
     */
    public function unsetTransactionLine(): self
    {
        $this->instance->unsetTransactionLine();
        return $this;
    }

    /**
     * Sets allow clearing field.
     */
    public function allowClearing(?string $value): self
    {
        $this->instance->setAllowClearing($value);
        return $this;
    }

    /**
     * Unsets allow clearing field.
     */
    public function unsetAllowClearing(): self
    {
        $this->instance->unsetAllowClearing();
        return $this;
    }

    /**
     * Sets crmnumber field.
     */
    public function cRMNumber(?string $value): self
    {
        $this->instance->setCRMNumber($value);
        return $this;
    }

    /**
     * Unsets crmnumber field.
     */
    public function unsetCRMNumber(): self
    {
        $this->instance->unsetCRMNumber();
        return $this;
    }

    /**
     * Sets dispute status field.
     */
    public function disputeStatus(?string $value): self
    {
        $this->instance->setDisputeStatus($value);
        return $this;
    }

    /**
     * Unsets dispute status field.
     */
    public function unsetDisputeStatus(): self
    {
        $this->instance->unsetDisputeStatus();
        return $this;
    }

    /**
     * Sets rebate rate field.
     */
    public function rebateRate(?float $value): self
    {
        $this->instance->setRebateRate($value);
        return $this;
    }

    /**
     * Unsets rebate rate field.
     */
    public function unsetRebateRate(): self
    {
        $this->instance->unsetRebateRate();
        return $this;
    }

    /**
     * Sets del co to col co exchange rate field.
     */
    public function delCoToColCoExchangeRate(?float $value): self
    {
        $this->instance->setDelCoToColCoExchangeRate($value);
        return $this;
    }

    /**
     * Unsets del co to col co exchange rate field.
     */
    public function unsetDelCoToColCoExchangeRate(): self
    {
        $this->instance->unsetDelCoToColCoExchangeRate();
        return $this;
    }

    /**
     * Sets net euro amount field.
     */
    public function netEuroAmount(?float $value): self
    {
        $this->instance->setNetEuroAmount($value);
        return $this;
    }

    /**
     * Unsets net euro amount field.
     */
    public function unsetNetEuroAmount(): self
    {
        $this->instance->unsetNetEuroAmount();
        return $this;
    }

    /**
     * Sets euro rebate amount field.
     */
    public function euroRebateAmount(?float $value): self
    {
        $this->instance->setEuroRebateAmount($value);
        return $this;
    }

    /**
     * Unsets euro rebate amount field.
     */
    public function unsetEuroRebateAmount(): self
    {
        $this->instance->unsetEuroRebateAmount();
        return $this;
    }

    /**
     * Sets euro vatamount field.
     */
    public function euroVATAmount(?float $value): self
    {
        $this->instance->setEuroVATAmount($value);
        return $this;
    }

    /**
     * Unsets euro vatamount field.
     */
    public function unsetEuroVATAmount(): self
    {
        $this->instance->unsetEuroVATAmount();
        return $this;
    }

    /**
     * Sets parent customer number field.
     */
    public function parentCustomerNumber(?string $value): self
    {
        $this->instance->setParentCustomerNumber($value);
        return $this;
    }

    /**
     * Unsets parent customer number field.
     */
    public function unsetParentCustomerNumber(): self
    {
        $this->instance->unsetParentCustomerNumber();
        return $this;
    }

    /**
     * Sets vaton net amount field.
     */
    public function vATonNetAmount(?float $value): self
    {
        $this->instance->setVATonNetAmount($value);
        return $this;
    }

    /**
     * Unsets vaton net amount field.
     */
    public function unsetVATonNetAmount(): self
    {
        $this->instance->unsetVATonNetAmount();
        return $this;
    }

    /**
     * Sets vatcountry field.
     */
    public function vATCountry(?string $value): self
    {
        $this->instance->setVATCountry($value);
        return $this;
    }

    /**
     * Unsets vatcountry field.
     */
    public function unsetVATCountry(): self
    {
        $this->instance->unsetVATCountry();
        return $this;
    }

    /**
     * Initializes a new transaction exceptions object.
     */
    public function build(): TransactionExceptions
    {
        return CoreHelper::clone($this->instance);
    }
}
