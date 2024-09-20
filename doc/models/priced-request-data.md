
# Priced Request Data

This endpoint allows querying the transaction data (i.e. Priced, Billed and Unbilled sales items) from SFSBI. It provides a flexible search criteria and supports paging

## Structure

`PricedRequestData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colCoCode` | `?string` | Required | Collecting Company Code (Shell Code) of the selected payer. | getColCoCode(): ?string | setColCoCode(?string colCoCode): void |
| `invoiceStatus` | `array` | Required | - | getInvoiceStatus(): array | setInvoiceStatus(array invoiceStatus): void |
| `payerNumber` | `?string` | Required | Payer Number of the selected payer.<br>**Constraints**: *Minimum Length*: `1` | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `accountId` | `?int` | Optional | Account Id (GFN customer id) | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number of the selected account. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `driverName` | `?string` | Optional | Driver Name (of Card record)<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `40` | getDriverName(): ?string | setDriverName(?string driverName): void |
| `cardGroupId` | `?int` | Optional | Card Group Id in GFN | getCardGroupId(): ?int | setCardGroupId(?int cardGroupId): void |
| `cardPAN` | `?string` | Optional | Full Card PAN | getCardPAN(): ?string | setCardPAN(?string cardPAN): void |
| `productCode` | `?string` | Optional | Product Code – Global as per GFN configuration<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `8` | getProductCode(): ?string | setProductCode(?string productCode): void |
| `productName` | `?string` | Optional | Product Name – Global as per GFN configuration<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128` | getProductName(): ?string | setProductName(?string productName): void |
| `siteCode` | `?string` | Optional | Site Code in GFN<br>**Constraints**: *Minimum Length*: `8`, *Maximum Length*: `87` | getSiteCode(): ?string | setSiteCode(?string siteCode): void |
| `incomingSiteNumber` | `?string` | Optional | Site Code as configured in GFN<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `10` | getIncomingSiteNumber(): ?string | setIncomingSiteNumber(?string incomingSiteNumber): void |
| `invoiceDate` | `?string` | Optional | Returns the billed transaction for the given invoice date | getInvoiceDate(): ?string | setInvoiceDate(?string invoiceDate): void |
| `invoiceNumber` | `?string` | Optional | Returns the billed transaction for the given invoice number<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `10` | getInvoiceNumber(): ?string | setInvoiceNumber(?string invoiceNumber): void |
| `purchasedInCountryCode` | `?string` | Optional | Purchased InCountryCode<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `2` | getPurchasedInCountryCode(): ?string | setPurchasedInCountryCode(?string purchasedInCountryCode): void |
| `purchasedInCountry` | `?string` | Optional | Network Delco PurchasedCountryName | getPurchasedInCountry(): ?string | setPurchasedInCountry(?string purchasedInCountry): void |
| `siteGroupId` | `?int` | Optional | Site Group Id in GFN | getSiteGroupId(): ?int | setSiteGroupId(?int siteGroupId): void |
| `vehicleRegistrationNumber` | `?string` | Optional | Vehicle Registration (of Card record)<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `128` | getVehicleRegistrationNumber(): ?string | setVehicleRegistrationNumber(?string vehicleRegistrationNumber): void |
| `feeTypeId` | `?int` | Optional | Card Id (i.e. Unique Card Id in GFN) | getFeeTypeId(): ?int | setFeeTypeId(?int feeTypeId): void |
| `lineItemDescription` | `?string` | Optional | Item identifier in the transaction.<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `128` | getLineItemDescription(): ?string | setLineItemDescription(?string lineItemDescription): void |
| `cards` | `?(int[])` | Optional | This entity accepts the list of CardId to filter in the response.<br>Note: The number of cardId allowed to be passed in the request is configurable to a maximum of 500 cards.<br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `500` | getCards(): ?array | setCards(?array cards): void |
| `sortOrder` | [`?string(PricedTransactionReqV2SortOrderEnum)`](../../doc/models/priced-transaction-req-v2-sort-order-enum.md) | Optional | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `1` | getSortOrder(): ?string | setSortOrder(?string sortOrder): void |
| `fromDate` | `?string` | Optional | From transaction delivery date<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `19` | getFromDate(): ?string | setFromDate(?string fromDate): void |
| `toDate` | `?string` | Optional | To transaction delivery date<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `19` | getToDate(): ?string | setToDate(?string toDate): void |
| `period` | [`?int(PricedTransactionReqV2PeriodEnum)`](../../doc/models/priced-transaction-req-v2-period-enum.md) | Optional | - | getPeriod(): ?int | setPeriod(?int period): void |
| `postingDateFrom` | `?string` | Optional | Transaction posting start date and time<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `19` | getPostingDateFrom(): ?string | setPostingDateFrom(?string postingDateFrom): void |
| `postingDateTo` | `?string` | Optional | Transaction posting end date and time<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `19` | getPostingDateTo(): ?string | setPostingDateTo(?string postingDateTo): void |
| `transactionItemId` | `?string` | Optional | Unique id of the transaction that may include one or more salesitems | getTransactionItemId(): ?string | setTransactionItemId(?string transactionItemId): void |
| `fuelOnly` | `?bool` | Optional | Is FuelOnly indicator<br>**Default**: `false` | getFuelOnly(): ?bool | setFuelOnly(?bool fuelOnly): void |
| `includeFees` | `?bool` | Optional | When passed as ‘true’ then all sales items along with fees will be included in the response and the follwoing filteres will be ignored<br><br>* InvoiceNumber<br>* InvoiceDate<br>* PostingDateFrom<br>* PostingDateTo | getIncludeFees(): ?bool | setIncludeFees(?bool includeFees): void |
| `isMultipayer` | `?bool` | Optional | If true then returns all the data linked tothe payer group of the provided PayerNumberin the request | getIsMultipayer(): ?bool | setIsMultipayer(?bool isMultipayer): void |
| `validInvoiceDateOnly` | `?bool` | Optional | When passed as ‘True’ the transactions records with report date not equal to 9999-12-30 will be returned. When passed as ‘False’ the above condition will not be checked.<br>**Default**: `false` | getValidInvoiceDateOnly(): ?bool | setValidInvoiceDateOnly(?bool validInvoiceDateOnly): void |
| `invoiceFromDate` | `?string` | Optional | Invoice From Date, this is a search criterion to filter invoiced transactions with invoice date from this date.<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `19` | getInvoiceFromDate(): ?string | setInvoiceFromDate(?string invoiceFromDate): void |
| `invoiceToDate` | `?string` | Optional | Invoice To Date, this is a search criterion to filter invoiced transactions with invoice date until this date.<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `19` | getInvoiceToDate(): ?string | setInvoiceToDate(?string invoiceToDate): void |
| `hostingCollectingCompanyNumber` | `?string` | Optional | Hosting Collecting Company Number of the selected payer. | getHostingCollectingCompanyNumber(): ?string | setHostingCollectingCompanyNumber(?string hostingCollectingCompanyNumber): void |
| `search` | `?string` | Optional | Search based on DriverName or VRN | getSearch(): ?string | setSearch(?string search): void |
| `transactionId` | `?string` | Optional | Unique id of the transaction that may include one or more salesitems | getTransactionId(): ?string | setTransactionId(?string transactionId): void |

## Example (as JSON)

```json
{
  "ColCoCode": "032",
  "InvoiceStatus": {
    "key1": "val1",
    "key2": "val2"
  },
  "PayerNumber": "DE26685263",
  "AccountId": 29484,
  "AccountNumber": "DE26667080",
  "DriverName": "HH NX 508",
  "CardGroupId": 40000,
  "CardPAN": "7002051006629890645",
  "ProductCode": "10",
  "ProductName": "Diesel AGO",
  "SiteCode": "05000100",
  "IncomingSiteNumber": "100021",
  "InvoiceDate": "2022-01-01 00:00:00",
  "InvoiceNumber": "3201016193",
  "PurchasedInCountryCode": "GB",
  "PurchasedInCountry": "United Kingdom",
  "SiteGroupId": 202,
  "FeeTypeId": 275549,
  "LineItemDescription": "ABC3",
  "FromDate": "2022-01-01 00:00:00",
  "ToDate": "2022-01-01 00:00:00",
  "PostingDateFrom": "2022-01-01 00:00:00",
  "PostingDateTo": "2022-01-01 00:00:00",
  "TransactionItemId": "io9KVXk1UkW57XWKyeaHHg",
  "FuelOnly": false,
  "ValidInvoiceDateOnly": false,
  "InvoiceFromDate": "2022-01-01 00:00:00",
  "InvoiceToDate": "2022-01-01 00:00:00",
  "HostingCollectingCompanyNumber": "032",
  "Search": "2K89909",
  "TransactionId": "io9KVXk1UkW57XWKyeaHHg"
}
```

