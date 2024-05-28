
# Priced Trans Summary Response Transactions Summary Items

## Structure

`PricedTransSummaryResponseTransactionsSummaryItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `?int` | Optional | Product Id | getProductId(): ?int | setProductId(?int productId): void |
| `productCode` | `?string` | Optional | Product Code<br>Examples:<br>10	TMF Charges<br>11	Tunnel/Bridges<br>12	Motorway toll<br>13	Ferries | getProductCode(): ?string | setProductCode(?string productCode): void |
| `productName` | `?string` | Optional | Product Name<br>Examples:<br>Unleaded - High octane<br>Unleaded - Medium octane<br>Unleaded - Low octane<br>Unleaded Environmental | getProductName(): ?string | setProductName(?string productName): void |
| `productGroupId` | `?int` | Optional | Product Group Id<br>Example:<br>1	Parent Product Group<br>2	All Fuels<br>3	Motor gasoline<br>4	2 stroke<br>5	Autogas<br>6	CNG | getProductGroupId(): ?int | setProductGroupId(?int productGroupId): void |
| `productGroupName` | `?string` | Optional | Product Group Name<br>Example:<br>1	Parent Product Group<br>2	All Fuels<br>3	Motor gasoline<br>4	2 stroke<br>5	Autogas<br>6	CNG<br>7	Automotive Gas Oil | getProductGroupName(): ?string | setProductGroupName(?string productGroupName): void |
| `siteGroupId` | `?int` | Optional | Site Group Id<br>Example: 202 | getSiteGroupId(): ?int | setSiteGroupId(?int siteGroupId): void |
| `siteGroupName` | `?string` | Optional | Site Group Name<br>Example: CZ 9100 ECONOMY NETWORK | getSiteGroupName(): ?string | setSiteGroupName(?string siteGroupName): void |
| `totalFuelQuantity` | `?int` | Optional | Total Fuel Quantity | getTotalFuelQuantity(): ?int | setTotalFuelQuantity(?int totalFuelQuantity): void |
| `totalNetAmount` | `?int` | Optional | Total Net amount in invoice currency | getTotalNetAmount(): ?int | setTotalNetAmount(?int totalNetAmount): void |
| `totalGrossAmount` | `?int` | Optional | Total Gross amount in invoice currency | getTotalGrossAmount(): ?int | setTotalGrossAmount(?int totalGrossAmount): void |
| `invoiceCurrencyCode` | `?string` | Optional | ISO currency code<br>Example: GBP | getInvoiceCurrencyCode(): ?string | setInvoiceCurrencyCode(?string invoiceCurrencyCode): void |
| `invoiceCurrencySymbol` | `?string` | Optional | Currency symbol of the Invoice Currency Code<br>Example: £, $ | getInvoiceCurrencySymbol(): ?string | setInvoiceCurrencySymbol(?string invoiceCurrencySymbol): void |
| `customerRetailValueTotalNet` | `?float` | Optional | Sum of the retail net price | getCustomerRetailValueTotalNet(): ?float | setCustomerRetailValueTotalNet(?float customerRetailValueTotalNet): void |
| `customerRetailValueTotalGross` | `?float` | Optional | Sum of the retail gross price | getCustomerRetailValueTotalGross(): ?float | setCustomerRetailValueTotalGross(?float customerRetailValueTotalGross): void |

## Example (as JSON)

```json
{
  "ProductId": 164,
  "ProductCode": "ProductCode2",
  "ProductName": "ProductName8",
  "ProductGroupId": 92,
  "ProductGroupName": "ProductGroupName4"
}
```

