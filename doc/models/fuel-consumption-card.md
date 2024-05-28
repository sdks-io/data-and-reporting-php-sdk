
# Fuel Consumption Card

## Structure

`FuelConsumptionCard`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardId` | `?int` | Optional | Card Id<br>Optional, when PAN is provided else mandatory. | getCardId(): ?int | setCardId(?int cardId): void |
| `pAN` | `?string` | Optional | Full Card PAN<br>Optional, when CardId is provided else mandatory. | getPAN(): ?string | setPAN(?string pAN): void |
| `expiryDate` | `?string` | Optional | Card Expiry Date<br>Format: yyyyMMdd | getExpiryDate(): ?string | setExpiryDate(?string expiryDate): void |

## Example (as JSON)

```json
{
  "CardId": 54,
  "PAN": "PAN4",
  "ExpiryDate": "ExpiryDate4"
}
```

