
# Getting Started with Shell Data & Reporting APIs

## Introduction

The Shell Card Transaction and Invoice API is part of the Data and Reporting product suite, designed to provide secure and flexible access to transaction and invoice data related to Shell Cards.

### Authentication

- OAuth 2.0 Authentication.

### Architecture

- RESTful API design.
- All endpoints use the `POST` HTTP method for all operations including retrieval, creation, update, and deletion of resources.
- Requests and responses are encoded in JSON format.
- Standard HTTP status codes are used for response handling.

### Platform

- All resources are managed within the **Shell Card Platform**, which integrates multiple internal Shell systems for resource management.

### Features

- Flexible search parameters supported in the request body for data retrieval.
- Designed for integration with enterprise systems requiring Shell Card transaction and invoice data.

### Use Cases

- Retrieve detailed transaction history for Shell Cards.
- Access invoice summaries and line-item details.
- Integrate Shell Card financial data into internal reporting tools.

Go to the Shell Developer Portal: [https://developer.shell.com](https://developer.shell.com)

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```bash
composer require "shell/data-and-reporting-sdk:3.0.0"
```

Or add it to the composer.json file manually as given below:

```json
"require": {
    "shell/data-and-reporting-sdk": "3.0.0"
}
```

You can also view the package at:
https://packagist.org/packages/shell/data-and-reporting-sdk#3.0.0

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/3.0.0/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| environment | [`Environment`](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/3.0.0/README.md#environments) | The API environment. <br> **Default: `Environment.SIT`** |
| timeout | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| enableRetries | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| numberOfRetries | `int` | The number of retries to make.<br>*Default*: `0` |
| retryInterval | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| backOffFactor | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| maximumRetryWaitTime | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| retryOnTimeout | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| httpStatusCodesToRetry | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| httpMethodsToRetry | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| proxyConfiguration | [`ProxyConfigurationBuilder`](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/3.0.0/doc/proxy-configuration-builder.md) | Represents the proxy configurations for API calls |
| clientCredentialsAuth | [`ClientCredentialsAuth`](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/3.0.0/doc/auth/oauth-2-client-credentials-grant.md) | The Credentials Setter for OAuth 2 Client Credentials Grant |

The API client can be initialized as follows:

```php
use ShellDataReportingAPIsLib\Environment;
use ShellDataReportingAPIsLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use ShellDataReportingAPIsLib\ShellDataReportingAPIsClientBuilder;

$client = ShellDataReportingAPIsClientBuilder::init()
    ->clientCredentialsAuthCredentials(
        ClientCredentialsAuthCredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret'
        )
    )
    ->environment(Environment::SIT)
    ->build();
```

## Environments

The SDK can be configured to use a different environment for making API calls. Available environments are:

### Fields

| Name | Description |
|  --- | --- |
| SIT | **Default** |
| PRODUCTION | - |

## Authorization

This API uses the following authentication schemes.

* [`BearerToken (OAuth 2 Client Credentials Grant)`](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/3.0.0/doc/auth/oauth-2-client-credentials-grant.md)

## List of APIs

* [Customer](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/3.0.0/doc/controllers/customer.md)
* [Transaction](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/3.0.0/doc/controllers/transaction.md)
* [Invoice](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/3.0.0/doc/controllers/invoice.md)

## SDK Infrastructure

### Configuration

* [ProxyConfigurationBuilder](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/3.0.0/doc/proxy-configuration-builder.md)

### HTTP

* [HttpRequest](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/3.0.0/doc/http-request.md)
* [HttpResponse](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/3.0.0/doc/http-response.md)

### Utilities

* [ApiException](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/3.0.0/doc/api-exception.md)

