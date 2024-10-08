<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\DefaultErrorFault;
use ShellDataReportingAPIsLib\Models\Detail;

/**
 * Builder for model DefaultErrorFault
 *
 * @see DefaultErrorFault
 */
class DefaultErrorFaultBuilder
{
    /**
     * @var DefaultErrorFault
     */
    private $instance;

    private function __construct(DefaultErrorFault $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new default error fault Builder object.
     */
    public static function init(): self
    {
        return new self(new DefaultErrorFault());
    }

    /**
     * Sets faultstring field.
     */
    public function faultstring(?string $value): self
    {
        $this->instance->setFaultstring($value);
        return $this;
    }

    /**
     * Sets detail field.
     */
    public function detail(?Detail $value): self
    {
        $this->instance->setDetail($value);
        return $this;
    }

    /**
     * Initializes a new default error fault object.
     */
    public function build(): DefaultErrorFault
    {
        return CoreHelper::clone($this->instance);
    }
}
