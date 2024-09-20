
# Invoice Search Additional Document

Invoice document reference number for the additional invoice files such as KSeF file (Poland). This field is optional, and it will be missing if additional documents are not applicable. Also, it will not be populated if the invoice date is older than 13 months.

## Structure

`InvoiceSearchAdditionalDocument`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reference` | `?string` | Optional | Unique ID for the additional invoice document. | getReference(): ?string | setReference(?string reference): void |
| `type` | `?string` | Optional | Type of the additional document.<br>Mandatory<br>Possible values:<br>•    KSeF - Applicable for Poland market. | getType(): ?string | setType(?string type): void |
| `isApplicable` | `?string` | Optional | True if a KSeF PDF will be produced for the customer. | getIsApplicable(): ?string | setIsApplicable(?string isApplicable): void |

## Example (as JSON)

```json
{
  "Reference": "Reference6",
  "Type": "Type4",
  "IsApplicable": "IsApplicable2"
}
```

