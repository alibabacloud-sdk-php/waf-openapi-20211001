<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeApisecStatisticsRequest extends Model
{
    /**
     * @description The ID of the hybrid cloud cluster.
     *
     * >  This parameter is available only in hybrid cloud scenarios. You can call the [DescribeHybridCloudClusters](https://help.aliyun.com/document_detail/2849376.html) operation to query hybrid cloud clusters.
     *
     * @example 428
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @description The region in which the Web Application Firewall (WAF) instance is deployed. Valid values:
     *
     * **cn-hangzhou**: Chinese mainland
     * **ap-southeast-1**: outside the Chinese mainland
     *
     * This parameter is required.
     *
     * @example waf_v2_public_cn-uax***b09
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the WAF instance. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland.
     *   **ap-southeast-1**: outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-aek2***uwbs5q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @description The type of the statistics. Valid values:
     *
     *   **risk**: risk-related statistics.
     *   **event**: event-related statistics.
     *
     * @example asset_num
     *
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $userStatusList;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'startTime' => 'StartTime',
        'type' => 'Type',
        'userStatusList' => 'UserStatusList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userStatusList) {
            $res['UserStatusList'] = $this->userStatusList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApisecStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserStatusList'])) {
            if (!empty($map['UserStatusList'])) {
                $model->userStatusList = $map['UserStatusList'];
            }
        }

        return $model;
    }
}
