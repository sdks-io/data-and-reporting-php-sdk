
# Invoice Summary Response

## Structure

`InvoiceSummaryResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | API Request Id | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCES, FAILED | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(InvoiceSummaryDetails[])`](../../doc/models/invoice-summary-details.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId6",
  "Status": "Status2",
  "Data": [
    {
      "TotalInvoices": 230,
      "TotalGrossAmountCustomerCurrency": 149.02,
      "TotalNetAmountCustomerCurrency": 18.22,
      "TotalVATAmountCustomerCurrency": 21.48,
      "CustomerCurrencyCode": "CustomerCurrencyCode4"
    },
    {
      "TotalInvoices": 230,
      "TotalGrossAmountCustomerCurrency": 149.02,
      "TotalNetAmountCustomerCurrency": 18.22,
      "TotalVATAmountCustomerCurrency": 21.48,
      "CustomerCurrencyCode": "CustomerCurrencyCode4"
    }
  ]
}
```

