<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class VolumeBasedBonusResponse implements \JsonSerializable
{
    /**
     * @var BonusConfiguration[]|null
     */
    private $configuration;

    /**
     * @var CurrentVolume[]|null
     */
    private $currentPeriodConsumption;

    /**
     * @var BonusHistory[]|null
     */
    private $historicalBonusPaid;

    /**
     * @var ErrorStatus|null
     */
    private $error;

    /**
     * @var string|null
     */
    private $requestId;

    /**
     * Returns Configuration.
     *
     * @return BonusConfiguration[]|null
     */
    public function getConfiguration(): ?array
    {
        return $this->configuration;
    }

    /**
     * Sets Configuration.
     *
     * @maps Configuration
     *
     * @param BonusConfiguration[]|null $configuration
     */
    public function setConfiguration(?array $configuration): void
    {
        $this->configuration = $configuration;
    }

    /**
     * Returns Current Period Consumption.
     *
     * @return CurrentVolume[]|null
     */
    public function getCurrentPeriodConsumption(): ?array
    {
        return $this->currentPeriodConsumption;
    }

    /**
     * Sets Current Period Consumption.
     *
     * @maps CurrentPeriodConsumption
     *
     * @param CurrentVolume[]|null $currentPeriodConsumption
     */
    public function setCurrentPeriodConsumption(?array $currentPeriodConsumption): void
    {
        $this->currentPeriodConsumption = $currentPeriodConsumption;
    }

    /**
     * Returns Historical Bonus Paid.
     *
     * @return BonusHistory[]|null
     */
    public function getHistoricalBonusPaid(): ?array
    {
        return $this->historicalBonusPaid;
    }

    /**
     * Sets Historical Bonus Paid.
     *
     * @maps HistoricalBonusPaid
     *
     * @param BonusHistory[]|null $historicalBonusPaid
     */
    public function setHistoricalBonusPaid(?array $historicalBonusPaid): void
    {
        $this->historicalBonusPaid = $historicalBonusPaid;
    }

    /**
     * Returns Error.
     */
    public function getError(): ?ErrorStatus
    {
        return $this->error;
    }

    /**
     * Sets Error.
     *
     * @maps Error
     */
    public function setError(?ErrorStatus $error): void
    {
        $this->error = $error;
    }

    /**
     * Returns Request Id.
     * API Request Id
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * Sets Request Id.
     * API Request Id
     *
     * @maps RequestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId = $requestId;
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
        if (isset($this->configuration)) {
            $json['Configuration']            = $this->configuration;
        }
        if (isset($this->currentPeriodConsumption)) {
            $json['CurrentPeriodConsumption'] = $this->currentPeriodConsumption;
        }
        if (isset($this->historicalBonusPaid)) {
            $json['HistoricalBonusPaid']      = $this->historicalBonusPaid;
        }
        if (isset($this->error)) {
            $json['Error']                    = $this->error;
        }
        if (isset($this->requestId)) {
            $json['RequestId']                = $this->requestId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
