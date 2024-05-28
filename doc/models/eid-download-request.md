
# EID Download Request

## Structure

`EIDDownloadRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filters` | [`?EIDDownloadReq`](../../doc/models/eid-download-req.md) | Optional | - | getFilters(): ?EIDDownloadReq | setFilters(?EIDDownloadReq filters): void |

## Example (as JSON)

```json
{
  "Filters": {
    "ColCoCode": 14,
    "EIDList": [
      "EIDList8"
    ],
    "AccountGroupCountry": 186,
    "AccountGroupIdList": [
      "AccountGroupIdList1",
      "AccountGroupIdList2",
      "AccountGroupIdList3"
    ]
  }
}
```

