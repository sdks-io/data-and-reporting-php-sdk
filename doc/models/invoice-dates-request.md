
# Invoice Dates Request

## Structure

`InvoiceDatesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?InvoiceDatesRequestFilters`](../../doc/models/invoice-dates-request-filters.md) | Optional | - | getFilters(): ?InvoiceDatesRequestFilters | setFilters(?InvoiceDatesRequestFilters filters): void |

## Example (as JSON)

```json
{
  "Filters": {
    "ColCoCode": 14,
    "ColCoId": 0,
    "PayerId": 48,
    "PayerNumber": "PayerNumber0",
    "FromDate": "FromDate6"
  }
}
```

