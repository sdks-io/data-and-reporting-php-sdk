<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class PayerResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $requestId = [];

    /**
     * @var PayerDetails[]|null
     */
    private $payers;

    /**
     * @var int|null
     */
    private $currentPage;

    /**
     * @var int|null
     */
    private $rowCount;

    /**
     * @var int|null
     */
    private $totalPages;

    /**
     * @var ErrorStatus|null
     */
    private $error;

    /**
     * Returns Request Id.
     * Request Id of the API call
     */
    public function getRequestId(): ?string
    {
        if (count($this->requestId) == 0) {
            return null;
        }
        return $this->requestId['value'];
    }

    /**
     * Sets Request Id.
     * Request Id of the API call
     *
     * @maps RequestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId['value'] = $requestId;
    }

    /**
     * Unsets Request Id.
     * Request Id of the API call
     */
    public function unsetRequestId(): void
    {
        $this->requestId = [];
    }

    /**
     * Returns Payers.
     *
     * @return PayerDetails[]|null
     */
    public function getPayers(): ?array
    {
        return $this->payers;
    }

    /**
     * Sets Payers.
     *
     * @maps Payers
     *
     * @param PayerDetails[]|null $payers
     */
    public function setPayers(?array $payers): void
    {
        $this->payers = $payers;
    }

    /**
     * Returns Current Page.
     * Current Page
     */
    public function getCurrentPage(): ?int
    {
        return $this->currentPage;
    }

    /**
     * Sets Current Page.
     * Current Page
     *
     * @maps CurrentPage
     */
    public function setCurrentPage(?int $currentPage): void
    {
        $this->currentPage = $currentPage;
    }

    /**
     * Returns Row Count.
     * Total row count matched for the given input criteria
     */
    public function getRowCount(): ?int
    {
        return $this->rowCount;
    }

    /**
     * Sets Row Count.
     * Total row count matched for the given input criteria
     *
     * @maps RowCount
     */
    public function setRowCount(?int $rowCount): void
    {
        $this->rowCount = $rowCount;
    }

    /**
     * Returns Total Pages.
     * Calculated page count based on page size from the incoming API request and total number of rows
     * matched for the given input criteria. Return 1 if the page size is -1 as all records are returned
     */
    public function getTotalPages(): ?int
    {
        return $this->totalPages;
    }

    /**
     * Sets Total Pages.
     * Calculated page count based on page size from the incoming API request and total number of rows
     * matched for the given input criteria. Return 1 if the page size is -1 as all records are returned
     *
     * @maps TotalPages
     */
    public function setTotalPages(?int $totalPages): void
    {
        $this->totalPages = $totalPages;
    }

    /**
     * Returns Error.
     */
    public function getError(): ?ErrorStatus
    {
        return $this->error;
    }

    /**
     * Sets Error.
     *
     * @maps Error
     */
    public function setError(?ErrorStatus $error): void
    {
        $this->error = $error;
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
        if (!empty($this->requestId)) {
            $json['RequestId']   = $this->requestId['value'];
        }
        if (isset($this->payers)) {
            $json['Payers']      = $this->payers;
        }
        if (isset($this->currentPage)) {
            $json['CurrentPage'] = $this->currentPage;
        }
        if (isset($this->rowCount)) {
            $json['RowCount']    = $this->rowCount;
        }
        if (isset($this->totalPages)) {
            $json['TotalPages']  = $this->totalPages;
        }
        if (isset($this->error)) {
            $json['Error']       = $this->error;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
