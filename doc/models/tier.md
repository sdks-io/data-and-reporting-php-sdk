
# Tier

## Structure

`Tier`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `tierPriceListId` | `?int` | Optional | The price list if reference price is list price.<br>Only used when the Price Rule category is set to.<br>‘Tiered Pricing’. | getTierPriceListId(): ?int | setTierPriceListId(?int tierPriceListId): void |
| `priceListDescription` | `?string` | Optional | Price list description of the tier. | getPriceListDescription(): ?string | setPriceListDescription(?string priceListDescription): void |
| `tierMin` | `?int` | Optional | Minimum tier volume<br>E.g., 500 | getTierMin(): ?int | setTierMin(?int tierMin): void |
| `tierMax` | `?int` | Optional | Maximum tier volume<br>E.g., 1000 | getTierMax(): ?int | setTierMax(?int tierMax): void |
| `tieredPricingGroupName` | `?string` | Optional | Pricing group name of tier | getTieredPricingGroupName(): ?string | setTieredPricingGroupName(?string tieredPricingGroupName): void |
| `tieredPricingGroupPeriod` | `?string` | Optional | Tiered pricing group period.<br>Possible Values<br><br>1. Monthly<br>2. Quarterly<br>3. Semi Annually<br>4. Annual | getTieredPricingGroupPeriod(): ?string | setTieredPricingGroupPeriod(?string tieredPricingGroupPeriod): void |
| `discountValue` | `?float` | Optional | Discount value to be applied to the List price or pump price. | getDiscountValue(): ?float | setDiscountValue(?float discountValue): void |
| `pricePerUnit` | `?float` | Optional | Price per unit after discount<br>Note: This field will not contain any value for discounts on retail prices. | getPricePerUnit(): ?float | setPricePerUnit(?float pricePerUnit): void |
| `pricePerUnitAfterDiscount` | `?float` | Optional | Price per unit (List Price)<br>Note: This field will not contain any value for discounts on retail prices. | getPricePerUnitAfterDiscount(): ?float | setPricePerUnitAfterDiscount(?float pricePerUnitAfterDiscount): void |

## Example (as JSON)

```json
{
  "TierPriceListId": 46,
  "PriceListDescription": "PriceListDescription4",
  "TierMin": 186,
  "TierMax": 250,
  "TieredPricingGroupName": "TieredPricingGroupName2"
}
```

