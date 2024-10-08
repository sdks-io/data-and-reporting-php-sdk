<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class PayerRequest implements \JsonSerializable
{
    /**
     * @var Payers[]|null
     */
    private $payers;

    /**
     * @var bool|null
     */
    private $returnBasicDetailsOnly = false;

    /**
     * @var bool|null
     */
    private $includeAddresses = false;

    /**
     * @var bool|null
     */
    private $includeBonusParameters = false;

    /**
     * @var int|null
     */
    private $currentPage;

    /**
     * @var int|null
     */
    private $pageSize;

    /**
     * Returns Payers.
     * List of Payer entity.
     * Optional.
     * Note:
     * •    Max number of payers allowed in the input is 10, if it exceeds in the input it will throw an
     * error.
     * •    This value is configurable. Initial configuration will be 1000 and will change to 10 once SFH
     * changes are integrated.
     *
     * @return Payers[]|null
     */
    public function getPayers(): ?array
    {
        return $this->payers;
    }

    /**
     * Sets Payers.
     * List of Payer entity.
     * Optional.
     * Note:
     * •    Max number of payers allowed in the input is 10, if it exceeds in the input it will throw an
     * error.
     * •    This value is configurable. Initial configuration will be 1000 and will change to 10 once SFH
     * changes are integrated.
     *
     * @maps Payers
     *
     * @param Payers[]|null $payers
     */
    public function setPayers(?array $payers): void
    {
        $this->payers = $payers;
    }

    /**
     * Returns Return Basic Details Only.
     * Returns only the high-level basic details of payers. Set this field to ‘true’ when only the basic
     * details are required to get the result quicker.
     */
    public function getReturnBasicDetailsOnly(): ?bool
    {
        return $this->returnBasicDetailsOnly;
    }

    /**
     * Sets Return Basic Details Only.
     * Returns only the high-level basic details of payers. Set this field to ‘true’ when only the basic
     * details are required to get the result quicker.
     *
     * @maps ReturnBasicDetailsOnly
     */
    public function setReturnBasicDetailsOnly(?bool $returnBasicDetailsOnly): void
    {
        $this->returnBasicDetailsOnly = $returnBasicDetailsOnly;
    }

    /**
     * Returns Include Addresses.
     * Include address related fields on the response. Set this field to ‘False’ when Address fields are
     * not required to get the result quicker.
     */
    public function getIncludeAddresses(): ?bool
    {
        return $this->includeAddresses;
    }

    /**
     * Sets Include Addresses.
     * Include address related fields on the response. Set this field to ‘False’ when Address fields are
     * not required to get the result quicker.
     *
     * @maps IncludeAddresses
     */
    public function setIncludeAddresses(?bool $includeAddresses): void
    {
        $this->includeAddresses = $includeAddresses;
    }

    /**
     * Returns Include Bonus Parameters.
     * Include the Finance Currency, used for Finance Widget, in the response
     */
    public function getIncludeBonusParameters(): ?bool
    {
        return $this->includeBonusParameters;
    }

    /**
     * Sets Include Bonus Parameters.
     * Include the Finance Currency, used for Finance Widget, in the response
     *
     * @maps IncludeBonusParameters
     */
    public function setIncludeBonusParameters(?bool $includeBonusParameters): void
    {
        $this->includeBonusParameters = $includeBonusParameters;
    }

    /**
     * Returns Current Page.
     * Page Number
     */
    public function getCurrentPage(): ?int
    {
        return $this->currentPage;
    }

    /**
     * Sets Current Page.
     * Page Number
     *
     * @maps CurrentPage
     */
    public function setCurrentPage(?int $currentPage): void
    {
        $this->currentPage = $currentPage;
    }

    /**
     * Returns Page Size.
     * Page Size – Number of records to show on a page
     *
     *
     *
     * Default value 50
     *
     * Return 250 rows only in the response if -1 is supplied as page size.
     *
     *
     *
     * Note:
     *
     * •    Max page size is 250, if the user provided value is more than 250 then it will throw error.
     *
     * •    This value is configurable.
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * Sets Page Size.
     * Page Size – Number of records to show on a page
     *
     *
     *
     * Default value 50
     *
     * Return 250 rows only in the response if -1 is supplied as page size.
     *
     *
     *
     * Note:
     *
     * •    Max page size is 250, if the user provided value is more than 250 then it will throw error.
     *
     * •    This value is configurable.
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
        if (isset($this->payers)) {
            $json['Payers']                 = $this->payers;
        }
        if (isset($this->returnBasicDetailsOnly)) {
            $json['ReturnBasicDetailsOnly'] = $this->returnBasicDetailsOnly;
        }
        if (isset($this->includeAddresses)) {
            $json['IncludeAddresses']       = $this->includeAddresses;
        }
        if (isset($this->includeBonusParameters)) {
            $json['IncludeBonusParameters'] = $this->includeBonusParameters;
        }
        if (isset($this->currentPage)) {
            $json['CurrentPage']            = $this->currentPage;
        }
        if (isset($this->pageSize)) {
            $json['PageSize']               = $this->pageSize;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
