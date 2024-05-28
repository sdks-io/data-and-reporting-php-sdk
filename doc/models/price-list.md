
# Price List

## Structure

`PriceList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `date` | `?string` | Optional | Date on which the price is applicable.<br>Format: yyyyMMdd<br>E.g.: 20180131 | getDate(): ?string | setDate(?string date): void |
| `day` | `?string` | Optional | Day on which the price is applicable.<br>E.g.: Sunday, Monday etc. | getDay(): ?string | setDay(?string day): void |
| `type` | `?string` | Optional | Price list type.<br>E.g., List, Shell Standard International List | getType(): ?string | setType(?string type): void |
| `priceListId` | `?int` | Optional | Price list ID | getPriceListId(): ?int | setPriceListId(?int priceListId): void |
| `priceListDescription` | `?string` | Optional | Price list description<br>E.g., UK Fuels CRT Reseller List Price | getPriceListDescription(): ?string | setPriceListDescription(?string priceListDescription): void |
| `priceRuleId` | `?int` | Optional | Price Rule Id | getPriceRuleId(): ?int | setPriceRuleId(?int priceRuleId): void |
| `priceRuleName` | `?string` | Optional | Price Rule Name | getPriceRuleName(): ?string | setPriceRuleName(?string priceRuleName): void |
| `delCoId` | `?int` | Optional | DelCo Id | getDelCoId(): ?int | setDelCoId(?int delCoId): void |
| `countryCode` | `?string` | Optional | Country ISO Code<br>E.g., UK, NL, etc., | getCountryCode(): ?string | setCountryCode(?string countryCode): void |
| `country` | `?string` | Optional | Country<br>E.g., United Kingdom, Netherlands etc | getCountry(): ?string | setCountry(?string country): void |
| `productGroupId` | `?int` | Optional | Product Group Id | getProductGroupId(): ?int | setProductGroupId(?int productGroupId): void |
| `productGroupName` | `?string` | Optional | Product Group name | getProductGroupName(): ?string | setProductGroupName(?string productGroupName): void |
| `productCode` | `?string` | Optional | Client Product Code | getProductCode(): ?string | setProductCode(?string productCode): void |
| `productId` | `?int` | Optional | Product Id | getProductId(): ?int | setProductId(?int productId): void |
| `productName` | `?string` | Optional | Product name in English | getProductName(): ?string | setProductName(?string productName): void |
| `pricePerUnit` | `?float` | Optional | Price per unit | getPricePerUnit(): ?float | setPricePerUnit(?float pricePerUnit): void |
| `currencyCode` | `?string` | Optional | Currency Code.<br>Format : 3 digit ISO code | getCurrencyCode(): ?string | setCurrencyCode(?string currencyCode): void |
| `currencySymbol` | `?string` | Optional | Currency Symbol<br>Example: £ | getCurrencySymbol(): ?string | setCurrencySymbol(?string currencySymbol): void |
| `priceType` | `?string` | Optional | Price Type<br>Possible Values are:<br>•	Country– Price rule defined at country whereas Price Rule DelcoId same as ColcoId.<br>•	TPNDelcoPrice – Price rule defined in the TPN whereas Price Rule DelcoId is different from ColcoId.<br>•	NetworkPrice – Price rule defined at Fuel Network level.<br>•	Other – Price rule defined at either Site or SiteGroup level. | getPriceType(): ?string | setPriceType(?string priceType): void |
| `siteGroupId` | `?int` | Optional | Site-Group ID<br>E.g.: 100007 | getSiteGroupId(): ?int | setSiteGroupId(?int siteGroupId): void |
| `siteGroupName` | `?string` | Optional | Site-Group name | getSiteGroupName(): ?string | setSiteGroupName(?string siteGroupName): void |
| `siteCode` | `?int` | Optional | Site Code | getSiteCode(): ?int | setSiteCode(?int siteCode): void |
| `siteId` | `?int` | Optional | Site ID | getSiteId(): ?int | setSiteId(?int siteId): void |
| `siteName` | `?string` | Optional | Site Name | getSiteName(): ?string | setSiteName(?string siteName): void |
| `fuelNetworkId` | `?int` | Optional | Fuel Network ID | getFuelNetworkId(): ?int | setFuelNetworkId(?int fuelNetworkId): void |
| `networkName` | `?string` | Optional | Network Name | getNetworkName(): ?string | setNetworkName(?string networkName): void |
| `priceRuleDelcoId` | `?int` | Optional | PriceRuleDelcoId | getPriceRuleDelcoId(): ?int | setPriceRuleDelcoId(?int priceRuleDelcoId): void |
| `priceRuleDelcoName` | `?string` | Optional | Company Name of the price rule DelCo.<br><br>E.g.:<br>•	Pilipinas Shell Petroleum Corp<br>•	Shell U.K. Oil Products Limited<br>•	G & V SERVICE STATIONS NV | getPriceRuleDelcoName(): ?string | setPriceRuleDelcoName(?string priceRuleDelcoName): void |
| `priceRuleCountry` | `?string` | Optional | PriceRuleCountry<br>E.g.: United Kingdom | getPriceRuleCountry(): ?string | setPriceRuleCountry(?string priceRuleCountry): void |
| `priceRuleCountryCode` | `?string` | Optional | ISO Code of PriceRuleCountry<br>E.g.: UK, NL, etc., | getPriceRuleCountryCode(): ?string | setPriceRuleCountryCode(?string priceRuleCountryCode): void |
| `priceRuleBasisId` | `?int` | Optional | PriceRuleBasisId | getPriceRuleBasisId(): ?int | setPriceRuleBasisId(?int priceRuleBasisId): void |
| `discountValue` | `?float` | Optional | Discount value | getDiscountValue(): ?float | setDiscountValue(?float discountValue): void |
| `pricePerUnitAfterDiscount` | `?float` | Optional | Price per unit after discount | getPricePerUnitAfterDiscount(): ?float | setPricePerUnitAfterDiscount(?float pricePerUnitAfterDiscount): void |
| `vATPercentage` | `?float` | Optional | VAT Percentage | getVATPercentage(): ?float | setVATPercentage(?float vATPercentage): void |
| `priceRuleCategoryId` | `?int` | Optional | PriceRuleCategoryId | getPriceRuleCategoryId(): ?int | setPriceRuleCategoryId(?int priceRuleCategoryId): void |
| `tiers` | [`?(Tier[])`](../../doc/models/tier.md) | Optional | - | getTiers(): ?array | setTiers(?array tiers): void |

## Example (as JSON)

```json
{
  "Date": "Date8",
  "Day": "Day4",
  "Type": "Type0",
  "PriceListId": 210,
  "PriceListDescription": "PriceListDescription0"
}
```

