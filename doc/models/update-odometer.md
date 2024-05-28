
# Update Odometer

## Structure

`UpdateOdometer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `salesItemId` | `?string` | Required | Unique SalesItemId (Either Billed on Unbilled)<br>Mandatory | getSalesItemId(): ?string | setSalesItemId(?string salesItemId): void |
| `newOdometerValue` | `?int` | Required | NewOdometerValue that needs to be updated | getNewOdometerValue(): ?int | setNewOdometerValue(?int newOdometerValue): void |

## Example (as JSON)

```json
{
  "SalesItemId": "SalesItemId2",
  "NewOdometerValue": 158
}
```

