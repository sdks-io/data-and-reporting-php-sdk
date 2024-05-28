
# Invoices Summaries

## Structure

`InvoicesSummaries`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amountDue` | `?float` | Optional | Amount due from last summary document date. | getAmountDue(): ?float | setAmountDue(?float amountDue): void |
| `amountNotOverdue` | `?float` | Optional | Amount that are due from past summary documents. | getAmountNotOverdue(): ?float | setAmountNotOverdue(?float amountNotOverdue): void |
| `amountOverdue` | `?float` | Optional | Amount that are overdue from past summary documents. | getAmountOverdue(): ?float | setAmountOverdue(?float amountOverdue): void |
| `amountPaid` | `?float` | Optional | Total amount paid in billing currency. | getAmountPaid(): ?float | setAmountPaid(?float amountPaid): void |
| `billingCurrencyCode` | `?string` | Optional | Billing currency ISO code. | getBillingCurrencyCode(): ?string | setBillingCurrencyCode(?string billingCurrencyCode): void |
| `billingCurrencySymbol` | `?string` | Optional | Billing currency symbol.<br>Example: € | getBillingCurrencySymbol(): ?string | setBillingCurrencySymbol(?string billingCurrencySymbol): void |
| `outstandingBalance` | `?float` | Optional | Current outstanding balance amount | getOutstandingBalance(): ?float | setOutstandingBalance(?float outstandingBalance): void |
| `paymentDueDate` | `?string` | Optional | Payment due date.<br>Format: YYYYMMDD | getPaymentDueDate(): ?string | setPaymentDueDate(?string paymentDueDate): void |
| `summaryDocumentDate` | `?string` | Optional | Summary document date.<br>Format: YYYYMMDD | getSummaryDocumentDate(): ?string | setSummaryDocumentDate(?string summaryDocumentDate): void |
| `totalBillingDocuments` | `?int` | Optional | Total number of invoices generated on this date. | getTotalBillingDocuments(): ?int | setTotalBillingDocuments(?int totalBillingDocuments): void |
| `totalGrossAmountBillingCurrency` | `?float` | Optional | Total gross amount in billing currency. | getTotalGrossAmountBillingCurrency(): ?float | setTotalGrossAmountBillingCurrency(?float totalGrossAmountBillingCurrency): void |
| `totalNetAmountBillingCurrency` | `?float` | Optional | Total net amount in billing currency. | getTotalNetAmountBillingCurrency(): ?float | setTotalNetAmountBillingCurrency(?float totalNetAmountBillingCurrency): void |
| `totalSummaryDocuments` | `?int` | Optional | Total number of summary documents generated on this date. | getTotalSummaryDocuments(): ?int | setTotalSummaryDocuments(?int totalSummaryDocuments): void |
| `totalVATAmountBillingCurrency` | `?float` | Optional | Total VAT amount in billing currency. | getTotalVATAmountBillingCurrency(): ?float | setTotalVATAmountBillingCurrency(?float totalVATAmountBillingCurrency): void |

## Example (as JSON)

```json
{
  "AmountDue": 132.62,
  "AmountNotOverdue": 125.36,
  "AmountOverdue": 110.28,
  "AmountPaid": 62.46,
  "BillingCurrencyCode": "BillingCurrencyCode0"
}
```

