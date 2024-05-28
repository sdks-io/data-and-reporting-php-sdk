
# Volume Based Pricing Response

## Structure

`VolumeBasedPricingResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `configuration` | [`?(BonusConfiguration[])`](../../doc/models/bonus-configuration.md) | Optional | - | getConfiguration(): ?array | setConfiguration(?array configuration): void |
| `currentPeriodConsumption` | [`?(PricingCurrentVolume[])`](../../doc/models/pricing-current-volume.md) | Optional | - | getCurrentPeriodConsumption(): ?array | setCurrentPeriodConsumption(?array currentPeriodConsumption): void |
| `history` | [`?(PricingHistory[])`](../../doc/models/pricing-history.md) | Optional | - | getHistory(): ?array | setHistory(?array history): void |
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
    }
  ],
  "CurrentPeriodConsumption": [
    {
      "FeeRuleId": 146,
      "FeeRuleDescription": "FeeRuleDescription8",
      "PriceRuleID": 84,
      "PriceRuleDescription": "PriceRuleDescription8",
      "TotalVolume": 254.28
    },
    {
      "FeeRuleId": 146,
      "FeeRuleDescription": "FeeRuleDescription8",
      "PriceRuleID": 84,
      "PriceRuleDescription": "PriceRuleDescription8",
      "TotalVolume": 254.28
    },
    {
      "FeeRuleId": 146,
      "FeeRuleDescription": "FeeRuleDescription8",
      "PriceRuleID": 84,
      "PriceRuleDescription": "PriceRuleDescription8",
      "TotalVolume": 254.28
    }
  ],
  "History": [
    {
      "FromDate": "FromDate6",
      "ToDate": "ToDate4",
      "FeesRuleID": 136,
      "FeesRuleDescription": "FeesRuleDescription0",
      "TotalVolume": 24.18
    },
    {
      "FromDate": "FromDate6",
      "ToDate": "ToDate4",
      "FeesRuleID": 136,
      "FeesRuleDescription": "FeesRuleDescription0",
      "TotalVolume": 24.18
    }
  ],
  "Error": {
    "Code": "Code4",
    "Description": "Description2"
  },
  "RequestId": "RequestId6"
}
```

