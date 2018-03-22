<?php
/*
 * Ytel
 *
 * This file was automatically generated for ytel by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace YtelLib\Controllers;

use YtelLib\APIException;
use YtelLib\APIHelper;
use YtelLib\Configuration;
use YtelLib\Models;
use YtelLib\Exceptions;
use YtelLib\Http\HttpRequest;
use YtelLib\Http\HttpResponse;
use YtelLib\Http\HttpMethod;
use YtelLib\Http\HttpContext;
use YtelLib\Servers;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class PostCardController extends BaseController
{
    /**
     * @var PostCardController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return PostCardController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Retrieve a postcard object by its PostcardId.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['postcardid']   The unique identifier for a postcard object.
     * @param string $options['responseType'] Response Type either json or xml
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function viewPostcard(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['postcardid'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/Postcard/viewpostcard.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ytel-api'
        );

        //prepare parameters
        $_parameters = array (
            'postcardid'   => $this->val($options, 'postcardid')
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
     * Create, print, and mail a postcard to an address. The postcard front must be supplied as a PDF,
     * image, or an HTML string. The back can be a PDF, image, HTML string, or it can be automatically
     * generated by supplying a custom message.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['to']           The AddressId or an object structured when creating an address by
     *                                        addresses/Create.
     * @param string $options['from']         The AddressId or an object structured when creating an address by
     *                                        addresses/Create.
     * @param string $options['attachbyid']   Set an existing postcard by attaching its PostcardId.
     * @param string $options['front']        A 4.25"x6.25" or 6.25"x11.25" image to use as the front of the postcard.
     *                                        This can be a URL, local file, or an HTML string. Supported file types
     *                                        are PDF, PNG, and JPEG.
     * @param string $options['back']         A 4.25"x6.25" or 6.25"x11.25" image to use as the back of the postcard,
     *                                        supplied as a URL, local file, or HTML string.  This allows you to
     *                                        customize your back design, but we will still insert the recipient
     *                                        address for you.
     * @param string $options['message']      The message for the back of the postcard with a maximum of 350 characters.
     * @param string $options['setting']      Code for the dimensions of the media to be printed.
     * @param string $options['responseType'] Response Type either json or xml
     * @param string $options['description']  (optional) A description for the postcard.
     * @param string $options['htmldata']     (optional) A string value that contains HTML markup.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createPostcard(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['to'], $options['from'], $options['attachbyid'], $options['front'], $options['back'], $options['message'], $options['setting'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/Postcard/createpostcard.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ytel-api'
        );

        //prepare parameters
        $_parameters = array (
            'to'           => $this->val($options, 'to'),
            'from'         => $this->val($options, 'from'),
            'attachbyid'   => $this->val($options, 'attachbyid'),
            'front'        => $this->val($options, 'front'),
            'back'         => $this->val($options, 'back'),
            'message'      => $this->val($options, 'message'),
            'setting'      => $this->val($options, 'setting'),
            'description'  => $this->val($options, 'description'),
            'htmldata'     => $this->val($options, 'htmldata')
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
     * Retrieve a list of postcard objects. The postcards objects are sorted by creation date, with the
     * most recently created postcards appearing first.
     *
     * @param  array  $options    Array with all options for search
     * @param string  $options['responseType'] Response Type either json or xml
     * @param integer $options['page']         (optional) The page count to retrieve from the total results in the
     *                                         collection. Page indexing starts at 1.
     * @param integer $options['pagesize']     (optional) The count of objects to return per page.
     * @param string  $options['postcardid']   (optional) The unique identifier for a postcard object.
     * @param string  $options['dateCreated']  (optional) The date the postcard was created.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function listPostcards(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/Postcard/listpostcard.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ytel-api'
        );

        //prepare parameters
        $_parameters = array (
            'page'         => $this->val($options, 'page', 1),
            'pagesize'     => $this->val($options, 'pagesize', 10),
            'postcardid'   => $this->val($options, 'postcardid'),
            'dateCreated'  => $this->val($options, 'dateCreated')
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
     * Remove a postcard object.
     *
     * @param  array  $options    Array with all options for search
     * @param string $options['postcardid']   The unique identifier of a postcard object.
     * @param string $options['responseType'] Response Type either json or xml
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deletePostcard(
        $options
    ) {
        //check that all required arguments are provided
        if (!isset($options['postcardid'], $options['responseType'])) {
            throw new \InvalidArgumentException("One or more required arguments were NULL.");
        }


        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/Postcard/deletepostcard.{ResponseType}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'ResponseType' => $this->val($options, 'responseType'),
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'ytel-api'
        );

        //prepare parameters
        $_parameters = array (
            'postcardid'   => $this->val($options, 'postcardid')
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
    * Array access utility method
     * @param  array          $arr         Array of values to read from
     * @param  string         $key         Key to get the value from the array
     * @param  mixed|null     $default     Default value to use if the key was not found
     * @return mixed
     */
    private function val($arr, $key, $default = null)
    {
        if (isset($arr[$key])) {
            return is_bool($arr[$key]) ? var_export($arr[$key], true) : $arr[$key];
        }
        return $default;
    }
}
