<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Exceptions;

class FleetmanagementV2CustomerCardtype401ErrorException extends ApiException
{
    /**
     * @var \ShellDataReportingAPIsLib\Models\Fault|null
     */
    private $fault;

    /**
     * Returns Fault.
     */
    public function getFault(): ?\ShellDataReportingAPIsLib\Models\Fault
    {
        return $this->fault;
    }

    /**
     * Sets Fault.
     *
     * @maps fault
     */
    public function setFault(?\ShellDataReportingAPIsLib\Models\Fault $fault): void
    {
        $this->fault = $fault;
    }
}
