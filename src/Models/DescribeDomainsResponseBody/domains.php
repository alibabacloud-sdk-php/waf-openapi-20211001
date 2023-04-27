<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainsResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainsResponseBody\domains\backeds;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDomainsResponseBody\domains\listenPorts;
use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @var backeds
     */
    public $backeds;

    /**
     * @example xxxxxcvdaf.****.com
     *
     * @var string
     */
    public $cname;

    /**
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @var listenPorts
     */
    public $listenPorts;

    /**
     * @description 阿里云资源组ID。
     *
     * @example rg-acfmvtc5z52****
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'backeds'                        => 'Backeds',
        'cname'                          => 'Cname',
        'domain'                         => 'Domain',
        'listenPorts'                    => 'ListenPorts',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'status'                         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backeds) {
            $res['Backeds'] = null !== $this->backeds ? $this->backeds->toMap() : null;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->listenPorts) {
            $res['ListenPorts'] = null !== $this->listenPorts ? $this->listenPorts->toMap() : null;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Backeds'])) {
            $model->backeds = backeds::fromMap($map['Backeds']);
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ListenPorts'])) {
            $model->listenPorts = listenPorts::fromMap($map['ListenPorts']);
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
