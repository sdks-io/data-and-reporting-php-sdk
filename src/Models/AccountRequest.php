<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class AccountRequest implements \JsonSerializable
{
    /**
     * @var array
     */
    private $status = [];

    /**
     * @var bool|null
     */
    private $includeCardSummary = true;

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
    private $pageSize = [];

    /**
     * @var array
     */
    private $requestId = [];

    /**
     * @var array
     */
    private $colCoCode = [];

    /**
     * @var array
     */
    private $colCoCountryCode = [];

    /**
     * @var array
     */
    private $currentPage = [];

    /**
     * @var array
     */
    private $invoicePointsOnly = ['value' => false];

    /**
     * @var array
     */
    private $colCoId = [];

    /**
     * @var bool|null
     */
    private $returnTollsCustomerId;

    /**
     * @var Accounts[]|null
     */
    private $accounts;

    /**
     * @var array
     */
    private $accountName = [];

    /**
     * @var array<string|null>|null
     */
    private $statusList;

    /**
     * Returns Status.
     * Account Status.
     * Optional if StatusList is passed, else mandatory.
     * Ignored if StatusList is passed.
     * Allowed values:
     * •    ALL
     * •    ACTIVE
     * •    BLOCKED
     * •    CANCELLED
     * •    CREDITLOCK
     * •    DELINQUENCYLOCK
     */
    public function getStatus(): ?string
    {
        if (count($this->status) == 0) {
            return null;
        }
        return $this->status['value'];
    }

    /**
     * Sets Status.
     * Account Status.
     * Optional if StatusList is passed, else mandatory.
     * Ignored if StatusList is passed.
     * Allowed values:
     * •    ALL
     * •    ACTIVE
     * •    BLOCKED
     * •    CANCELLED
     * •    CREDITLOCK
     * •    DELINQUENCYLOCK
     *
     * @maps Status
     */
    public function setStatus(?string $status): void
    {
        $this->status['value'] = $status;
    }

    /**
     * Unsets Status.
     * Account Status.
     * Optional if StatusList is passed, else mandatory.
     * Ignored if StatusList is passed.
     * Allowed values:
     * •    ALL
     * •    ACTIVE
     * •    BLOCKED
     * •    CANCELLED
     * •    CREDITLOCK
     * •    DELINQUENCYLOCK
     */
    public function unsetStatus(): void
    {
        $this->status = [];
    }

    /**
     * Returns Include Card Summary.
     * Include card summary details in the response.
     *
     *
     * When passed as false, the card summary related parameters on response will be set to null.
     *
     *
     * Optional – default value: true.
     */
    public function getIncludeCardSummary(): ?bool
    {
        return $this->includeCardSummary;
    }

    /**
     * Sets Include Card Summary.
     * Include card summary details in the response.
     *
     *
     * When passed as false, the card summary related parameters on response will be set to null.
     *
     *
     * Optional – default value: true.
     *
     * @maps IncludeCardSummary
     */
    public function setIncludeCardSummary(?bool $includeCardSummary): void
    {
        $this->includeCardSummary = $includeCardSummary;
    }

    /**
     * Returns Payer Id.
     * Payer id of the customer.
     * Optional if PayerNumber is passed, else Mandatory.
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
     * Payer id of the customer.
     * Optional if PayerNumber is passed, else Mandatory.
     *
     * @maps PayerId
     */
    public function setPayerId(?int $payerId): void
    {
        $this->payerId['value'] = $payerId;
    }

    /**
     * Unsets Payer Id.
     * Payer id of the customer.
     * Optional if PayerNumber is passed, else Mandatory.
     */
    public function unsetPayerId(): void
    {
        $this->payerId = [];
    }

    /**
     * Returns Payer Number.
     * PayerNumber of the customer.
     * Optional if PayerId is passed, else Mandatory.
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
     * PayerNumber of the customer.
     * Optional if PayerId is passed, else Mandatory.
     *
     * @maps PayerNumber
     */
    public function setPayerNumber(?string $payerNumber): void
    {
        $this->payerNumber['value'] = $payerNumber;
    }

    /**
     * Unsets Payer Number.
     * PayerNumber of the customer.
     * Optional if PayerId is passed, else Mandatory.
     */
    public function unsetPayerNumber(): void
    {
        $this->payerNumber = [];
    }

    /**
     * Returns Page Size.
     * Page Size – Number of records to show on a page.
     * Optional
     * Default value 50
     */
    public function getPageSize(): ?int
    {
        if (count($this->pageSize) == 0) {
            return null;
        }
        return $this->pageSize['value'];
    }

    /**
     * Sets Page Size.
     * Page Size – Number of records to show on a page.
     * Optional
     * Default value 50
     *
     * @maps PageSize
     */
    public function setPageSize(?int $pageSize): void
    {
        $this->pageSize['value'] = $pageSize;
    }

    /**
     * Unsets Page Size.
     * Page Size – Number of records to show on a page.
     * Optional
     * Default value 50
     */
    public function unsetPageSize(): void
    {
        $this->pageSize = [];
    }

    /**
     * Returns Request Id.
     * API Request Id
     */
    public function getRequestId(): ?string
    {
        if (count($this->requestId) == 0) {
            return null;
        }
        return $this->requestId['value'];
    }

    /**
     * Sets Request Id.
     * API Request Id
     *
     * @maps RequestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId['value'] = $requestId;
    }

    /**
     * Unsets Request Id.
     * API Request Id
     */
    public function unsetRequestId(): void
    {
        $this->requestId = [];
    }

    /**
     * Returns Col Co Code.
     * Collecting Company Code (Shell Code) of the selected payer.
     *
     * ColCoCode or ColCoCountryCode  is Mandatory for serviced OUs such as Romania, Latvia, Lithuania,
     * Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.
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
     * Collecting Company Code (Shell Code) of the selected payer.
     *
     * ColCoCode or ColCoCountryCode  is Mandatory for serviced OUs such as Romania, Latvia, Lithuania,
     * Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.
     *
     * @maps ColCoCode
     */
    public function setColCoCode(?int $colCoCode): void
    {
        $this->colCoCode['value'] = $colCoCode;
    }

    /**
     * Unsets Col Co Code.
     * Collecting Company Code (Shell Code) of the selected payer.
     *
     * ColCoCode or ColCoCountryCode  is Mandatory for serviced OUs such as Romania, Latvia, Lithuania,
     * Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.
     */
    public function unsetColCoCode(): void
    {
        $this->colCoCode = [];
    }

    /**
     * Returns Col Co Country Code.
     * The 2-character ISO Code for the customer and card owning country.
     * ColCoCode or ColCoCountryCode  is Mandatory for serviced OUs such as Romania, Latvia, Lithuania,
     * Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.
     */
    public function getColCoCountryCode(): ?string
    {
        if (count($this->colCoCountryCode) == 0) {
            return null;
        }
        return $this->colCoCountryCode['value'];
    }

    /**
     * Sets Col Co Country Code.
     * The 2-character ISO Code for the customer and card owning country.
     * ColCoCode or ColCoCountryCode  is Mandatory for serviced OUs such as Romania, Latvia, Lithuania,
     * Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.
     *
     * @maps ColCoCountryCode
     */
    public function setColCoCountryCode(?string $colCoCountryCode): void
    {
        $this->colCoCountryCode['value'] = $colCoCountryCode;
    }

    /**
     * Unsets Col Co Country Code.
     * The 2-character ISO Code for the customer and card owning country.
     * ColCoCode or ColCoCountryCode  is Mandatory for serviced OUs such as Romania, Latvia, Lithuania,
     * Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.
     */
    public function unsetColCoCountryCode(): void
    {
        $this->colCoCountryCode = [];
    }

    /**
     * Returns Current Page.
     * Page Number (as shown to the users)
     * Optional
     * Default value 1
     */
    public function getCurrentPage(): ?int
    {
        if (count($this->currentPage) == 0) {
            return null;
        }
        return $this->currentPage['value'];
    }

    /**
     * Sets Current Page.
     * Page Number (as shown to the users)
     * Optional
     * Default value 1
     *
     * @maps CurrentPage
     */
    public function setCurrentPage(?int $currentPage): void
    {
        $this->currentPage['value'] = $currentPage;
    }

    /**
     * Unsets Current Page.
     * Page Number (as shown to the users)
     * Optional
     * Default value 1
     */
    public function unsetCurrentPage(): void
    {
        $this->currentPage = [];
    }

    /**
     * Returns Invoice Points Only.
     * Optional – default value: false.
     * When passed as true, the API will return accounts that are configured as Invoice Point only.
     */
    public function getInvoicePointsOnly(): ?bool
    {
        if (count($this->invoicePointsOnly) == 0) {
            return null;
        }
        return $this->invoicePointsOnly['value'];
    }

    /**
     * Sets Invoice Points Only.
     * Optional – default value: false.
     * When passed as true, the API will return accounts that are configured as Invoice Point only.
     *
     * @maps InvoicePointsOnly
     */
    public function setInvoicePointsOnly(?bool $invoicePointsOnly): void
    {
        $this->invoicePointsOnly['value'] = $invoicePointsOnly;
    }

    /**
     * Unsets Invoice Points Only.
     * Optional – default value: false.
     * When passed as true, the API will return accounts that are configured as Invoice Point only.
     */
    public function unsetInvoicePointsOnly(): void
    {
        $this->invoicePointsOnly = [];
    }

    /**
     * Returns Col Co Id.
     * Collecting Company Id (in GFN) of the selected payer.
     *
     * Optional if ColCoCode or ColCoCountryCode  is passed else Mandatory.
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
     * Collecting Company Id (in GFN) of the selected payer.
     *
     * Optional if ColCoCode or ColCoCountryCode  is passed else Mandatory.
     *
     * @maps ColCoId
     */
    public function setColCoId(?int $colCoId): void
    {
        $this->colCoId['value'] = $colCoId;
    }

    /**
     * Unsets Col Co Id.
     * Collecting Company Id (in GFN) of the selected payer.
     *
     * Optional if ColCoCode or ColCoCountryCode  is passed else Mandatory.
     */
    public function unsetColCoId(): void
    {
        $this->colCoId = [];
    }

    /**
     * Returns Return Tolls Customer Id.
     * Return e-Toll Customer details When True.
     */
    public function getReturnTollsCustomerId(): ?bool
    {
        return $this->returnTollsCustomerId;
    }

    /**
     * Sets Return Tolls Customer Id.
     * Return e-Toll Customer details When True.
     *
     * @maps ReturnTollsCustomerId
     */
    public function setReturnTollsCustomerId(?bool $returnTollsCustomerId): void
    {
        $this->returnTollsCustomerId = $returnTollsCustomerId;
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
     * Returns Account Name.
     * Account Name of the customer.
     *
     * Optional.
     *
     * Minimum of 4 characters should be provided else not considered.
     *
     * Accounts those have the entered value at any part of the Name will be returned.
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
     * Account Name of the customer.
     *
     * Optional.
     *
     * Minimum of 4 characters should be provided else not considered.
     *
     * Accounts those have the entered value at any part of the Name will be returned.
     *
     * @maps AccountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName['value'] = $accountName;
    }

    /**
     * Unsets Account Name.
     * Account Name of the customer.
     *
     * Optional.
     *
     * Minimum of 4 characters should be provided else not considered.
     *
     * Accounts those have the entered value at any part of the Name will be returned.
     */
    public function unsetAccountName(): void
    {
        $this->accountName = [];
    }

    /**
     * Returns Status List.
     * Account Statuses.
     *
     * Optional
     *
     * Multiple statuses are allowed to be included in the search criteria.
     *
     * Allowed values:
     *
     * •    ACTIVE
     *
     * •    BLOCKED
     *
     * •    CANCELLED
     *
     * •    CREDITLOCK
     *
     * •    DELINQUENCYLOCK
     *
     * @return array<string|null>|null
     */
    public function getStatusList(): ?array
    {
        return $this->statusList;
    }

    /**
     * Sets Status List.
     * Account Statuses.
     *
     * Optional
     *
     * Multiple statuses are allowed to be included in the search criteria.
     *
     * Allowed values:
     *
     * •    ACTIVE
     *
     * •    BLOCKED
     *
     * •    CANCELLED
     *
     * •    CREDITLOCK
     *
     * •    DELINQUENCYLOCK
     *
     * @maps StatusList
     *
     * @param array<string|null>|null $statusList
     */
    public function setStatusList(?array $statusList): void
    {
        $this->statusList = $statusList;
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
        if (!empty($this->status)) {
            $json['Status']                = $this->status['value'];
        }
        if (isset($this->includeCardSummary)) {
            $json['IncludeCardSummary']    = $this->includeCardSummary;
        }
        if (!empty($this->payerId)) {
            $json['PayerId']               = $this->payerId['value'];
        }
        if (!empty($this->payerNumber)) {
            $json['PayerNumber']           = $this->payerNumber['value'];
        }
        if (!empty($this->pageSize)) {
            $json['PageSize']              = $this->pageSize['value'];
        }
        if (!empty($this->requestId)) {
            $json['RequestId']             = $this->requestId['value'];
        }
        if (!empty($this->colCoCode)) {
            $json['ColCoCode']             = $this->colCoCode['value'];
        }
        if (!empty($this->colCoCountryCode)) {
            $json['ColCoCountryCode']      = $this->colCoCountryCode['value'];
        }
        if (!empty($this->currentPage)) {
            $json['CurrentPage']           = $this->currentPage['value'];
        }
        if (!empty($this->invoicePointsOnly)) {
            $json['InvoicePointsOnly']     = $this->invoicePointsOnly['value'];
        }
        if (!empty($this->colCoId)) {
            $json['ColCoId']               = $this->colCoId['value'];
        }
        if (isset($this->returnTollsCustomerId)) {
            $json['ReturnTollsCustomerId'] = $this->returnTollsCustomerId;
        }
        if (isset($this->accounts)) {
            $json['Accounts']              = $this->accounts;
        }
        if (!empty($this->accountName)) {
            $json['AccountName']           = $this->accountName['value'];
        }
        if (isset($this->statusList)) {
            $json['StatusList']            = $this->statusList;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
