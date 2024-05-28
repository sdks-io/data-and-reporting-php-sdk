
# Customer Price List Request

## Structure

`CustomerPriceListRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoId` | `?int` | Optional | - | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoCode` | `?int` | Optional | - | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerId` | `?int` | Optional | Payer Id of the selected payer.<br>Optional if PayerNumber is passed else Mandatory | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer.<br>Optional if PayerId is passed else Mandatory | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountId` | `?int` | Optional | Account Id of the customer.<br>Optional | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer.<br>Optional | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `customerSpecificList` | `?int` | Optional | Whether customer specific price lists and customer specific discount values set on pump prices are to be returned or not. | getCustomerSpecificList(): ?int | setCustomerSpecificList(?int customerSpecificList): void |
| `priceListType` | `?int` | Optional | Specifies the type of price lists to be included in the response.<br>Optional – default value is zero.<br><br>Allowed values:<br>0 – All<br>1 – National Only<br>2 – International Only | getPriceListType(): ?int | setPriceListType(?int priceListType): void |
| `delCoId` | `?int` | Optional | Delivering Company ID<br>Optional. | getDelCoId(): ?int | setDelCoId(?int delCoId): void |
| `fromDate` | `?string` | Required | Start date to fetch the price lists, discount values on pump prices and VAT rates.<br>Mandatory<br>Format: yyyyMMdd | getFromDate(): ?string | setFromDate(?string fromDate): void |
| `toDate` | `?string` | Required | End date to fetch the price lists, discount values on pump prices and VAT rates.<br>Mandatory and greater than or equal to FromDate.<br>Maximum of 30 (configurable) day’s duration is allowed between ‘From’ and ‘To’ dates.<br>Format: yyyyMMdd | getToDate(): ?string | setToDate(?string toDate): void |
| `includePumpPriceDiscounts` | `?bool` | Optional | True / False.<br>A flag to request the discount information set on pump prices for the customer to be included in the response.<br>Optional<br>Default value: False | getIncludePumpPriceDiscounts(): ?bool | setIncludePumpPriceDiscounts(?bool includePumpPriceDiscounts): void |

## Example (as JSON)

```json
{
  "ColCoId": 82,
  "ColCoCode": 96,
  "PayerId": 130,
  "PayerNumber": "PayerNumber6",
  "AccountId": 190,
  "FromDate": "FromDate2",
  "ToDate": "ToDate8"
}
```

