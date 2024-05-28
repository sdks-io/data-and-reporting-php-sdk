
# Invoice Dates Response Data

## Structure

`InvoiceDatesResponseData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique request identifier passed from end user. This identifier helps in tracing a transaction | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCES, FAILED | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(InvoiceDatesData[])`](../../doc/models/invoice-dates-data.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId6",
  "Status": "Status2",
  "Data": [
    {
      "InvoiceNumbers": [
        "InvoiceNumbers7",
        "InvoiceNumbers8"
      ],
      "InvoiceDates": [
        "InvoiceDates0",
        "InvoiceDates1",
        "InvoiceDates2"
      ]
    },
    {
      "InvoiceNumbers": [
        "InvoiceNumbers7",
        "InvoiceNumbers8"
      ],
      "InvoiceDates": [
        "InvoiceDates0",
        "InvoiceDates1",
        "InvoiceDates2"
      ]
    },
    {
      "InvoiceNumbers": [
        "InvoiceNumbers7",
        "InvoiceNumbers8"
      ],
      "InvoiceDates": [
        "InvoiceDates0",
        "InvoiceDates1",
        "InvoiceDates2"
      ]
    }
  ]
}
```

