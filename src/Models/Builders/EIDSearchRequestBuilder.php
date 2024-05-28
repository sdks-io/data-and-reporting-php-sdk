<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\EIDSearchReq;
use ShellDataReportingAPIsLib\Models\EIDSearchRequest;

/**
 * Builder for model EIDSearchRequest
 *
 * @see EIDSearchRequest
 */
class EIDSearchRequestBuilder
{
    /**
     * @var EIDSearchRequest
     */
    private $instance;

    private function __construct(EIDSearchRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new eidsearch request Builder object.
     */
    public static function init(): self
    {
        return new self(new EIDSearchRequest());
    }

    /**
     * Sets filters field.
     */
    public function filters(?EIDSearchReq $value): self
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
     * Initializes a new eidsearch request object.
     */
    public function build(): EIDSearchRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
