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
use ShellDataReportingAPIsLib\Models\TransactionFeesResponse;

/**
 * Builder for model TransactionFeesResponse
 *
 * @see TransactionFeesResponse
 */
class TransactionFeesResponseBuilder
{
    /**
     * @var TransactionFeesResponse
     */
    private $instance;

    private function __construct(TransactionFeesResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new transaction fees response Builder object.
     */
    public static function init(): self
    {
        return new self(new TransactionFeesResponse());
    }

    /**
     * Sets fee items field.
     */
    public function feeItems(?array $value): self
    {
        $this->instance->setFeeItems($value);
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
     * Sets request id field.
     */
    public function requestId(?string $value): self
    {
        $this->instance->setRequestId($value);
        return $this;
    }

    /**
     * Initializes a new transaction fees response object.
     */
    public function build(): TransactionFeesResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
