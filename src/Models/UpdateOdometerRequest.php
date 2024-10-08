<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class UpdateOdometerRequest implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $colCoId;

    /**
     * @var int|null
     */
    private $colCoCode;

    /**
     * @var int|null
     */
    private $payerId;

    /**
     * @var int|null
     */
    private $accountId;

    /**
     * @var string|null
     */
    private $accountNumber;

    /**
     * @var UpdateOdometer[]|null
     */
    private $updateOdometers;

    /**
     * @var bool|null
     */
    private $notifyCaller;

    /**
     * @var string|null
     */
    private $caller;

    /**
     * Returns Col Co Id.
     * Collecting Company Id  of the selected payer.
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
     * Collecting Company Id  of the selected payer.
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
     * Collecting Company Code (Shell Code) of the selected payer.
     *
     * Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional
     * for other countries if ColCoID is provided.
     */
    public function getColCoCode(): ?int
    {
        return $this->colCoCode;
    }

    /**
     * Sets Col Co Code.
     * Collecting Company Code (Shell Code) of the selected payer.
     *
     * Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional
     * for other countries if ColCoID is provided.
     *
     * @maps ColCoCode
     */
    public function setColCoCode(?int $colCoCode): void
    {
        $this->colCoCode = $colCoCode;
    }

    /**
     * Returns Payer Id.
     * Payer Id (i.e. Customer Id of the Payment Customer in Cards Platform) of the selected payer.
     * Optional if PayerNumber is passed else Mandatory
     */
    public function getPayerId(): ?int
    {
        return $this->payerId;
    }

    /**
     * Sets Payer Id.
     * Payer Id (i.e. Customer Id of the Payment Customer in Cards Platform) of the selected payer.
     * Optional if PayerNumber is passed else Mandatory
     *
     * @maps PayerId
     */
    public function setPayerId(?int $payerId): void
    {
        $this->payerId = $payerId;
    }

    /**
     * Returns Account Id.
     * Account Id (i.e. Customer Id of the Sub Account in GFN) of the selected account.
     * Optional if AccountNumber is passed else Mandatory
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * Sets Account Id.
     * Account Id (i.e. Customer Id of the Sub Account in GFN) of the selected account.
     * Optional if AccountNumber is passed else Mandatory
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
     * Optional if AccountId is passed else Mandatory
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Sets Account Number.
     * Account Number (ex: GB000000123) of the selected account.
     * Optional if AccountId is passed else Mandatory
     *
     * @maps AccountNumber
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * Returns Update Odometers.
     *
     * @return UpdateOdometer[]|null
     */
    public function getUpdateOdometers(): ?array
    {
        return $this->updateOdometers;
    }

    /**
     * Sets Update Odometers.
     *
     * @maps UpdateOdometers
     *
     * @param UpdateOdometer[]|null $updateOdometers
     */
    public function setUpdateOdometers(?array $updateOdometers): void
    {
        $this->updateOdometers = $updateOdometers;
    }

    /**
     * Returns Notify Caller.
     * True/False.
     * Optional.
     * Default: False
     * If true, the caller would be notified back with the status as success or failure after the update
     * odometer is processed.
     */
    public function getNotifyCaller(): ?bool
    {
        return $this->notifyCaller;
    }

    /**
     * Sets Notify Caller.
     * True/False.
     * Optional.
     * Default: False
     * If true, the caller would be notified back with the status as success or failure after the update
     * odometer is processed.
     *
     * @maps NotifyCaller
     */
    public function setNotifyCaller(?bool $notifyCaller): void
    {
        $this->notifyCaller = $notifyCaller;
    }

    /**
     * Returns Caller.
     * The caller to be notified with the status of the update odometer.
     * Mandatory, if NotifyCaller is true.
     */
    public function getCaller(): ?string
    {
        return $this->caller;
    }

    /**
     * Sets Caller.
     * The caller to be notified with the status of the update odometer.
     * Mandatory, if NotifyCaller is true.
     *
     * @maps Caller
     */
    public function setCaller(?string $caller): void
    {
        $this->caller = $caller;
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
            $json['ColCoId']         = $this->colCoId;
        }
        if (isset($this->colCoCode)) {
            $json['ColCoCode']       = $this->colCoCode;
        }
        if (isset($this->payerId)) {
            $json['PayerId']         = $this->payerId;
        }
        if (isset($this->accountId)) {
            $json['AccountId']       = $this->accountId;
        }
        if (isset($this->accountNumber)) {
            $json['AccountNumber']   = $this->accountNumber;
        }
        if (isset($this->updateOdometers)) {
            $json['UpdateOdometers'] = $this->updateOdometers;
        }
        if (isset($this->notifyCaller)) {
            $json['NotifyCaller']    = $this->notifyCaller;
        }
        if (isset($this->caller)) {
            $json['Caller']          = $this->caller;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
