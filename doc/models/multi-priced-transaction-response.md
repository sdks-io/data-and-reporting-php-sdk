
# Multi Priced Transaction Response

## Structure

`MultiPricedTransactionResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactions` | [`?(MultiPricedTransactionResponseTransactionsItems[])`](../../doc/models/multi-priced-transaction-response-transactions-items.md) | Optional | - | getTransactions(): ?array | setTransactions(?array transactions): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |
| `requestId` | `?string` | Optional | API Request Id | getRequestId(): ?string | setRequestId(?string requestId): void |
| `currentPage` | `?int` | Optional | Current Page | getCurrentPage(): ?int | setCurrentPage(?int currentPage): void |
| `rowCount` | `?int` | Optional | Total row count matched for the given input criteria | getRowCount(): ?int | setRowCount(?int rowCount): void |
| `totalPages` | `?int` | Optional | Calculated page count based on page size from the incoming API request and total number of rows matched for the given input criteria | getTotalPages(): ?int | setTotalPages(?int totalPages): void |

## Example (as JSON)

```json
{
  "Transactions": [
    {
      "Type": "Type2",
      "CardId": 86,
      "CardPAN": "CardPAN4",
      "CardExpiry": "CardExpiry0",
      "TransactionDate": "TransactionDate0"
    },
    {
      "Type": "Type2",
      "CardId": 86,
      "CardPAN": "CardPAN4",
      "CardExpiry": "CardExpiry0",
      "TransactionDate": "TransactionDate0"
    }
  ],
  "Error": {
    "Code": "Code4",
    "Description": "Description2"
  },
  "RequestId": "RequestId8",
  "CurrentPage": 154,
  "RowCount": 52
}
```

