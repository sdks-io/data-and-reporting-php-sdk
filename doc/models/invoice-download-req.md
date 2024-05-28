
# Invoice Download Req

## Structure

`InvoiceDownloadReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoCode` | `?int` | Required | Collecting Company Code of the selected payer.<br>Mandatory | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `payerNumber` | `?string` | Required | Payer Number of the selected payer.<br>Mandatory<br>Example: GB000000123 | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountNumber` | `?(string[])` | Optional | List of Account Numbers of the invoices.<br>Mandatory for customer users else optional. | getAccountNumber(): ?array | setAccountNumber(?array accountNumber): void |
| `documentReference` | `?(int[])` | Optional | Unique reference ids of invoice document (of zip file).<br>Optional if InvoiceOrSOANumber is passed else Mandatory. | getDocumentReference(): ?array | setDocumentReference(?array documentReference): void |
| `invoiceOrSOANumber` | `?string` | Optional | Invoice or the SOA document reference number issued by Card s Platform. | getInvoiceOrSOANumber(): ?string | setInvoiceOrSOANumber(?string invoiceOrSOANumber): void |

## Example (as JSON)

```json
{
  "ColCoCode": 126,
  "PayerNumber": "PayerNumber0",
  "AccountNumber": [
    "AccountNumber4",
    "AccountNumber5",
    "AccountNumber6"
  ],
  "DocumentReference": [
    117,
    116,
    115
  ],
  "InvoiceOrSOANumber": "InvoiceOrSOANumber0"
}
```

