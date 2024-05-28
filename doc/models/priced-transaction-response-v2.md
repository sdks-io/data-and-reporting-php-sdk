
# Priced Transaction Response V2

## Structure

`PricedTransactionResponseV2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the req | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Indicates overall status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(PricedResponseData[])`](../../doc/models/priced-response-data.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `page` | `?int` | Optional | Current page | getPage(): ?int | setPage(?int page): void |
| `pageSize` | `?int` | Optional | Number of records returned in the response | getPageSize(): ?int | setPageSize(?int pageSize): void |
| `totalPages` | `?int` | Optional | Total number of pages available for the requested data | getTotalPages(): ?int | setTotalPages(?int totalPages): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId6",
  "Status": "Status0",
  "Data": [
    {
      "AccountName": "AccountName4",
      "AccountId": 62,
      "AccountNumber": "AccountNumber8",
      "AccountShortName": "AccountShortName0",
      "Additional1": "Additional10"
    }
  ],
  "Page": 122,
  "PageSize": 102
}
```

