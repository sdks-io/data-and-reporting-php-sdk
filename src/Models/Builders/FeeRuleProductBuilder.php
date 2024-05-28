<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\FeeRuleProduct;

/**
 * Builder for model FeeRuleProduct
 *
 * @see FeeRuleProduct
 */
class FeeRuleProductBuilder
{
    /**
     * @var FeeRuleProduct
     */
    private $instance;

    private function __construct(FeeRuleProduct $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new fee rule product Builder object.
     */
    public static function init(): self
    {
        return new self(new FeeRuleProduct());
    }

    /**
     * Sets product group id field.
     */
    public function productGroupId(?int $value): self
    {
        $this->instance->setProductGroupId($value);
        return $this;
    }

    /**
     * Unsets product group id field.
     */
    public function unsetProductGroupId(): self
    {
        $this->instance->unsetProductGroupId();
        return $this;
    }

    /**
     * Sets product group name field.
     */
    public function productGroupName(?string $value): self
    {
        $this->instance->setProductGroupName($value);
        return $this;
    }

    /**
     * Unsets product group name field.
     */
    public function unsetProductGroupName(): self
    {
        $this->instance->unsetProductGroupName();
        return $this;
    }

    /**
     * Sets product code field.
     */
    public function productCode(?string $value): self
    {
        $this->instance->setProductCode($value);
        return $this;
    }

    /**
     * Unsets product code field.
     */
    public function unsetProductCode(): self
    {
        $this->instance->unsetProductCode();
        return $this;
    }

    /**
     * Sets product id field.
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
        return $this;
    }

    /**
     * Unsets product id field.
     */
    public function unsetProductId(): self
    {
        $this->instance->unsetProductId();
        return $this;
    }

    /**
     * Sets product name field.
     */
    public function productName(?string $value): self
    {
        $this->instance->setProductName($value);
        return $this;
    }

    /**
     * Unsets product name field.
     */
    public function unsetProductName(): self
    {
        $this->instance->unsetProductName();
        return $this;
    }

    /**
     * Initializes a new fee rule product object.
     */
    public function build(): FeeRuleProduct
    {
        return CoreHelper::clone($this->instance);
    }
}
