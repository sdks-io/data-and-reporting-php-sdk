
# Search Documents Response

## Structure

`SearchDocumentsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCES, FAILED | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(SearchDocumentsInvoice[])`](../../doc/models/search-documents-invoice.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `totalRecords` | `?int` | Optional | Total number of elements corresponding to the request | getTotalRecords(): ?int | setTotalRecords(?int totalRecords): void |
| `totalRecordsOnPage` | `?int` | Optional | Number of elements in the page content. Will be lesser or equal to the size param. | getTotalRecordsOnPage(): ?int | setTotalRecordsOnPage(?int totalRecordsOnPage): void |
| `isFirstPage` | `?bool` | Optional | True if it is the first page, false otherwise | getIsFirstPage(): ?bool | setIsFirstPage(?bool isFirstPage): void |
| `isLastPage` | `?bool` | Optional | True if it is the last page, false, otherwise. | getIsLastPage(): ?bool | setIsLastPage(?bool isLastPage): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId2",
  "Status": "Status8",
  "Data": [
    {
      "DocumentReference": 190,
      "InvoiceNumber": "InvoiceNumber4",
      "PayerName": "PayerName4",
      "AccountNumber": "AccountNumber8",
      "AccountName": "AccountName4"
    },
    {
      "DocumentReference": 190,
      "InvoiceNumber": "InvoiceNumber4",
      "PayerName": "PayerName4",
      "AccountNumber": "AccountNumber8",
      "AccountName": "AccountName4"
    },
    {
      "DocumentReference": 190,
      "InvoiceNumber": "InvoiceNumber4",
      "PayerName": "PayerName4",
      "AccountNumber": "AccountNumber8",
      "AccountName": "AccountName4"
    }
  ],
  "TotalRecords": 250,
  "TotalRecordsOnPage": 108
}
```

