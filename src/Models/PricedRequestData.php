<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

/**
 * This endpoint allows querying the transaction data (i.e. Priced, Billed and Unbilled sales items)
 * from SFSBI. It provides a flexible search criteria and supports paging
 */
class PricedRequestData implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $colCoCode;

    /**
     * @var array
     */
    private $invoiceStatus;

    /**
     * @var string|null
     */
    private $payerNumber;

    /**
     * @var array
     */
    private $accountId = [];

    /**
     * @var array
     */
    private $accountNumber = [];

    /**
     * @var array
     */
    private $driverName = [];

    /**
     * @var array
     */
    private $cardGroupId = [];

    /**
     * @var array
     */
    private $cardPAN = [];

    /**
     * @var array
     */
    private $productCode = [];

    /**
     * @var array
     */
    private $productName = [];

    /**
     * @var array
     */
    private $siteCode = [];

    /**
     * @var array
     */
    private $incomingSiteNumber = [];

    /**
     * @var array
     */
    private $invoiceDate = [];

    /**
     * @var array
     */
    private $invoiceNumber = [];

    /**
     * @var array
     */
    private $purchasedInCountryCode = [];

    /**
     * @var array
     */
    private $purchasedInCountry = [];

    /**
     * @var array
     */
    private $siteGroupId = [];

    /**
     * @var array
     */
    private $vehicleRegistrationNumber = [];

    /**
     * @var array
     */
    private $feeTypeId = [];

    /**
     * @var array
     */
    private $lineItemDescription = [];

    /**
     * @var int[]|null
     */
    private $cards;

    /**
     * @var string|null
     */
    private $sortOrder;

    /**
     * @var array
     */
    private $fromDate = [];

    /**
     * @var array
     */
    private $toDate = [];

    /**
     * @var int|null
     */
    private $period;

    /**
     * @var array
     */
    private $postingDateFrom = [];

    /**
     * @var array
     */
    private $postingDateTo = [];

    /**
     * @var array
     */
    private $transactionItemId = [];

    /**
     * @var array
     */
    private $fuelOnly = ['value' => false];

    /**
     * @var array
     */
    private $includeFees = [];

    /**
     * @var bool|null
     */
    private $isMultipayer;

    /**
     * @var bool|null
     */
    private $validInvoiceDateOnly = false;

    /**
     * @var array
     */
    private $invoiceFromDate = [];

    /**
     * @var array
     */
    private $invoiceToDate = [];

    /**
     * @var array
     */
    private $hostingCollectingCompanyNumber = [];

    /**
     * @var array
     */
    private $search = [];

    /**
     * @var array
     */
    private $transactionId = [];

    /**
     * @param array $invoiceStatus
     */
    public function __construct(array $invoiceStatus)
    {
        $this->invoiceStatus = $invoiceStatus;
    }

    /**
     * Returns Col Co Code.
     * Collecting Company Code (Shell Code) of the selected payer.
     */
    public function getColCoCode(): ?string
    {
        return $this->colCoCode;
    }

    /**
     * Sets Col Co Code.
     * Collecting Company Code (Shell Code) of the selected payer.
     *
     * @maps ColCoCode
     */
    public function setColCoCode(?string $colCoCode): void
    {
        $this->colCoCode = $colCoCode;
    }

    /**
     * Returns Invoice Status.
     */
    public function getInvoiceStatus(): array
    {
        return $this->invoiceStatus;
    }

    /**
     * Sets Invoice Status.
     *
     * @required
     * @maps InvoiceStatus
     */
    public function setInvoiceStatus(array $invoiceStatus): void
    {
        $this->invoiceStatus = $invoiceStatus;
    }

    /**
     * Returns Payer Number.
     * Payer Number of the selected payer.
     */
    public function getPayerNumber(): ?string
    {
        return $this->payerNumber;
    }

    /**
     * Sets Payer Number.
     * Payer Number of the selected payer.
     *
     * @maps PayerNumber
     */
    public function setPayerNumber(?string $payerNumber): void
    {
        $this->payerNumber = $payerNumber;
    }

    /**
     * Returns Account Id.
     * Account Id (GFN customer id)
     */
    public function getAccountId(): ?int
    {
        if (count($this->accountId) == 0) {
            return null;
        }
        return $this->accountId['value'];
    }

    /**
     * Sets Account Id.
     * Account Id (GFN customer id)
     *
     * @maps AccountId
     */
    public function setAccountId(?int $accountId): void
    {
        $this->accountId['value'] = $accountId;
    }

    /**
     * Unsets Account Id.
     * Account Id (GFN customer id)
     */
    public function unsetAccountId(): void
    {
        $this->accountId = [];
    }

    /**
     * Returns Account Number.
     * Account Number of the selected account.
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
     * Account Number of the selected account.
     *
     * @maps AccountNumber
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber['value'] = $accountNumber;
    }

    /**
     * Unsets Account Number.
     * Account Number of the selected account.
     */
    public function unsetAccountNumber(): void
    {
        $this->accountNumber = [];
    }

    /**
     * Returns Driver Name.
     * Driver Name (of Card record)
     */
    public function getDriverName(): ?string
    {
        if (count($this->driverName) == 0) {
            return null;
        }
        return $this->driverName['value'];
    }

    /**
     * Sets Driver Name.
     * Driver Name (of Card record)
     *
     * @maps DriverName
     */
    public function setDriverName(?string $driverName): void
    {
        $this->driverName['value'] = $driverName;
    }

    /**
     * Unsets Driver Name.
     * Driver Name (of Card record)
     */
    public function unsetDriverName(): void
    {
        $this->driverName = [];
    }

    /**
     * Returns Card Group Id.
     * Card Group Id in GFN
     */
    public function getCardGroupId(): ?int
    {
        if (count($this->cardGroupId) == 0) {
            return null;
        }
        return $this->cardGroupId['value'];
    }

    /**
     * Sets Card Group Id.
     * Card Group Id in GFN
     *
     * @maps CardGroupId
     */
    public function setCardGroupId(?int $cardGroupId): void
    {
        $this->cardGroupId['value'] = $cardGroupId;
    }

    /**
     * Unsets Card Group Id.
     * Card Group Id in GFN
     */
    public function unsetCardGroupId(): void
    {
        $this->cardGroupId = [];
    }

    /**
     * Returns Card PAN.
     * Full Card PAN
     */
    public function getCardPAN(): ?string
    {
        if (count($this->cardPAN) == 0) {
            return null;
        }
        return $this->cardPAN['value'];
    }

    /**
     * Sets Card PAN.
     * Full Card PAN
     *
     * @maps CardPAN
     */
    public function setCardPAN(?string $cardPAN): void
    {
        $this->cardPAN['value'] = $cardPAN;
    }

    /**
     * Unsets Card PAN.
     * Full Card PAN
     */
    public function unsetCardPAN(): void
    {
        $this->cardPAN = [];
    }

    /**
     * Returns Product Code.
     * Product Code – Global as per GFN configuration
     */
    public function getProductCode(): ?string
    {
        if (count($this->productCode) == 0) {
            return null;
        }
        return $this->productCode['value'];
    }

    /**
     * Sets Product Code.
     * Product Code – Global as per GFN configuration
     *
     * @maps ProductCode
     */
    public function setProductCode(?string $productCode): void
    {
        $this->productCode['value'] = $productCode;
    }

    /**
     * Unsets Product Code.
     * Product Code – Global as per GFN configuration
     */
    public function unsetProductCode(): void
    {
        $this->productCode = [];
    }

    /**
     * Returns Product Name.
     * Product Name – Global as per GFN configuration
     */
    public function getProductName(): ?string
    {
        if (count($this->productName) == 0) {
            return null;
        }
        return $this->productName['value'];
    }

    /**
     * Sets Product Name.
     * Product Name – Global as per GFN configuration
     *
     * @maps ProductName
     */
    public function setProductName(?string $productName): void
    {
        $this->productName['value'] = $productName;
    }

    /**
     * Unsets Product Name.
     * Product Name – Global as per GFN configuration
     */
    public function unsetProductName(): void
    {
        $this->productName = [];
    }

    /**
     * Returns Site Code.
     * Site Code in GFN
     */
    public function getSiteCode(): ?string
    {
        if (count($this->siteCode) == 0) {
            return null;
        }
        return $this->siteCode['value'];
    }

    /**
     * Sets Site Code.
     * Site Code in GFN
     *
     * @maps SiteCode
     */
    public function setSiteCode(?string $siteCode): void
    {
        $this->siteCode['value'] = $siteCode;
    }

    /**
     * Unsets Site Code.
     * Site Code in GFN
     */
    public function unsetSiteCode(): void
    {
        $this->siteCode = [];
    }

    /**
     * Returns Incoming Site Number.
     * Site Code as configured in GFN
     */
    public function getIncomingSiteNumber(): ?string
    {
        if (count($this->incomingSiteNumber) == 0) {
            return null;
        }
        return $this->incomingSiteNumber['value'];
    }

    /**
     * Sets Incoming Site Number.
     * Site Code as configured in GFN
     *
     * @maps IncomingSiteNumber
     */
    public function setIncomingSiteNumber(?string $incomingSiteNumber): void
    {
        $this->incomingSiteNumber['value'] = $incomingSiteNumber;
    }

    /**
     * Unsets Incoming Site Number.
     * Site Code as configured in GFN
     */
    public function unsetIncomingSiteNumber(): void
    {
        $this->incomingSiteNumber = [];
    }

    /**
     * Returns Invoice Date.
     * Returns the billed transaction for the given invoice date
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
     * Returns the billed transaction for the given invoice date
     *
     * @maps InvoiceDate
     */
    public function setInvoiceDate(?string $invoiceDate): void
    {
        $this->invoiceDate['value'] = $invoiceDate;
    }

    /**
     * Unsets Invoice Date.
     * Returns the billed transaction for the given invoice date
     */
    public function unsetInvoiceDate(): void
    {
        $this->invoiceDate = [];
    }

    /**
     * Returns Invoice Number.
     * Returns the billed transaction for the given invoice number
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
     * Returns the billed transaction for the given invoice number
     *
     * @maps InvoiceNumber
     */
    public function setInvoiceNumber(?string $invoiceNumber): void
    {
        $this->invoiceNumber['value'] = $invoiceNumber;
    }

    /**
     * Unsets Invoice Number.
     * Returns the billed transaction for the given invoice number
     */
    public function unsetInvoiceNumber(): void
    {
        $this->invoiceNumber = [];
    }

    /**
     * Returns Purchased in Country Code.
     * Purchased InCountryCode
     */
    public function getPurchasedInCountryCode(): ?string
    {
        if (count($this->purchasedInCountryCode) == 0) {
            return null;
        }
        return $this->purchasedInCountryCode['value'];
    }

    /**
     * Sets Purchased in Country Code.
     * Purchased InCountryCode
     *
     * @maps PurchasedInCountryCode
     */
    public function setPurchasedInCountryCode(?string $purchasedInCountryCode): void
    {
        $this->purchasedInCountryCode['value'] = $purchasedInCountryCode;
    }

    /**
     * Unsets Purchased in Country Code.
     * Purchased InCountryCode
     */
    public function unsetPurchasedInCountryCode(): void
    {
        $this->purchasedInCountryCode = [];
    }

    /**
     * Returns Purchased in Country.
     * Network Delco PurchasedCountryName
     */
    public function getPurchasedInCountry(): ?string
    {
        if (count($this->purchasedInCountry) == 0) {
            return null;
        }
        return $this->purchasedInCountry['value'];
    }

    /**
     * Sets Purchased in Country.
     * Network Delco PurchasedCountryName
     *
     * @maps PurchasedInCountry
     */
    public function setPurchasedInCountry(?string $purchasedInCountry): void
    {
        $this->purchasedInCountry['value'] = $purchasedInCountry;
    }

    /**
     * Unsets Purchased in Country.
     * Network Delco PurchasedCountryName
     */
    public function unsetPurchasedInCountry(): void
    {
        $this->purchasedInCountry = [];
    }

    /**
     * Returns Site Group Id.
     * Site Group Id in GFN
     */
    public function getSiteGroupId(): ?int
    {
        if (count($this->siteGroupId) == 0) {
            return null;
        }
        return $this->siteGroupId['value'];
    }

    /**
     * Sets Site Group Id.
     * Site Group Id in GFN
     *
     * @maps SiteGroupId
     */
    public function setSiteGroupId(?int $siteGroupId): void
    {
        $this->siteGroupId['value'] = $siteGroupId;
    }

    /**
     * Unsets Site Group Id.
     * Site Group Id in GFN
     */
    public function unsetSiteGroupId(): void
    {
        $this->siteGroupId = [];
    }

    /**
     * Returns Vehicle Registration Number.
     * Vehicle Registration (of Card record)
     */
    public function getVehicleRegistrationNumber(): ?string
    {
        if (count($this->vehicleRegistrationNumber) == 0) {
            return null;
        }
        return $this->vehicleRegistrationNumber['value'];
    }

    /**
     * Sets Vehicle Registration Number.
     * Vehicle Registration (of Card record)
     *
     * @maps VehicleRegistrationNumber
     */
    public function setVehicleRegistrationNumber(?string $vehicleRegistrationNumber): void
    {
        $this->vehicleRegistrationNumber['value'] = $vehicleRegistrationNumber;
    }

    /**
     * Unsets Vehicle Registration Number.
     * Vehicle Registration (of Card record)
     */
    public function unsetVehicleRegistrationNumber(): void
    {
        $this->vehicleRegistrationNumber = [];
    }

    /**
     * Returns Fee Type Id.
     * Card Id (i.e. Unique Card Id in GFN)
     */
    public function getFeeTypeId(): ?int
    {
        if (count($this->feeTypeId) == 0) {
            return null;
        }
        return $this->feeTypeId['value'];
    }

    /**
     * Sets Fee Type Id.
     * Card Id (i.e. Unique Card Id in GFN)
     *
     * @maps FeeTypeId
     */
    public function setFeeTypeId(?int $feeTypeId): void
    {
        $this->feeTypeId['value'] = $feeTypeId;
    }

    /**
     * Unsets Fee Type Id.
     * Card Id (i.e. Unique Card Id in GFN)
     */
    public function unsetFeeTypeId(): void
    {
        $this->feeTypeId = [];
    }

    /**
     * Returns Line Item Description.
     * Item identifier in the transaction.
     */
    public function getLineItemDescription(): ?string
    {
        if (count($this->lineItemDescription) == 0) {
            return null;
        }
        return $this->lineItemDescription['value'];
    }

    /**
     * Sets Line Item Description.
     * Item identifier in the transaction.
     *
     * @maps LineItemDescription
     */
    public function setLineItemDescription(?string $lineItemDescription): void
    {
        $this->lineItemDescription['value'] = $lineItemDescription;
    }

    /**
     * Unsets Line Item Description.
     * Item identifier in the transaction.
     */
    public function unsetLineItemDescription(): void
    {
        $this->lineItemDescription = [];
    }

    /**
     * Returns Cards.
     * This entity accepts the list of CardId to filter in the response.
     * Note: The number of cardId allowed to be passed in the request is configurable to a maximum of 500
     * cards.
     *
     * @return int[]|null
     */
    public function getCards(): ?array
    {
        return $this->cards;
    }

    /**
     * Sets Cards.
     * This entity accepts the list of CardId to filter in the response.
     * Note: The number of cardId allowed to be passed in the request is configurable to a maximum of 500
     * cards.
     *
     * @maps Cards
     *
     * @param int[]|null $cards
     */
    public function setCards(?array $cards): void
    {
        $this->cards = $cards;
    }

    /**
     * Returns Sort Order.
     */
    public function getSortOrder(): ?string
    {
        return $this->sortOrder;
    }

    /**
     * Sets Sort Order.
     *
     * @maps SortOrder
     * @factory \ShellDataReportingAPIsLib\Models\PricedTransactionReqV2SortOrderEnum::checkValue
     */
    public function setSortOrder(?string $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }

    /**
     * Returns From Date.
     * From transaction delivery date
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
     * From transaction delivery date
     *
     * @maps FromDate
     */
    public function setFromDate(?string $fromDate): void
    {
        $this->fromDate['value'] = $fromDate;
    }

    /**
     * Unsets From Date.
     * From transaction delivery date
     */
    public function unsetFromDate(): void
    {
        $this->fromDate = [];
    }

    /**
     * Returns To Date.
     * To transaction delivery date
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
     * To transaction delivery date
     *
     * @maps ToDate
     */
    public function setToDate(?string $toDate): void
    {
        $this->toDate['value'] = $toDate;
    }

    /**
     * Unsets To Date.
     * To transaction delivery date
     */
    public function unsetToDate(): void
    {
        $this->toDate = [];
    }

    /**
     * Returns Period.
     */
    public function getPeriod(): ?int
    {
        return $this->period;
    }

    /**
     * Sets Period.
     *
     * @maps Period
     * @factory \ShellDataReportingAPIsLib\Models\PricedTransactionReqV2PeriodEnum::checkValue
     */
    public function setPeriod(?int $period): void
    {
        $this->period = $period;
    }

    /**
     * Returns Posting Date From.
     * Transaction posting start date and time
     */
    public function getPostingDateFrom(): ?string
    {
        if (count($this->postingDateFrom) == 0) {
            return null;
        }
        return $this->postingDateFrom['value'];
    }

    /**
     * Sets Posting Date From.
     * Transaction posting start date and time
     *
     * @maps PostingDateFrom
     */
    public function setPostingDateFrom(?string $postingDateFrom): void
    {
        $this->postingDateFrom['value'] = $postingDateFrom;
    }

    /**
     * Unsets Posting Date From.
     * Transaction posting start date and time
     */
    public function unsetPostingDateFrom(): void
    {
        $this->postingDateFrom = [];
    }

    /**
     * Returns Posting Date To.
     * Transaction posting end date and time
     */
    public function getPostingDateTo(): ?string
    {
        if (count($this->postingDateTo) == 0) {
            return null;
        }
        return $this->postingDateTo['value'];
    }

    /**
     * Sets Posting Date To.
     * Transaction posting end date and time
     *
     * @maps PostingDateTo
     */
    public function setPostingDateTo(?string $postingDateTo): void
    {
        $this->postingDateTo['value'] = $postingDateTo;
    }

    /**
     * Unsets Posting Date To.
     * Transaction posting end date and time
     */
    public function unsetPostingDateTo(): void
    {
        $this->postingDateTo = [];
    }

    /**
     * Returns Transaction Item Id.
     * Unique id of the transaction that may include one or more salesitems
     */
    public function getTransactionItemId(): ?string
    {
        if (count($this->transactionItemId) == 0) {
            return null;
        }
        return $this->transactionItemId['value'];
    }

    /**
     * Sets Transaction Item Id.
     * Unique id of the transaction that may include one or more salesitems
     *
     * @maps TransactionItemId
     */
    public function setTransactionItemId(?string $transactionItemId): void
    {
        $this->transactionItemId['value'] = $transactionItemId;
    }

    /**
     * Unsets Transaction Item Id.
     * Unique id of the transaction that may include one or more salesitems
     */
    public function unsetTransactionItemId(): void
    {
        $this->transactionItemId = [];
    }

    /**
     * Returns Fuel Only.
     * Is FuelOnly indicator
     */
    public function getFuelOnly(): ?bool
    {
        if (count($this->fuelOnly) == 0) {
            return null;
        }
        return $this->fuelOnly['value'];
    }

    /**
     * Sets Fuel Only.
     * Is FuelOnly indicator
     *
     * @maps FuelOnly
     */
    public function setFuelOnly(?bool $fuelOnly): void
    {
        $this->fuelOnly['value'] = $fuelOnly;
    }

    /**
     * Unsets Fuel Only.
     * Is FuelOnly indicator
     */
    public function unsetFuelOnly(): void
    {
        $this->fuelOnly = [];
    }

    /**
     * Returns Include Fees.
     * When passed as ‘true’ then all sales items along with fees will be included in the response and the
     * follwoing filteres will be ignored
     * * InvoiceNumber
     * * InvoiceDate
     * * PostingDateFrom
     * * PostingDateTo
     */
    public function getIncludeFees(): ?bool
    {
        if (count($this->includeFees) == 0) {
            return null;
        }
        return $this->includeFees['value'];
    }

    /**
     * Sets Include Fees.
     * When passed as ‘true’ then all sales items along with fees will be included in the response and the
     * follwoing filteres will be ignored
     * * InvoiceNumber
     * * InvoiceDate
     * * PostingDateFrom
     * * PostingDateTo
     *
     * @maps IncludeFees
     */
    public function setIncludeFees(?bool $includeFees): void
    {
        $this->includeFees['value'] = $includeFees;
    }

    /**
     * Unsets Include Fees.
     * When passed as ‘true’ then all sales items along with fees will be included in the response and the
     * follwoing filteres will be ignored
     * * InvoiceNumber
     * * InvoiceDate
     * * PostingDateFrom
     * * PostingDateTo
     */
    public function unsetIncludeFees(): void
    {
        $this->includeFees = [];
    }

    /**
     * Returns Is Multipayer.
     * If true then returns all the data linked tothe payer group of the provided PayerNumberin the
     * request
     */
    public function getIsMultipayer(): ?bool
    {
        return $this->isMultipayer;
    }

    /**
     * Sets Is Multipayer.
     * If true then returns all the data linked tothe payer group of the provided PayerNumberin the
     * request
     *
     * @maps IsMultipayer
     */
    public function setIsMultipayer(?bool $isMultipayer): void
    {
        $this->isMultipayer = $isMultipayer;
    }

    /**
     * Returns Valid Invoice Date Only.
     * When passed as ‘True’ the transactions records with report date not equal to 9999-12-30 will be
     * returned. When passed as ‘False’ the above condition will not be checked.
     */
    public function getValidInvoiceDateOnly(): ?bool
    {
        return $this->validInvoiceDateOnly;
    }

    /**
     * Sets Valid Invoice Date Only.
     * When passed as ‘True’ the transactions records with report date not equal to 9999-12-30 will be
     * returned. When passed as ‘False’ the above condition will not be checked.
     *
     * @maps ValidInvoiceDateOnly
     */
    public function setValidInvoiceDateOnly(?bool $validInvoiceDateOnly): void
    {
        $this->validInvoiceDateOnly = $validInvoiceDateOnly;
    }

    /**
     * Returns Invoice From Date.
     * Invoice From Date, this is a search criterion to filter invoiced transactions with invoice date from
     * this date.
     */
    public function getInvoiceFromDate(): ?string
    {
        if (count($this->invoiceFromDate) == 0) {
            return null;
        }
        return $this->invoiceFromDate['value'];
    }

    /**
     * Sets Invoice From Date.
     * Invoice From Date, this is a search criterion to filter invoiced transactions with invoice date from
     * this date.
     *
     * @maps InvoiceFromDate
     */
    public function setInvoiceFromDate(?string $invoiceFromDate): void
    {
        $this->invoiceFromDate['value'] = $invoiceFromDate;
    }

    /**
     * Unsets Invoice From Date.
     * Invoice From Date, this is a search criterion to filter invoiced transactions with invoice date from
     * this date.
     */
    public function unsetInvoiceFromDate(): void
    {
        $this->invoiceFromDate = [];
    }

    /**
     * Returns Invoice to Date.
     * Invoice To Date, this is a search criterion to filter invoiced transactions with invoice date until
     * this date.
     */
    public function getInvoiceToDate(): ?string
    {
        if (count($this->invoiceToDate) == 0) {
            return null;
        }
        return $this->invoiceToDate['value'];
    }

    /**
     * Sets Invoice to Date.
     * Invoice To Date, this is a search criterion to filter invoiced transactions with invoice date until
     * this date.
     *
     * @maps InvoiceToDate
     */
    public function setInvoiceToDate(?string $invoiceToDate): void
    {
        $this->invoiceToDate['value'] = $invoiceToDate;
    }

    /**
     * Unsets Invoice to Date.
     * Invoice To Date, this is a search criterion to filter invoiced transactions with invoice date until
     * this date.
     */
    public function unsetInvoiceToDate(): void
    {
        $this->invoiceToDate = [];
    }

    /**
     * Returns Hosting Collecting Company Number.
     * Hosting Collecting Company Number of the selected payer.
     */
    public function getHostingCollectingCompanyNumber(): ?string
    {
        if (count($this->hostingCollectingCompanyNumber) == 0) {
            return null;
        }
        return $this->hostingCollectingCompanyNumber['value'];
    }

    /**
     * Sets Hosting Collecting Company Number.
     * Hosting Collecting Company Number of the selected payer.
     *
     * @maps HostingCollectingCompanyNumber
     */
    public function setHostingCollectingCompanyNumber(?string $hostingCollectingCompanyNumber): void
    {
        $this->hostingCollectingCompanyNumber['value'] = $hostingCollectingCompanyNumber;
    }

    /**
     * Unsets Hosting Collecting Company Number.
     * Hosting Collecting Company Number of the selected payer.
     */
    public function unsetHostingCollectingCompanyNumber(): void
    {
        $this->hostingCollectingCompanyNumber = [];
    }

    /**
     * Returns Search.
     * Search based on DriverName or VRN
     */
    public function getSearch(): ?string
    {
        if (count($this->search) == 0) {
            return null;
        }
        return $this->search['value'];
    }

    /**
     * Sets Search.
     * Search based on DriverName or VRN
     *
     * @maps Search
     */
    public function setSearch(?string $search): void
    {
        $this->search['value'] = $search;
    }

    /**
     * Unsets Search.
     * Search based on DriverName or VRN
     */
    public function unsetSearch(): void
    {
        $this->search = [];
    }

    /**
     * Returns Transaction Id.
     * Unique id of the transaction that may include one or more salesitems
     */
    public function getTransactionId(): ?string
    {
        if (count($this->transactionId) == 0) {
            return null;
        }
        return $this->transactionId['value'];
    }

    /**
     * Sets Transaction Id.
     * Unique id of the transaction that may include one or more salesitems
     *
     * @maps TransactionId
     */
    public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId['value'] = $transactionId;
    }

    /**
     * Unsets Transaction Id.
     * Unique id of the transaction that may include one or more salesitems
     */
    public function unsetTransactionId(): void
    {
        $this->transactionId = [];
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
        $json['ColCoCode']                          = $this->colCoCode;
        $json['InvoiceStatus']                      = $this->invoiceStatus;
        $json['PayerNumber']                        = $this->payerNumber;
        if (!empty($this->accountId)) {
            $json['AccountId']                      = $this->accountId['value'];
        }
        if (!empty($this->accountNumber)) {
            $json['AccountNumber']                  = $this->accountNumber['value'];
        }
        if (!empty($this->driverName)) {
            $json['DriverName']                     = $this->driverName['value'];
        }
        if (!empty($this->cardGroupId)) {
            $json['CardGroupId']                    = $this->cardGroupId['value'];
        }
        if (!empty($this->cardPAN)) {
            $json['CardPAN']                        = $this->cardPAN['value'];
        }
        if (!empty($this->productCode)) {
            $json['ProductCode']                    = $this->productCode['value'];
        }
        if (!empty($this->productName)) {
            $json['ProductName']                    = $this->productName['value'];
        }
        if (!empty($this->siteCode)) {
            $json['SiteCode']                       = $this->siteCode['value'];
        }
        if (!empty($this->incomingSiteNumber)) {
            $json['IncomingSiteNumber']             = $this->incomingSiteNumber['value'];
        }
        if (!empty($this->invoiceDate)) {
            $json['InvoiceDate']                    = $this->invoiceDate['value'];
        }
        if (!empty($this->invoiceNumber)) {
            $json['InvoiceNumber']                  = $this->invoiceNumber['value'];
        }
        if (!empty($this->purchasedInCountryCode)) {
            $json['PurchasedInCountryCode']         = $this->purchasedInCountryCode['value'];
        }
        if (!empty($this->purchasedInCountry)) {
            $json['PurchasedInCountry']             = $this->purchasedInCountry['value'];
        }
        if (!empty($this->siteGroupId)) {
            $json['SiteGroupId']                    = $this->siteGroupId['value'];
        }
        if (!empty($this->vehicleRegistrationNumber)) {
            $json['VehicleRegistrationNumber']      = $this->vehicleRegistrationNumber['value'];
        }
        if (!empty($this->feeTypeId)) {
            $json['FeeTypeId']                      = $this->feeTypeId['value'];
        }
        if (!empty($this->lineItemDescription)) {
            $json['LineItemDescription']            = $this->lineItemDescription['value'];
        }
        if (isset($this->cards)) {
            $json['Cards']                          = $this->cards;
        }
        if (isset($this->sortOrder)) {
            $json['SortOrder']                      = PricedTransactionReqV2SortOrderEnum::checkValue($this->sortOrder);
        }
        if (!empty($this->fromDate)) {
            $json['FromDate']                       = $this->fromDate['value'];
        }
        if (!empty($this->toDate)) {
            $json['ToDate']                         = $this->toDate['value'];
        }
        if (isset($this->period)) {
            $json['Period']                         = PricedTransactionReqV2PeriodEnum::checkValue($this->period);
        }
        if (!empty($this->postingDateFrom)) {
            $json['PostingDateFrom']                = $this->postingDateFrom['value'];
        }
        if (!empty($this->postingDateTo)) {
            $json['PostingDateTo']                  = $this->postingDateTo['value'];
        }
        if (!empty($this->transactionItemId)) {
            $json['TransactionItemId']              = $this->transactionItemId['value'];
        }
        if (!empty($this->fuelOnly)) {
            $json['FuelOnly']                       = $this->fuelOnly['value'];
        }
        if (!empty($this->includeFees)) {
            $json['IncludeFees']                    = $this->includeFees['value'];
        }
        if (isset($this->isMultipayer)) {
            $json['IsMultipayer']                   = $this->isMultipayer;
        }
        if (isset($this->validInvoiceDateOnly)) {
            $json['ValidInvoiceDateOnly']           = $this->validInvoiceDateOnly;
        }
        if (!empty($this->invoiceFromDate)) {
            $json['InvoiceFromDate']                = $this->invoiceFromDate['value'];
        }
        if (!empty($this->invoiceToDate)) {
            $json['InvoiceToDate']                  = $this->invoiceToDate['value'];
        }
        if (!empty($this->hostingCollectingCompanyNumber)) {
            $json['HostingCollectingCompanyNumber'] = $this->hostingCollectingCompanyNumber['value'];
        }
        if (!empty($this->search)) {
            $json['Search']                         = $this->search['value'];
        }
        if (!empty($this->transactionId)) {
            $json['TransactionId']                  = $this->transactionId['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
