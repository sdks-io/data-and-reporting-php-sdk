
# Transaction Data V1 Recent 401 Error Exception

## Structure

`TransactionDataV1Recent401ErrorException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | Unique request identifier passed from end user. This identifier helps in tracing a transaction | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | Indicates overall status of the request. Allowed values: SUCCES, FAILED, PARTIAL_SUCCESS | getStatus(): ?string | setStatus(?string status): void |
| `errors` | [`?(ErrorDetails[])`](../../doc/models/error-details.md) | Optional | - | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "RequestId": "RequestId8",
  "Status": "Status4",
  "Errors": [
    {
      "Code": "Code4",
      "Title": "Title6",
      "Detail": "Detail6",
      "AdditionalInfo": {
        "key0": "AdditionalInfo0",
        "key1": "AdditionalInfo1",
        "key2": "AdditionalInfo2"
      }
    }
  ]
}
```

