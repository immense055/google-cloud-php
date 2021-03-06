<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message containing Cloud CDN configuration for a backend bucket.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.BackendBucketCdnPolicy</code>
 */
class BackendBucketCdnPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies the cache setting for all responses from this backend. The possible values are:
     * USE_ORIGIN_HEADERS Requires the origin to set valid caching headers to cache content. Responses without these headers will not be cached at Google's edge, and will require a full trip to the origin on every request, potentially impacting performance and increasing load on the origin server.
     * FORCE_CACHE_ALL Cache all content, ignoring any "private", "no-store" or "no-cache" directives in Cache-Control response headers. Warning: this may result in Cloud CDN caching private, per-user (user identifiable) content.
     * CACHE_ALL_STATIC Automatically cache static content, including common image formats, media (video and audio), and web assets (JavaScript and CSS). Requests and responses that are marked as uncacheable, as well as dynamic content (including HTML), will not be cached.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.BackendBucketCdnPolicy.CacheMode cache_mode = 28877888;</code>
     */
    private $cache_mode = 0;
    /**
     * Specifies a separate client (e.g. browser client) TTL, separate from the TTL for Cloud CDN's edge caches. Leaving this empty will use the same cache TTL for both Cloud CDN and the client-facing response. The maximum allowed value is 86400s (1 day).
     *
     * Generated from protobuf field <code>int32 client_ttl = 29034360;</code>
     */
    private $client_ttl = 0;
    /**
     * Specifies the default TTL for cached content served by this origin for responses that do not have an existing valid TTL (max-age or s-max-age). Setting a TTL of "0" means "always revalidate". The value of defaultTTL cannot be set to a value greater than that of maxTTL, but can be equal. When the cacheMode is set to FORCE_CACHE_ALL, the defaultTTL will overwrite the TTL set in all responses. The maximum allowed value is 31,622,400s (1 year), noting that infrequently accessed objects may be evicted from the cache before the defined TTL.
     *
     * Generated from protobuf field <code>int32 default_ttl = 100253422;</code>
     */
    private $default_ttl = 0;
    /**
     * Specifies the maximum allowed TTL for cached content served by this origin. Cache directives that attempt to set a max-age or s-maxage higher than this, or an Expires header more than maxTTL seconds in the future will be capped at the value of maxTTL, as if it were the value of an s-maxage Cache-Control directive. Headers sent to the client will not be modified. Setting a TTL of "0" means "always revalidate". The maximum allowed value is 31,622,400s (1 year), noting that infrequently accessed objects may be evicted from the cache before the defined TTL.
     *
     * Generated from protobuf field <code>int32 max_ttl = 39142545;</code>
     */
    private $max_ttl = 0;
    /**
     * Maximum number of seconds the response to a signed URL request will be considered fresh. After this time period, the response will be revalidated before being served. Defaults to 1hr (3600s). When serving responses to signed URL requests, Cloud CDN will internally behave as though all responses from this backend had a "Cache-Control: public, max-age=[TTL]" header, regardless of any existing Cache-Control header. The actual headers served in responses will not be altered.
     *
     * Generated from protobuf field <code>string signed_url_cache_max_age_sec = 939078;</code>
     */
    private $signed_url_cache_max_age_sec = '';
    /**
     * [Output Only] Names of the keys for signing request URLs.
     *
     * Generated from protobuf field <code>repeated string signed_url_key_names = 103413429;</code>
     */
    private $signed_url_key_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $cache_mode
     *           Specifies the cache setting for all responses from this backend. The possible values are:
     *           USE_ORIGIN_HEADERS Requires the origin to set valid caching headers to cache content. Responses without these headers will not be cached at Google's edge, and will require a full trip to the origin on every request, potentially impacting performance and increasing load on the origin server.
     *           FORCE_CACHE_ALL Cache all content, ignoring any "private", "no-store" or "no-cache" directives in Cache-Control response headers. Warning: this may result in Cloud CDN caching private, per-user (user identifiable) content.
     *           CACHE_ALL_STATIC Automatically cache static content, including common image formats, media (video and audio), and web assets (JavaScript and CSS). Requests and responses that are marked as uncacheable, as well as dynamic content (including HTML), will not be cached.
     *     @type int $client_ttl
     *           Specifies a separate client (e.g. browser client) TTL, separate from the TTL for Cloud CDN's edge caches. Leaving this empty will use the same cache TTL for both Cloud CDN and the client-facing response. The maximum allowed value is 86400s (1 day).
     *     @type int $default_ttl
     *           Specifies the default TTL for cached content served by this origin for responses that do not have an existing valid TTL (max-age or s-max-age). Setting a TTL of "0" means "always revalidate". The value of defaultTTL cannot be set to a value greater than that of maxTTL, but can be equal. When the cacheMode is set to FORCE_CACHE_ALL, the defaultTTL will overwrite the TTL set in all responses. The maximum allowed value is 31,622,400s (1 year), noting that infrequently accessed objects may be evicted from the cache before the defined TTL.
     *     @type int $max_ttl
     *           Specifies the maximum allowed TTL for cached content served by this origin. Cache directives that attempt to set a max-age or s-maxage higher than this, or an Expires header more than maxTTL seconds in the future will be capped at the value of maxTTL, as if it were the value of an s-maxage Cache-Control directive. Headers sent to the client will not be modified. Setting a TTL of "0" means "always revalidate". The maximum allowed value is 31,622,400s (1 year), noting that infrequently accessed objects may be evicted from the cache before the defined TTL.
     *     @type string $signed_url_cache_max_age_sec
     *           Maximum number of seconds the response to a signed URL request will be considered fresh. After this time period, the response will be revalidated before being served. Defaults to 1hr (3600s). When serving responses to signed URL requests, Cloud CDN will internally behave as though all responses from this backend had a "Cache-Control: public, max-age=[TTL]" header, regardless of any existing Cache-Control header. The actual headers served in responses will not be altered.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $signed_url_key_names
     *           [Output Only] Names of the keys for signing request URLs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies the cache setting for all responses from this backend. The possible values are:
     * USE_ORIGIN_HEADERS Requires the origin to set valid caching headers to cache content. Responses without these headers will not be cached at Google's edge, and will require a full trip to the origin on every request, potentially impacting performance and increasing load on the origin server.
     * FORCE_CACHE_ALL Cache all content, ignoring any "private", "no-store" or "no-cache" directives in Cache-Control response headers. Warning: this may result in Cloud CDN caching private, per-user (user identifiable) content.
     * CACHE_ALL_STATIC Automatically cache static content, including common image formats, media (video and audio), and web assets (JavaScript and CSS). Requests and responses that are marked as uncacheable, as well as dynamic content (including HTML), will not be cached.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.BackendBucketCdnPolicy.CacheMode cache_mode = 28877888;</code>
     * @return int
     */
    public function getCacheMode()
    {
        return $this->cache_mode;
    }

    /**
     * Specifies the cache setting for all responses from this backend. The possible values are:
     * USE_ORIGIN_HEADERS Requires the origin to set valid caching headers to cache content. Responses without these headers will not be cached at Google's edge, and will require a full trip to the origin on every request, potentially impacting performance and increasing load on the origin server.
     * FORCE_CACHE_ALL Cache all content, ignoring any "private", "no-store" or "no-cache" directives in Cache-Control response headers. Warning: this may result in Cloud CDN caching private, per-user (user identifiable) content.
     * CACHE_ALL_STATIC Automatically cache static content, including common image formats, media (video and audio), and web assets (JavaScript and CSS). Requests and responses that are marked as uncacheable, as well as dynamic content (including HTML), will not be cached.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.BackendBucketCdnPolicy.CacheMode cache_mode = 28877888;</code>
     * @param int $var
     * @return $this
     */
    public function setCacheMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\BackendBucketCdnPolicy\CacheMode::class);
        $this->cache_mode = $var;

        return $this;
    }

    /**
     * Specifies a separate client (e.g. browser client) TTL, separate from the TTL for Cloud CDN's edge caches. Leaving this empty will use the same cache TTL for both Cloud CDN and the client-facing response. The maximum allowed value is 86400s (1 day).
     *
     * Generated from protobuf field <code>int32 client_ttl = 29034360;</code>
     * @return int
     */
    public function getClientTtl()
    {
        return $this->client_ttl;
    }

    /**
     * Specifies a separate client (e.g. browser client) TTL, separate from the TTL for Cloud CDN's edge caches. Leaving this empty will use the same cache TTL for both Cloud CDN and the client-facing response. The maximum allowed value is 86400s (1 day).
     *
     * Generated from protobuf field <code>int32 client_ttl = 29034360;</code>
     * @param int $var
     * @return $this
     */
    public function setClientTtl($var)
    {
        GPBUtil::checkInt32($var);
        $this->client_ttl = $var;

        return $this;
    }

    /**
     * Specifies the default TTL for cached content served by this origin for responses that do not have an existing valid TTL (max-age or s-max-age). Setting a TTL of "0" means "always revalidate". The value of defaultTTL cannot be set to a value greater than that of maxTTL, but can be equal. When the cacheMode is set to FORCE_CACHE_ALL, the defaultTTL will overwrite the TTL set in all responses. The maximum allowed value is 31,622,400s (1 year), noting that infrequently accessed objects may be evicted from the cache before the defined TTL.
     *
     * Generated from protobuf field <code>int32 default_ttl = 100253422;</code>
     * @return int
     */
    public function getDefaultTtl()
    {
        return $this->default_ttl;
    }

    /**
     * Specifies the default TTL for cached content served by this origin for responses that do not have an existing valid TTL (max-age or s-max-age). Setting a TTL of "0" means "always revalidate". The value of defaultTTL cannot be set to a value greater than that of maxTTL, but can be equal. When the cacheMode is set to FORCE_CACHE_ALL, the defaultTTL will overwrite the TTL set in all responses. The maximum allowed value is 31,622,400s (1 year), noting that infrequently accessed objects may be evicted from the cache before the defined TTL.
     *
     * Generated from protobuf field <code>int32 default_ttl = 100253422;</code>
     * @param int $var
     * @return $this
     */
    public function setDefaultTtl($var)
    {
        GPBUtil::checkInt32($var);
        $this->default_ttl = $var;

        return $this;
    }

    /**
     * Specifies the maximum allowed TTL for cached content served by this origin. Cache directives that attempt to set a max-age or s-maxage higher than this, or an Expires header more than maxTTL seconds in the future will be capped at the value of maxTTL, as if it were the value of an s-maxage Cache-Control directive. Headers sent to the client will not be modified. Setting a TTL of "0" means "always revalidate". The maximum allowed value is 31,622,400s (1 year), noting that infrequently accessed objects may be evicted from the cache before the defined TTL.
     *
     * Generated from protobuf field <code>int32 max_ttl = 39142545;</code>
     * @return int
     */
    public function getMaxTtl()
    {
        return $this->max_ttl;
    }

    /**
     * Specifies the maximum allowed TTL for cached content served by this origin. Cache directives that attempt to set a max-age or s-maxage higher than this, or an Expires header more than maxTTL seconds in the future will be capped at the value of maxTTL, as if it were the value of an s-maxage Cache-Control directive. Headers sent to the client will not be modified. Setting a TTL of "0" means "always revalidate". The maximum allowed value is 31,622,400s (1 year), noting that infrequently accessed objects may be evicted from the cache before the defined TTL.
     *
     * Generated from protobuf field <code>int32 max_ttl = 39142545;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxTtl($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_ttl = $var;

        return $this;
    }

    /**
     * Maximum number of seconds the response to a signed URL request will be considered fresh. After this time period, the response will be revalidated before being served. Defaults to 1hr (3600s). When serving responses to signed URL requests, Cloud CDN will internally behave as though all responses from this backend had a "Cache-Control: public, max-age=[TTL]" header, regardless of any existing Cache-Control header. The actual headers served in responses will not be altered.
     *
     * Generated from protobuf field <code>string signed_url_cache_max_age_sec = 939078;</code>
     * @return string
     */
    public function getSignedUrlCacheMaxAgeSec()
    {
        return $this->signed_url_cache_max_age_sec;
    }

    /**
     * Maximum number of seconds the response to a signed URL request will be considered fresh. After this time period, the response will be revalidated before being served. Defaults to 1hr (3600s). When serving responses to signed URL requests, Cloud CDN will internally behave as though all responses from this backend had a "Cache-Control: public, max-age=[TTL]" header, regardless of any existing Cache-Control header. The actual headers served in responses will not be altered.
     *
     * Generated from protobuf field <code>string signed_url_cache_max_age_sec = 939078;</code>
     * @param string $var
     * @return $this
     */
    public function setSignedUrlCacheMaxAgeSec($var)
    {
        GPBUtil::checkString($var, True);
        $this->signed_url_cache_max_age_sec = $var;

        return $this;
    }

    /**
     * [Output Only] Names of the keys for signing request URLs.
     *
     * Generated from protobuf field <code>repeated string signed_url_key_names = 103413429;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSignedUrlKeyNames()
    {
        return $this->signed_url_key_names;
    }

    /**
     * [Output Only] Names of the keys for signing request URLs.
     *
     * Generated from protobuf field <code>repeated string signed_url_key_names = 103413429;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSignedUrlKeyNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->signed_url_key_names = $arr;

        return $this;
    }

}

