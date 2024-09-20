<?php

declare(strict_types=1);

/*
 * ShellDataReportingAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ShellDataReportingAPIsLib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use ShellDataReportingAPIsLib\Exceptions\ApiException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerAccounts400ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerAccounts401ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerAccounts403ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerAccounts404ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerAccounts500ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerAuditreport400ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerAuditreport401ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerAuditreport403ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerAuditreport404ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerAuditreport500ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerCardgroups400ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerCardgroups401ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerCardgroups403ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerCardgroups404ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerCardgroups500ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerCustomer400ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerCustomer401ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerCustomer403ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerCustomer404ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerCustomer500ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerPayers400ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerPayers401ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerPayers403ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerPayers404ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1CustomerPayers500ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1UserLoggedinuser400ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1UserLoggedinuser401ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1UserLoggedinuser403ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1UserLoggedinuser404ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV1UserLoggedinuser500ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV2CustomerCardtype400ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV2CustomerCardtype401ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV2CustomerCardtype403ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV2CustomerCardtype404ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV2CustomerCardtype500ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV2CustomerPricelist400ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV2CustomerPricelist401ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV2CustomerPricelist403ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV2CustomerPricelist404ErrorException;
use ShellDataReportingAPIsLib\Exceptions\FleetmanagementV2CustomerPricelist500ErrorException;
use ShellDataReportingAPIsLib\Models\AccountRequest;
use ShellDataReportingAPIsLib\Models\AccountResponse;
use ShellDataReportingAPIsLib\Models\AuditRequest;
use ShellDataReportingAPIsLib\Models\AuditResponse;
use ShellDataReportingAPIsLib\Models\CardGroupRequest;
use ShellDataReportingAPIsLib\Models\CardGroupResponse;
use ShellDataReportingAPIsLib\Models\CardTypeRequest;
use ShellDataReportingAPIsLib\Models\CardTypeResponse;
use ShellDataReportingAPIsLib\Models\CustomerDetailRequest;
use ShellDataReportingAPIsLib\Models\CustomerDetailResponse;
use ShellDataReportingAPIsLib\Models\CustomerPriceListRequest;
use ShellDataReportingAPIsLib\Models\CustomerPriceListResponse;
use ShellDataReportingAPIsLib\Models\FleetmanagementV1UserLoggedinuserRequest;
use ShellDataReportingAPIsLib\Models\LoggedInUserResponse;
use ShellDataReportingAPIsLib\Models\PayerRequest;
use ShellDataReportingAPIsLib\Models\PayerResponse;

class CustomerController extends BaseController
{
    /**
     * This API allows querying the user data of the logged in user.</br>
     * This API will return the user access details such as payers and/or accounts. </br>
     * This API will also validate that logged in user has access to the requested API, on failure it will
     * return HasAPIAccess flag as false in response.</br>
     *
     * @param string $apikey This is the API key of the specific environment which needs to be
     *        passed by the client.
     * @param string $requestId Mandatory UUID (according to RFC 4122 standards) for requests and
     *        responses. This will be played back in the response from the request.
     * @param FleetmanagementV1UserLoggedinuserRequest|null $body Logged in user request body
     *
     * @return LoggedInUserResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function loggedinUser(
        string $apikey,
        string $requestId,
        ?FleetmanagementV1UserLoggedinuserRequest $body = null
    ): LoggedInUserResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/fleetmanagement/v1/user/loggedinuser')
            ->auth('BasicAuth')
            ->parameters(
                HeaderParam::init('apikey', $apikey),
                HeaderParam::init('RequestId', $requestId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    "The server cannot or will not process the request  due to something that i" .
                    "s perceived to be a client\r\n error (e.g., malformed request syntax, inval" .
                    "id \r\n request message framing, or deceptive request routing).",
                    FleetmanagementV1UserLoggedinuser400ErrorException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    'The request has not been applied because it lacks valid  authentication cr' .
                    'edentials for the target resource.',
                    FleetmanagementV1UserLoggedinuser401ErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    'The server understood the request but refuses to authorize it.',
                    FleetmanagementV1UserLoggedinuser403ErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    'The origin server did not find a current representation  for the target re' .
                    'source or is not willing to disclose  that one exists.',
                    FleetmanagementV1UserLoggedinuser404ErrorException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    'The server encountered an unexpected condition the prevented it from fulfi' .
                    'lling the request.',
                    FleetmanagementV1UserLoggedinuser500ErrorException::class
                )
            )
            ->type(LoggedInUserResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API allows querying the payer accounts details from the Shell Cards
     *
     * Platform. It provides flexible search criteria for searching payer
     *
     * information and supports paging.
     *
     *
     *
     * Paging is applicable only when all the
     *
     * payers passed in the input are from the same ColCo.
     *
     *
     *
     * However, paging will
     *
     * be ignored and the API will return all the matching data by merging the
     *
     * data queried from each ColCo when payers passed in the input are from
     *
     * multiple ColCos.
     *
     *
     *
     * @param string $apikey This is the API key of the specific environment which needs to be
     *        passed by the client.
     * @param string $requestId Mandatory UUID (according to RFC 4122 standards) for requests and
     *        responses. This will be played back in the response from the request.
     * @param PayerRequest|null $body Serach payers request body
     *
     * @return PayerResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function payers(string $apikey, string $requestId, ?PayerRequest $body = null): PayerResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/fleetmanagement/v1/customer/payers')
            ->auth('BasicAuth')
            ->parameters(
                HeaderParam::init('apikey', $apikey),
                HeaderParam::init('RequestId', $requestId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    "The server cannot or will not process the request  due to something that i" .
                    "s perceived to be a client\r\n error (e.g., malformed request syntax, inval" .
                    "id \r\n request message framing, or deceptive request routing).",
                    FleetmanagementV1CustomerPayers400ErrorException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    'The request has not been applied because it lacks valid  authentication cr' .
                    'edentials for the target resource.',
                    FleetmanagementV1CustomerPayers401ErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    'The server understood the request but refuses to authorize it.',
                    FleetmanagementV1CustomerPayers403ErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    'The origin server did not find a current representation  for the target re' .
                    'source or is not willing to disclose  that one exists.',
                    FleetmanagementV1CustomerPayers404ErrorException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    'The server encountered an unexpected condition the prevented it from fulfi' .
                    'lling the request.',
                    FleetmanagementV1CustomerPayers500ErrorException::class
                )
            )
            ->type(PayerResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API allows querying the card delivery addresses of a given account from the Shell Cards
     * Platform.
     *
     * Only active delivery addresses will be returned.
     *
     *
     *
     * @param string $apikey This is the API key of the specific environment which needs to be
     *        passed by the client.
     * @param string $requestId Mandatory UUID (according to RFC 4122 standards) for requests and
     *        responses. This will be played back in the response from the request.
     * @param CustomerDetailRequest|null $body Customerdetails request body
     *
     * @return CustomerDetailResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function customer(
        string $apikey,
        string $requestId,
        ?CustomerDetailRequest $body = null
    ): CustomerDetailResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/fleetmanagement/v1/customer/customer')
            ->auth('BasicAuth')
            ->parameters(
                HeaderParam::init('apikey', $apikey),
                HeaderParam::init('RequestId', $requestId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    "The server cannot or will not process the request  due to something that i" .
                    "s perceived to be a client\r\n error (e.g., malformed request syntax, inval" .
                    "id \r\n request message framing, or deceptive request routing).",
                    FleetmanagementV1CustomerCustomer400ErrorException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    'The request has not been applied because it lacks valid  authentication cr' .
                    'edentials for the target resource.',
                    FleetmanagementV1CustomerCustomer401ErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    'The server understood the request but refuses to authorize it.',
                    FleetmanagementV1CustomerCustomer403ErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    'The origin server did not find a current representation  for the target re' .
                    'source or is not willing to disclose  that one exists.',
                    FleetmanagementV1CustomerCustomer404ErrorException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    'The server encountered an unexpected condition the prevented it from fulfi' .
                    'lling the request.',
                    FleetmanagementV1CustomerCustomer500ErrorException::class
                )
            )
            ->type(CustomerDetailResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * - This operation fetches the International and National Price List and discount values set on pump
     * prices & List Prices
     *
     * - It allows searching price list and discount values set on pump prices that are applicable for a
     * given customer
     *
     *
     *
     * **Note**: Accounts with cancelled status will not be considered for this operation for the
     * configured
     *
     *
     *
     * - When the search is based on customer specific price list then the customer price list is returned
     * based on the associated pricing customer.
     *
     * - The discount values set on pump prices, which are returned by the operation are always customer
     * specific values based on the customer associated price rules.
     *
     *
     *
     *
     *
     * @param string $apikey This is the API key of the specific environment which needs to be
     *        passed by the client.
     * @param string $requestId Mandatory UUID (according to RFC 4122 standards) for requests and
     *        responses. This will be played back in the response from the request.
     * @param CustomerPriceListRequest|null $body Customerdetails request body
     *
     * @return CustomerPriceListResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function customerPriceList(
        string $apikey,
        string $requestId,
        ?CustomerPriceListRequest $body = null
    ): CustomerPriceListResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/fleetmanagement/v2/customer/pricelist')
            ->auth('BasicAuth')
            ->parameters(
                HeaderParam::init('apikey', $apikey),
                HeaderParam::init('RequestId', $requestId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    "The server cannot or will not process the request  due to something that i" .
                    "s perceived to be a client\r\n error (e.g., malformed request syntax, inval" .
                    "id \r\n request message framing, or deceptive request routing).",
                    FleetmanagementV2CustomerPricelist400ErrorException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    'The request has not been applied because it lacks valid  authentication cr' .
                    'edentials for the target resource.',
                    FleetmanagementV2CustomerPricelist401ErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    'The server understood the request but refuses to authorize it.',
                    FleetmanagementV2CustomerPricelist403ErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    'The origin server did not find a current representation  for the target re' .
                    'source or is not willing to disclose  that one exists.',
                    FleetmanagementV2CustomerPricelist404ErrorException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    'The server encountered an unexpected condition the prevented it from fulfi' .
                    'lling the request.',
                    FleetmanagementV2CustomerPricelist500ErrorException::class
                )
            )
            ->type(CustomerPriceListResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This API allows querying the customer account details from the Shell Cards Platform.
     *
     * It provides a flexible search criterion and supports paging".
     *
     * @param string $apikey This is the API key of the specific environment which needs to be
     *        passed by the client.
     * @param string $requestId Mandatory UUID (according to RFC 4122 standards) for requests and
     *        responses. This will be played back in the response from the request.
     * @param AccountRequest|null $body
     *
     * @return AccountResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function accounts(string $apikey, string $requestId, ?AccountRequest $body = null): AccountResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/fleetmanagement/v1/customer/accounts')
            ->auth('BasicAuth')
            ->parameters(
                HeaderParam::init('apikey', $apikey),
                HeaderParam::init('RequestId', $requestId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    "The server cannot or will not process the request  due to something that i" .
                    "s perceived to be a client\r\n error (e.g., malformed request syntax, inval" .
                    "id \r\n request message framing, or deceptive request routing).",
                    FleetmanagementV1CustomerAccounts400ErrorException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    'The request has not been applied because it lacks valid  authentication cr' .
                    'edentials for the target resource.',
                    FleetmanagementV1CustomerAccounts401ErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    'The server understood the request but refuses to authorize it.',
                    FleetmanagementV1CustomerAccounts403ErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    'The origin server did not find a current representation  for the target re' .
                    'source or is not willing to disclose  that one exists.',
                    FleetmanagementV1CustomerAccounts404ErrorException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    'The server encountered an unexpected condition the prevented it from fulfi' .
                    'lling the request.',
                    FleetmanagementV1CustomerAccounts500ErrorException::class
                )
            )
            ->type(AccountResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This operation allows querying card types that are associated to the given account and are allowed
     * to be shown to users.
     *
     * @param string $apikey This is the API key of the specific environment which needs to be
     *        passed by the client.
     * @param string $requestId Mandatory UUID (according to RFC 4122 standards) for requests and
     *        responses. This will be played back in the response from the request.
     * @param CardTypeRequest|null $body Get CardType Request Body
     *
     * @return CardTypeResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function cardType(string $apikey, string $requestId, ?CardTypeRequest $body = null): CardTypeResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/fleetmanagement/v2/customer/cardtype')
            ->auth('BasicAuth')
            ->parameters(
                HeaderParam::init('apikey', $apikey),
                HeaderParam::init('RequestId', $requestId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    "The server cannot or will not process the request  due to something that i" .
                    "s perceived to be a client\r\n error (e.g., malformed request syntax, inval" .
                    "id \r\n request message framing, or deceptive request routing).",
                    FleetmanagementV2CustomerCardtype400ErrorException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    'The request has not been applied because it lacks valid  authentication cr' .
                    'edentials for the target resource.',
                    FleetmanagementV2CustomerCardtype401ErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    'The server understood the request but refuses to authorize it.',
                    FleetmanagementV2CustomerCardtype403ErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    'The origin server did not find a current representation  for the target re' .
                    'source or is not willing to disclose  that one exists.',
                    FleetmanagementV2CustomerCardtype404ErrorException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    'The server encountered an unexpected condition the prevented it from fulfi' .
                    'lling the request.',
                    FleetmanagementV2CustomerCardtype500ErrorException::class
                )
            )
            ->type(CardTypeResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This operation allows querying the card group details . It provides flexible search criteria and
     * supports paging.\
     *
     *
     * When the card group type is configured as ‘Vertical’ in cards platform, this operation will return
     * all card groups from the given account or if no account is passed in the input, then will return
     * card groups from all the accounts under the payer.
     *
     *
     * When the card group type is configured as ‘Horizontal’ in cards platform, this API will return all
     * card groups configured directly under the payer.
     *
     *
     * Accounts with cancelled status will not be considered for cardgroups search for the configured (E.g.,
     * SFH) set of client apps.
     *
     *
     *
     * @param string $apikey This is the API key of the specific environment which needs to be
     *        passed by the client.
     * @param string $requestId Mandatory UUID (according to RFC 4122 standards) for requests and
     *        responses. This will be played back in the response from the request.
     * @param CardGroupRequest|null $body Request Body
     *
     * @return CardGroupResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function cardGroups(string $apikey, string $requestId, ?CardGroupRequest $body = null): CardGroupResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/fleetmanagement/v1/customer/cardgroups')
            ->auth('BasicAuth')
            ->parameters(
                HeaderParam::init('apikey', $apikey),
                HeaderParam::init('RequestId', $requestId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    "The server cannot or will not process the request  due to something that i" .
                    "s perceived to be a client\r\n error (e.g., malformed request syntax, inval" .
                    "id \r\n request message framing, or deceptive request routing).",
                    FleetmanagementV1CustomerCardgroups400ErrorException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    'The request has not been applied because it lacks valid  authentication cr' .
                    'edentials for the target resource.',
                    FleetmanagementV1CustomerCardgroups401ErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    'The server understood the request but refuses to authorize it.',
                    FleetmanagementV1CustomerCardgroups403ErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    'The origin server did not find a current representation  for the target re' .
                    'source or is not willing to disclose  that one exists.',
                    FleetmanagementV1CustomerCardgroups404ErrorException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    'The server encountered an unexpected condition the prevented it from fulfi' .
                    'lling the request.',
                    FleetmanagementV1CustomerCardgroups500ErrorException::class
                )
            )
            ->type(CardGroupResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This operation allows users to fetch audit data of account or card operations performed by users of
     * a given customer
     *
     * The audit data includes details of below API operations
     *
     *
     *
     * * Order Card
     *
     * * Create Card Group
     *
     * * PIN reminder
     *
     * * Move Cards
     *
     * * Update Card Status
     *
     * * Update Card Group
     *
     * * Auto renew
     *
     * * Bulk card order
     *
     * * Bulk card block
     *
     * * Bulk Card Order (Multi Account)
     *
     * * BCOSummary
     *
     * * BCOMultiAccountSummary
     *
     * * BCBSummary
     *
     * * Mobile Payment
     *
     * * Registration
     *
     * * Fund Transfer (Scheduled & Realtime)
     *
     * * Delivery Address Update.
     *
     * @param string $apikey This is the API key of the specific environment which needs to be
     *        passed by the client.
     * @param string $requestId Mandatory UUID (according to RFC 4122 standards) for requests and
     *        responses. This will be played back in the response from the request.
     * @param AuditRequest|null $body request body
     *
     * @return AuditResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function auditReport(string $apikey, string $requestId, ?AuditRequest $body = null): AuditResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/fleetmanagement/v1/customer/auditreport')
            ->auth('BasicAuth')
            ->parameters(
                HeaderParam::init('apikey', $apikey),
                HeaderParam::init('RequestId', $requestId),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init(
                    "The server cannot or will not process the request  due to something that i" .
                    "s perceived to be a client\r\n error (e.g., malformed request syntax, inval" .
                    "id \r\n request message framing, or deceptive request routing).",
                    FleetmanagementV1CustomerAuditreport400ErrorException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    'The request has not been applied because it lacks valid  authentication cr' .
                    'edentials for the target resource.',
                    FleetmanagementV1CustomerAuditreport401ErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init(
                    'The server understood the request but refuses to authorize it.',
                    FleetmanagementV1CustomerAuditreport403ErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::init(
                    'The origin server did not find a current representation  for the target re' .
                    'source or is not willing to disclose  that one exists.',
                    FleetmanagementV1CustomerAuditreport404ErrorException::class
                )
            )
            ->throwErrorOn(
                '500',
                ErrorType::init(
                    'The server encountered an unexpected condition the prevented it from fulfi' .
                    'lling the request.',
                    FleetmanagementV1CustomerAuditreport500ErrorException::class
                )
            )
            ->type(AuditResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
