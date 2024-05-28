
# Invoice Search Response

## Structure

`InvoiceSearchResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | API Request Id | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCES, FAILED | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(InvoiceSearchDetails[])`](../../doc/models/invoice-search-details.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `page` | `?int` | Optional | Specifies the returned page of the results | getPage(): ?int | setPage(?int page): void |
| `pageSize` | `?int` | Optional | Specifies the number of records to be returned which could be less than the PageSize in the request | getPageSize(): ?int | setPageSize(?int pageSize): void |
| `totalRecords` | `?int` | Optional | Specifies the total records available in the result | getTotalRecords(): ?int | setTotalRecords(?int totalRecords): void |
| `totalPages` | `?int` | Optional | Specifies the total pages available in the result | getTotalPages(): ?int | setTotalPages(?int totalPages): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId0",
  "Status": "Status6",
  "Data": [
    {
      "AccountFullName": "AccountFullName6",
      "AccountId": 62,
      "AccountNumber": "AccountNumber8",
      "AccountShortName": "AccountShortName0",
      "ColCoId": 210
    },
    {
      "AccountFullName": "AccountFullName6",
      "AccountId": 62,
      "AccountNumber": "AccountNumber8",
      "AccountShortName": "AccountShortName0",
      "ColCoId": 210
    },
    {
      "AccountFullName": "AccountFullName6",
      "AccountId": 62,
      "AccountNumber": "AccountNumber8",
      "AccountShortName": "AccountShortName0",
      "ColCoId": 210
    }
  ],
  "Page": 226,
  "PageSize": 206
}
```

