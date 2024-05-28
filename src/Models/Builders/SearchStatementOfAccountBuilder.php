<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\SearchStatementOfAccount;

/**
 * Builder for model SearchStatementOfAccount
 *
 * @see SearchStatementOfAccount
 */
class SearchStatementOfAccountBuilder
{
    /**
     * @var SearchStatementOfAccount
     */
    private $instance;

    private function __construct(SearchStatementOfAccount $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new search statement of account Builder object.
     */
    public static function init(): self
    {
        return new self(new SearchStatementOfAccount());
    }

    /**
     * Sets statement of account id field.
     */
    public function statementOfAccountId(?int $value): self
    {
        $this->instance->setStatementOfAccountId($value);
        return $this;
    }

    /**
     * Unsets statement of account id field.
     */
    public function unsetStatementOfAccountId(): self
    {
        $this->instance->unsetStatementOfAccountId();
        return $this;
    }

    /**
     * Sets so areference number field.
     */
    public function soAReferenceNumber(?string $value): self
    {
        $this->instance->setSoAReferenceNumber($value);
        return $this;
    }

    /**
     * Unsets so areference number field.
     */
    public function unsetSoAReferenceNumber(): self
    {
        $this->instance->unsetSoAReferenceNumber();
        return $this;
    }

    /**
     * Sets statement date field.
     */
    public function statementDate(?string $value): self
    {
        $this->instance->setStatementDate($value);
        return $this;
    }

    /**
     * Unsets statement date field.
     */
    public function unsetStatementDate(): self
    {
        $this->instance->unsetStatementDate();
        return $this;
    }

    /**
     * Sets payer id field.
     */
    public function payerId(?int $value): self
    {
        $this->instance->setPayerId($value);
        return $this;
    }

    /**
     * Unsets payer id field.
     */
    public function unsetPayerId(): self
    {
        $this->instance->unsetPayerId();
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
     * Sets amount due field.
     */
    public function amountDue(?float $value): self
    {
        $this->instance->setAmountDue($value);
        return $this;
    }

    /**
     * Unsets amount due field.
     */
    public function unsetAmountDue(): self
    {
        $this->instance->unsetAmountDue();
        return $this;
    }

    /**
     * Sets amount overdue field.
     */
    public function amountOverdue(?float $value): self
    {
        $this->instance->setAmountOverdue($value);
        return $this;
    }

    /**
     * Unsets amount overdue field.
     */
    public function unsetAmountOverdue(): self
    {
        $this->instance->unsetAmountOverdue();
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
     * Sets due date field.
     */
    public function dueDate(?string $value): self
    {
        $this->instance->setDueDate($value);
        return $this;
    }

    /**
     * Unsets due date field.
     */
    public function unsetDueDate(): self
    {
        $this->instance->unsetDueDate();
        return $this;
    }

    /**
     * Sets invoiced on behalf of field.
     */
    public function invoicedOnBehalfOf(?string $value): self
    {
        $this->instance->setInvoicedOnBehalfOf($value);
        return $this;
    }

    /**
     * Unsets invoiced on behalf of field.
     */
    public function unsetInvoicedOnBehalfOf(): self
    {
        $this->instance->unsetInvoicedOnBehalfOf();
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
     * Sets gross amount customer currency field.
     */
    public function grossAmountCustomerCurrency(?float $value): self
    {
        $this->instance->setGrossAmountCustomerCurrency($value);
        return $this;
    }

    /**
     * Unsets gross amount customer currency field.
     */
    public function unsetGrossAmountCustomerCurrency(): self
    {
        $this->instance->unsetGrossAmountCustomerCurrency();
        return $this;
    }

    /**
     * Sets document reference number field.
     */
    public function documentReferenceNumber(?string $value): self
    {
        $this->instance->setDocumentReferenceNumber($value);
        return $this;
    }

    /**
     * Unsets document reference number field.
     */
    public function unsetDocumentReferenceNumber(): self
    {
        $this->instance->unsetDocumentReferenceNumber();
        return $this;
    }

    /**
     * Initializes a new search statement of account object.
     */
    public function build(): SearchStatementOfAccount
    {
        return CoreHelper::clone($this->instance);
    }
}
