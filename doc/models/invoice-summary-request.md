
# Invoice Summary Request

## Structure

`InvoiceSummaryRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?InvoiceSummaryRequestFilters`](../../doc/models/invoice-summary-request-filters.md) | Optional | - | getFilters(): ?InvoiceSummaryRequestFilters | setFilters(?InvoiceSummaryRequestFilters filters): void |

## Example (as JSON)

```json
{
  "Filters": {
    "ColCoId": 0,
    "PayerId": 48,
    "PayerNumber": "PayerNumber0",
    "InvoiceId": 188,
    "InvoiceNumber": "InvoiceNumber0"
  }
}
```

