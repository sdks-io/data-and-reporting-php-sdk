
# EID Search Req

## Structure

`EIDSearchReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoCode` | `?int` | Required | Collecting Company Code of the selected payer.<br>Mandatory | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `accountGroupCountry` | `?int` | Required | Country code (colco code) of the account group.<br>Mandatory | getAccountGroupCountry(): ?int | setAccountGroupCountry(?int accountGroupCountry): void |
| `accountGroupId` | `string[]` | Required | List of IDs of the account groups that user has access to.<br>Mandatory | getAccountGroupId(): array | setAccountGroupId(array accountGroupId): void |
| `accountGroupName` | `?string` | Optional | Account group name<br>Optional.<br>This input is a search criterion, if given. | getAccountGroupName(): ?string | setAccountGroupName(?string accountGroupName): void |
| `fromDate` | `?string` | Optional | EID date searched from this date.<br>Optional. | getFromDate(): ?string | setFromDate(?string fromDate): void |
| `toDate` | `?string` | Optional | Invoice date searched until this date.<br>Optional. | getToDate(): ?string | setToDate(?string toDate): void |
| `invoiceType` | `?string` | Optional | Invoice type.<br>Optional.<br>Possible values:<br>•	NAT (National)<br>•	INT (International) | getInvoiceType(): ?string | setInvoiceType(?string invoiceType): void |
| `invoiceStatus` | `?string` | Optional | Status of the document.<br>Optional.<br>Possible values:<br>•	NEW<br>•	VIEWED<br>•	DOWNLOADED<br>•	RESTORED | getInvoiceStatus(): ?string | setInvoiceStatus(?string invoiceStatus): void |
| `sortBy` | `?(string[])` | Optional | Sort option –<br>•    InvoiceNumber ASC<br>•    InvoiceDate ASC<br>•    InvoiceNumber DESC<br>•    InvoiceDate DESC<br>Optional | getSortBy(): ?array | setSortBy(?array sortBy): void |

## Example (as JSON)

```json
{
  "ColCoCode": 222,
  "AccountGroupCountry": 138,
  "AccountGroupId": [
    "AccountGroupId7",
    "AccountGroupId8"
  ],
  "AccountGroupName": "AccountGroupName8",
  "FromDate": "FromDate4",
  "ToDate": "ToDate4",
  "InvoiceType": "InvoiceType6",
  "InvoiceStatus": "InvoiceStatus2"
}
```

