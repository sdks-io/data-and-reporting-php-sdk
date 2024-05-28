<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class InvoiceSummaryDetails implements \JsonSerializable
{
    /**
     * @var array
     */
    private $totalInvoices = [];

    /**
     * @var array
     */
    private $totalGrossAmountCustomerCurrency = [];

    /**
     * @var array
     */
    private $totalNetAmountCustomerCurrency = [];

    /**
     * @var array
     */
    private $totalVATAmountCustomerCurrency = [];

    /**
     * @var array
     */
    private $customerCurrencyCode = [];

    /**
     * @var array
     */
    private $customerCurrencySymbol = [];

    /**
     * Returns Total Invoices.
     * Total number of invoices matching with the given search criteria.
     */
    public function getTotalInvoices(): ?int
    {
        if (count($this->totalInvoices) == 0) {
            return null;
        }
        return $this->totalInvoices['value'];
    }

    /**
     * Sets Total Invoices.
     * Total number of invoices matching with the given search criteria.
     *
     * @maps TotalInvoices
     */
    public function setTotalInvoices(?int $totalInvoices): void
    {
        $this->totalInvoices['value'] = $totalInvoices;
    }

    /**
     * Unsets Total Invoices.
     * Total number of invoices matching with the given search criteria.
     */
    public function unsetTotalInvoices(): void
    {
        $this->totalInvoices = [];
    }

    /**
     * Returns Total Gross Amount Customer Currency.
     * Total gross amount in customer currency combined from all the invoices matching with the given
     * search criteria.
     */
    public function getTotalGrossAmountCustomerCurrency(): ?float
    {
        if (count($this->totalGrossAmountCustomerCurrency) == 0) {
            return null;
        }
        return $this->totalGrossAmountCustomerCurrency['value'];
    }

    /**
     * Sets Total Gross Amount Customer Currency.
     * Total gross amount in customer currency combined from all the invoices matching with the given
     * search criteria.
     *
     * @maps TotalGrossAmountCustomerCurrency
     */
    public function setTotalGrossAmountCustomerCurrency(?float $totalGrossAmountCustomerCurrency): void
    {
        $this->totalGrossAmountCustomerCurrency['value'] = $totalGrossAmountCustomerCurrency;
    }

    /**
     * Unsets Total Gross Amount Customer Currency.
     * Total gross amount in customer currency combined from all the invoices matching with the given
     * search criteria.
     */
    public function unsetTotalGrossAmountCustomerCurrency(): void
    {
        $this->totalGrossAmountCustomerCurrency = [];
    }

    /**
     * Returns Total Net Amount Customer Currency.
     * Total net amount in customer currency combined from all the invoices matching with the given search
     * criteria.
     */
    public function getTotalNetAmountCustomerCurrency(): ?float
    {
        if (count($this->totalNetAmountCustomerCurrency) == 0) {
            return null;
        }
        return $this->totalNetAmountCustomerCurrency['value'];
    }

    /**
     * Sets Total Net Amount Customer Currency.
     * Total net amount in customer currency combined from all the invoices matching with the given search
     * criteria.
     *
     * @maps TotalNetAmountCustomerCurrency
     */
    public function setTotalNetAmountCustomerCurrency(?float $totalNetAmountCustomerCurrency): void
    {
        $this->totalNetAmountCustomerCurrency['value'] = $totalNetAmountCustomerCurrency;
    }

    /**
     * Unsets Total Net Amount Customer Currency.
     * Total net amount in customer currency combined from all the invoices matching with the given search
     * criteria.
     */
    public function unsetTotalNetAmountCustomerCurrency(): void
    {
        $this->totalNetAmountCustomerCurrency = [];
    }

    /**
     * Returns Total VAT Amount Customer Currency.
     * Total VAT amount in customer currency combined from all the invoices matching with the given search
     * criteria.
     */
    public function getTotalVATAmountCustomerCurrency(): ?float
    {
        if (count($this->totalVATAmountCustomerCurrency) == 0) {
            return null;
        }
        return $this->totalVATAmountCustomerCurrency['value'];
    }

    /**
     * Sets Total VAT Amount Customer Currency.
     * Total VAT amount in customer currency combined from all the invoices matching with the given search
     * criteria.
     *
     * @maps TotalVATAmountCustomerCurrency
     */
    public function setTotalVATAmountCustomerCurrency(?float $totalVATAmountCustomerCurrency): void
    {
        $this->totalVATAmountCustomerCurrency['value'] = $totalVATAmountCustomerCurrency;
    }

    /**
     * Unsets Total VAT Amount Customer Currency.
     * Total VAT amount in customer currency combined from all the invoices matching with the given search
     * criteria.
     */
    public function unsetTotalVATAmountCustomerCurrency(): void
    {
        $this->totalVATAmountCustomerCurrency = [];
    }

    /**
     * Returns Customer Currency Code.
     * Customer currency ISO code.
     *
     * Example: EUR
     */
    public function getCustomerCurrencyCode(): ?string
    {
        if (count($this->customerCurrencyCode) == 0) {
            return null;
        }
        return $this->customerCurrencyCode['value'];
    }

    /**
     * Sets Customer Currency Code.
     * Customer currency ISO code.
     *
     * Example: EUR
     *
     * @maps CustomerCurrencyCode
     */
    public function setCustomerCurrencyCode(?string $customerCurrencyCode): void
    {
        $this->customerCurrencyCode['value'] = $customerCurrencyCode;
    }

    /**
     * Unsets Customer Currency Code.
     * Customer currency ISO code.
     *
     * Example: EUR
     */
    public function unsetCustomerCurrencyCode(): void
    {
        $this->customerCurrencyCode = [];
    }

    /**
     * Returns Customer Currency Symbol.
     * Customer currency code.
     *
     * Example: €
     */
    public function getCustomerCurrencySymbol(): ?string
    {
        if (count($this->customerCurrencySymbol) == 0) {
            return null;
        }
        return $this->customerCurrencySymbol['value'];
    }

    /**
     * Sets Customer Currency Symbol.
     * Customer currency code.
     *
     * Example: €
     *
     * @maps CustomerCurrencySymbol
     */
    public function setCustomerCurrencySymbol(?string $customerCurrencySymbol): void
    {
        $this->customerCurrencySymbol['value'] = $customerCurrencySymbol;
    }

    /**
     * Unsets Customer Currency Symbol.
     * Customer currency code.
     *
     * Example: €
     */
    public function unsetCustomerCurrencySymbol(): void
    {
        $this->customerCurrencySymbol = [];
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
        if (!empty($this->totalInvoices)) {
            $json['TotalInvoices']                    = $this->totalInvoices['value'];
        }
        if (!empty($this->totalGrossAmountCustomerCurrency)) {
            $json['TotalGrossAmountCustomerCurrency'] = $this->totalGrossAmountCustomerCurrency['value'];
        }
        if (!empty($this->totalNetAmountCustomerCurrency)) {
            $json['TotalNetAmountCustomerCurrency']   = $this->totalNetAmountCustomerCurrency['value'];
        }
        if (!empty($this->totalVATAmountCustomerCurrency)) {
            $json['TotalVATAmountCustomerCurrency']   = $this->totalVATAmountCustomerCurrency['value'];
        }
        if (!empty($this->customerCurrencyCode)) {
            $json['CustomerCurrencyCode']             = $this->customerCurrencyCode['value'];
        }
        if (!empty($this->customerCurrencySymbol)) {
            $json['CustomerCurrencySymbol']           = $this->customerCurrencySymbol['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
