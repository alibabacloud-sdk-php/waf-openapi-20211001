<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClustersResponseBody;

use AlibabaCloud\Tea\Model;

class clusterInfos extends Model
{
    /**
     * @description The network access mode. Valid values:
     *
     *   **internet**: Internet access.
     *   **vpc**: internal network access by using Express Connect circuits.
     *
     * @example internet
     *
     * @var string
     */
    public $accessMode;

    /**
     * @description The region where the virtual private cloud (VPC) resides. Valid values:
     *
     *   **cn-hangzhou**: China (Hangzhou).
     *   **cn-beiijng**: China (Beijing).
     *   **cn-shanghai**: China (Shanghai).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $accessRegion;

    /**
     * @description The name of the cluster.
     *
     * @example test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The ID of the hybrid cloud cluster resource.
     *
     * @example hdbc-cluster-t1****a
     *
     * @var string
     */
    public $clusterResourceId;

    /**
     * @description The HTTP ports. The value is a string. If multiple ports are returned, the value is in the **port1,port2,port3** format.
     *
     * @example 80,8080
     *
     * @var string
     */
    public $httpPorts;

    /**
     * @description The HTTPS ports. The value is a string. If multiple ports are returned, the value is in the **port1,port2,port3** format.
     *
     * @example 443,8443
     *
     * @var string
     */
    public $httpsPorts;

    /**
     * @description The ID of the cluster.
     *
     * @example 524**8
     *
     * @var int
     */
    public $id;

    /**
     * @description The number of protection nodes that can be added to the cluster.
     *
     * @example 1
     *
     * @var int
     */
    public $protectionServerCount;

    /**
     * @description The status of the proxy gateway. Valid values:
     *
     *   **on**: enabled.
     *   **off**: disabled.
     *
     * @example off
     *
     * @var string
     */
    public $proxyStatus;

    /**
     * @description The type of the cluster. Valid values:
     *
     *   **cname**: reverse proxy cluster.
     *   **service**: SDK-based traffic mirroring cluster.
     *
     * @example cname
     *
     * @var string
     */
    public $proxyType;

    /**
     * @description The remarks about the cluster.
     *
     * @example demo
     *
     * @var string
     */
    public $remark;

    /**
     * @description The configurations of the rule.
     *
     * @example {"enable":true,"param":{"breaker":{"duration":1,"failed":1,"recent_failed":1},"disable_protect":false,"max_request_body_len":1,"timeout":1}}
     *
     * @var string
     */
    public $ruleConfig;

    /**
     * @description The status of manual bypass. Valid values:
     *
     *   **on**: enabled.
     *   **off**: disabled.
     *
     * @example off
     *
     * @var string
     */
    public $ruleStatus;

    /**
     * @description The type of the rule. Valid value:
     *
     *   **bypass**: Requests are allowed without security checks.
     *
     * @example bypass
     *
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'accessMode' => 'AccessMode',
        'accessRegion' => 'AccessRegion',
        'clusterName' => 'ClusterName',
        'clusterResourceId' => 'ClusterResourceId',
        'httpPorts' => 'HttpPorts',
        'httpsPorts' => 'HttpsPorts',
        'id' => 'Id',
        'protectionServerCount' => 'ProtectionServerCount',
        'proxyStatus' => 'ProxyStatus',
        'proxyType' => 'ProxyType',
        'remark' => 'Remark',
        'ruleConfig' => 'RuleConfig',
        'ruleStatus' => 'RuleStatus',
        'ruleType' => 'RuleType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessMode) {
            $res['AccessMode'] = $this->accessMode;
        }
        if (null !== $this->accessRegion) {
            $res['AccessRegion'] = $this->accessRegion;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterResourceId) {
            $res['ClusterResourceId'] = $this->clusterResourceId;
        }
        if (null !== $this->httpPorts) {
            $res['HttpPorts'] = $this->httpPorts;
        }
        if (null !== $this->httpsPorts) {
            $res['HttpsPorts'] = $this->httpsPorts;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->protectionServerCount) {
            $res['ProtectionServerCount'] = $this->protectionServerCount;
        }
        if (null !== $this->proxyStatus) {
            $res['ProxyStatus'] = $this->proxyStatus;
        }
        if (null !== $this->proxyType) {
            $res['ProxyType'] = $this->proxyType;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
     * @return clusterInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessMode'])) {
            $model->accessMode = $map['AccessMode'];
        }
        if (isset($map['AccessRegion'])) {
            $model->accessRegion = $map['AccessRegion'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterResourceId'])) {
            $model->clusterResourceId = $map['ClusterResourceId'];
        }
        if (isset($map['HttpPorts'])) {
            $model->httpPorts = $map['HttpPorts'];
        }
        if (isset($map['HttpsPorts'])) {
            $model->httpsPorts = $map['HttpsPorts'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ProtectionServerCount'])) {
            $model->protectionServerCount = $map['ProtectionServerCount'];
        }
        if (isset($map['ProxyStatus'])) {
            $model->proxyStatus = $map['ProxyStatus'];
        }
        if (isset($map['ProxyType'])) {
            $model->proxyType = $map['ProxyType'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
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
