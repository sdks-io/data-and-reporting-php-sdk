<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class MultiPricedTransactionRequest implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $colCoId;

    /**
     * @var int
     */
    private $colCoCode;

    /**
     * @var MultiPricedTransactionRequestAccountsItems[]
     */
    private $accounts;

    /**
     * @var string|null
     */
    private $invoiceStatus;

    /**
     * @var string|null
     */
    private $purchasedInCountry;

    /**
     * @var string|null
     */
    private $fromDate;

    /**
     * @var string|null
     */
    private $toDate;

    /**
     * @var int|null
     */
    private $period;

    /**
     * @var string|null
     */
    private $postingDateFrom;

    /**
     * @var string|null
     */
    private $postingDateTo;

    /**
     * @var string|null
     */
    private $invoiceDate;

    /**
     * @var string|null
     */
    private $invoiceNumber;

    /**
     * @var bool|null
     */
    private $validInvoiceDateOnly;

    /**
     * @var string|null
     */
    private $invoiceFromDate;

    /**
     * @var string|null
     */
    private $invoiceToDate;

    /**
     * @var bool|null
     */
    private $fuelOnly;

    /**
     * @var bool|null
     */
    private $includeFees;

    /**
     * @var string|null
     */
    private $sortOrder;

    /**
     * @var int|null
     */
    private $currentPage;

    /**
     * @var int|null
     */
    private $pageSize;

    /**
     * @param int $colCoCode
     * @param MultiPricedTransactionRequestAccountsItems[] $accounts
     */
    public function __construct(int $colCoCode, array $accounts)
    {
        $this->colCoCode = $colCoCode;
        $this->accounts = $accounts;
    }

    /**
     * Returns Col Co Id.
     * Collecting Company Id of the selected payer.
     *
     * Optional if ColCoCode is passed else Mandatory.
     *
     * Example:
     *
     * 1 for Philippines
     *
     * 5 for UK
     */
    public function getColCoId(): ?int
    {
        return $this->colCoId;
    }

    /**
     * Sets Col Co Id.
     * Collecting Company Id of the selected payer.
     *
     * Optional if ColCoCode is passed else Mandatory.
     *
     * Example:
     *
     * 1 for Philippines
     *
     * 5 for UK
     *
     * @maps ColCoId
     */
    public function setColCoId(?int $colCoId): void
    {
        $this->colCoId = $colCoId;
    }

    /**
     * Returns Col Co Code.
     * Collecting Company Code of the selected payer.
     *
     * Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional
     * for other countries if ColCoID is provided.
     *
     * Example:
     *
     * 86 for Philippines
     *
     * 5 for UK
     */
    public function getColCoCode(): int
    {
        return $this->colCoCode;
    }

    /**
     * Sets Col Co Code.
     * Collecting Company Code of the selected payer.
     *
     * Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional
     * for other countries if ColCoID is provided.
     *
     * Example:
     *
     * 86 for Philippines
     *
     * 5 for UK
     *
     * @required
     * @maps ColCoCode
     */
    public function setColCoCode(int $colCoCode): void
    {
        $this->colCoCode = $colCoCode;
    }

    /**
     * Returns Accounts.
     * List of Payers/Accounts entity.
     *
     * Mandatory.
     *
     * •    Max number of payers allowed in the input is 10, if it exceeds in the input it will throw an
     * error.
     *
     * •    This value is configurable. Initial configuration will be 100 and will change to 10 once SFH
     * changes are integrated.
     *
     * Note:
     *
     * 1.    At least one payer should be present.
     *
     * Accounts information are optional.
     *
     * @return MultiPricedTransactionRequestAccountsItems[]
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }

    /**
     * Sets Accounts.
     * List of Payers/Accounts entity.
     *
     * Mandatory.
     *
     * •    Max number of payers allowed in the input is 10, if it exceeds in the input it will throw an
     * error.
     *
     * •    This value is configurable. Initial configuration will be 100 and will change to 10 once SFH
     * changes are integrated.
     *
     * Note:
     *
     * 1.    At least one payer should be present.
     *
     * Accounts information are optional.
     *
     * @required
     * @maps Accounts
     *
     * @param MultiPricedTransactionRequestAccountsItems[] $accounts
     */
    public function setAccounts(array $accounts): void
    {
        $this->accounts = $accounts;
    }

    /**
     * Returns Invoice Status.
     * Invoice status of the transactions
     * Mandatory
     * Possible options:
     * I - Invoiced
     * U – Un-Invoiced
     * A – All
     * Max Length: 1
     */
    public function getInvoiceStatus(): ?string
    {
        return $this->invoiceStatus;
    }

    /**
     * Sets Invoice Status.
     * Invoice status of the transactions
     * Mandatory
     * Possible options:
     * I - Invoiced
     * U – Un-Invoiced
     * A – All
     * Max Length: 1
     *
     * @maps InvoiceStatus
     */
    public function setInvoiceStatus(?string $invoiceStatus): void
    {
        $this->invoiceStatus = $invoiceStatus;
    }

    /**
     * Returns Purchased in Country.
     * ISO Country Code (ex: UK, FR)
     * Optional
     *
     *
     * Note: If IncludeFees is true then this filter will be ignored
     */
    public function getPurchasedInCountry(): ?string
    {
        return $this->purchasedInCountry;
    }

    /**
     * Sets Purchased in Country.
     * ISO Country Code (ex: UK, FR)
     * Optional
     *
     *
     * Note: If IncludeFees is true then this filter will be ignored
     *
     * @maps PurchasedInCountry
     */
    public function setPurchasedInCountry(?string $purchasedInCountry): void
    {
        $this->purchasedInCountry = $purchasedInCountry;
    }

    /**
     * Returns From Date.
     * Transactions from Date/Time.
     *
     * Optional – When provided, it should be with in last 24 months.
     *
     *
     *
     * Format: yyyyMMdd
     */
    public function getFromDate(): ?string
    {
        return $this->fromDate;
    }

    /**
     * Sets From Date.
     * Transactions from Date/Time.
     *
     * Optional – When provided, it should be with in last 24 months.
     *
     *
     *
     * Format: yyyyMMdd
     *
     * @maps FromDate
     */
    public function setFromDate(?string $fromDate): void
    {
        $this->fromDate = $fromDate;
    }

    /**
     * Returns To Date.
     * Transactions to Date/Time.
     *
     *
     *
     * 1) When the value is blank and FromDate is provided on the input, all transactions took place
     * 210(Configurable) days after the given FromDate is returned.
     *
     * 2) Difference between FromDate and ToDate cannot be more than 210 (Configurable) days.
     *
     *
     *
     * Format: yyyyMMdd
     */
    public function getToDate(): ?string
    {
        return $this->toDate;
    }

    /**
     * Sets To Date.
     * Transactions to Date/Time.
     *
     *
     *
     * 1) When the value is blank and FromDate is provided on the input, all transactions took place
     * 210(Configurable) days after the given FromDate is returned.
     *
     * 2) Difference between FromDate and ToDate cannot be more than 210 (Configurable) days.
     *
     *
     *
     * Format: yyyyMMdd
     *
     * @maps ToDate
     */
    public function setToDate(?string $toDate): void
    {
        $this->toDate = $toDate;
    }

    /**
     * Returns Period.
     * Transactions Period.
     *
     * Possible values are:
     *
     * 1.    Last 7 Days
     *
     * 2.    Last 30 Days
     *
     * 3.    Last 90 Days
     */
    public function getPeriod(): ?int
    {
        return $this->period;
    }

    /**
     * Sets Period.
     * Transactions Period.
     *
     * Possible values are:
     *
     * 1.    Last 7 Days
     *
     * 2.    Last 30 Days
     *
     * 3.    Last 90 Days
     *
     * @maps Period
     */
    public function setPeriod(?int $period): void
    {
        $this->period = $period;
    }

    /**
     * Returns Posting Date From.
     * Transaction Posting Date/time in the Cards Platform - From Date/time.
     *
     *
     *
     *
     * Note:
     * 1) When the value of both PostingDateFrom and PostingDateTo are present in the request then the
     * value of PostingDateFrom must be less than PostingDateTo.
     * 2) If IncludeFees is true then this filter will be ignored
     *
     *
     * Format: yyyyMMdd HH:mm:ss
     */
    public function getPostingDateFrom(): ?string
    {
        return $this->postingDateFrom;
    }

    /**
     * Sets Posting Date From.
     * Transaction Posting Date/time in the Cards Platform - From Date/time.
     *
     *
     *
     *
     * Note:
     * 1) When the value of both PostingDateFrom and PostingDateTo are present in the request then the
     * value of PostingDateFrom must be less than PostingDateTo.
     * 2) If IncludeFees is true then this filter will be ignored
     *
     *
     * Format: yyyyMMdd HH:mm:ss
     *
     * @maps PostingDateFrom
     */
    public function setPostingDateFrom(?string $postingDateFrom): void
    {
        $this->postingDateFrom = $postingDateFrom;
    }

    /**
     * Returns Posting Date To.
     * Transaction Posting Date/time in the Cards Platform – To Date/time.
     *
     *
     *
     * Note:
     *
     * 1) If IncludeFees is true then this filter will be ignored.
     *
     * 2) When the value of both PostingDateFrom and PostingDateTo are present in the request then the
     * value of PostingDateFrom must be less than PostingDateTo.
     *
     *
     *
     * Format: yyyyMMdd HH:mm:ss
     */
    public function getPostingDateTo(): ?string
    {
        return $this->postingDateTo;
    }

    /**
     * Sets Posting Date To.
     * Transaction Posting Date/time in the Cards Platform – To Date/time.
     *
     *
     *
     * Note:
     *
     * 1) If IncludeFees is true then this filter will be ignored.
     *
     * 2) When the value of both PostingDateFrom and PostingDateTo are present in the request then the
     * value of PostingDateFrom must be less than PostingDateTo.
     *
     *
     *
     * Format: yyyyMMdd HH:mm:ss
     *
     * @maps PostingDateTo
     */
    public function setPostingDateTo(?string $postingDateTo): void
    {
        $this->postingDateTo = $postingDateTo;
    }

    /**
     * Returns Invoice Date.
     * Invoice Date.
     *
     * Optional
     *
     *
     *
     * Note:
     *
     * 1) If value is not blank then the system will ignore the InvoiceStatus parameter and it will return
     * all the billed transactions for the given invoice date.
     *
     *
     *
     * 2) If IncludeFees is true then this filter will be ignored
     *
     *
     *
     * Format: yyyyMMdd
     */
    public function getInvoiceDate(): ?string
    {
        return $this->invoiceDate;
    }

    /**
     * Sets Invoice Date.
     * Invoice Date.
     *
     * Optional
     *
     *
     *
     * Note:
     *
     * 1) If value is not blank then the system will ignore the InvoiceStatus parameter and it will return
     * all the billed transactions for the given invoice date.
     *
     *
     *
     * 2) If IncludeFees is true then this filter will be ignored
     *
     *
     *
     * Format: yyyyMMdd
     *
     * @maps InvoiceDate
     */
    public function setInvoiceDate(?string $invoiceDate): void
    {
        $this->invoiceDate = $invoiceDate;
    }

    /**
     * Returns Invoice Number.
     * Invoice Number.
     *
     * Optional
     *
     * Note:
     *
     * 1) If value is not blank then the system will ignore the InvoiceStatus parameter and it will return
     * all the billed transactions for the given invoice date.
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->invoiceNumber;
    }

    /**
     * Sets Invoice Number.
     * Invoice Number.
     *
     * Optional
     *
     * Note:
     *
     * 1) If value is not blank then the system will ignore the InvoiceStatus parameter and it will return
     * all the billed transactions for the given invoice date.
     *
     * @maps InvoiceNumber
     */
    public function setInvoiceNumber(?string $invoiceNumber): void
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    /**
     * Returns Valid Invoice Date Only.
     * True/False
     *
     * Optional
     *
     * Default value: True.
     *
     * When passed as ‘True’ the transactions records with report date not equal to 9999-12-30 will be
     * returned.
     *
     * When passed as ‘False’ the above condition will not be checked.
     *
     * Note: If IncludeFees is ‘True’ then this filter will be ignored
     */
    public function getValidInvoiceDateOnly(): ?bool
    {
        return $this->validInvoiceDateOnly;
    }

    /**
     * Sets Valid Invoice Date Only.
     * True/False
     *
     * Optional
     *
     * Default value: True.
     *
     * When passed as ‘True’ the transactions records with report date not equal to 9999-12-30 will be
     * returned.
     *
     * When passed as ‘False’ the above condition will not be checked.
     *
     * Note: If IncludeFees is ‘True’ then this filter will be ignored
     *
     * @maps ValidInvoiceDateOnly
     */
    public function setValidInvoiceDateOnly(?bool $validInvoiceDateOnly): void
    {
        $this->validInvoiceDateOnly = $validInvoiceDateOnly;
    }

    /**
     * Returns Invoice From Date.
     * Start date for transaction search by invoice date.
     *
     * Optional
     *
     * Note:
     *
     * 1) Value should be with in last 24 months (if provided).
     *
     * 2) Maximum of 90(Configurable) days duration allowed per search.
     *
     * 3) When provided, InvoiceFromDate has to be less than or equal to InvoiceToDate.
     *
     *
     *
     * Format: yyyyMMdd
     */
    public function getInvoiceFromDate(): ?string
    {
        return $this->invoiceFromDate;
    }

    /**
     * Sets Invoice From Date.
     * Start date for transaction search by invoice date.
     *
     * Optional
     *
     * Note:
     *
     * 1) Value should be with in last 24 months (if provided).
     *
     * 2) Maximum of 90(Configurable) days duration allowed per search.
     *
     * 3) When provided, InvoiceFromDate has to be less than or equal to InvoiceToDate.
     *
     *
     *
     * Format: yyyyMMdd
     *
     * @maps InvoiceFromDate
     */
    public function setInvoiceFromDate(?string $invoiceFromDate): void
    {
        $this->invoiceFromDate = $invoiceFromDate;
    }

    /**
     * Returns Invoice to Date.
     * End date for transaction search by invoice date.
     *
     * Optional
     *
     * Note:
     *
     *
     *
     * 1) When InvoiceFromDate is provided and InvoiceToDate is null, then InvoiceToDate will be calculated
     * as (InvoiceFromDate + 90 days) or (CurrentDate) whichever is lesser.
     *
     *
     *
     * Format: yyyyMMdd
     */
    public function getInvoiceToDate(): ?string
    {
        return $this->invoiceToDate;
    }

    /**
     * Sets Invoice to Date.
     * End date for transaction search by invoice date.
     *
     * Optional
     *
     * Note:
     *
     *
     *
     * 1) When InvoiceFromDate is provided and InvoiceToDate is null, then InvoiceToDate will be calculated
     * as (InvoiceFromDate + 90 days) or (CurrentDate) whichever is lesser.
     *
     *
     *
     * Format: yyyyMMdd
     *
     * @maps InvoiceToDate
     */
    public function setInvoiceToDate(?string $invoiceToDate): void
    {
        $this->invoiceToDate = $invoiceToDate;
    }

    /**
     * Returns Fuel Only.
     * True/False
     *
     * Optional
     *
     * Default value: False.
     *
     * When passed as ‘True’ Only returned records with Fuel transactions.
     *
     * When passed as ‘False’ the above condition will not be checked.
     *
     * Note: If IncludeFees is ‘True’ then this filter will be ignored
     */
    public function getFuelOnly(): ?bool
    {
        return $this->fuelOnly;
    }

    /**
     * Sets Fuel Only.
     * True/False
     *
     * Optional
     *
     * Default value: False.
     *
     * When passed as ‘True’ Only returned records with Fuel transactions.
     *
     * When passed as ‘False’ the above condition will not be checked.
     *
     * Note: If IncludeFees is ‘True’ then this filter will be ignored
     *
     * @maps FuelOnly
     */
    public function setFuelOnly(?bool $fuelOnly): void
    {
        $this->fuelOnly = $fuelOnly;
    }

    /**
     * Returns Include Fees.
     * True/False
     * Optional
     * Default value: False
     * When passed as ‘True’ then  ignore complex filters, all sales items along with fees included on the
     * same response
     */
    public function getIncludeFees(): ?bool
    {
        return $this->includeFees;
    }

    /**
     * Sets Include Fees.
     * True/False
     * Optional
     * Default value: False
     * When passed as ‘True’ then  ignore complex filters, all sales items along with fees included on the
     * same response
     *
     * @maps IncludeFees
     */
    public function setIncludeFees(?bool $includeFees): void
    {
        $this->includeFees = $includeFees;
    }

    /**
     * Returns Sort Order.
     * Allowed Sorting Options:
     * 1.    TransactionDateAscending
     * 2.    TransactionDateDescending
     * 3.    GrossAmountDescending
     * 4.    GrossAmountAscending
     * 5.    NetAmountAscending
     * 6.    NetAmountDescensding
     * Example value to be passed: 1,3
     * Note: If IncludeFees is ‘True’ then sorting is not allowed. This parameter will be ignored.
     */
    public function getSortOrder(): ?string
    {
        return $this->sortOrder;
    }

    /**
     * Sets Sort Order.
     * Allowed Sorting Options:
     * 1.    TransactionDateAscending
     * 2.    TransactionDateDescending
     * 3.    GrossAmountDescending
     * 4.    GrossAmountAscending
     * 5.    NetAmountAscending
     * 6.    NetAmountDescensding
     * Example value to be passed: 1,3
     * Note: If IncludeFees is ‘True’ then sorting is not allowed. This parameter will be ignored.
     *
     * @maps SortOrder
     */
    public function setSortOrder(?string $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }

    /**
     * Returns Current Page.
     * Page Number (as shown to the users)
     * Optional
     * Default value 1
     * Note: If IncludeFees is ‘True’ then pagination is not allowed. This parameter will be ignored.
     */
    public function getCurrentPage(): ?int
    {
        return $this->currentPage;
    }

    /**
     * Sets Current Page.
     * Page Number (as shown to the users)
     * Optional
     * Default value 1
     * Note: If IncludeFees is ‘True’ then pagination is not allowed. This parameter will be ignored.
     *
     * @maps CurrentPage
     */
    public function setCurrentPage(?int $currentPage): void
    {
        $this->currentPage = $currentPage;
    }

    /**
     * Returns Page Size.
     * Page Size – Number of records to show on a page
     * Optional
     * Default value 50
     *
     *
     * Note: If IncludeFees is ‘True’ then pagination is not allowed. This parameter will be ignored.
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * Sets Page Size.
     * Page Size – Number of records to show on a page
     * Optional
     * Default value 50
     *
     *
     * Note: If IncludeFees is ‘True’ then pagination is not allowed. This parameter will be ignored.
     *
     * @maps PageSize
     */
    public function setPageSize(?int $pageSize): void
    {
        $this->pageSize = $pageSize;
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
        if (isset($this->colCoId)) {
            $json['ColCoId']              = $this->colCoId;
        }
        $json['ColCoCode']                = $this->colCoCode;
        $json['Accounts']                 = $this->accounts;
        if (isset($this->invoiceStatus)) {
            $json['InvoiceStatus']        = $this->invoiceStatus;
        }
        if (isset($this->purchasedInCountry)) {
            $json['PurchasedInCountry']   = $this->purchasedInCountry;
        }
        if (isset($this->fromDate)) {
            $json['FromDate']             = $this->fromDate;
        }
        if (isset($this->toDate)) {
            $json['ToDate']               = $this->toDate;
        }
        if (isset($this->period)) {
            $json['Period']               = $this->period;
        }
        if (isset($this->postingDateFrom)) {
            $json['PostingDateFrom']      = $this->postingDateFrom;
        }
        if (isset($this->postingDateTo)) {
            $json['PostingDateTo']        = $this->postingDateTo;
        }
        if (isset($this->invoiceDate)) {
            $json['InvoiceDate']          = $this->invoiceDate;
        }
        if (isset($this->invoiceNumber)) {
            $json['InvoiceNumber']        = $this->invoiceNumber;
        }
        if (isset($this->validInvoiceDateOnly)) {
            $json['ValidInvoiceDateOnly'] = $this->validInvoiceDateOnly;
        }
        if (isset($this->invoiceFromDate)) {
            $json['InvoiceFromDate']      = $this->invoiceFromDate;
        }
        if (isset($this->invoiceToDate)) {
            $json['InvoiceToDate']        = $this->invoiceToDate;
        }
        if (isset($this->fuelOnly)) {
            $json['FuelOnly']             = $this->fuelOnly;
        }
        if (isset($this->includeFees)) {
            $json['IncludeFees']          = $this->includeFees;
        }
        if (isset($this->sortOrder)) {
            $json['SortOrder']            = $this->sortOrder;
        }
        if (isset($this->currentPage)) {
            $json['CurrentPage']          = $this->currentPage;
        }
        if (isset($this->pageSize)) {
            $json['PageSize']             = $this->pageSize;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
