<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class SearchStatementOfAccountResponse implements \JsonSerializable
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
     * @var SearchStatementOfAccount[]|null
     */
    private $data;

    /**
     * @var int|null
     */
    private $page;

    /**
     * @var int|null
     */
    private $totalRecords;

    /**
     * @var int|null
     */
    private $totalPages;

    /**
     * @var int|null
     */
    private $pageSize;

    /**
     * Returns Request Id.
     * Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played
     * back in the response from the req
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * Sets Request Id.
     * Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played
     * back in the response from the req
     *
     * @maps RequestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * Returns Status.
     * Indicates overall status of the request
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Indicates overall status of the request
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
     * @return SearchStatementOfAccount[]|null
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
     * @param SearchStatementOfAccount[]|null $data
     */
    public function setData(?array $data): void
    {
        $this->data = $data;
    }

    /**
     * Returns Page.
     * Current page
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * Sets Page.
     * Current page
     *
     * @maps Page
     */
    public function setPage(?int $page): void
    {
        $this->page = $page;
    }

    /**
     * Returns Total Records.
     * Total Number of records in response
     */
    public function getTotalRecords(): ?int
    {
        return $this->totalRecords;
    }

    /**
     * Sets Total Records.
     * Total Number of records in response
     *
     * @maps TotalRecords
     */
    public function setTotalRecords(?int $totalRecords): void
    {
        $this->totalRecords = $totalRecords;
    }

    /**
     * Returns Total Pages.
     * Total number of pages available for the requested data
     */
    public function getTotalPages(): ?int
    {
        return $this->totalPages;
    }

    /**
     * Sets Total Pages.
     * Total number of pages available for the requested data
     *
     * @maps TotalPages
     */
    public function setTotalPages(?int $totalPages): void
    {
        $this->totalPages = $totalPages;
    }

    /**
     * Returns Page Size.
     * Number of records returned in the response
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * Sets Page Size.
     * Number of records returned in the response
     *
     * @maps PageSize
     */
    public function setPageSize(?int $pageSize): void
    {
        $this->pageSize = $pageSize;
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
            $json['RequestId']    = $this->requestId;
        }
        if (isset($this->status)) {
            $json['Status']       = $this->status;
        }
        if (isset($this->data)) {
            $json['Data']         = $this->data;
        }
        if (isset($this->page)) {
            $json['Page']         = $this->page;
        }
        if (isset($this->totalRecords)) {
            $json['TotalRecords'] = $this->totalRecords;
        }
        if (isset($this->totalPages)) {
            $json['TotalPages']   = $this->totalPages;
        }
        if (isset($this->pageSize)) {
            $json['PageSize']     = $this->pageSize;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
