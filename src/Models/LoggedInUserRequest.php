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
 * This entity models the data that is sent in the http request body for Logged In User operation. This
 * class inherits RequestBase class.
 */
class LoggedInUserRequest implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $includePayerGroup = false;

    /**
     * @var bool|null
     */
    private $includeEIDDetails = false;

    /**
     * @var array
     */
    private $requestedAPIName = [];

    /**
     * @var array
     */
    private $payerId = [];

    /**
     * @var array
     */
    private $payerNumber = [];

    /**
     * Returns Include Payer Group.
     * True/False. The output will include the payer group information only when true is passed.
     */
    public function getIncludePayerGroup(): ?bool
    {
        return $this->includePayerGroup;
    }

    /**
     * Sets Include Payer Group.
     * True/False. The output will include the payer group information only when true is passed.
     *
     * @maps IncludePayerGroup
     */
    public function setIncludePayerGroup(?bool $includePayerGroup): void
    {
        $this->includePayerGroup = $includePayerGroup;
    }

    /**
     * Returns Include EID Details.
     * True/False. The output will include the EID (Electronic Invoice data) information only when true is
     * passed..
     */
    public function getIncludeEIDDetails(): ?bool
    {
        return $this->includeEIDDetails;
    }

    /**
     * Sets Include EID Details.
     * True/False. The output will include the EID (Electronic Invoice data) information only when true is
     * passed..
     *
     * @maps IncludeEIDDetails
     */
    public function setIncludeEIDDetails(?bool $includeEIDDetails): void
    {
        $this->includeEIDDetails = $includeEIDDetails;
    }

    /**
     * Returns Requested API Name.
     * Name of the API on which user access needs to be validated
     * Optional.
     */
    public function getRequestedAPIName(): ?string
    {
        if (count($this->requestedAPIName) == 0) {
            return null;
        }
        return $this->requestedAPIName['value'];
    }

    /**
     * Sets Requested API Name.
     * Name of the API on which user access needs to be validated
     * Optional.
     *
     * @maps RequestedAPIName
     */
    public function setRequestedAPIName(?string $requestedAPIName): void
    {
        $this->requestedAPIName['value'] = $requestedAPIName;
    }

    /**
     * Unsets Requested API Name.
     * Name of the API on which user access needs to be validated
     * Optional.
     */
    public function unsetRequestedAPIName(): void
    {
        $this->requestedAPIName = [];
    }

    /**
     * Returns Payer Id.
     * Payer id of the customer.</br>
     * Optional.</br>
     * This input is a search criterion.</br>
     * Note: If PayerId or PayerNumber is provided in the input, the given payer will be available in the
     * output if the user has access to the given payer.
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
     * Payer id of the customer.</br>
     * Optional.</br>
     * This input is a search criterion.</br>
     * Note: If PayerId or PayerNumber is provided in the input, the given payer will be available in the
     * output if the user has access to the given payer.
     *
     * @maps PayerId
     */
    public function setPayerId(?int $payerId): void
    {
        $this->payerId['value'] = $payerId;
    }

    /**
     * Unsets Payer Id.
     * Payer id of the customer.</br>
     * Optional.</br>
     * This input is a search criterion.</br>
     * Note: If PayerId or PayerNumber is provided in the input, the given payer will be available in the
     * output if the user has access to the given payer.
     */
    public function unsetPayerId(): void
    {
        $this->payerId = [];
    }

    /**
     * Returns Payer Number.
     * PayerNumber of the customer.</br>
     * Optional</br>
     * This input is a search criterion.</br>
     * Note: If Payerid or PayerNumber is provided in the input, the given payer will be available in the
     * output if the user has access to the given payer.
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
     * PayerNumber of the customer.</br>
     * Optional</br>
     * This input is a search criterion.</br>
     * Note: If Payerid or PayerNumber is provided in the input, the given payer will be available in the
     * output if the user has access to the given payer.
     *
     * @maps PayerNumber
     */
    public function setPayerNumber(?string $payerNumber): void
    {
        $this->payerNumber['value'] = $payerNumber;
    }

    /**
     * Unsets Payer Number.
     * PayerNumber of the customer.</br>
     * Optional</br>
     * This input is a search criterion.</br>
     * Note: If Payerid or PayerNumber is provided in the input, the given payer will be available in the
     * output if the user has access to the given payer.
     */
    public function unsetPayerNumber(): void
    {
        $this->payerNumber = [];
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
        if (isset($this->includePayerGroup)) {
            $json['IncludePayerGroup'] = $this->includePayerGroup;
        }
        if (isset($this->includeEIDDetails)) {
            $json['IncludeEIDDetails'] = $this->includeEIDDetails;
        }
        if (!empty($this->requestedAPIName)) {
            $json['RequestedAPIName']  = $this->requestedAPIName['value'];
        }
        if (!empty($this->payerId)) {
            $json['PayerId']           = $this->payerId['value'];
        }
        if (!empty($this->payerNumber)) {
            $json['PayerNumber']       = $this->payerNumber['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
