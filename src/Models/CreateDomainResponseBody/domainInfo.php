<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateDomainResponseBody;

use AlibabaCloud\Tea\Model;

class domainInfo extends Model
{
    /**
     * @description $.parameters[3].schema.enumValueTitles
     *
     * @example xxxxxwww.****.com
     *
     * @var string
     */
    public $cname;

    /**
     * @description $.parameters[4].schema.properties.Backends.items.description
     *
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $domain;
    protected $_name = [
        'cname'  => 'Cname',
        'domain' => 'Domain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}
