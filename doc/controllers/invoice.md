# Invoice

API's for Retrieve and download Invoice details

```php
$invoiceController = $client->getInvoiceController();
```

## Class Name

`InvoiceController`

## Methods

* [Invoice Search](../../doc/controllers/invoice.md#invoice-search)
* [Invoice Summary](../../doc/controllers/invoice.md#invoice-summary)
* [Statement of Account](../../doc/controllers/invoice.md#statement-of-account)
* [Dates](../../doc/controllers/invoice.md#dates)
* [Search Statement of Account](../../doc/controllers/invoice.md#search-statement-of-account)
* [Search Documents](../../doc/controllers/invoice.md#search-documents)
* [Eid Search](../../doc/controllers/invoice.md#eid-search)
* [Download](../../doc/controllers/invoice.md#download)
* [Eid Download](../../doc/controllers/invoice.md#eid-download)


# Invoice Search

This API allows to search invoice data in the Shell Card Platform. It provides flexible search criteria in the request body and supports paging.

This API will also query the relevant invoice documents list and return a reference number that can be used to download invoice documents (PDF and Proofing elements in a zip file).

#### Supported operations

* Search invoices by account
* Search invoices by invoice type or invoice status
* Search invoices by invoice id or number
* Search invoices by invoiced country
* Search invoices including einvoices
* Search invoices by summary document
* Search invoices by statement of account
* Search invoices by fixed and custom date periods

```php
function invoiceSearch(string $requestId, ?InvoiceSearchRequest $body = null): InvoiceSearchResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request.<br>**Constraints**: *Minimum Length*: `36`, *Maximum Length*: `36`, *Pattern*: `^[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?$` |
| `body` | [`?InvoiceSearchRequest`](../../doc/models/invoice-search-request.md) | Body, Optional | Invoice Search RequestBody |

## Response Type

[`InvoiceSearchResponse`](../../doc/models/invoice-search-response.md)

## Example Usage

```php
$requestId = '2b0cbe11-f109-4c43-9201-49af0370df1c';

$body = InvoiceSearchRequestBuilder::init()
    ->filters(
        InvoiceSearchRequestFiltersBuilder::init()
            ->colCoId(14)
            ->payerId(78)
            ->payerNumber('DE26688478')
            ->invoiceId(4013059)
            ->invoiceNumber('0123456789')
            ->fromDate('20170830')
            ->toDate('20171031')
            ->invoiceDate('20171031')
            ->summaryDocumentId(1616729)
            ->summaryDocumentNumber('1283899/289261063/2019')
            ->statementOfAccountId('DE26702892')
            ->soAReferenceNumber('1283899')
            ->period(1)
            ->invoiceStatus('Due')
            ->invoicedOnBehalfOf('DE')
            ->includeEInvoiceDetails(false)
            ->type('Original')
            ->build()
    )
    ->pageSize(50)
    ->page(1)
    ->build();

$result = $invoiceController->invoiceSearch(
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "RequestId": "18c955d1-b3ec-4dc0-95da-76e67afb891a",
  "Status": "SUCCESS",
  "Data": [
    {
      "AccountFullName": "powder ambition ERF  ",
      "AccountId": 179827,
      "AccountNumber": "DE26702892",
      "AccountShortName": "soft grocery Argyle  ",
      "ColCoId": 14,
      "ColCoOpCoId": "014",
      "CurrentBillingFrequency": "Last day of month",
      "CurrentBillingFrequencyId": 40,
      "CurrentDistributionMethod": "e-mail",
      "CurrentDistributionMethodId": 1,
      "CustomerCurrencyCode": "EUR",
      "CustomerCurrencySymbol": "€",
      "DelCoClientNumber": "014",
      "DelCoId": 14,
      "DelCoOpCoId": "014",
      "DocumentType": "Invoice",
      "DocumentTypeId": 1,
      "DueDate": "20190707",
      "GrossAmountCustomerCurrency": 22.85,
      "GrossAmountTransactionCurrency": 22.85,
      "InvoiceDate": "20190630",
      "InvoicedBy": "euroShell Deutschland GmbH & Co. KG",
      "InvoicedOnBehalfOf": "Germany",
      "InvoiceId": 4013059,
      "InvoiceNumber": "6402009004",
      "IsInternational": false,
      "IsNational": true,
      "NetAmountCustomerCurrency": 19.2,
      "NetAmountTransactionCurrency": 19.2,
      "PayerId": 164825,
      "PayerNumber": "DE26688478",
      "PaymentTerms": "7 days after invoice",
      "PaymentTermsId": 9,
      "ReplacementInvoiceId": null,
      "ReversalInvoiceId": null,
      "Status": "Paid",
      "SummaryDocumentBillingType": "Standard Invoice",
      "SummaryDocumentBillingTypeId": 0,
      "SummaryDocumentDate": "20190630",
      "SummaryDocumentDDAmount": 22.85,
      "SummaryDocumentDueDate": "20190707",
      "SummaryDocumentId": 1616729,
      "SummaryDocumentIsFullyPaid": true,
      "SummaryDocumentNumber": "1283899/289261063/2019",
      "SummaryDocumentPaidAmount": 22.85,
      "SummaryDocumentSoAReferenceNumber": "2000745709",
      "SummaryDocumentStatementOfAccountId": 2000745709,
      "TransactionCurrencyCode": "EUR",
      "TransactionCurrencySymbol": "€",
      "Type": "Original",
      "TypeId": 1,
      "VATAmountCustomerCurrency": 3.65,
      "VATAmountTransactionCurrency": 3.65,
      "VATCountry": "Germany",
      "VATCountryId": 9,
      "VATCountryISOCode": "DE",
      "VATCountryOpCoId": "014"
    }
  ],
  "Page": 1,
  "PageSize": 50,
  "TotalRecords": 1,
  "TotalPages": 1
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`InvoiceManagementV1Search400ErrorException`](../../doc/models/invoice-management-v1-search-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`InvoiceManagementV1Search401ErrorException`](../../doc/models/invoice-management-v1-search-401-error-exception.md) |
| 403 | Forbidden | [`InvoiceManagementV1Search403ErrorException`](../../doc/models/invoice-management-v1-search-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`InvoiceManagementV1Search404ErrorException`](../../doc/models/invoice-management-v1-search-404-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`InvoiceManagementV1Search500ErrorException`](../../doc/models/invoice-management-v1-search-500-error-exception.md) |


# Invoice Summary

This API returns the high level summary of invoices that match the  given search criteria. The same search criteria as the endpoint `/v1/invoice/search` is supported with the exception of paging related parameters.

#### Supported operations

* Search invoices by account
* Search invoices by invoice type or invoice status
* Search invoices by invoice id or number
* Search invoices by invoiced country
* Search invoices including einvoices
* Search invoices by summary document
* Search invoices by statement of account
* Search invoices by fixed and custom date periods

```php
function invoiceSummary(string $requestId, ?InvoiceSummaryRequest $body = null): InvoiceSummaryResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request.<br>**Constraints**: *Minimum Length*: `36`, *Maximum Length*: `36`, *Pattern*: `^[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?$` |
| `body` | [`?InvoiceSummaryRequest`](../../doc/models/invoice-summary-request.md) | Body, Optional | Invoice Search RequestBody |

## Response Type

[`InvoiceSummaryResponse`](../../doc/models/invoice-summary-response.md)

## Example Usage

```php
$requestId = '2b0cbe11-f109-4c43-9201-49af0370df1c';

$body = InvoiceSummaryRequestBuilder::init()
    ->filters(
        InvoiceSummaryRequestFiltersBuilder::init()
            ->colCoId(14)
            ->payerId(78)
            ->payerNumber('DE26688478')
            ->invoiceId(4013059)
            ->invoiceNumber('0123456789')
            ->fromDate('20170830')
            ->toDate('20171031')
            ->invoiceDate('20171031')
            ->summaryDocumentId(1616729)
            ->summaryDocumentNumber('1283899/289261063/2019')
            ->statementOfAccountId('DE26702892')
            ->soAReferenceNumber('1283899')
            ->period(1)
            ->invoiceStatus('Due')
            ->invoicedOnBehalfOf('DE')
            ->includeEInvoiceDetails(false)
            ->type('Original')
            ->build()
    )
    ->build();

$result = $invoiceController->invoiceSummary(
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "RequestId": "a0a1596f-b242-4672-b513-66c5e5554195",
  "Status": "SUCCESS",
  "Data": [
    {
      "TotalInvoices": 1,
      "TotalGrossAmountCustomerCurrency": 22.85,
      "TotalNetAmountCustomerCurrency": 19.2,
      "TotalVATAmountCustomerCurrency": 3.65,
      "CustomerCurrencyCode": "EUR",
      "CustomerCurrencySymbol": "€"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`InvoiceManagementV1Summary400ErrorException`](../../doc/models/invoice-management-v1-summary-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`InvoiceManagementV1Summary401ErrorException`](../../doc/models/invoice-management-v1-summary-401-error-exception.md) |
| 403 | Forbidden | [`InvoiceManagementV1Summary403ErrorException`](../../doc/models/invoice-management-v1-summary-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`InvoiceManagementV1Summary404ErrorException`](../../doc/models/invoice-management-v1-summary-404-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`InvoiceManagementV1Summary500ErrorException`](../../doc/models/invoice-management-v1-summary-500-error-exception.md) |


# Statement of Account

This API allows querying the details of the latest statement of account (SOA) generated for a given Payer.

The endpoint supports querying SOA documents by various input parameters specified in the request body.

#### Supported operations

* Search invoice SOA by payer and account
* Search invoice SOA including monthly trend (last 13 months invocie trend summary)
* Search invoice SOA including past SOAs
* Search invoice SOA including due/overdue documents
* Search invoice SOA including invoice summary

```php
function statementOfAccount(
    string $requestId,
    ?StatementOfAccountRequest $body = null
): StatementOfAccountResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request.<br>**Constraints**: *Minimum Length*: `36`, *Maximum Length*: `36`, *Pattern*: `^[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?$` |
| `body` | [`?StatementOfAccountRequest`](../../doc/models/statement-of-account-request.md) | Body, Optional | StatementOfAccount RequestBody |

## Response Type

[`StatementOfAccountResponse`](../../doc/models/statement-of-account-response.md)

## Example Usage

```php
$requestId = '2b0cbe11-f109-4c43-9201-49af0370df1c';

$body = StatementOfAccountRequestBuilder::init()
    ->filters(
        StatementOfAccountRequestFiltersBuilder::init()
            ->colCoCode(32)
            ->payerId(308)
            ->payerNumber('CZ56891709')
            ->includeMonthlyInvoiceTrend(true)
            ->includePastStatementOfAccounts(true)
            ->dueOrOverDueSOADocumentsOnly(false)
            ->numberOfSOADocuments(10)
            ->includeAccountInvoicesSummary(true)
            ->build()
    )
    ->build();

$result = $invoiceController->statementOfAccount(
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "RequestId": "5acba53b-3ce7-4f4b-ab59-1db09399aa6a",
  "Status": "SUCCESS",
  "Data": [
    {
      "LastStatementOfAccount": {
        "AmountDue": 123699.71,
        "AmountNotOverdue": 136604.83,
        "AmountOverdue": 926469.11,
        "CreditLimit": 7000000,
        "CreditLimitCurrencyCode": "CZK",
        "CreditLimitCurrencySymbol": "Kč",
        "CreditLimitInCustomerCurrency": 286826.469986,
        "CurrencyCode": "EUR",
        "CurrencySymbol": "€",
        "LastPaymentCurrencyCode": "EUR",
        "LastPaymentCurrencySymbol": "€",
        "LastPaymentDate": "20220209",
        "LastPaymentValue": 17918.98,
        "OutstandingBalance": 1186773.65,
        "PayerId": 308,
        "PayerNumber": "CZ56891709",
        "PaymentDueDate": "20230608",
        "PaymentMethod": "Incoming - Bank Transfer",
        "PaymentMethodId": 4,
        "PaymentTerms": "30 days after Invoice",
        "PaymentTermsId": 4,
        "SoAReferenceNumber": "2003923319",
        "StatementDate": "20230509",
        "StatementOfAccountId": 2003923319,
        "TotalBillingDocuments": 6,
        "TotalSummaryBillingDocuments": 1,
        "UnallocatedPayment": 0
      },
      "MonthlyInvoiceTrend": null,
      "PastStatementOfAccounts": [
        {
          "AmountDue": 136604.83,
          "AmountNotOverdue": 130344.09,
          "AmountOverdue": 796109.41,
          "AmountOverdueFromUnallocated": 0,
          "AmountPaid": 0,
          "BalanceOnThisStatement": 5866.1,
          "BillingCurrencyCode": "EUR",
          "BillingCurrencySymbol": "€",
          "CreditLimit": 7000000,
          "CreditLimitCurrencyCode": "CZK",
          "CreditLimitCurrencySymbol": "Kč",
          "CreditLimitInCustomerCurrency": 286826.4699857,
          "CurrencyCode": "EUR",
          "CurrencySymbol": "€",
          "FullyPaid": false,
          "LastPaymentCurrencyCode": "EUR",
          "LastPaymentCurrencySymbol": "€",
          "LastPaymentDate": "20220209",
          "LastPaymentValue": 17918.98,
          "OutstandingBalance": 1063058.33,
          "PayerId": 308,
          "PayerNumber": "CZ56891709",
          "PaymentDueDate": "20230511",
          "SoAReferenceNumber": "2003920583",
          "StatementDate": "20230411",
          "StatementOfAccountId": 2003920583,
          "TotalBillingDocuments": 3,
          "TotalNetAmountBillingCurrency": 4847.94,
          "TotalSummaryBillingDocuments": 1,
          "TotalVATAmountBillingCurrency": 1018.16,
          "UnallocatedPayment": 0,
          "LocalCurrencyCode": "EUR",
          "LocalCurrencySymbol": "€",
          "LocalCurrencyExchangeRate": 24.405
        }
      ],
      "PaymentsSinceLastSOA": null,
      "InvoicesSummaries": null
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`InvoiceManagementV1Statementofaccount400ErrorException`](../../doc/models/invoice-management-v1-statementofaccount-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`InvoiceManagementV1Statementofaccount401ErrorException`](../../doc/models/invoice-management-v1-statementofaccount-401-error-exception.md) |
| 403 | Forbidden | [`InvoiceManagementV1Statementofaccount403ErrorException`](../../doc/models/invoice-management-v1-statementofaccount-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`InvoiceManagementV1Statementofaccount404ErrorException`](../../doc/models/invoice-management-v1-statementofaccount-404-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`InvoiceManagementV1Statementofaccount500ErrorException`](../../doc/models/invoice-management-v1-statementofaccount-500-error-exception.md) |


# Dates

- This API will return the list of Invoice Dates and Numbers for the given date range. If the dates are not provided then it will fetch the data for past 13 months.

```php
function dates(string $requestId, ?InvoiceDatesRequest $body = null): InvoiceDatesResponseData
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request.<br>**Constraints**: *Minimum Length*: `36`, *Maximum Length*: `36`, *Pattern*: `^[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?$` |
| `body` | [`?InvoiceDatesRequest`](../../doc/models/invoice-dates-request.md) | Body, Optional | StatementOfAccount RequestBody |

## Response Type

[`InvoiceDatesResponseData`](../../doc/models/invoice-dates-response-data.md)

## Example Usage

```php
$requestId = '2b0cbe11-f109-4c43-9201-49af0370df1c';

$body = InvoiceDatesRequestBuilder::init()
    ->filters(
        InvoiceDatesRequestFiltersBuilder::init()
            ->colCoCode(0)
            ->colCoId(0)
            ->payerId(0)
            ->payerNumber('string')
            ->accounts(
                [
                    AccountsBuilder::init()
                        ->accountId(3453)
                        ->accountNumber('GB000000124')
                        ->build()
                ]
            )
            ->build()
    )
    ->build();

$result = $invoiceController->dates(
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "RequestId": "a0a1596f-b242-4672-b513-66c5e5554195",
  "Status": "SUCCESS",
  "Data": [
    {
      "InvoiceNumbers": [
        "6402009004"
      ],
      "InvoiceDates": [
        "20170101"
      ]
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`InvoiceManagementV1Dates400ErrorException`](../../doc/models/invoice-management-v1-dates-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`InvoiceManagementV1Dates401ErrorException`](../../doc/models/invoice-management-v1-dates-401-error-exception.md) |
| 403 | Forbidden | [`InvoiceManagementV1Dates403ErrorException`](../../doc/models/invoice-management-v1-dates-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`InvoiceManagementV1Dates404ErrorException`](../../doc/models/invoice-management-v1-dates-404-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`InvoiceManagementV1Dates500ErrorException`](../../doc/models/invoice-management-v1-dates-500-error-exception.md) |


# Search Statement of Account

- This API will allow querying of SOA from different systems

```php
function searchStatementOfAccount(
    string $requestId,
    ?SearchStatementOfAccountRequest $body = null
): SearchStatementOfAccountResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request.<br>**Constraints**: *Minimum Length*: `36`, *Maximum Length*: `36`, *Pattern*: `^[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?$` |
| `body` | [`?SearchStatementOfAccountRequest`](../../doc/models/search-statement-of-account-request.md) | Body, Optional | searchstatementofaccount RequestBody |

## Response Type

[`SearchStatementOfAccountResponse`](../../doc/models/search-statement-of-account-response.md)

## Example Usage

```php
$requestId = '2b0cbe11-f109-4c43-9201-49af0370df1c';

$body = SearchStatementOfAccountRequestBuilder::init()
    ->filters(
        SearchSOAReqBuilder::init()
            ->colCoCode(18)
            ->payerNumber('NL99781417')
            ->invoiceNumber('0123456789')
            ->fromDate('2022/05/04')
            ->toDate('2022/05/10')
            ->period(1)
            ->invoiceDate('20170830')
            ->invoiceStatus(
                [
                    'Due'
                ]
            )
            ->sortBy(
                [
                    1
                ]
            )
            ->build()
    )
    ->page(1)
    ->pageSize(10)
    ->build();

$result = $invoiceController->searchStatementOfAccount(
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "RequestId": "a0a1596f-b242-4672-b513-66c5e5554195",
  "Status": "SUCCESS",
  "Data": [
    {
      "StatementOfAccountId": 2001581712,
      "SoAReferenceNumber": "2001581712",
      "DocumentReferenceNumber": null,
      "StatementDate": "20220505",
      "PayerId": 17150,
      "PayerNumber": "NL99781417",
      "AmountDue": 0,
      "AmountOverdue": 197046.47,
      "CurrencyCode": "EUR",
      "CurrencySymbol": "€",
      "DueDate": "20220604",
      "InvoicedOnBehalfOf": "Netherlands",
      "Status": "OverDue",
      "GrossAmountCustomerCurrency": 0
    }
  ],
  "Page": 1,
  "TotalRecords": 62,
  "TotalPages": 7,
  "PageSize": 10
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`InvoiceManagementV1Searchstatementofaccount400ErrorException`](../../doc/models/invoice-management-v1-searchstatementofaccount-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`InvoiceManagementV1Searchstatementofaccount401ErrorException`](../../doc/models/invoice-management-v1-searchstatementofaccount-401-error-exception.md) |
| 403 | Forbidden | [`InvoiceManagementV1Searchstatementofaccount403ErrorException`](../../doc/models/invoice-management-v1-searchstatementofaccount-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`InvoiceManagementV1Searchstatementofaccount404ErrorException`](../../doc/models/invoice-management-v1-searchstatementofaccount-404-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`InvoiceManagementV1Searchstatementofaccount500ErrorException`](../../doc/models/invoice-management-v1-searchstatementofaccount-500-error-exception.md) |


# Search Documents

- This API allows querying the details of all invoices successfully uploaded to the Worldline invoice repository and file reference numbers for downloading.

```php
function searchDocuments(string $requestId, ?SearchDocumentsRequest $body = null): SearchDocumentsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request.<br>**Constraints**: *Minimum Length*: `36`, *Maximum Length*: `36`, *Pattern*: `^[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?$` |
| `body` | [`?SearchDocumentsRequest`](../../doc/models/search-documents-request.md) | Body, Optional | SearchDocuments RequestBody |

## Response Type

[`SearchDocumentsResponse`](../../doc/models/search-documents-response.md)

## Example Usage

```php
$requestId = '2b0cbe11-f109-4c43-9201-49af0370df1c';

$body = SearchDocumentsRequestBuilder::init()
    ->filters(
        SearchDocReqBuilder::init()
            ->payerNumber('DE00000096')
            ->accountNumber('DE00000096')
            ->accountNumberList(
                [
                    'DE00000123',
                    'DE00000225'
                ]
            )
            ->invoiceNumber('1234567')
            ->invoiceNumberList(
                [
                    '6400013693',
                    '9421000010'
                ]
            )
            ->invoiceStatus('NEW')
            ->issuingDateFrom('2023/05/01')
            ->issuingDateTo('2023/06/30')
            ->dueDateFrom('2023/05/04')
            ->dueDateTo('2023/06/30')
            ->grossAmount('1000')
            ->grossAmountOperator('LT')
            ->documentType('SOA')
            ->vATIssuerCountry('DE')
            ->sortyBy(
                [
                    'InvoiceNumber ASC',
                    'InvoiceDate DESC'
                ]
            )
            ->colCoCode(14)
            ->build()
    )
    ->page('1')
    ->pageSize('50')
    ->build();

$result = $invoiceController->searchDocuments(
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "RequestId": "a8b81c1d-f44a-4365-8113-8958061c0b7e",
  "Status": "SUCCESS",
  "Data": [
    {
      "DocumentReference": 311161,
      "InvoiceNumber": "6400013693",
      "PayerName": "DE00000096",
      "AccountNumber": "DE00000096",
      "AccountName": "DE00000096",
      "DocumentType": "NAT",
      "GrossAmount": -3141.93,
      "NetAmount": 0,
      "TaxAmount": 0,
      "CurrencyCode": "EUR",
      "InvoiceStatus": "NEW",
      "InvoiceDate": "2023/01/31",
      "DueDate": "2023/02/07",
      "VATCountryISOCode": "DE"
    }
  ],
  "TotalRecords": 2,
  "TotalRecordsOnPage": 2,
  "IsFirstPage": true,
  "IsLastPage": true
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`InvoiceManagementV1Searchdocuments400ErrorException`](../../doc/models/invoice-management-v1-searchdocuments-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`InvoiceManagementV1Searchdocuments401ErrorException`](../../doc/models/invoice-management-v1-searchdocuments-401-error-exception.md) |
| 403 | Forbidden | [`InvoiceManagementV1Searchdocuments403ErrorException`](../../doc/models/invoice-management-v1-searchdocuments-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`InvoiceManagementV1Searchdocuments404ErrorException`](../../doc/models/invoice-management-v1-searchdocuments-404-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`InvoiceManagementV1Searchdocuments500ErrorException`](../../doc/models/invoice-management-v1-searchdocuments-500-error-exception.md) |


# Eid Search

- This API provides the functionality needed for the screen “EID FILES” in the web interface. It allows retrieving a list of EIDs based on search criteria.

```php
function eidSearch(string $requestId, ?EIDSearchRequest $body = null): EIDDocumentResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request.<br>**Constraints**: *Minimum Length*: `36`, *Maximum Length*: `36`, *Pattern*: `^[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?$` |
| `body` | [`?EIDSearchRequest`](../../doc/models/eid-search-request.md) | Body, Optional | EIDSearch RequestBody |

## Response Type

[`EIDDocumentResponse`](../../doc/models/eid-document-response.md)

## Example Usage

```php
$requestId = '2b0cbe11-f109-4c43-9201-49af0370df1c';

$body = EIDSearchRequestBuilder::init()
    ->filters(
        EIDSearchReqBuilder::init(
            [
                '122'
            ]
        )
            ->colCoCode(32)
            ->accountGroupCountry(32)
            ->fromDate('2017/08/30')
            ->toDate('2017/10/31')
            ->invoiceType('NAT')
            ->invoiceStatus('NEW')
            ->sortBy(
                [
                    'DocumentDate ASC'
                ]
            )
            ->build()
    )
    ->page(1)
    ->pageSize(10)
    ->build();

$result = $invoiceController->eidSearch(
    $requestId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "RequestId": "a0a1596f-b242-4672-b513-66c5e5554195",
  "Status": "SUCCESS",
  "Data": [
    {
      "DocumentId": 15029,
      "AccountGroupId": "122",
      "AccountGroupName": "EID-122",
      "DocumentType": "INT",
      "DocumentFormat": "FLAT",
      "DocumentDate": "2022/12/28",
      "NumberOfInvoices": 1,
      "FileSize": 1624,
      "DocumentStatus": "DOWNLOADED",
      "DocumentName": "032_122_INT_28122022.TXT"
    }
  ],
  "PageSize": 1,
  "Page": 1,
  "TotalPages": 12,
  "TotalRecords": 120,
  "IsFirstPage": true,
  "IsLastPage": false
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`InvoiceManagementV1Eidsearch400ErrorException`](../../doc/models/invoice-management-v1-eidsearch-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`InvoiceManagementV1Eidsearch401ErrorException`](../../doc/models/invoice-management-v1-eidsearch-401-error-exception.md) |
| 403 | Forbidden | [`InvoiceManagementV1Eidsearch403ErrorException`](../../doc/models/invoice-management-v1-eidsearch-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`InvoiceManagementV1Eidsearch404ErrorException`](../../doc/models/invoice-management-v1-eidsearch-404-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`InvoiceManagementV1Eidsearch500ErrorException`](../../doc/models/invoice-management-v1-eidsearch-500-error-exception.md) |


# Download

- This API downloads Invoice Documents i.e., ZIP file with Invoice PDF file and Proofing Elements in XML format from invoice repository.

```php
function download(string $requestId, ?InvoiceDownloadRequest $body = null): string
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request.<br>**Constraints**: *Minimum Length*: `36`, *Maximum Length*: `36`, *Pattern*: `^[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?$` |
| `body` | [`?InvoiceDownloadRequest`](../../doc/models/invoice-download-request.md) | Body, Optional | Invoice Download RequestBody |

## Response Type

`string`

## Example Usage

```php
$requestId = '2b0cbe11-f109-4c43-9201-49af0370df1c';

$body = InvoiceDownloadRequestBuilder::init()
    ->filters(
        InvoiceDownloadReqBuilder::init()
            ->colCoCode(18)
            ->payerNumber('NL99781417')
            ->accountNumber(
                [
                    'NL99781420'
                ]
            )
            ->documentReference(
                [
                    1234567890
                ]
            )
            ->invoiceOrSOANumber('2234556')
            ->build()
    )
    ->build();

$result = $invoiceController->download(
    $requestId,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`InvoiceManagementV1Download400ErrorException`](../../doc/models/invoice-management-v1-download-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`InvoiceManagementV1Download401ErrorException`](../../doc/models/invoice-management-v1-download-401-error-exception.md) |
| 403 | Forbidden | [`InvoiceManagementV1Download403ErrorException`](../../doc/models/invoice-management-v1-download-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`InvoiceManagementV1Download404ErrorException`](../../doc/models/invoice-management-v1-download-404-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`InvoiceManagementV1Download500ErrorException`](../../doc/models/invoice-management-v1-download-500-error-exception.md) |


# Eid Download

- This service allows downloading one or more EID documents and the corresponding signature material (where applicable) in one single request
- The number of EID that can be downloaded at once is limited to 100 documents.

```php
function eidDownload(string $requestId, ?EIDDownloadRequest $body = null): string
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request.<br>**Constraints**: *Minimum Length*: `36`, *Maximum Length*: `36`, *Pattern*: `^[{]?[0-9a-fA-F]{8}-([0-9a-fA-F]{4}-){3}[0-9a-fA-F]{12}[}]?$` |
| `body` | [`?EIDDownloadRequest`](../../doc/models/eid-download-request.md) | Body, Optional | EIDInvoice Download RequestBody |

## Response Type

`string`

## Example Usage

```php
$requestId = '2b0cbe11-f109-4c43-9201-49af0370df1c';

$body = EIDDownloadRequestBuilder::init()
    ->filters(
        EIDDownloadReqBuilder::init(
            [
                '1710187',
                '1734566'
            ],
            [
                '26685402'
            ]
        )
            ->colCoCode(18)
            ->accountGroupCountry(18)
            ->build()
    )
    ->build();

$result = $invoiceController->eidDownload(
    $requestId,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`InvoiceManagementV1Eiddownload400ErrorException`](../../doc/models/invoice-management-v1-eiddownload-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`InvoiceManagementV1Eiddownload401ErrorException`](../../doc/models/invoice-management-v1-eiddownload-401-error-exception.md) |
| 403 | Forbidden | [`InvoiceManagementV1Eiddownload403ErrorException`](../../doc/models/invoice-management-v1-eiddownload-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`InvoiceManagementV1Eiddownload404ErrorException`](../../doc/models/invoice-management-v1-eiddownload-404-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`InvoiceManagementV1Eiddownload500ErrorException`](../../doc/models/invoice-management-v1-eiddownload-500-error-exception.md) |

