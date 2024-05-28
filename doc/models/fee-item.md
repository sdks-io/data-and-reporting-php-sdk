
# Fee Item

## Structure

`FeeItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `feeItemId` | `?int` | Optional | Fee Item unique identifier in the H3 Cards Platform | getFeeItemId(): ?int | setFeeItemId(?int feeItemId): void |
| `accountId` | `?int` | Optional | Account Id | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountShortName` | `?string` | Optional | Account short Number | getAccountShortName(): ?string | setAccountShortName(?string accountShortName): void |
| `invoiceAccountId` | `?int` | Optional | Invoice Account Id | getInvoiceAccountId(): ?int | setInvoiceAccountId(?int invoiceAccountId): void |
| `invoiceAccountNumber` | `?string` | Optional | Invoice Account Number | getInvoiceAccountNumber(): ?string | setInvoiceAccountNumber(?string invoiceAccountNumber): void |
| `invoiceAccountShortName` | `?string` | Optional | Invoice Account short Name | getInvoiceAccountShortName(): ?string | setInvoiceAccountShortName(?string invoiceAccountShortName): void |
| `payerId` | `?int` | Optional | Payer Id | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `payerShortName` | `?string` | Optional | Payer short Name | getPayerShortName(): ?string | setPayerShortName(?string payerShortName): void |
| `cardId` | `?int` | Optional | Unique Card Id | getCardId(): ?int | setCardId(?int cardId): void |
| `pAN` | `?string` | Optional | Card PAN | getPAN(): ?string | setPAN(?string pAN): void |
| `cardGroupId` | `?int` | Optional | Card Group Id | getCardGroupId(): ?int | setCardGroupId(?int cardGroupId): void |
| `cardGroupName` | `?string` | Optional | Card Group Name | getCardGroupName(): ?string | setCardGroupName(?string cardGroupName): void |
| `feeTypeId` | `?int` | Optional | Fee type identifier. | getFeeTypeId(): ?int | setFeeTypeId(?int feeTypeId): void |
| `feeType` | `?string` | Optional | Fee type description | getFeeType(): ?string | setFeeType(?string feeType): void |
| `feeTypeGroup` | `?string` | Optional | Fee type group in under which the Fee item is generated.<br>Example:<br>Account<br>Card<br>Others | getFeeTypeGroup(): ?string | setFeeTypeGroup(?string feeTypeGroup): void |
| `feeRuleId` | `?int` | Optional | Fee rule identifier | getFeeRuleId(): ?int | setFeeRuleId(?int feeRuleId): void |
| `feeRuleDescription` | `?string` | Optional | Fee rule description | getFeeRuleDescription(): ?string | setFeeRuleDescription(?string feeRuleDescription): void |
| `feeRuleTiers` | [`?(FeesFeeRuleTiers[])`](../../doc/models/fees-fee-rule-tiers.md) | Optional | - | getFeeRuleTiers(): ?array | setFeeRuleTiers(?array feeRuleTiers): void |
| `feeItemDate` | `?string` | Optional | Local Fee Item Date of when the transaction took place<br>Format: yyyyMMdd | getFeeItemDate(): ?string | setFeeItemDate(?string feeItemDate): void |
| `feeItemTime` | `?string` | Optional | Local Fee Item Time of where the transaction took place<br>Format: HH:mm:ss (24 hours format) | getFeeItemTime(): ?string | setFeeItemTime(?string feeItemTime): void |
| `isManual` | `?bool` | Optional | True/False.<br>Is manual | getIsManual(): ?bool | setIsManual(?bool isManual): void |
| `isCancelled` | `?bool` | Optional | True/False.<br>Is cancelled | getIsCancelled(): ?bool | setIsCancelled(?bool isCancelled): void |
| `customerCurrencyCode` | `?string` | Optional | ISO currency code<br>Example: GBP | getCustomerCurrencyCode(): ?string | setCustomerCurrencyCode(?string customerCurrencyCode): void |
| `customerCurrencySymbol` | `?string` | Optional | Currency symbol of the Currency Code<br>Example: £, $ | getCustomerCurrencySymbol(): ?string | setCustomerCurrencySymbol(?string customerCurrencySymbol): void |
| `productId` | `?int` | Optional | Product Id<br>Example: Sample list of product ids and description.<br>100 Service fee<br>102 Invoice production fee<br>103 Account fee<br>104 Transaction fee<br>105 Card membership fee | getProductId(): ?int | setProductId(?int productId): void |
| `productCode` | `?string` | Optional | Product Code – Global as per GFN configuration<br>Example:<br>2 Service fee<br>4 Invoice production fee<br>5 Account fee<br>6 Transaction fee<br>7 Card membership fee | getProductCode(): ?string | setProductCode(?string productCode): void |
| `productName` | `?string` | Optional | Product Name<br>Example: Sample list of product ids and description.<br>Service fee<br>Invoice production fee | getProductName(): ?string | setProductName(?string productName): void |
| `productGroupId` | `?int` | Optional | Product Group Id<br>Example: Sample list<br>22	Card related fees<br>23	Monetary Adjustment | getProductGroupId(): ?int | setProductGroupId(?int productGroupId): void |
| `productGroupName` | `?string` | Optional | Product Group Name<br>Example: Sample list<br>22	Card related fees<br>23	Monetary Adjustment | getProductGroupName(): ?string | setProductGroupName(?string productGroupName): void |
| `lineItemDescription` | `?string` | Optional | Line Item Description generally the quantity as printed on Invoice or the manually keyed in description for manual fees | getLineItemDescription(): ?string | setLineItemDescription(?string lineItemDescription): void |
| `quantity` | `?int` | Optional | Quantity | getQuantity(): ?int | setQuantity(?int quantity): void |
| `isInvoiced` | `?bool` | Optional | True/False.<br>Is fee item invoiced | getIsInvoiced(): ?bool | setIsInvoiced(?bool isInvoiced): void |
| `vATCountryCode` | `?string` | Optional | VAT country ISO code | getVATCountryCode(): ?string | setVATCountryCode(?string vATCountryCode): void |
| `vATCountryName` | `?string` | Optional | VAT country name | getVATCountryName(): ?string | setVATCountryName(?string vATCountryName): void |
| `vATPercentage` | `?float` | Optional | VAT percentage | getVATPercentage(): ?float | setVATPercentage(?float vATPercentage): void |
| `vATCategoryID` | `?int` | Optional | VAT Category identifier | getVATCategoryID(): ?int | setVATCategoryID(?int vATCategoryID): void |
| `vATCategoryDescription` | `?string` | Optional | VAT Category description | getVATCategoryDescription(): ?string | setVATCategoryDescription(?string vATCategoryDescription): void |
| `legislativeRegionId` | `?int` | Optional | Legislative region id | getLegislativeRegionId(): ?int | setLegislativeRegionId(?int legislativeRegionId): void |
| `legislativeRegionName` | `?string` | Optional | Legislative region name | getLegislativeRegionName(): ?string | setLegislativeRegionName(?string legislativeRegionName): void |
| `systemEntryDate` | `?string` | Optional | System entry date | getSystemEntryDate(): ?string | setSystemEntryDate(?string systemEntryDate): void |
| `systemEntryTime` | `?string` | Optional | System entry time | getSystemEntryTime(): ?string | setSystemEntryTime(?string systemEntryTime): void |
| `colCoNetAmount` | `?float` | Optional | ColCo net amount | getColCoNetAmount(): ?float | setColCoNetAmount(?float colCoNetAmount): void |
| `colCoVATAmount` | `?float` | Optional | ColCoVAT amount | getColCoVATAmount(): ?float | setColCoVATAmount(?float colCoVATAmount): void |
| `colCoGrossAmount` | `?float` | Optional | ColCo gross amount | getColCoGrossAmount(): ?float | setColCoGrossAmount(?float colCoGrossAmount): void |
| `interimInvoiceId` | `?int` | Optional | Interim invoice id | getInterimInvoiceId(): ?int | setInterimInvoiceId(?int interimInvoiceId): void |
| `interimInvoiceNumber` | `?string` | Optional | Interim invoice number | getInterimInvoiceNumber(): ?string | setInterimInvoiceNumber(?string interimInvoiceNumber): void |
| `invoiceId` | `?int` | Optional | Invoice id | getInvoiceId(): ?int | setInvoiceId(?int invoiceId): void |
| `invoiceNumber` | `?string` | Optional | Invoice number | getInvoiceNumber(): ?string | setInvoiceNumber(?string invoiceNumber): void |
| `invoiceDate` | `?string` | Optional | Invoice date<br>Format: yyyyMMdd | getInvoiceDate(): ?string | setInvoiceDate(?string invoiceDate): void |
| `customerExchangeRate` | `?float` | Optional | Customer exchange rate | getCustomerExchangeRate(): ?float | setCustomerExchangeRate(?float customerExchangeRate): void |
| `invoiceNetAmount` | `?float` | Optional | Invoice net amount | getInvoiceNetAmount(): ?float | setInvoiceNetAmount(?float invoiceNetAmount): void |
| `invoiceGrossAmount` | `?float` | Optional | Invoice gross amount | getInvoiceGrossAmount(): ?float | setInvoiceGrossAmount(?float invoiceGrossAmount): void |
| `invoiceVATAmount` | `?float` | Optional | Invoice VAT amount | getInvoiceVATAmount(): ?float | setInvoiceVATAmount(?float invoiceVATAmount): void |
| `reverseCharge` | `?bool` | Optional | True/False.<br>Reverse charge. | getReverseCharge(): ?bool | setReverseCharge(?bool reverseCharge): void |
| `originalFeeItemId` | `?int` | Optional | Original Fee Item id. | getOriginalFeeItemId(): ?int | setOriginalFeeItemId(?int originalFeeItemId): void |
| `originalCurrencyCode` | `?string` | Optional | Original FeeItem Currency ISO code. | getOriginalCurrencyCode(): ?string | setOriginalCurrencyCode(?string originalCurrencyCode): void |
| `originalCurrencySymbol` | `?string` | Optional | Original FeeItem currency symbol | getOriginalCurrencySymbol(): ?string | setOriginalCurrencySymbol(?string originalCurrencySymbol): void |
| `originalUnitPrice` | `?float` | Optional | Original FeeItem unit price | getOriginalUnitPrice(): ?float | setOriginalUnitPrice(?float originalUnitPrice): void |
| `originalNetAmount` | `?float` | Optional | Original FeeItem net amount | getOriginalNetAmount(): ?float | setOriginalNetAmount(?float originalNetAmount): void |
| `originalVATAmount` | `?float` | Optional | Original FeeItem VAT amount | getOriginalVATAmount(): ?float | setOriginalVATAmount(?float originalVATAmount): void |
| `originalGrossAmount` | `?float` | Optional | Original FeeItem gross amount | getOriginalGrossAmount(): ?float | setOriginalGrossAmount(?float originalGrossAmount): void |
| `originalExchangeRate` | `?float` | Optional | Original FeeItem exchange rate | getOriginalExchangeRate(): ?float | setOriginalExchangeRate(?float originalExchangeRate): void |
| `originalLegislativeRegionId` | `?int` | Optional | Original legislative region id | getOriginalLegislativeRegionId(): ?int | setOriginalLegislativeRegionId(?int originalLegislativeRegionId): void |
| `originalLegislativeRegionName` | `?string` | Optional | Original legislative region name | getOriginalLegislativeRegionName(): ?string | setOriginalLegislativeRegionName(?string originalLegislativeRegionName): void |
| `frequency` | `?string` | Optional | Fee frequency derived from Fee rules if applicable<br>Returns ID-Description in one field<br>Example:<br>1- Daily (all days)<br>2-Daily (only working days)<br>3-Weekly – Monday<br>4-Weekly - Tuesday | getFrequency(): ?string | setFrequency(?string frequency): void |
| `feeItemCardLevelBreakup` | `?string` | Optional | Fee breakup at card level for Fee Items where applicable. | getFeeItemCardLevelBreakup(): ?string | setFeeItemCardLevelBreakup(?string feeItemCardLevelBreakup): void |
| `originalFeeItemInvoiceId` | `?int` | Optional | Invoice Id/ Billing Document Id of the original fee item (when not null).<br>Applicable only for fee items that are refund to an original fee item that is already invoiced. | getOriginalFeeItemInvoiceId(): ?int | setOriginalFeeItemInvoiceId(?int originalFeeItemInvoiceId): void |
| `originalFeeItemInvoiceNumber` | `?string` | Optional | Invoice Number of the original fee item (when not null).<br>Applicable only for fee items that are refund to an original fee item that is already invoiced. | getOriginalFeeItemInvoiceNumber(): ?string | setOriginalFeeItemInvoiceNumber(?string originalFeeItemInvoiceNumber): void |
| `originalFeeItemInvoiceDate` | `?string` | Optional | Invoice Date of the original fee item (when not null).<br>Applicable only for fee items that are refund to an original fee item that is already invoiced.<br>Format: yyyyMMdd | getOriginalFeeItemInvoiceDate(): ?string | setOriginalFeeItemInvoiceDate(?string originalFeeItemInvoiceDate): void |
| `driverName` | `?string` | Optional | Driver name embossed on the Card | getDriverName(): ?string | setDriverName(?string driverName): void |
| `embossText` | `?string` | Optional | Text embossed on the Card | getEmbossText(): ?string | setEmbossText(?string embossText): void |
| `vRN` | `?string` | Optional | Reg. Number embossed on the Card | getVRN(): ?string | setVRN(?string vRN): void |

## Example (as JSON)

```json
{
  "FeeItemId": 156,
  "AccountId": 244,
  "AccountNumber": "AccountNumber6",
  "AccountShortName": "AccountShortName8",
  "InvoiceAccountId": 204
}
```

