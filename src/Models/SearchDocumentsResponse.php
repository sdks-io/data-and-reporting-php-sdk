<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class SearchDocumentsResponse implements \JsonSerializable
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
     * @var SearchDocumentsInvoice[]|null
     */
    private $data;

    /**
     * @var int|null
     */
    private $totalRecords;

    /**
     * @var int|null
     */
    private $totalRecordsOnPage;

    /**
     * @var bool|null
     */
    private $isFirstPage;

    /**
     * @var bool|null
     */
    private $isLastPage;

    /**
     * Returns Request Id.
     * UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the
     * response from the request.
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * Sets Request Id.
     * UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the
     * response from the request.
     *
     * @maps RequestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * Returns Status.
     * Indicates overall status of the request. Allowed values: SUCCES, FAILED
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Indicates overall status of the request. Allowed values: SUCCES, FAILED
     *
     * @maps Status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Data.
     *
     * @return SearchDocumentsInvoice[]|null
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * @maps Data
     *
     * @param SearchDocumentsInvoice[]|null $data
     */
    public function setData(?array $data): void
    {
        $this->data = $data;
    }

    /**
     * Returns Total Records.
     * Total number of elements corresponding to the request
     */
    public function getTotalRecords(): ?int
    {
        return $this->totalRecords;
    }

    /**
     * Sets Total Records.
     * Total number of elements corresponding to the request
     *
     * @maps TotalRecords
     */
    public function setTotalRecords(?int $totalRecords): void
    {
        $this->totalRecords = $totalRecords;
    }

    /**
     * Returns Total Records on Page.
     * Number of elements in the page content. Will be lesser or equal to the size param.
     */
    public function getTotalRecordsOnPage(): ?int
    {
        return $this->totalRecordsOnPage;
    }

    /**
     * Sets Total Records on Page.
     * Number of elements in the page content. Will be lesser or equal to the size param.
     *
     * @maps TotalRecordsOnPage
     */
    public function setTotalRecordsOnPage(?int $totalRecordsOnPage): void
    {
        $this->totalRecordsOnPage = $totalRecordsOnPage;
    }

    /**
     * Returns Is First Page.
     * True if it is the first page, false otherwise
     */
    public function getIsFirstPage(): ?bool
    {
        return $this->isFirstPage;
    }

    /**
     * Sets Is First Page.
     * True if it is the first page, false otherwise
     *
     * @maps IsFirstPage
     */
    public function setIsFirstPage(?bool $isFirstPage): void
    {
        $this->isFirstPage = $isFirstPage;
    }

    /**
     * Returns Is Last Page.
     * True if it is the last page, false, otherwise.
     */
    public function getIsLastPage(): ?bool
    {
        return $this->isLastPage;
    }

    /**
     * Sets Is Last Page.
     * True if it is the last page, false, otherwise.
     *
     * @maps IsLastPage
     */
    public function setIsLastPage(?bool $isLastPage): void
    {
        $this->isLastPage = $isLastPage;
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
            $json['RequestId']          = $this->requestId;
        }
        if (isset($this->status)) {
            $json['Status']             = $this->status;
        }
        if (isset($this->data)) {
            $json['Data']               = $this->data;
        }
        if (isset($this->totalRecords)) {
            $json['TotalRecords']       = $this->totalRecords;
        }
        if (isset($this->totalRecordsOnPage)) {
            $json['TotalRecordsOnPage'] = $this->totalRecordsOnPage;
        }
        if (isset($this->isFirstPage)) {
            $json['IsFirstPage']        = $this->isFirstPage;
        }
        if (isset($this->isLastPage)) {
            $json['IsLastPage']         = $this->isLastPage;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
