<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\FleetmanagementV1UserLoggedinuserRequest;

/**
 * Builder for model FleetmanagementV1UserLoggedinuserRequest
 *
 * @see FleetmanagementV1UserLoggedinuserRequest
 */
class FleetmanagementV1UserLoggedinuserRequestBuilder
{
    /**
     * @var FleetmanagementV1UserLoggedinuserRequest
     */
    private $instance;

    private function __construct(FleetmanagementV1UserLoggedinuserRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new fleetmanagement v1 user loggedinuser request Builder object.
     */
    public static function init(): self
    {
        return new self(new FleetmanagementV1UserLoggedinuserRequest());
    }

    /**
     * Sets include payer group field.
     */
    public function includePayerGroup(?bool $value): self
    {
        $this->instance->setIncludePayerGroup($value);
        return $this;
    }

    /**
     * Sets include eiddetails field.
     */
    public function includeEIDDetails(?bool $value): self
    {
        $this->instance->setIncludeEIDDetails($value);
        return $this;
    }

    /**
     * Sets requested apiname field.
     */
    public function requestedAPIName(?string $value): self
    {
        $this->instance->setRequestedAPIName($value);
        return $this;
    }

    /**
     * Unsets requested apiname field.
     */
    public function unsetRequestedAPIName(): self
    {
        $this->instance->unsetRequestedAPIName();
        return $this;
    }

    /**
     * Sets payer id field.
     */
    public function payerId(?int $value): self
    {
        $this->instance->setPayerId($value);
        return $this;
    }

    /**
     * Unsets payer id field.
     */
    public function unsetPayerId(): self
    {
        $this->instance->unsetPayerId();
        return $this;
    }

    /**
     * Sets payer number field.
     */
    public function payerNumber(?string $value): self
    {
        $this->instance->setPayerNumber($value);
        return $this;
    }

    /**
     * Unsets payer number field.
     */
    public function unsetPayerNumber(): self
    {
        $this->instance->unsetPayerNumber();
        return $this;
    }

    /**
     * Initializes a new fleetmanagement v1 user loggedinuser request object.
     */
    public function build(): FleetmanagementV1UserLoggedinuserRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
