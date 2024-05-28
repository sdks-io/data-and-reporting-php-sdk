
# Current Volume

## Structure

`CurrentVolume`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `feeRuleId` | `?int` | Optional | Bonus or association bonus configuration identifier that is associated to the payer | getFeeRuleId(): ?int | setFeeRuleId(?int feeRuleId): void |
| `feeRuleDescription` | `?string` | Optional | Bonus or association bonus configuration description that is associated to the payer. | getFeeRuleDescription(): ?string | setFeeRuleDescription(?string feeRuleDescription): void |
| `month` | `?int` | Optional | Consumption(Volume) of the month. | getMonth(): ?int | setMonth(?int month): void |
| `year` | `?string` | Optional | Consumption (Volume) of the year. | getYear(): ?string | setYear(?string year): void |
| `totalVolume` | `?float` | Optional | Total volume consumption for the month/year above. | getTotalVolume(): ?float | setTotalVolume(?float totalVolume): void |

## Example (as JSON)

```json
{
  "FeeRuleId": 74,
  "FeeRuleDescription": "FeeRuleDescription8",
  "Month": 138,
  "Year": "Year2",
  "TotalVolume": 115.68
}
```

