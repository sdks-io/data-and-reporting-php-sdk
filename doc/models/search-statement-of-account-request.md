
# Search Statement of Account Request

## Structure

`SearchStatementOfAccountRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?SearchSOAReq`](../../doc/models/search-soa-req.md) | Optional | - | getFilters(): ?SearchSOAReq | setFilters(?SearchSOAReq filters): void |
| `page` | `?int` | Optional | Page number | getPage(): ?int | setPage(?int page): void |
| `pageSize` | `?int` | Optional | Number of records in page | getPageSize(): ?int | setPageSize(?int pageSize): void |

## Example (as JSON)

```json
{
  "Filters": {
    "ColCoCode": 14,
    "PayerNumber": "PayerNumber0",
    "InvoiceNumber": "InvoiceNumber0",
    "FromDate": "FromDate6",
    "ToDate": "ToDate4"
  },
  "Page": 114,
  "PageSize": 94
}
```

