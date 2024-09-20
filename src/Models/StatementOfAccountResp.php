<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class StatementOfAccountResp implements \JsonSerializable
{
    /**
     * @var LastStatementOfAccount2|null
     */
    private $lastStatementOfAccount;

    /**
     * @var array
     */
    private $monthlyInvoiceTrend = [];

    /**
     * @var PastStatementOfAccounts[]|null
     */
    private $pastStatementOfAccounts;

    /**
     * @var array
     */
    private $paymentsSinceLastSOA = [];

    /**
     * @var array
     */
    private $invoicesSummaries = [];

    /**
     * Returns Last Statement of Account.
     */
    public function getLastStatementOfAccount(): ?LastStatementOfAccount2
    {
        return $this->lastStatementOfAccount;
    }

    /**
     * Sets Last Statement of Account.
     *
     * @maps LastStatementOfAccount
     */
    public function setLastStatementOfAccount(?LastStatementOfAccount2 $lastStatementOfAccount): void
    {
        $this->lastStatementOfAccount = $lastStatementOfAccount;
    }

    /**
     * Returns Monthly Invoice Trend.
     *
     * @return MonthlyInvoiceTrend[]|null
     */
    public function getMonthlyInvoiceTrend(): ?array
    {
        if (count($this->monthlyInvoiceTrend) == 0) {
            return null;
        }
        return $this->monthlyInvoiceTrend['value'];
    }

    /**
     * Sets Monthly Invoice Trend.
     *
     * @maps MonthlyInvoiceTrend
     *
     * @param MonthlyInvoiceTrend[]|null $monthlyInvoiceTrend
     */
    public function setMonthlyInvoiceTrend(?array $monthlyInvoiceTrend): void
    {
        $this->monthlyInvoiceTrend['value'] = $monthlyInvoiceTrend;
    }

    /**
     * Unsets Monthly Invoice Trend.
     */
    public function unsetMonthlyInvoiceTrend(): void
    {
        $this->monthlyInvoiceTrend = [];
    }

    /**
     * Returns Past Statement of Accounts.
     *
     * @return PastStatementOfAccounts[]|null
     */
    public function getPastStatementOfAccounts(): ?array
    {
        return $this->pastStatementOfAccounts;
    }

    /**
     * Sets Past Statement of Accounts.
     *
     * @maps PastStatementOfAccounts
     *
     * @param PastStatementOfAccounts[]|null $pastStatementOfAccounts
     */
    public function setPastStatementOfAccounts(?array $pastStatementOfAccounts): void
    {
        $this->pastStatementOfAccounts = $pastStatementOfAccounts;
    }

    /**
     * Returns Payments Since Last SOA.
     *
     * @return PaymentsSinceLastSOA[]|null
     */
    public function getPaymentsSinceLastSOA(): ?array
    {
        if (count($this->paymentsSinceLastSOA) == 0) {
            return null;
        }
        return $this->paymentsSinceLastSOA['value'];
    }

    /**
     * Sets Payments Since Last SOA.
     *
     * @maps PaymentsSinceLastSOA
     *
     * @param PaymentsSinceLastSOA[]|null $paymentsSinceLastSOA
     */
    public function setPaymentsSinceLastSOA(?array $paymentsSinceLastSOA): void
    {
        $this->paymentsSinceLastSOA['value'] = $paymentsSinceLastSOA;
    }

    /**
     * Unsets Payments Since Last SOA.
     */
    public function unsetPaymentsSinceLastSOA(): void
    {
        $this->paymentsSinceLastSOA = [];
    }

    /**
     * Returns Invoices Summaries.
     *
     * @return InvoicesSummaries[]|null
     */
    public function getInvoicesSummaries(): ?array
    {
        if (count($this->invoicesSummaries) == 0) {
            return null;
        }
        return $this->invoicesSummaries['value'];
    }

    /**
     * Sets Invoices Summaries.
     *
     * @maps InvoicesSummaries
     *
     * @param InvoicesSummaries[]|null $invoicesSummaries
     */
    public function setInvoicesSummaries(?array $invoicesSummaries): void
    {
        $this->invoicesSummaries['value'] = $invoicesSummaries;
    }

    /**
     * Unsets Invoices Summaries.
     */
    public function unsetInvoicesSummaries(): void
    {
        $this->invoicesSummaries = [];
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
        if (isset($this->lastStatementOfAccount)) {
            $json['LastStatementOfAccount']  = $this->lastStatementOfAccount;
        }
        if (!empty($this->monthlyInvoiceTrend)) {
            $json['MonthlyInvoiceTrend']     = $this->monthlyInvoiceTrend['value'];
        }
        if (isset($this->pastStatementOfAccounts)) {
            $json['PastStatementOfAccounts'] = $this->pastStatementOfAccounts;
        }
        if (!empty($this->paymentsSinceLastSOA)) {
            $json['PaymentsSinceLastSOA']    = $this->paymentsSinceLastSOA['value'];
        }
        if (!empty($this->invoicesSummaries)) {
            $json['InvoicesSummaries']       = $this->invoicesSummaries['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
