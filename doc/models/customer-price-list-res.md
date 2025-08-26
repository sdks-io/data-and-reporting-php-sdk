
# Customer Price List Res

## Structure

`CustomerPriceListRes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique identifier for the request. This will be played back in the response from the request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Status of the request | getStatus(): ?string | setStatus(?string status): void |
| `data` | [`?(CustomerPriceListResponse[])`](../../doc/models/customer-price-list-response.md) | Optional | - | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "RequestId": "0e6fb42a-51b0-43b2-f010-92f822657f6a",
  "Status": "SUCCESS",
  "Data": [
    {
      "PriceList": [
        {
          "Date": "Date8",
          "Day": "Day4",
          "Type": "Type0",
          "PriceListId": 210,
          "PriceListDescription": "PriceListDescription0"
        },
        {
          "Date": "Date8",
          "Day": "Day4",
          "Type": "Type0",
          "PriceListId": 210,
          "PriceListDescription": "PriceListDescription0"
        }
      ]
    }
  ]
}
```

