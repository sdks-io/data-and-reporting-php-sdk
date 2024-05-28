
# Payments Since Last SOA

List of payments made by the customer after the latest Statement of Account.
Note: All the payments made by the customer will be returned when there is no Statement of Account available for customer.

## Structure

`PaymentsSinceLastSOA`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountId` | `?int` | Optional | Account Identifier for which payment is made.<br>Example: 12345 | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account number for which payment is made.<br>Example: GB000000123 | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountShortName` | `?string` | Optional | Account Short Name<br>Example: GB Earth Movers-SN | getAccountShortName(): ?string | setAccountShortName(?string accountShortName): void |
| `summaryDocumentId` | `?int` | Optional | Summary billing document reference id.<br>Example: 2 | getSummaryDocumentId(): ?int | setSummaryDocumentId(?int summaryDocumentId): void |
| `summaryDocumentNumber` | `?string` | Optional | Summary billing document reference number. | getSummaryDocumentNumber(): ?string | setSummaryDocumentNumber(?string summaryDocumentNumber): void |
| `summaryDocumentDate` | `?string` | Optional | Summary billing document date.<br>Format: YYYYMMDD | getSummaryDocumentDate(): ?string | setSummaryDocumentDate(?string summaryDocumentDate): void |
| `summaryDocumentPaymentDueDate` | `?string` | Optional | Payment due date of the Summary billing document.<br>Format: YYYYMMDD | getSummaryDocumentPaymentDueDate(): ?string | setSummaryDocumentPaymentDueDate(?string summaryDocumentPaymentDueDate): void |
| `summaryDocumentTotalValue` | `?float` | Optional | Total value in the Summary billing document. | getSummaryDocumentTotalValue(): ?float | setSummaryDocumentTotalValue(?float summaryDocumentTotalValue): void |
| `summaryDocumentTotalVAT` | `?float` | Optional | Total VAT in the Summary billing document. | getSummaryDocumentTotalVAT(): ?float | setSummaryDocumentTotalVAT(?float summaryDocumentTotalVAT): void |
| `summaryDocumentDDAmount` | `?float` | Optional | Total DD amount in the Summary billing document. | getSummaryDocumentDDAmount(): ?float | setSummaryDocumentDDAmount(?float summaryDocumentDDAmount): void |
| `paymentDate` | `?string` | Optional | Date of payment.<br>Format: YYYYMMDD | getPaymentDate(): ?string | setPaymentDate(?string paymentDate): void |
| `paymentReference` | `?string` | Optional | Reference text of the payment. | getPaymentReference(): ?string | setPaymentReference(?string paymentReference): void |
| `paymentCurrencyCode` | `?string` | Optional | ISO code of payment currency.<br>Example: EUR | getPaymentCurrencyCode(): ?string | setPaymentCurrencyCode(?string paymentCurrencyCode): void |
| `paymentCurrencySymbol` | `?string` | Optional | Symbol of payment currency.<br>Example: € | getPaymentCurrencySymbol(): ?string | setPaymentCurrencySymbol(?string paymentCurrencySymbol): void |
| `amountPaid` | `?float` | Optional | Amount paid. | getAmountPaid(): ?float | setAmountPaid(?float amountPaid): void |
| `balance` | `?float` | Optional | Balance amount to be settled for the Summary document. | getBalance(): ?float | setBalance(?float balance): void |
| `truePayment` | `?string` | Optional | True Payment. | getTruePayment(): ?string | setTruePayment(?string truePayment): void |
| `prepaidBalance` | `?float` | Optional | Balance in the pre-paid amount. | getPrepaidBalance(): ?float | setPrepaidBalance(?float prepaidBalance): void |
| `localCurrencyCode` | `?string` | Optional | Currency ISO code of the local country. It is derived based on CountryCode from microservice configuration. This field is expected to have different value than the previously mentioned field CurrencyCode, only in the case of serviced OUs.<br>Example: EUR | getLocalCurrencyCode(): ?string | setLocalCurrencyCode(?string localCurrencyCode): void |
| `localCurrencySymbol` | `?string` | Optional | Currency Symbol of the local country. It is derived based on CountryCode from microservice configuration. This field is expected to have different value than the previously mentioned field CurrencySymbol, only in the case of serviced OUs.<br>Example: € | getLocalCurrencySymbol(): ?string | setLocalCurrencySymbol(?string localCurrencySymbol): void |
| `localCurrencyExchangeRate` | `?string` | Optional | Exchange rate from Payment currency to local currency. | getLocalCurrencyExchangeRate(): ?string | setLocalCurrencyExchangeRate(?string localCurrencyExchangeRate): void |

## Example (as JSON)

```json
{
  "AccountId": 0,
  "AccountNumber": "AccountNumber4",
  "AccountShortName": "AccountShortName6",
  "SummaryDocumentId": 92,
  "SummaryDocumentNumber": "SummaryDocumentNumber8"
}
```

