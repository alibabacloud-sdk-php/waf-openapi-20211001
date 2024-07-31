<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsResponseBody\accessPortDetails;

use AlibabaCloud\Tea\Model;

class certificates extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $appliedType;

    /**
     * @example 123-cn-hangzhou
     *
     * @var string
     */
    public $certificateId;

    /**
     * @example cert-name1
     *
     * @var string
     */
    public $certificateName;
    protected $_name = [
        'appliedType'     => 'AppliedType',
        'certificateId'   => 'CertificateId',
        'certificateName' => 'CertificateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appliedType) {
            $res['AppliedType'] = $this->appliedType;
        }
        if (null !== $this->certificateId) {
            $res['CertificateId'] = $this->certificateId;
        }
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppliedType'])) {
            $model->appliedType = $map['AppliedType'];
        }
        if (isset($map['CertificateId'])) {
            $model->certificateId = $map['CertificateId'];
        }
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }

        return $model;
    }
}
