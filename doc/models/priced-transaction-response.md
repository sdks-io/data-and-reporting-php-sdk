
# Priced Transaction Response

## Structure

`PricedTransactionResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactions` | [`?(PricedTransactionResponseTransactionsItems[])`](../../doc/models/priced-transaction-response-transactions-items.md) | Optional | - | getTransactions(): ?array | setTransactions(?array transactions): void |

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
    }
  ]
}
```

