
# Search Statement of Account Response

## Structure

`SearchStatementOfAccountResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the req | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Indicates overall status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(SearchStatementOfAccount[])`](../../doc/models/search-statement-of-account.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `page` | `?int` | Optional | Current page | getPage(): ?int | setPage(?int page): void |
| `totalRecords` | `?int` | Optional | Total Number of records in response | getTotalRecords(): ?int | setTotalRecords(?int totalRecords): void |
| `totalPages` | `?int` | Optional | Total number of pages available for the requested data | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `pageSize` | `?int` | Optional | Number of records returned in the response | getPageSize(): ?int | setPageSize(?int pageSize): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId6",
  "Status": "Status2",
  "Data": [
    {
      "StatementOfAccountId": 152,
      "SoAReferenceNumber": "SoAReferenceNumber6",
      "StatementDate": "StatementDate2",
      "PayerId": 2,
      "PayerNumber": "PayerNumber6"
    },
    {
      "StatementOfAccountId": 152,
      "SoAReferenceNumber": "SoAReferenceNumber6",
      "StatementDate": "StatementDate2",
      "PayerId": 2,
      "PayerNumber": "PayerNumber6"
    },
    {
      "StatementOfAccountId": 152,
      "SoAReferenceNumber": "SoAReferenceNumber6",
      "StatementDate": "StatementDate2",
      "PayerId": 2,
      "PayerNumber": "PayerNumber6"
    }
  ],
  "Page": 214,
  "TotalRecords": 118
}
```

