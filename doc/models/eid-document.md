
# EID Document

## Structure

`EIDDocument`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `documentId` | `?int` | Optional | Technical identifier for the EID file. Should not be stored in database as it is not guaranteed to stay unchanged over time. | getDocumentId(): ?int | setDocumentId(?int documentId): void |
| `accountGroupId` | `?string` | Optional | Account Group Id | getAccountGroupId(): ?string | setAccountGroupId(?string accountGroupId): void |
| `accountGroupName` | `?string` | Optional | Account group name | getAccountGroupName(): ?string | setAccountGroupName(?string accountGroupName): void |
| `documentType` | `?string` | Optional | Document type.<br>Possible values:<br>•	NAT (National)<br>•	INT (International) | getDocumentType(): ?string | setDocumentType(?string documentType): void |
| `documentFormat` | `?string` | Optional | Document format (CHORUS, DIFI etc.) | getDocumentFormat(): ?string | setDocumentFormat(?string documentFormat): void |
| `documentDate` | `?string` | Optional | Document date.<br>Example: 20170101 | getDocumentDate(): ?string | setDocumentDate(?string documentDate): void |
| `numberOfInvoices` | `?int` | Optional | Number of invoices | getNumberOfInvoices(): ?int | setNumberOfInvoices(?int numberOfInvoices): void |
| `fileSize` | `?int` | Optional | Document size | getFileSize(): ?int | setFileSize(?int fileSize): void |
| `documentStatus` | `?string` | Optional | Document status.<br>Possible values:<br>•	NEW<br>•	VIEWED<br>•	DOWNLOADED<br>•	RESTORED | getDocumentStatus(): ?string | setDocumentStatus(?string documentStatus): void |
| `documentName` | `?string` | Optional | Document file name. | getDocumentName(): ?string | setDocumentName(?string documentName): void |

## Example (as JSON)

```json
{
  "DocumentId": 250,
  "AccountGroupId": "AccountGroupId2",
  "AccountGroupName": "AccountGroupName0",
  "DocumentType": "DocumentType8",
  "DocumentFormat": "DocumentFormat4"
}
```

