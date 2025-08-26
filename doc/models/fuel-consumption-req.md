
# Fuel Consumption Req

## Structure

`FuelConsumptionReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?FuelConsumptionRequest`](../../doc/models/fuel-consumption-request.md) | Optional | - | getFilters(): ?FuelConsumptionRequest | setFilters(?FuelConsumptionRequest filters): void |

## Example (as JSON)

```json
{
  "Filters": {
    "ColCoId": 0,
    "ColCoCode": 14,
    "PayerId": 48,
    "PayerNumber": "PayerNumber0",
    "Accounts": [
      {
        "AccountId": 28,
        "AccountNumber": "AccountNumber0"
      },
      {
        "AccountId": 28,
        "AccountNumber": "AccountNumber0"
      },
      {
        "AccountId": 28,
        "AccountNumber": "AccountNumber0"
      }
    ]
  }
}
```

