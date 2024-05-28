
# Volume Based Bonus Response

## Structure

`VolumeBasedBonusResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `configuration` | [`?(BonusConfiguration[])`](../../doc/models/bonus-configuration.md) | Optional | - | getConfiguration(): ?array | setConfiguration(?array configuration): void |
| `currentPeriodConsumption` | [`?(CurrentVolume[])`](../../doc/models/current-volume.md) | Optional | - | getCurrentPeriodConsumption(): ?array | setCurrentPeriodConsumption(?array currentPeriodConsumption): void |
| `historicalBonusPaid` | [`?(BonusHistory[])`](../../doc/models/bonus-history.md) | Optional | - | getHistoricalBonusPaid(): ?array | setHistoricalBonusPaid(?array historicalBonusPaid): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |
| `requestId` | `?string` | Optional | API Request Id | getRequestId(): ?string | setRequestId(?string requestId): void |

## Example (as JSON)

```json
{
  "Configuration": [
    {
      "PricingAccountId": 94,
      "PricingAccountNumber": "PricingAccountNumber0",
      "PricingAccountShortName": "PricingAccountShortName2",
      "PricingAccountFullName": "PricingAccountFullName8",
      "FeeRuleId": 254
    },
    {
      "PricingAccountId": 94,
      "PricingAccountNumber": "PricingAccountNumber0",
      "PricingAccountShortName": "PricingAccountShortName2",
      "PricingAccountFullName": "PricingAccountFullName8",
      "FeeRuleId": 254
    },
    {
      "PricingAccountId": 94,
      "PricingAccountNumber": "PricingAccountNumber0",
      "PricingAccountShortName": "PricingAccountShortName2",
      "PricingAccountFullName": "PricingAccountFullName8",
      "FeeRuleId": 254
    }
  ],
  "CurrentPeriodConsumption": [
    {
      "FeeRuleId": 146,
      "FeeRuleDescription": "FeeRuleDescription8",
      "Month": 174,
      "Year": "Year2",
      "TotalVolume": 254.28
    },
    {
      "FeeRuleId": 146,
      "FeeRuleDescription": "FeeRuleDescription8",
      "Month": 174,
      "Year": "Year2",
      "TotalVolume": 254.28
    }
  ],
  "HistoricalBonusPaid": [
    {
      "PayerId": 156,
      "PayerNumber": "PayerNumber0",
      "PayerShortName": "PayerShortName4",
      "PayerFullName": "PayerFullName0",
      "AccountId": 216
    }
  ],
  "Error": {
    "Code": "Code4",
    "Description": "Description2"
  },
  "RequestId": "RequestId2"
}
```

