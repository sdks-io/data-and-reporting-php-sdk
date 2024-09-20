<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\Filters;
use ShellDataReportingAPIsLib\Models\PricedTransactionRequestV2;

/**
 * Builder for model PricedTransactionRequestV2
 *
 * @see PricedTransactionRequestV2
 */
class PricedTransactionRequestV2Builder
{
    /**
     * @var PricedTransactionRequestV2
     */
    private $instance;

    private function __construct(PricedTransactionRequestV2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new priced transaction request v2 Builder object.
     */
    public static function init(): self
    {
        return new self(new PricedTransactionRequestV2());
    }

    /**
     * Sets filters field.
     */
    public function filters(?Filters $value): self
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
     * Initializes a new priced transaction request v2 object.
     */
    public function build(): PricedTransactionRequestV2
    {
        return CoreHelper::clone($this->instance);
    }
}
