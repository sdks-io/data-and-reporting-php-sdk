
# EID Document Response

## Structure

`EIDDocumentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCESS, FAILED | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(EIDDocument[])`](../../doc/models/eid-document.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `pageSize` | `?int` | Optional | Number of records returned in the response | getPageSize(): ?int | setPageSize(?int pageSize): void |
| `page` | `?int` | Optional | Current page | getPage(): ?int | setPage(?int page): void |
| `totalPages` | `?int` | Optional | Total number of pages available for the requested data | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `totalRecords` | `?int` | Optional | Total number of elements corresponding to the request | getTotalRecords(): ?int | setTotalRecords(?int totalRecords): void |
| `isFirstPage` | `?bool` | Optional | True if it is the first page, false otherwise | getIsFirstPage(): ?bool | setIsFirstPage(?bool isFirstPage): void |
| `isLastPage` | `?bool` | Optional | True if it is the last page, false, otherwise. | getIsLastPage(): ?bool | setIsLastPage(?bool isLastPage): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId8",
  "Status": "Status4",
  "Data": [
    {
      "DocumentId": 28,
      "AccountGroupId": "AccountGroupId2",
      "AccountGroupName": "AccountGroupName6",
      "DocumentType": "DocumentType6",
      "DocumentFormat": "DocumentFormat0"
    }
  ],
  "PageSize": 188,
  "Page": 208
}
```

