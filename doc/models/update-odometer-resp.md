
# Update Odometer Resp

## Structure

`UpdateOdometerResp`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(UpdateOdometerResponse[])`](../../doc/models/update-odometer-response.md) | Optional | - | getData(): ?array | setData(?array data): void |
| `warnings` | [`?(Warning[])`](../../doc/models/warning.md) | Optional | A list of Warning entity.<br>This entity will hold the details of the scheduled System Outages of any dependent applications of this service.<br>Note: If there is no scheduled outage information available, in the configuration in AMS, for this service, this parameter won’t be present in output. | getWarnings(): ?array | setWarnings(?array warnings): void |

## Example (as JSON)

```json
{
  "RequestId": "0e6fb42a-51b0-43b2-f010-92f822657f6a",
  "Status": "SUCCESS",
  "Data": [
    {
      "ServiceReference": 160,
      "UpdateOdometerReferences": [
        {
          "SalesItemId": 206,
          "UpdateOdometerReferenceId": 242
        },
        {
          "SalesItemId": 206,
          "UpdateOdometerReferenceId": 242
        },
        {
          "SalesItemId": 206,
          "UpdateOdometerReferenceId": 242
        }
      ]
    },
    {
      "ServiceReference": 160,
      "UpdateOdometerReferences": [
        {
          "SalesItemId": 206,
          "UpdateOdometerReferenceId": 242
        },
        {
          "SalesItemId": 206,
          "UpdateOdometerReferenceId": 242
        },
        {
          "SalesItemId": 206,
          "UpdateOdometerReferenceId": 242
        }
      ]
    }
  ],
  "Warnings": [
    {
      "Message": "Message0",
      "Type": "Type4"
    }
  ]
}
```

