
# Invoice Summary Details

## Structure

`InvoiceSummaryDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `totalInvoices` | `?int` | Optional | Total number of invoices matching with the given search criteria. | getTotalInvoices(): ?int | setTotalInvoices(?int totalInvoices): void |
| `totalGrossAmountCustomerCurrency` | `?float` | Optional | Total gross amount in customer currency combined from all the invoices matching with the given search criteria. | getTotalGrossAmountCustomerCurrency(): ?float | setTotalGrossAmountCustomerCurrency(?float totalGrossAmountCustomerCurrency): void |
| `totalNetAmountCustomerCurrency` | `?float` | Optional | Total net amount in customer currency combined from all the invoices matching with the given search criteria. | getTotalNetAmountCustomerCurrency(): ?float | setTotalNetAmountCustomerCurrency(?float totalNetAmountCustomerCurrency): void |
| `totalVATAmountCustomerCurrency` | `?float` | Optional | Total VAT amount in customer currency combined from all the invoices matching with the given search criteria. | getTotalVATAmountCustomerCurrency(): ?float | setTotalVATAmountCustomerCurrency(?float totalVATAmountCustomerCurrency): void |
| `customerCurrencyCode` | `?string` | Optional | Customer currency ISO code.<br>Example: EUR | getCustomerCurrencyCode(): ?string | setCustomerCurrencyCode(?string customerCurrencyCode): void |
| `customerCurrencySymbol` | `?string` | Optional | Customer currency code.<br>Example: € | getCustomerCurrencySymbol(): ?string | setCustomerCurrencySymbol(?string customerCurrencySymbol): void |

## Example (as JSON)

```json
{
  "TotalInvoices": 122,
  "TotalGrossAmountCustomerCurrency": 134.06,
  "TotalNetAmountCustomerCurrency": 45.3,
  "TotalVATAmountCustomerCurrency": 48.56,
  "CustomerCurrencyCode": "CustomerCurrencyCode2"
}
```

