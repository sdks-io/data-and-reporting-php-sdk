<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class InvoiceSearchRequestFilters implements \JsonSerializable
{
    /**
     * @var array
     */
    private $colCoId = [];

    /**
     * @var array
     */
    private $payerId = [];

    /**
     * @var array
     */
    private $payerNumber = [];

    /**
     * @var array
     */
    private $invoiceId = [];

    /**
     * @var array
     */
    private $invoiceNumber = [];

    /**
     * @var array
     */
    private $fromDate = [];

    /**
     * @var array
     */
    private $toDate = [];

    /**
     * @var array
     */
    private $invoiceDate = [];

    /**
     * @var array
     */
    private $summaryDocumentId = [];

    /**
     * @var array
     */
    private $summaryDocumentNumber = [];

    /**
     * @var array
     */
    private $statementOfAccountId = [];

    /**
     * @var array
     */
    private $soAReferenceNumber = [];

    /**
     * @var array
     */
    private $period = [];

    /**
     * @var array
     */
    private $invoiceStatus = [];

    /**
     * @var array
     */
    private $invoicedOnBehalfOf = [];

    /**
     * @var array
     */
    private $includeEInvoiceDetails = [];

    /**
     * @var array
     */
    private $colCoCode = [];

    /**
     * @var Accounts[]|null
     */
    private $accounts;

    /**
     * @var string|null
     */
    private $type;

    /**
     * Returns Col Co Id.
     * Collecting Company Id of the selected payer.
     *
     * Optional.
     *
     * Example:
     *
     * 1-Philippines
     *
     * 5-UK
     */
    public function getColCoId(): ?int
    {
        if (count($this->colCoId) == 0) {
            return null;
        }
        return $this->colCoId['value'];
    }

    /**
     * Sets Col Co Id.
     * Collecting Company Id of the selected payer.
     *
     * Optional.
     *
     * Example:
     *
     * 1-Philippines
     *
     * 5-UK
     *
     * @maps ColCoId
     */
    public function setColCoId(?int $colCoId): void
    {
        $this->colCoId['value'] = $colCoId;
    }

    /**
     * Unsets Col Co Id.
     * Collecting Company Id of the selected payer.
     *
     * Optional.
     *
     * Example:
     *
     * 1-Philippines
     *
     * 5-UK
     */
    public function unsetColCoId(): void
    {
        $this->colCoId = [];
    }

    /**
     * Returns Payer Id.
     * Payer Id of the selected payer.
     *
     * Optional if PayerNumber is passed else Mandatory
     *
     * Example: 123456
     */
    public function getPayerId(): ?int
    {
        if (count($this->payerId) == 0) {
            return null;
        }
        return $this->payerId['value'];
    }

    /**
     * Sets Payer Id.
     * Payer Id of the selected payer.
     *
     * Optional if PayerNumber is passed else Mandatory
     *
     * Example: 123456
     *
     * @maps PayerId
     */
    public function setPayerId(?int $payerId): void
    {
        $this->payerId['value'] = $payerId;
    }

    /**
     * Unsets Payer Id.
     * Payer Id of the selected payer.
     *
     * Optional if PayerNumber is passed else Mandatory
     *
     * Example: 123456
     */
    public function unsetPayerId(): void
    {
        $this->payerId = [];
    }

    /**
     * Returns Payer Number.
     * Payer Number of the selected payer.
     *
     * Optional if PayerId is passed else Mandatory
     *
     * Example: GB000000123
     */
    public function getPayerNumber(): ?string
    {
        if (count($this->payerNumber) == 0) {
            return null;
        }
        return $this->payerNumber['value'];
    }

    /**
     * Sets Payer Number.
     * Payer Number of the selected payer.
     *
     * Optional if PayerId is passed else Mandatory
     *
     * Example: GB000000123
     *
     * @maps PayerNumber
     */
    public function setPayerNumber(?string $payerNumber): void
    {
        $this->payerNumber['value'] = $payerNumber;
    }

    /**
     * Unsets Payer Number.
     * Payer Number of the selected payer.
     *
     * Optional if PayerId is passed else Mandatory
     *
     * Example: GB000000123
     */
    public function unsetPayerNumber(): void
    {
        $this->payerNumber = [];
    }

    /**
     * Returns Invoice Id.
     * Invoice id.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 1
     */
    public function getInvoiceId(): ?int
    {
        if (count($this->invoiceId) == 0) {
            return null;
        }
        return $this->invoiceId['value'];
    }

    /**
     * Sets Invoice Id.
     * Invoice id.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 1
     *
     * @maps InvoiceId
     */
    public function setInvoiceId(?int $invoiceId): void
    {
        $this->invoiceId['value'] = $invoiceId;
    }

    /**
     * Unsets Invoice Id.
     * Invoice id.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 1
     */
    public function unsetInvoiceId(): void
    {
        $this->invoiceId = [];
    }

    /**
     * Returns Invoice Number.
     * Invoice number.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 0123456789
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
     * Invoice number.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 0123456789
     *
     * @maps InvoiceNumber
     */
    public function setInvoiceNumber(?string $invoiceNumber): void
    {
        $this->invoiceNumber['value'] = $invoiceNumber;
    }

    /**
     * Unsets Invoice Number.
     * Invoice number.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 0123456789
     */
    public function unsetInvoiceNumber(): void
    {
        $this->invoiceNumber = [];
    }

    /**
     * Returns From Date.
     * Invoice date searched from this date.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Date format: yyyyMMdd
     *
     * Example: 20170830
     *
     * Note: This criterion is ignored if ‘Period’ is given.
     *
     * Also, this criterion is ignored if ‘ToDate’ is not provided.
     */
    public function getFromDate(): ?string
    {
        if (count($this->fromDate) == 0) {
            return null;
        }
        return $this->fromDate['value'];
    }

    /**
     * Sets From Date.
     * Invoice date searched from this date.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Date format: yyyyMMdd
     *
     * Example: 20170830
     *
     * Note: This criterion is ignored if ‘Period’ is given.
     *
     * Also, this criterion is ignored if ‘ToDate’ is not provided.
     *
     * @maps FromDate
     */
    public function setFromDate(?string $fromDate): void
    {
        $this->fromDate['value'] = $fromDate;
    }

    /**
     * Unsets From Date.
     * Invoice date searched from this date.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Date format: yyyyMMdd
     *
     * Example: 20170830
     *
     * Note: This criterion is ignored if ‘Period’ is given.
     *
     * Also, this criterion is ignored if ‘ToDate’ is not provided.
     */
    public function unsetFromDate(): void
    {
        $this->fromDate = [];
    }

    /**
     * Returns To Date.
     * Invoice date searched until this date.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Date format: yyyyMMdd
     *
     * Example: 20170830
     *
     * Note: This criterion is ignored if ‘Period’ is given.
     *
     * Also, this criterion is ignored if ‘FromDate’ is not provided.
     */
    public function getToDate(): ?string
    {
        if (count($this->toDate) == 0) {
            return null;
        }
        return $this->toDate['value'];
    }

    /**
     * Sets To Date.
     * Invoice date searched until this date.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Date format: yyyyMMdd
     *
     * Example: 20170830
     *
     * Note: This criterion is ignored if ‘Period’ is given.
     *
     * Also, this criterion is ignored if ‘FromDate’ is not provided.
     *
     * @maps ToDate
     */
    public function setToDate(?string $toDate): void
    {
        $this->toDate['value'] = $toDate;
    }

    /**
     * Unsets To Date.
     * Invoice date searched until this date.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Date format: yyyyMMdd
     *
     * Example: 20170830
     *
     * Note: This criterion is ignored if ‘Period’ is given.
     *
     * Also, this criterion is ignored if ‘FromDate’ is not provided.
     */
    public function unsetToDate(): void
    {
        $this->toDate = [];
    }

    /**
     * Returns Invoice Date.
     * Date of invoicing.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Date format: yyyyMMdd
     *
     * Example: 20170830
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
     * Date of invoicing.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Date format: yyyyMMdd
     *
     * Example: 20170830
     *
     * @maps InvoiceDate
     */
    public function setInvoiceDate(?string $invoiceDate): void
    {
        $this->invoiceDate['value'] = $invoiceDate;
    }

    /**
     * Unsets Invoice Date.
     * Date of invoicing.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Date format: yyyyMMdd
     *
     * Example: 20170830
     */
    public function unsetInvoiceDate(): void
    {
        $this->invoiceDate = [];
    }

    /**
     * Returns Summary Document Id.
     * Summary document id
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 1
     */
    public function getSummaryDocumentId(): ?int
    {
        if (count($this->summaryDocumentId) == 0) {
            return null;
        }
        return $this->summaryDocumentId['value'];
    }

    /**
     * Sets Summary Document Id.
     * Summary document id
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 1
     *
     * @maps SummaryDocumentId
     */
    public function setSummaryDocumentId(?int $summaryDocumentId): void
    {
        $this->summaryDocumentId['value'] = $summaryDocumentId;
    }

    /**
     * Unsets Summary Document Id.
     * Summary document id
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 1
     */
    public function unsetSummaryDocumentId(): void
    {
        $this->summaryDocumentId = [];
    }

    /**
     * Returns Summary Document Number.
     * Summary document number
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: ‘0/CZ0000000123456/2017’
     */
    public function getSummaryDocumentNumber(): ?string
    {
        if (count($this->summaryDocumentNumber) == 0) {
            return null;
        }
        return $this->summaryDocumentNumber['value'];
    }

    /**
     * Sets Summary Document Number.
     * Summary document number
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: ‘0/CZ0000000123456/2017’
     *
     * @maps SummaryDocumentNumber
     */
    public function setSummaryDocumentNumber(?string $summaryDocumentNumber): void
    {
        $this->summaryDocumentNumber['value'] = $summaryDocumentNumber;
    }

    /**
     * Unsets Summary Document Number.
     * Summary document number
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: ‘0/CZ0000000123456/2017’
     */
    public function unsetSummaryDocumentNumber(): void
    {
        $this->summaryDocumentNumber = [];
    }

    /**
     * Returns Statement of Account Id.
     * Statement of Account Id of the payment customer.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 1
     */
    public function getStatementOfAccountId(): ?string
    {
        if (count($this->statementOfAccountId) == 0) {
            return null;
        }
        return $this->statementOfAccountId['value'];
    }

    /**
     * Sets Statement of Account Id.
     * Statement of Account Id of the payment customer.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 1
     *
     * @maps StatementOfAccountId
     */
    public function setStatementOfAccountId(?string $statementOfAccountId): void
    {
        $this->statementOfAccountId['value'] = $statementOfAccountId;
    }

    /**
     * Unsets Statement of Account Id.
     * Statement of Account Id of the payment customer.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 1
     */
    public function unsetStatementOfAccountId(): void
    {
        $this->statementOfAccountId = [];
    }

    /**
     * Returns So a Reference Number.
     * Statement of Account reference number of the payment customer.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 123
     */
    public function getSoAReferenceNumber(): ?string
    {
        if (count($this->soAReferenceNumber) == 0) {
            return null;
        }
        return $this->soAReferenceNumber['value'];
    }

    /**
     * Sets So a Reference Number.
     * Statement of Account reference number of the payment customer.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 123
     *
     * @maps SoAReferenceNumber
     */
    public function setSoAReferenceNumber(?string $soAReferenceNumber): void
    {
        $this->soAReferenceNumber['value'] = $soAReferenceNumber;
    }

    /**
     * Unsets So a Reference Number.
     * Statement of Account reference number of the payment customer.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 123
     */
    public function unsetSoAReferenceNumber(): void
    {
        $this->soAReferenceNumber = [];
    }

    /**
     * Returns Period.
     * Invoice date search period. Valid values –
     *
     * 1. Last 7 days – Issued in last 7 days.
     *
     * 2. Last 30 days – Issued in last 30 days.
     *
     * 3. Last 90 days – Issued in last 90 days.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 1
     */
    public function getPeriod(): ?int
    {
        if (count($this->period) == 0) {
            return null;
        }
        return $this->period['value'];
    }

    /**
     * Sets Period.
     * Invoice date search period. Valid values –
     *
     * 1. Last 7 days – Issued in last 7 days.
     *
     * 2. Last 30 days – Issued in last 30 days.
     *
     * 3. Last 90 days – Issued in last 90 days.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 1
     *
     * @maps Period
     */
    public function setPeriod(?int $period): void
    {
        $this->period['value'] = $period;
    }

    /**
     * Unsets Period.
     * Invoice date search period. Valid values –
     *
     * 1. Last 7 days – Issued in last 7 days.
     *
     * 2. Last 30 days – Issued in last 30 days.
     *
     * 3. Last 90 days – Issued in last 90 days.
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * Example: 1
     */
    public function unsetPeriod(): void
    {
        $this->period = [];
    }

    /**
     * Returns Invoice Status.
     * Status of the invoice. Valid values –
     *
     * • Due – Invoices due for payment and is within the due date.
     *
     * • Paid – Fully paid Invoices.
     *
     * • Overdue – Invoices due of payment and has crossed the due date.
     *
     * • CreditNote – Credit notes
     *
     * • CreditStatement
     *
     * Optional.
     *
     * This input is a search criterion, if given.
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
     * Status of the invoice. Valid values –
     *
     * • Due – Invoices due for payment and is within the due date.
     *
     * • Paid – Fully paid Invoices.
     *
     * • Overdue – Invoices due of payment and has crossed the due date.
     *
     * • CreditNote – Credit notes
     *
     * • CreditStatement
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     *
     * @maps InvoiceStatus
     */
    public function setInvoiceStatus(?string $invoiceStatus): void
    {
        $this->invoiceStatus['value'] = $invoiceStatus;
    }

    /**
     * Unsets Invoice Status.
     * Status of the invoice. Valid values –
     *
     * • Due – Invoices due for payment and is within the due date.
     *
     * • Paid – Fully paid Invoices.
     *
     * • Overdue – Invoices due of payment and has crossed the due date.
     *
     * • CreditNote – Credit notes
     *
     * • CreditStatement
     *
     * Optional.
     *
     * This input is a search criterion, if given.
     */
    public function unsetInvoiceStatus(): void
    {
        $this->invoiceStatus = [];
    }

    /**
     * Returns Invoiced on Behalf Of.
     * ISO code of the country i.e., UK, DE, MY, etc.
     *
     * Optional
     */
    public function getInvoicedOnBehalfOf(): ?string
    {
        if (count($this->invoicedOnBehalfOf) == 0) {
            return null;
        }
        return $this->invoicedOnBehalfOf['value'];
    }

    /**
     * Sets Invoiced on Behalf Of.
     * ISO code of the country i.e., UK, DE, MY, etc.
     *
     * Optional
     *
     * @maps InvoicedOnBehalfOf
     */
    public function setInvoicedOnBehalfOf(?string $invoicedOnBehalfOf): void
    {
        $this->invoicedOnBehalfOf['value'] = $invoicedOnBehalfOf;
    }

    /**
     * Unsets Invoiced on Behalf Of.
     * ISO code of the country i.e., UK, DE, MY, etc.
     *
     * Optional
     */
    public function unsetInvoicedOnBehalfOf(): void
    {
        $this->invoicedOnBehalfOf = [];
    }

    /**
     * Returns Include E Invoice Details.
     * Whether to include the additional invoice details in the API response.
     *
     * Optional. Default value “False”.
     *
     * The parameters that are populated
     *
     * • DocumentReference
     *
     * • AdditionalDocuments
     *
     * The above fields will not be present in the response when the respective data is not available in
     * the source system.
     */
    public function getIncludeEInvoiceDetails(): ?bool
    {
        if (count($this->includeEInvoiceDetails) == 0) {
            return null;
        }
        return $this->includeEInvoiceDetails['value'];
    }

    /**
     * Sets Include E Invoice Details.
     * Whether to include the additional invoice details in the API response.
     *
     * Optional. Default value “False”.
     *
     * The parameters that are populated
     *
     * • DocumentReference
     *
     * • AdditionalDocuments
     *
     * The above fields will not be present in the response when the respective data is not available in
     * the source system.
     *
     * @maps IncludeEInvoiceDetails
     */
    public function setIncludeEInvoiceDetails(?bool $includeEInvoiceDetails): void
    {
        $this->includeEInvoiceDetails['value'] = $includeEInvoiceDetails;
    }

    /**
     * Unsets Include E Invoice Details.
     * Whether to include the additional invoice details in the API response.
     *
     * Optional. Default value “False”.
     *
     * The parameters that are populated
     *
     * • DocumentReference
     *
     * • AdditionalDocuments
     *
     * The above fields will not be present in the response when the respective data is not available in
     * the source system.
     */
    public function unsetIncludeEInvoiceDetails(): void
    {
        $this->includeEInvoiceDetails = [];
    }

    /**
     * Returns Col Co Code.
     * Collecting Company Code of the selected payer.
     *
     * Mandatory - It is mandatory field to external source ATOS for E-invoicing.
     *
     * Example:
     *
     * 86-Philippines
     *
     * 5-UK
     */
    public function getColCoCode(): ?int
    {
        if (count($this->colCoCode) == 0) {
            return null;
        }
        return $this->colCoCode['value'];
    }

    /**
     * Sets Col Co Code.
     * Collecting Company Code of the selected payer.
     *
     * Mandatory - It is mandatory field to external source ATOS for E-invoicing.
     *
     * Example:
     *
     * 86-Philippines
     *
     * 5-UK
     *
     * @maps ColCoCode
     */
    public function setColCoCode(?int $colCoCode): void
    {
        $this->colCoCode['value'] = $colCoCode;
    }

    /**
     * Unsets Col Co Code.
     * Collecting Company Code of the selected payer.
     *
     * Mandatory - It is mandatory field to external source ATOS for E-invoicing.
     *
     * Example:
     *
     * 86-Philippines
     *
     * 5-UK
     */
    public function unsetColCoCode(): void
    {
        $this->colCoCode = [];
    }

    /**
     * Returns Accounts.
     *
     * @return Accounts[]|null
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * Sets Accounts.
     *
     * @maps Accounts
     *
     * @param Accounts[]|null $accounts
     */
    public function setAccounts(?array $accounts): void
    {
        $this->accounts = $accounts;
    }

    /**
     * Returns Type.
     * Invoice type. Allowed values –
     *
     * • Original – Original document.
     *
     * • Reversal – Reversed document.
     *
     * • Replacement – Replaced document.
     *
     * Optional. (When not passed all invoice, types are considered for search)
     *
     * This input is a search criterion, if given.
     *
     * Example: Original
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Invoice type. Allowed values –
     *
     * • Original – Original document.
     *
     * • Reversal – Reversed document.
     *
     * • Replacement – Replaced document.
     *
     * Optional. (When not passed all invoice, types are considered for search)
     *
     * This input is a search criterion, if given.
     *
     * Example: Original
     *
     * @maps Type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
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
        if (!empty($this->colCoId)) {
            $json['ColCoId']                = $this->colCoId['value'];
        }
        if (!empty($this->payerId)) {
            $json['PayerId']                = $this->payerId['value'];
        }
        if (!empty($this->payerNumber)) {
            $json['PayerNumber']            = $this->payerNumber['value'];
        }
        if (!empty($this->invoiceId)) {
            $json['InvoiceId']              = $this->invoiceId['value'];
        }
        if (!empty($this->invoiceNumber)) {
            $json['InvoiceNumber']          = $this->invoiceNumber['value'];
        }
        if (!empty($this->fromDate)) {
            $json['FromDate']               = $this->fromDate['value'];
        }
        if (!empty($this->toDate)) {
            $json['ToDate']                 = $this->toDate['value'];
        }
        if (!empty($this->invoiceDate)) {
            $json['InvoiceDate']            = $this->invoiceDate['value'];
        }
        if (!empty($this->summaryDocumentId)) {
            $json['SummaryDocumentId']      = $this->summaryDocumentId['value'];
        }
        if (!empty($this->summaryDocumentNumber)) {
            $json['SummaryDocumentNumber']  = $this->summaryDocumentNumber['value'];
        }
        if (!empty($this->statementOfAccountId)) {
            $json['StatementOfAccountId']   = $this->statementOfAccountId['value'];
        }
        if (!empty($this->soAReferenceNumber)) {
            $json['SoAReferenceNumber']     = $this->soAReferenceNumber['value'];
        }
        if (!empty($this->period)) {
            $json['Period']                 = $this->period['value'];
        }
        if (!empty($this->invoiceStatus)) {
            $json['InvoiceStatus']          = $this->invoiceStatus['value'];
        }
        if (!empty($this->invoicedOnBehalfOf)) {
            $json['InvoicedOnBehalfOf']     = $this->invoicedOnBehalfOf['value'];
        }
        if (!empty($this->includeEInvoiceDetails)) {
            $json['IncludeEInvoiceDetails'] = $this->includeEInvoiceDetails['value'];
        }
        if (!empty($this->colCoCode)) {
            $json['ColCoCode']              = $this->colCoCode['value'];
        }
        if (isset($this->accounts)) {
            $json['Accounts']               = $this->accounts;
        }
        if (isset($this->type)) {
            $json['Type']                   = $this->type;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
