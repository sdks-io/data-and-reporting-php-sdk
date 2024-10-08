<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\CurrentVolume;

/**
 * Builder for model CurrentVolume
 *
 * @see CurrentVolume
 */
class CurrentVolumeBuilder
{
    /**
     * @var CurrentVolume
     */
    private $instance;

    private function __construct(CurrentVolume $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new current volume Builder object.
     */
    public static function init(): self
    {
        return new self(new CurrentVolume());
    }

    /**
     * Sets fee rule id field.
     */
    public function feeRuleId(?int $value): self
    {
        $this->instance->setFeeRuleId($value);
        return $this;
    }

    /**
     * Unsets fee rule id field.
     */
    public function unsetFeeRuleId(): self
    {
        $this->instance->unsetFeeRuleId();
        return $this;
    }

    /**
     * Sets fee rule description field.
     */
    public function feeRuleDescription(?string $value): self
    {
        $this->instance->setFeeRuleDescription($value);
        return $this;
    }

    /**
     * Unsets fee rule description field.
     */
    public function unsetFeeRuleDescription(): self
    {
        $this->instance->unsetFeeRuleDescription();
        return $this;
    }

    /**
     * Sets month field.
     */
    public function month(?int $value): self
    {
        $this->instance->setMonth($value);
        return $this;
    }

    /**
     * Unsets month field.
     */
    public function unsetMonth(): self
    {
        $this->instance->unsetMonth();
        return $this;
    }

    /**
     * Sets year field.
     */
    public function year(?string $value): self
    {
        $this->instance->setYear($value);
        return $this;
    }

    /**
     * Unsets year field.
     */
    public function unsetYear(): self
    {
        $this->instance->unsetYear();
        return $this;
    }

    /**
     * Sets total volume field.
     */
    public function totalVolume(?float $value): self
    {
        $this->instance->setTotalVolume($value);
        return $this;
    }

    /**
     * Unsets total volume field.
     */
    public function unsetTotalVolume(): self
    {
        $this->instance->unsetTotalVolume();
        return $this;
    }

    /**
     * Initializes a new current volume object.
     */
    public function build(): CurrentVolume
    {
        return CoreHelper::clone($this->instance);
    }
}
