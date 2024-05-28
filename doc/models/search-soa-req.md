
# Search SOA Req

## Structure

`SearchSOAReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoCode` | `?int` | Optional | Collecting Company Code of the selected payer. | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerNumber` | `?string` | Optional | Payer Number of the selected payer.<br>Optional if PayerId is passed else Mandatory. | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `invoiceNumber` | `?string` | Optional | Invoice number.<br>Optional.<br>This input is a search criterion, if given. | getInvoiceNumber(): ?string | setInvoiceNumber(?string invoiceNumber): void |
| `fromDate` | `?string` | Optional | SOA searched from this date.<br>Optional.<br>This input is a search criterion, if given.<br>Date format: yyyy/MM/dd | getFromDate(): ?string | setFromDate(?string fromDate): void |
| `toDate` | `?string` | Optional | Invoice date searched until this date.<br>Optional.<br>This input is a search criterion, if given. | getToDate(): ?string | setToDate(?string toDate): void |
| `period` | `?int` | Optional | Invoice date search period. Valid values -<br>Last 7 days – Issued in last 7 days.<br>Last 30 days – Issued in last 30 days.<br>Last 90 days – Issued in last 90 days.<br>Optional.<br>This input is a search criterion, if given. | getPeriod(): ?int | setPeriod(?int period): void |
| `invoiceDate` | `?string` | Optional | Date of invoicing.<br>Optional.<br>This input is a search criterion, if given. | getInvoiceDate(): ?string | setInvoiceDate(?string invoiceDate): void |
| `invoiceStatus` | `?(string[])` | Optional | Possible options are:<br><br>1. StatementDate ASC<br>2. StatementDate DESC<br>   Optional<br>   Note:<br>   This option uses a column name with a combination of “ASC or DESC” for sorting.<br>   If only the column name is provided, it is sorted by ascending.<br>   Sorting is allowed only ASC or DESC, If both provided in the input ASC will be taken as precedence. | getInvoiceStatus(): ?array | setInvoiceStatus(?array invoiceStatus): void |
| `sortBy` | `?(int[])` | Optional | Possible options are:<br><br>1. StatementDate ASC<br>2. StatementDate DESC<br>   Optional<br>   Note:<br>   This option uses a column name with a combination of “ASC or DESC” for sorting.<br>   If only the column name is provided, it is sorted by ascending.<br>   Sorting is allowed only ASC or DESC, If both provided in the input ASC will be taken as precedence. | getSortBy(): ?array | setSortBy(?array sortBy): void |
| `colCoId` | `?int` | Optional | Collecting Company Id  of the selected payer.<br>Optional if ColCoCode is passed else Mandatory.<br>Example:<br>1-Philippines<br>5-UK | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `payerId` | `?int` | Optional | Payer Id  of the selected payer. | getPayerId(): ?int | setPayerId(?int payerId): void |

## Example (as JSON)

```json
{
  "ColCoCode": 206,
  "PayerNumber": "PayerNumber2",
  "InvoiceNumber": "InvoiceNumber8",
  "FromDate": "FromDate2",
  "ToDate": "ToDate2"
}
```

