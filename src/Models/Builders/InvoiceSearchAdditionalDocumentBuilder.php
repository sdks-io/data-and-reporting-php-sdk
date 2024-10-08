<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\InvoiceSearchAdditionalDocument;

/**
 * Builder for model InvoiceSearchAdditionalDocument
 *
 * @see InvoiceSearchAdditionalDocument
 */
class InvoiceSearchAdditionalDocumentBuilder
{
    /**
     * @var InvoiceSearchAdditionalDocument
     */
    private $instance;

    private function __construct(InvoiceSearchAdditionalDocument $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new invoice search additional document Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceSearchAdditionalDocument());
    }

    /**
     * Sets reference field.
     */
    public function reference(?string $value): self
    {
        $this->instance->setReference($value);
        return $this;
    }

    /**
     * Unsets reference field.
     */
    public function unsetReference(): self
    {
        $this->instance->unsetReference();
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Unsets type field.
     */
    public function unsetType(): self
    {
        $this->instance->unsetType();
        return $this;
    }

    /**
     * Sets is applicable field.
     */
    public function isApplicable(?string $value): self
    {
        $this->instance->setIsApplicable($value);
        return $this;
    }

    /**
     * Unsets is applicable field.
     */
    public function unsetIsApplicable(): self
    {
        $this->instance->unsetIsApplicable();
        return $this;
    }

    /**
     * Initializes a new invoice search additional document object.
     */
    public function build(): InvoiceSearchAdditionalDocument
    {
        return CoreHelper::clone($this->instance);
    }
}
