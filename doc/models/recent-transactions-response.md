
# Recent Transactions Response

## Structure

`RecentTransactionsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | RequestID is unique identifier value that is attached to requests and messages that allow reference to a particular transaction or event chain. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | status of the API call | getStatus(): ?string | setStatus(?string status): void |
| `page` | `?int` | Optional | CurrentPage | getPage(): ?int | setPage(?int page): void |
| `rowCount` | `?int` | Optional | RowCount | getRowCount(): ?int | setRowCount(?int rowCount): void |
| `totalPages` | `?int` | Optional | TotalPages | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `data` | [`?(RecentTransactions[])`](../../doc/models/recent-transactions.md) | Optional | API Response | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "RequestId": "9d2dee33-7803-485a-a2b1-2c7538e597ee",
  "Status": "SUCCESS",
  "Page": 1,
  "RowCount": 2,
  "TotalPages": 1
}
```

