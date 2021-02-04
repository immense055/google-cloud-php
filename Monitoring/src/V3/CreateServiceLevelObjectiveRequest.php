<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `CreateServiceLevelObjective` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.CreateServiceLevelObjectiveRequest</code>
 */
class CreateServiceLevelObjectiveRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the parent `Service`. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/services/[SERVICE_ID]
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. The ServiceLevelObjective id to use for this
     * ServiceLevelObjective. If omitted, an id will be generated instead. Must
     * match the pattern `[a-z0-9\-]+`
     *
     * Generated from protobuf field <code>string service_level_objective_id = 3;</code>
     */
    private $service_level_objective_id = '';
    /**
     * Required. The `ServiceLevelObjective` to create.
     * The provided `name` will be respected if no `ServiceLevelObjective` exists
     * with this name.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ServiceLevelObjective service_level_objective = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $service_level_objective = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of the parent `Service`. The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]/services/[SERVICE_ID]
     *     @type string $service_level_objective_id
     *           Optional. The ServiceLevelObjective id to use for this
     *           ServiceLevelObjective. If omitted, an id will be generated instead. Must
     *           match the pattern `[a-z0-9\-]+`
     *     @type \Google\Cloud\Monitoring\V3\ServiceLevelObjective $service_level_objective
     *           Required. The `ServiceLevelObjective` to create.
     *           The provided `name` will be respected if no `ServiceLevelObjective` exists
     *           with this name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\ServiceService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the parent `Service`. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/services/[SERVICE_ID]
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the parent `Service`. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/services/[SERVICE_ID]
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
     * Optional. The ServiceLevelObjective id to use for this
     * ServiceLevelObjective. If omitted, an id will be generated instead. Must
     * match the pattern `[a-z0-9\-]+`
     *
     * Generated from protobuf field <code>string service_level_objective_id = 3;</code>
     * @return string
     */
    public function getServiceLevelObjectiveId()
    {
        return $this->service_level_objective_id;
    }

    /**
     * Optional. The ServiceLevelObjective id to use for this
     * ServiceLevelObjective. If omitted, an id will be generated instead. Must
     * match the pattern `[a-z0-9\-]+`
     *
     * Generated from protobuf field <code>string service_level_objective_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceLevelObjectiveId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_level_objective_id = $var;

        return $this;
    }

    /**
     * Required. The `ServiceLevelObjective` to create.
     * The provided `name` will be respected if no `ServiceLevelObjective` exists
     * with this name.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ServiceLevelObjective service_level_objective = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Monitoring\V3\ServiceLevelObjective
     */
    public function getServiceLevelObjective()
    {
        return isset($this->service_level_objective) ? $this->service_level_objective : null;
    }

    public function hasServiceLevelObjective()
    {
        return isset($this->service_level_objective);
    }

    public function clearServiceLevelObjective()
    {
        unset($this->service_level_objective);
    }

    /**
     * Required. The `ServiceLevelObjective` to create.
     * The provided `name` will be respected if no `ServiceLevelObjective` exists
     * with this name.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.ServiceLevelObjective service_level_objective = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Monitoring\V3\ServiceLevelObjective $var
     * @return $this
     */
    public function setServiceLevelObjective($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\ServiceLevelObjective::class);
        $this->service_level_objective = $var;

        return $this;
    }

}

