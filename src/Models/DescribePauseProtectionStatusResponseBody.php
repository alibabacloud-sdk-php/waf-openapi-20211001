<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribePauseProtectionStatusResponseBody extends Model
{
    /**
     * @description Indicates whether WAF protection is paused.
     *
     *   **0**: indicates that WAF protection is not paused. This is the default value.
     *   **1**: indicates that WAF protection is paused.
     *
     * @example 0
     *
     * @var int
     */
    public $pauseStatus;

    /**
     * @description The ID of the request.
     *
     * @example D7861F61-****-46CE-A47C-6B19****5EB0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pauseStatus' => 'PauseStatus',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pauseStatus) {
            $res['PauseStatus'] = $this->pauseStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePauseProtectionStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PauseStatus'])) {
            $model->pauseStatus = $map['PauseStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
