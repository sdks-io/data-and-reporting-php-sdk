
# Monthly Invoice Trend

## Structure

`MonthlyInvoiceTrend`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currencyCode` | `?string` | Optional | ISO code of invoice currency.<br>Example: EUR | getCurrencyCode(): ?string | setCurrencyCode(?string currencyCode): void |
| `currencySymbol` | `?string` | Optional | Symbol of invoice currency.<br>Example: € | getCurrencySymbol(): ?string | setCurrencySymbol(?string currencySymbol): void |
| `month` | `?int` | Optional | Month. | getMonth(): ?int | setMonth(?int month): void |
| `totalNetAmount` | `?float` | Optional | Total net amount invoiced in this month. | getTotalNetAmount(): ?float | setTotalNetAmount(?float totalNetAmount): void |
| `totalVATAmount` | `?float` | Optional | Total VAT amount invoiced in this month. | getTotalVATAmount(): ?float | setTotalVATAmount(?float totalVATAmount): void |
| `year` | `?int` | Optional | Year. | getYear(): ?int | setYear(?int year): void |

## Example (as JSON)

```json
{
  "CurrencyCode": "CurrencyCode8",
  "CurrencySymbol": "CurrencySymbol4",
  "Month": 36,
  "TotalNetAmount": 98.02,
  "TotalVATAmount": 158.14
}
```

