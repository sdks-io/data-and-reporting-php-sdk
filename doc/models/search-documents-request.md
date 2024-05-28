
# Search Documents Request

## Structure

`SearchDocumentsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?SearchDocReq`](../../doc/models/search-doc-req.md) | Optional | - | getFilters(): ?SearchDocReq | setFilters(?SearchDocReq filters): void |
| `page` | `?string` | Optional | Specify the page of results to be returned. | getPage(): ?string | setPage(?string page): void |
| `pageSize` | `?string` | Optional | Specify the number of records to returned; Max 1000 | getPageSize(): ?string | setPageSize(?string pageSize): void |

## Example (as JSON)

```json
{
  "Filters": {
    "PayerNumber": "PayerNumber0",
    "AccountNumber": "AccountNumber2",
    "AccountNumberList": [
      "AccountNumberList0"
    ],
    "InvoiceNumber": "InvoiceNumber0",
    "InvoiceNumberList": [
      "InvoiceNumberList5"
    ],
    "InvoiceStatus": "InvoiceStatus4",
    "ColCoCode": 14
  },
  "Page": "Page4",
  "PageSize": "PageSize2"
}
```

