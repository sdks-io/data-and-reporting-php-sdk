<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Authentication;

use Core\Authentication\CoreAuth;
use Core\Request\Parameters\HeaderParam;
use Core\Utils\CoreHelper;

/**
 * Utility class for authorization and token management.
 */
class BasicAuthManager extends CoreAuth implements BasicAuthCredentials
{
    private $username;

    private $password;

    /**
     * Returns an instance of this class.
     *
     * @param string $username The username to use with basic authentication
     * @param string $password The password to use with basic authentication
     */
    public function __construct(string $username, string $password)
    {
        parent::__construct(
            HeaderParam::init('Authorization', CoreHelper::getBasicAuthEncodedString($username, $password))
                ->requiredNonEmpty()
        );
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * String value for username.
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * String value for password.
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $username The username to use with basic authentication
     * @param string $password The password to use with basic authentication
     */
    public function equals(string $username, string $password): bool
    {
        return $username == $this->username &&
            $password == $this->password;
    }
}
