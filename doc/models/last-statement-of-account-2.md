
# Last Statement of Account 2

## Structure

`LastStatementOfAccount2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amountDue` | `?float` | Optional | Invoiced amount and due for payment. | getAmountDue(): ?float | setAmountDue(?float amountDue): void |
| `amountNotOverdue` | `?float` | Optional | Invoiced amount and not overdue for payment. | getAmountNotOverdue(): ?float | setAmountNotOverdue(?float amountNotOverdue): void |
| `amountOverdue` | `?float` | Optional | Invoiced amount and overdue for payment. | getAmountOverdue(): ?float | setAmountOverdue(?float amountOverdue): void |
| `creditLimit` | `?int` | Optional | Credit limit. | getCreditLimit(): ?int | setCreditLimit(?int creditLimit): void |
| `creditLimitCurrencyCode` | `?string` | Optional | ISO code of the credit limit’s currency.<br>Example: EUR | getCreditLimitCurrencyCode(): ?string | setCreditLimitCurrencyCode(?string creditLimitCurrencyCode): void |
| `creditLimitCurrencySymbol` | `?string` | Optional | Symbol of the credit limit’s currency.<br>Example: € | getCreditLimitCurrencySymbol(): ?string | setCreditLimitCurrencySymbol(?string creditLimitCurrencySymbol): void |
| `creditLimitInCustomerCurrency` | `?float` | Optional | Credit limit in Customer currency.<br>**Note**: For currency details refer the parameters CurrencyCode & CurrencySymbol in the StatementOfAccount response. | getCreditLimitInCustomerCurrency(): ?float | setCreditLimitInCustomerCurrency(?float creditLimitInCustomerCurrency): void |
| `currencyCode` | `?string` | Optional | ISO code of SOA currency.<br>Example: EUR | getCurrencyCode(): ?string | setCurrencyCode(?string currencyCode): void |
| `currencySymbol` | `?string` | Optional | Symbol of SOA currency.<br>Example: € | getCurrencySymbol(): ?string | setCurrencySymbol(?string currencySymbol): void |
| `lastPaymentCurrencyCode` | `?string` | Optional | ISO code of Last Payment currency.<br>Example: EUR | getLastPaymentCurrencyCode(): ?string | setLastPaymentCurrencyCode(?string lastPaymentCurrencyCode): void |
| `lastPaymentCurrencySymbol` | `?string` | Optional | Symbol of Last Payment currency.<br>Example: € | getLastPaymentCurrencySymbol(): ?string | setLastPaymentCurrencySymbol(?string lastPaymentCurrencySymbol): void |
| `lastPaymentDate` | `?string` | Optional | Last payment date. Format: yyyyMMdd | getLastPaymentDate(): ?string | setLastPaymentDate(?string lastPaymentDate): void |
| `lastPaymentValue` | `?float` | Optional | Last payment value. | getLastPaymentValue(): ?float | setLastPaymentValue(?float lastPaymentValue): void |
| `outstandingBalance` | `?float` | Optional | Current outstanding balance amount. | getOutstandingBalance(): ?float | setOutstandingBalance(?float outstandingBalance): void |
| `payerId` | `?int` | Optional | Payment customer id of the customer. | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payment customer number. | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `paymentDueDate` | `?string` | Optional | Due date for payment. Format: yyyyMMdd | getPaymentDueDate(): ?string | setPaymentDueDate(?string paymentDueDate): void |
| `paymentMethod` | `?string` | Optional | Payment method description of the Payer.<br>Example: Id & Description<br>•    Incoming - Direct Debit<br>•    Incoming - Cheque<br>•    Incoming - Direct Debit A<br>•    Incoming - Bank Transfer<br>•    Incoming - Cash | getPaymentMethod(): ?string | setPaymentMethod(?string paymentMethod): void |
| `paymentMethodId` | `?int` | Optional | Payment method Id of the Payer.<br>Example: Id & Description<br>•    Incoming - Direct Debit<br>•    Incoming - Cheque<br>•    Incoming - Direct Debit A<br>•    Incoming - Bank Transfer<br>•    Incoming - Cash | getPaymentMethodId(): ?int | setPaymentMethodId(?int paymentMethodId): void |
| `paymentTerms` | `?string` | Optional | Payment terms description of the Payer.<br>Example: Id & Description<br>•    14 days after Invoice<br>•    15 days after Invoice<br>•    21 days after Invoice<br>•    30 days after Invoice<br>•    45 days after Invoice<br>•    0 days after invoice<br>•    days after invoice<br>•    days after invoice<br>•    7 days after invoice<br>•    10th of the following month | getPaymentTerms(): ?string | setPaymentTerms(?string paymentTerms): void |
| `paymentTermsId` | `?int` | Optional | Payment terms Id of the Payer.<br>Example: Id & Description<br>•    14 days after Invoice<br>•    15 days after Invoice<br>•    21 days after Invoice<br>•    30 days after Invoice<br>•    45 days after Invoice<br>•    0 days after invoice<br>•    days after invoice<br>•    days after invoice<br>•    7 days after invoice<br>•    10th of the following month | getPaymentTermsId(): ?int | setPaymentTermsId(?int paymentTermsId): void |
| `soAReferenceNumber` | `?string` | Optional | Statement of account reference number | getSoAReferenceNumber(): ?string | setSoAReferenceNumber(?string soAReferenceNumber): void |
| `statementDate` | `?string` | Optional | Date on which the SOA was generated.<br>Format: yyyyMMdd | getStatementDate(): ?string | setStatementDate(?string statementDate): void |
| `statementOfAccountId` | `?int` | Optional | Statement of account identifier,<br>Example: 1 | getStatementOfAccountId(): ?int | setStatementOfAccountId(?int statementOfAccountId): void |
| `totalBillingDocuments` | `?int` | Optional | Total number of billing documents for this Statement of Account | getTotalBillingDocuments(): ?int | setTotalBillingDocuments(?int totalBillingDocuments): void |
| `totalSummaryBillingDocuments` | `?int` | Optional | Total number of summary billing documents for this Statement of Account | getTotalSummaryBillingDocuments(): ?int | setTotalSummaryBillingDocuments(?int totalSummaryBillingDocuments): void |
| `unallocatedPayment` | `?int` | Optional | Unallocated payment.<br>When negative, indicates overdue amount. | getUnallocatedPayment(): ?int | setUnallocatedPayment(?int unallocatedPayment): void |

## Example (as JSON)

```json
{
  "AmountDue": 213.62,
  "AmountNotOverdue": 49.64,
  "AmountOverdue": 64.72,
  "CreditLimit": 6,
  "CreditLimitCurrencyCode": "CreditLimitCurrencyCode6"
}
```

