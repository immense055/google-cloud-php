<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RollbackNodePoolUpgradeRequest rollbacks the previously Aborted or Failed
 * NodePool upgrade. This will be an no-op if the last upgrade successfully
 * completed.
 *
 * Generated from protobuf message <code>google.container.v1.RollbackNodePoolUpgradeRequest</code>
 */
class RollbackNodePoolUpgradeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     */
    private $project_id = '';
    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides. This field has been deprecated and replaced by the name
     * field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     */
    private $zone = '';
    /**
     * Deprecated. The name of the cluster to rollback.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     */
    private $cluster_id = '';
    /**
     * Deprecated. The name of the node pool to rollback.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string node_pool_id = 4 [deprecated = true];</code>
     */
    private $node_pool_id = '';
    /**
     * The name (project, location, cluster, node pool id) of the node poll to
     * rollback upgrade.
     * Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;`.
     *
     * Generated from protobuf field <code>string name = 6;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Deprecated. The Google Developers Console [project ID or project
     *           number](https://support.google.com/cloud/answer/6158840).
     *           This field has been deprecated and replaced by the name field.
     *     @type string $zone
     *           Deprecated. The name of the Google Compute Engine
     *           [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     *           cluster resides. This field has been deprecated and replaced by the name
     *           field.
     *     @type string $cluster_id
     *           Deprecated. The name of the cluster to rollback.
     *           This field has been deprecated and replaced by the name field.
     *     @type string $node_pool_id
     *           Deprecated. The name of the node pool to rollback.
     *           This field has been deprecated and replaced by the name field.
     *     @type string $name
     *           The name (project, location, cluster, node pool id) of the node poll to
     *           rollback upgrade.
     *           Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides. This field has been deprecated and replaced by the name
     * field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides. This field has been deprecated and replaced by the name
     * field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the cluster to rollback.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * Deprecated. The name of the cluster to rollback.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the node pool to rollback.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string node_pool_id = 4 [deprecated = true];</code>
     * @return string
     */
    public function getNodePoolId()
    {
        return $this->node_pool_id;
    }

    /**
     * Deprecated. The name of the node pool to rollback.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string node_pool_id = 4 [deprecated = true];</code>
     * @param string $var
     * @return $this
     */
    public function setNodePoolId($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_pool_id = $var;

        return $this;
    }

    /**
     * The name (project, location, cluster, node pool id) of the node poll to
     * rollback upgrade.
     * Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;`.
     *
     * Generated from protobuf field <code>string name = 6;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name (project, location, cluster, node pool id) of the node poll to
     * rollback upgrade.
     * Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;`.
     *
     * Generated from protobuf field <code>string name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

