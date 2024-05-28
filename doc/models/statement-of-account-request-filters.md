
# Statement of Account Request Filters

## Structure

`StatementOfAccountRequestFilters`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoCode` | `?int` | Optional | Collecting Company Code (Shell Code) of the selected payer.<br>Optional If ColCo Id is passed else Mandatory. | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerId` | `?int` | Optional | Payer Id of the selected payer.<br>Optional if PayerNumber is passed else Mandatory. | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer.<br>Optional if PayerId is passed else Mandatory. | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `includeMonthlyInvoiceTrend` | `?bool` | Optional | True/False.<br>Optional. Default is False.<br>True if the past 13 monthly invoice trend to be included as part of the response. Else false. | getIncludeMonthlyInvoiceTrend(): ?bool | setIncludeMonthlyInvoiceTrend(?bool includeMonthlyInvoiceTrend): void |
| `includePastStatementOfAccounts` | `?bool` | Optional | True/False.<br>Optional. Default is False.<br>True if the past X SOA documents are to be included as part of the response. Else false. | getIncludePastStatementOfAccounts(): ?bool | setIncludePastStatementOfAccounts(?bool includePastStatementOfAccounts): void |
| `dueOrOverDueSOADocumentsOnly` | `?bool` | Optional | True/False<br>Optional Default is False.<br>If true PastStatementOfAccounts entity on this API output should contain the SOA documents that are due or overdue only. | getDueOrOverDueSOADocumentsOnly(): ?bool | setDueOrOverDueSOADocumentsOnly(?bool dueOrOverDueSOADocumentsOnly): void |
| `numberOfSOADocuments` | `?int` | Optional | This parameter is only applicable when “IncludePastStatementOfAccounts” parameter is set to True. | getNumberOfSOADocuments(): ?int | setNumberOfSOADocuments(?int numberOfSOADocuments): void |
| `includeAccountInvoicesSummary` | `?bool` | Optional | True/False<br>Optional.<br>Default value is false.<br>When true InvoicesSummaries list will be returned in the API output. | getIncludeAccountInvoicesSummary(): ?bool | setIncludeAccountInvoicesSummary(?bool includeAccountInvoicesSummary): void |
| `colCoId` | `?int` | Optional | Collecting Company Id of the selected payer.<br>Optional If ColCo Code is passed else Mandatory. | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `accounts` | [`?(Accounts[])`](../../doc/models/accounts.md) | Optional | - | getAccounts(): ?array | setAccounts(?array accounts): void |

## Example (as JSON)

```json
{
  "ColCoCode": 14,
  "PayerId": 48,
  "PayerNumber": "PayerNumber8",
  "IncludeMonthlyInvoiceTrend": false,
  "IncludePastStatementOfAccounts": false
}
```

