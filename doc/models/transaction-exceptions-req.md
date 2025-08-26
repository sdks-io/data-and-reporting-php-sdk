
# Transaction Exceptions Req

## Structure

`TransactionExceptionsReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?TransactionExceptionsRequest`](../../doc/models/transaction-exceptions-request.md) | Optional | - | getFilters(): ?TransactionExceptionsRequest | setFilters(?TransactionExceptionsRequest filters): void |

## Example (as JSON)

```json
{
  "Filters": {
    "ColCoId": 0,
    "ColCoCode": 14,
    "PayerId": 48,
    "PayerNumber": "PayerNumber0",
    "Accounts": [
      {
        "AccountId": 28,
        "AccountNumber": "AccountNumber0"
      },
      {
        "AccountId": 28,
        "AccountNumber": "AccountNumber0"
      },
      {
        "AccountId": 28,
        "AccountNumber": "AccountNumber0"
      }
    ],
    "TransactionsFromDate": "TransactionsFromDate8",
    "TransactionsToDate": "TransactionsToDate0",
    "Condition": 86,
    "OutputType": 12
  }
}
```

