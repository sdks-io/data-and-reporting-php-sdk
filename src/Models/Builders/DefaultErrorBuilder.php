<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\DefaultError;
use ShellDataReportingAPIsLib\Models\Fault;

/**
 * Builder for model DefaultError
 *
 * @see DefaultError
 */
class DefaultErrorBuilder
{
    /**
     * @var DefaultError
     */
    private $instance;

    private function __construct(DefaultError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new default error Builder object.
     */
    public static function init(): self
    {
        return new self(new DefaultError());
    }

    /**
     * Sets fault field.
     */
    public function fault(?Fault $value): self
    {
        $this->instance->setFault($value);
        return $this;
    }

    /**
     * Initializes a new default error object.
     */
    public function build(): DefaultError
    {
        return CoreHelper::clone($this->instance);
    }
}
