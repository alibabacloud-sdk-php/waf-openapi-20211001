<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudResourceShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example waf_v3prepaid_public_cn-***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $listenShrink;

    /**
     * @example 123
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @var string
     */
    public $redirectShrink;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'instanceId'                     => 'InstanceId',
        'listenShrink'                   => 'Listen',
        'ownerUserId'                    => 'OwnerUserId',
        'redirectShrink'                 => 'Redirect',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->listenShrink) {
            $res['Listen'] = $this->listenShrink;
        }
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->redirectShrink) {
            $res['Redirect'] = $this->redirectShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudResourceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Listen'])) {
            $model->listenShrink = $map['Listen'];
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['Redirect'])) {
            $model->redirectShrink = $map['Redirect'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        return $model;
    }
}
