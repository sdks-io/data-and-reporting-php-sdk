
# Fee Item Summary All of 0

## Structure

`FeeItemSummaryAllOf0`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `feeTypeGroup` | `?string` | Optional | Fee type group in under which the Fee item is generated. | getFeeTypeGroup(): ?string | setFeeTypeGroup(?string feeTypeGroup): void |
| `feeTypeId` | `?string` | Optional | Fee Type Id ID  Description | getFeeTypeId(): ?string | setFeeTypeId(?string feeTypeId): void |
| `productId` | `?int` | Optional | Product Id | getProductId(): ?int | setProductId(?int productId): void |
| `productCode` | `?string` | Optional | Product Code | getProductCode(): ?string | setProductCode(?string productCode): void |
| `productName` | `?string` | Optional | Product Name | getProductName(): ?string | setProductName(?string productName): void |
| `productGroupId` | `?int` | Optional | Product Group Id | getProductGroupId(): ?int | setProductGroupId(?int productGroupId): void |
| `productGroupName` | `?string` | Optional | Product Group Name | getProductGroupName(): ?string | setProductGroupName(?string productGroupName): void |
| `totalQuantity` | `?float` | Optional | Total Quantity | getTotalQuantity(): ?float | setTotalQuantity(?float totalQuantity): void |
| `totalInvoiceNetAmount` | `?float` | Optional | Total Net amount in invoice currency | getTotalInvoiceNetAmount(): ?float | setTotalInvoiceNetAmount(?float totalInvoiceNetAmount): void |
| `totalInvoiceGrossAmount` | `?float` | Optional | Total Gross amount in invoice currency | getTotalInvoiceGrossAmount(): ?float | setTotalInvoiceGrossAmount(?float totalInvoiceGrossAmount): void |
| `totalInvoiceVATAmount` | `?float` | Optional | Total VAT amount in invoice currency | getTotalInvoiceVATAmount(): ?float | setTotalInvoiceVATAmount(?float totalInvoiceVATAmount): void |
| `invoiceCurrencyCode` | `?string` | Optional | ISO 4217 currency code of the country | getInvoiceCurrencyCode(): ?string | setInvoiceCurrencyCode(?string invoiceCurrencyCode): void |
| `invoiceCurrencySymbol` | `?string` | Optional | Currency symbol of the Invoice Currency Code | getInvoiceCurrencySymbol(): ?string | setInvoiceCurrencySymbol(?string invoiceCurrencySymbol): void |

## Example (as JSON)

```json
{
  "FeeTypeGroup": "Account",
  "FeeTypeId": "1",
  "ProductId": 102,
  "ProductCode": "Invoice production fee",
  "ProductName": "Invoice production fee",
  "ProductGroupId": 22,
  "ProductGroupName": "Card related fees",
  "TotalQuantity": 2,
  "TotalInvoiceNetAmount": 22.23,
  "TotalInvoiceGrossAmount": 28.92,
  "TotalInvoiceVATAmount": 10.02,
  "InvoiceCurrencyCode": "GBP",
  "InvoiceCurrencySymbol": "Ã‚Â£"
}
```

