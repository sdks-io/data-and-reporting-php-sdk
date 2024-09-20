<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Models;

use stdClass;

class CardTypeResponseCustomerCardTypesItems implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $canHavePIN;

    /**
     * @var array
     */
    private $cardTypeId = [];

    /**
     * @var array
     */
    private $cardTypeName = [];

    /**
     * @var array
     */
    private $colCoCurrencyCode = [];

    /**
     * @var array
     */
    private $customerCardTypeId = [];

    /**
     * @var CardDayTimeRestrictions|null
     */
    private $dayTimeRestrictions;

    /**
     * @var array
     */
    private $defaultPurchaseCategoryId = [];

    /**
     * @var array
     */
    private $embossAccountName = [];

    /**
     * @var array
     */
    private $expiryPeriod = [];

    /**
     * @var bool|null
     */
    private $isCRT;

    /**
     * @var bool|null
     */
    private $isFleet;

    /**
     * @var bool|null
     */
    private $isInternational;

    /**
     * @var bool|null
     */
    private $isNational;

    /**
     * @var bool|null
     */
    private $isPartnerSitesIncluded;

    /**
     * @var bool|null
     */
    private $isShellSitesOnly;

    /**
     * @var bool|null
     */
    private $isVirtual;

    /**
     * @var bool|null
     */
    private $isVisibleToCustomers;

    /**
     * @var bool|null
     */
    private $isActive;

    /**
     * @var bool|null
     */
    private $isCardAvailableForDownload;

    /**
     * @var bool|null
     */
    private $isCardVisibleToCustomers;

    /**
     * @var array
     */
    private $pANLength = [];

    /**
     * @var array
     */
    private $purchaseCategories = [];

    /**
     * @var array
     */
    private $tokenTypeId = [];

    /**
     * @var array
     */
    private $tokenTypeName = [];

    /**
     * @var CardUsageRestrictions|null
     */
    private $usageRestrictions;

    /**
     * @var bool|null
     */
    private $eMVContactless;

    /**
     * @var bool|null
     */
    private $rFID;

    /**
     * @var bool|null
     */
    private $pINChangeSupported;

    /**
     * @var bool|null
     */
    private $requirePIN;

    /**
     * @var bool|null
     */
    private $offlinePIN;

    /**
     * @var bool|null
     */
    private $isDefault;

    /**
     * @var bool|null
     */
    private $applicationsToShowNPIITokens;

    /**
     * @var array
     */
    private $mediumTypeID = [];

    /**
     * @var array
     */
    private $mediumType = [];

    /**
     * @var array
     */
    private $colCoCurrencySymbol = [];

    /**
     * Returns Can Have PIN.
     * True/False – Whether the cards of this card type can have PIN.
     */
    public function getCanHavePIN(): ?bool
    {
        return $this->canHavePIN;
    }

    /**
     * Sets Can Have PIN.
     * True/False – Whether the cards of this card type can have PIN.
     *
     * @maps CanHavePIN
     */
    public function setCanHavePIN(?bool $canHavePIN): void
    {
        $this->canHavePIN = $canHavePIN;
    }

    /**
     * Returns Card Type Id.
     * Card Type Id
     */
    public function getCardTypeId(): ?int
    {
        if (count($this->cardTypeId) == 0) {
            return null;
        }
        return $this->cardTypeId['value'];
    }

    /**
     * Sets Card Type Id.
     * Card Type Id
     *
     * @maps CardTypeId
     */
    public function setCardTypeId(?int $cardTypeId): void
    {
        $this->cardTypeId['value'] = $cardTypeId;
    }

    /**
     * Unsets Card Type Id.
     * Card Type Id
     */
    public function unsetCardTypeId(): void
    {
        $this->cardTypeId = [];
    }

    /**
     * Returns Card Type Name.
     * Card Type Name.
     */
    public function getCardTypeName(): ?string
    {
        if (count($this->cardTypeName) == 0) {
            return null;
        }
        return $this->cardTypeName['value'];
    }

    /**
     * Sets Card Type Name.
     * Card Type Name.
     *
     * @maps CardTypeName
     */
    public function setCardTypeName(?string $cardTypeName): void
    {
        $this->cardTypeName['value'] = $cardTypeName;
    }

    /**
     * Unsets Card Type Name.
     * Card Type Name.
     */
    public function unsetCardTypeName(): void
    {
        $this->cardTypeName = [];
    }

    /**
     * Returns Col Co Currency Code.
     * ISO currency code of the country.
     */
    public function getColCoCurrencyCode(): ?string
    {
        if (count($this->colCoCurrencyCode) == 0) {
            return null;
        }
        return $this->colCoCurrencyCode['value'];
    }

    /**
     * Sets Col Co Currency Code.
     * ISO currency code of the country.
     *
     * @maps ColCoCurrencyCode
     */
    public function setColCoCurrencyCode(?string $colCoCurrencyCode): void
    {
        $this->colCoCurrencyCode['value'] = $colCoCurrencyCode;
    }

    /**
     * Unsets Col Co Currency Code.
     * ISO currency code of the country.
     */
    public function unsetColCoCurrencyCode(): void
    {
        $this->colCoCurrencyCode = [];
    }

    /**
     * Returns Customer Card Type Id.
     * Customer Card Type Id
     */
    public function getCustomerCardTypeId(): ?int
    {
        if (count($this->customerCardTypeId) == 0) {
            return null;
        }
        return $this->customerCardTypeId['value'];
    }

    /**
     * Sets Customer Card Type Id.
     * Customer Card Type Id
     *
     * @maps CustomerCardTypeId
     */
    public function setCustomerCardTypeId(?int $customerCardTypeId): void
    {
        $this->customerCardTypeId['value'] = $customerCardTypeId;
    }

    /**
     * Unsets Customer Card Type Id.
     * Customer Card Type Id
     */
    public function unsetCustomerCardTypeId(): void
    {
        $this->customerCardTypeId = [];
    }

    /**
     * Returns Day Time Restrictions.
     */
    public function getDayTimeRestrictions(): ?CardDayTimeRestrictions
    {
        return $this->dayTimeRestrictions;
    }

    /**
     * Sets Day Time Restrictions.
     *
     * @maps DayTimeRestrictions
     */
    public function setDayTimeRestrictions(?CardDayTimeRestrictions $dayTimeRestrictions): void
    {
        $this->dayTimeRestrictions = $dayTimeRestrictions;
    }

    /**
     * Returns Default Purchase Category Id.
     * Default Purchase category of the card type.
     */
    public function getDefaultPurchaseCategoryId(): ?int
    {
        if (count($this->defaultPurchaseCategoryId) == 0) {
            return null;
        }
        return $this->defaultPurchaseCategoryId['value'];
    }

    /**
     * Sets Default Purchase Category Id.
     * Default Purchase category of the card type.
     *
     * @maps DefaultPurchaseCategoryId
     */
    public function setDefaultPurchaseCategoryId(?int $defaultPurchaseCategoryId): void
    {
        $this->defaultPurchaseCategoryId['value'] = $defaultPurchaseCategoryId;
    }

    /**
     * Unsets Default Purchase Category Id.
     * Default Purchase category of the card type.
     */
    public function unsetDefaultPurchaseCategoryId(): void
    {
        $this->defaultPurchaseCategoryId = [];
    }

    /**
     * Returns Emboss Account Name.
     * Default Name to be embossed on the card
     */
    public function getEmbossAccountName(): ?string
    {
        if (count($this->embossAccountName) == 0) {
            return null;
        }
        return $this->embossAccountName['value'];
    }

    /**
     * Sets Emboss Account Name.
     * Default Name to be embossed on the card
     *
     * @maps EmbossAccountName
     */
    public function setEmbossAccountName(?string $embossAccountName): void
    {
        $this->embossAccountName['value'] = $embossAccountName;
    }

    /**
     * Unsets Emboss Account Name.
     * Default Name to be embossed on the card
     */
    public function unsetEmbossAccountName(): void
    {
        $this->embossAccountName = [];
    }

    /**
     * Returns Expiry Period.
     * Default Expiry period.
     */
    public function getExpiryPeriod(): ?int
    {
        if (count($this->expiryPeriod) == 0) {
            return null;
        }
        return $this->expiryPeriod['value'];
    }

    /**
     * Sets Expiry Period.
     * Default Expiry period.
     *
     * @maps ExpiryPeriod
     */
    public function setExpiryPeriod(?int $expiryPeriod): void
    {
        $this->expiryPeriod['value'] = $expiryPeriod;
    }

    /**
     * Unsets Expiry Period.
     * Default Expiry period.
     */
    public function unsetExpiryPeriod(): void
    {
        $this->expiryPeriod = [];
    }

    /**
     * Returns Is CRT.
     * True/False – Wether it is a CRT Card type or not.
     */
    public function getIsCRT(): ?bool
    {
        return $this->isCRT;
    }

    /**
     * Sets Is CRT.
     * True/False – Wether it is a CRT Card type or not.
     *
     * @maps IsCRT
     */
    public function setIsCRT(?bool $isCRT): void
    {
        $this->isCRT = $isCRT;
    }

    /**
     * Returns Is Fleet.
     * True/False – Whether it is it a Fleet Card typeor not.
     */
    public function getIsFleet(): ?bool
    {
        return $this->isFleet;
    }

    /**
     * Sets Is Fleet.
     * True/False – Whether it is it a Fleet Card typeor not.
     *
     * @maps IsFleet
     */
    public function setIsFleet(?bool $isFleet): void
    {
        $this->isFleet = $isFleet;
    }

    /**
     * Returns Is International.
     * True/False – Whether it is an International Card type or not.
     */
    public function getIsInternational(): ?bool
    {
        return $this->isInternational;
    }

    /**
     * Sets Is International.
     * True/False – Whether it is an International Card type or not.
     *
     * @maps IsInternational
     */
    public function setIsInternational(?bool $isInternational): void
    {
        $this->isInternational = $isInternational;
    }

    /**
     * Returns Is National.
     * True/False – Whether it is a National Card type or not.
     */
    public function getIsNational(): ?bool
    {
        return $this->isNational;
    }

    /**
     * Sets Is National.
     * True/False – Whether it is a National Card type or not.
     *
     * @maps IsNational
     */
    public function setIsNational(?bool $isNational): void
    {
        $this->isNational = $isNational;
    }

    /**
     * Returns Is Partner Sites Included.
     * True/False – Whether this card type is allowed in partner Stations.
     */
    public function getIsPartnerSitesIncluded(): ?bool
    {
        return $this->isPartnerSitesIncluded;
    }

    /**
     * Sets Is Partner Sites Included.
     * True/False – Whether this card type is allowed in partner Stations.
     *
     * @maps IsPartnerSitesIncluded
     */
    public function setIsPartnerSitesIncluded(?bool $isPartnerSitesIncluded): void
    {
        $this->isPartnerSitesIncluded = $isPartnerSitesIncluded;
    }

    /**
     * Returns Is Shell Sites Only.
     * True/False – Whether it is only allowed in Shell Stations or not.
     */
    public function getIsShellSitesOnly(): ?bool
    {
        return $this->isShellSitesOnly;
    }

    /**
     * Sets Is Shell Sites Only.
     * True/False – Whether it is only allowed in Shell Stations or not.
     *
     * @maps IsShellSitesOnly
     */
    public function setIsShellSitesOnly(?bool $isShellSitesOnly): void
    {
        $this->isShellSitesOnly = $isShellSitesOnly;
    }

    /**
     * Returns Is Virtual.
     * True/False - Whether it is a Virtual Card type or not.
     */
    public function getIsVirtual(): ?bool
    {
        return $this->isVirtual;
    }

    /**
     * Sets Is Virtual.
     * True/False - Whether it is a Virtual Card type or not.
     *
     * @maps IsVirtual
     */
    public function setIsVirtual(?bool $isVirtual): void
    {
        $this->isVirtual = $isVirtual;
    }

    /**
     * Returns Is Visible to Customers.
     * True/False – Whether this card type is visible in SFH for card ordering.
     */
    public function getIsVisibleToCustomers(): ?bool
    {
        return $this->isVisibleToCustomers;
    }

    /**
     * Sets Is Visible to Customers.
     * True/False – Whether this card type is visible in SFH for card ordering.
     *
     * @maps IsVisibleToCustomers
     */
    public function setIsVisibleToCustomers(?bool $isVisibleToCustomers): void
    {
        $this->isVisibleToCustomers = $isVisibleToCustomers;
    }

    /**
     * Returns Is Active.
     * Whether card type is active or not.
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * Sets Is Active.
     * Whether card type is active or not.
     *
     * @maps IsActive
     */
    public function setIsActive(?bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * Returns Is Card Available for Download.
     */
    public function getIsCardAvailableForDownload(): ?bool
    {
        return $this->isCardAvailableForDownload;
    }

    /**
     * Sets Is Card Available for Download.
     *
     * @maps IsCardAvailableForDownload
     */
    public function setIsCardAvailableForDownload(?bool $isCardAvailableForDownload): void
    {
        $this->isCardAvailableForDownload = $isCardAvailableForDownload;
    }

    /**
     * Returns Is Card Visible to Customers.
     */
    public function getIsCardVisibleToCustomers(): ?bool
    {
        return $this->isCardVisibleToCustomers;
    }

    /**
     * Sets Is Card Visible to Customers.
     *
     * @maps IsCardVisibleToCustomers
     */
    public function setIsCardVisibleToCustomers(?bool $isCardVisibleToCustomers): void
    {
        $this->isCardVisibleToCustomers = $isCardVisibleToCustomers;
    }

    /**
     * Returns P an Length.
     * PAN Length
     */
    public function getPANLength(): ?int
    {
        if (count($this->pANLength) == 0) {
            return null;
        }
        return $this->pANLength['value'];
    }

    /**
     * Sets P an Length.
     * PAN Length
     *
     * @maps PANLength
     */
    public function setPANLength(?int $pANLength): void
    {
        $this->pANLength['value'] = $pANLength;
    }

    /**
     * Unsets P an Length.
     * PAN Length
     */
    public function unsetPANLength(): void
    {
        $this->pANLength = [];
    }

    /**
     * Returns Purchase Categories.
     *
     * @return PurchaseCategories[]|null
     */
    public function getPurchaseCategories(): ?array
    {
        if (count($this->purchaseCategories) == 0) {
            return null;
        }
        return $this->purchaseCategories['value'];
    }

    /**
     * Sets Purchase Categories.
     *
     * @maps PurchaseCategories
     *
     * @param PurchaseCategories[]|null $purchaseCategories
     */
    public function setPurchaseCategories(?array $purchaseCategories): void
    {
        $this->purchaseCategories['value'] = $purchaseCategories;
    }

    /**
     * Unsets Purchase Categories.
     */
    public function unsetPurchaseCategories(): void
    {
        $this->purchaseCategories = [];
    }

    /**
     * Returns Token Type Id.
     * Token type identifier.
     */
    public function getTokenTypeId(): ?int
    {
        if (count($this->tokenTypeId) == 0) {
            return null;
        }
        return $this->tokenTypeId['value'];
    }

    /**
     * Sets Token Type Id.
     * Token type identifier.
     *
     * @maps TokenTypeId
     */
    public function setTokenTypeId(?int $tokenTypeId): void
    {
        $this->tokenTypeId['value'] = $tokenTypeId;
    }

    /**
     * Unsets Token Type Id.
     * Token type identifier.
     */
    public function unsetTokenTypeId(): void
    {
        $this->tokenTypeId = [];
    }

    /**
     * Returns Token Type Name.
     * Token Type Name.
     */
    public function getTokenTypeName(): ?string
    {
        if (count($this->tokenTypeName) == 0) {
            return null;
        }
        return $this->tokenTypeName['value'];
    }

    /**
     * Sets Token Type Name.
     * Token Type Name.
     *
     * @maps TokenTypeName
     */
    public function setTokenTypeName(?string $tokenTypeName): void
    {
        $this->tokenTypeName['value'] = $tokenTypeName;
    }

    /**
     * Unsets Token Type Name.
     * Token Type Name.
     */
    public function unsetTokenTypeName(): void
    {
        $this->tokenTypeName = [];
    }

    /**
     * Returns Usage Restrictions.
     */
    public function getUsageRestrictions(): ?CardUsageRestrictions
    {
        return $this->usageRestrictions;
    }

    /**
     * Sets Usage Restrictions.
     *
     * @maps UsageRestrictions
     */
    public function setUsageRestrictions(?CardUsageRestrictions $usageRestrictions): void
    {
        $this->usageRestrictions = $usageRestrictions;
    }

    /**
     * Returns E MV Contactless.
     * Is Europay, MasterCard, and Visa Contactless enabled or not
     */
    public function getEMVContactless(): ?bool
    {
        return $this->eMVContactless;
    }

    /**
     * Sets E MV Contactless.
     * Is Europay, MasterCard, and Visa Contactless enabled or not
     *
     * @maps EMVContactless
     */
    public function setEMVContactless(?bool $eMVContactless): void
    {
        $this->eMVContactless = $eMVContactless;
    }

    /**
     * Returns R FID.
     * Whether the card type is enabled for RFID (Radio Frequency Identification)
     */
    public function getRFID(): ?bool
    {
        return $this->rFID;
    }

    /**
     * Sets R FID.
     * Whether the card type is enabled for RFID (Radio Frequency Identification)
     *
     * @maps RFID
     */
    public function setRFID(?bool $rFID): void
    {
        $this->rFID = $rFID;
    }

    /**
     * Returns P in Change Supported.
     * PIN change supported or not.
     */
    public function getPINChangeSupported(): ?bool
    {
        return $this->pINChangeSupported;
    }

    /**
     * Sets P in Change Supported.
     * PIN change supported or not.
     *
     * @maps PINChangeSupported
     */
    public function setPINChangeSupported(?bool $pINChangeSupported): void
    {
        $this->pINChangeSupported = $pINChangeSupported;
    }

    /**
     * Returns Require PIN.
     * Whether a PIN is mandatory for the cards of this card type.
     */
    public function getRequirePIN(): ?bool
    {
        return $this->requirePIN;
    }

    /**
     * Sets Require PIN.
     * Whether a PIN is mandatory for the cards of this card type.
     *
     * @maps RequirePIN
     */
    public function setRequirePIN(?bool $requirePIN): void
    {
        $this->requirePIN = $requirePIN;
    }

    /**
     * Returns Offline PIN.
     * Whether offline PIN is enabled or not.
     */
    public function getOfflinePIN(): ?bool
    {
        return $this->offlinePIN;
    }

    /**
     * Sets Offline PIN.
     * Whether offline PIN is enabled or not.
     *
     * @maps OfflinePIN
     */
    public function setOfflinePIN(?bool $offlinePIN): void
    {
        $this->offlinePIN = $offlinePIN;
    }

    /**
     * Returns Is Default.
     * Whether card type is default or not.
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    /**
     * Sets Is Default.
     * Whether card type is default or not.
     *
     * @maps IsDefault
     */
    public function setIsDefault(?bool $isDefault): void
    {
        $this->isDefault = $isDefault;
    }

    /**
     * Returns Applications to Show NPII Tokens.
     * True/False
     *
     * Note: ApplicationsToShowNPIITokens will be set as ‘True’ when the accessing application API key
     * exists in the “ApplicationsToShowNPIITokens” card type configuration else “False”.
     */
    public function getApplicationsToShowNPIITokens(): ?bool
    {
        return $this->applicationsToShowNPIITokens;
    }

    /**
     * Sets Applications to Show NPII Tokens.
     * True/False
     *
     * Note: ApplicationsToShowNPIITokens will be set as ‘True’ when the accessing application API key
     * exists in the “ApplicationsToShowNPIITokens” card type configuration else “False”.
     *
     * @maps ApplicationsToShowNPIITokens
     */
    public function setApplicationsToShowNPIITokens(?bool $applicationsToShowNPIITokens): void
    {
        $this->applicationsToShowNPIITokens = $applicationsToShowNPIITokens;
    }

    /**
     * Returns Medium Type ID.
     * Id of the medium type identifier.
     * Example: 1,2,4
     *
     *
     * Full list below:
     * 1 - Fuel Card
     * 2 - Fuel Card with EV
     * 3 - EV only
     * 4 - Fuel Card and Key Fob
     * 5 - Key Fob
     * 6 - Virtual Card
     * 7 - NPII Token
     * 8 – Smartpay Token
     */
    public function getMediumTypeID(): ?int
    {
        if (count($this->mediumTypeID) == 0) {
            return null;
        }
        return $this->mediumTypeID['value'];
    }

    /**
     * Sets Medium Type ID.
     * Id of the medium type identifier.
     * Example: 1,2,4
     *
     *
     * Full list below:
     * 1 - Fuel Card
     * 2 - Fuel Card with EV
     * 3 - EV only
     * 4 - Fuel Card and Key Fob
     * 5 - Key Fob
     * 6 - Virtual Card
     * 7 - NPII Token
     * 8 – Smartpay Token
     *
     * @maps MediumTypeID
     */
    public function setMediumTypeID(?int $mediumTypeID): void
    {
        $this->mediumTypeID['value'] = $mediumTypeID;
    }

    /**
     * Unsets Medium Type ID.
     * Id of the medium type identifier.
     * Example: 1,2,4
     *
     *
     * Full list below:
     * 1 - Fuel Card
     * 2 - Fuel Card with EV
     * 3 - EV only
     * 4 - Fuel Card and Key Fob
     * 5 - Key Fob
     * 6 - Virtual Card
     * 7 - NPII Token
     * 8 – Smartpay Token
     */
    public function unsetMediumTypeID(): void
    {
        $this->mediumTypeID = [];
    }

    /**
     * Returns Medium Type.
     * Name of the medium type identifier.
     *
     * Example: Fuel Card, Fuel Card with EV, Key Fob
     *
     *
     *
     * Full list below:
     *
     * 1 - Fuel Card
     *
     * 2 - Fuel Card with EV
     *
     * 3 - EV only
     *
     * 4 - Fuel Card and Key Fob
     *
     * 5 - Key Fob
     *
     * 6 - Virtual Card
     *
     * 7 - NPII Token
     *
     * 8 - Smartpay Token
     */
    public function getMediumType(): ?string
    {
        if (count($this->mediumType) == 0) {
            return null;
        }
        return $this->mediumType['value'];
    }

    /**
     * Sets Medium Type.
     * Name of the medium type identifier.
     *
     * Example: Fuel Card, Fuel Card with EV, Key Fob
     *
     *
     *
     * Full list below:
     *
     * 1 - Fuel Card
     *
     * 2 - Fuel Card with EV
     *
     * 3 - EV only
     *
     * 4 - Fuel Card and Key Fob
     *
     * 5 - Key Fob
     *
     * 6 - Virtual Card
     *
     * 7 - NPII Token
     *
     * 8 - Smartpay Token
     *
     * @maps MediumType
     */
    public function setMediumType(?string $mediumType): void
    {
        $this->mediumType['value'] = $mediumType;
    }

    /**
     * Unsets Medium Type.
     * Name of the medium type identifier.
     *
     * Example: Fuel Card, Fuel Card with EV, Key Fob
     *
     *
     *
     * Full list below:
     *
     * 1 - Fuel Card
     *
     * 2 - Fuel Card with EV
     *
     * 3 - EV only
     *
     * 4 - Fuel Card and Key Fob
     *
     * 5 - Key Fob
     *
     * 6 - Virtual Card
     *
     * 7 - NPII Token
     *
     * 8 - Smartpay Token
     */
    public function unsetMediumType(): void
    {
        $this->mediumType = [];
    }

    /**
     * Returns Col Co Currency Symbol.
     * Currency symbol of the country.
     */
    public function getColCoCurrencySymbol(): ?string
    {
        if (count($this->colCoCurrencySymbol) == 0) {
            return null;
        }
        return $this->colCoCurrencySymbol['value'];
    }

    /**
     * Sets Col Co Currency Symbol.
     * Currency symbol of the country.
     *
     * @maps ColCoCurrencySymbol
     */
    public function setColCoCurrencySymbol(?string $colCoCurrencySymbol): void
    {
        $this->colCoCurrencySymbol['value'] = $colCoCurrencySymbol;
    }

    /**
     * Unsets Col Co Currency Symbol.
     * Currency symbol of the country.
     */
    public function unsetColCoCurrencySymbol(): void
    {
        $this->colCoCurrencySymbol = [];
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
        if (isset($this->canHavePIN)) {
            $json['CanHavePIN']                   = $this->canHavePIN;
        }
        if (!empty($this->cardTypeId)) {
            $json['CardTypeId']                   = $this->cardTypeId['value'];
        }
        if (!empty($this->cardTypeName)) {
            $json['CardTypeName']                 = $this->cardTypeName['value'];
        }
        if (!empty($this->colCoCurrencyCode)) {
            $json['ColCoCurrencyCode']            = $this->colCoCurrencyCode['value'];
        }
        if (!empty($this->customerCardTypeId)) {
            $json['CustomerCardTypeId']           = $this->customerCardTypeId['value'];
        }
        if (isset($this->dayTimeRestrictions)) {
            $json['DayTimeRestrictions']          = $this->dayTimeRestrictions;
        }
        if (!empty($this->defaultPurchaseCategoryId)) {
            $json['DefaultPurchaseCategoryId']    = $this->defaultPurchaseCategoryId['value'];
        }
        if (!empty($this->embossAccountName)) {
            $json['EmbossAccountName']            = $this->embossAccountName['value'];
        }
        if (!empty($this->expiryPeriod)) {
            $json['ExpiryPeriod']                 = $this->expiryPeriod['value'];
        }
        if (isset($this->isCRT)) {
            $json['IsCRT']                        = $this->isCRT;
        }
        if (isset($this->isFleet)) {
            $json['IsFleet']                      = $this->isFleet;
        }
        if (isset($this->isInternational)) {
            $json['IsInternational']              = $this->isInternational;
        }
        if (isset($this->isNational)) {
            $json['IsNational']                   = $this->isNational;
        }
        if (isset($this->isPartnerSitesIncluded)) {
            $json['IsPartnerSitesIncluded']       = $this->isPartnerSitesIncluded;
        }
        if (isset($this->isShellSitesOnly)) {
            $json['IsShellSitesOnly']             = $this->isShellSitesOnly;
        }
        if (isset($this->isVirtual)) {
            $json['IsVirtual']                    = $this->isVirtual;
        }
        if (isset($this->isVisibleToCustomers)) {
            $json['IsVisibleToCustomers']         = $this->isVisibleToCustomers;
        }
        if (isset($this->isActive)) {
            $json['IsActive']                     = $this->isActive;
        }
        if (isset($this->isCardAvailableForDownload)) {
            $json['IsCardAvailableForDownload']   = $this->isCardAvailableForDownload;
        }
        if (isset($this->isCardVisibleToCustomers)) {
            $json['IsCardVisibleToCustomers']     = $this->isCardVisibleToCustomers;
        }
        if (!empty($this->pANLength)) {
            $json['PANLength']                    = $this->pANLength['value'];
        }
        if (!empty($this->purchaseCategories)) {
            $json['PurchaseCategories']           = $this->purchaseCategories['value'];
        }
        if (!empty($this->tokenTypeId)) {
            $json['TokenTypeId']                  = $this->tokenTypeId['value'];
        }
        if (!empty($this->tokenTypeName)) {
            $json['TokenTypeName']                = $this->tokenTypeName['value'];
        }
        if (isset($this->usageRestrictions)) {
            $json['UsageRestrictions']            = $this->usageRestrictions;
        }
        if (isset($this->eMVContactless)) {
            $json['EMVContactless']               = $this->eMVContactless;
        }
        if (isset($this->rFID)) {
            $json['RFID']                         = $this->rFID;
        }
        if (isset($this->pINChangeSupported)) {
            $json['PINChangeSupported']           = $this->pINChangeSupported;
        }
        if (isset($this->requirePIN)) {
            $json['RequirePIN']                   = $this->requirePIN;
        }
        if (isset($this->offlinePIN)) {
            $json['OfflinePIN']                   = $this->offlinePIN;
        }
        if (isset($this->isDefault)) {
            $json['IsDefault']                    = $this->isDefault;
        }
        if (isset($this->applicationsToShowNPIITokens)) {
            $json['ApplicationsToShowNPIITokens'] = $this->applicationsToShowNPIITokens;
        }
        if (!empty($this->mediumTypeID)) {
            $json['MediumTypeID']                 = $this->mediumTypeID['value'];
        }
        if (!empty($this->mediumType)) {
            $json['MediumType']                   = $this->mediumType['value'];
        }
        if (!empty($this->colCoCurrencySymbol)) {
            $json['ColCoCurrencySymbol']          = $this->colCoCurrencySymbol['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
