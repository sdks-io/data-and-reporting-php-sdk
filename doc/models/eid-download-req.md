
# EID Download Req

## Structure

`EIDDownloadReq`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoCode` | `?int` | Required | Collecting Company Code of the selected payer.<br>Mandatory | getColCoCode(): ?int | setColCoCode(?int colCoCode): void |
| `eIDList` | `string[]` | Required | - | getEIDList(): array | setEIDList(array eIDList): void |
| `accountGroupCountry` | `?int` | Required | ColCo code associated with the Account Group IDs of the given EID/EDI files.<br>Mandatory | getAccountGroupCountry(): ?int | setAccountGroupCountry(?int accountGroupCountry): void |
| `accountGroupIdList` | `string[]` | Required | - | getAccountGroupIdList(): array | setAccountGroupIdList(array accountGroupIdList): void |

## Example (as JSON)

```json
{
  "ColCoCode": 92,
  "EIDList": [
    "EIDList2",
    "EIDList3"
  ],
  "AccountGroupCountry": 8,
  "AccountGroupIdList": [
    "AccountGroupIdList5",
    "AccountGroupIdList4",
    "AccountGroupIdList3"
  ]
}
```

