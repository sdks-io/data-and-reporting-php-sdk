
# Update Odometer Response

## Structure

`UpdateOdometerResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `serviceReference` | `?int` | Optional | Main reference number for tracking. | getServiceReference(): ?int | setServiceReference(?int serviceReference): void |
| `updateOdometerReferences` | [`?(UpdateOdometerReference[])`](../../doc/models/update-odometer-reference.md) | Optional | - | getUpdateOdometerReferences(): ?array | setUpdateOdometerReferences(?array updateOdometerReferences): void |

## Example (as JSON)

```json
{
  "ServiceReference": 140,
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
```

