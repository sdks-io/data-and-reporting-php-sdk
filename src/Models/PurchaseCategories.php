<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class PurchaseCategories implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var bool|null
     */
    private $isVisible;

    /**
     * @var string|null
     */
    private $productGroups;

    /**
     * Returns Id.
     * Purchase category Id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Purchase category Id
     *
     * @maps Id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Code.
     * Purchase category code
     * Example: 0,1, 2 etc.
     * Full list below:
     * 0 - All Fuels (without VP) and Lubricants
     * 1 - Fuel Save only
     * 2 - Fuel Save and Lubricants
     * 3 - No Restrictions
     * 4 - VP and Fuel Save
     * 5 - Diesel ONLY
     * 6 - Diesel and Lubricants
     * 7 - VP and Lubricants
     * 8 - VP and Fuel Save and Lubricants
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * Purchase category code
     * Example: 0,1, 2 etc.
     * Full list below:
     * 0 - All Fuels (without VP) and Lubricants
     * 1 - Fuel Save only
     * 2 - Fuel Save and Lubricants
     * 3 - No Restrictions
     * 4 - VP and Fuel Save
     * 5 - Diesel ONLY
     * 6 - Diesel and Lubricants
     * 7 - VP and Lubricants
     * 8 - VP and Fuel Save and Lubricants
     *
     * @maps Code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Name.
     * Purchase category name
     *
     * Example: Fuel Save Only
     *
     * Full list below:
     *
     * 0 - All Fuels (without VP) and Lubricants
     *
     * 1 - Fuel Save only
     *
     * 2 - Fuel Save and Lubricants
     *
     * 3 - No Restrictions
     *
     * 4 - VP and Fuel Save
     *
     * 5 - Diesel ONLY
     *
     * 6 - Diesel and Lubricants
     *
     * 7 - VP and Lubricants
     *
     * 8 - VP and Fuel Save and Lubricants
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Purchase category name
     *
     * Example: Fuel Save Only
     *
     * Full list below:
     *
     * 0 - All Fuels (without VP) and Lubricants
     *
     * 1 - Fuel Save only
     *
     * 2 - Fuel Save and Lubricants
     *
     * 3 - No Restrictions
     *
     * 4 - VP and Fuel Save
     *
     * 5 - Diesel ONLY
     *
     * 6 - Diesel and Lubricants
     *
     * 7 - VP and Lubricants
     *
     * 8 - VP and Fuel Save and Lubricants
     *
     * @maps Name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Is Visible.
     * If True then PurchaseCategory can be used while submitting new order cards requests.
     * If false this PurchaseCategory will not be used for Ordering Cards.
     */
    public function getIsVisible(): ?bool
    {
        return $this->isVisible;
    }

    /**
     * Sets Is Visible.
     * If True then PurchaseCategory can be used while submitting new order cards requests.
     * If false this PurchaseCategory will not be used for Ordering Cards.
     *
     * @maps IsVisible
     */
    public function setIsVisible(?bool $isVisible): void
    {
        $this->isVisible = $isVisible;
    }

    /**
     * Returns Product Groups.
     * List of Default product groups
     */
    public function getProductGroups(): ?string
    {
        return $this->productGroups;
    }

    /**
     * Sets Product Groups.
     * List of Default product groups
     *
     * @maps ProductGroups
     */
    public function setProductGroups(?string $productGroups): void
    {
        $this->productGroups = $productGroups;
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
        if (isset($this->id)) {
            $json['Id']            = $this->id;
        }
        if (isset($this->code)) {
            $json['Code']          = $this->code;
        }
        if (isset($this->name)) {
            $json['Name']          = $this->name;
        }
        if (isset($this->isVisible)) {
            $json['IsVisible']     = $this->isVisible;
        }
        if (isset($this->productGroups)) {
            $json['ProductGroups'] = $this->productGroups;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
