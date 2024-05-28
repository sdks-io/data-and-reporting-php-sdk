<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\SearchStatementOfAccountResponse;

/**
 * Builder for model SearchStatementOfAccountResponse
 *
 * @see SearchStatementOfAccountResponse
 */
class SearchStatementOfAccountResponseBuilder
{
    /**
     * @var SearchStatementOfAccountResponse
     */
    private $instance;

    private function __construct(SearchStatementOfAccountResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new search statement of account response Builder object.
     */
    public static function init(): self
    {
        return new self(new SearchStatementOfAccountResponse());
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
     * Sets page field.
     */
    public function page(?int $value): self
    {
        $this->instance->setPage($value);
        return $this;
    }

    /**
     * Sets total records field.
     */
    public function totalRecords(?int $value): self
    {
        $this->instance->setTotalRecords($value);
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
     * Sets page size field.
     */
    public function pageSize(?int $value): self
    {
        $this->instance->setPageSize($value);
        return $this;
    }

    /**
     * Initializes a new search statement of account response object.
     */
    public function build(): SearchStatementOfAccountResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
