
# Getting Started with Shell Data & Reporting APIs

## Introduction

Data And Reporting product consists of API's which provides details of transaction and invoice informations about shell cards.
The Shell Card Transaction and Invoice API is REST-based and employs Basic authentication in Version 1 and Oauth authentication in Version 2 end points. The API endpoints accept JSON-encoded request bodies, return JSON-encoded responses and use standard HTTP response codes.
All resources are located in the Shell Card Platform.  The Shell Card Platform is the overall platform that encompasses all the internal Shell systems used to manage resources.
All endpoints use the `POST` verb for retrieving, updating, creating and deleting resources in the Shell Card Platform. The endpoints that retrieve resources from the Shell Card Platform allow flexible search parameters in the API request body.

Go to the Shell Developer Portal: [https://developer.shell.com](https://developer.shell.com)

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```php
composer require "shell/data-and-reporting-sdk:1.1.0"
```

Or add it to the composer.json file manually as given below:

```php
"require": {
    "shell/data-and-reporting-sdk": "1.1.0"
}
```

You can also view the package at:
https://packagist.org/packages/shell/data-and-reporting-sdk#1.1.0

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/1.1.0/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `environment` | `Environment` | The API environment. <br> **Default: `Environment.SIT`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `basicAuthCredentials` | [`BasicAuthCredentials`](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/1.1.0/doc/auth/basic-authentication.md) | The Credentials Setter for Basic Authentication |
| `bearerTokenCredentials` | [`BearerTokenCredentials`](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/1.1.0/doc/auth/oauth-2-client-credentials-grant.md) | The Credentials Setter for OAuth 2 Client Credentials Grant |

The API client can be initialized as follows:

```php
$client = ShellDataReportingAPIsClientBuilder::init()
    ->basicAuthCredentials(
        BasicAuthCredentialsBuilder::init(
            'Username',
            'Password'
        )
    )
    ->bearerTokenCredentials(
        BearerTokenCredentialsBuilder::init(
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
| Production | - |

## Authorization

This API uses the following authentication schemes.

* [`BasicAuth (Basic Authentication)`](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/1.1.0/doc/auth/basic-authentication.md)
* [`BearerToken (OAuth 2 Client Credentials Grant)`](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/1.1.0/doc/auth/oauth-2-client-credentials-grant.md)

## List of APIs

* [Customer](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/1.1.0/doc/controllers/customer.md)
* [Transaction](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/1.1.0/doc/controllers/transaction.md)
* [Invoice](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/1.1.0/doc/controllers/invoice.md)

## Classes Documentation

* [ApiException](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/1.1.0/doc/api-exception.md)
* [HttpRequest](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/1.1.0/doc/http-request.md)
* [HttpResponse](https://www.github.com/sdks-io/data-and-reporting-php-sdk/tree/1.1.0/doc/http-response.md)

