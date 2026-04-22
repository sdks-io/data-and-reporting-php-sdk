# Customer

APIs for Retrieve and Update customer specific details

```php
$customerController = $client->getCustomerController();
```

## Class Name

`CustomerController`

## Methods

* [User-Loggedinuser](../../doc/controllers/customer.md#user-loggedinuser)
* [Customerpayers](../../doc/controllers/customer.md#customerpayers)
* [Customerdetail](../../doc/controllers/customer.md#customerdetail)
* [Post-Card-Accounts](../../doc/controllers/customer.md#post-card-accounts)
* [Customercardtypev](../../doc/controllers/customer.md#customercardtypev)
* [Cardgroups](../../doc/controllers/customer.md#cardgroups)
* [Audit Report](../../doc/controllers/customer.md#audit-report)
* [Customer Price List](../../doc/controllers/customer.md#customer-price-list)


# User-Loggedinuser

This operation allows querying the user data of the logged in user.
This operation should be called only after successful authentication of the end user in client application. This operation will return the user access details such as payers and/or accounts.
This operation will also validate that logged in user has access to the requested operation, on failure it will return HasAPIAccess flag as false in the response.

```php
function userLoggedinuser(string $requestId, LoggedInUserReq $body): LoggedInUserRes
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`LoggedInUserReq`](../../doc/models/logged-in-user-req.md) | Body, Required | - |

## Response Type

[`LoggedInUserRes`](../../doc/models/logged-in-user-res.md)

## Example Usage

```php
$requestId = 'RequestId8';

$body = LoggedInUserReqBuilder::init()->build();

$customerController = $client->getCustomerController();

try {
    $result = $customerController->userLoggedinuser(
        $requestId,
        $body
    );
    echo 'LoggedInUserRes:';
    var_dump($result);
} catch (UserManagementV1Loggedinuser400ErrorException $exp) {
    echo 'Caught UserManagementV1Loggedinuser400ErrorException:', $exp;
} catch (UserManagementV1Loggedinuser401ErrorException $exp) {
    echo 'Caught UserManagementV1Loggedinuser401ErrorException:', $exp;
} catch (UserManagementV1Loggedinuser403ErrorException $exp) {
    echo 'Caught UserManagementV1Loggedinuser403ErrorException:', $exp;
} catch (UserManagementV1Loggedinuser404ErrorException $exp) {
    echo 'Caught UserManagementV1Loggedinuser404ErrorException:', $exp;
} catch (UserManagementV1Loggedinuser500ErrorException $exp) {
    echo 'Caught UserManagementV1Loggedinuser500ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`UserManagementV1Loggedinuser400ErrorException`](../../doc/models/user-management-v1-loggedinuser-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`UserManagementV1Loggedinuser401ErrorException`](../../doc/models/user-management-v1-loggedinuser-401-error-exception.md) |
| 403 | Forbidden | [`UserManagementV1Loggedinuser403ErrorException`](../../doc/models/user-management-v1-loggedinuser-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`UserManagementV1Loggedinuser404ErrorException`](../../doc/models/user-management-v1-loggedinuser-404-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`UserManagementV1Loggedinuser500ErrorException`](../../doc/models/user-management-v1-loggedinuser-500-error-exception.md) |


# Customerpayers

This API allows querying the payer accounts details from the Shell Cards
Platform. It provides flexible search criteria for searching payer
information and supports paging.

Paging is applicable only when all the
payers passed in the input are from the same ColCo.

However, paging will
be ignored and the API will return all the matching data by merging the
data queried from each ColCo when payers passed in the input are from
multiple ColCos.

```php
function customerpayers(string $requestId, PayerReq $body): PayerRes
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`PayerReq`](../../doc/models/payer-req.md) | Body, Required | - |

## Response Type

[`PayerRes`](../../doc/models/payer-res.md)

## Example Usage

```php
$requestId = 'RequestId8';

$body = PayerReqBuilder::init()
    ->page(1)
    ->pageSize(100)
    ->build();

$customerController = $client->getCustomerController();

try {
    $result = $customerController->customerpayers(
        $requestId,
        $body
    );
    echo 'PayerRes:';
    var_dump($result);
} catch (CustomerManagementV1Payers400ErrorException $exp) {
    echo 'Caught CustomerManagementV1Payers400ErrorException:', $exp;
} catch (CustomerManagementV1Payers401ErrorException $exp) {
    echo 'Caught CustomerManagementV1Payers401ErrorException:', $exp;
} catch (CustomerManagementV1Payers403ErrorException $exp) {
    echo 'Caught CustomerManagementV1Payers403ErrorException:', $exp;
} catch (CustomerManagementV1Payers404ErrorException $exp) {
    echo 'Caught CustomerManagementV1Payers404ErrorException:', $exp;
} catch (CustomerManagementV1Payers500ErrorException $exp) {
    echo 'Caught CustomerManagementV1Payers500ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`CustomerManagementV1Payers400ErrorException`](../../doc/models/customer-management-v1-payers-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`CustomerManagementV1Payers401ErrorException`](../../doc/models/customer-management-v1-payers-401-error-exception.md) |
| 403 | Forbidden | [`CustomerManagementV1Payers403ErrorException`](../../doc/models/customer-management-v1-payers-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`CustomerManagementV1Payers404ErrorException`](../../doc/models/customer-management-v1-payers-404-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`CustomerManagementV1Payers500ErrorException`](../../doc/models/customer-management-v1-payers-500-error-exception.md) |


# Customerdetail

This API allows querying the card delivery addresses of a given account from the Shell Cards Platform. Only active delivery addresses will be returned.

```php
function customerdetail(string $requestId, CustomerReq $body): CustomerRes
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`CustomerReq`](../../doc/models/customer-req.md) | Body, Required | - |

## Response Type

[`CustomerRes`](../../doc/models/customer-res.md)

## Example Usage

```php
$requestId = 'RequestId8';

$body = CustomerReqBuilder::init()->build();

$customerController = $client->getCustomerController();

try {
    $result = $customerController->customerdetail(
        $requestId,
        $body
    );
    echo 'CustomerRes:';
    var_dump($result);
} catch (CustomerManagementV1Customer400ErrorException $exp) {
    echo 'Caught CustomerManagementV1Customer400ErrorException:', $exp;
} catch (CustomerManagementV1Customer401ErrorException $exp) {
    echo 'Caught CustomerManagementV1Customer401ErrorException:', $exp;
} catch (CustomerManagementV1Customer403ErrorException $exp) {
    echo 'Caught CustomerManagementV1Customer403ErrorException:', $exp;
} catch (CustomerManagementV1Customer404ErrorException $exp) {
    echo 'Caught CustomerManagementV1Customer404ErrorException:', $exp;
} catch (CustomerManagementV1Customer500ErrorException $exp) {
    echo 'Caught CustomerManagementV1Customer500ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`CustomerManagementV1Customer400ErrorException`](../../doc/models/customer-management-v1-customer-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`CustomerManagementV1Customer401ErrorException`](../../doc/models/customer-management-v1-customer-401-error-exception.md) |
| 403 | Forbidden | [`CustomerManagementV1Customer403ErrorException`](../../doc/models/customer-management-v1-customer-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`CustomerManagementV1Customer404ErrorException`](../../doc/models/customer-management-v1-customer-404-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`CustomerManagementV1Customer500ErrorException`](../../doc/models/customer-management-v1-customer-500-error-exception.md) |


# Post-Card-Accounts

This API allows querying the customer account details from the Shell Cards Platform. It provides a flexible search criterion and supports pagination.

```php
function postCardAccounts(string $requestId, AccountReq $body): AccountRes
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`AccountReq`](../../doc/models/account-req.md) | Body, Required | - |

## Response Type

[`AccountRes`](../../doc/models/account-res.md)

## Example Usage

```php
$requestId = 'RequestId8';

$body = AccountReqBuilder::init()
    ->page(1)
    ->pageSize(100)
    ->build();

$customerController = $client->getCustomerController();

try {
    $result = $customerController->postCardAccounts(
        $requestId,
        $body
    );
    echo 'AccountRes:';
    var_dump($result);
} catch (CustomerManagementV1Accounts400ErrorException $exp) {
    echo 'Caught CustomerManagementV1Accounts400ErrorException:', $exp;
} catch (CustomerManagementV1Accounts401ErrorException $exp) {
    echo 'Caught CustomerManagementV1Accounts401ErrorException:', $exp;
} catch (CustomerManagementV1Accounts403ErrorException $exp) {
    echo 'Caught CustomerManagementV1Accounts403ErrorException:', $exp;
} catch (CustomerManagementV1Accounts404ErrorException $exp) {
    echo 'Caught CustomerManagementV1Accounts404ErrorException:', $exp;
} catch (CustomerManagementV1Accounts500ErrorException $exp) {
    echo 'Caught CustomerManagementV1Accounts500ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`CustomerManagementV1Accounts400ErrorException`](../../doc/models/customer-management-v1-accounts-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`CustomerManagementV1Accounts401ErrorException`](../../doc/models/customer-management-v1-accounts-401-error-exception.md) |
| 403 | Forbidden | [`CustomerManagementV1Accounts403ErrorException`](../../doc/models/customer-management-v1-accounts-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`CustomerManagementV1Accounts404ErrorException`](../../doc/models/customer-management-v1-accounts-404-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`CustomerManagementV1Accounts500ErrorException`](../../doc/models/customer-management-v1-accounts-500-error-exception.md) |


# Customercardtypev

This API provides allows querying the active card types that are associated to the given account.

The API returns the card type configurations, purchase categories associated with the card type and the card type restriction limits.

```php
function customercardtypev(string $requestId, CardTypeReq $body): CardTypeRes
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`CardTypeReq`](../../doc/models/card-type-req.md) | Body, Required | - |

## Response Type

[`CardTypeRes`](../../doc/models/card-type-res.md)

## Example Usage

```php
$requestId = 'RequestId8';

$body = CardTypeReqBuilder::init()->build();

$customerController = $client->getCustomerController();

try {
    $result = $customerController->customercardtypev(
        $requestId,
        $body
    );
    echo 'CardTypeRes:';
    var_dump($result);
} catch (CustomerManagementV2Cardtype400ErrorException $exp) {
    echo 'Caught CustomerManagementV2Cardtype400ErrorException:', $exp;
} catch (CustomerManagementV2Cardtype401ErrorException $exp) {
    echo 'Caught CustomerManagementV2Cardtype401ErrorException:', $exp;
} catch (CustomerManagementV2Cardtype403ErrorException $exp) {
    echo 'Caught CustomerManagementV2Cardtype403ErrorException:', $exp;
} catch (CustomerManagementV2Cardtype404ErrorException $exp) {
    echo 'Caught CustomerManagementV2Cardtype404ErrorException:', $exp;
} catch (CustomerManagementV2Cardtype500ErrorException $exp) {
    echo 'Caught CustomerManagementV2Cardtype500ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`CustomerManagementV2Cardtype400ErrorException`](../../doc/models/customer-management-v2-cardtype-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`CustomerManagementV2Cardtype401ErrorException`](../../doc/models/customer-management-v2-cardtype-401-error-exception.md) |
| 403 | Forbidden | [`CustomerManagementV2Cardtype403ErrorException`](../../doc/models/customer-management-v2-cardtype-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`CustomerManagementV2Cardtype404ErrorException`](../../doc/models/customer-management-v2-cardtype-404-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`CustomerManagementV2Cardtype500ErrorException`](../../doc/models/customer-management-v2-cardtype-500-error-exception.md) |


# Cardgroups

This API allows querying the card group details from the Shell Cards
Platform. It provides flexible search criteria and supports paging.

When the account is not passed in the input and card group type is configured as
â€˜Verticalâ€™ in the cards platform, this API will return all card groups from
the payer as well as from all the accounts under the payer.

When the account is not passed in the input and card group type is configured as
â€˜Horizontalâ€™ in cards platform, this API will return all card groups
configured directly under the payer.

```php
function cardgroups(string $requestId, CardGroupReq $body): CardGroupRes
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`CardGroupReq`](../../doc/models/card-group-req.md) | Body, Required | - |

## Response Type

[`CardGroupRes`](../../doc/models/card-group-res.md)

## Example Usage

```php
$requestId = 'RequestId8';

$body = CardGroupReqBuilder::init()
    ->page(1)
    ->pageSize(100)
    ->build();

$customerController = $client->getCustomerController();

try {
    $result = $customerController->cardgroups(
        $requestId,
        $body
    );
    echo 'CardGroupRes:';
    var_dump($result);
} catch (CustomerManagementV1Cardgroups400ErrorException $exp) {
    echo 'Caught CustomerManagementV1Cardgroups400ErrorException:', $exp;
} catch (CustomerManagementV1Cardgroups401ErrorException $exp) {
    echo 'Caught CustomerManagementV1Cardgroups401ErrorException:', $exp;
} catch (CustomerManagementV1Cardgroups403ErrorException $exp) {
    echo 'Caught CustomerManagementV1Cardgroups403ErrorException:', $exp;
} catch (CustomerManagementV1Cardgroups404ErrorException $exp) {
    echo 'Caught CustomerManagementV1Cardgroups404ErrorException:', $exp;
} catch (CustomerManagementV1Cardgroups500ErrorException $exp) {
    echo 'Caught CustomerManagementV1Cardgroups500ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`CustomerManagementV1Cardgroups400ErrorException`](../../doc/models/customer-management-v1-cardgroups-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`CustomerManagementV1Cardgroups401ErrorException`](../../doc/models/customer-management-v1-cardgroups-401-error-exception.md) |
| 403 | Forbidden | [`CustomerManagementV1Cardgroups403ErrorException`](../../doc/models/customer-management-v1-cardgroups-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`CustomerManagementV1Cardgroups404ErrorException`](../../doc/models/customer-management-v1-cardgroups-404-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`CustomerManagementV1Cardgroups500ErrorException`](../../doc/models/customer-management-v1-cardgroups-500-error-exception.md) |


# Audit Report

This operation allows users to fetch audit data of account or card operations performed by users of a given customer
The audit data includes details of below API operations

* Order Card
* Create Card Group
* PIN reminder
* Move Cards
* Update Card Status
* Update Card Group
* Auto renew
* Bulk card order
* Bulk card block
* Bulk Card Order (Multi Account)
* BCOSummary
* BCOMultiAccountSummary
* BCBSummary
* Mobile Payment Registration
* Fund Transfer (Scheduled & Realtime)
* Delivery Address Update.

```php
function auditReport(string $requestId, ?AuditReq $body = null): AuditResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?AuditReq`](../../doc/models/audit-req.md) | Body, Optional | request body |

## Response Type

[`AuditResponse`](../../doc/models/audit-response.md)

## Example Usage

```php
$requestId = 'RequestId8';

$body = AuditReqBuilder::init()
    ->page(1)
    ->pageSize(100)
    ->build();

$customerController = $client->getCustomerController();

try {
    $result = $customerController->auditReport(
        $requestId,
        $body
    );
    echo 'AuditResponse:';
    var_dump($result);
} catch (CustomerManagementV1Auditreport400ErrorException $exp) {
    echo 'Caught CustomerManagementV1Auditreport400ErrorException:', $exp;
} catch (CustomerManagementV1Auditreport401ErrorException $exp) {
    echo 'Caught CustomerManagementV1Auditreport401ErrorException:', $exp;
} catch (CustomerManagementV1Auditreport403ErrorException $exp) {
    echo 'Caught CustomerManagementV1Auditreport403ErrorException:', $exp;
} catch (CustomerManagementV1Auditreport404ErrorException $exp) {
    echo 'Caught CustomerManagementV1Auditreport404ErrorException:', $exp;
} catch (CustomerManagementV1Auditreport500ErrorException $exp) {
    echo 'Caught CustomerManagementV1Auditreport500ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`CustomerManagementV1Auditreport400ErrorException`](../../doc/models/customer-management-v1-auditreport-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`CustomerManagementV1Auditreport401ErrorException`](../../doc/models/customer-management-v1-auditreport-401-error-exception.md) |
| 403 | Forbidden | [`CustomerManagementV1Auditreport403ErrorException`](../../doc/models/customer-management-v1-auditreport-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`CustomerManagementV1Auditreport404ErrorException`](../../doc/models/customer-management-v1-auditreport-404-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`CustomerManagementV1Auditreport500ErrorException`](../../doc/models/customer-management-v1-auditreport-500-error-exception.md) |


# Customer Price List

- This operation fetches the International and National Price List and discount values set on pump prices & List Prices
- It allows searching price list and discount values set on pump prices that are applicable for a given customer

**Note**: Accounts with cancelled status will not be considered for this operation for the configured

- When the search is based on customer specific price list then the customer price list is returned based on the associated pricing customer.
- The discount values set on pump prices, which are returned by the operation are always customer specific values based on the customer associated price rules.

```php
function customerPriceList(string $requestId, ?CustomerPriceListReq $body = null): CustomerPriceListRes
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `requestId` | `string` | Header, Required | Mandatory UUID (according to RFC 4122 standards) for requests and responses. This will be played back in the response from the request. |
| `body` | [`?CustomerPriceListReq`](../../doc/models/customer-price-list-req.md) | Body, Optional | Customerdetails request body |

## Response Type

[`CustomerPriceListRes`](../../doc/models/customer-price-list-res.md)

## Example Usage

```php
$requestId = 'RequestId8';

$customerController = $client->getCustomerController();

try {
    $result = $customerController->customerPriceList($requestId);
    echo 'CustomerPriceListRes:';
    var_dump($result);
} catch (CustomerManagementV1Pricelist400ErrorException $exp) {
    echo 'Caught CustomerManagementV1Pricelist400ErrorException:', $exp;
} catch (CustomerManagementV1Pricelist401ErrorException $exp) {
    echo 'Caught CustomerManagementV1Pricelist401ErrorException:', $exp;
} catch (CustomerManagementV1Pricelist403ErrorException $exp) {
    echo 'Caught CustomerManagementV1Pricelist403ErrorException:', $exp;
} catch (CustomerManagementV1Pricelist404ErrorException $exp) {
    echo 'Caught CustomerManagementV1Pricelist404ErrorException:', $exp;
} catch (CustomerManagementV1Pricelist500ErrorException $exp) {
    echo 'Caught CustomerManagementV1Pricelist500ErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | The server cannot or will not process the request due to something that is perceived to be a client error (e.g., malformed request syntax, invalid request message framing, or deceptive request routing). | [`CustomerManagementV1Pricelist400ErrorException`](../../doc/models/customer-management-v1-pricelist-400-error-exception.md) |
| 401 | The request has not been applied because it lacks valid  authentication credentials for the target resource. | [`CustomerManagementV1Pricelist401ErrorException`](../../doc/models/customer-management-v1-pricelist-401-error-exception.md) |
| 403 | Forbidden | [`CustomerManagementV1Pricelist403ErrorException`](../../doc/models/customer-management-v1-pricelist-403-error-exception.md) |
| 404 | The origin server did not find a current representation  for the target resource or is not willing to disclose  that one exists. | [`CustomerManagementV1Pricelist404ErrorException`](../../doc/models/customer-management-v1-pricelist-404-error-exception.md) |
| 500 | The server encountered an unexpected condition that  prevented it from fulfilling the request. | [`CustomerManagementV1Pricelist500ErrorException`](../../doc/models/customer-management-v1-pricelist-500-error-exception.md) |

