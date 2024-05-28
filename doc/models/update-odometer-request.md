
# Update Odometer Request

## Structure

`UpdateOdometerRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting Company Id  of the selected payer.<br>Optional if ColCoCode is passed else Mandatory.<br>Example:<br>1 for Philippines<br>5 for UK | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code (Shell Code) of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided. | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerId` | `?int` | Optional | Payer Id (i.e. Customer Id of the Payment Customer in Cards Platform) of the selected payer.<br>Optional if PayerNumber is passed else Mandatory | getPayerId(): ?int | setPayerId(?int payerId): void |
| `accountId` | `?int` | Optional | Account Id (i.e. Customer Id of the Sub Account in GFN) of the selected account.<br>Optional if AccountNumber is passed else Mandatory | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number (ex: GB000000123) of the selected account.<br>Optional if AccountId is passed else Mandatory | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `updateOdometers` | [`?(UpdateOdometer[])`](../../doc/models/update-odometer.md) | Optional | - | getUpdateOdometers(): ?array | setUpdateOdometers(?array updateOdometers): void |
| `notifyCaller` | `?bool` | Optional | True/False.<br>Optional.<br>Default: False<br>If true, the caller would be notified back with the status as success or failure after the update odometer is processed. | getNotifyCaller(): ?bool | setNotifyCaller(?bool notifyCaller): void |
| `caller` | `?string` | Optional | The caller to be notified with the status of the update odometer.<br>Mandatory, if NotifyCaller is true. | getCaller(): ?string | setCaller(?string caller): void |

## Example (as JSON)

```json
{
  "ColCoId": 62,
  "ColCoCode": 76,
  "PayerId": 110,
  "AccountId": 170,
  "AccountNumber": "AccountNumber4"
}
```

