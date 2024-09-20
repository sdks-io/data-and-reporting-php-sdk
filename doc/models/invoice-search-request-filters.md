
# Invoice Search Request Filters

## Structure

`InvoiceSearchRequestFilters`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting Company Id of the selected payer.<br>Optional.<br>Example:<br>1-Philippines<br>5-UK | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `payerId` | `?int` | Optional | Payer Id of the selected payer.<br>Optional if PayerNumber is passed else Mandatory<br>Example: 123456 | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer.<br>Optional if PayerId is passed else Mandatory<br>Example: GB000000123 | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `invoiceId` | `?int` | Optional | Invoice id.<br>Optional.<br>This input is a search criterion, if given.<br>Example: 1 | getInvoiceId(): ?int | setInvoiceId(?int invoiceId): void |
| `invoiceNumber` | `?string` | Optional | Invoice number.<br>Optional.<br>This input is a search criterion, if given.<br>Example: 0123456789 | getInvoiceNumber(): ?string | setInvoiceNumber(?string invoiceNumber): void |
| `fromDate` | `?string` | Optional | Invoice date searched from this date.<br>Optional.<br>This input is a search criterion, if given.<br>Date format: yyyyMMdd<br>Example: 20170830<br>Note: This criterion is ignored if ‘Period’ is given.<br>Also, this criterion is ignored if ‘ToDate’ is not provided. | getFromDate(): ?string | setFromDate(?string fromDate): void |
| `toDate` | `?string` | Optional | Invoice date searched until this date.<br>Optional.<br>This input is a search criterion, if given.<br>Date format: yyyyMMdd<br>Example: 20170830<br>Note: This criterion is ignored if ‘Period’ is given.<br>Also, this criterion is ignored if ‘FromDate’ is not provided. | getToDate(): ?string | setToDate(?string toDate): void |
| `invoiceDate` | `?string` | Optional | Date of invoicing.<br>Optional.<br>This input is a search criterion, if given.<br>Date format: yyyyMMdd<br>Example: 20170830 | getInvoiceDate(): ?string | setInvoiceDate(?string invoiceDate): void |
| `summaryDocumentId` | `?int` | Optional | Summary document id<br>Optional.<br>This input is a search criterion, if given.<br>Example: 1 | getSummaryDocumentId(): ?int | setSummaryDocumentId(?int summaryDocumentId): void |
| `summaryDocumentNumber` | `?string` | Optional | Summary document number<br>Optional.<br>This input is a search criterion, if given.<br>Example: ‘0/CZ0000000123456/2017’ | getSummaryDocumentNumber(): ?string | setSummaryDocumentNumber(?string summaryDocumentNumber): void |
| `statementOfAccountId` | `?string` | Optional | Statement of Account Id of the payment customer.<br>Optional.<br>This input is a search criterion, if given.<br>Example: 1 | getStatementOfAccountId(): ?string | setStatementOfAccountId(?string statementOfAccountId): void |
| `soAReferenceNumber` | `?string` | Optional | Statement of Account reference number of the payment customer.<br>Optional.<br>This input is a search criterion, if given.<br>Example: 123 | getSoAReferenceNumber(): ?string | setSoAReferenceNumber(?string soAReferenceNumber): void |
| `period` | `?int` | Optional | Invoice date search period. Valid values –<br><br>1. Last 7 days – Issued in last 7 days.<br>2. Last 30 days – Issued in last 30 days.<br>3. Last 90 days – Issued in last 90 days.<br>   Optional.<br>   This input is a search criterion, if given.<br>   Example: 1 | getPeriod(): ?int | setPeriod(?int period): void |
| `invoiceStatus` | `?string` | Optional | Status of the invoice. Valid values –<br>•    Due – Invoices due for payment and is within the due date.<br>•    Paid – Fully paid Invoices.<br>•    Overdue – Invoices due of payment and has crossed the due date.<br>•    CreditNote – Credit notes<br>•    CreditStatement<br>Optional.<br>This input is a search criterion, if given. | getInvoiceStatus(): ?string | setInvoiceStatus(?string invoiceStatus): void |
| `invoicedOnBehalfOf` | `?string` | Optional | ISO code of the country i.e., UK, DE, MY, etc.<br>Optional | getInvoicedOnBehalfOf(): ?string | setInvoicedOnBehalfOf(?string invoicedOnBehalfOf): void |
| `includeEInvoiceDetails` | `?bool` | Optional | Whether to include the additional invoice details in the API response.<br>Optional. Default value “False”.<br>The parameters that are populated<br>•    DocumentReference<br>•    AdditionalDocuments<br>The above fields will not be present in the response when the respective data is not available in the source system. | getIncludeEInvoiceDetails(): ?bool | setIncludeEInvoiceDetails(?bool includeEInvoiceDetails): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code of the selected payer.<br>Mandatory - It is mandatory field to external source ATOS for E-invoicing.<br>Example:<br>86-Philippines<br>5-UK | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `accounts` | [`?(Accounts[])`](../../doc/models/accounts.md) | Optional | - | getAccounts(): ?array | setAccounts(?array accounts): void |
| `type` | `?string` | Optional | Invoice type. Allowed values –<br>•    Original – Original document.<br>•    Reversal – Reversed document.<br>•    Replacement – Replaced document.<br>Optional. (When not passed all invoice, types are considered for search)<br>This input is a search criterion, if given.<br>Example: Original | getType(): ?string | setType(?string type): void |

## Example (as JSON)

```json
{
  "ColCoId": 170,
  "PayerId": 218,
  "PayerNumber": "PayerNumber0",
  "InvoiceId": 102,
  "InvoiceNumber": "InvoiceNumber0"
}
```

