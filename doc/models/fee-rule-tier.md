
# Fee Rule Tier

## Structure

`FeeRuleTier`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `tierMinimum` | `?int` | Optional | Minimum consumption configured in the tier. | getTierMinimum(): ?int | setTierMinimum(?int tierMinimum): void |
| `value` | `?float` | Optional | Bonus value for the tier. | getValue(): ?float | setValue(?float value): void |
| `tierMaximum` | `?int` | Optional | Maximum consumption configured in the tier. | getTierMaximum(): ?int | setTierMaximum(?int tierMaximum): void |

## Example (as JSON)

```json
{
  "TierMinimum": 238,
  "Value": 239.26,
  "TierMaximum": 16
}
```

