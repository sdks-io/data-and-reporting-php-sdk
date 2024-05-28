
# Usage Summary

## Structure

`UsageSummary`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `date` | `?string` | Optional | Transaction date.<br>The records will be sorted by this field in ascending order.<br><br>Format: yyyyMMdd | getDate(): ?string | setDate(?string date): void |
| `productId` | `?int` | Optional | Product Id | getProductId(): ?int | setProductId(?int productId): void |
| `productCode` | `?string` | Optional | Client Product code | getProductCode(): ?string | setProductCode(?string productCode): void |
| `productName` | `?string` | Optional | Product name in English | getProductName(): ?string | setProductName(?string productName): void |
| `isFuelProduct` | `?bool` | Optional | Whether the product is fuel or non-fuel | getIsFuelProduct(): ?bool | setIsFuelProduct(?bool isFuelProduct): void |
| `siteGroupId` | `?int` | Optional | Site Group Id | getSiteGroupId(): ?int | setSiteGroupId(?int siteGroupId): void |
| `siteGroupName` | `?string` | Optional | Site Group Name | getSiteGroupName(): ?string | setSiteGroupName(?string siteGroupName): void |
| `totalVolume` | `?float` | Optional | Total Volume | getTotalVolume(): ?float | setTotalVolume(?float totalVolume): void |
| `totalGross` | `?float` | Optional | Total Gross in Customer Currency | getTotalGross(): ?float | setTotalGross(?float totalGross): void |
| `totalNet` | `?float` | Optional | Total Net in Customer Currency | getTotalNet(): ?float | setTotalNet(?float totalNet): void |
| `currencyCode` | `?string` | Optional | Customer Currency Code | getCurrencyCode(): ?string | setCurrencyCode(?string currencyCode): void |
| `currencySymbol` | `?string` | Optional | Customer Currency Symbol | getCurrencySymbol(): ?string | setCurrencySymbol(?string currencySymbol): void |
| `productGroupID` | `?int` | Optional | Product group ID | getProductGroupID(): ?int | setProductGroupID(?int productGroupID): void |
| `productGroupName` | `?string` | Optional | Product group Name | getProductGroupName(): ?string | setProductGroupName(?string productGroupName): void |

## Example (as JSON)

```json
{
  "Date": "Date0",
  "ProductId": 198,
  "ProductCode": "ProductCode6",
  "ProductName": "ProductName6",
  "IsFuelProduct": false
}
```

