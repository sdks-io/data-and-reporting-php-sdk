
# Recent Transactions

## Structure

`RecentTransactions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoCode` | `?int` | Optional | ColCoCode | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerNumber` | `?string` | Optional | PayerNumber | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountNumber` | `?string` | Optional | Account Number | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `cardIssueNumber` | `?string` | Optional | Card Issue Number | getCardIssueNumber(): ?string | setCardIssueNumber(?string cardIssueNumber): void |
| `collectingCompanyCurrencyCode` | `?string` | Optional | Collecting Company Currency IsoCode | getCollectingCompanyCurrencyCode(): ?string | setCollectingCompanyCurrencyCode(?string collectingCompanyCurrencyCode): void |
| `custDataCustomerEntered` | `?string` | Optional | Customer entered data for reference. | getCustDataCustomerEntered(): ?string | setCustDataCustomerEntered(?string custDataCustomerEntered): void |
| `custDataDriverId` | `?string` | Optional | Customer Data DriverId | getCustDataDriverId(): ?string | setCustDataDriverId(?string custDataDriverId): void |
| `custDataFleetDescription` | `?string` | Optional | Cust Data Fleet Description | getCustDataFleetDescription(): ?string | setCustDataFleetDescription(?string custDataFleetDescription): void |
| `fleetIdInput` | `?string` | Optional | Fleet Id Input | getFleetIdInput(): ?string | setFleetIdInput(?string fleetIdInput): void |
| `amount` | `?float` | Optional | Amount | getAmount(): ?float | setAmount(?float amount): void |
| `euroshellSiteNumber` | `?string` | Optional | EuroshellSiteNumber | getEuroshellSiteNumber(): ?string | setEuroshellSiteNumber(?string euroshellSiteNumber): void |
| `incomingProductCode` | `?string` | Optional | IncomingProductCode | getIncomingProductCode(): ?string | setIncomingProductCode(?string incomingProductCode): void |
| `productCode` | `?string` | Optional | ProductCode | getProductCode(): ?string | setProductCode(?string productCode): void |
| `productName` | `?string` | Optional | ProductName | getProductName(): ?string | setProductName(?string productName): void |
| `siteCode` | `?int` | Optional | SiteCode | getSiteCode(): ?int | setSiteCode(?int siteCode): void |
| `hostingCollectingCompanyName` | `?string` | Optional | HostingCollectingCompanyName | getHostingCollectingCompanyName(): ?string | setHostingCollectingCompanyName(?string hostingCollectingCompanyName): void |
| `hostingCollectingCompanyNumber` | `?string` | Optional | HostingCollectingCompanyNumber | getHostingCollectingCompanyNumber(): ?string | setHostingCollectingCompanyNumber(?string hostingCollectingCompanyNumber): void |
| `iccdataTranTypeCode` | `?string` | Optional | Transaction type code | getIccdataTranTypeCode(): ?string | setIccdataTranTypeCode(?string iccdataTranTypeCode): void |
| `transactionType` | `?string` | Optional | Transaction type description. | getTransactionType(): ?string | setTransactionType(?string transactionType): void |
| `latitude` | `?string` | Optional | Latitude of the Coordinate 3.11573 | getLatitude(): ?string | setLatitude(?string latitude): void |
| `longitude` | `?string` | Optional | Longitude of the Coordinate | getLongitude(): ?string | setLongitude(?string longitude): void |
| `merchantCategory` | `?string` | Optional | Merchant category | getMerchantCategory(): ?string | setMerchantCategory(?string merchantCategory): void |
| `merchantCategoryDescription` | `?string` | Optional | Merchant category description | getMerchantCategoryDescription(): ?string | setMerchantCategoryDescription(?string merchantCategoryDescription): void |
| `purchasedInCountry` | `?string` | Optional | Purchased in country | getPurchasedInCountry(): ?string | setPurchasedInCountry(?string purchasedInCountry): void |
| `merchantId` | `?string` | Optional | Merchant Id | getMerchantId(): ?string | setMerchantId(?string merchantId): void |
| `siteName` | `?string` | Optional | Site name | getSiteName(): ?string | setSiteName(?string siteName): void |
| `network` | `?string` | Optional | Network | getNetwork(): ?string | setNetwork(?string network): void |
| `delcoCode` | `?string` | Optional | Three character DelcoCode | getDelcoCode(): ?string | setDelcoCode(?string delcoCode): void |
| `odometerInput` | `?string` | Optional | Odometer input | getOdometerInput(): ?string | setOdometerInput(?string odometerInput): void |
| `odometerReadingKm` | `?string` | Optional | Odometer reading in Kms | getOdometerReadingKm(): ?string | setOdometerReadingKm(?string odometerReadingKm): void |
| `odometerReadingMiles` | `?string` | Optional | Odometer reading in miles | getOdometerReadingMiles(): ?string | setOdometerReadingMiles(?string odometerReadingMiles): void |
| `cardPAN` | `?string` | Optional | Masked Card PAN | getCardPAN(): ?string | setCardPAN(?string cardPAN): void |
| `pINIndicator` | `?string` | Optional | PIN indicator | getPINIndicator(): ?string | setPINIndicator(?string pINIndicator): void |
| `pOIReceiptNumber` | `?string` | Optional | POIReceiptNumber | getPOIReceiptNumber(): ?string | setPOIReceiptNumber(?string pOIReceiptNumber): void |
| `productsCodeAdditional` | `?string` | Optional | Additinal Products Code | getProductsCodeAdditional(): ?string | setProductsCodeAdditional(?string productsCodeAdditional): void |
| `productsTaxCode` | `?string` | Optional | Products tax code | getProductsTaxCode(): ?string | setProductsTaxCode(?string productsTaxCode): void |
| `fuelVolume` | `?float` | Optional | Fuel volume | getFuelVolume(): ?float | setFuelVolume(?float fuelVolume): void |
| `sfgwCardDateOfExpiry` | `?string` | Optional | SfgwCard expiry date | getSfgwCardDateOfExpiry(): ?string | setSfgwCardDateOfExpiry(?string sfgwCardDateOfExpiry): void |
| `siteCurrencyISOCode` | `?string` | Optional | Three character Site currency ISO code | getSiteCurrencyISOCode(): ?string | setSiteCurrencyISOCode(?string siteCurrencyISOCode): void |
| `cardId` | `?string` | Optional | Card ID | getCardId(): ?string | setCardId(?string cardId): void |
| `transactionDate` | `?DateTime` | Optional | ISO8601-compliant UTC datetime of the last update of the EVSE | getTransactionDate(): ?\DateTime | setTransactionDate(?\DateTime transactionDate): void |
| `transactionDateTime` | `?string` | Optional | ISO8601-compliant UTC datetime of the last update of the EVSE | getTransactionDateTime(): ?string | setTransactionDateTime(?string transactionDateTime): void |
| `transactionId` | `?string` | Optional | TransactionId | getTransactionId(): ?string | setTransactionId(?string transactionId): void |
| `transactionStatus` | `?string` | Optional | Type of the connector in the EVSE unit. | getTransactionStatus(): ?string | setTransactionStatus(?string transactionStatus): void |
| `unitOfMeasure` | `?string` | Optional | Unit of measure | getUnitOfMeasure(): ?string | setUnitOfMeasure(?string unitOfMeasure): void |
| `vehicleRegistrationNumber` | `?string` | Optional | VehicleRegistrationNumber | getVehicleRegistrationNumber(): ?string | setVehicleRegistrationNumber(?string vehicleRegistrationNumber): void |
| `networkDelcoName` | `?string` | Optional | Network Delco name | getNetworkDelcoName(): ?string | setNetworkDelcoName(?string networkDelcoName): void |
| `productGroupName` | `?string` | Optional | ProductGroupName | getProductGroupName(): ?string | setProductGroupName(?string productGroupName): void |
| `fuelProduct` | `?string` | Optional | FuelProduct | getFuelProduct(): ?string | setFuelProduct(?string fuelProduct): void |
| `accountCustomerName` | `?string` | Optional | AccountCustomerName | getAccountCustomerName(): ?string | setAccountCustomerName(?string accountCustomerName): void |
| `payerName` | `?string` | Optional | PayerName | getPayerName(): ?string | setPayerName(?string payerName): void |
| `transactionTime` | `?string` | Optional | ISO8601-compliant UTC datetime of the last update of the EVSE | getTransactionTime(): ?string | setTransactionTime(?string transactionTime): void |
| `transactionCurrency` | `?string` | Optional | TransactionCurrencySymbol | getTransactionCurrency(): ?string | setTransactionCurrency(?string transactionCurrency): void |
| `unitPrice` | `?float` | Optional | UnitPrice | getUnitPrice(): ?float | setUnitPrice(?float unitPrice): void |
| `authorisedFlag` | `?string` | Optional | AuthorisedFlag | getAuthorisedFlag(): ?string | setAuthorisedFlag(?string authorisedFlag): void |
| `transactionTimeGMT` | `?string` | Optional | TransactionTimeGMT update of the EVSE | getTransactionTimeGMT(): ?string | setTransactionTimeGMT(?string transactionTimeGMT): void |
| `reasonCode` | `?string` | Optional | ReasonCode | getReasonCode(): ?string | setReasonCode(?string reasonCode): void |
| `issuerActionCode` | `?string` | Optional | IssuerActionCode | getIssuerActionCode(): ?string | setIssuerActionCode(?string issuerActionCode): void |
| `issuerActionCodeDescription` | `?string` | Optional | IssuerActionCodeDescription. | getIssuerActionCodeDescription(): ?string | setIssuerActionCodeDescription(?string issuerActionCodeDescription): void |
| `declinedReason` | `?string` | Optional | DeclinedReason. | getDeclinedReason(): ?string | setDeclinedReason(?string declinedReason): void |
| `cardStatusReasonDescription` | `?string` | Optional | CardStatusReasonDescription. | getCardStatusReasonDescription(): ?string | setCardStatusReasonDescription(?string cardStatusReasonDescription): void |
| `transactionCountry` | `?string` | Optional | TransactionCountry | getTransactionCountry(): ?string | setTransactionCountry(?string transactionCountry): void |
| `issuingCollectingCompanyName` | `?string` | Optional | IssuingCollectingCompanyName. | getIssuingCollectingCompanyName(): ?string | setIssuingCollectingCompanyName(?string issuingCollectingCompanyName): void |
| `cardIssuerName` | `?string` | Optional | CardIssuerName. | getCardIssuerName(): ?string | setCardIssuerName(?string cardIssuerName): void |
| `driverName` | `?string` | Optional | DriverName. | getDriverName(): ?string | setDriverName(?string driverName): void |
| `bearerDescription` | `?string` | Optional | BearerDescription. | getBearerDescription(): ?string | setBearerDescription(?string bearerDescription): void |
| `cardCategoryDescription` | `?string` | Optional | CardCategoryDescription. | getCardCategoryDescription(): ?string | setCardCategoryDescription(?string cardCategoryDescription): void |
| `cardTypeDescription` | `?string` | Optional | CardTypeDescription. | getCardTypeDescription(): ?string | setCardTypeDescription(?string cardTypeDescription): void |
| `cardTokenTypeDescription` | `?string` | Optional | CardTokenTypeDescription. | getCardTokenTypeDescription(): ?string | setCardTokenTypeDescription(?string cardTokenTypeDescription): void |
| `embossType` | `?string` | Optional | EmbossType. | getEmbossType(): ?string | setEmbossType(?string embossType): void |
| `eVPrintedNumber` | `?string` | Optional | The EVPrintedNumber which can be found on the Shell EV Card | getEVPrintedNumber(): ?string | setEVPrintedNumber(?string eVPrintedNumber): void |
| `isRFID` | `?bool` | Optional | Whether the card type is enabled for RFID (Radio Frequency Identification) | getIsRFID(): ?bool | setIsRFID(?bool isRFID): void |

## Example (as JSON)

```json
{
  "ColCoCode": 84,
  "PayerNumber": "MY00200653",
  "AccountNumber": "MY00200653",
  "CardIssueNumber": "1",
  "CollectingCompanyCurrencyCode": "MYR",
  "CustDataCustomerEntered": "PartnerId",
  "CustDataDriverId": "D123",
  "CustDataFleetDescription": "Fleet-Truck",
  "FleetIdInput": "AS2344",
  "Amount": 62.47,
  "EuroshellSiteNumber": "1231",
  "IncomingProductCode": "10",
  "ProductCode": "23",
  "ProductName": "Unleaded - Low octane",
  "SiteCode": 3350,
  "HostingCollectingCompanyName": "Shell Malaysia Trading Sdn Bhd",
  "HostingCollectingCompanyNumber": "84",
  "IccdataTranTypeCode": "1",
  "TransactionType": "Transaction Type description",
  "Latitude": "52.143814",
  "Longitude": "101.72869",
  "MerchantCategory": "5542",
  "MerchantCategoryDescription": "Description",
  "PurchasedInCountry": "MY",
  "MerchantId": "MY1737000000000",
  "SiteName": "ShellPT3895 BATU 4    KUALA LUMPUR MY",
  "Network": "458",
  "DelcoCode": "084",
  "OdometerInput": "201620",
  "OdometerReadingKm": "201620",
  "OdometerReadingMiles": "201620",
  "CardPAN": "700214*******780061",
  "PINIndicator": "Y",
  "POIReceiptNumber": "417662",
  "ProductsCodeAdditional": "Additional Code",
  "ProductsTaxCode": "0",
  "FuelVolume": 34.15,
  "SfgwCardDateOfExpiry": "2024-12",
  "SiteCurrencyISOCode": "MYR",
  "CardId": "330743",
  "TransactionDate": "2021-11-11",
  "TransactionDateTime": "2021-11-11 16:32:09.000",
  "TransactionId": "864220307",
  "TransactionStatus": "Approved",
  "UnitOfMeasure": "L",
  "VehicleRegistrationNumber": "WD33637",
  "NetworkDelcoName": "Shell Malaysia Trading Sdn Bhd",
  "ProductGroupName": "Motor gasoline",
  "FuelProduct": "All Fuels",
  "AccountCustomerName": "WCT BERHAD",
  "PayerName": "WCT BERHAD",
  "TransactionTime": "2021-11-11",
  "TransactionCurrency": "RM",
  "UnitPrice": 0.0205007320644217,
  "AuthorisedFlag": "Y",
  "TransactionTimeGMT": "08:41:02",
  "ReasonCode": "10",
  "IssuerActionCode": "2",
  "IssuerActionCodeDescription": "Approved, partial",
  "DeclinedReason": "partial",
  "CardStatusReasonDescription": "Approved, partial",
  "TransactionCountry": "458",
  "IssuingCollectingCompanyName": "Partner Name",
  "CardIssuerName": "John",
  "DriverName": "PAK PAK",
  "BearerDescription": "Description",
  "CardCategoryDescription": "Driver Card",
  "CardTypeDescription": "SHELL FLEET- HONG KONG 7002821",
  "CardTokenTypeDescription": "HK FLE NAT SIN R1 - CHIP",
  "EmbossType": "Driver",
  "EVPrintedNumber": "NL-TNM-C00122045-K",
  "IsRFID": false
}
```

