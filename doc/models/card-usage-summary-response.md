
# Card Usage Summary Response

## Structure

`CardUsageSummaryResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `usageSummary` | [`?(UsageSummary[])`](../../doc/models/usage-summary.md) | Optional | - | getUsageSummary(): ?array | setUsageSummary(?array usageSummary): void |
| `requestId` | `?string` | Optional | API Request Id | getRequestId(): ?string | setRequestId(?string requestId): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |

## Example (as JSON)

```json
{
  "UsageSummary": [
    {
      "Date": "Date0",
      "ProductId": 198,
      "ProductCode": "ProductCode6",
      "ProductName": "ProductName6",
      "IsFuelProduct": false
    },
    {
      "Date": "Date0",
      "ProductId": 198,
      "ProductCode": "ProductCode6",
      "ProductName": "ProductName6",
      "IsFuelProduct": false
    },
    {
      "Date": "Date0",
      "ProductId": 198,
      "ProductCode": "ProductCode6",
      "ProductName": "ProductName6",
      "IsFuelProduct": false
    }
  ],
  "RequestId": "RequestId2",
  "Error": {
    "Code": "Code4",
    "Description": "Description2"
  }
}
```

