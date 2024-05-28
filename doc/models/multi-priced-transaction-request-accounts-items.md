
# Multi Priced Transaction Request Accounts Items

## Structure

`MultiPricedTransactionRequestAccountsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payerId` | `?int` | Optional | Payer Id of the selected payer.<br>Optional if PayerNumber is passed else Mandatory<br>Example: 123456 | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number (Ex: GB000000123) of the selected payer.<br>Optional if PayerId is passed else Mandatory<br>Example: GB000000123 | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountId` | `?int` | Optional | Account Id  of the selected account. | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number (ex: GB000000123) of the selected account. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |

## Example (as JSON)

```json
{
  "PayerId": 144,
  "PayerNumber": "PayerNumber2",
  "AccountId": 204,
  "AccountNumber": "AccountNumber4"
}
```

