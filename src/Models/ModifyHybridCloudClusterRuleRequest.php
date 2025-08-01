<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyHybridCloudClusterRuleRequest extends Model
{
    /**
     * @description The ID of the hybrid cloud cluster.
     *
     * @example 1018
     *
     * @var int
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterRuleResourceId;

    /**
     * @description The ID of the WAF instance.
     *
     * >  You can call the DescribeInstanceInfo operation to query the ID of the WAF instance.[](~~140857~~)
     *
     * This parameter is required.
     *
     * @example waf-cn-n6w***x52m
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region of the WAF instance. Valid value:
     *
     *   **cn-hangzhou**: Chinese mainland.
     *   **ap-southeast-1**: Outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The configuration of the rule.
     *
     * @example {\\"check_mode\\":\\"part\\",\\"include\\":{\\"exact\\":[],\\"regex\\":[]}}
     *
     * @var string
     */
    public $ruleConfig;

    /**
     * @description The status of the rule. Valid values:
     *
     *   **on**: enables the rule.
     *   **off**: disables the rule.
     *
     * @example on
     *
     * @var string
     */
    public $ruleStatus;

    /**
     * @description The type of the rule. Valid values:
     *
     *   **pullin**: The traffic redirection rule.
     *
     * @example pullin
     *
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterRuleResourceId' => 'ClusterRuleResourceId',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'ruleConfig' => 'RuleConfig',
        'ruleStatus' => 'RuleStatus',
        'ruleType' => 'RuleType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterRuleResourceId) {
            $res['ClusterRuleResourceId'] = $this->clusterRuleResourceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->ruleConfig) {
            $res['RuleConfig'] = $this->ruleConfig;
        }
        if (null !== $this->ruleStatus) {
            $res['RuleStatus'] = $this->ruleStatus;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHybridCloudClusterRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterRuleResourceId'])) {
            $model->clusterRuleResourceId = $map['ClusterRuleResourceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['RuleConfig'])) {
            $model->ruleConfig = $map['RuleConfig'];
        }
        if (isset($map['RuleStatus'])) {
            $model->ruleStatus = $map['RuleStatus'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
