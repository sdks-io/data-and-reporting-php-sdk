<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class CurrentVolume implements \JsonSerializable
{
    /**
     * @var array
     */
    private $feeRuleId = [];

    /**
     * @var array
     */
    private $feeRuleDescription = [];

    /**
     * @var array
     */
    private $month = [];

    /**
     * @var array
     */
    private $year = [];

    /**
     * @var array
     */
    private $totalVolume = [];

    /**
     * Returns Fee Rule Id.
     * Bonus or association bonus configuration identifier that is associated to the payer
     */
    public function getFeeRuleId(): ?int
    {
        if (count($this->feeRuleId) == 0) {
            return null;
        }
        return $this->feeRuleId['value'];
    }

    /**
     * Sets Fee Rule Id.
     * Bonus or association bonus configuration identifier that is associated to the payer
     *
     * @maps FeeRuleId
     */
    public function setFeeRuleId(?int $feeRuleId): void
    {
        $this->feeRuleId['value'] = $feeRuleId;
    }

    /**
     * Unsets Fee Rule Id.
     * Bonus or association bonus configuration identifier that is associated to the payer
     */
    public function unsetFeeRuleId(): void
    {
        $this->feeRuleId = [];
    }

    /**
     * Returns Fee Rule Description.
     * Bonus or association bonus configuration description that is associated to the payer.
     */
    public function getFeeRuleDescription(): ?string
    {
        if (count($this->feeRuleDescription) == 0) {
            return null;
        }
        return $this->feeRuleDescription['value'];
    }

    /**
     * Sets Fee Rule Description.
     * Bonus or association bonus configuration description that is associated to the payer.
     *
     * @maps FeeRuleDescription
     */
    public function setFeeRuleDescription(?string $feeRuleDescription): void
    {
        $this->feeRuleDescription['value'] = $feeRuleDescription;
    }

    /**
     * Unsets Fee Rule Description.
     * Bonus or association bonus configuration description that is associated to the payer.
     */
    public function unsetFeeRuleDescription(): void
    {
        $this->feeRuleDescription = [];
    }

    /**
     * Returns Month.
     * Consumption(Volume) of the month.
     */
    public function getMonth(): ?int
    {
        if (count($this->month) == 0) {
            return null;
        }
        return $this->month['value'];
    }

    /**
     * Sets Month.
     * Consumption(Volume) of the month.
     *
     * @maps Month
     */
    public function setMonth(?int $month): void
    {
        $this->month['value'] = $month;
    }

    /**
     * Unsets Month.
     * Consumption(Volume) of the month.
     */
    public function unsetMonth(): void
    {
        $this->month = [];
    }

    /**
     * Returns Year.
     * Consumption (Volume) of the year.
     */
    public function getYear(): ?string
    {
        if (count($this->year) == 0) {
            return null;
        }
        return $this->year['value'];
    }

    /**
     * Sets Year.
     * Consumption (Volume) of the year.
     *
     * @maps Year
     */
    public function setYear(?string $year): void
    {
        $this->year['value'] = $year;
    }

    /**
     * Unsets Year.
     * Consumption (Volume) of the year.
     */
    public function unsetYear(): void
    {
        $this->year = [];
    }

    /**
     * Returns Total Volume.
     * Total volume consumption for the month/year above.
     */
    public function getTotalVolume(): ?float
    {
        if (count($this->totalVolume) == 0) {
            return null;
        }
        return $this->totalVolume['value'];
    }

    /**
     * Sets Total Volume.
     * Total volume consumption for the month/year above.
     *
     * @maps TotalVolume
     */
    public function setTotalVolume(?float $totalVolume): void
    {
        $this->totalVolume['value'] = $totalVolume;
    }

    /**
     * Unsets Total Volume.
     * Total volume consumption for the month/year above.
     */
    public function unsetTotalVolume(): void
    {
        $this->totalVolume = [];
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
        if (!empty($this->feeRuleId)) {
            $json['FeeRuleId']          = $this->feeRuleId['value'];
        }
        if (!empty($this->feeRuleDescription)) {
            $json['FeeRuleDescription'] = $this->feeRuleDescription['value'];
        }
        if (!empty($this->month)) {
            $json['Month']              = $this->month['value'];
        }
        if (!empty($this->year)) {
            $json['Year']               = $this->year['value'];
        }
        if (!empty($this->totalVolume)) {
            $json['TotalVolume']        = $this->totalVolume['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
