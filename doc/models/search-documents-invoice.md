
# Search Documents Invoice

## Structure

`SearchDocumentsInvoice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `documentReference` | `?int` | Optional | Unique Invoice Reference id of the invoice for downloading the zip file containing PDF and proofing elements.<br>Example: 123456 | getDocumentReference(): ?int | setDocumentReference(?int documentReference): void |
| `invoiceNumber` | `?string` | Optional | Payment customer number.<br>Example: GB000000123 | getInvoiceNumber(): ?string | setInvoiceNumber(?string invoiceNumber): void |
| `payerName` | `?string` | Optional | Customer payer name | getPayerName(): ?string | setPayerName(?string payerName): void |
| `accountNumber` | `?string` | Optional | Account Number<br>Example: GB99215176 | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountName` | `?string` | Optional | Invoice account name | getAccountName(): ?string | setAccountName(?string accountName): void |
| `documentType` | `?string` | Optional | Document type<br>String containing one of the following values:<br>•    NAT (National)<br>•    INT (International)<br>•    SOA (Statement of Account) | getDocumentType(): ?string | setDocumentType(?string documentType): void |
| `grossAmount` | `?float` | Optional | Included tax amount in the invoice | getGrossAmount(): ?float | setGrossAmount(?float grossAmount): void |
| `netAmount` | `?float` | Optional | - | getNetAmount(): ?float | setNetAmount(?float netAmount): void |
| `taxAmount` | `?float` | Optional | - | getTaxAmount(): ?float | setTaxAmount(?float taxAmount): void |
| `currencyCode` | `?string` | Optional | - | getCurrencyCode(): ?string | setCurrencyCode(?string currencyCode): void |
| `invoiceStatus` | `?string` | Optional | - | getInvoiceStatus(): ?string | setInvoiceStatus(?string invoiceStatus): void |
| `invoiceDate` | `?string` | Optional | - | getInvoiceDate(): ?string | setInvoiceDate(?string invoiceDate): void |
| `dueDate` | `?string` | Optional | - | getDueDate(): ?string | setDueDate(?string dueDate): void |
| `vATCountryISOCode` | `?string` | Optional | - | getVATCountryISOCode(): ?string | setVATCountryISOCode(?string vATCountryISOCode): void |

## Example (as JSON)

```json
{
  "DocumentReference": 10,
  "InvoiceNumber": "InvoiceNumber0",
  "PayerName": "PayerName0",
  "AccountNumber": "AccountNumber2",
  "AccountName": "AccountName8"
}
```

