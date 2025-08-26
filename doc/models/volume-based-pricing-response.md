
# Volume Based Pricing Response

## Structure

`VolumeBasedPricingResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `configuration` | [`?(BonusConfiguration[])`](../../doc/models/bonus-configuration.md) | Optional | - | getConfiguration(): ?array | setConfiguration(?array configuration): void |
| `currentPeriodConsumption` | [`?(PricingCurrentVolume[])`](../../doc/models/pricing-current-volume.md) | Optional | - | getCurrentPeriodConsumption(): ?array | setCurrentPeriodConsumption(?array currentPeriodConsumption): void |
| `history` | [`?(PricingHistory[])`](../../doc/models/pricing-history.md) | Optional | - | getHistory(): ?array | setHistory(?array history): void |
| `warnings` | [`?(Warning[])`](../../doc/models/warning.md) | Optional | A list of Warning entity.<br>This entity will hold the details of the scheduled System Outages of any dependent applications of this service.<br>Note: If there is no scheduled outage information available, in the configuration in AMS, for this service, this parameter won’t be present in output. | getWarnings(): ?array | setWarnings(?array warnings): void |

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
  "Warnings": [
    {
      "Message": "Message0",
      "Type": "Type4"
    },
    {
      "Message": "Message0",
      "Type": "Type4"
    }
  ]
}
```

