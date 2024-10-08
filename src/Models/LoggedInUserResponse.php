<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class LoggedInUserResponse implements \JsonSerializable
{
    /**
     * @var array
     */
    private $userName = [];

    /**
     * @var array
     */
    private $displayName = [];

    /**
     * @var array
     */
    private $idMSSOID = [];

    /**
     * @var array
     */
    private $preferredLanguage = [];

    /**
     * @var bool|null
     */
    private $isSuperAdmin = false;

    /**
     * @var array
     */
    private $dateFormat = [];

    /**
     * @var array
     */
    private $timeFormat = [];

    /**
     * @var array
     */
    private $weekBegins = [];

    /**
     * @var bool|null
     */
    private $displayWeek = true;

    /**
     * @var array
     */
    private $cSVSeparator = [];

    /**
     * @var array
     */
    private $decimalSeparator = [];

    /**
     * @var array
     */
    private $reportFormat = [];

    /**
     * @var bool|null
     */
    private $hasAPIAccess = true;

    /**
     * @var Role[]|null
     */
    private $roles;

    /**
     * @var PayerAccess[]|null
     */
    private $payers;

    /**
     * @var AccountAccess[]|null
     */
    private $accounts;

    /**
     * @var ColCoAccess[]|null
     */
    private $collectingCompanies;

    /**
     * @var EIDAccess[]|null
     */
    private $eIDAccessDetails;

    /**
     * @var array
     */
    private $userClassificationBySystem = [];

    /**
     * @var array
     */
    private $userClassificationByShell = [];

    /**
     * @var array
     */
    private $payerCount = [];

    /**
     * @var array
     */
    private $accountCount = [];

    /**
     * @var array
     */
    private $cardCount = [];

    /**
     * @var ErrorStatus|null
     */
    private $error;

    /**
     * @var string|null
     */
    private $requestId;

    /**
     * Returns User Name.
     * Logged in User Identifier
     */
    public function getUserName(): ?string
    {
        if (count($this->userName) == 0) {
            return null;
        }
        return $this->userName['value'];
    }

    /**
     * Sets User Name.
     * Logged in User Identifier
     *
     * @maps UserName
     */
    public function setUserName(?string $userName): void
    {
        $this->userName['value'] = $userName;
    }

    /**
     * Unsets User Name.
     * Logged in User Identifier
     */
    public function unsetUserName(): void
    {
        $this->userName = [];
    }

    /**
     * Returns Display Name.
     * Name of the logged in user.
     */
    public function getDisplayName(): ?string
    {
        if (count($this->displayName) == 0) {
            return null;
        }
        return $this->displayName['value'];
    }

    /**
     * Sets Display Name.
     * Name of the logged in user.
     *
     * @maps DisplayName
     */
    public function setDisplayName(?string $displayName): void
    {
        $this->displayName['value'] = $displayName;
    }

    /**
     * Unsets Display Name.
     * Name of the logged in user.
     */
    public function unsetDisplayName(): void
    {
        $this->displayName = [];
    }

    /**
     * Returns Id MSSOID.
     * Single Sign On/Unique Identifier of the User in Identity Management system
     */
    public function getIdMSSOID(): ?string
    {
        if (count($this->idMSSOID) == 0) {
            return null;
        }
        return $this->idMSSOID['value'];
    }

    /**
     * Sets Id MSSOID.
     * Single Sign On/Unique Identifier of the User in Identity Management system
     *
     * @maps IdMSSOID
     */
    public function setIdMSSOID(?string $idMSSOID): void
    {
        $this->idMSSOID['value'] = $idMSSOID;
    }

    /**
     * Unsets Id MSSOID.
     * Single Sign On/Unique Identifier of the User in Identity Management system
     */
    public function unsetIdMSSOID(): void
    {
        $this->idMSSOID = [];
    }

    /**
     * Returns Preferred Language.
     * ISO culture code/ Language chosen by the logged in user
     */
    public function getPreferredLanguage(): ?string
    {
        if (count($this->preferredLanguage) == 0) {
            return null;
        }
        return $this->preferredLanguage['value'];
    }

    /**
     * Sets Preferred Language.
     * ISO culture code/ Language chosen by the logged in user
     *
     * @maps PreferredLanguage
     */
    public function setPreferredLanguage(?string $preferredLanguage): void
    {
        $this->preferredLanguage['value'] = $preferredLanguage;
    }

    /**
     * Unsets Preferred Language.
     * ISO culture code/ Language chosen by the logged in user
     */
    public function unsetPreferredLanguage(): void
    {
        $this->preferredLanguage = [];
    }

    /**
     * Returns Is Super Admin.
     * Whether the user is a super administrator
     */
    public function getIsSuperAdmin(): ?bool
    {
        return $this->isSuperAdmin;
    }

    /**
     * Sets Is Super Admin.
     * Whether the user is a super administrator
     *
     * @maps IsSuperAdmin
     */
    public function setIsSuperAdmin(?bool $isSuperAdmin): void
    {
        $this->isSuperAdmin = $isSuperAdmin;
    }

    /**
     * Returns Date Format.
     * Preferred Date format for the logged in user
     */
    public function getDateFormat(): ?string
    {
        if (count($this->dateFormat) == 0) {
            return null;
        }
        return $this->dateFormat['value'];
    }

    /**
     * Sets Date Format.
     * Preferred Date format for the logged in user
     *
     * @maps DateFormat
     */
    public function setDateFormat(?string $dateFormat): void
    {
        $this->dateFormat['value'] = $dateFormat;
    }

    /**
     * Unsets Date Format.
     * Preferred Date format for the logged in user
     */
    public function unsetDateFormat(): void
    {
        $this->dateFormat = [];
    }

    /**
     * Returns Time Format.
     * Preferred Time format for the logged in user
     */
    public function getTimeFormat(): ?string
    {
        if (count($this->timeFormat) == 0) {
            return null;
        }
        return $this->timeFormat['value'];
    }

    /**
     * Sets Time Format.
     * Preferred Time format for the logged in user
     *
     * @maps TimeFormat
     */
    public function setTimeFormat(?string $timeFormat): void
    {
        $this->timeFormat['value'] = $timeFormat;
    }

    /**
     * Unsets Time Format.
     * Preferred Time format for the logged in user
     */
    public function unsetTimeFormat(): void
    {
        $this->timeFormat = [];
    }

    /**
     * Returns Week Begins.
     * Preferred Day to Begin the Week. The value will be between 1 to 7 or null.
     */
    public function getWeekBegins(): ?int
    {
        if (count($this->weekBegins) == 0) {
            return null;
        }
        return $this->weekBegins['value'];
    }

    /**
     * Sets Week Begins.
     * Preferred Day to Begin the Week. The value will be between 1 to 7 or null.
     *
     * @maps WeekBegins
     */
    public function setWeekBegins(?int $weekBegins): void
    {
        $this->weekBegins['value'] = $weekBegins;
    }

    /**
     * Unsets Week Begins.
     * Preferred Day to Begin the Week. The value will be between 1 to 7 or null.
     */
    public function unsetWeekBegins(): void
    {
        $this->weekBegins = [];
    }

    /**
     * Returns Display Week.
     * Preferred Display Week on Fuel Prices configuration for the logged in User.
     */
    public function getDisplayWeek(): ?bool
    {
        return $this->displayWeek;
    }

    /**
     * Sets Display Week.
     * Preferred Display Week on Fuel Prices configuration for the logged in User.
     *
     * @maps DisplayWeek
     */
    public function setDisplayWeek(?bool $displayWeek): void
    {
        $this->displayWeek = $displayWeek;
    }

    /**
     * Returns C SV Separator.
     * Preferred CSV Separator for the logged in user.
     */
    public function getCSVSeparator(): ?string
    {
        if (count($this->cSVSeparator) == 0) {
            return null;
        }
        return $this->cSVSeparator['value'];
    }

    /**
     * Sets C SV Separator.
     * Preferred CSV Separator for the logged in user.
     *
     * @maps CSVSeparator
     */
    public function setCSVSeparator(?string $cSVSeparator): void
    {
        $this->cSVSeparator['value'] = $cSVSeparator;
    }

    /**
     * Unsets C SV Separator.
     * Preferred CSV Separator for the logged in user.
     */
    public function unsetCSVSeparator(): void
    {
        $this->cSVSeparator = [];
    }

    /**
     * Returns Decimal Separator.
     * Preferred Decimal separator configured for the logged in user
     * Note: - Colco default value (configured at Microservices) is returned when the user is not provided
     * or does not exist.
     */
    public function getDecimalSeparator(): ?string
    {
        if (count($this->decimalSeparator) == 0) {
            return null;
        }
        return $this->decimalSeparator['value'];
    }

    /**
     * Sets Decimal Separator.
     * Preferred Decimal separator configured for the logged in user
     * Note: - Colco default value (configured at Microservices) is returned when the user is not provided
     * or does not exist.
     *
     * @maps DecimalSeparator
     */
    public function setDecimalSeparator(?string $decimalSeparator): void
    {
        $this->decimalSeparator['value'] = $decimalSeparator;
    }

    /**
     * Unsets Decimal Separator.
     * Preferred Decimal separator configured for the logged in user
     * Note: - Colco default value (configured at Microservices) is returned when the user is not provided
     * or does not exist.
     */
    public function unsetDecimalSeparator(): void
    {
        $this->decimalSeparator = [];
    }

    /**
     * Returns Report Format.
     * Preferred report format configured for the logged in user
     */
    public function getReportFormat(): ?string
    {
        if (count($this->reportFormat) == 0) {
            return null;
        }
        return $this->reportFormat['value'];
    }

    /**
     * Sets Report Format.
     * Preferred report format configured for the logged in user
     *
     * @maps ReportFormat
     */
    public function setReportFormat(?string $reportFormat): void
    {
        $this->reportFormat['value'] = $reportFormat;
    }

    /**
     * Unsets Report Format.
     * Preferred report format configured for the logged in user
     */
    public function unsetReportFormat(): void
    {
        $this->reportFormat = [];
    }

    /**
     * Returns Has API Access.
     * True/False
     * True, if user has access to the requested API. This is validated based on the role Vs API access
     * matrix and client Vs API access matrix.
     */
    public function getHasAPIAccess(): ?bool
    {
        return $this->hasAPIAccess;
    }

    /**
     * Sets Has API Access.
     * True/False
     * True, if user has access to the requested API. This is validated based on the role Vs API access
     * matrix and client Vs API access matrix.
     *
     * @maps HasAPIAccess
     */
    public function setHasAPIAccess(?bool $hasAPIAccess): void
    {
        $this->hasAPIAccess = $hasAPIAccess;
    }

    /**
     * Returns Roles.
     * List of roles the user have access to
     *
     * @return Role[]|null
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }

    /**
     * Sets Roles.
     * List of roles the user have access to
     *
     * @maps Roles
     *
     * @param Role[]|null $roles
     */
    public function setRoles(?array $roles): void
    {
        $this->roles = $roles;
    }

    /**
     * Returns Payers.
     * List of payers which the user has access to.
     * •    It will return 250 payers only and it is configurable. If the user has more than that, the
     * remaining will be ignored.
     * •    The payer which is marked as default will be the first item in the output.
     *
     *
     * Note: This list will be empty for users mapped with roles which has either IsShellAdmin or
     * IsServiceAccount set to true as their access level is controlled at ColCo level only.
     *
     * @return PayerAccess[]|null
     */
    public function getPayers(): ?array
    {
        return $this->payers;
    }

    /**
     * Sets Payers.
     * List of payers which the user has access to.
     * •    It will return 250 payers only and it is configurable. If the user has more than that, the
     * remaining will be ignored.
     * •    The payer which is marked as default will be the first item in the output.
     *
     *
     * Note: This list will be empty for users mapped with roles which has either IsShellAdmin or
     * IsServiceAccount set to true as their access level is controlled at ColCo level only.
     *
     * @maps Payers
     *
     * @param PayerAccess[]|null $payers
     */
    public function setPayers(?array $payers): void
    {
        $this->payers = $payers;
    }

    /**
     * Returns Accounts.
     * List of accounts which the user has access to.
     * Note: This list will be empty for users mapped with roles which has either IsCustomerAdmin,
     * IsShellAdmin or IsServiceAccount set to true as their access level is controller at either ColCo or
     * payer level only.
     *
     * @return AccountAccess[]|null
     */
    public function getAccounts(): ?array
    {
        return $this->accounts;
    }

    /**
     * Sets Accounts.
     * List of accounts which the user has access to.
     * Note: This list will be empty for users mapped with roles which has either IsCustomerAdmin,
     * IsShellAdmin or IsServiceAccount set to true as their access level is controller at either ColCo or
     * payer level only.
     *
     * @maps Accounts
     *
     * @param AccountAccess[]|null $accounts
     */
    public function setAccounts(?array $accounts): void
    {
        $this->accounts = $accounts;
    }

    /**
     * Returns Collecting Companies.
     * List of collecting companies to which the user has access to
     *
     * Note: This list will be empty for users mapped with roles which has either IsCustomerAdmin or
     * IsCustomerUser set to true as their access level is controller at Payer or Account level.
     *
     * @return ColCoAccess[]|null
     */
    public function getCollectingCompanies(): ?array
    {
        return $this->collectingCompanies;
    }

    /**
     * Sets Collecting Companies.
     * List of collecting companies to which the user has access to
     *
     * Note: This list will be empty for users mapped with roles which has either IsCustomerAdmin or
     * IsCustomerUser set to true as their access level is controller at Payer or Account level.
     *
     * @maps CollectingCompanies
     *
     * @param ColCoAccess[]|null $collectingCompanies
     */
    public function setCollectingCompanies(?array $collectingCompanies): void
    {
        $this->collectingCompanies = $collectingCompanies;
    }

    /**
     * Returns E ID Access Details.
     * List of Electronic Invoice Data configured for the user.
     * Note: This list will be empty if the value of EIDDetails is set to false or empty in the request.
     *
     * @return EIDAccess[]|null
     */
    public function getEIDAccessDetails(): ?array
    {
        return $this->eIDAccessDetails;
    }

    /**
     * Sets E ID Access Details.
     * List of Electronic Invoice Data configured for the user.
     * Note: This list will be empty if the value of EIDDetails is set to false or empty in the request.
     *
     * @maps EIDAccessDetails
     *
     * @param EIDAccess[]|null $eIDAccessDetails
     */
    public function setEIDAccessDetails(?array $eIDAccessDetails): void
    {
        $this->eIDAccessDetails = $eIDAccessDetails;
    }

    /**
     * Returns User Classification by System.
     * User classification by system.
     */
    public function getUserClassificationBySystem(): ?string
    {
        if (count($this->userClassificationBySystem) == 0) {
            return null;
        }
        return $this->userClassificationBySystem['value'];
    }

    /**
     * Sets User Classification by System.
     * User classification by system.
     *
     * @maps UserClassificationBySystem
     */
    public function setUserClassificationBySystem(?string $userClassificationBySystem): void
    {
        $this->userClassificationBySystem['value'] = $userClassificationBySystem;
    }

    /**
     * Unsets User Classification by System.
     * User classification by system.
     */
    public function unsetUserClassificationBySystem(): void
    {
        $this->userClassificationBySystem = [];
    }

    /**
     * Returns User Classification by Shell.
     * User classification by Shell.
     */
    public function getUserClassificationByShell(): ?string
    {
        if (count($this->userClassificationByShell) == 0) {
            return null;
        }
        return $this->userClassificationByShell['value'];
    }

    /**
     * Sets User Classification by Shell.
     * User classification by Shell.
     *
     * @maps UserClassificationByShell
     */
    public function setUserClassificationByShell(?string $userClassificationByShell): void
    {
        $this->userClassificationByShell['value'] = $userClassificationByShell;
    }

    /**
     * Unsets User Classification by Shell.
     * User classification by Shell.
     */
    public function unsetUserClassificationByShell(): void
    {
        $this->userClassificationByShell = [];
    }

    /**
     * Returns Payer Count.
     * Count of payers accessible to the user at the time when user was created or last updated.
     *
     * Note:
     *
     * Count may vary based on customer operations hence it may not be an up to date value.
     */
    public function getPayerCount(): ?int
    {
        if (count($this->payerCount) == 0) {
            return null;
        }
        return $this->payerCount['value'];
    }

    /**
     * Sets Payer Count.
     * Count of payers accessible to the user at the time when user was created or last updated.
     *
     * Note:
     *
     * Count may vary based on customer operations hence it may not be an up to date value.
     *
     * @maps PayerCount
     */
    public function setPayerCount(?int $payerCount): void
    {
        $this->payerCount['value'] = $payerCount;
    }

    /**
     * Unsets Payer Count.
     * Count of payers accessible to the user at the time when user was created or last updated.
     *
     * Note:
     *
     * Count may vary based on customer operations hence it may not be an up to date value.
     */
    public function unsetPayerCount(): void
    {
        $this->payerCount = [];
    }

    /**
     * Returns Account Count.
     * Count of accounts at the time when the user was created or last updated.
     *
     * Note:
     *
     * Count may vary based on customer operations hence it may not be an up to date value.
     */
    public function getAccountCount(): ?int
    {
        if (count($this->accountCount) == 0) {
            return null;
        }
        return $this->accountCount['value'];
    }

    /**
     * Sets Account Count.
     * Count of accounts at the time when the user was created or last updated.
     *
     * Note:
     *
     * Count may vary based on customer operations hence it may not be an up to date value.
     *
     * @maps AccountCount
     */
    public function setAccountCount(?int $accountCount): void
    {
        $this->accountCount['value'] = $accountCount;
    }

    /**
     * Unsets Account Count.
     * Count of accounts at the time when the user was created or last updated.
     *
     * Note:
     *
     * Count may vary based on customer operations hence it may not be an up to date value.
     */
    public function unsetAccountCount(): void
    {
        $this->accountCount = [];
    }

    /**
     * Returns Card Count.
     * Count of cards at the time when the user was created or last updated.
     *
     * Note:
     *
     * Count may vary based on customer operations hence it may not be an up to date value.
     */
    public function getCardCount(): ?int
    {
        if (count($this->cardCount) == 0) {
            return null;
        }
        return $this->cardCount['value'];
    }

    /**
     * Sets Card Count.
     * Count of cards at the time when the user was created or last updated.
     *
     * Note:
     *
     * Count may vary based on customer operations hence it may not be an up to date value.
     *
     * @maps CardCount
     */
    public function setCardCount(?int $cardCount): void
    {
        $this->cardCount['value'] = $cardCount;
    }

    /**
     * Unsets Card Count.
     * Count of cards at the time when the user was created or last updated.
     *
     * Note:
     *
     * Count may vary based on customer operations hence it may not be an up to date value.
     */
    public function unsetCardCount(): void
    {
        $this->cardCount = [];
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
     * Returns Request Id.
     * Request Id of the API call
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * Sets Request Id.
     * Request Id of the API call
     *
     * @maps RequestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId = $requestId;
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
        if (!empty($this->userName)) {
            $json['UserName']                   = $this->userName['value'];
        }
        if (!empty($this->displayName)) {
            $json['DisplayName']                = $this->displayName['value'];
        }
        if (!empty($this->idMSSOID)) {
            $json['IdMSSOID']                   = $this->idMSSOID['value'];
        }
        if (!empty($this->preferredLanguage)) {
            $json['PreferredLanguage']          = $this->preferredLanguage['value'];
        }
        if (isset($this->isSuperAdmin)) {
            $json['IsSuperAdmin']               = $this->isSuperAdmin;
        }
        if (!empty($this->dateFormat)) {
            $json['DateFormat']                 = $this->dateFormat['value'];
        }
        if (!empty($this->timeFormat)) {
            $json['TimeFormat']                 = $this->timeFormat['value'];
        }
        if (!empty($this->weekBegins)) {
            $json['WeekBegins']                 = $this->weekBegins['value'];
        }
        if (isset($this->displayWeek)) {
            $json['DisplayWeek']                = $this->displayWeek;
        }
        if (!empty($this->cSVSeparator)) {
            $json['CSVSeparator']               = $this->cSVSeparator['value'];
        }
        if (!empty($this->decimalSeparator)) {
            $json['DecimalSeparator']           = $this->decimalSeparator['value'];
        }
        if (!empty($this->reportFormat)) {
            $json['ReportFormat']               = $this->reportFormat['value'];
        }
        if (isset($this->hasAPIAccess)) {
            $json['HasAPIAccess']               = $this->hasAPIAccess;
        }
        if (isset($this->roles)) {
            $json['Roles']                      = $this->roles;
        }
        if (isset($this->payers)) {
            $json['Payers']                     = $this->payers;
        }
        if (isset($this->accounts)) {
            $json['Accounts']                   = $this->accounts;
        }
        if (isset($this->collectingCompanies)) {
            $json['CollectingCompanies']        = $this->collectingCompanies;
        }
        if (isset($this->eIDAccessDetails)) {
            $json['EIDAccessDetails']           = $this->eIDAccessDetails;
        }
        if (!empty($this->userClassificationBySystem)) {
            $json['UserClassificationBySystem'] = $this->userClassificationBySystem['value'];
        }
        if (!empty($this->userClassificationByShell)) {
            $json['UserClassificationByShell']  = $this->userClassificationByShell['value'];
        }
        if (!empty($this->payerCount)) {
            $json['PayerCount']                 = $this->payerCount['value'];
        }
        if (!empty($this->accountCount)) {
            $json['AccountCount']               = $this->accountCount['value'];
        }
        if (!empty($this->cardCount)) {
            $json['CardCount']                  = $this->cardCount['value'];
        }
        if (isset($this->error)) {
            $json['Error']                      = $this->error;
        }
        if (isset($this->requestId)) {
            $json['RequestId']                  = $this->requestId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
