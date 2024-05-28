<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class InvoiceDatesRequestFilters implements \JsonSerializable
{
    /**
     * @var array
     */
    private $colCoCode = [];

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
    private $fromDate = [];

    /**
     * @var array
     */
    private $toDate = [];

    /**
     * @var Accounts[]|null
     */
    private $accounts;

    /**
     * Returns Col Co Code.
     * Collecting Company Code of the selected payer.
     *
     * Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional
     * for other countries if ColCoID is provided.
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
     * Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional
     * for other countries if ColCoID is provided.
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
     * Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional
     * for other countries if ColCoID is provided.
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
     * Returns Col Co Id.
     * Collecting Company Id of the selected payer.
     *
     * Optional if ColCoCode is passed else Mandatory.
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
     * Optional if ColCoCode is passed else Mandatory.
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
     * Optional if ColCoCode is passed else Mandatory.
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
     */
    public function unsetPayerNumber(): void
    {
        $this->payerNumber = [];
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
     */
    public function unsetToDate(): void
    {
        $this->toDate = [];
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
        if (!empty($this->colCoCode)) {
            $json['ColCoCode']   = $this->colCoCode['value'];
        }
        if (!empty($this->colCoId)) {
            $json['ColCoId']     = $this->colCoId['value'];
        }
        if (!empty($this->payerId)) {
            $json['PayerId']     = $this->payerId['value'];
        }
        if (!empty($this->payerNumber)) {
            $json['PayerNumber'] = $this->payerNumber['value'];
        }
        if (!empty($this->fromDate)) {
            $json['FromDate']    = $this->fromDate['value'];
        }
        if (!empty($this->toDate)) {
            $json['ToDate']      = $this->toDate['value'];
        }
        if (isset($this->accounts)) {
            $json['Accounts']    = $this->accounts;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
