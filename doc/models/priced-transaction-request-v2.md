
# Priced Transaction Request V2

## Structure

`PricedTransactionRequestV2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?Filters`](../../doc/models/filters.md) | Optional | - | getFilters(): ?Filters | setFilters(?Filters filters): void |
| `page` | `?int` | Optional | Specify the page of results to be returned. | getPage(): ?int | setPage(?int page): void |
| `pageSize` | `?int` | Optional | Specify the number of records to returned; Max 1000 | getPageSize(): ?int | setPageSize(?int pageSize): void |

## Example (as JSON)

```json
{
  "Filters": {
    "ColCoCode": "ColCoCode8",
    "InvoiceStatus": {
      "key1": "val1",
      "key2": "val2"
    },
    "PayerNumber": "PayerNumber0",
    "AccountId": 108,
    "AccountNumber": "AccountNumber2",
    "DriverName": "DriverName8",
    "CardGroupId": 154,
    "CardPAN": "CardPAN8"
  },
  "Page": 230,
  "PageSize": 210
}
```

