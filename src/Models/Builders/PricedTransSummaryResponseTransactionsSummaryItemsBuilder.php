<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\PricedTransSummaryResponseTransactionsSummaryItems;

/**
 * Builder for model PricedTransSummaryResponseTransactionsSummaryItems
 *
 * @see PricedTransSummaryResponseTransactionsSummaryItems
 */
class PricedTransSummaryResponseTransactionsSummaryItemsBuilder
{
    /**
     * @var PricedTransSummaryResponseTransactionsSummaryItems
     */
    private $instance;

    private function __construct(PricedTransSummaryResponseTransactionsSummaryItems $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new priced trans summary response transactions summary items Builder object.
     */
    public static function init(): self
    {
        return new self(new PricedTransSummaryResponseTransactionsSummaryItems());
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
     * Sets total fuel quantity field.
     */
    public function totalFuelQuantity(?int $value): self
    {
        $this->instance->setTotalFuelQuantity($value);
        return $this;
    }

    /**
     * Unsets total fuel quantity field.
     */
    public function unsetTotalFuelQuantity(): self
    {
        $this->instance->unsetTotalFuelQuantity();
        return $this;
    }

    /**
     * Sets total net amount field.
     */
    public function totalNetAmount(?int $value): self
    {
        $this->instance->setTotalNetAmount($value);
        return $this;
    }

    /**
     * Unsets total net amount field.
     */
    public function unsetTotalNetAmount(): self
    {
        $this->instance->unsetTotalNetAmount();
        return $this;
    }

    /**
     * Sets total gross amount field.
     */
    public function totalGrossAmount(?int $value): self
    {
        $this->instance->setTotalGrossAmount($value);
        return $this;
    }

    /**
     * Unsets total gross amount field.
     */
    public function unsetTotalGrossAmount(): self
    {
        $this->instance->unsetTotalGrossAmount();
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
     * Sets customer retail value total net field.
     */
    public function customerRetailValueTotalNet(?float $value): self
    {
        $this->instance->setCustomerRetailValueTotalNet($value);
        return $this;
    }

    /**
     * Unsets customer retail value total net field.
     */
    public function unsetCustomerRetailValueTotalNet(): self
    {
        $this->instance->unsetCustomerRetailValueTotalNet();
        return $this;
    }

    /**
     * Sets customer retail value total gross field.
     */
    public function customerRetailValueTotalGross(?float $value): self
    {
        $this->instance->setCustomerRetailValueTotalGross($value);
        return $this;
    }

    /**
     * Unsets customer retail value total gross field.
     */
    public function unsetCustomerRetailValueTotalGross(): self
    {
        $this->instance->unsetCustomerRetailValueTotalGross();
        return $this;
    }

    /**
     * Initializes a new priced trans summary response transactions summary items object.
     */
    public function build(): PricedTransSummaryResponseTransactionsSummaryItems
    {
        return CoreHelper::clone($this->instance);
    }
}
