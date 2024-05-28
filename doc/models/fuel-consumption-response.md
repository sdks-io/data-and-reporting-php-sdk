
# Fuel Consumption Response

## Structure

`FuelConsumptionResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fuelConsumption` | [`?(FuelConsumptionData[])`](../../doc/models/fuel-consumption-data.md) | Optional | - | getFuelConsumption(): ?array | setFuelConsumption(?array fuelConsumption): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |
| `requestId` | `?string` | Optional | API Request Id | getRequestId(): ?string | setRequestId(?string requestId): void |

## Example (as JSON)

```json
{
  "FuelConsumption": [
    {
      "AccountName": "AccountName6",
      "AccountNumber": "AccountNumber0",
      "PayerName": "PayerName2",
      "PayerNumber": "PayerNumber8",
      "CardNumber": "CardNumber8"
    }
  ],
  "Error": {
    "Code": "Code4",
    "Description": "Description2"
  },
  "RequestId": "RequestId4"
}
```

