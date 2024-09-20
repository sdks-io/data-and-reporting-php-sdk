
# Search Doc Req

## Structure

`SearchDocReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payerNumber` | `?string` | Required | Payer Number of the selected payer.<br>Mandatory<br>Example: GB000000123 | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountNumber` | `?string` | Optional | Account Number of the customer.<br>Mandatory for customer users else optional.<br>This input is a search criterion, if given.<br>Example: GB000000123 | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountNumberList` | `?(string[])` | Optional | Account Number of the customers.<br>optional.<br>This input is a search criterion, if given.<br>Example: [“GB00000123”, “GB00000225”] | getAccountNumberList(): ?array | setAccountNumberList(?array accountNumberList): void |
| `invoiceNumber` | `?string` | Optional | Invoice number.<br>Optional if InvoiceNumberList is passed else Mandatory<br>This input is a search criterion, if given.<br>Example: 0123456789 | getInvoiceNumber(): ?string | setInvoiceNumber(?string invoiceNumber): void |
| `invoiceNumberList` | `?(string[])` | Optional | List of Invoice number.<br>Optional if InvoiceNumber is passed else Mandatory<br>Example: [“0123456789”, “0123459799”] | getInvoiceNumberList(): ?array | setInvoiceNumberList(?array invoiceNumberList): void |
| `invoiceStatus` | `?string` | Optional | The status of the invoices<br>Optional<br>One of the following values:<br>•    NEW<br>•    VIEWED<br>•    DOWNLOADED<br>•    RESTORED | getInvoiceStatus(): ?string | setInvoiceStatus(?string invoiceStatus): void |
| `issuingDateFrom` | `?string` | Optional | Invoice Issuing Date Range/From<br>Optional<br>Format: yyyy/MM/dd | getIssuingDateFrom(): ?string | setIssuingDateFrom(?string issuingDateFrom): void |
| `issuingDateTo` | `?string` | Optional | Invoice Issuing Date Range/To<br>Optional<br>Format: yyyy/MM/dd | getIssuingDateTo(): ?string | setIssuingDateTo(?string issuingDateTo): void |
| `dueDateFrom` | `?string` | Optional | Invoice Due Date Range/From<br>Optional<br>Format: yyyy/MM/dd | getDueDateFrom(): ?string | setDueDateFrom(?string dueDateFrom): void |
| `dueDateTo` | `?string` | Optional | Invoice Due Date Range/To<br>Optional<br>Format: yyyy/MM/dd | getDueDateTo(): ?string | setDueDateTo(?string dueDateTo): void |
| `grossAmount` | `?string` | Optional | Gross amount of the bill.<br>Optional | getGrossAmount(): ?string | setGrossAmount(?string grossAmount): void |
| `grossAmountOperator` | `?string` | Optional | Criteria on the gross amount, for instance use GT when to retrieve the invoices for that gross amount is greater than the given amount on GrossAmount parameter above.<br>Optional<br><br>This parameter will be ignored if GrossAmount parameter is not set.<br><br>One of the following values:<br>•    LT (Less Than)<br>•    LE (Lesser or Equal)<br>•    EQ (equal)<br>•    GE (Greater or equal)<br>•    GT (Greater than) | getGrossAmountOperator(): ?string | setGrossAmountOperator(?string grossAmountOperator): void |
| `documentType` | `?string` | Optional | Document Type<br>Optional<br>One of the following values:<br>•    NAT (National)<br>•    INT (International)<br>•    SOA (Statement of Account) | getDocumentType(): ?string | setDocumentType(?string documentType): void |
| `vATIssuerCountry` | `?string` | Optional | Two letter ISO country code. | getVATIssuerCountry(): ?string | setVATIssuerCountry(?string vATIssuerCountry): void |
| `sortyBy` | `?(string[])` | Optional | Collecting Company Code of the selected payer.<br>Mandatory<br>Example:<br>86-Philippines<br>5-UK | getSortyBy(): ?array | setSortyBy(?array sortyBy): void |
| `colCoCode` | `?int` | Required | Collecting Company Code of the selected payer.<br>Mandatory<br>Example:<br>86-Philippines<br>5-UK | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |

## Example (as JSON)

```json
{
  "PayerNumber": "PayerNumber0",
  "AccountNumber": "AccountNumber2",
  "AccountNumberList": [
    "AccountNumberList0"
  ],
  "InvoiceNumber": "InvoiceNumber0",
  "InvoiceNumberList": [
    "InvoiceNumberList5"
  ],
  "InvoiceStatus": "InvoiceStatus4",
  "ColCoCode": 50
}
```

