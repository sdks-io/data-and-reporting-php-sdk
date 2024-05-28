<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models\Builders;

use Core\Utils\CoreHelper;
use ShellDataReportingAPIsLib\Models\CardUsageSummaryRequest;

/**
 * Builder for model CardUsageSummaryRequest
 *
 * @see CardUsageSummaryRequest
 */
class CardUsageSummaryRequestBuilder
{
    /**
     * @var CardUsageSummaryRequest
     */
    private $instance;

    private function __construct(CardUsageSummaryRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new card usage summary request Builder object.
     */
    public static function init(): self
    {
        return new self(new CardUsageSummaryRequest());
    }

    /**
     * Sets col co id field.
     */
    public function colCoId(?int $value): self
    {
        $this->instance->setColCoId($value);
        return $this;
    }

    /**
     * Unsets col co id field.
     */
    public function unsetColCoId(): self
    {
        $this->instance->unsetColCoId();
        return $this;
    }

    /**
     * Sets col co code field.
     */
    public function colCoCode(?int $value): self
    {
        $this->instance->setColCoCode($value);
        return $this;
    }

    /**
     * Unsets col co code field.
     */
    public function unsetColCoCode(): self
    {
        $this->instance->unsetColCoCode();
        return $this;
    }

    /**
     * Sets payer id field.
     */
    public function payerId(?int $value): self
    {
        $this->instance->setPayerId($value);
        return $this;
    }

    /**
     * Unsets payer id field.
     */
    public function unsetPayerId(): self
    {
        $this->instance->unsetPayerId();
        return $this;
    }

    /**
     * Sets payer number field.
     */
    public function payerNumber(?string $value): self
    {
        $this->instance->setPayerNumber($value);
        return $this;
    }

    /**
     * Unsets payer number field.
     */
    public function unsetPayerNumber(): self
    {
        $this->instance->unsetPayerNumber();
        return $this;
    }

    /**
     * Sets account id field.
     */
    public function accountId(?int $value): self
    {
        $this->instance->setAccountId($value);
        return $this;
    }

    /**
     * Unsets account id field.
     */
    public function unsetAccountId(): self
    {
        $this->instance->unsetAccountId();
        return $this;
    }

    /**
     * Sets account number field.
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Unsets account number field.
     */
    public function unsetAccountNumber(): self
    {
        $this->instance->unsetAccountNumber();
        return $this;
    }

    /**
     * Sets card id field.
     */
    public function cardId(?int $value): self
    {
        $this->instance->setCardId($value);
        return $this;
    }

    /**
     * Unsets card id field.
     */
    public function unsetCardId(): self
    {
        $this->instance->unsetCardId();
        return $this;
    }

    /**
     * Sets pan field.
     */
    public function pAN(?string $value): self
    {
        $this->instance->setPAN($value);
        return $this;
    }

    /**
     * Unsets pan field.
     */
    public function unsetPAN(): self
    {
        $this->instance->unsetPAN();
        return $this;
    }

    /**
     * Sets card expiry date field.
     */
    public function cardExpiryDate(?string $value): self
    {
        $this->instance->setCardExpiryDate($value);
        return $this;
    }

    /**
     * Unsets card expiry date field.
     */
    public function unsetCardExpiryDate(): self
    {
        $this->instance->unsetCardExpiryDate();
        return $this;
    }

    /**
     * Initializes a new card usage summary request object.
     */
    public function build(): CardUsageSummaryRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
