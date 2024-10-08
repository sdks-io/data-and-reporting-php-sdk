<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class MultiPricedTransactionRequestAccountsItems implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $payerId;

    /**
     * @var string|null
     */
    private $payerNumber;

    /**
     * @var int|null
     */
    private $accountId;

    /**
     * @var string|null
     */
    private $accountNumber;

    /**
     * Returns Payer Id.
     * Payer Id of the selected payer.
     * Optional if PayerNumber is passed else Mandatory
     * Example: 123456
     */
    public function getPayerId(): ?int
    {
        return $this->payerId;
    }

    /**
     * Sets Payer Id.
     * Payer Id of the selected payer.
     * Optional if PayerNumber is passed else Mandatory
     * Example: 123456
     *
     * @maps PayerId
     */
    public function setPayerId(?int $payerId): void
    {
        $this->payerId = $payerId;
    }

    /**
     * Returns Payer Number.
     * Payer Number (Ex: GB000000123) of the selected payer.
     * Optional if PayerId is passed else Mandatory
     * Example: GB000000123
     */
    public function getPayerNumber(): ?string
    {
        return $this->payerNumber;
    }

    /**
     * Sets Payer Number.
     * Payer Number (Ex: GB000000123) of the selected payer.
     * Optional if PayerId is passed else Mandatory
     * Example: GB000000123
     *
     * @maps PayerNumber
     */
    public function setPayerNumber(?string $payerNumber): void
    {
        $this->payerNumber = $payerNumber;
    }

    /**
     * Returns Account Id.
     * Account Id  of the selected account.
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * Sets Account Id.
     * Account Id  of the selected account.
     *
     * @maps AccountId
     */
    public function setAccountId(?int $accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * Returns Account Number.
     * Account Number (ex: GB000000123) of the selected account.
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Sets Account Number.
     * Account Number (ex: GB000000123) of the selected account.
     *
     * @maps AccountNumber
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
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
        if (isset($this->payerId)) {
            $json['PayerId']       = $this->payerId;
        }
        if (isset($this->payerNumber)) {
            $json['PayerNumber']   = $this->payerNumber;
        }
        if (isset($this->accountId)) {
            $json['AccountId']     = $this->accountId;
        }
        if (isset($this->accountNumber)) {
            $json['AccountNumber'] = $this->accountNumber;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
