<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\InvoiceSummaryResponse;

/**
 * Builder for model InvoiceSummaryResponse
 *
 * @see InvoiceSummaryResponse
 */
class InvoiceSummaryResponseBuilder
{
    /**
     * @var InvoiceSummaryResponse
     */
    private $instance;

    private function __construct(InvoiceSummaryResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice summary response Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceSummaryResponse());
    }

    /**
     * Sets request id field.
     */
    public function requestId(?string $value): self
    {
        $this->instance->setRequestId($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets data field.
     */
    public function data(?array $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Initializes a new invoice summary response object.
     */
    public function build(): InvoiceSummaryResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
