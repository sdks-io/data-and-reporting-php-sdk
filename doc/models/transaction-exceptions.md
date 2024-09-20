
# Transaction Exceptions

## Structure

`TransactionExceptions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `salesItemId` | `?float` | Optional | Unique Sales Item Identifier | getSalesItemId(): ?float | setSalesItemId(?float salesItemId): void |
| `cardId` | `?int` | Optional | Unique Card Identifier | getCardId(): ?int | setCardId(?int cardId): void |
| `productId` | `?int` | Optional | Product Id | getProductId(): ?int | setProductId(?int productId): void |
| `transactionGUID` | `?string` | Optional | Transaction Unique Identifier | getTransactionGUID(): ?string | setTransactionGUID(?string transactionGUID): void |
| `transactionDate` | `?string` | Optional | Local Transaction Date  of where the transaction took place<br>Format: yyyyMMdd | getTransactionDate(): ?string | setTransactionDate(?string transactionDate): void |
| `customerInvoiceValueTotalGross` | `?float` | Optional | Total Gross Amount for the Invoice Customer | getCustomerInvoiceValueTotalGross(): ?float | setCustomerInvoiceValueTotalGross(?float customerInvoiceValueTotalGross): void |
| `cardPAN` | `?string` | Optional | Card PAN number<br>Returns masked PAN number when masking is enabled at the Microservices configuration (Mask all digits except the last 6 digits of the PAN) | getCardPAN(): ?string | setCardPAN(?string cardPAN): void |
| `cardExpiry` | `?string` | Optional | Card Expiry Date<br>Format: yyyyMMdd | getCardExpiry(): ?string | setCardExpiry(?string cardExpiry): void |
| `transactionTime` | `?string` | Optional | Local Transaction Time of where the transaction took place<br>Format: HH:mm:ss (24 hours format) | getTransactionTime(): ?string | setTransactionTime(?string transactionTime): void |
| `uTCOffset` | `?string` | Optional | UTC Offset extracted from GFN Sales Date time. Note: This may not be accurate for all TPN transactions<br>Format: +/-HH:mm:ss (24 hours format) | getUTCOffset(): ?string | setUTCOffset(?string uTCOffset): void |
| `fleetIdInput` | `?string` | Optional | Fleet Id Input as entered by the drivers at the time of transaction | getFleetIdInput(): ?string | setFleetIdInput(?string fleetIdInput): void |
| `odometerInput` | `?int` | Optional | Odometer Input as entered by the drivers at the time of transaction | getOdometerInput(): ?int | setOdometerInput(?int odometerInput): void |
| `driverName` | `?string` | Optional | Driver Name embossed on the card | getDriverName(): ?string | setDriverName(?string driverName): void |
| `vehicleRegistration` | `?string` | Optional | Vehicle Registration Number embossed on the card | getVehicleRegistration(): ?string | setVehicleRegistration(?string vehicleRegistration): void |
| `invoiceCurrencyCode` | `?string` | Optional | ISO currency code (Example: GBP) | getInvoiceCurrencyCode(): ?string | setInvoiceCurrencyCode(?string invoiceCurrencyCode): void |
| `invoiceCurrencySymbol` | `?string` | Optional | Currency symbol of the Invoice Currency Code (i.e. £, $, etc.,) | getInvoiceCurrencySymbol(): ?string | setInvoiceCurrencySymbol(?string invoiceCurrencySymbol): void |
| `transactionCurrencyCode` | `?string` | Optional | ISO currency code | getTransactionCurrencyCode(): ?string | setTransactionCurrencyCode(?string transactionCurrencyCode): void |
| `transactionCurrencySymbol` | `?string` | Optional | Currency symbol of the Transaction Currency Code (i.e. £, $, etc.,) | getTransactionCurrencySymbol(): ?string | setTransactionCurrencySymbol(?string transactionCurrencySymbol): void |
| `transactionNetAmount` | `?float` | Optional | Net Amount | getTransactionNetAmount(): ?float | setTransactionNetAmount(?float transactionNetAmount): void |
| `transactionTax` | `?float` | Optional | Tax Amount | getTransactionTax(): ?float | setTransactionTax(?float transactionTax): void |
| `transactionGrossAmount` | `?float` | Optional | Gross Amount | getTransactionGrossAmount(): ?float | setTransactionGrossAmount(?float transactionGrossAmount): void |
| `invoiceNetAmount` | `?float` | Optional | Invoiced Net Amount | getInvoiceNetAmount(): ?float | setInvoiceNetAmount(?float invoiceNetAmount): void |
| `invoiceTax` | `?float` | Optional | Invoiced Tax Amount | getInvoiceTax(): ?float | setInvoiceTax(?float invoiceTax): void |
| `invoiceGrossAmount` | `?float` | Optional | Invoice Gross Amount | getInvoiceGrossAmount(): ?float | setInvoiceGrossAmount(?float invoiceGrossAmount): void |
| `purchasedInCountry` | `?string` | Optional | Country of Purchase (Ex: France, Germany, etc.,) | getPurchasedInCountry(): ?string | setPurchasedInCountry(?string purchasedInCountry): void |
| `accountId` | `?int` | Optional | Account Id | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountName` | `?string` | Optional | Account Name | getAccountName(): ?string | setAccountName(?string accountName): void |
| `accountShortName` | `?string` | Optional | Account Short Name | getAccountShortName(): ?string | setAccountShortName(?string accountShortName): void |
| `quantity` | `?float` | Optional | Quantity/Volume | getQuantity(): ?float | setQuantity(?float quantity): void |
| `fuelProduct` | `?bool` | Optional | True if the product on transaction is listed as a fuel product else return false | getFuelProduct(): ?bool | setFuelProduct(?bool fuelProduct): void |
| `unitPriceInTransactionCurrency` | `?float` | Optional | Product Unit Price in transaction currency | getUnitPriceInTransactionCurrency(): ?float | setUnitPriceInTransactionCurrency(?float unitPriceInTransactionCurrency): void |
| `unitPriceInInvoiceCurrency` | `?float` | Optional | Product Unit Price in invoice currency | getUnitPriceInInvoiceCurrency(): ?float | setUnitPriceInInvoiceCurrency(?float unitPriceInInvoiceCurrency): void |
| `unitDiscountTransactionCurrency` | `?float` | Optional | Unit Discount in transaction currency | getUnitDiscountTransactionCurrency(): ?float | setUnitDiscountTransactionCurrency(?float unitDiscountTransactionCurrency): void |
| `unitDiscountInvoiceCurrency` | `?float` | Optional | Unit Discount in invoice currency | getUnitDiscountInvoiceCurrency(): ?float | setUnitDiscountInvoiceCurrency(?float unitDiscountInvoiceCurrency): void |
| `isInvoiced` | `?bool` | Optional | True when the transaction is already invoice, else return False | getIsInvoiced(): ?bool | setIsInvoiced(?bool isInvoiced): void |
| `invoiceNumber` | `?string` | Optional | Invoice Number if invoiced | getInvoiceNumber(): ?string | setInvoiceNumber(?string invoiceNumber): void |
| `invoiceDate` | `?string` | Optional | Invoice Date<br>Format: yyyyMMdd HH:mm:ss | getInvoiceDate(): ?string | setInvoiceDate(?string invoiceDate): void |
| `siteCode` | `?string` | Optional | Site Code | getSiteCode(): ?string | setSiteCode(?string siteCode): void |
| `siteName` | `?string` | Optional | Site Name | getSiteName(): ?string | setSiteName(?string siteName): void |
| `siteCountry` | `?string` | Optional | Site Country | getSiteCountry(): ?string | setSiteCountry(?string siteCountry): void |
| `location` | [`?Location`](../../doc/models/location.md) | Optional | - | getLocation(): ?Location | setLocation(?Location location): void |
| `cardGroupName` | `?string` | Optional | Card Group Name | getCardGroupName(): ?string | setCardGroupName(?string cardGroupName): void |
| `receiptNumber` | `?string` | Optional | Receipt Number | getReceiptNumber(): ?string | setReceiptNumber(?string receiptNumber): void |
| `productCode` | `?string` | Optional | Product Code | getProductCode(): ?string | setProductCode(?string productCode): void |
| `productName` | `?string` | Optional | Product Name | getProductName(): ?string | setProductName(?string productName): void |
| `productGroupId` | `?int` | Optional | Product Group Id | getProductGroupId(): ?int | setProductGroupId(?int productGroupId): void |
| `productGroupName` | `?string` | Optional | Product Group Name | getProductGroupName(): ?string | setProductGroupName(?string productGroupName): void |
| `delCoExchangeRate` | `?float` | Optional | DelCo Exchange Rate (Site exchange rate) | getDelCoExchangeRate(): ?float | setDelCoExchangeRate(?float delCoExchangeRate): void |
| `colCoExchangeRate` | `?float` | Optional | ColCo Exchange Rate (Customer exchange rate) | getColCoExchangeRate(): ?float | setColCoExchangeRate(?float colCoExchangeRate): void |
| `isShellSite` | `?bool` | Optional | True when transaction occurred at a Shell site else return False | getIsShellSite(): ?bool | setIsShellSite(?bool isShellSite): void |
| `network` | `?string` | Optional | Network as configured | getNetwork(): ?string | setNetwork(?string network): void |
| `siteGroupId` | `?int` | Optional | Site Group Id | getSiteGroupId(): ?int | setSiteGroupId(?int siteGroupId): void |
| `siteGroupName` | `?string` | Optional | Site GroupName | getSiteGroupName(): ?string | setSiteGroupName(?string siteGroupName): void |
| `postingDate` | `?string` | Optional | Site GroupName | getPostingDate(): ?string | setPostingDate(?string postingDate): void |
| `issuerCode` | `?string` | Optional | First digits of the Card PAN<br>7002 = Fleet  <br>7077 = CRT | getIssuerCode(): ?string | setIssuerCode(?string issuerCode): void |
| `purchasedInCountryCode` | `?string` | Optional | ISO code of the country where the transaction took place | getPurchasedInCountryCode(): ?string | setPurchasedInCountryCode(?string purchasedInCountryCode): void |
| `customerCountryCode` | `?string` | Optional | ISO code of the  Customer Country | getCustomerCountryCode(): ?string | setCustomerCountryCode(?string customerCountryCode): void |
| `customerCountry` | `?string` | Optional | Name of the Customer Country | getCustomerCountry(): ?string | setCustomerCountry(?string customerCountry): void |
| `releaseCode` | `?string` | Optional | Release code, 7th Digit of the Card PAN | getReleaseCode(): ?string | setReleaseCode(?string releaseCode): void |
| `cardGroupId` | `?string` | Optional | Card group ID | getCardGroupId(): ?string | setCardGroupId(?string cardGroupId): void |
| `cardSequenceNumber` | `?string` | Optional | 3 digits, Card sequence number and Check digit  (Digit 16,17 and 18 on the card pan) | getCardSequenceNumber(): ?string | setCardSequenceNumber(?string cardSequenceNumber): void |
| `checkDigit` | `?string` | Optional | Check digit, Last number of the card pan | getCheckDigit(): ?string | setCheckDigit(?string checkDigit): void |
| `fleetIDDescription` | `?string` | Optional | FleetId/CRN description in Card Platform configured at the account level | getFleetIDDescription(): ?string | setFleetIDDescription(?string fleetIDDescription): void |
| `vATRate` | `?float` | Optional | VAT Percentage | getVATRate(): ?float | setVATRate(?float vATRate): void |
| `vATCategory` | `?string` | Optional | VAT Category Id-Description<br>1-Zero Rated<br>2-A1 PH-O 12% Sales Domestic<br>3-VAT exempt | getVATCategory(): ?string | setVATCategory(?string vATCategory): void |
| `effectiveDiscountInTrxCurrency` | `?string` | Optional | Effective Discount (excluding VAT, in transaction currency)  4 digits | getEffectiveDiscountInTrxCurrency(): ?string | setEffectiveDiscountInTrxCurrency(?string effectiveDiscountInTrxCurrency): void |
| `transactionType` | `?string` | Optional | Transaction Type | getTransactionType(): ?string | setTransactionType(?string transactionType): void |
| `pINIndicator` | `?string` | Optional | Pin Indicator (Indicates whether PIN used or not used at the time of transaction) | getPINIndicator(): ?string | setPINIndicator(?string pINIndicator): void |
| `vATApplicable` | `?string` | Optional | Is VAT Applicable for this transaction<br>“Y” or “N” | getVATApplicable(): ?string | setVATApplicable(?string vATApplicable): void |
| `netInvoiceIndicator` | `?string` | Optional | Net Invoice Indicator, Will the customer receive an invoice without VAT?<br>Example: “Y” or “N” | getNetInvoiceIndicator(): ?string | setNetInvoiceIndicator(?string netInvoiceIndicator): void |
| `customerCurrencyCode` | `?string` | Optional | Customer currency code | getCustomerCurrencyCode(): ?string | setCustomerCurrencyCode(?string customerCurrencyCode): void |
| `customerCurrencySymbol` | `?string` | Optional | Customer currency Symbol | getCustomerCurrencySymbol(): ?string | setCustomerCurrencySymbol(?string customerCurrencySymbol): void |
| `effectiveUnitDiscountInCustomerCurrency` | `?float` | Optional | Effective Unit Discount | getEffectiveUnitDiscountInCustomerCurrency(): ?float | setEffectiveUnitDiscountInCustomerCurrency(?float effectiveUnitDiscountInCustomerCurrency): void |
| `effectiveDiscountInCustomerCurrency` | `?float` | Optional | Effective Discount | getEffectiveDiscountInCustomerCurrency(): ?float | setEffectiveDiscountInCustomerCurrency(?float effectiveDiscountInCustomerCurrency): void |
| `vATonNetAmountInCustomerCurrency` | `?float` | Optional | VAT on Net Amount | getVATonNetAmountInCustomerCurrency(): ?float | setVATonNetAmountInCustomerCurrency(?float vATonNetAmountInCustomerCurrency): void |
| `discountType` | `?string` | Optional | Discount Type<br>Example: 1-None<br>2-Pence per unit<br>3-Percentage | getDiscountType(): ?string | setDiscountType(?string discountType): void |
| `transactionStatus` | `?string` | Optional | Transaction status  "U" or "I"<br>“U” stands for Uninvoiced<br>“I” stands for Invoiced | getTransactionStatus(): ?string | setTransactionStatus(?string transactionStatus): void |
| `payerGroup` | `?string` | Optional | Payer Group applicable for the Large Customer NL+8 digit code | getPayerGroup(): ?string | setPayerGroup(?string payerGroup): void |
| `refundFlag` | `?string` | Optional | Refund Flag “N” for Not Refunded and “Y” for Refunded. | getRefundFlag(): ?string | setRefundFlag(?string refundFlag): void |
| `originalSalesItemId` | `?float` | Optional | Shows Sales Item Id of the original item that was refunded | getOriginalSalesItemId(): ?float | setOriginalSalesItemId(?float originalSalesItemId): void |
| `delcoName` | `?string` | Optional | Delco Name | getDelcoName(): ?string | setDelcoName(?string delcoName): void |
| `delcoCode` | `?string` | Optional | Delco Code | getDelcoCode(): ?string | setDelcoCode(?string delcoCode): void |
| `payerNumber` | `?string` | Optional | Payer number | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `payerName` | `?string` | Optional | Payer name | getPayerName(): ?string | setPayerName(?string payerName): void |
| `cardExpiryPeriod` | `?string` | Optional | Year/Month of the Card Expiry captured on the transaction | getCardExpiryPeriod(): ?string | setCardExpiryPeriod(?string cardExpiryPeriod): void |
| `authorisationCode` | `?string` | Optional | Authorisation code of the transaction | getAuthorisationCode(): ?string | setAuthorisationCode(?string authorisationCode): void |
| `transactionId` | `?string` | Optional | Unique id of the transaction that may include one or more salesitems | getTransactionId(): ?string | setTransactionId(?string transactionId): void |
| `transactionLine` | `?string` | Optional | Transaction line item number | getTransactionLine(): ?string | setTransactionLine(?string transactionLine): void |
| `allowClearing` | `?string` | Optional | Is the Sales Item allowed for clearing? i.e. not written off<br>Example: “Y” or “N” | getAllowClearing(): ?string | setAllowClearing(?string allowClearing): void |
| `cRMNumber` | `?string` | Optional | CRM Case number if the sales item is in dispute | getCRMNumber(): ?string | setCRMNumber(?string cRMNumber): void |
| `disputeStatus` | `?string` | Optional | Sales Item Dispute Status if disputed<br>0    No Dispute<br>1    In Dispute<br>2    Re-Instated<br>3    Adjusted<br>4    Written Off by Colco<br>5    Written Off by Delco<br>6    Charged Back to Site | getDisputeStatus(): ?string | setDisputeStatus(?string disputeStatus): void |
| `rebateRate` | `?float` | Optional | Unit discount in customer currency | getRebateRate(): ?float | setRebateRate(?float rebateRate): void |
| `delCoToColCoExchangeRate` | `?float` | Optional | Exchange rate from transaction currency to customer currency. | getDelCoToColCoExchangeRate(): ?float | setDelCoToColCoExchangeRate(?float delCoToColCoExchangeRate): void |
| `netEuroAmount` | `?float` | Optional | Net euro amount. | getNetEuroAmount(): ?float | setNetEuroAmount(?float netEuroAmount): void |
| `euroRebateAmount` | `?float` | Optional | Euro rebate amount. | getEuroRebateAmount(): ?float | setEuroRebateAmount(?float euroRebateAmount): void |
| `euroVATAmount` | `?float` | Optional | Euro VAT amount. | getEuroVATAmount(): ?float | setEuroVATAmount(?float euroVATAmount): void |
| `parentCustomerNumber` | `?string` | Optional | Parent customer number | getParentCustomerNumber(): ?string | setParentCustomerNumber(?string parentCustomerNumber): void |
| `vATonNetAmount` | `?float` | Optional | VAT on Net Amount (in transaction currency) 2 decimals | getVATonNetAmount(): ?float | setVATonNetAmount(?float vATonNetAmount): void |
| `vATCountry` | `?string` | Optional | VAT Country | getVATCountry(): ?string | setVATCountry(?string vATCountry): void |

## Example (as JSON)

```json
{
  "SalesItemId": 113.2,
  "CardId": 104,
  "ProductId": 220,
  "TransactionGUID": "TransactionGUID2",
  "TransactionDate": "TransactionDate6"
}
```

