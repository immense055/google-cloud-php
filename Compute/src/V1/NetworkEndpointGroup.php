<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a collection of network endpoints.
 * A network endpoint group (NEG) defines how a set of endpoints should be reached, whether they are reachable, and where they are located. For more information about using NEGs, see  Setting up external HTTP(S) Load Balancing with internet NEGs,  Setting up zonal NEGs, or  Setting up external HTTP(S) Load Balancing with serverless NEGs. (== resource_for {$api_version}.networkEndpointGroups ==) (== resource_for {$api_version}.globalNetworkEndpointGroups ==) (== resource_for {$api_version}.regionNetworkEndpointGroups ==)
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NetworkEndpointGroup</code>
 */
class NetworkEndpointGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Metadata defined as annotations on the network endpoint group.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 112032548;</code>
     */
    private $annotations;
    /**
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkEndpointGroupAppEngine app_engine = 72353312;</code>
     */
    private $app_engine = null;
    /**
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkEndpointGroupCloudFunction cloud_function = 251458210;</code>
     */
    private $cloud_function = null;
    /**
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkEndpointGroupCloudRun cloud_run = 111060353;</code>
     */
    private $cloud_run = null;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = '';
    /**
     * The default port used if the port number is not specified in the network endpoint.
     *
     * Generated from protobuf field <code>int32 default_port = 154942399;</code>
     */
    private $default_port = 0;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 154502140;</code>
     */
    private $description = '';
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     */
    private $id = '';
    /**
     * [Output Only] Type of the resource. Always compute#networkEndpointGroup for network endpoint group.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    private $kind = '';
    /**
     * Name of the resource; provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = '';
    /**
     * The URL of the network to which all network endpoints in the NEG belong. Uses "default" project network if unspecified.
     *
     * Generated from protobuf field <code>string network = 232872494;</code>
     */
    private $network = '';
    /**
     * Type of network endpoints in this network endpoint group. Can be one of GCE_VM_IP_PORT, NON_GCP_PRIVATE_IP_PORT, INTERNET_FQDN_PORT, INTERNET_IP_PORT, or SERVERLESS.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkEndpointGroup.NetworkEndpointType network_endpoint_type = 118301523;</code>
     */
    private $network_endpoint_type = 0;
    /**
     * [Output Only] The URL of the region where the network endpoint group is located.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     */
    private $region = '';
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     */
    private $self_link = '';
    /**
     * [Output only] Number of network endpoints in the network endpoint group.
     *
     * Generated from protobuf field <code>int32 size = 3530753;</code>
     */
    private $size = 0;
    /**
     * Optional URL of the subnetwork to which all network endpoints in the NEG belong.
     *
     * Generated from protobuf field <code>string subnetwork = 39392238;</code>
     */
    private $subnetwork = '';
    /**
     * [Output Only] The URL of the zone where the network endpoint group is located.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     */
    private $zone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Metadata defined as annotations on the network endpoint group.
     *     @type \Google\Cloud\Compute\V1\NetworkEndpointGroupAppEngine $app_engine
     *           Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *     @type \Google\Cloud\Compute\V1\NetworkEndpointGroupCloudFunction $cloud_function
     *           Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *     @type \Google\Cloud\Compute\V1\NetworkEndpointGroupCloudRun $cloud_run
     *           Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type int $default_port
     *           The default port used if the port number is not specified in the network endpoint.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#networkEndpointGroup for network endpoint group.
     *     @type string $name
     *           Name of the resource; provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type string $network
     *           The URL of the network to which all network endpoints in the NEG belong. Uses "default" project network if unspecified.
     *     @type int $network_endpoint_type
     *           Type of network endpoints in this network endpoint group. Can be one of GCE_VM_IP_PORT, NON_GCP_PRIVATE_IP_PORT, INTERNET_FQDN_PORT, INTERNET_IP_PORT, or SERVERLESS.
     *     @type string $region
     *           [Output Only] The URL of the region where the network endpoint group is located.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type int $size
     *           [Output only] Number of network endpoints in the network endpoint group.
     *     @type string $subnetwork
     *           Optional URL of the subnetwork to which all network endpoints in the NEG belong.
     *     @type string $zone
     *           [Output Only] The URL of the zone where the network endpoint group is located.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Metadata defined as annotations on the network endpoint group.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 112032548;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Metadata defined as annotations on the network endpoint group.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 112032548;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkEndpointGroupAppEngine app_engine = 72353312;</code>
     * @return \Google\Cloud\Compute\V1\NetworkEndpointGroupAppEngine
     */
    public function getAppEngine()
    {
        return isset($this->app_engine) ? $this->app_engine : null;
    }

    public function hasAppEngine()
    {
        return isset($this->app_engine);
    }

    public function clearAppEngine()
    {
        unset($this->app_engine);
    }

    /**
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkEndpointGroupAppEngine app_engine = 72353312;</code>
     * @param \Google\Cloud\Compute\V1\NetworkEndpointGroupAppEngine $var
     * @return $this
     */
    public function setAppEngine($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\NetworkEndpointGroupAppEngine::class);
        $this->app_engine = $var;

        return $this;
    }

    /**
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkEndpointGroupCloudFunction cloud_function = 251458210;</code>
     * @return \Google\Cloud\Compute\V1\NetworkEndpointGroupCloudFunction
     */
    public function getCloudFunction()
    {
        return isset($this->cloud_function) ? $this->cloud_function : null;
    }

    public function hasCloudFunction()
    {
        return isset($this->cloud_function);
    }

    public function clearCloudFunction()
    {
        unset($this->cloud_function);
    }

    /**
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkEndpointGroupCloudFunction cloud_function = 251458210;</code>
     * @param \Google\Cloud\Compute\V1\NetworkEndpointGroupCloudFunction $var
     * @return $this
     */
    public function setCloudFunction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\NetworkEndpointGroupCloudFunction::class);
        $this->cloud_function = $var;

        return $this;
    }

    /**
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkEndpointGroupCloudRun cloud_run = 111060353;</code>
     * @return \Google\Cloud\Compute\V1\NetworkEndpointGroupCloudRun
     */
    public function getCloudRun()
    {
        return isset($this->cloud_run) ? $this->cloud_run : null;
    }

    public function hasCloudRun()
    {
        return isset($this->cloud_run);
    }

    public function clearCloudRun()
    {
        unset($this->cloud_run);
    }

    /**
     * Only valid when networkEndpointType is "SERVERLESS". Only one of cloudRun, appEngine or cloudFunction may be set.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkEndpointGroupCloudRun cloud_run = 111060353;</code>
     * @param \Google\Cloud\Compute\V1\NetworkEndpointGroupCloudRun $var
     * @return $this
     */
    public function setCloudRun($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\NetworkEndpointGroupCloudRun::class);
        $this->cloud_run = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return $this->creation_timestamp;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * The default port used if the port number is not specified in the network endpoint.
     *
     * Generated from protobuf field <code>int32 default_port = 154942399;</code>
     * @return int
     */
    public function getDefaultPort()
    {
        return $this->default_port;
    }

    /**
     * The default port used if the port number is not specified in the network endpoint.
     *
     * Generated from protobuf field <code>int32 default_port = 154942399;</code>
     * @param int $var
     * @return $this
     */
    public function setDefaultPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->default_port = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 154502140;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 154502140;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#networkEndpointGroup for network endpoint group.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * [Output Only] Type of the resource. Always compute#networkEndpointGroup for network endpoint group.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Name of the resource; provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the resource; provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The URL of the network to which all network endpoints in the NEG belong. Uses "default" project network if unspecified.
     *
     * Generated from protobuf field <code>string network = 232872494;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * The URL of the network to which all network endpoints in the NEG belong. Uses "default" project network if unspecified.
     *
     * Generated from protobuf field <code>string network = 232872494;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Type of network endpoints in this network endpoint group. Can be one of GCE_VM_IP_PORT, NON_GCP_PRIVATE_IP_PORT, INTERNET_FQDN_PORT, INTERNET_IP_PORT, or SERVERLESS.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkEndpointGroup.NetworkEndpointType network_endpoint_type = 118301523;</code>
     * @return int
     */
    public function getNetworkEndpointType()
    {
        return $this->network_endpoint_type;
    }

    /**
     * Type of network endpoints in this network endpoint group. Can be one of GCE_VM_IP_PORT, NON_GCP_PRIVATE_IP_PORT, INTERNET_FQDN_PORT, INTERNET_IP_PORT, or SERVERLESS.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkEndpointGroup.NetworkEndpointType network_endpoint_type = 118301523;</code>
     * @param int $var
     * @return $this
     */
    public function setNetworkEndpointType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\NetworkEndpointGroup\NetworkEndpointType::class);
        $this->network_endpoint_type = $var;

        return $this;
    }

    /**
     * [Output Only] The URL of the region where the network endpoint group is located.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * [Output Only] The URL of the region where the network endpoint group is located.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return $this->self_link;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * [Output only] Number of network endpoints in the network endpoint group.
     *
     * Generated from protobuf field <code>int32 size = 3530753;</code>
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * [Output only] Number of network endpoints in the network endpoint group.
     *
     * Generated from protobuf field <code>int32 size = 3530753;</code>
     * @param int $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->size = $var;

        return $this;
    }

    /**
     * Optional URL of the subnetwork to which all network endpoints in the NEG belong.
     *
     * Generated from protobuf field <code>string subnetwork = 39392238;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return $this->subnetwork;
    }

    /**
     * Optional URL of the subnetwork to which all network endpoints in the NEG belong.
     *
     * Generated from protobuf field <code>string subnetwork = 39392238;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

    /**
     * [Output Only] The URL of the zone where the network endpoint group is located.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * [Output Only] The URL of the zone where the network endpoint group is located.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

