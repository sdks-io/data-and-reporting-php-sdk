<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class ErrorObject implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $requestId;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var ErrorDetails[]|null
     */
    private $errors;

    /**
     * Returns Request Id.
     * Unique request identifier passed from end user. This identifier helps in tracing a transaction
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * Sets Request Id.
     * Unique request identifier passed from end user. This identifier helps in tracing a transaction
     *
     * @maps RequestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * Returns Status.
     * Indicates overall status of the request. Allowed values: SUCCES, FAILED, PARTIAL_SUCCESS
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Indicates overall status of the request. Allowed values: SUCCES, FAILED, PARTIAL_SUCCESS
     *
     * @maps Status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Errors.
     *
     * @return ErrorDetails[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @maps Errors
     *
     * @param ErrorDetails[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->requestId)) {
            $json['RequestId'] = $this->requestId;
        }
        if (isset($this->status)) {
            $json['Status']    = $this->status;
        }
        if (isset($this->errors)) {
            $json['Errors']    = $this->errors;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
