
# Transaction Exceptions Response

## Structure

`TransactionExceptionsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardExceptions` | [`?(CardExceptions[])`](../../doc/models/card-exceptions.md) | Optional | - | getCardExceptions(): ?array | setCardExceptions(?array cardExceptions): void |
| `transactionExceptions` | [`?(TransactionExceptions[])`](../../doc/models/transaction-exceptions.md) | Optional | - | getTransactionExceptions(): ?array | setTransactionExceptions(?array transactionExceptions): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |
| `requestId` | `?string` | Optional | API Request Id | getRequestId(): ?string | setRequestId(?string requestId): void |

## Example (as JSON)

```json
{
  "CardExceptions": [
    {
      "AccountId": 224,
      "AccountNumber": "AccountNumber4",
      "AccountShortName": "AccountShortName6",
      "CardId": 130,
      "CurrencyCode": "CurrencyCode2"
    }
  ],
  "TransactionExceptions": [
    {
      "SalesItemId": 113.2,
      "CardId": 104,
      "ProductId": 220,
      "TransactionGUID": "TransactionGUID2",
      "TransactionDate": "TransactionDate6"
    },
    {
      "SalesItemId": 113.2,
      "CardId": 104,
      "ProductId": 220,
      "TransactionGUID": "TransactionGUID2",
      "TransactionDate": "TransactionDate6"
    }
  ],
  "Error": {
    "Code": "Code4",
    "Description": "Description2"
  },
  "RequestId": "RequestId8"
}
```

