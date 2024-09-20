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
 * List of payments made by the customer after the latest Statement of Account.
 * Note: All the payments made by the customer will be returned when there is no Statement of Account
 * available for customer.
 */
class PaymentsSinceLastSOA implements \JsonSerializable
{
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
    private $accountShortName = [];

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
    private $summaryDocumentDate = [];

    /**
     * @var array
     */
    private $summaryDocumentPaymentDueDate = [];

    /**
     * @var array
     */
    private $summaryDocumentTotalValue = [];

    /**
     * @var array
     */
    private $summaryDocumentTotalVAT = [];

    /**
     * @var array
     */
    private $summaryDocumentDDAmount = [];

    /**
     * @var array
     */
    private $paymentDate = [];

    /**
     * @var array
     */
    private $paymentReference = [];

    /**
     * @var array
     */
    private $paymentCurrencyCode = [];

    /**
     * @var array
     */
    private $paymentCurrencySymbol = [];

    /**
     * @var array
     */
    private $amountPaid = [];

    /**
     * @var array
     */
    private $balance = [];

    /**
     * @var array
     */
    private $truePayment = [];

    /**
     * @var array
     */
    private $prepaidBalance = [];

    /**
     * @var array
     */
    private $localCurrencyCode = [];

    /**
     * @var array
     */
    private $localCurrencySymbol = [];

    /**
     * @var array
     */
    private $localCurrencyExchangeRate = [];

    /**
     * Returns Account Id.
     * Account Identifier for which payment is made.
     *
     * Example: 12345
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
     * Account Identifier for which payment is made.
     *
     * Example: 12345
     *
     * @maps AccountId
     */
    public function setAccountId(?int $accountId): void
    {
        $this->accountId['value'] = $accountId;
    }

    /**
     * Unsets Account Id.
     * Account Identifier for which payment is made.
     *
     * Example: 12345
     */
    public function unsetAccountId(): void
    {
        $this->accountId = [];
    }

    /**
     * Returns Account Number.
     * Account number for which payment is made.
     *
     * Example: GB000000123
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
     * Account number for which payment is made.
     *
     * Example: GB000000123
     *
     * @maps AccountNumber
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber['value'] = $accountNumber;
    }

    /**
     * Unsets Account Number.
     * Account number for which payment is made.
     *
     * Example: GB000000123
     */
    public function unsetAccountNumber(): void
    {
        $this->accountNumber = [];
    }

    /**
     * Returns Account Short Name.
     * Account Short Name
     * Example: GB Earth Movers-SN
     */
    public function getAccountShortName(): ?string
    {
        if (count($this->accountShortName) == 0) {
            return null;
        }
        return $this->accountShortName['value'];
    }

    /**
     * Sets Account Short Name.
     * Account Short Name
     * Example: GB Earth Movers-SN
     *
     * @maps AccountShortName
     */
    public function setAccountShortName(?string $accountShortName): void
    {
        $this->accountShortName['value'] = $accountShortName;
    }

    /**
     * Unsets Account Short Name.
     * Account Short Name
     * Example: GB Earth Movers-SN
     */
    public function unsetAccountShortName(): void
    {
        $this->accountShortName = [];
    }

    /**
     * Returns Summary Document Id.
     * Summary billing document reference id.
     * Example: 2
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
     * Summary billing document reference id.
     * Example: 2
     *
     * @maps SummaryDocumentId
     */
    public function setSummaryDocumentId(?int $summaryDocumentId): void
    {
        $this->summaryDocumentId['value'] = $summaryDocumentId;
    }

    /**
     * Unsets Summary Document Id.
     * Summary billing document reference id.
     * Example: 2
     */
    public function unsetSummaryDocumentId(): void
    {
        $this->summaryDocumentId = [];
    }

    /**
     * Returns Summary Document Number.
     * Summary billing document reference number.
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
     * Summary billing document reference number.
     *
     * @maps SummaryDocumentNumber
     */
    public function setSummaryDocumentNumber(?string $summaryDocumentNumber): void
    {
        $this->summaryDocumentNumber['value'] = $summaryDocumentNumber;
    }

    /**
     * Unsets Summary Document Number.
     * Summary billing document reference number.
     */
    public function unsetSummaryDocumentNumber(): void
    {
        $this->summaryDocumentNumber = [];
    }

    /**
     * Returns Summary Document Date.
     * Summary billing document date.
     *
     * Format: YYYYMMDD
     */
    public function getSummaryDocumentDate(): ?string
    {
        if (count($this->summaryDocumentDate) == 0) {
            return null;
        }
        return $this->summaryDocumentDate['value'];
    }

    /**
     * Sets Summary Document Date.
     * Summary billing document date.
     *
     * Format: YYYYMMDD
     *
     * @maps SummaryDocumentDate
     */
    public function setSummaryDocumentDate(?string $summaryDocumentDate): void
    {
        $this->summaryDocumentDate['value'] = $summaryDocumentDate;
    }

    /**
     * Unsets Summary Document Date.
     * Summary billing document date.
     *
     * Format: YYYYMMDD
     */
    public function unsetSummaryDocumentDate(): void
    {
        $this->summaryDocumentDate = [];
    }

    /**
     * Returns Summary Document Payment Due Date.
     * Payment due date of the Summary billing document.
     *
     * Format: YYYYMMDD
     */
    public function getSummaryDocumentPaymentDueDate(): ?string
    {
        if (count($this->summaryDocumentPaymentDueDate) == 0) {
            return null;
        }
        return $this->summaryDocumentPaymentDueDate['value'];
    }

    /**
     * Sets Summary Document Payment Due Date.
     * Payment due date of the Summary billing document.
     *
     * Format: YYYYMMDD
     *
     * @maps SummaryDocumentPaymentDueDate
     */
    public function setSummaryDocumentPaymentDueDate(?string $summaryDocumentPaymentDueDate): void
    {
        $this->summaryDocumentPaymentDueDate['value'] = $summaryDocumentPaymentDueDate;
    }

    /**
     * Unsets Summary Document Payment Due Date.
     * Payment due date of the Summary billing document.
     *
     * Format: YYYYMMDD
     */
    public function unsetSummaryDocumentPaymentDueDate(): void
    {
        $this->summaryDocumentPaymentDueDate = [];
    }

    /**
     * Returns Summary Document Total Value.
     * Total value in the Summary billing document.
     */
    public function getSummaryDocumentTotalValue(): ?float
    {
        if (count($this->summaryDocumentTotalValue) == 0) {
            return null;
        }
        return $this->summaryDocumentTotalValue['value'];
    }

    /**
     * Sets Summary Document Total Value.
     * Total value in the Summary billing document.
     *
     * @maps SummaryDocumentTotalValue
     */
    public function setSummaryDocumentTotalValue(?float $summaryDocumentTotalValue): void
    {
        $this->summaryDocumentTotalValue['value'] = $summaryDocumentTotalValue;
    }

    /**
     * Unsets Summary Document Total Value.
     * Total value in the Summary billing document.
     */
    public function unsetSummaryDocumentTotalValue(): void
    {
        $this->summaryDocumentTotalValue = [];
    }

    /**
     * Returns Summary Document Total VAT.
     * Total VAT in the Summary billing document.
     */
    public function getSummaryDocumentTotalVAT(): ?float
    {
        if (count($this->summaryDocumentTotalVAT) == 0) {
            return null;
        }
        return $this->summaryDocumentTotalVAT['value'];
    }

    /**
     * Sets Summary Document Total VAT.
     * Total VAT in the Summary billing document.
     *
     * @maps SummaryDocumentTotalVAT
     */
    public function setSummaryDocumentTotalVAT(?float $summaryDocumentTotalVAT): void
    {
        $this->summaryDocumentTotalVAT['value'] = $summaryDocumentTotalVAT;
    }

    /**
     * Unsets Summary Document Total VAT.
     * Total VAT in the Summary billing document.
     */
    public function unsetSummaryDocumentTotalVAT(): void
    {
        $this->summaryDocumentTotalVAT = [];
    }

    /**
     * Returns Summary Document DD Amount.
     * Total DD amount in the Summary billing document.
     */
    public function getSummaryDocumentDDAmount(): ?float
    {
        if (count($this->summaryDocumentDDAmount) == 0) {
            return null;
        }
        return $this->summaryDocumentDDAmount['value'];
    }

    /**
     * Sets Summary Document DD Amount.
     * Total DD amount in the Summary billing document.
     *
     * @maps SummaryDocumentDDAmount
     */
    public function setSummaryDocumentDDAmount(?float $summaryDocumentDDAmount): void
    {
        $this->summaryDocumentDDAmount['value'] = $summaryDocumentDDAmount;
    }

    /**
     * Unsets Summary Document DD Amount.
     * Total DD amount in the Summary billing document.
     */
    public function unsetSummaryDocumentDDAmount(): void
    {
        $this->summaryDocumentDDAmount = [];
    }

    /**
     * Returns Payment Date.
     * Date of payment.
     * Format: YYYYMMDD
     */
    public function getPaymentDate(): ?string
    {
        if (count($this->paymentDate) == 0) {
            return null;
        }
        return $this->paymentDate['value'];
    }

    /**
     * Sets Payment Date.
     * Date of payment.
     * Format: YYYYMMDD
     *
     * @maps PaymentDate
     */
    public function setPaymentDate(?string $paymentDate): void
    {
        $this->paymentDate['value'] = $paymentDate;
    }

    /**
     * Unsets Payment Date.
     * Date of payment.
     * Format: YYYYMMDD
     */
    public function unsetPaymentDate(): void
    {
        $this->paymentDate = [];
    }

    /**
     * Returns Payment Reference.
     * Reference text of the payment.
     */
    public function getPaymentReference(): ?string
    {
        if (count($this->paymentReference) == 0) {
            return null;
        }
        return $this->paymentReference['value'];
    }

    /**
     * Sets Payment Reference.
     * Reference text of the payment.
     *
     * @maps PaymentReference
     */
    public function setPaymentReference(?string $paymentReference): void
    {
        $this->paymentReference['value'] = $paymentReference;
    }

    /**
     * Unsets Payment Reference.
     * Reference text of the payment.
     */
    public function unsetPaymentReference(): void
    {
        $this->paymentReference = [];
    }

    /**
     * Returns Payment Currency Code.
     * ISO code of payment currency.
     *
     * Example: EUR
     */
    public function getPaymentCurrencyCode(): ?string
    {
        if (count($this->paymentCurrencyCode) == 0) {
            return null;
        }
        return $this->paymentCurrencyCode['value'];
    }

    /**
     * Sets Payment Currency Code.
     * ISO code of payment currency.
     *
     * Example: EUR
     *
     * @maps PaymentCurrencyCode
     */
    public function setPaymentCurrencyCode(?string $paymentCurrencyCode): void
    {
        $this->paymentCurrencyCode['value'] = $paymentCurrencyCode;
    }

    /**
     * Unsets Payment Currency Code.
     * ISO code of payment currency.
     *
     * Example: EUR
     */
    public function unsetPaymentCurrencyCode(): void
    {
        $this->paymentCurrencyCode = [];
    }

    /**
     * Returns Payment Currency Symbol.
     * Symbol of payment currency.
     *
     * Example: €
     */
    public function getPaymentCurrencySymbol(): ?string
    {
        if (count($this->paymentCurrencySymbol) == 0) {
            return null;
        }
        return $this->paymentCurrencySymbol['value'];
    }

    /**
     * Sets Payment Currency Symbol.
     * Symbol of payment currency.
     *
     * Example: €
     *
     * @maps PaymentCurrencySymbol
     */
    public function setPaymentCurrencySymbol(?string $paymentCurrencySymbol): void
    {
        $this->paymentCurrencySymbol['value'] = $paymentCurrencySymbol;
    }

    /**
     * Unsets Payment Currency Symbol.
     * Symbol of payment currency.
     *
     * Example: €
     */
    public function unsetPaymentCurrencySymbol(): void
    {
        $this->paymentCurrencySymbol = [];
    }

    /**
     * Returns Amount Paid.
     * Amount paid.
     */
    public function getAmountPaid(): ?float
    {
        if (count($this->amountPaid) == 0) {
            return null;
        }
        return $this->amountPaid['value'];
    }

    /**
     * Sets Amount Paid.
     * Amount paid.
     *
     * @maps AmountPaid
     */
    public function setAmountPaid(?float $amountPaid): void
    {
        $this->amountPaid['value'] = $amountPaid;
    }

    /**
     * Unsets Amount Paid.
     * Amount paid.
     */
    public function unsetAmountPaid(): void
    {
        $this->amountPaid = [];
    }

    /**
     * Returns Balance.
     * Balance amount to be settled for the Summary document.
     */
    public function getBalance(): ?float
    {
        if (count($this->balance) == 0) {
            return null;
        }
        return $this->balance['value'];
    }

    /**
     * Sets Balance.
     * Balance amount to be settled for the Summary document.
     *
     * @maps Balance
     */
    public function setBalance(?float $balance): void
    {
        $this->balance['value'] = $balance;
    }

    /**
     * Unsets Balance.
     * Balance amount to be settled for the Summary document.
     */
    public function unsetBalance(): void
    {
        $this->balance = [];
    }

    /**
     * Returns True Payment.
     * True Payment.
     */
    public function getTruePayment(): ?string
    {
        if (count($this->truePayment) == 0) {
            return null;
        }
        return $this->truePayment['value'];
    }

    /**
     * Sets True Payment.
     * True Payment.
     *
     * @maps TruePayment
     */
    public function setTruePayment(?string $truePayment): void
    {
        $this->truePayment['value'] = $truePayment;
    }

    /**
     * Unsets True Payment.
     * True Payment.
     */
    public function unsetTruePayment(): void
    {
        $this->truePayment = [];
    }

    /**
     * Returns Prepaid Balance.
     * Balance in the pre-paid amount.
     */
    public function getPrepaidBalance(): ?float
    {
        if (count($this->prepaidBalance) == 0) {
            return null;
        }
        return $this->prepaidBalance['value'];
    }

    /**
     * Sets Prepaid Balance.
     * Balance in the pre-paid amount.
     *
     * @maps PrepaidBalance
     */
    public function setPrepaidBalance(?float $prepaidBalance): void
    {
        $this->prepaidBalance['value'] = $prepaidBalance;
    }

    /**
     * Unsets Prepaid Balance.
     * Balance in the pre-paid amount.
     */
    public function unsetPrepaidBalance(): void
    {
        $this->prepaidBalance = [];
    }

    /**
     * Returns Local Currency Code.
     * Currency ISO code of the local country. It is derived based on CountryCode from microservice
     * configuration. This field is expected to have different value than the previously mentioned field
     * CurrencyCode, only in the case of serviced OUs.
     * Example: EUR
     */
    public function getLocalCurrencyCode(): ?string
    {
        if (count($this->localCurrencyCode) == 0) {
            return null;
        }
        return $this->localCurrencyCode['value'];
    }

    /**
     * Sets Local Currency Code.
     * Currency ISO code of the local country. It is derived based on CountryCode from microservice
     * configuration. This field is expected to have different value than the previously mentioned field
     * CurrencyCode, only in the case of serviced OUs.
     * Example: EUR
     *
     * @maps LocalCurrencyCode
     */
    public function setLocalCurrencyCode(?string $localCurrencyCode): void
    {
        $this->localCurrencyCode['value'] = $localCurrencyCode;
    }

    /**
     * Unsets Local Currency Code.
     * Currency ISO code of the local country. It is derived based on CountryCode from microservice
     * configuration. This field is expected to have different value than the previously mentioned field
     * CurrencyCode, only in the case of serviced OUs.
     * Example: EUR
     */
    public function unsetLocalCurrencyCode(): void
    {
        $this->localCurrencyCode = [];
    }

    /**
     * Returns Local Currency Symbol.
     * Currency Symbol of the local country. It is derived based on CountryCode from microservice
     * configuration. This field is expected to have different value than the previously mentioned field
     * CurrencySymbol, only in the case of serviced OUs.
     * Example: €
     */
    public function getLocalCurrencySymbol(): ?string
    {
        if (count($this->localCurrencySymbol) == 0) {
            return null;
        }
        return $this->localCurrencySymbol['value'];
    }

    /**
     * Sets Local Currency Symbol.
     * Currency Symbol of the local country. It is derived based on CountryCode from microservice
     * configuration. This field is expected to have different value than the previously mentioned field
     * CurrencySymbol, only in the case of serviced OUs.
     * Example: €
     *
     * @maps LocalCurrencySymbol
     */
    public function setLocalCurrencySymbol(?string $localCurrencySymbol): void
    {
        $this->localCurrencySymbol['value'] = $localCurrencySymbol;
    }

    /**
     * Unsets Local Currency Symbol.
     * Currency Symbol of the local country. It is derived based on CountryCode from microservice
     * configuration. This field is expected to have different value than the previously mentioned field
     * CurrencySymbol, only in the case of serviced OUs.
     * Example: €
     */
    public function unsetLocalCurrencySymbol(): void
    {
        $this->localCurrencySymbol = [];
    }

    /**
     * Returns Local Currency Exchange Rate.
     * Exchange rate from Payment currency to local currency.
     */
    public function getLocalCurrencyExchangeRate(): ?string
    {
        if (count($this->localCurrencyExchangeRate) == 0) {
            return null;
        }
        return $this->localCurrencyExchangeRate['value'];
    }

    /**
     * Sets Local Currency Exchange Rate.
     * Exchange rate from Payment currency to local currency.
     *
     * @maps LocalCurrencyExchangeRate
     */
    public function setLocalCurrencyExchangeRate(?string $localCurrencyExchangeRate): void
    {
        $this->localCurrencyExchangeRate['value'] = $localCurrencyExchangeRate;
    }

    /**
     * Unsets Local Currency Exchange Rate.
     * Exchange rate from Payment currency to local currency.
     */
    public function unsetLocalCurrencyExchangeRate(): void
    {
        $this->localCurrencyExchangeRate = [];
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
        if (!empty($this->accountId)) {
            $json['AccountId']                     = $this->accountId['value'];
        }
        if (!empty($this->accountNumber)) {
            $json['AccountNumber']                 = $this->accountNumber['value'];
        }
        if (!empty($this->accountShortName)) {
            $json['AccountShortName']              = $this->accountShortName['value'];
        }
        if (!empty($this->summaryDocumentId)) {
            $json['SummaryDocumentId']             = $this->summaryDocumentId['value'];
        }
        if (!empty($this->summaryDocumentNumber)) {
            $json['SummaryDocumentNumber']         = $this->summaryDocumentNumber['value'];
        }
        if (!empty($this->summaryDocumentDate)) {
            $json['SummaryDocumentDate']           = $this->summaryDocumentDate['value'];
        }
        if (!empty($this->summaryDocumentPaymentDueDate)) {
            $json['SummaryDocumentPaymentDueDate'] = $this->summaryDocumentPaymentDueDate['value'];
        }
        if (!empty($this->summaryDocumentTotalValue)) {
            $json['SummaryDocumentTotalValue']     = $this->summaryDocumentTotalValue['value'];
        }
        if (!empty($this->summaryDocumentTotalVAT)) {
            $json['SummaryDocumentTotalVAT']       = $this->summaryDocumentTotalVAT['value'];
        }
        if (!empty($this->summaryDocumentDDAmount)) {
            $json['SummaryDocumentDDAmount']       = $this->summaryDocumentDDAmount['value'];
        }
        if (!empty($this->paymentDate)) {
            $json['PaymentDate']                   = $this->paymentDate['value'];
        }
        if (!empty($this->paymentReference)) {
            $json['PaymentReference']              = $this->paymentReference['value'];
        }
        if (!empty($this->paymentCurrencyCode)) {
            $json['PaymentCurrencyCode']           = $this->paymentCurrencyCode['value'];
        }
        if (!empty($this->paymentCurrencySymbol)) {
            $json['PaymentCurrencySymbol']         = $this->paymentCurrencySymbol['value'];
        }
        if (!empty($this->amountPaid)) {
            $json['AmountPaid']                    = $this->amountPaid['value'];
        }
        if (!empty($this->balance)) {
            $json['Balance']                       = $this->balance['value'];
        }
        if (!empty($this->truePayment)) {
            $json['TruePayment']                   = $this->truePayment['value'];
        }
        if (!empty($this->prepaidBalance)) {
            $json['PrepaidBalance']                = $this->prepaidBalance['value'];
        }
        if (!empty($this->localCurrencyCode)) {
            $json['LocalCurrencyCode']             = $this->localCurrencyCode['value'];
        }
        if (!empty($this->localCurrencySymbol)) {
            $json['LocalCurrencySymbol']           = $this->localCurrencySymbol['value'];
        }
        if (!empty($this->localCurrencyExchangeRate)) {
            $json['LocalCurrencyExchangeRate']     = $this->localCurrencyExchangeRate['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
