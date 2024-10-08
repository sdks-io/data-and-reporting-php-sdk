<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class AssociatedAccount implements \JsonSerializable
{
    /**
     * @var array
     */
    private $associatedAccountId = [];

    /**
     * @var array
     */
    private $associatedAccountNumber = [];

    /**
     * @var array
     */
    private $associatedAccountShortName = [];

    /**
     * @var array
     */
    private $associatedAccountFullName = [];

    /**
     * Returns Associated Account Id.
     * Account identifier  of the Associated Account associated with the Payer.
     */
    public function getAssociatedAccountId(): ?int
    {
        if (count($this->associatedAccountId) == 0) {
            return null;
        }
        return $this->associatedAccountId['value'];
    }

    /**
     * Sets Associated Account Id.
     * Account identifier  of the Associated Account associated with the Payer.
     *
     * @maps AssociatedAccountId
     */
    public function setAssociatedAccountId(?int $associatedAccountId): void
    {
        $this->associatedAccountId['value'] = $associatedAccountId;
    }

    /**
     * Unsets Associated Account Id.
     * Account identifier  of the Associated Account associated with the Payer.
     */
    public function unsetAssociatedAccountId(): void
    {
        $this->associatedAccountId = [];
    }

    /**
     * Returns Associated Account Number.
     * Account number of the Associated Account associated with the Payer.
     */
    public function getAssociatedAccountNumber(): ?string
    {
        if (count($this->associatedAccountNumber) == 0) {
            return null;
        }
        return $this->associatedAccountNumber['value'];
    }

    /**
     * Sets Associated Account Number.
     * Account number of the Associated Account associated with the Payer.
     *
     * @maps AssociatedAccountNumber
     */
    public function setAssociatedAccountNumber(?string $associatedAccountNumber): void
    {
        $this->associatedAccountNumber['value'] = $associatedAccountNumber;
    }

    /**
     * Unsets Associated Account Number.
     * Account number of the Associated Account associated with the Payer.
     */
    public function unsetAssociatedAccountNumber(): void
    {
        $this->associatedAccountNumber = [];
    }

    /**
     * Returns Associated Account Short Name.
     * Account associated with the Payer.
     */
    public function getAssociatedAccountShortName(): ?string
    {
        if (count($this->associatedAccountShortName) == 0) {
            return null;
        }
        return $this->associatedAccountShortName['value'];
    }

    /**
     * Sets Associated Account Short Name.
     * Account associated with the Payer.
     *
     * @maps AssociatedAccountShortName
     */
    public function setAssociatedAccountShortName(?string $associatedAccountShortName): void
    {
        $this->associatedAccountShortName['value'] = $associatedAccountShortName;
    }

    /**
     * Unsets Associated Account Short Name.
     * Account associated with the Payer.
     */
    public function unsetAssociatedAccountShortName(): void
    {
        $this->associatedAccountShortName = [];
    }

    /**
     * Returns Associated Account Full Name.
     * Full name of the Associated Account associated with the Payer.
     */
    public function getAssociatedAccountFullName(): ?string
    {
        if (count($this->associatedAccountFullName) == 0) {
            return null;
        }
        return $this->associatedAccountFullName['value'];
    }

    /**
     * Sets Associated Account Full Name.
     * Full name of the Associated Account associated with the Payer.
     *
     * @maps AssociatedAccountFullName
     */
    public function setAssociatedAccountFullName(?string $associatedAccountFullName): void
    {
        $this->associatedAccountFullName['value'] = $associatedAccountFullName;
    }

    /**
     * Unsets Associated Account Full Name.
     * Full name of the Associated Account associated with the Payer.
     */
    public function unsetAssociatedAccountFullName(): void
    {
        $this->associatedAccountFullName = [];
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
        if (!empty($this->associatedAccountId)) {
            $json['AssociatedAccountId']        = $this->associatedAccountId['value'];
        }
        if (!empty($this->associatedAccountNumber)) {
            $json['AssociatedAccountNumber']    = $this->associatedAccountNumber['value'];
        }
        if (!empty($this->associatedAccountShortName)) {
            $json['AssociatedAccountShortName'] = $this->associatedAccountShortName['value'];
        }
        if (!empty($this->associatedAccountFullName)) {
            $json['AssociatedAccountFullName']  = $this->associatedAccountFullName['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
