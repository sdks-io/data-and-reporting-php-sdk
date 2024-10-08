<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

/**
 * Geography Location entity for Site Location
 */
class ExceptionSiteLocation implements \JsonSerializable
{
    /**
     * @var array
     */
    private $lat = [];

    /**
     * @var array
     */
    private $lng = [];

    /**
     * Returns Lat.
     * Latitude for the Site Geographic Location
     */
    public function getLat(): ?string
    {
        if (count($this->lat) == 0) {
            return null;
        }
        return $this->lat['value'];
    }

    /**
     * Sets Lat.
     * Latitude for the Site Geographic Location
     *
     * @maps Lat
     */
    public function setLat(?string $lat): void
    {
        $this->lat['value'] = $lat;
    }

    /**
     * Unsets Lat.
     * Latitude for the Site Geographic Location
     */
    public function unsetLat(): void
    {
        $this->lat = [];
    }

    /**
     * Returns Lng.
     * Longitude for the Site Geographic Location
     */
    public function getLng(): ?string
    {
        if (count($this->lng) == 0) {
            return null;
        }
        return $this->lng['value'];
    }

    /**
     * Sets Lng.
     * Longitude for the Site Geographic Location
     *
     * @maps Lng
     */
    public function setLng(?string $lng): void
    {
        $this->lng['value'] = $lng;
    }

    /**
     * Unsets Lng.
     * Longitude for the Site Geographic Location
     */
    public function unsetLng(): void
    {
        $this->lng = [];
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
        if (!empty($this->lat)) {
            $json['Lat'] = $this->lat['value'];
        }
        if (!empty($this->lng)) {
            $json['Lng'] = $this->lng['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
