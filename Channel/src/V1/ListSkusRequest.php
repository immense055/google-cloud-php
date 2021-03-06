<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListSkus.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListSkusRequest</code>
 */
class ListSkusRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Product for which to list SKUs.
     * The parent takes the format: products/{product_id}.
     * Supports products/- to retrieve SKUs for all products.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. Resource name of the reseller.
     * Format: accounts/{account_id}.
     *
     * Generated from protobuf field <code>string account = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $account = '';
    /**
     * Optional. Requested page size. Server might return fewer results than requested.
     * If unspecified, at most 100 SKUs will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. A token identifying a page of results, if other than the first one.
     * Optional.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. The BCP-47 language code, such as "en-US".  If specified, the
     * response will be localized to the corresponding language code. Default is
     * "en-US".
     *
     * Generated from protobuf field <code>string language_code = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Product for which to list SKUs.
     *           The parent takes the format: products/{product_id}.
     *           Supports products/- to retrieve SKUs for all products.
     *     @type string $account
     *           Required. Resource name of the reseller.
     *           Format: accounts/{account_id}.
     *     @type int $page_size
     *           Optional. Requested page size. Server might return fewer results than requested.
     *           If unspecified, at most 100 SKUs will be returned.
     *           The maximum value is 1000; values above 1000 will be coerced to 1000.
     *     @type string $page_token
     *           Optional. A token identifying a page of results, if other than the first one.
     *           Optional.
     *     @type string $language_code
     *           Optional. The BCP-47 language code, such as "en-US".  If specified, the
     *           response will be localized to the corresponding language code. Default is
     *           "en-US".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Product for which to list SKUs.
     * The parent takes the format: products/{product_id}.
     * Supports products/- to retrieve SKUs for all products.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Product for which to list SKUs.
     * The parent takes the format: products/{product_id}.
     * Supports products/- to retrieve SKUs for all products.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Resource name of the reseller.
     * Format: accounts/{account_id}.
     *
     * Generated from protobuf field <code>string account = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Required. Resource name of the reseller.
     * Format: accounts/{account_id}.
     *
     * Generated from protobuf field <code>string account = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->account = $var;

        return $this;
    }

    /**
     * Optional. Requested page size. Server might return fewer results than requested.
     * If unspecified, at most 100 SKUs will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Requested page size. Server might return fewer results than requested.
     * If unspecified, at most 100 SKUs will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A token identifying a page of results, if other than the first one.
     * Optional.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A token identifying a page of results, if other than the first one.
     * Optional.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. The BCP-47 language code, such as "en-US".  If specified, the
     * response will be localized to the corresponding language code. Default is
     * "en-US".
     *
     * Generated from protobuf field <code>string language_code = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The BCP-47 language code, such as "en-US".  If specified, the
     * response will be localized to the corresponding language code. Default is
     * "en-US".
     *
     * Generated from protobuf field <code>string language_code = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

