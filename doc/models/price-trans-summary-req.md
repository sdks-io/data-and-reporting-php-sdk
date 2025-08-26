
# Price Trans Summary Req

## Structure

`PriceTransSummaryReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?PriceTransSummaryRequest`](../../doc/models/price-trans-summary-request.md) | Optional | - | getFilters(): ?PriceTransSummaryRequest | setFilters(?PriceTransSummaryRequest filters): void |

## Example (as JSON)

```json
{
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

