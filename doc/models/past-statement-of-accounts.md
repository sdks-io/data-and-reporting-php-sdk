
# Past Statement of Accounts

## Structure

`PastStatementOfAccounts`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amountDue` | `?float` | Optional | Invoiced amount under this statement of account and due for payment. | getAmountDue(): ?float | setAmountDue(?float amountDue): void |
| `amountNotOverdue` | `?float` | Optional | Total Invoiced amount until this SOA and not overdue for payment. | getAmountNotOverdue(): ?float | setAmountNotOverdue(?float amountNotOverdue): void |
| `amountOverdue` | `?float` | Optional | Overdue amount from the previously generated statement of accounts. | getAmountOverdue(): ?float | setAmountOverdue(?float amountOverdue): void |
| `amountOverdueFromUnallocated` | `?float` | Optional | Overdue amount calculated from unallocated payment. | getAmountOverdueFromUnallocated(): ?float | setAmountOverdueFromUnallocated(?float amountOverdueFromUnallocated): void |
| `amountPaid` | `?float` | Optional | Amount settled for this Statement. | getAmountPaid(): ?float | setAmountPaid(?float amountPaid): void |
| `balanceOnThisStatement` | `?float` | Optional | Balance amount to be settled on this SOA. | getBalanceOnThisStatement(): ?float | setBalanceOnThisStatement(?float balanceOnThisStatement): void |
| `billingCurrencyCode` | `?string` | Optional | Billing currency ISO code.<br>Example: EUR | getBillingCurrencyCode(): ?string | setBillingCurrencyCode(?string billingCurrencyCode): void |
| `billingCurrencySymbol` | `?string` | Optional | Billing currency symbol.<br>Example: € | getBillingCurrencySymbol(): ?string | setBillingCurrencySymbol(?string billingCurrencySymbol): void |
| `creditLimit` | `?float` | Optional | Credit limit. | getCreditLimit(): ?float | setCreditLimit(?float creditLimit): void |
| `creditLimitCurrencyCode` | `?string` | Optional | ISO code of the credit limit’s currency.<br>Example: EUR | getCreditLimitCurrencyCode(): ?string | setCreditLimitCurrencyCode(?string creditLimitCurrencyCode): void |
| `creditLimitCurrencySymbol` | `?string` | Optional | Symbol of the credit limit’s currency.<br>Example: € | getCreditLimitCurrencySymbol(): ?string | setCreditLimitCurrencySymbol(?string creditLimitCurrencySymbol): void |
| `creditLimitInCustomerCurrency` | `?float` | Optional | Credit limit in Customer currency.<br>Note: For currency details refer the parameters CurrencyCode & CurrencySymbol in the SOADetail response. | getCreditLimitInCustomerCurrency(): ?float | setCreditLimitInCustomerCurrency(?float creditLimitInCustomerCurrency): void |
| `currencyCode` | `?string` | Optional | ISO code of SOA currency.<br>Example: EUR | getCurrencyCode(): ?string | setCurrencyCode(?string currencyCode): void |
| `currencySymbol` | `?string` | Optional | Symbol of SOA currency.<br>Example: € | getCurrencySymbol(): ?string | setCurrencySymbol(?string currencySymbol): void |
| `fullyPaid` | `?bool` | Optional | True If all summary billing documents under this SOA are fully paid (i.e., the fully paid flag is set to true for all documents or the amount allocated is greater than or equal to the amount due under this SOA. | getFullyPaid(): ?bool | setFullyPaid(?bool fullyPaid): void |
| `lastPaymentCurrencyCode` | `?string` | Optional | ISO code of last payment currency.<br>Example: EUR | getLastPaymentCurrencyCode(): ?string | setLastPaymentCurrencyCode(?string lastPaymentCurrencyCode): void |
| `lastPaymentCurrencySymbol` | `?string` | Optional | Symbol of last payment currency.<br>Example: € | getLastPaymentCurrencySymbol(): ?string | setLastPaymentCurrencySymbol(?string lastPaymentCurrencySymbol): void |
| `lastPaymentDate` | `?string` | Optional | Last payment date. Format: yyyyMMdd | getLastPaymentDate(): ?string | setLastPaymentDate(?string lastPaymentDate): void |
| `lastPaymentValue` | `?float` | Optional | Last payment value. | getLastPaymentValue(): ?float | setLastPaymentValue(?float lastPaymentValue): void |
| `outstandingBalance` | `?float` | Optional | Total outstanding balance at the time of this SOA generation. | getOutstandingBalance(): ?float | setOutstandingBalance(?float outstandingBalance): void |
| `payerId` | `?int` | Optional | Payment customer id of the customer. | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payment customer number. | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `paymentDueDate` | `?string` | Optional | Due date for payment. Format: yyyyMMdd | getPaymentDueDate(): ?string | setPaymentDueDate(?string paymentDueDate): void |
| `soAReferenceNumber` | `?string` | Optional | Statement of account reference number. | getSoAReferenceNumber(): ?string | setSoAReferenceNumber(?string soAReferenceNumber): void |
| `statementDate` | `?string` | Optional | Date on which the SOA was generated.<br>Format: yyyyMMdd | getStatementDate(): ?string | setStatementDate(?string statementDate): void |
| `statementOfAccountId` | `?int` | Optional | Statement of account identifier, | getStatementOfAccountId(): ?int | setStatementOfAccountId(?int statementOfAccountId): void |
| `totalBillingDocuments` | `?int` | Optional | Total number of billing documents generated under this Statement of Account. | getTotalBillingDocuments(): ?int | setTotalBillingDocuments(?int totalBillingDocuments): void |
| `totalNetAmountBillingCurrency` | `?float` | Optional | Total NET amount from all billing documents in this SOA. | getTotalNetAmountBillingCurrency(): ?float | setTotalNetAmountBillingCurrency(?float totalNetAmountBillingCurrency): void |
| `totalSummaryBillingDocuments` | `?float` | Optional | Total number of summary billing documents for this Statement of Account | getTotalSummaryBillingDocuments(): ?float | setTotalSummaryBillingDocuments(?float totalSummaryBillingDocuments): void |
| `totalVATAmountBillingCurrency` | `?float` | Optional | Total VAT amount from all billing documents in this SOA. | getTotalVATAmountBillingCurrency(): ?float | setTotalVATAmountBillingCurrency(?float totalVATAmountBillingCurrency): void |
| `unallocatedPayment` | `?float` | Optional | Amount paid but not allocated to any invoices at the time of this SOA generation. | getUnallocatedPayment(): ?float | setUnallocatedPayment(?float unallocatedPayment): void |
| `localCurrencyCode` | `?string` | Optional | Currency ISO code of the local country. It is derived based on CountryCode from microservice configuration. This field is expected to have different value than the previously mentioned field CurrencyCode, only in the case of serviced OUs.<br>Example: EUR | getLocalCurrencyCode(): ?string | setLocalCurrencyCode(?string localCurrencyCode): void |
| `localCurrencySymbol` | `?string` | Optional | Currency Symbol of the local country. It is derived based on CountryCode from microservice configuration. This field is expected to have different value than the previously mentioned field CurrencySymbol, only in the case of serviced OUs.<br>Example: € | getLocalCurrencySymbol(): ?string | setLocalCurrencySymbol(?string localCurrencySymbol): void |
| `localCurrencyExchangeRate` | `?float` | Optional | Exchange rate from Billing currency to local currency.<br>Example: 1.2 | getLocalCurrencyExchangeRate(): ?float | setLocalCurrencyExchangeRate(?float localCurrencyExchangeRate): void |

## Example (as JSON)

```json
{
  "AmountDue": 208.8,
  "AmountNotOverdue": 54.46,
  "AmountOverdue": 69.54,
  "AmountOverdueFromUnallocated": 130.1,
  "AmountPaid": 138.64
}
```

