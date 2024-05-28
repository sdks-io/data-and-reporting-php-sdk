
# Exception Product

## Structure

`ExceptionProduct`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productid` | `?int` | Optional | Product Id<br>Optional if ProductCode is passed else Mandatory. | getProductid(): ?int | setProductid(?int productid): void |
| `productCode` | `?string` | Optional | Product Code<br>Optional if ProductId is passed else Mandatory. | getProductCode(): ?string | setProductCode(?string productCode): void |

## Example (as JSON)

```json
{
  "Productid": 62,
  "ProductCode": "ProductCode8"
}
```

