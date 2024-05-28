
# Card Exceptions

## Structure

`CardExceptions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountId` | `?int` | Optional | Account Id | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountShortName` | `?string` | Optional | Account Short Name | getAccountShortName(): ?string | setAccountShortName(?string accountShortName): void |
| `cardId` | `?int` | Optional | Unique Card Id | getCardId(): ?int | setCardId(?int cardId): void |
| `currencyCode` | `?string` | Optional | ISO currency code | getCurrencyCode(): ?string | setCurrencyCode(?string currencyCode): void |
| `currencySymbol` | `?string` | Optional | Currency symbol of the Invoice Currency Code | getCurrencySymbol(): ?string | setCurrencySymbol(?string currencySymbol): void |
| `day` | `?int` | Optional | Summary Day: Populated when the Period is passed as ‘Day’. | getDay(): ?int | setDay(?int day): void |
| `driverName` | `?string` | Optional | Driver name | getDriverName(): ?string | setDriverName(?string driverName): void |
| `month` | `?int` | Optional | Summary Month: Populated when the Value of Period is Passed as ‘Month’. | getMonth(): ?int | setMonth(?int month): void |
| `pAN` | `?string` | Optional | Card PAN | getPAN(): ?string | setPAN(?string pAN): void |
| `payerId` | `?int` | Optional | Payment customer id of the customer | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payment customer number | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `payerShortName` | `?string` | Optional | Payer Short Name | getPayerShortName(): ?string | setPayerShortName(?string payerShortName): void |
| `totalAmount` | `?float` | Optional | Total Amount (In Customer Currency) of Transactions met with the given exceptions criteria. | getTotalAmount(): ?float | setTotalAmount(?float totalAmount): void |
| `totalQuantity` | `?int` | Optional | Total Quantity of Transactions met with the given exceptions criteria. | getTotalQuantity(): ?int | setTotalQuantity(?int totalQuantity): void |
| `totalSalesItems` | `?int` | Optional | Total number of Sales Items met with the given exception criteria. | getTotalSalesItems(): ?int | setTotalSalesItems(?int totalSalesItems): void |
| `totalTransactions` | `?int` | Optional | Total number of Transactions met with the given exception criteria. | getTotalTransactions(): ?int | setTotalTransactions(?int totalTransactions): void |
| `vRN` | `?string` | Optional | Vehicle Registration Number | getVRN(): ?string | setVRN(?string vRN): void |
| `week` | `?int` | Optional | Summary Week Number with in the given date range. Populated when the Value of Period is Passed as ‘Week’. | getWeek(): ?int | setWeek(?int week): void |
| `year` | `?int` | Optional | Summary Year: Populated when the Value of Period is Passed as ‘Month’. | getYear(): ?int | setYear(?int year): void |

## Example (as JSON)

```json
{
  "AccountId": 224,
  "AccountNumber": "AccountNumber4",
  "AccountShortName": "AccountShortName6",
  "CardId": 130,
  "CurrencyCode": "CurrencyCode2"
}
```

