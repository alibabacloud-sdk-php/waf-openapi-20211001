<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceGroupResponseBody\group;
use AlibabaCloud\Tea\Model;

class DescribeDefenseResourceGroupResponseBody extends Model
{
    /**
     * @var group
     */
    public $group;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'group'     => 'Group',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->group) {
            $res['Group'] = null !== $this->group ? $this->group->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDefenseResourceGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Group'])) {
            $model->group = group::fromMap($map['Group']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
