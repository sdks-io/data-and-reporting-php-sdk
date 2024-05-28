
# Invoice Dates Data

## Structure

`InvoiceDatesData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `invoiceNumbers` | `?(string[])` | Optional | List of Invoice numbers. | getInvoiceNumbers(): ?array | setInvoiceNumbers(?array invoiceNumbers): void |
| `invoiceDates` | `?(string[])` | Optional | List of Invoicing dates.<br>Format: yyyyMMdd | getInvoiceDates(): ?array | setInvoiceDates(?array invoiceDates): void |

## Example (as JSON)

```json
{
  "InvoiceNumbers": [
    "InvoiceNumbers5",
    "InvoiceNumbers6",
    "InvoiceNumbers7"
  ],
  "InvoiceDates": [
    "InvoiceDates4",
    "InvoiceDates3",
    "InvoiceDates2"
  ]
}
```

