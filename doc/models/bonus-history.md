
# Bonus History

## Structure

`BonusHistory`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payerId` | `?int` | Optional | Payer Id | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `payerShortName` | `?string` | Optional | Payer short name. | getPayerShortName(): ?string | setPayerShortName(?string payerShortName): void |
| `payerFullName` | `?string` | Optional | Payer full name. | getPayerFullName(): ?string | setPayerFullName(?string payerFullName): void |
| `accountId` | `?int` | Optional | Account Id | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the selected payer. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountShortName` | `?string` | Optional | Account short name. | getAccountShortName(): ?string | setAccountShortName(?string accountShortName): void |
| `accountFullName` | `?string` | Optional | Account full name. | getAccountFullName(): ?string | setAccountFullName(?string accountFullName): void |
| `invoiceAccountId` | `?int` | Optional | Invoice Account Id | getInvoiceAccountId(): ?int | setInvoiceAccountId(?int invoiceAccountId): void |
| `invoiceAccountNumber` | `?string` | Optional | Invoice Account Number of the selected payer. | getInvoiceAccountNumber(): ?string | setInvoiceAccountNumber(?string invoiceAccountNumber): void |
| `invoiceAccountShortName` | `?string` | Optional | Invoice Account short name. | getInvoiceAccountShortName(): ?string | setInvoiceAccountShortName(?string invoiceAccountShortName): void |
| `invoiceAccountFullName` | `?string` | Optional | Invoice Account full name. | getInvoiceAccountFullName(): ?string | setInvoiceAccountFullName(?string invoiceAccountFullName): void |
| `feeRuleId` | `?string` | Optional | Bonus or association bonus configuration identifier | getFeeRuleId(): ?string | setFeeRuleId(?string feeRuleId): void |
| `feeRuleDescription` | `?string` | Optional | Bonus or association bonus configuration description that is associated to the bonus fee item | getFeeRuleDescription(): ?string | setFeeRuleDescription(?string feeRuleDescription): void |
| `fromDate` | `?string` | Optional | Bonus was calculated from this date.<br>Format: YYYYMMDD | getFromDate(): ?string | setFromDate(?string fromDate): void |
| `toDate` | `?string` | Optional | Bonus was calculated till this date.<br>Format: YYYYMMDD | getToDate(): ?string | setToDate(?string toDate): void |
| `bonusPaidTo` | `?string` | Optional | Specifies how the bonus was paid back.<br>Format: ID-Description<br>Example:<br>1-Pay to Payer<br>2-Pay to invoice levels before the payer<br>3-Pay to specific customer<br>4-Pay to Association Customer<br>5-Pay to Associated Customers | getBonusPaidTo(): ?string | setBonusPaidTo(?string bonusPaidTo): void |
| `feeItemId` | `?int` | Optional | Bonus fee item identifier. | getFeeItemId(): ?int | setFeeItemId(?int feeItemId): void |
| `feeRuleBasis` | `?string` | Optional | Fee Rule Basis of the bonus fee item.<br>Format: ID-Description<br>Example:<br>1-Currency Per Unit<br>2-Percentage of Uplift<br>3-Lump Sum | getFeeRuleBasis(): ?string | setFeeRuleBasis(?string feeRuleBasis): void |
| `feeItemCurrencyCode` | `?string` | Optional | ISO currency code of the currency in which Bonus is paid.<br>Example: GBP | getFeeItemCurrencyCode(): ?string | setFeeItemCurrencyCode(?string feeItemCurrencyCode): void |
| `feeItemCurrencySymbol` | `?string` | Optional | Currency symbol of the currency in which Bonus is paid. | getFeeItemCurrencySymbol(): ?string | setFeeItemCurrencySymbol(?string feeItemCurrencySymbol): void |
| `proratedVolume` | `?float` | Optional | Prorated volume considered under the account as  configured for the bonus association. | getProratedVolume(): ?float | setProratedVolume(?float proratedVolume): void |
| `totalVolume` | `?float` | Optional | Total volume considered for calculating the bonus. | getTotalVolume(): ?float | setTotalVolume(?float totalVolume): void |
| `feeProduct` | `?string` | Optional | Product as shown in the invoice for the bonus paid.<br>Format: ID-Description<br>Example: 1562-Bonus diesel Shell Netherlands on agreed site(s) | getFeeProduct(): ?string | setFeeProduct(?string feeProduct): void |
| `invoiceGrossAmount` | `?float` | Optional | Gross Amount – Bonus Paid including VAT as shown on the Invoice | getInvoiceGrossAmount(): ?float | setInvoiceGrossAmount(?float invoiceGrossAmount): void |
| `invoiceNetAmount` | `?float` | Optional | Net Amount – Bonus Paid excluding VAT as shown on the Invoice | getInvoiceNetAmount(): ?float | setInvoiceNetAmount(?float invoiceNetAmount): void |
| `invoiceVATAmount` | `?float` | Optional | VAT calculated for the bonus paid as shown on the Invoice | getInvoiceVATAmount(): ?float | setInvoiceVATAmount(?float invoiceVATAmount): void |
| `isFeeCancelled` | `?bool` | Optional | True/False<br>True if bonus is generated but cancelled. When true, consider this as not paid. | getIsFeeCancelled(): ?bool | setIsFeeCancelled(?bool isFeeCancelled): void |
| `feeItemTierProratedVolume` | `?float` | Optional | Prorated volume in the bonus fee item tier. | getFeeItemTierProratedVolume(): ?float | setFeeItemTierProratedVolume(?float feeItemTierProratedVolume): void |
| `feeItemTierTotalVolume` | `?float` | Optional | Total volume in the bonus fee item tier. | getFeeItemTierTotalVolume(): ?float | setFeeItemTierTotalVolume(?float feeItemTierTotalVolume): void |
| `tierMinimum` | `?int` | Optional | Tier minimum value considered for calculation | getTierMinimum(): ?int | setTierMinimum(?int tierMinimum): void |
| `tierRate` | `?float` | Optional | Tier rate considered for calculation | getTierRate(): ?float | setTierRate(?float tierRate): void |

## Example (as JSON)

```json
{
  "PayerId": 240,
  "PayerNumber": "PayerNumber0",
  "PayerShortName": "PayerShortName4",
  "PayerFullName": "PayerFullName0",
  "AccountId": 44
}
```

