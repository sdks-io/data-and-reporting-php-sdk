
# Fee Summary Response

## Structure

`FeeSummaryResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(FeeItemSummaryAllOf0[])`](../../doc/models/fee-item-summary-all-of-0.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `warnings` | [`?(Warning[])`](../../doc/models/warning.md) | Optional | A list of Warning entity.<br>This entity will hold the details of the scheduled System Outages of any dependent applications of this service.<br>Note: If there is no scheduled outage information available, in the configuration in AMS, for this service, this parameter won’t be present in output. | getWarnings(): ?array | setWarnings(?array warnings): void |

## Example (as JSON)

```json
{
  "RequestId": "0e6fb42a-51b0-43b2-f010-92f822657f6a",
  "Status": "SUCCESS",
  "Data": [
    {
      "FeeTypeGroup": "FeeTypeGroup0",
      "FeeTypeId": "FeeTypeId8",
      "ProductId": 84,
      "ProductCode": "ProductCode4",
      "ProductName": "ProductName4"
    },
    {
      "FeeTypeGroup": "FeeTypeGroup0",
      "FeeTypeId": "FeeTypeId8",
      "ProductId": 84,
      "ProductCode": "ProductCode4",
      "ProductName": "ProductName4"
    },
    {
      "FeeTypeGroup": "FeeTypeGroup0",
      "FeeTypeId": "FeeTypeId8",
      "ProductId": 84,
      "ProductCode": "ProductCode4",
      "ProductName": "ProductName4"
    }
  ],
  "Warnings": [
    {
      "Message": "Message0",
      "Type": "Type4"
    },
    {
      "Message": "Message0",
      "Type": "Type4"
    }
  ]
}
```

