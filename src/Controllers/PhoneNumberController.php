<?php
/*
 * YtelAPIV3Lib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace YtelAPIV3Lib\Controllers;

use YtelAPIV3Lib\APIException;
use YtelAPIV3Lib\APIHelper;
use YtelAPIV3Lib\Configuration;
use YtelAPIV3Lib\Models;
use YtelAPIV3Lib\Exceptions;
use YtelAPIV3Lib\Http\HttpRequest;
use YtelAPIV3Lib\Http\HttpResponse;
use YtelAPIV3Lib\Http\HttpMethod;
use YtelAPIV3Lib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class PhoneNumberController extends BaseController
{
    /**
     * @var PhoneNumberController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return PhoneNumberController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Get DID Score Number
     *
     * @param string $phonenumber Specifies the multiple phone numbers for check updated spamscore .
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createGetDIDScore(
        $phonenumber
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/getdidscore.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'Phonenumber' => $phonenumber
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Transfer phone number that has been purchased for from one account to another account.
     *
     * @param string $phonenumber    A valid 10-digit Ytel number (E.164 format).
     * @param string $fromaccountsid A specific Accountsid from where Number is getting transfer.
     * @param string $toaccountsid   A specific Accountsid to which Number is getting transfer.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createMoveNumber(
        $phonenumber,
        $fromaccountsid,
        $toaccountsid
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/transferphonenumbers.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'phonenumber'    => $phonenumber,
            'fromaccountsid' => $fromaccountsid,
            'toaccountsid'   => $toaccountsid
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Purchase a phone number to be used with your Ytel account
     *
     * @param string $phoneNumber A valid 10-digit Ytel number (E.164 format).
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createPurchaseNumber(
        $phoneNumber
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/buynumber.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'PhoneNumber' => $phoneNumber
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Remove a purchased Ytel number from your account.
     *
     * @param string $responseType Response type format xml or json
     * @param string $phoneNumber  A valid 10-digit Ytel number (E.164 format).
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createReleaseNumber(
        $responseType,
        $phoneNumber
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/releasenumber.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => $responseType,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'PhoneNumber'  => $phoneNumber
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Retrieve the details for a phone number by its number.
     *
     * @param string $phoneNumber A valid Ytel 10-digit phone number (E.164 format).
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createViewDetails(
        $phoneNumber
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/viewnumber.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'PhoneNumber' => $phoneNumber
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Remove a purchased Ytel number from your account.
     *
     * @param string $phoneNumber A valid Ytel comma separated numbers (E.164 format).
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createBulkRelease(
        $phoneNumber
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/massreleasenumber.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'PhoneNumber' => $phoneNumber
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Retrieve a list of available phone numbers that can be purchased and used for your Ytel account.
     *
     * @param string  $numbertype Number type either SMS,Voice or all
     * @param string  $areacode   Specifies the area code for the returned list of available numbers. Only available
     *                            for North American numbers.
     * @param integer $pagesize   (optional) The count of objects to return.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createAvailableNumbers(
        $numbertype,
        $areacode,
        $pagesize = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/availablenumber.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'numbertype' => APIHelper::prepareFormFields($numbertype),
            'areacode'   => $areacode,
            'pagesize'   => $pagesize
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Update properties for a Ytel number that has been purchased for your account. Refer to the
     * parameters list for the list of properties that can be updated.
     *
     * @param string $phoneNumber          A valid Ytel number (E.164 format).
     * @param string $voiceUrl             URL requested once the call connects
     * @param string $friendlyName         (optional) Phone number friendly name description
     * @param string $voiceMethod          (optional) Post or Get
     * @param string $voiceFallbackUrl     (optional) URL requested if the voice URL is not available
     * @param string $voiceFallbackMethod  (optional) Post or Get
     * @param string $hangupCallback       (optional) callback url after a hangup occurs
     * @param string $hangupCallbackMethod (optional) Post or Get
     * @param string $heartbeatUrl         (optional) URL requested once the call connects
     * @param string $heartbeatMethod      (optional) URL that can be requested every 60 seconds during the call to
     *                                     notify of elapsed time
     * @param string $smsUrl               (optional) URL requested when an SMS is received
     * @param string $smsMethod            (optional) Post or Get
     * @param string $smsFallbackUrl       (optional) URL used if any errors occur during execution of InboundXML from
     *                                     an SMS or at initial request of the SmsUrl.
     * @param string $smsFallbackMethod    (optional) The HTTP method Ytel will use when URL requested if the SmsUrl is
     *                                     not available.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateNumber(
        $phoneNumber,
        $voiceUrl,
        $friendlyName = null,
        $voiceMethod = null,
        $voiceFallbackUrl = null,
        $voiceFallbackMethod = null,
        $hangupCallback = null,
        $hangupCallbackMethod = null,
        $heartbeatUrl = null,
        $heartbeatMethod = null,
        $smsUrl = null,
        $smsMethod = null,
        $smsFallbackUrl = null,
        $smsFallbackMethod = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/updatenumber.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'         => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'PhoneNumber'          => $phoneNumber,
            'VoiceUrl'             => $voiceUrl,
            'FriendlyName'         => $friendlyName,
            'VoiceMethod'          => $voiceMethod,
            'VoiceFallbackUrl'     => $voiceFallbackUrl,
            'VoiceFallbackMethod'  => $voiceFallbackMethod,
            'HangupCallback'       => $hangupCallback,
            'HangupCallbackMethod' => $hangupCallbackMethod,
            'HeartbeatUrl'         => $heartbeatUrl,
            'HeartbeatMethod'      => $heartbeatMethod,
            'SmsUrl'               => $smsUrl,
            'SmsMethod'            => $smsMethod,
            'SmsFallbackUrl'       => $smsFallbackUrl,
            'SmsFallbackMethod'    => $smsFallbackMethod
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Retrieve a list of purchased phones numbers associated with your Ytel account.
     *
     * @param integer $page         (optional) Which page of the overall response will be returned. Page indexing
     *                              starts at 1.
     * @param integer $pageSize     (optional) The page count to retrieve from the total results in the collection.
     *                              Page indexing starts at 1.
     * @param string  $numberType   (optional) The capability supported by the number.Number type either SMS,Voice or
     *                              all
     * @param string  $friendlyName (optional) A human-readable label added to the number object.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createListNumbers(
        $page = null,
        $pageSize = null,
        $numberType = null,
        $friendlyName = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/listnumber.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'Page'         => $page,
            'PageSize'     => $pageSize,
            'NumberType' => APIHelper::prepareFormFields($numberType),
            'FriendlyName' => $friendlyName
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Update properties for a Ytel numbers that has been purchased for your account. Refer to the
     * parameters list for the list of properties that can be updated.
     *
     * @param string $phoneNumber          A valid comma(,) separated Ytel numbers. (E.164 format).
     * @param string $voiceUrl             The URL returning InboundXML incoming calls should execute when connected.
     * @param string $friendlyName         (optional) A human-readable value for labeling the number.
     * @param string $voiceMethod          (optional) Specifies the HTTP method used to request the VoiceUrl once
     *                                     incoming call connects.
     * @param string $voiceFallbackUrl     (optional) URL used if any errors occur during execution of InboundXML on a
     *                                     call or at initial request of the voice url
     * @param string $voiceFallbackMethod  (optional) Specifies the HTTP method used to request the VoiceFallbackUrl
     *                                     once incoming call connects.
     * @param string $hangupCallback       (optional) URL that can be requested to receive notification when and how
     *                                     incoming call has ended.
     * @param string $hangupCallbackMethod (optional) The HTTP method Ytel will use when requesting the HangupCallback
     *                                     URL.
     * @param string $heartbeatUrl         (optional) URL that can be used to monitor the phone number.
     * @param string $heartbeatMethod      (optional) The HTTP method Ytel will use when requesting the HeartbeatUrl.
     * @param string $smsUrl               (optional) URL requested when an SMS is received.
     * @param string $smsMethod            (optional) The HTTP method Ytel will use when requesting the SmsUrl.
     * @param string $smsFallbackUrl       (optional) URL used if any errors occur during execution of InboundXML from
     *                                     an SMS or at initial request of the SmsUrl.
     * @param string $smsFallbackMethod    (optional) The HTTP method Ytel will use when URL requested if the SmsUrl is
     *                                     not available.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createBulkUpdateNumbers(
        $phoneNumber,
        $voiceUrl,
        $friendlyName = null,
        $voiceMethod = null,
        $voiceFallbackUrl = null,
        $voiceFallbackMethod = null,
        $hangupCallback = null,
        $hangupCallbackMethod = null,
        $heartbeatUrl = null,
        $heartbeatMethod = null,
        $smsUrl = null,
        $smsMethod = null,
        $smsFallbackUrl = null,
        $smsFallbackMethod = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/massupdatenumber.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'         => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'PhoneNumber'          => $phoneNumber,
            'VoiceUrl'             => $voiceUrl,
            'FriendlyName'         => $friendlyName,
            'VoiceMethod'          => $voiceMethod,
            'VoiceFallbackUrl'     => $voiceFallbackUrl,
            'VoiceFallbackMethod'  => $voiceFallbackMethod,
            'HangupCallback'       => $hangupCallback,
            'HangupCallbackMethod' => $hangupCallbackMethod,
            'HeartbeatUrl'         => $heartbeatUrl,
            'HeartbeatMethod'      => $heartbeatMethod,
            'SmsUrl'               => $smsUrl,
            'SmsMethod'            => $smsMethod,
            'SmsFallbackUrl'       => $smsFallbackUrl,
            'SmsFallbackMethod'    => $smsFallbackMethod
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Purchase a selected number of DID's from specific area codes to be used with your Ytel account.
     *
     * @param string $numberType The capability the number supports.
     * @param string $areaCode   Specifies the area code for the returned list of available numbers. Only available for
     *                           North American numbers.
     * @param string $quantity   A positive integer that tells how many number you want to buy at a time.
     * @param string $leftover   (optional) If desired quantity is unavailable purchase what is available .
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createBulkBuyNumbers(
        $numberType,
        $areaCode,
        $quantity,
        $leftover = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/incomingphone/bulkbuy.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //prepare parameters
        $_parameters = array (
            'NumberType' => APIHelper::prepareFormFields($numberType),
            'AreaCode'   => $areaCode,
            'Quantity'   => $quantity,
            'Leftover'   => $leftover
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }
}
