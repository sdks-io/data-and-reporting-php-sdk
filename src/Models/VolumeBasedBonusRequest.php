<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class VolumeBasedBonusRequest implements \JsonSerializable
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
     * @var string|null
     */
    private $payerNumber;

    /**
     * @var bool|null
     */
    private $includeHistory;

    /**
     * @var bool|null
     */
    private $includeCurrentPeriodVolume;

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
    public function getColCoCode(): ?int
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
     * @maps ColCoCode
     */
    public function setColCoCode(?int $colCoCode): void
    {
        $this->colCoCode = $colCoCode;
    }

    /**
     * Returns Payer Id.
     * Payer Id of the selected payer.
     *
     * Optional if PayerNumber is passed else Mandatory
     */
    public function getPayerId(): ?int
    {
        return $this->payerId;
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
        $this->payerId = $payerId;
    }

    /**
     * Returns Payer Number.
     * Payer Number of the selected payer.
     *
     * Optional if PayerId is passed else Mandatory
     */
    public function getPayerNumber(): ?string
    {
        return $this->payerNumber;
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
        $this->payerNumber = $payerNumber;
    }

    /**
     * Returns Include History.
     * The API will return the details of the previously calculated/paid bonus and fuel consumption
     * (Volume) in the response when this flag is ‘True’.
     */
    public function getIncludeHistory(): ?bool
    {
        return $this->includeHistory;
    }

    /**
     * Sets Include History.
     * The API will return the details of the previously calculated/paid bonus and fuel consumption
     * (Volume) in the response when this flag is ‘True’.
     *
     * @maps IncludeHistory
     */
    public function setIncludeHistory(?bool $includeHistory): void
    {
        $this->includeHistory = $includeHistory;
    }

    /**
     * Returns Include Current Period Volume.
     * The API will return the details of the monthly breakup of current period fuel consumption (Volume)
     * in the response when this flag is ‘True’.
     */
    public function getIncludeCurrentPeriodVolume(): ?bool
    {
        return $this->includeCurrentPeriodVolume;
    }

    /**
     * Sets Include Current Period Volume.
     * The API will return the details of the monthly breakup of current period fuel consumption (Volume)
     * in the response when this flag is ‘True’.
     *
     * @maps IncludeCurrentPeriodVolume
     */
    public function setIncludeCurrentPeriodVolume(?bool $includeCurrentPeriodVolume): void
    {
        $this->includeCurrentPeriodVolume = $includeCurrentPeriodVolume;
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
            $json['ColCoId']                    = $this->colCoId;
        }
        if (isset($this->colCoCode)) {
            $json['ColCoCode']                  = $this->colCoCode;
        }
        if (isset($this->payerId)) {
            $json['PayerId']                    = $this->payerId;
        }
        if (isset($this->payerNumber)) {
            $json['PayerNumber']                = $this->payerNumber;
        }
        if (isset($this->includeHistory)) {
            $json['IncludeHistory']             = $this->includeHistory;
        }
        if (isset($this->includeCurrentPeriodVolume)) {
            $json['IncludeCurrentPeriodVolume'] = $this->includeCurrentPeriodVolume;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
