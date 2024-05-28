
# Fuel Consumption Request

## Structure

`FuelConsumptionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | Collecting Company Id  of the selected payer.<br>Optional if ColCoCode is passed else Mandatory.<br>Example:<br>1 for Philippines<br>5 for UK | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | Collecting Company Code  of the selected payer.<br>Mandatory for serviced OUs such as Romania, Latvia, Lithuania, Estonia, Ukraine etc. It is optional for other countries if ColCoID is provided.<br>Example:<br>86 for Philippines<br>5 for UK | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerId` | `?int` | Optional | Payer Id  of the selected payer.<br>Optional if PayerNumber is passed else Mandatory | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer.<br>Optional if PayerId is passed else Mandatory | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accounts` | [`?(Accounts[])`](../../doc/models/accounts.md) | Optional | - | getAccounts(): ?array | setAccounts(?array accounts): void |
| `cardGroupId` | `?int` | Optional | Card Group Id in GFN<br>Optional<br>Example: 200 | getCardGroupId(): ?int | setCardGroupId(?int cardGroupId): void |
| `cardGroupName` | `?string` | Optional | Card Group Name<br>Optional<br>This input is a search criterion, if given. | getCardGroupName(): ?string | setCardGroupName(?string cardGroupName): void |
| `cards` | [`?(FuelConsumptionCard[])`](../../doc/models/fuel-consumption-card.md) | Optional | - | getCards(): ?array | setCards(?array cards): void |
| `fromDate` | `?string` | Optional | Transactions from Date<br>Optional – ‘Period’ will be considered when this field is not provided. | getFromDate(): ?string | setFromDate(?string fromDate): void |
| `toDate` | `?string` | Optional | Transactions to Date<br>Optional<br>Format: yyyyMMdd | getToDate(): ?string | setToDate(?string toDate): void |
| `period` | `?int` | Optional | Transactions Period. This is ignored when FromDate is supplied on the request<br>Allowed values :<br><br>1. Last 7 Days<br>2. Last 30 Days<br>3. Last 90 Days<br>   Optional - When FromDate/ToDate and Period are not provided, ‘Last 7 Days’ value is considered as default Period. | getPeriod(): ?int | setPeriod(?int period): void |

## Example (as JSON)

```json
{
  "ColCoId": 148,
  "ColCoCode": 162,
  "PayerId": 196,
  "PayerNumber": "PayerNumber4",
  "Accounts": [
    {
      "AccountId": 28,
      "AccountNumber": "AccountNumber0"
    },
    {
      "AccountId": 28,
      "AccountNumber": "AccountNumber0"
    },
    {
      "AccountId": 28,
      "AccountNumber": "AccountNumber0"
    }
  ]
}
```

