
# Fuel Consumption Data

## Structure

`FuelConsumptionData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | Account Name | getAccountName(): ?string | setAccountName(?string accountName): void |
| `accountNumber` | `?string` | Optional | Account Number | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `payerName` | `?string` | Optional | Payment customer Name | getPayerName(): ?string | setPayerName(?string payerName): void |
| `payerNumber` | `?string` | Optional | Payment customer number | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `cardNumber` | `?string` | Optional | Card PAN | getCardNumber(): ?string | setCardNumber(?string cardNumber): void |
| `cardGroupId` | `?int` | Optional | Card group ID | getCardGroupId(): ?int | setCardGroupId(?int cardGroupId): void |
| `cardGroupName` | `?string` | Optional | Card group name | getCardGroupName(): ?string | setCardGroupName(?string cardGroupName): void |
| `driverName` | `?string` | Optional | Driver name | getDriverName(): ?string | setDriverName(?string driverName): void |
| `licenseNumber` | `?string` | Optional | Vehicle registration number | getLicenseNumber(): ?string | setLicenseNumber(?string licenseNumber): void |
| `initialOdometer` | `?float` | Optional | First transaction odometer reading | getInitialOdometer(): ?float | setInitialOdometer(?float initialOdometer): void |
| `lastOdometer` | `?float` | Optional | Last transaction odometer reading | getLastOdometer(): ?float | setLastOdometer(?float lastOdometer): void |
| `distance` | `?float` | Optional | Distance in  KM or Miles based on Customer and Colco Settings | getDistance(): ?float | setDistance(?float distance): void |
| `fuelConsumption` | `?float` | Optional | Total Fuel Consumption. | getFuelConsumption(): ?float | setFuelConsumption(?float fuelConsumption): void |
| `fuelNetAmount` | `?float` | Optional | Net Fuel Amount | getFuelNetAmount(): ?float | setFuelNetAmount(?float fuelNetAmount): void |
| `discount` | `?float` | Optional | Total Discount | getDiscount(): ?float | setDiscount(?float discount): void |
| `fuelTax` | `?float` | Optional | Fuel Tax Amount | getFuelTax(): ?float | setFuelTax(?float fuelTax): void |
| `fuelVolume` | `?float` | Optional | Total Fuel Volume in Litres | getFuelVolume(): ?float | setFuelVolume(?float fuelVolume): void |
| `grossNonFuelExpenses` | `?float` | Optional | Gross Nonfuel Amount | getGrossNonFuelExpenses(): ?float | setGrossNonFuelExpenses(?float grossNonFuelExpenses): void |
| `cO2Produced` | `?float` | Optional | Total Co2 produced | getCO2Produced(): ?float | setCO2Produced(?float cO2Produced): void |
| `transactionCount` | `?float` | Optional | Total Transaction Count | getTransactionCount(): ?float | setTransactionCount(?float transactionCount): void |

## Example (as JSON)

```json
{
  "AccountName": "AccountName0",
  "AccountNumber": "AccountNumber4",
  "PayerName": "PayerName8",
  "PayerNumber": "PayerNumber2",
  "CardNumber": "CardNumber2"
}
```

