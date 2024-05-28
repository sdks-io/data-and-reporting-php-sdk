
# Statement of Account Request

## Structure

`StatementOfAccountRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?StatementOfAccountRequestFilters`](../../doc/models/statement-of-account-request-filters.md) | Optional | - | getFilters(): ?StatementOfAccountRequestFilters | setFilters(?StatementOfAccountRequestFilters filters): void |

## Example (as JSON)

```json
{
  "Filters": {
    "ColCoCode": 14,
    "PayerId": 48,
    "PayerNumber": "PayerNumber0",
    "IncludeMonthlyInvoiceTrend": false,
    "IncludePastStatementOfAccounts": false
  }
}
```

