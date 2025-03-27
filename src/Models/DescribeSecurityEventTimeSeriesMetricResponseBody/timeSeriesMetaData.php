<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricResponseBody\timeSeriesMetaData\dateRange;

class timeSeriesMetaData extends Model
{
    /**
     * @var string
     */
    public $aggregateInterval;

    /**
     * @var dateRange
     */
    public $dateRange;

    /**
     * @var string
     */
    public $units;
    protected $_name = [
        'aggregateInterval' => 'AggregateInterval',
        'dateRange' => 'DateRange',
        'units' => 'Units',
    ];

    public function validate()
    {
        if (null !== $this->dateRange) {
            $this->dateRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregateInterval) {
            $res['AggregateInterval'] = $this->aggregateInterval;
        }

        if (null !== $this->dateRange) {
            $res['DateRange'] = null !== $this->dateRange ? $this->dateRange->toArray($noStream) : $this->dateRange;
        }

        if (null !== $this->units) {
            $res['Units'] = $this->units;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregateInterval'])) {
            $model->aggregateInterval = $map['AggregateInterval'];
        }

        if (isset($map['DateRange'])) {
            $model->dateRange = dateRange::fromMap($map['DateRange']);
        }

        if (isset($map['Units'])) {
            $model->units = $map['Units'];
        }

        return $model;
    }
}
