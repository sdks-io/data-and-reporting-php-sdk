
# Price Transaction Req

## Structure

`PriceTransactionReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?PriceTransactionRequest`](../../doc/models/price-transaction-request.md) | Optional | - | getFilters(): ?PriceTransactionRequest | setFilters(?PriceTransactionRequest filters): void |
| `page` | `?int` | Optional | Page Number (as shown to the users)<br><br>**Default**: `1` | getPage(): ?int | setPage(?int page): void |
| `pageSize` | `?int` | Optional | Page Size – Number of records to show on a page.<br><br>**Default**: `50` | getPageSize(): ?int | setPageSize(?int pageSize): void |

## Example (as JSON)

```json
{
  "Page": 1,
  "PageSize": 100,
  "Filters": {
    "ColCoId": 0,
    "ColCoCode": 14,
    "PayerId": 48,
    "PayerNumber": "PayerNumber0",
    "Accounts": {
      "AccountId": 28,
      "AccountNumber": "AccountNumber0"
    }
  }
}
```

