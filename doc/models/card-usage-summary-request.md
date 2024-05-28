
# Card Usage Summary Request

## Structure

`CardUsageSummaryRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting Company Id of the selected payer.<br>Optional if ColCoCode is passed else Mandatory.<br>Example:<br>1 for Philippines<br>5 for UK | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code  of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.<br>Example:<br>86 for Philippines<br>5 for UK | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerId` | `?int` | Optional | Payer Id of the selected payer.<br>Optional if PayerNumber is passed else Mandatory | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer.<br>Optional if PayerId is passed else Mandatory | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountId` | `?int` | Optional | Account ID of the customer.<br>Optional if account number is passed else mandatory. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer.<br>Optional if Account ID is passed else mandatory. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `cardId` | `?int` | Optional | Card Id of the card.<br>Optional if PAN is passed, else Mandatory. | getCardId(): ?int | setCardId(?int cardId): void |
| `pAN` | `?string` | Optional | PAN of the card.<br>Optional if CardId is passed, else Mandatory. | getPAN(): ?string | setPAN(?string pAN): void |
| `cardExpiryDate` | `?string` | Optional | Expiry date of the card.<br>Mandatory if Card ID is not provided, else optional.<br>Format: yyyyMMdd<br>Example: 20170930 | getCardExpiryDate(): ?string | setCardExpiryDate(?string cardExpiryDate): void |

## Example (as JSON)

```json
{
  "ColCoId": 100,
  "ColCoCode": 114,
  "PayerId": 148,
  "PayerNumber": "PayerNumber8",
  "AccountId": 208
}
```

