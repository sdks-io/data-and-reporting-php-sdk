
# EID Search Request

## Structure

`EIDSearchRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?EIDSearchReq`](../../doc/models/eid-search-req.md) | Optional | - | getFilters(): ?EIDSearchReq | setFilters(?EIDSearchReq filters): void |
| `page` | `?int` | Optional | Specify the page of results to be returned. | getPage(): ?int | setPage(?int page): void |
| `pageSize` | `?int` | Optional | Specify the number of records to returned; Max 100 | getPageSize(): ?int | setPageSize(?int pageSize): void |

## Example (as JSON)

```json
{
  "Filters": {
    "ColCoCode": 14,
    "AccountGroupCountry": 186,
    "AccountGroupId": [
      "AccountGroupId5"
    ],
    "AccountGroupName": "AccountGroupName0",
    "FromDate": "FromDate6",
    "ToDate": "ToDate4",
    "InvoiceType": "InvoiceType2",
    "SortBy": [
      "SortBy3",
      "SortBy4",
      "SortBy5"
    ]
  },
  "Page": 74,
  "PageSize": 54
}
```

