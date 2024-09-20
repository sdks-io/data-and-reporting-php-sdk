
# Search Statement of Account

## Structure

`SearchStatementOfAccount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statementOfAccountId` | `?int` | Optional | Statement of account identifier | getStatementOfAccountId(): ?int | setStatementOfAccountId(?int statementOfAccountId): void |
| `soAReferenceNumber` | `?string` | Optional | Statement of account reference | getSoAReferenceNumber(): ?string | setSoAReferenceNumber(?string soAReferenceNumber): void |
| `statementDate` | `?string` | Optional | Date on which the SOA was generated.<br>Format: yyyyMMdd | getStatementDate(): ?string | setStatementDate(?string statementDate): void |
| `payerId` | `?int` | Optional | Payment customer id of the customer. | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payment customer number. | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `amountDue` | `?float` | Optional | Invoiced amount and due for payment | getAmountDue(): ?float | setAmountDue(?float amountDue): void |
| `amountOverdue` | `?float` | Optional | Invoiced amount and overdue for payment. | getAmountOverdue(): ?float | setAmountOverdue(?float amountOverdue): void |
| `currencyCode` | `?string` | Optional | ISO code of SOA currency. | getCurrencyCode(): ?string | setCurrencyCode(?string currencyCode): void |
| `currencySymbol` | `?string` | Optional | Symbol of SOA currency.<br>Example: € | getCurrencySymbol(): ?string | setCurrencySymbol(?string currencySymbol): void |
| `dueDate` | `?string` | Optional | Due date for payment. Format: yyyyMMdd<br>Note:<br>•    Clients to convert this to appropriate DateTime type.<br>•    SoA due date is considered as the latest due date of the invoices within the SoA | getDueDate(): ?string | setDueDate(?string dueDate): void |
| `invoicedOnBehalfOf` | `?string` | Optional | ISO code of the country i.e., UK, DE, MY, etc.<br>This is the value of the first invoice within the SoA. It may not be same for all the invoices within the SoA. | getInvoicedOnBehalfOf(): ?string | setInvoicedOnBehalfOf(?string invoicedOnBehalfOf): void |
| `status` | `?string` | Optional | Status of the document. Valid values –<br><br>1. Paid – Fully paid all Invoices with in the SOA.<br>2. Overdue – At least one invoice payment due date is less than current date with in the SOA.<br>3. Due – At least one invoice is due for payment and is within the due date. There is no invoice overdue for payment. | getStatus(): ?string | setStatus(?string status): void |
| `grossAmountCustomerCurrency` | `?float` | Optional | Total gross amount in customer currency. | getGrossAmountCustomerCurrency(): ?float | setGrossAmountCustomerCurrency(?float grossAmountCustomerCurrency): void |
| `documentReferenceNumber` | `?string` | Optional | Document reference number fetched | getDocumentReferenceNumber(): ?string | setDocumentReferenceNumber(?string documentReferenceNumber): void |

## Example (as JSON)

```json
{
  "StatementOfAccountId": 120,
  "SoAReferenceNumber": "SoAReferenceNumber4",
  "StatementDate": "StatementDate2",
  "PayerId": 18,
  "PayerNumber": "PayerNumber6"
}
```

