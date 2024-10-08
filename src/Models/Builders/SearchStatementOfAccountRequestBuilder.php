<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\SearchSOAReq;
use ShellDataReportingAPIsLib\Models\SearchStatementOfAccountRequest;

/**
 * Builder for model SearchStatementOfAccountRequest
 *
 * @see SearchStatementOfAccountRequest
 */
class SearchStatementOfAccountRequestBuilder
{
    /**
     * @var SearchStatementOfAccountRequest
     */
    private $instance;

    private function __construct(SearchStatementOfAccountRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new search statement of account request Builder object.
     */
    public static function init(): self
    {
        return new self(new SearchStatementOfAccountRequest());
    }

    /**
     * Sets filters field.
     */
    public function filters(?SearchSOAReq $value): self
    {
        $this->instance->setFilters($value);
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
     * Sets page size field.
     */
    public function pageSize(?int $value): self
    {
        $this->instance->setPageSize($value);
        return $this;
    }

    /**
     * Initializes a new search statement of account request object.
     */
    public function build(): SearchStatementOfAccountRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
