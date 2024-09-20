<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Exceptions;

class InvoiceManagementV1Searchdocuments403ErrorException extends ApiException
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
     * @var \ShellDataReportingAPIsLib\Models\ErrorDetails[]|null
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
     * @return \ShellDataReportingAPIsLib\Models\ErrorDetails[]|null
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
     * @param \ShellDataReportingAPIsLib\Models\ErrorDetails[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }
}
