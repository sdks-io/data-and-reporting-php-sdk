
# Recent Transaction Req

## Structure

`RecentTransactionReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoCode` | `?int` | Required | Three character Collecting Company Code (Shell Code) of the selected payer | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerNumber` | `?string` | Required | Unique Identifier for the customer at payment point.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `10` | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountNumber` | `?string` | Optional | Customer account number. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `productCode` | `?string` | Optional | Global product code | getProductCode(): ?string | setProductCode(?string productCode): void |
| `purchasedInCountry` | `?string` | Optional | Delco country<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `2` | getPurchasedInCountry(): ?string | setPurchasedInCountry(?string purchasedInCountry): void |
| `cardPAN` | `?string` | Optional | Card identifier number masked | getCardPAN(): ?string | setCardPAN(?string cardPAN): void |
| `fromDateTime` | `?string` | Optional | Start date and time of transactions | getFromDateTime(): ?string | setFromDateTime(?string fromDateTime): void |
| `toDateTime` | `?string` | Optional | End date and time of transactions. Mandatory if FromDateTime is provided. | getToDateTime(): ?string | setToDateTime(?string toDateTime): void |
| `transactionStatus` | `?string` | Optional | Status of transaction. DO NOT pass the value if includeDeclines is passed | getTransactionStatus(): ?string | setTransactionStatus(?string transactionStatus): void |
| `fuelOnly` | `?string` | Optional | When passed as ‘true’ Only returned records with Fuel transactions.(All Fuels).When passed as ‘false’ the above condition will not be checked. (Both All Fuels and Non-Fuel) | getFuelOnly(): ?string | setFuelOnly(?string fuelOnly): void |
| `productGroupName` | `?string` | Optional | Product group name | getProductGroupName(): ?string | setProductGroupName(?string productGroupName): void |
| `vehicleRegistrationNumber` | `?string` | Optional | Vehicle registration number embossed on the card | getVehicleRegistrationNumber(): ?string | setVehicleRegistrationNumber(?string vehicleRegistrationNumber): void |
| `includeDeclines` | `?bool` | Optional | Flag to enable to get declined records | getIncludeDeclines(): ?bool | setIncludeDeclines(?bool includeDeclines): void |
| `cardIssuerName` | `?string` | Optional | Card issuer name | getCardIssuerName(): ?string | setCardIssuerName(?string cardIssuerName): void |
| `columnList` | `?string` | Optional | Column list to be part of response, it can be 'All' to return all possible column. E.g. 'All'<br><br>To get specific columns pass multiple columns name separated by comma along with 'PayerNumber'. E.g. "PayerNumber,ProductCode" | getColumnList(): ?string | setColumnList(?string columnList): void |

## Example (as JSON)

```json
{
  "ColCoCode": 14,
  "PayerNumber": "GB00001232",
  "AccountNumber": "GB00001233",
  "ProductCode": "22",
  "PurchasedInCountry": "GB",
  "CardPAN": "700205******890645",
  "FromDateTime": "2020-11-09 13:56:03.000",
  "ToDateTime": "2020-12-09 13:56:03.000",
  "TransactionStatus": "APPROVED",
  "FuelOnly": "False",
  "ProductGroupName": "Motor gasoline",
  "VehicleRegistrationNumber": "YG67OUM",
  "IncludeDeclines": true,
  "CardIssuerName": "Mathew",
  "ColumnList": "PayerNumber,AccountNumber,ProductName,FuelVolume,PAN"
}
```

