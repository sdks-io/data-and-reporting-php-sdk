<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\ErrorStatus;
use ShellDataReportingAPIsLib\Models\PayerResponse;

/**
 * Builder for model PayerResponse
 *
 * @see PayerResponse
 */
class PayerResponseBuilder
{
    /**
     * @var PayerResponse
     */
    private $instance;

    private function __construct(PayerResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payer response Builder object.
     */
    public static function init(): self
    {
        return new self(new PayerResponse());
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
     * Unsets request id field.
     */
    public function unsetRequestId(): self
    {
        $this->instance->unsetRequestId();
        return $this;
    }

    /**
     * Sets payers field.
     */
    public function payers(?array $value): self
    {
        $this->instance->setPayers($value);
        return $this;
    }

    /**
     * Sets current page field.
     */
    public function currentPage(?int $value): self
    {
        $this->instance->setCurrentPage($value);
        return $this;
    }

    /**
     * Sets row count field.
     */
    public function rowCount(?int $value): self
    {
        $this->instance->setRowCount($value);
        return $this;
    }

    /**
     * Sets total pages field.
     */
    public function totalPages(?int $value): self
    {
        $this->instance->setTotalPages($value);
        return $this;
    }

    /**
     * Sets error field.
     */
    public function error(?ErrorStatus $value): self
    {
        $this->instance->setError($value);
        return $this;
    }

    /**
     * Initializes a new payer response object.
     */
    public function build(): PayerResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
