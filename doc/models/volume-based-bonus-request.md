
# Volume Based Bonus Request

## Structure

`VolumeBasedBonusRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting Company Id of the selected payer.<br>Optional if ColCoCode is passed else Mandatory.<br>Example:<br>1 for Philippines<br>5 for UK | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.<br>Example:<br>86 for Philippines<br>5 for UK | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerId` | `?int` | Optional | Payer Id of the selected payer.<br>Optional if PayerNumber is passed else Mandatory | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer.<br>Optional if PayerId is passed else Mandatory | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `includeHistory` | `?bool` | Optional | The API will return the details of the previously calculated/paid bonus and fuel consumption (Volume) in the response when this flag is ‘True’. | getIncludeHistory(): ?bool | setIncludeHistory(?bool includeHistory): void |
| `includeCurrentPeriodVolume` | `?bool` | Optional | The API will return the details of the monthly breakup of current period fuel consumption (Volume) in the response when this flag is ‘True’. | getIncludeCurrentPeriodVolume(): ?bool | setIncludeCurrentPeriodVolume(?bool includeCurrentPeriodVolume): void |

## Example (as JSON)

```json
{
  "ColCoId": 174,
  "ColCoCode": 188,
  "PayerId": 222,
  "PayerNumber": "PayerNumber6",
  "IncludeHistory": false
}
```

