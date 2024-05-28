
# Pricing History

## Structure

`PricingHistory`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fromDate` | `?string` | Optional | Pricing History Period Start date and should be the first date of the month.<br>Format: YYYYMMDD | getFromDate(): ?string | setFromDate(?string fromDate): void |
| `toDate` | `?string` | Optional | Pricing History Period end date and should be the last date of the period month.<br>Format: YYYYMMDD | getToDate(): ?string | setToDate(?string toDate): void |
| `feesRuleID` | `?int` | Optional | Pricing History Period Fees Rule ID that is associated to the period of that associated payer.  <br>Example: 8101 | getFeesRuleID(): ?int | setFeesRuleID(?int feesRuleID): void |
| `feesRuleDescription` | `?string` | Optional | Pricing History Period Fees Rule Description that is associated to the period of that associated payer. | getFeesRuleDescription(): ?string | setFeesRuleDescription(?string feesRuleDescription): void |
| `totalVolume` | `?float` | Optional | Total Quantity for the Pricing History Period that is associated to that payer. | getTotalVolume(): ?float | setTotalVolume(?float totalVolume): void |

## Example (as JSON)

```json
{
  "FromDate": "FromDate0",
  "ToDate": "ToDate0",
  "FeesRuleID": 44,
  "FeesRuleDescription": "FeesRuleDescription4",
  "TotalVolume": 153.82
}
```

