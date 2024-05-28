<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\InvoicesSummaries;

/**
 * Builder for model InvoicesSummaries
 *
 * @see InvoicesSummaries
 */
class InvoicesSummariesBuilder
{
    /**
     * @var InvoicesSummaries
     */
    private $instance;

    private function __construct(InvoicesSummaries $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoices summaries Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoicesSummaries());
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
     * Sets amount not overdue field.
     */
    public function amountNotOverdue(?float $value): self
    {
        $this->instance->setAmountNotOverdue($value);
        return $this;
    }

    /**
     * Unsets amount not overdue field.
     */
    public function unsetAmountNotOverdue(): self
    {
        $this->instance->unsetAmountNotOverdue();
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
     * Sets amount paid field.
     */
    public function amountPaid(?float $value): self
    {
        $this->instance->setAmountPaid($value);
        return $this;
    }

    /**
     * Unsets amount paid field.
     */
    public function unsetAmountPaid(): self
    {
        $this->instance->unsetAmountPaid();
        return $this;
    }

    /**
     * Sets billing currency code field.
     */
    public function billingCurrencyCode(?string $value): self
    {
        $this->instance->setBillingCurrencyCode($value);
        return $this;
    }

    /**
     * Unsets billing currency code field.
     */
    public function unsetBillingCurrencyCode(): self
    {
        $this->instance->unsetBillingCurrencyCode();
        return $this;
    }

    /**
     * Sets billing currency symbol field.
     */
    public function billingCurrencySymbol(?string $value): self
    {
        $this->instance->setBillingCurrencySymbol($value);
        return $this;
    }

    /**
     * Unsets billing currency symbol field.
     */
    public function unsetBillingCurrencySymbol(): self
    {
        $this->instance->unsetBillingCurrencySymbol();
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
     * Sets payment due date field.
     */
    public function paymentDueDate(?string $value): self
    {
        $this->instance->setPaymentDueDate($value);
        return $this;
    }

    /**
     * Unsets payment due date field.
     */
    public function unsetPaymentDueDate(): self
    {
        $this->instance->unsetPaymentDueDate();
        return $this;
    }

    /**
     * Sets summary document date field.
     */
    public function summaryDocumentDate(?string $value): self
    {
        $this->instance->setSummaryDocumentDate($value);
        return $this;
    }

    /**
     * Unsets summary document date field.
     */
    public function unsetSummaryDocumentDate(): self
    {
        $this->instance->unsetSummaryDocumentDate();
        return $this;
    }

    /**
     * Sets total billing documents field.
     */
    public function totalBillingDocuments(?int $value): self
    {
        $this->instance->setTotalBillingDocuments($value);
        return $this;
    }

    /**
     * Unsets total billing documents field.
     */
    public function unsetTotalBillingDocuments(): self
    {
        $this->instance->unsetTotalBillingDocuments();
        return $this;
    }

    /**
     * Sets total gross amount billing currency field.
     */
    public function totalGrossAmountBillingCurrency(?float $value): self
    {
        $this->instance->setTotalGrossAmountBillingCurrency($value);
        return $this;
    }

    /**
     * Unsets total gross amount billing currency field.
     */
    public function unsetTotalGrossAmountBillingCurrency(): self
    {
        $this->instance->unsetTotalGrossAmountBillingCurrency();
        return $this;
    }

    /**
     * Sets total net amount billing currency field.
     */
    public function totalNetAmountBillingCurrency(?float $value): self
    {
        $this->instance->setTotalNetAmountBillingCurrency($value);
        return $this;
    }

    /**
     * Unsets total net amount billing currency field.
     */
    public function unsetTotalNetAmountBillingCurrency(): self
    {
        $this->instance->unsetTotalNetAmountBillingCurrency();
        return $this;
    }

    /**
     * Sets total summary documents field.
     */
    public function totalSummaryDocuments(?int $value): self
    {
        $this->instance->setTotalSummaryDocuments($value);
        return $this;
    }

    /**
     * Unsets total summary documents field.
     */
    public function unsetTotalSummaryDocuments(): self
    {
        $this->instance->unsetTotalSummaryDocuments();
        return $this;
    }

    /**
     * Sets total vatamount billing currency field.
     */
    public function totalVATAmountBillingCurrency(?float $value): self
    {
        $this->instance->setTotalVATAmountBillingCurrency($value);
        return $this;
    }

    /**
     * Unsets total vatamount billing currency field.
     */
    public function unsetTotalVATAmountBillingCurrency(): self
    {
        $this->instance->unsetTotalVATAmountBillingCurrency();
        return $this;
    }

    /**
     * Initializes a new invoices summaries object.
     */
    public function build(): InvoicesSummaries
    {
        return CoreHelper::clone($this->instance);
    }
}
