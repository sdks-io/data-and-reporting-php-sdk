
# Multi Priced Transaction Response Transactions Items

## Structure

`MultiPricedTransactionResponseTransactionsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `?string` | Optional | TransactionType is the type of transaction.<br>Example: SalesItem /FeeItem | getType(): ?string | setType(?string type): void |
| `cardId` | `?int` | Optional | Unique Card Id in GFN<br>Example: 275549 | getCardId(): ?int | setCardId(?int cardId): void |
| `cardPAN` | `?string` | Optional | Card PAN<br>Mask PAN if enabled at Microservices configuration (Mask all digits except the Last 6 digits of the PAN)<br>Example: 7002051006629890645 | getCardPAN(): ?string | setCardPAN(?string cardPAN): void |
| `cardExpiry` | `?string` | Optional | Card Expiry Date<br>Format: yyyyMMdd | getCardExpiry(): ?string | setCardExpiry(?string cardExpiry): void |
| `transactionDate` | `?string` | Optional | Local Transaction Date of where the transaction took place<br>Format: yyyyMMdd<br><br>Note: For a fee item, this parameter will be populated with fee date. | getTransactionDate(): ?string | setTransactionDate(?string transactionDate): void |
| `transactionTime` | `?string` | Optional | Local Transaction Time of where the transaction took place<br>Format: HH:mm:ss (24 hours format)<br><br>Note: For a fee item, this parameter will be populated with fee date. | getTransactionTime(): ?string | setTransactionTime(?string transactionTime): void |
| `uTCOffset` | `?string` | Optional | UTC Offset extracted from Sales Date time.<br>Note: This may not be accurate for all TPN transactions<br>Format: +/-HH:mm:ss (24 hours format) | getUTCOffset(): ?string | setUTCOffset(?string uTCOffset): void |
| `fleetIdInput` | `?string` | Optional | Fleet Id Input as entered by the drivers at the time of transaction<br>Example: XYZ1234<br>Note: - The value could be null/blank for fees item. | getFleetIdInput(): ?string | setFleetIdInput(?string fleetIdInput): void |
| `odometerInput` | `?int` | Optional | Odometer Input as entered by the drivers at the time of transaction<br>Example: 12345<br>Note: - The value could be null/blank for fees item. | getOdometerInput(): ?int | setOdometerInput(?int odometerInput): void |
| `driverName` | `?string` | Optional | Driver Name embossed on the card<br>Example:  ANDREW GILBERRY | getDriverName(): ?string | setDriverName(?string driverName): void |
| `vehicleRegistration` | `?string` | Optional | Vehicle Registration Number embossed on the card | getVehicleRegistration(): ?string | setVehicleRegistration(?string vehicleRegistration): void |
| `invoiceCurrencyCode` | `?string` | Optional | ISO currency code | getInvoiceCurrencyCode(): ?string | setInvoiceCurrencyCode(?string invoiceCurrencyCode): void |
| `invoiceCurrencySymbol` | `?string` | Optional | Currency symbol of the Invoice Currency Code<br>Example: £, $ | getInvoiceCurrencySymbol(): ?string | setInvoiceCurrencySymbol(?string invoiceCurrencySymbol): void |
| `transactionCurrencyCode` | `?string` | Optional | ISO currency code<br>Example: GBP | getTransactionCurrencyCode(): ?string | setTransactionCurrencyCode(?string transactionCurrencyCode): void |
| `transactionCurrencySymbol` | `?string` | Optional | Currency symbol of the Transaction Currency Code<br>Example: £, $ | getTransactionCurrencySymbol(): ?string | setTransactionCurrencySymbol(?string transactionCurrencySymbol): void |
| `transactionNetAmount` | `?int` | Optional | Net Amount | getTransactionNetAmount(): ?int | setTransactionNetAmount(?int transactionNetAmount): void |
| `transactionTax` | `?int` | Optional | Tax Amount | getTransactionTax(): ?int | setTransactionTax(?int transactionTax): void |
| `transactionGrossAmount` | `?int` | Optional | Gross Amount | getTransactionGrossAmount(): ?int | setTransactionGrossAmount(?int transactionGrossAmount): void |
| `invoiceNetAmount` | `?int` | Optional | Invoiced Net Amount<br>Note: For a fee item, this parameter will be populated with fee InvoiceNetAmount. | getInvoiceNetAmount(): ?int | setInvoiceNetAmount(?int invoiceNetAmount): void |
| `invoiceTax` | `?int` | Optional | Invoiced Tax Amount | getInvoiceTax(): ?int | setInvoiceTax(?int invoiceTax): void |
| `invoiceGrossAmount` | `?int` | Optional | Invoice Gross Amount<br>Note: For a fee item, this parameter will be populated with fee InvoiceGrossAmount. | getInvoiceGrossAmount(): ?int | setInvoiceGrossAmount(?int invoiceGrossAmount): void |
| `purchasedInCountry` | `?string` | Optional | Country of Purchase<br>Example: France, Germany<br>Note: - The value could be null/blank for fees item. | getPurchasedInCountry(): ?string | setPurchasedInCountry(?string purchasedInCountry): void |
| `accountId` | `?int` | Optional | Account Id | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountName` | `?string` | Optional | Account Name | getAccountName(): ?string | setAccountName(?string accountName): void |
| `accountShortName` | `?string` | Optional | Account Short Name | getAccountShortName(): ?string | setAccountShortName(?string accountShortName): void |
| `quantity` | `?int` | Optional | Quantity/Volume | getQuantity(): ?int | setQuantity(?int quantity): void |
| `fuelProduct` | `?bool` | Optional | True if the product on transaction is listed as a fuel product else return false | getFuelProduct(): ?bool | setFuelProduct(?bool fuelProduct): void |
| `unitPriceInTransactionCurrency` | `?int` | Optional | Product Unit Price in transaction currency<br>Note: - The value could be null/blank for fees item | getUnitPriceInTransactionCurrency(): ?int | setUnitPriceInTransactionCurrency(?int unitPriceInTransactionCurrency): void |
| `unitPriceInInvoiceCurrency` | `?int` | Optional | Product Unit Price in invoice currency<br>Note: - The value could be null/blank for fees item | getUnitPriceInInvoiceCurrency(): ?int | setUnitPriceInInvoiceCurrency(?int unitPriceInInvoiceCurrency): void |
| `unitDiscountTransactionCurrency` | `?int` | Optional | Unit Discount in transaction currency<br>Note: - The value could be null/blank for fees item | getUnitDiscountTransactionCurrency(): ?int | setUnitDiscountTransactionCurrency(?int unitDiscountTransactionCurrency): void |
| `unitDiscountInvoiceCurrency` | `?int` | Optional | Unit Discount in invoice currency<br>Note: - The value could be null/blank for fees item. | getUnitDiscountInvoiceCurrency(): ?int | setUnitDiscountInvoiceCurrency(?int unitDiscountInvoiceCurrency): void |
| `isInvoiced` | `?bool` | Optional | True when the transaction is already invoice, else return False | getIsInvoiced(): ?bool | setIsInvoiced(?bool isInvoiced): void |
| `invoiceNumber` | `?string` | Optional | Invoice Number if invoiced<br>Example:<br>S04500493<br>S04478304<br>S04490319 | getInvoiceNumber(): ?string | setInvoiceNumber(?string invoiceNumber): void |
| `invoiceDate` | `?string` | Optional | Invoice Date<br>Format: yyyyMMdd HH:mm:ss | getInvoiceDate(): ?string | setInvoiceDate(?string invoiceDate): void |
| `siteCode` | `?string` | Optional | Site Code<br>Example:<br>050001 -	CHARNOCK RICHARD NTHBOUND MWSA 0755 | getSiteCode(): ?string | setSiteCode(?string siteCode): void |
| `siteName` | `?string` | Optional | Site Name<br>Example:<br>050001 -	CHARNOCK RICHARD NTHBOUND MWSA 0755 | getSiteName(): ?string | setSiteName(?string siteName): void |
| `siteCountry` | `?string` | Optional | Site Country<br>Example: France, Germany | getSiteCountry(): ?string | setSiteCountry(?string siteCountry): void |
| `location` | [`?(SiteLocation[])`](../../doc/models/site-location.md) | Optional | - | getLocation(): ?array | setLocation(?array location): void |
| `cardGroupName` | `?string` | Optional | Card Group Name | getCardGroupName(): ?string | setCardGroupName(?string cardGroupName): void |
| `receiptNumber` | `?string` | Optional | ReceiptNumber | getReceiptNumber(): ?string | setReceiptNumber(?string receiptNumber): void |
| `productCode` | `?string` | Optional | Product Code<br>10	TMF Charges<br>11	Tunnel/Bridges<br>12	Motorway toll | getProductCode(): ?string | setProductCode(?string productCode): void |
| `productName` | `?string` | Optional | Product Name<br>Example:<br><br>Unleaded - High octane<br>Unleaded - Medium octane<br>Unleaded - Low octane<br>Unleaded Environmental | getProductName(): ?string | setProductName(?string productName): void |
| `productGroupId` | `?int` | Optional | Product Group Id<br>Example:<br>1	Parent Product Group<br>2	All Fuels<br>3	Motor gasoline<br>4	2 stroke<br>5	Autogas | getProductGroupId(): ?int | setProductGroupId(?int productGroupId): void |
| `productGroupName` | `?string` | Optional | Product Group Name<br>Example:<br>1	Parent Product Group<br>2	All Fuels<br>3	Motor gasoline<br>4	2 stroke<br>5	Autogas | getProductGroupName(): ?string | setProductGroupName(?string productGroupName): void |
| `delCoExchangeRate` | `?float` | Optional | DelCo Exchange Rate (Site exchange rate)<br>Note: - The value could be null/blank for fees item. | getDelCoExchangeRate(): ?float | setDelCoExchangeRate(?float delCoExchangeRate): void |
| `colCoExchangeRate` | `?int` | Optional | ColCo Exchange Rate (Customer exchange rate) | getColCoExchangeRate(): ?int | setColCoExchangeRate(?int colCoExchangeRate): void |
| `isShellSite` | `?bool` | Optional | True when transaction occurred at a Shell site else return False<br>Note: - The value could be null/blank for fees item. | getIsShellSite(): ?bool | setIsShellSite(?bool isShellSite): void |
| `network` | `?string` | Optional | Network  (Shell PH, ESSO, etc.,)<br>100013	STEINDORFER<br>100015	S.A. BELGIAN SHELL N.V.<br>100016	ESSO BE<br>Note: - The value could be null/blank for fees item. | getNetwork(): ?string | setNetwork(?string network): void |
| `siteGroupId` | `?int` | Optional | Site Group Id<br>Example: 202<br>Note: - The value could be null/blank for fees item. | getSiteGroupId(): ?int | setSiteGroupId(?int siteGroupId): void |
| `siteGroupName` | `?string` | Optional | Site GroupName<br>Example: CZ 9100 ECONOMY NETWORK<br>Note: - The value could be null/blank for fees item. | getSiteGroupName(): ?string | setSiteGroupName(?string siteGroupName): void |
| `postingDate` | `?string` | Optional | Transaction Posting Date<br>Format: yyyyMMdd HHmmss | getPostingDate(): ?string | setPostingDate(?string postingDate): void |
| `issuerCode` | `?string` | Optional | First digits of the Card PAN<br>7002 = Fleet | getIssuerCode(): ?string | setIssuerCode(?string issuerCode): void |
| `purchasedInCountryCode` | `?string` | Optional | ISO code of the country where the transaction took place<br>Example: “NL”<br>Note: - The value could be null/blank for fees item. | getPurchasedInCountryCode(): ?string | setPurchasedInCountryCode(?string purchasedInCountryCode): void |
| `customerCountryCode` | `?string` | Optional | ISO code of the Customer Country<br>Example: NL | getCustomerCountryCode(): ?string | setCustomerCountryCode(?string customerCountryCode): void |
| `customerCountry` | `?string` | Optional | Name of the Customer Country<br>Example: Netherlands | getCustomerCountry(): ?string | setCustomerCountry(?string customerCountry): void |
| `releaseCode` | `?string` | Optional | Release code, 7th Digit of the Card PAN<br>Example: 8 for 7021882 | getReleaseCode(): ?string | setReleaseCode(?string releaseCode): void |
| `cardGroupId` | `?string` | Optional | Card group ID | getCardGroupId(): ?string | setCardGroupId(?string cardGroupId): void |
| `cardSequenceNumber` | `?string` | Optional | 3 digits, Card sequence number and Check digit (Digit 16,17 and 18 on the card pan) | getCardSequenceNumber(): ?string | setCardSequenceNumber(?string cardSequenceNumber): void |
| `checkDigit` | `?string` | Optional | Check digit, Last number of the card pan | getCheckDigit(): ?string | setCheckDigit(?string checkDigit): void |
| `fleetIDDescription` | `?string` | Optional | FleetId/CRN description in Card Platform configured at the account level | getFleetIDDescription(): ?string | setFleetIDDescription(?string fleetIDDescription): void |
| `vATRate` | `?float` | Optional | VAT Percentage<br>0.20 for 20%<br>Note: This parameter will be populated in the response for both SalesItem and FeeItem | getVATRate(): ?float | setVATRate(?float vATRate): void |
| `vATCategory` | `?string` | Optional | VAT Category Id-Description<br>1-Zero Rated | getVATCategory(): ?string | setVATCategory(?string vATCategory): void |
| `vATCountry` | `?string` | Optional | VAT Country<br>Example: Netherlands | getVATCountry(): ?string | setVATCountry(?string vATCountry): void |
| `effectiveDiscountInTrxCurrency` | `?float` | Optional | Effective Discount (excluding VAT, in transaction currency) 4 digits<br>Example: 0.0000 | getEffectiveDiscountInTrxCurrency(): ?float | setEffectiveDiscountInTrxCurrency(?float effectiveDiscountInTrxCurrency): void |
| `transactionType` | `?string` | Optional | Transaction Type<br>Example: Purchase when Card is Present else Blank<br>Note: - The value could be null/blank for fees item. | getTransactionType(): ?string | setTransactionType(?string transactionType): void |
| `pINIndicator` | `?string` | Optional | Pin Indicator (Indicates whether PIN used or not used at the time of transaction)<br>Example: “PIN Used'” or “No PIN” or “Unknown”<br>Note: - The value could be null/blank for fees item | getPINIndicator(): ?string | setPINIndicator(?string pINIndicator): void |
| `vATApplicable` | `?string` | Optional | Is VAT Applicable for this transaction<br>Example: “Y” or “N” | getVATApplicable(): ?string | setVATApplicable(?string vATApplicable): void |
| `netInvoiceIndicator` | `?string` | Optional | Net Invoice Indicator, Will the customer receive an invoice without VAT?<br>Example: “Y” or “N”<br>Note: - The value could be null/blank for fees item. | getNetInvoiceIndicator(): ?string | setNetInvoiceIndicator(?string netInvoiceIndicator): void |
| `customerCurrencyCode` | `?string` | Optional | Customer currency code<br>Example: GBP | getCustomerCurrencyCode(): ?string | setCustomerCurrencyCode(?string customerCurrencyCode): void |
| `customerCurrencySymbol` | `?string` | Optional | Customer currency Symbol | getCustomerCurrencySymbol(): ?string | setCustomerCurrencySymbol(?string customerCurrencySymbol): void |
| `effectiveUnitDiscountInCustomerCurrency` | `?int` | Optional | Effective Unit Discount (excluding VAT in Customer currency)<br>Note: - The value could be null/blank for fees item. | getEffectiveUnitDiscountInCustomerCurrency(): ?int | setEffectiveUnitDiscountInCustomerCurrency(?int effectiveUnitDiscountInCustomerCurrency): void |
| `effectiveDiscountInCustomerCurrency` | `?int` | Optional | Effective Discount (excluding VAT in Customer currency)<br>Note: - The value could be null/blank for fees item. | getEffectiveDiscountInCustomerCurrency(): ?int | setEffectiveDiscountInCustomerCurrency(?int effectiveDiscountInCustomerCurrency): void |
| `vATonNetAmountInCustomerCurrency` | `?int` | Optional | VAT on Net Amount (in Customer currency) | getVATonNetAmountInCustomerCurrency(): ?int | setVATonNetAmountInCustomerCurrency(?int vATonNetAmountInCustomerCurrency): void |
| `discountType` | `?string` | Optional | Discount Type<br>Example: 1-None<br>2-Pence per unit | getDiscountType(): ?string | setDiscountType(?string discountType): void |
| `transactionStatus` | `?string` | Optional | Transaction status "U" or "I"<br>“U” stands for Uninvoiced<br>“I” stands for Invoiced | getTransactionStatus(): ?string | setTransactionStatus(?string transactionStatus): void |
| `salesItemId` | `?int` | Optional | Unique Sales Item Identifier<br>Example: 18315958002<br>Note: For a fee item, this parameter will be populated with SalesItemId. | getSalesItemId(): ?int | setSalesItemId(?int salesItemId): void |
| `payerGroup` | `?string` | Optional | Payer Group applicable for the Large Customer NL+8 digit code | getPayerGroup(): ?string | setPayerGroup(?string payerGroup): void |
| `payerGroupName` | `?string` | Optional | Payer Group Name | getPayerGroupName(): ?string | setPayerGroupName(?string payerGroupName): void |
| `refundFlag` | `?string` | Optional | Refund Flag “N” for Not Refunded and “Y” for Refunded.<br>Note: - The value could be null/blank for fees item. | getRefundFlag(): ?string | setRefundFlag(?string refundFlag): void |
| `originalSalesItemId` | `?string` | Optional | Shows Sales Item Id of the original item that was refunded | getOriginalSalesItemId(): ?string | setOriginalSalesItemId(?string originalSalesItemId): void |
| `delcoName` | `?string` | Optional | Delco Name<br>Example: SHELL NEDERLAND VERKOOPMAATSCHAPPIJ BV | getDelcoName(): ?string | setDelcoName(?string delcoName): void |
| `delcoCode` | `?string` | Optional | Delco Code<br>014, 018, etc., | getDelcoCode(): ?string | setDelcoCode(?string delcoCode): void |
| `payerNumber` | `?string` | Optional | Payer number (Country code+8 digits)<br>Example: NL10042616 | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `payerName` | `?string` | Optional | Payer name<br>Example: V.M. LE COMTE | getPayerName(): ?string | setPayerName(?string payerName): void |
| `cardExpiryPeriod` | `?string` | Optional | Year/Month of the Card Expiry captured on the transaction<br>Example: 1901 | getCardExpiryPeriod(): ?string | setCardExpiryPeriod(?string cardExpiryPeriod): void |
| `authorisationCode` | `?string` | Optional | Authorisation code of the transaction<br>Example: 011256<br>Note: - The value could be null/blank for fees item. | getAuthorisationCode(): ?string | setAuthorisationCode(?string authorisationCode): void |
| `transactionId` | `?string` | Optional | Unique id of the transaction that may include one or more salesitems<br>Example: io9KVXk1UkW57XWKyeaHHg<br>Note: - The value could be null/blank for fees item. | getTransactionId(): ?string | setTransactionId(?string transactionId): void |
| `transactionLine` | `?string` | Optional | Transaction line item number<br>Example: 1<br>Note: - The value could be null/blank for fees item. | getTransactionLine(): ?string | setTransactionLine(?string transactionLine): void |
| `allowClearing` | `?string` | Optional | Is the Sales Item allowed for clearing? i.e. not written off<br>Example: “Y” or “N”<br>Note: - The value could be null/blank for fees item. | getAllowClearing(): ?string | setAllowClearing(?string allowClearing): void |
| `cRMNumber` | `?string` | Optional | CRM Case number if the sales item is in dispute.<br>Note: - The value could be null/blank for fees item. | getCRMNumber(): ?string | setCRMNumber(?string cRMNumber): void |
| `disputeStatus` | `?string` | Optional | Sales Item Dispute Status if disputed<br>0	No Dispute<br>1	In Dispute<br>2	Re-Instated<br>3	Adjusted<br>4	Written Off by Colco<br>5	Written Off by Delco<br>6	Charged Back to Site | getDisputeStatus(): ?string | setDisputeStatus(?string disputeStatus): void |
| `rebateRate` | `?float` | Optional | Unit discount in customer currency.<br>Example: 28.279000 | getRebateRate(): ?float | setRebateRate(?float rebateRate): void |
| `delCoToColCoExchangeRate` | `?int` | Optional | Exchange rate from transaction currency to customer currency.<br>Example: 1 | getDelCoToColCoExchangeRate(): ?int | setDelCoToColCoExchangeRate(?int delCoToColCoExchangeRate): void |
| `netEuroAmount` | `?float` | Optional | Net euro amount.<br>Example: 37.93<br>Note: - The value could be null/blank for fees item. | getNetEuroAmount(): ?float | setNetEuroAmount(?float netEuroAmount): void |
| `euroRebateAmount` | `?int` | Optional | Euro rebate amount.<br>Example: 0<br>Note: - The value could be null/blank for fees item. | getEuroRebateAmount(): ?int | setEuroRebateAmount(?int euroRebateAmount): void |
| `euroVATAmount` | `?float` | Optional | Euro VAT amount.<br>Example: 7.96<br>Note: - The value could be null/blank for fees item. | getEuroVATAmount(): ?float | setEuroVATAmount(?float euroVATAmount): void |
| `parentCustomerNumber` | `?string` | Optional | Parent customer number | getParentCustomerNumber(): ?string | setParentCustomerNumber(?string parentCustomerNumber): void |
| `parentCustomerName` | `?string` | Optional | Parent customer name. | getParentCustomerName(): ?string | setParentCustomerName(?string parentCustomerName): void |
| `parentCustomerId` | `?int` | Optional | Parent customer id. | getParentCustomerId(): ?int | setParentCustomerId(?int parentCustomerId): void |
| `incomingSiteNumber` | `?string` | Optional | Incoming Site Number<br>Example: 100021<br>Note: - The value could be null/blank for fees item. | getIncomingSiteNumber(): ?string | setIncomingSiteNumber(?string incomingSiteNumber): void |
| `incomingSiteDescription` | `?string` | Optional | Incoming Site Description<br>Example: HN3 INTI_02-82.02<br>Note: - The value could be null/blank for fees item. | getIncomingSiteDescription(): ?string | setIncomingSiteDescription(?string incomingSiteDescription): void |
| `incomingCurrencyCode` | `?string` | Optional | Incoming Currency Code<br>Example: GBP<br>Note: - The value could be null/blank for fees item. | getIncomingCurrencyCode(): ?string | setIncomingCurrencyCode(?string incomingCurrencyCode): void |
| `incomingProductCode` | `?string` | Optional | Incoming Product Code<br>Example: 30 | getIncomingProductCode(): ?string | setIncomingProductCode(?string incomingProductCode): void |
| `creditDebitCode` | `?string` | Optional | Credit Debit Code<br>Example: “D” or “C”<br>The value could be null/blank for fees item. | getCreditDebitCode(): ?string | setCreditDebitCode(?string creditDebitCode): void |
| `correctionFlag` | `?string` | Optional | Correction Flag<br>Example: “Y” or “N”<br>Note: - The value could be null/blank for fees item. | getCorrectionFlag(): ?string | setCorrectionFlag(?string correctionFlag): void |
| `additional1` | `?string` | Optional | Additional details | getAdditional1(): ?string | setAdditional1(?string additional1): void |
| `additional2` | `?string` | Optional | Additional details | getAdditional2(): ?string | setAdditional2(?string additional2): void |
| `additional3` | `?string` | Optional | Additional details | getAdditional3(): ?string | setAdditional3(?string additional3): void |
| `additional4` | `?string` | Optional | Additional details | getAdditional4(): ?string | setAdditional4(?string additional4): void |
| `rebateonNetAmountInCustomerCurrency` | `?float` | Optional | Rebate on Net Amount in Customer Currency<br>Example: -0.735000000000<br>Note: - The value could be null/blank for fees item. | getRebateonNetAmountInCustomerCurrency(): ?float | setRebateonNetAmountInCustomerCurrency(?float rebateonNetAmountInCustomerCurrency): void |
| `rebateonNetAmountInTransactionCurrency` | `?float` | Optional | Rebate on Net Amount in Transaction Currency<br>Example: -0.735000000000<br>Note: - The value could be null/blank for fees item. | getRebateonNetAmountInTransactionCurrency(): ?float | setRebateonNetAmountInTransactionCurrency(?float rebateonNetAmountInTransactionCurrency): void |
| `networkCode` | `?string` | Optional | Network Code<br>Example: AVEE PTUAZONW CUBFAO COSFS<br>Note: - The value could be null/blank for fees item. | getNetworkCode(): ?string | setNetworkCode(?string networkCode): void |
| `trnIdentifier` | `?string` | Optional | Transaction Identifier | getTrnIdentifier(): ?string | setTrnIdentifier(?string trnIdentifier): void |
| `cardType` | `?string` | Optional | Card Type | getCardType(): ?string | setCardType(?string cardType): void |
| `delcoListPriceUnitNet` | `?float` | Optional | Delco List Price Unit Net<br>Example: 30.500000<br>Note: - The value could be null/blank for fees item | getDelcoListPriceUnitNet(): ?float | setDelcoListPriceUnitNet(?float delcoListPriceUnitNet): void |
| `delcoRetailPriceUnitNet` | `?float` | Optional | Retail Net Price (or pump net price) per Unit in transaction currency<br>Example: 1.921000<br>Note: - The value could be null/blank for fees item | getDelcoRetailPriceUnitNet(): ?float | setDelcoRetailPriceUnitNet(?float delcoRetailPriceUnitNet): void |
| `delcoRetailPriceUnitGross` | `?float` | Optional | Retail gross price (or pump gross price) per unit in transaction currency<br>Note: - The value could be null/blank for fees item | getDelcoRetailPriceUnitGross(): ?float | setDelcoRetailPriceUnitGross(?float delcoRetailPriceUnitGross): void |
| `delcoRetailValueTotalNet` | `?float` | Optional | Retail net price (or net pump price) in transaction currency<br>Note: - The value could be null/blank for fees item | getDelcoRetailValueTotalNet(): ?float | setDelcoRetailValueTotalNet(?float delcoRetailValueTotalNet): void |
| `delcoRetailValueTotalGross` | `?float` | Optional | Retail gross price (or gross pump price) in transaction currency<br>Note: - The value could be null/blank for fees item | getDelcoRetailValueTotalGross(): ?float | setDelcoRetailValueTotalGross(?float delcoRetailValueTotalGross): void |
| `customerRetailPriceUnitGross` | `?float` | Optional | Retail gross price (or pump gross price) per unit in customer currency<br>Note: - The value could be null/blank for fees item | getCustomerRetailPriceUnitGross(): ?float | setCustomerRetailPriceUnitGross(?float customerRetailPriceUnitGross): void |
| `customerRetailValueTotalGross` | `?float` | Optional | Retail gross price (or gross pump price) in customer currency<br>Note: - The value could be null/blank for fees item | getCustomerRetailValueTotalGross(): ?float | setCustomerRetailValueTotalGross(?float customerRetailValueTotalGross): void |
| `customerRetailValueTotalNet` | `?float` | Optional | Retail net price (or net pump price) in customer currency<br>Note: - The value could be null/blank for fees item | getCustomerRetailValueTotalNet(): ?float | setCustomerRetailValueTotalNet(?float customerRetailValueTotalNet): void |
| `transactionTypeDescription` | `?string` | Optional | Transaction Type Description<br>Note: - The value could be null/blank for fees item | getTransactionTypeDescription(): ?string | setTransactionTypeDescription(?string transactionTypeDescription): void |

## Example (as JSON)

```json
{
  "Type": "Type8",
  "CardId": 146,
  "CardPAN": "CardPAN2",
  "CardExpiry": "CardExpiry6",
  "TransactionDate": "TransactionDate6"
}
```

