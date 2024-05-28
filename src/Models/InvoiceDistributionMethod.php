<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class InvoiceDistributionMethod implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $isPrimary = true;

    /**
     * @var array
     */
    private $frequencyType = [];

    /**
     * @var array
     */
    private $distributionMethod = [];

    /**
     * @var array
     */
    private $outputType = [];

    /**
     * Returns Is Primary.
     * If True then this distribution method is the default distribution method.
     */
    public function getIsPrimary(): ?bool
    {
        return $this->isPrimary;
    }

    /**
     * Sets Is Primary.
     * If True then this distribution method is the default distribution method.
     *
     * @maps IsPrimary
     */
    public function setIsPrimary(?bool $isPrimary): void
    {
        $this->isPrimary = $isPrimary;
    }

    /**
     * Returns Frequency Type.
     * Frequency type unit Id & description
     *
     * E.g.:
     *
     * 1- Daily
     *
     * 2-Weekly
     *
     * 3-Monthly
     *
     * 4-Invoicing
     *
     * 6-Calendar quarter
     */
    public function getFrequencyType(): ?string
    {
        if (count($this->frequencyType) == 0) {
            return null;
        }
        return $this->frequencyType['value'];
    }

    /**
     * Sets Frequency Type.
     * Frequency type unit Id & description
     *
     * E.g.:
     *
     * 1- Daily
     *
     * 2-Weekly
     *
     * 3-Monthly
     *
     * 4-Invoicing
     *
     * 6-Calendar quarter
     *
     * @maps FrequencyType
     */
    public function setFrequencyType(?string $frequencyType): void
    {
        $this->frequencyType['value'] = $frequencyType;
    }

    /**
     * Unsets Frequency Type.
     * Frequency type unit Id & description
     *
     * E.g.:
     *
     * 1- Daily
     *
     * 2-Weekly
     *
     * 3-Monthly
     *
     * 4-Invoicing
     *
     * 6-Calendar quarter
     */
    public function unsetFrequencyType(): void
    {
        $this->frequencyType = [];
    }

    /**
     * Returns Distribution Method.
     * Invoice Distribution Method (Id-Description)
     *
     * E.g.:
     *
     * 1-e-mail
     *
     * 2-Fax
     *
     * 3-Courier to Customer
     *
     * 4-Courier to Client
     *
     * 5-Print
     *
     * 6-FTP
     *
     * 7-SMS
     */
    public function getDistributionMethod(): ?string
    {
        if (count($this->distributionMethod) == 0) {
            return null;
        }
        return $this->distributionMethod['value'];
    }

    /**
     * Sets Distribution Method.
     * Invoice Distribution Method (Id-Description)
     *
     * E.g.:
     *
     * 1-e-mail
     *
     * 2-Fax
     *
     * 3-Courier to Customer
     *
     * 4-Courier to Client
     *
     * 5-Print
     *
     * 6-FTP
     *
     * 7-SMS
     *
     * @maps DistributionMethod
     */
    public function setDistributionMethod(?string $distributionMethod): void
    {
        $this->distributionMethod['value'] = $distributionMethod;
    }

    /**
     * Unsets Distribution Method.
     * Invoice Distribution Method (Id-Description)
     *
     * E.g.:
     *
     * 1-e-mail
     *
     * 2-Fax
     *
     * 3-Courier to Customer
     *
     * 4-Courier to Client
     *
     * 5-Print
     *
     * 6-FTP
     *
     * 7-SMS
     */
    public function unsetDistributionMethod(): void
    {
        $this->distributionMethod = [];
    }

    /**
     * Returns Output Type.
     * Invoice output type (Id - Description)
     */
    public function getOutputType(): ?string
    {
        if (count($this->outputType) == 0) {
            return null;
        }
        return $this->outputType['value'];
    }

    /**
     * Sets Output Type.
     * Invoice output type (Id - Description)
     *
     * @maps OutputType
     */
    public function setOutputType(?string $outputType): void
    {
        $this->outputType['value'] = $outputType;
    }

    /**
     * Unsets Output Type.
     * Invoice output type (Id - Description)
     */
    public function unsetOutputType(): void
    {
        $this->outputType = [];
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
        if (isset($this->isPrimary)) {
            $json['IsPrimary']          = $this->isPrimary;
        }
        if (!empty($this->frequencyType)) {
            $json['FrequencyType']      = $this->frequencyType['value'];
        }
        if (!empty($this->distributionMethod)) {
            $json['DistributionMethod'] = $this->distributionMethod['value'];
        }
        if (!empty($this->outputType)) {
            $json['OutputType']         = $this->outputType['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
