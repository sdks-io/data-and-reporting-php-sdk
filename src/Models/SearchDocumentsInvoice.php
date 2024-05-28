<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class SearchDocumentsInvoice implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $documentReference;

    /**
     * @var array
     */
    private $invoiceNumber = [];

    /**
     * @var array
     */
    private $payerName = [];

    /**
     * @var array
     */
    private $accountNumber = [];

    /**
     * @var array
     */
    private $accountName = [];

    /**
     * @var array
     */
    private $documentType = [];

    /**
     * @var array
     */
    private $grossAmount = [];

    /**
     * @var array
     */
    private $netAmount = [];

    /**
     * @var array
     */
    private $taxAmount = [];

    /**
     * @var array
     */
    private $currencyCode = [];

    /**
     * @var array
     */
    private $invoiceStatus = [];

    /**
     * @var array
     */
    private $invoiceDate = [];

    /**
     * @var array
     */
    private $dueDate = [];

    /**
     * @var array
     */
    private $vATCountryISOCode = [];

    /**
     * Returns Document Reference.
     * Unique Invoice Reference id of the invoice for downloading the zip file containing PDF and proofing
     * elements.
     *
     * Example: 123456
     */
    public function getDocumentReference(): ?int
    {
        return $this->documentReference;
    }

    /**
     * Sets Document Reference.
     * Unique Invoice Reference id of the invoice for downloading the zip file containing PDF and proofing
     * elements.
     *
     * Example: 123456
     *
     * @maps DocumentReference
     */
    public function setDocumentReference(?int $documentReference): void
    {
        $this->documentReference = $documentReference;
    }

    /**
     * Returns Invoice Number.
     * Payment customer number.
     *
     * Example: GB000000123
     */
    public function getInvoiceNumber(): ?string
    {
        if (count($this->invoiceNumber) == 0) {
            return null;
        }
        return $this->invoiceNumber['value'];
    }

    /**
     * Sets Invoice Number.
     * Payment customer number.
     *
     * Example: GB000000123
     *
     * @maps InvoiceNumber
     */
    public function setInvoiceNumber(?string $invoiceNumber): void
    {
        $this->invoiceNumber['value'] = $invoiceNumber;
    }

    /**
     * Unsets Invoice Number.
     * Payment customer number.
     *
     * Example: GB000000123
     */
    public function unsetInvoiceNumber(): void
    {
        $this->invoiceNumber = [];
    }

    /**
     * Returns Payer Name.
     * Customer payer name
     */
    public function getPayerName(): ?string
    {
        if (count($this->payerName) == 0) {
            return null;
        }
        return $this->payerName['value'];
    }

    /**
     * Sets Payer Name.
     * Customer payer name
     *
     * @maps PayerName
     */
    public function setPayerName(?string $payerName): void
    {
        $this->payerName['value'] = $payerName;
    }

    /**
     * Unsets Payer Name.
     * Customer payer name
     */
    public function unsetPayerName(): void
    {
        $this->payerName = [];
    }

    /**
     * Returns Account Number.
     * Account Number
     *
     * Example: GB99215176
     */
    public function getAccountNumber(): ?string
    {
        if (count($this->accountNumber) == 0) {
            return null;
        }
        return $this->accountNumber['value'];
    }

    /**
     * Sets Account Number.
     * Account Number
     *
     * Example: GB99215176
     *
     * @maps AccountNumber
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber['value'] = $accountNumber;
    }

    /**
     * Unsets Account Number.
     * Account Number
     *
     * Example: GB99215176
     */
    public function unsetAccountNumber(): void
    {
        $this->accountNumber = [];
    }

    /**
     * Returns Account Name.
     * Invoice account name
     */
    public function getAccountName(): ?string
    {
        if (count($this->accountName) == 0) {
            return null;
        }
        return $this->accountName['value'];
    }

    /**
     * Sets Account Name.
     * Invoice account name
     *
     * @maps AccountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName['value'] = $accountName;
    }

    /**
     * Unsets Account Name.
     * Invoice account name
     */
    public function unsetAccountName(): void
    {
        $this->accountName = [];
    }

    /**
     * Returns Document Type.
     * Document type
     *
     * String containing one of the following values:
     *
     * • NAT (National)
     *
     * • INT (International)
     *
     * • SOA (Statement of Account)
     */
    public function getDocumentType(): ?string
    {
        if (count($this->documentType) == 0) {
            return null;
        }
        return $this->documentType['value'];
    }

    /**
     * Sets Document Type.
     * Document type
     *
     * String containing one of the following values:
     *
     * • NAT (National)
     *
     * • INT (International)
     *
     * • SOA (Statement of Account)
     *
     * @maps DocumentType
     */
    public function setDocumentType(?string $documentType): void
    {
        $this->documentType['value'] = $documentType;
    }

    /**
     * Unsets Document Type.
     * Document type
     *
     * String containing one of the following values:
     *
     * • NAT (National)
     *
     * • INT (International)
     *
     * • SOA (Statement of Account)
     */
    public function unsetDocumentType(): void
    {
        $this->documentType = [];
    }

    /**
     * Returns Gross Amount.
     * Included tax amount in the invoice
     */
    public function getGrossAmount(): ?float
    {
        if (count($this->grossAmount) == 0) {
            return null;
        }
        return $this->grossAmount['value'];
    }

    /**
     * Sets Gross Amount.
     * Included tax amount in the invoice
     *
     * @maps GrossAmount
     */
    public function setGrossAmount(?float $grossAmount): void
    {
        $this->grossAmount['value'] = $grossAmount;
    }

    /**
     * Unsets Gross Amount.
     * Included tax amount in the invoice
     */
    public function unsetGrossAmount(): void
    {
        $this->grossAmount = [];
    }

    /**
     * Returns Net Amount.
     */
    public function getNetAmount(): ?float
    {
        if (count($this->netAmount) == 0) {
            return null;
        }
        return $this->netAmount['value'];
    }

    /**
     * Sets Net Amount.
     *
     * @maps NetAmount
     */
    public function setNetAmount(?float $netAmount): void
    {
        $this->netAmount['value'] = $netAmount;
    }

    /**
     * Unsets Net Amount.
     */
    public function unsetNetAmount(): void
    {
        $this->netAmount = [];
    }

    /**
     * Returns Tax Amount.
     */
    public function getTaxAmount(): ?float
    {
        if (count($this->taxAmount) == 0) {
            return null;
        }
        return $this->taxAmount['value'];
    }

    /**
     * Sets Tax Amount.
     *
     * @maps TaxAmount
     */
    public function setTaxAmount(?float $taxAmount): void
    {
        $this->taxAmount['value'] = $taxAmount;
    }

    /**
     * Unsets Tax Amount.
     */
    public function unsetTaxAmount(): void
    {
        $this->taxAmount = [];
    }

    /**
     * Returns Currency Code.
     */
    public function getCurrencyCode(): ?string
    {
        if (count($this->currencyCode) == 0) {
            return null;
        }
        return $this->currencyCode['value'];
    }

    /**
     * Sets Currency Code.
     *
     * @maps CurrencyCode
     */
    public function setCurrencyCode(?string $currencyCode): void
    {
        $this->currencyCode['value'] = $currencyCode;
    }

    /**
     * Unsets Currency Code.
     */
    public function unsetCurrencyCode(): void
    {
        $this->currencyCode = [];
    }

    /**
     * Returns Invoice Status.
     */
    public function getInvoiceStatus(): ?string
    {
        if (count($this->invoiceStatus) == 0) {
            return null;
        }
        return $this->invoiceStatus['value'];
    }

    /**
     * Sets Invoice Status.
     *
     * @maps InvoiceStatus
     */
    public function setInvoiceStatus(?string $invoiceStatus): void
    {
        $this->invoiceStatus['value'] = $invoiceStatus;
    }

    /**
     * Unsets Invoice Status.
     */
    public function unsetInvoiceStatus(): void
    {
        $this->invoiceStatus = [];
    }

    /**
     * Returns Invoice Date.
     */
    public function getInvoiceDate(): ?string
    {
        if (count($this->invoiceDate) == 0) {
            return null;
        }
        return $this->invoiceDate['value'];
    }

    /**
     * Sets Invoice Date.
     *
     * @maps InvoiceDate
     */
    public function setInvoiceDate(?string $invoiceDate): void
    {
        $this->invoiceDate['value'] = $invoiceDate;
    }

    /**
     * Unsets Invoice Date.
     */
    public function unsetInvoiceDate(): void
    {
        $this->invoiceDate = [];
    }

    /**
     * Returns Due Date.
     */
    public function getDueDate(): ?string
    {
        if (count($this->dueDate) == 0) {
            return null;
        }
        return $this->dueDate['value'];
    }

    /**
     * Sets Due Date.
     *
     * @maps DueDate
     */
    public function setDueDate(?string $dueDate): void
    {
        $this->dueDate['value'] = $dueDate;
    }

    /**
     * Unsets Due Date.
     */
    public function unsetDueDate(): void
    {
        $this->dueDate = [];
    }

    /**
     * Returns V at Country ISO Code.
     */
    public function getVATCountryISOCode(): ?string
    {
        if (count($this->vATCountryISOCode) == 0) {
            return null;
        }
        return $this->vATCountryISOCode['value'];
    }

    /**
     * Sets V at Country ISO Code.
     *
     * @maps VATCountryISOCode
     */
    public function setVATCountryISOCode(?string $vATCountryISOCode): void
    {
        $this->vATCountryISOCode['value'] = $vATCountryISOCode;
    }

    /**
     * Unsets V at Country ISO Code.
     */
    public function unsetVATCountryISOCode(): void
    {
        $this->vATCountryISOCode = [];
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
        if (isset($this->documentReference)) {
            $json['DocumentReference'] = $this->documentReference;
        }
        if (!empty($this->invoiceNumber)) {
            $json['InvoiceNumber']     = $this->invoiceNumber['value'];
        }
        if (!empty($this->payerName)) {
            $json['PayerName']         = $this->payerName['value'];
        }
        if (!empty($this->accountNumber)) {
            $json['AccountNumber']     = $this->accountNumber['value'];
        }
        if (!empty($this->accountName)) {
            $json['AccountName']       = $this->accountName['value'];
        }
        if (!empty($this->documentType)) {
            $json['DocumentType']      = $this->documentType['value'];
        }
        if (!empty($this->grossAmount)) {
            $json['GrossAmount']       = $this->grossAmount['value'];
        }
        if (!empty($this->netAmount)) {
            $json['NetAmount']         = $this->netAmount['value'];
        }
        if (!empty($this->taxAmount)) {
            $json['TaxAmount']         = $this->taxAmount['value'];
        }
        if (!empty($this->currencyCode)) {
            $json['CurrencyCode']      = $this->currencyCode['value'];
        }
        if (!empty($this->invoiceStatus)) {
            $json['InvoiceStatus']     = $this->invoiceStatus['value'];
        }
        if (!empty($this->invoiceDate)) {
            $json['InvoiceDate']       = $this->invoiceDate['value'];
        }
        if (!empty($this->dueDate)) {
            $json['DueDate']           = $this->dueDate['value'];
        }
        if (!empty($this->vATCountryISOCode)) {
            $json['VATCountryISOCode'] = $this->vATCountryISOCode['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
