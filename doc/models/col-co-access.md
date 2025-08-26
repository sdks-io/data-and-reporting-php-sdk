
# Col Co Access

## Structure

`ColCoAccess`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting company ID. | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting company code. | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `colCoCountryName` | `?string` | Optional | Collecting company’s Country name. ex: United Kingdom | getColCoCountryName(): ?string | setColCoCountryName(?string colCoCountryName): void |
| `issuingCountryNumber` | `?string` | Optional | Issuing Country Number.<br><br>ex: 032 - Czech Republic | getIssuingCountryNumber(): ?string | setIssuingCountryNumber(?string issuingCountryNumber): void |

## Example (as JSON)

```json
{
  "ColCoId": 14,
  "ColCoCode": 14,
  "ColCoCountryName": "DE",
  "IssuingCountryNumber": "DE"
}
```

