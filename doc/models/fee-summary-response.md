
# Fee Summary Response

## Structure

`FeeSummaryResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `feeItemsSummary` | [`?(FeeItemSummaryAllOf0[])`](../../doc/models/fee-item-summary-all-of-0.md) | Optional | - | getFeeItemsSummary(): ?array | setFeeItemsSummary(?array feeItemsSummary): void |
| `requestId` | `?string` | Optional | A unique request id in GUID format. The value is written to the Shell API Platform audit log for end to end traceability of a request. If a value is not provided by an API client, then a GUID is automatically populated by the Shell API Platform and returned in the API response. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `error` | [`?ErrorStatus`](../../doc/models/error-status.md) | Optional | - | getError(): ?ErrorStatus | setError(?ErrorStatus error): void |

## Example (as JSON)

```json
{
  "FeeItemsSummary": [
    {
      "FeeTypeGroup": "FeeTypeGroup8",
      "FeeTypeId": "FeeTypeId0",
      "ProductId": 48,
      "ProductCode": "ProductCode4",
      "ProductName": "ProductName4"
    },
    {
      "FeeTypeGroup": "FeeTypeGroup8",
      "FeeTypeId": "FeeTypeId0",
      "ProductId": 48,
      "ProductCode": "ProductCode4",
      "ProductName": "ProductName4"
    },
    {
      "FeeTypeGroup": "FeeTypeGroup8",
      "FeeTypeId": "FeeTypeId0",
      "ProductId": 48,
      "ProductCode": "ProductCode4",
      "ProductName": "ProductName4"
    }
  ],
  "RequestId": "RequestId2",
  "Error": {
    "Code": "Code4",
    "Description": "Description2"
  }
}
```

