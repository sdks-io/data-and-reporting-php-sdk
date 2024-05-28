
# Priced Trans Summary Response

## Structure

`PricedTransSummaryResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionsSummary` | [`?(PricedTransSummaryResponseTransactionsSummaryItems[])`](../../doc/models/priced-trans-summary-response-transactions-summary-items.md) | Optional | - | getTransactionsSummary(): ?array | setTransactionsSummary(?array transactionsSummary): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |
| `requestId` | `?string` | Optional | API Request Id | getRequestId(): ?string | setRequestId(?string requestId): void |

## Example (as JSON)

```json
{
  "TransactionsSummary": [
    {
      "ProductId": 184,
      "ProductCode": "ProductCode8",
      "ProductName": "ProductName8",
      "ProductGroupId": 112,
      "ProductGroupName": "ProductGroupName0"
    },
    {
      "ProductId": 184,
      "ProductCode": "ProductCode8",
      "ProductName": "ProductName8",
      "ProductGroupId": 112,
      "ProductGroupName": "ProductGroupName0"
    },
    {
      "ProductId": 184,
      "ProductCode": "ProductCode8",
      "ProductName": "ProductName8",
      "ProductGroupId": 112,
      "ProductGroupName": "ProductGroupName0"
    }
  ],
  "Error": {
    "Code": "Code4",
    "Description": "Description2"
  },
  "RequestId": "RequestId2"
}
```

