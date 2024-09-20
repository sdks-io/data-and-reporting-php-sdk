
# Invoice Search Details

## Structure

`InvoiceSearchDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountFullName` | `?string` | Optional | Account Full Name<br>Example: AT_reversal customer_FN | getAccountFullName(): ?string | setAccountFullName(?string accountFullName): void |
| `accountId` | `?int` | Optional | Account ID<br>Example: 29484 | getAccountId(): ?int | setAccountId(?int accountId): void |
| `accountNumber` | `?string` | Optional | Account Number<br>Example: GB99215176 | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountShortName` | `?string` | Optional | Account Short Name<br>Example: AT Earth Movers-SN | getAccountShortName(): ?string | setAccountShortName(?string accountShortName): void |
| `colCoId` | `?int` | Optional | ColCo Id.<br>Example: 18 | getColCoId(): ?int | setColCoId(?int colCoId): void |
| `colCoOpCoId` | `?string` | Optional | ColCo’s OpCo Id.<br>Example: 018 | getColCoOpCoId(): ?string | setColCoOpCoId(?string colCoOpCoId): void |
| `currentBillingFrequency` | `?string` | Optional | Current billing frequency of the account.<br>A few of the possible IDs and Description are below:<br>1    Daily (all days)<br>2    Daily (only working days)<br>3    Weekly - Monday<br>4    Weekly - Tuesday<br>5    Weekly - Wednesday<br>6    Weekly - Thursday<br>7    Weekly - Friday<br>8    Weekly - Saturday<br>9    Weekly - Sunday<br>10    Monthly - 1st<br>Example: Weekly – Wednesday | getCurrentBillingFrequency(): ?string | setCurrentBillingFrequency(?string currentBillingFrequency): void |
| `currentBillingFrequencyId` | `?int` | Optional | Current billing frequency id of the account.<br>A few of the possible IDs and Description are below:<br>1    Daily (all days)<br>2    Daily (only working days)<br>3    Weekly - Monday<br>4    Weekly - Tuesday<br>5    Weekly - Wednesday<br>6    Weekly - Thursday<br>7    Weekly - Friday<br>8    Weekly - Saturday<br>9    Weekly - Sunday<br>10    Monthly - 1st<br>Example: 5 | getCurrentBillingFrequencyId(): ?int | setCurrentBillingFrequencyId(?int currentBillingFrequencyId): void |
| `currentDistributionMethod` | `?string` | Optional | Current distribution method name of the account.<br>Example : Id & Description<br>1    e-mail<br>2    Fax<br>3    Courier to Customer<br>4    Courier to Client<br>5    Print<br>6    FTP<br>7    SMS | getCurrentDistributionMethod(): ?string | setCurrentDistributionMethod(?string currentDistributionMethod): void |
| `currentDistributionMethodId` | `?int` | Optional | Current distribution method id of the account.<br>Example : Id & Description<br>1    e-mail<br>2    Fax<br>3    Courier to Customer<br>4    Courier to Client<br>5    Print<br>6    FTP<br>7    SMS | getCurrentDistributionMethodId(): ?int | setCurrentDistributionMethodId(?int currentDistributionMethodId): void |
| `customerCurrencyCode` | `?string` | Optional | Customer currency ISO code.<br>Example: EUR | getCustomerCurrencyCode(): ?string | setCustomerCurrencyCode(?string customerCurrencyCode): void |
| `customerCurrencySymbol` | `?string` | Optional | Customer currency code.<br>Example: € | getCustomerCurrencySymbol(): ?string | setCustomerCurrencySymbol(?string customerCurrencySymbol): void |
| `delCoClientNumber` | `?string` | Optional | DelCo’s client company number.<br>Example: 132 | getDelCoClientNumber(): ?string | setDelCoClientNumber(?string delCoClientNumber): void |
| `delCoId` | `?int` | Optional | DelCo Id.<br>Example: 132 | getDelCoId(): ?int | setDelCoId(?int delCoId): void |
| `delCoOpCoId` | `?string` | Optional | DelCo’s OpCo Id.<br>Example: 032 | getDelCoOpCoId(): ?string | setDelCoOpCoId(?string delCoOpCoId): void |
| `documentType` | `?string` | Optional | Document type Id description. | getDocumentType(): ?string | setDocumentType(?string documentType): void |
| `documentTypeId` | `?int` | Optional | Document type Id. | getDocumentTypeId(): ?int | setDocumentTypeId(?int documentTypeId): void |
| `dueDate` | `?string` | Optional | Due date. Format: yyyyMMdd.<br>Example: 20170115 | getDueDate(): ?string | setDueDate(?string dueDate): void |
| `grossAmountCustomerCurrency` | `?float` | Optional | Gross amount in customer currency in the document. | getGrossAmountCustomerCurrency(): ?float | setGrossAmountCustomerCurrency(?float grossAmountCustomerCurrency): void |
| `grossAmountTransactionCurrency` | `?float` | Optional | Gross amount in transaction currency in the document | getGrossAmountTransactionCurrency(): ?float | setGrossAmountTransactionCurrency(?float grossAmountTransactionCurrency): void |
| `invoiceDate` | `?string` | Optional | Invoicing date. Format: yyyyMMdd<br>Example: 20170101 | getInvoiceDate(): ?string | setInvoiceDate(?string invoiceDate): void |
| `invoicedBy` | `?string` | Optional | Company name. | getInvoicedBy(): ?string | setInvoicedBy(?string invoicedBy): void |
| `invoicedOnBehalfOf` | `?string` | Optional | Country Name.<br>Example: Czech Republic | getInvoicedOnBehalfOf(): ?string | setInvoicedOnBehalfOf(?string invoicedOnBehalfOf): void |
| `invoiceId` | `?int` | Optional | Invoice id.<br>Example: 1 | getInvoiceId(): ?int | setInvoiceId(?int invoiceId): void |
| `invoiceNumber` | `?string` | Optional | Invoice number.<br>Example: 0123456789 | getInvoiceNumber(): ?string | setInvoiceNumber(?string invoiceNumber): void |
| `isInternational` | `?bool` | Optional | True/False.<br>True if this is an International invoice, else false. | getIsInternational(): ?bool | setIsInternational(?bool isInternational): void |
| `isNational` | `?bool` | Optional | True/False.<br>True if this is a National invoice, else false. | getIsNational(): ?bool | setIsNational(?bool isNational): void |
| `netAmountCustomerCurrency` | `?float` | Optional | Net amount in customer currency in the document. | getNetAmountCustomerCurrency(): ?float | setNetAmountCustomerCurrency(?float netAmountCustomerCurrency): void |
| `netAmountTransactionCurrency` | `?float` | Optional | Net amount in transaction currency in the document. | getNetAmountTransactionCurrency(): ?float | setNetAmountTransactionCurrency(?float netAmountTransactionCurrency): void |
| `payerId` | `?int` | Optional | Payment customer id of the customer.<br>Example: 123456 | getPayerId(): ?int | setPayerId(?int payerId): void |
| `payerNumber` | `?string` | Optional | Payment customer number.<br>Example: GB000000123 | getPayerNumber(): ?string | setPayerNumber(?string payerNumber): void |
| `paymentTerms` | `?string` | Optional | A few of the possible IDs and Descriptions are below:<br>1    14 days after Invoice<br>2    15 days after Invoice<br>3    21 days after Invoice<br>4    30 days after Invoice<br>5    45 days after Invoice | getPaymentTerms(): ?string | setPaymentTerms(?string paymentTerms): void |
| `paymentTermsId` | `?int` | Optional | Payment terms id of the payment customer.<br>A few of the possible IDs and Descriptions are below:<br>1    14 days after Invoice<br>2    15 days after Invoice<br>3    21 days after Invoice<br>4    30 days after Invoice<br>5    45 days after Invoice | getPaymentTermsId(): ?int | setPaymentTermsId(?int paymentTermsId): void |
| `replacementInvoiceId` | `?int` | Optional | Replaced document id.<br>Example: 2 | getReplacementInvoiceId(): ?int | setReplacementInvoiceId(?int replacementInvoiceId): void |
| `reversalInvoiceId` | `?int` | Optional | Reversed document id.<br>Example: 3 | getReversalInvoiceId(): ?int | setReversalInvoiceId(?int reversalInvoiceId): void |
| `status` | `?string` | Optional | Status of the document. Valid values –<br>•    [Empty] – For all document types except for Invoice and Statement.<br>•    Due – Invoices/Statements due for payment and is within the due date.<br>•    Paid – Fully paid Invoices/Statements.<br>Overdue – Invoices/Statements due of payment and has crossed the due date. | getStatus(): ?string | setStatus(?string status): void |
| `summaryDocumentBillingType` | `?string` | Optional | Billing type description.<br>Example: Id & Description<br>-3    Guarantee History<br>-1    Initial Balance<br>0    Standard Invoice<br>1    Immediate Invoice<br>2    Guarantee<br>4    Advanced DD Invoice | getSummaryDocumentBillingType(): ?string | setSummaryDocumentBillingType(?string summaryDocumentBillingType): void |
| `summaryDocumentBillingTypeId` | `?int` | Optional | Billing type id.<br>Example: Id & Description<br>-3    Guarantee History<br>-1    Initial Balance<br>0    Standard Invoice<br>1    Immediate Invoice<br>2    Guarantee<br>4    Advanced DD Invoice | getSummaryDocumentBillingTypeId(): ?int | setSummaryDocumentBillingTypeId(?int summaryDocumentBillingTypeId): void |
| `summaryDocumentDate` | `?string` | Optional | Document generated date. Format: yyyyMMdd<br>Example: 20170101 | getSummaryDocumentDate(): ?string | setSummaryDocumentDate(?string summaryDocumentDate): void |
| `summaryDocumentDDAmount` | `?float` | Optional | DD amount. | getSummaryDocumentDDAmount(): ?float | setSummaryDocumentDDAmount(?float summaryDocumentDDAmount): void |
| `summaryDocumentDueDate` | `?string` | Optional | Due date for document. Format: yyyyMMdd<br>Example: 20170115 | getSummaryDocumentDueDate(): ?string | setSummaryDocumentDueDate(?string summaryDocumentDueDate): void |
| `summaryDocumentId` | `?int` | Optional | Summary document identifier<br>Example: 1 | getSummaryDocumentId(): ?int | setSummaryDocumentId(?int summaryDocumentId): void |
| `summaryDocumentIsFullyPaid` | `?bool` | Optional | True/False<br>True if invoice amount is fully paid, else false | getSummaryDocumentIsFullyPaid(): ?bool | setSummaryDocumentIsFullyPaid(?bool summaryDocumentIsFullyPaid): void |
| `summaryDocumentNumber` | `?string` | Optional | Summary document number<br>Example: ‘0/CZ0000000123456/2017’ | getSummaryDocumentNumber(): ?string | setSummaryDocumentNumber(?string summaryDocumentNumber): void |
| `summaryDocumentPaidAmount` | `?float` | Optional | Total amount paid. | getSummaryDocumentPaidAmount(): ?float | setSummaryDocumentPaidAmount(?float summaryDocumentPaidAmount): void |
| `summaryDocumentSoAReferenceNumber` | `?string` | Optional | Statement of Account reference number of the payment customer. | getSummaryDocumentSoAReferenceNumber(): ?string | setSummaryDocumentSoAReferenceNumber(?string summaryDocumentSoAReferenceNumber): void |
| `summaryDocumentStatementOfAccountId` | `?int` | Optional | Statement of Account Id of the payment customer. | getSummaryDocumentStatementOfAccountId(): ?int | setSummaryDocumentStatementOfAccountId(?int summaryDocumentStatementOfAccountId): void |
| `transactionCurrencyCode` | `?string` | Optional | Transaction currency ISO code.<br>Example: EUR | getTransactionCurrencyCode(): ?string | setTransactionCurrencyCode(?string transactionCurrencyCode): void |
| `transactionCurrencySymbol` | `?string` | Optional | Transaction currency symbol.<br>Example: € | getTransactionCurrencySymbol(): ?string | setTransactionCurrencySymbol(?string transactionCurrencySymbol): void |
| `type` | `?string` | Optional | Invoice type description.<br>A few of the possible IDs and Description are below:<br>1    Original<br>2    Reversal<br>3    Replacement<br>Example: Original | getType(): ?string | setType(?string type): void |
| `typeId` | `?int` | Optional | Invoice type id.<br>A few of the possible IDs and Descriptions are below:<br>1    Original<br>2    Reversal<br>3    Replacement<br>Example: 1 | getTypeId(): ?int | setTypeId(?int typeId): void |
| `vATAmountCustomerCurrency` | `?float` | Optional | VAT amount in customer currency in the document | getVATAmountCustomerCurrency(): ?float | setVATAmountCustomerCurrency(?float vATAmountCustomerCurrency): void |
| `vATAmountTransactionCurrency` | `?float` | Optional | VAT amount in transaction currency in the document | getVATAmountTransactionCurrency(): ?float | setVATAmountTransactionCurrency(?float vATAmountTransactionCurrency): void |
| `vATCountry` | `?string` | Optional | Country name of the VAT country.<br>Example: France, Germany | getVATCountry(): ?string | setVATCountry(?string vATCountry): void |
| `vATCountryId` | `?int` | Optional | Country Id of the VAT country.<br>Example: 1,2 | getVATCountryId(): ?int | setVATCountryId(?int vATCountryId): void |
| `vATCountryISOCode` | `?string` | Optional | Country ISO code of the VAT country.<br>Example : CZ, SK, UK, etc., | getVATCountryISOCode(): ?string | setVATCountryISOCode(?string vATCountryISOCode): void |
| `vATCountryOpCoId` | `?string` | Optional | VAT country’s OpCo Id.<br>Example: 032 | getVATCountryOpCoId(): ?string | setVATCountryOpCoId(?string vATCountryOpCoId): void |
| `documentReference` | `?string` | Optional | document reference number of the Invoice file | getDocumentReference(): ?string | setDocumentReference(?string documentReference): void |
| `additionalDocuments` | [`?(InvoiceSearchAdditionalDocument[])`](../../doc/models/invoice-search-additional-document.md) | Optional | - | getAdditionalDocuments(): ?array | setAdditionalDocuments(?array additionalDocuments): void |

## Example (as JSON)

```json
{
  "AccountFullName": "AccountFullName4",
  "AccountId": 252,
  "AccountNumber": "AccountNumber6",
  "AccountShortName": "AccountShortName8",
  "ColCoId": 144
}
```

