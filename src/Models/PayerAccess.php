<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class PayerAccess implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $isDefault = false;

    /**
     * @var array
     */
    private $colcoId = [];

    /**
     * @var array
     */
    private $colcoCode = [];

    /**
     * @var array
     */
    private $colCoCountryCode = [];

    /**
     * @var array
     */
    private $payerGroupId = [];

    /**
     * @var array
     */
    private $payerGroup = [];

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
    private $payerName = [];

    /**
     * Returns Is Default.
     * Whether this payer is the default payer of the user.
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    /**
     * Sets Is Default.
     * Whether this payer is the default payer of the user.
     *
     * @maps IsDefault
     */
    public function setIsDefault(?bool $isDefault): void
    {
        $this->isDefault = $isDefault;
    }

    /**
     * Returns Colco Id.
     * Collecting company id.
     */
    public function getColcoId(): ?int
    {
        if (count($this->colcoId) == 0) {
            return null;
        }
        return $this->colcoId['value'];
    }

    /**
     * Sets Colco Id.
     * Collecting company id.
     *
     * @maps ColcoId
     */
    public function setColcoId(?int $colcoId): void
    {
        $this->colcoId['value'] = $colcoId;
    }

    /**
     * Unsets Colco Id.
     * Collecting company id.
     */
    public function unsetColcoId(): void
    {
        $this->colcoId = [];
    }

    /**
     * Returns Colco Code.
     * Collecting company code.
     * Example:
     * 86-Philippines
     * 5-UK
     */
    public function getColcoCode(): ?int
    {
        if (count($this->colcoCode) == 0) {
            return null;
        }
        return $this->colcoCode['value'];
    }

    /**
     * Sets Colco Code.
     * Collecting company code.
     * Example:
     * 86-Philippines
     * 5-UK
     *
     * @maps ColcoCode
     */
    public function setColcoCode(?int $colcoCode): void
    {
        $this->colcoCode['value'] = $colcoCode;
    }

    /**
     * Unsets Colco Code.
     * Collecting company code.
     * Example:
     * 86-Philippines
     * 5-UK
     */
    public function unsetColcoCode(): void
    {
        $this->colcoCode = [];
    }

    /**
     * Returns Col Co Country Code.
     * The 2-character ISO Code for the customer and card owning country
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
     * The 2-character ISO Code for the customer and card owning country
     *
     * @maps ColCoCountryCode
     */
    public function setColCoCountryCode(?string $colCoCountryCode): void
    {
        $this->colCoCountryCode['value'] = $colCoCountryCode;
    }

    /**
     * Unsets Col Co Country Code.
     * The 2-character ISO Code for the customer and card owning country
     */
    public function unsetColCoCountryCode(): void
    {
        $this->colCoCountryCode = [];
    }

    /**
     * Returns Payer Group Id.
     * Payer Group Id of the payer.
     */
    public function getPayerGroupId(): ?int
    {
        if (count($this->payerGroupId) == 0) {
            return null;
        }
        return $this->payerGroupId['value'];
    }

    /**
     * Sets Payer Group Id.
     * Payer Group Id of the payer.
     *
     * @maps PayerGroupId
     */
    public function setPayerGroupId(?int $payerGroupId): void
    {
        $this->payerGroupId['value'] = $payerGroupId;
    }

    /**
     * Unsets Payer Group Id.
     * Payer Group Id of the payer.
     */
    public function unsetPayerGroupId(): void
    {
        $this->payerGroupId = [];
    }

    /**
     * Returns Payer Group.
     * Payer group of the payer.
     *
     * The value of this parameter will always be null when the input parameter “IncludePayerGroup” is
     * false.
     */
    public function getPayerGroup(): ?string
    {
        if (count($this->payerGroup) == 0) {
            return null;
        }
        return $this->payerGroup['value'];
    }

    /**
     * Sets Payer Group.
     * Payer group of the payer.
     *
     * The value of this parameter will always be null when the input parameter “IncludePayerGroup” is
     * false.
     *
     * @maps PayerGroup
     */
    public function setPayerGroup(?string $payerGroup): void
    {
        $this->payerGroup['value'] = $payerGroup;
    }

    /**
     * Unsets Payer Group.
     * Payer group of the payer.
     *
     * The value of this parameter will always be null when the input parameter “IncludePayerGroup” is
     * false.
     */
    public function unsetPayerGroup(): void
    {
        $this->payerGroup = [];
    }

    /**
     * Returns Payer Id.
     * Payer Id to which the user has access
     * Example: 123456
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
     * Payer Id to which the user has access
     * Example: 123456
     *
     * @maps PayerId
     */
    public function setPayerId(?int $payerId): void
    {
        $this->payerId['value'] = $payerId;
    }

    /**
     * Unsets Payer Id.
     * Payer Id to which the user has access
     * Example: 123456
     */
    public function unsetPayerId(): void
    {
        $this->payerId = [];
    }

    /**
     * Returns Payer Number.
     * Payer Number to which the user has access
     * Example: GB000000123
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
     * Payer Number to which the user has access
     * Example: GB000000123
     *
     * @maps PayerNumber
     */
    public function setPayerNumber(?string $payerNumber): void
    {
        $this->payerNumber['value'] = $payerNumber;
    }

    /**
     * Unsets Payer Number.
     * Payer Number to which the user has access
     * Example: GB000000123
     */
    public function unsetPayerNumber(): void
    {
        $this->payerNumber = [];
    }

    /**
     * Returns Payer Name.
     * Name of the Payer to which the user has access
     */
    public function getPayerName(): ?string
    {
        if (count($this->payerName) == 0) {
            return null;
        }
        return $this->payerName['value'];
    }

    /**
     * Sets Payer Name.
     * Name of the Payer to which the user has access
     *
     * @maps PayerName
     */
    public function setPayerName(?string $payerName): void
    {
        $this->payerName['value'] = $payerName;
    }

    /**
     * Unsets Payer Name.
     * Name of the Payer to which the user has access
     */
    public function unsetPayerName(): void
    {
        $this->payerName = [];
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
        if (isset($this->isDefault)) {
            $json['IsDefault']        = $this->isDefault;
        }
        if (!empty($this->colcoId)) {
            $json['ColcoId']          = $this->colcoId['value'];
        }
        if (!empty($this->colcoCode)) {
            $json['ColcoCode']        = $this->colcoCode['value'];
        }
        if (!empty($this->colCoCountryCode)) {
            $json['ColCoCountryCode'] = $this->colCoCountryCode['value'];
        }
        if (!empty($this->payerGroupId)) {
            $json['PayerGroupId']     = $this->payerGroupId['value'];
        }
        if (!empty($this->payerGroup)) {
            $json['PayerGroup']       = $this->payerGroup['value'];
        }
        if (!empty($this->payerId)) {
            $json['PayerId']          = $this->payerId['value'];
        }
        if (!empty($this->payerNumber)) {
            $json['PayerNumber']      = $this->payerNumber['value'];
        }
        if (!empty($this->payerName)) {
            $json['PayerName']        = $this->payerName['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
