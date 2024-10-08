<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class FeesFeeRuleTiers implements \JsonSerializable
{
    /**
     * @var array
     */
    private $tierMin = [];

    /**
     * @var array
     */
    private $tierMax = [];

    /**
     * @var array
     */
    private $dateEffective = [];

    /**
     * @var array
     */
    private $dateTerminated = [];

    /**
     * @var array
     */
    private $tierValue = [];

    /**
     * @var array
     */
    private $feeRuleBasisID = [];

    /**
     * @var array
     */
    private $feeRuleBasisDescription = [];

    /**
     * Returns Tier Min.
     */
    public function getTierMin(): ?int
    {
        if (count($this->tierMin) == 0) {
            return null;
        }
        return $this->tierMin['value'];
    }

    /**
     * Sets Tier Min.
     *
     * @maps TierMin
     */
    public function setTierMin(?int $tierMin): void
    {
        $this->tierMin['value'] = $tierMin;
    }

    /**
     * Unsets Tier Min.
     */
    public function unsetTierMin(): void
    {
        $this->tierMin = [];
    }

    /**
     * Returns Tier Max.
     */
    public function getTierMax(): ?int
    {
        if (count($this->tierMax) == 0) {
            return null;
        }
        return $this->tierMax['value'];
    }

    /**
     * Sets Tier Max.
     *
     * @maps TierMax
     */
    public function setTierMax(?int $tierMax): void
    {
        $this->tierMax['value'] = $tierMax;
    }

    /**
     * Unsets Tier Max.
     */
    public function unsetTierMax(): void
    {
        $this->tierMax = [];
    }

    /**
     * Returns Date Effective.
     */
    public function getDateEffective(): ?string
    {
        if (count($this->dateEffective) == 0) {
            return null;
        }
        return $this->dateEffective['value'];
    }

    /**
     * Sets Date Effective.
     *
     * @maps DateEffective
     */
    public function setDateEffective(?string $dateEffective): void
    {
        $this->dateEffective['value'] = $dateEffective;
    }

    /**
     * Unsets Date Effective.
     */
    public function unsetDateEffective(): void
    {
        $this->dateEffective = [];
    }

    /**
     * Returns Date Terminated.
     */
    public function getDateTerminated(): ?string
    {
        if (count($this->dateTerminated) == 0) {
            return null;
        }
        return $this->dateTerminated['value'];
    }

    /**
     * Sets Date Terminated.
     *
     * @maps DateTerminated
     */
    public function setDateTerminated(?string $dateTerminated): void
    {
        $this->dateTerminated['value'] = $dateTerminated;
    }

    /**
     * Unsets Date Terminated.
     */
    public function unsetDateTerminated(): void
    {
        $this->dateTerminated = [];
    }

    /**
     * Returns Tier Value.
     */
    public function getTierValue(): ?float
    {
        if (count($this->tierValue) == 0) {
            return null;
        }
        return $this->tierValue['value'];
    }

    /**
     * Sets Tier Value.
     *
     * @maps TierValue
     */
    public function setTierValue(?float $tierValue): void
    {
        $this->tierValue['value'] = $tierValue;
    }

    /**
     * Unsets Tier Value.
     */
    public function unsetTierValue(): void
    {
        $this->tierValue = [];
    }

    /**
     * Returns Fee Rule Basis ID.
     */
    public function getFeeRuleBasisID(): ?int
    {
        if (count($this->feeRuleBasisID) == 0) {
            return null;
        }
        return $this->feeRuleBasisID['value'];
    }

    /**
     * Sets Fee Rule Basis ID.
     *
     * @maps FeeRuleBasisID
     */
    public function setFeeRuleBasisID(?int $feeRuleBasisID): void
    {
        $this->feeRuleBasisID['value'] = $feeRuleBasisID;
    }

    /**
     * Unsets Fee Rule Basis ID.
     */
    public function unsetFeeRuleBasisID(): void
    {
        $this->feeRuleBasisID = [];
    }

    /**
     * Returns Fee Rule Basis Description.
     */
    public function getFeeRuleBasisDescription(): ?string
    {
        if (count($this->feeRuleBasisDescription) == 0) {
            return null;
        }
        return $this->feeRuleBasisDescription['value'];
    }

    /**
     * Sets Fee Rule Basis Description.
     *
     * @maps FeeRuleBasisDescription
     */
    public function setFeeRuleBasisDescription(?string $feeRuleBasisDescription): void
    {
        $this->feeRuleBasisDescription['value'] = $feeRuleBasisDescription;
    }

    /**
     * Unsets Fee Rule Basis Description.
     */
    public function unsetFeeRuleBasisDescription(): void
    {
        $this->feeRuleBasisDescription = [];
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
        if (!empty($this->tierMin)) {
            $json['TierMin']                 = $this->tierMin['value'];
        }
        if (!empty($this->tierMax)) {
            $json['TierMax']                 = $this->tierMax['value'];
        }
        if (!empty($this->dateEffective)) {
            $json['DateEffective']           = $this->dateEffective['value'];
        }
        if (!empty($this->dateTerminated)) {
            $json['DateTerminated']          = $this->dateTerminated['value'];
        }
        if (!empty($this->tierValue)) {
            $json['TierValue']               = $this->tierValue['value'];
        }
        if (!empty($this->feeRuleBasisID)) {
            $json['FeeRuleBasisID']          = $this->feeRuleBasisID['value'];
        }
        if (!empty($this->feeRuleBasisDescription)) {
            $json['FeeRuleBasisDescription'] = $this->feeRuleBasisDescription['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
