
# Pricing Current Volume

## Structure

`PricingCurrentVolume`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `feeRuleId` | `?int` | Optional | Bonus or association bonus configuration identifier  that is associated to the payer. | getFeeRuleId(): ?int | setFeeRuleId(?int feeRuleId): void |
| `feeRuleDescription` | `?string` | Optional | Bonus or association bonus configuration description that is associated to the payer | getFeeRuleDescription(): ?string | setFeeRuleDescription(?string feeRuleDescription): void |
| `priceRuleID` | `?int` | Optional | Pricing current period Pricing Price Rule ID that is associated to the payer. | getPriceRuleID(): ?int | setPriceRuleID(?int priceRuleID): void |
| `priceRuleDescription` | `?string` | Optional | Pricing current period pricing rule description that is associated to the payer | getPriceRuleDescription(): ?string | setPriceRuleDescription(?string priceRuleDescription): void |
| `totalVolume` | `?float` | Optional | Total volume consumption for the current period. | getTotalVolume(): ?float | setTotalVolume(?float totalVolume): void |
| `nextFeeCreationDate` | `?string` | Optional | Next Fee Rule Creation Date for that is associated to the payer.<br>Format: YYYYMMDD | getNextFeeCreationDate(): ?string | setNextFeeCreationDate(?string nextFeeCreationDate): void |

## Example (as JSON)

```json
{
  "FeeRuleId": 134,
  "FeeRuleDescription": "FeeRuleDescription4",
  "PriceRuleID": 96,
  "PriceRuleDescription": "PriceRuleDescription6",
  "TotalVolume": 64.96
}
```

