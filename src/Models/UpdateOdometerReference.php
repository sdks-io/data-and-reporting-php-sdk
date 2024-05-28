<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class UpdateOdometerReference implements \JsonSerializable
{
    /**
     * @var array
     */
    private $salesItemId = [];

    /**
     * @var array
     */
    private $updateOdometerReferenceId = [];

    /**
     * Returns Sales Item Id.
     * SalesItemId of input parameter
     */
    public function getSalesItemId(): ?int
    {
        if (count($this->salesItemId) == 0) {
            return null;
        }
        return $this->salesItemId['value'];
    }

    /**
     * Sets Sales Item Id.
     * SalesItemId of input parameter
     *
     * @maps SalesItemId
     */
    public function setSalesItemId(?int $salesItemId): void
    {
        $this->salesItemId['value'] = $salesItemId;
    }

    /**
     * Unsets Sales Item Id.
     * SalesItemId of input parameter
     */
    public function unsetSalesItemId(): void
    {
        $this->salesItemId = [];
    }

    /**
     * Returns Update Odometer Reference Id.
     * Reference number for each individual update odometer reference.
     */
    public function getUpdateOdometerReferenceId(): ?int
    {
        if (count($this->updateOdometerReferenceId) == 0) {
            return null;
        }
        return $this->updateOdometerReferenceId['value'];
    }

    /**
     * Sets Update Odometer Reference Id.
     * Reference number for each individual update odometer reference.
     *
     * @maps UpdateOdometerReferenceId
     */
    public function setUpdateOdometerReferenceId(?int $updateOdometerReferenceId): void
    {
        $this->updateOdometerReferenceId['value'] = $updateOdometerReferenceId;
    }

    /**
     * Unsets Update Odometer Reference Id.
     * Reference number for each individual update odometer reference.
     */
    public function unsetUpdateOdometerReferenceId(): void
    {
        $this->updateOdometerReferenceId = [];
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
        if (!empty($this->salesItemId)) {
            $json['SalesItemId']               = $this->salesItemId['value'];
        }
        if (!empty($this->updateOdometerReferenceId)) {
            $json['UpdateOdometerReferenceId'] = $this->updateOdometerReferenceId['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
