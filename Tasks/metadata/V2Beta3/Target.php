<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/target.proto

namespace GPBMetadata\Google\Cloud\Tasks\V2Beta3;

class Target
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

\'google/cloud/tasks/v2beta3/target.protogoogle.cloud.tasks.v2beta3"�
HttpRequest
url (	;
http_method (2&.google.cloud.tasks.v2beta3.HttpMethodE
headers (24.google.cloud.tasks.v2beta3.HttpRequest.HeadersEntry
body (=
oauth_token (2&.google.cloud.tasks.v2beta3.OAuthTokenH ;

oidc_token (2%.google.cloud.tasks.v2beta3.OidcTokenH .
HeadersEntry
key (	
value (	:8B
authorization_header"g
AppEngineHttpQueueQ
app_engine_routing_override (2,.google.cloud.tasks.v2beta3.AppEngineRouting"�
AppEngineHttpRequest;
http_method (2&.google.cloud.tasks.v2beta3.HttpMethodH
app_engine_routing (2,.google.cloud.tasks.v2beta3.AppEngineRouting
relative_uri (	N
headers (2=.google.cloud.tasks.v2beta3.AppEngineHttpRequest.HeadersEntry
body (.
HeadersEntry
key (	
value (	:8"T
AppEngineRouting
service (	
version (	
instance (	
host (	":

OAuthToken
service_account_email (	
scope (	"<
	OidcToken
service_account_email (	
audience (	*s

HttpMethod
HTTP_METHOD_UNSPECIFIED 
POST
GET
HEAD
PUT

DELETE	
PATCH
OPTIONSBp
com.google.cloud.tasks.v2beta3BTargetProtoPZ?google.golang.org/genproto/googleapis/cloud/tasks/v2beta3;tasksbproto3'
        , true);

        static::$is_initialized = true;
    }
}

