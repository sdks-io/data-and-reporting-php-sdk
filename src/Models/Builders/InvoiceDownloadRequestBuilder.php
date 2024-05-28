<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\InvoiceDownloadReq;
use ShellDataReportingAPIsLib\Models\InvoiceDownloadRequest;

/**
 * Builder for model InvoiceDownloadRequest
 *
 * @see InvoiceDownloadRequest
 */
class InvoiceDownloadRequestBuilder
{
    /**
     * @var InvoiceDownloadRequest
     */
    private $instance;

    private function __construct(InvoiceDownloadRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice download request Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceDownloadRequest());
    }

    /**
     * Sets filters field.
     */
    public function filters(?InvoiceDownloadReq $value): self
    {
        $this->instance->setFilters($value);
        return $this;
    }

    /**
     * Initializes a new invoice download request object.
     */
    public function build(): InvoiceDownloadRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
