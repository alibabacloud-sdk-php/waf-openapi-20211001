<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeApisecStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of APIs.
     *
     * @example /api/v1/login
     *
     * @var int
     */
    public $api;

    /**
     * @description The number of confirmed events.
     *
     * @example 10
     *
     * @var int
     */
    public $confirmed;

    /**
     * @description The number of domain names.
     *
     * @example a.aliyun.com
     *
     * @var int
     */
    public $domain;

    /**
     * @description The number of fixed risks.
     *
     * @example 0
     *
     * @var int
     */
    public $fixed;

    /**
     * @description The number of high-risk events.
     *
     * @example 10
     *
     * @var int
     */
    public $high;

    /**
     * @description The number of ignored risks.
     *
     * @example 0
     *
     * @var int
     */
    public $ignore;

    /**
     * @description The number of low-risk events.
     *
     * @example 10
     *
     * @var int
     */
    public $low;

    /**
     * @description The number of moderate-risk events.
     *
     * @example 10
     *
     * @var int
     */
    public $medium;

    /**
     * @description The number of events to be confirmed.
     *
     * @example 10
     *
     * @var int
     */
    public $toBeConfirmed;

    /**
     * @description The number of risks to be fixed.
     *
     * @example 10
     *
     * @var int
     */
    public $toBeFixed;

    /**
     * @description The number of new high-risk events today.
     *
     * @example 10
     *
     * @var string
     */
    public $todayHigh;

    /**
     * @description The number of new low-risk events today.
     *
     * @example 10
     *
     * @var int
     */
    public $todayLow;

    /**
     * @description The number of new moderate-risk events today.
     *
     * @example 10
     *
     * @var string
     */
    public $todayMedium;

    /**
     * @description The total number of new events today.
     *
     * @example 30
     *
     * @var string
     */
    public $todayTotal;

    /**
     * @description The total number of events.
     *
     * @example 30
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'api'           => 'Api',
        'confirmed'     => 'Confirmed',
        'domain'        => 'Domain',
        'fixed'         => 'Fixed',
        'high'          => 'High',
        'ignore'        => 'Ignore',
        'low'           => 'Low',
        'medium'        => 'Medium',
        'toBeConfirmed' => 'ToBeConfirmed',
        'toBeFixed'     => 'ToBeFixed',
        'todayHigh'     => 'TodayHigh',
        'todayLow'      => 'TodayLow',
        'todayMedium'   => 'TodayMedium',
        'todayTotal'    => 'TodayTotal',
        'total'         => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->api) {
            $res['Api'] = $this->api;
        }
        if (null !== $this->confirmed) {
            $res['Confirmed'] = $this->confirmed;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->fixed) {
            $res['Fixed'] = $this->fixed;
        }
        if (null !== $this->high) {
            $res['High'] = $this->high;
        }
        if (null !== $this->ignore) {
            $res['Ignore'] = $this->ignore;
        }
        if (null !== $this->low) {
            $res['Low'] = $this->low;
        }
        if (null !== $this->medium) {
            $res['Medium'] = $this->medium;
        }
        if (null !== $this->toBeConfirmed) {
            $res['ToBeConfirmed'] = $this->toBeConfirmed;
        }
        if (null !== $this->toBeFixed) {
            $res['ToBeFixed'] = $this->toBeFixed;
        }
        if (null !== $this->todayHigh) {
            $res['TodayHigh'] = $this->todayHigh;
        }
        if (null !== $this->todayLow) {
            $res['TodayLow'] = $this->todayLow;
        }
        if (null !== $this->todayMedium) {
            $res['TodayMedium'] = $this->todayMedium;
        }
        if (null !== $this->todayTotal) {
            $res['TodayTotal'] = $this->todayTotal;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Api'])) {
            $model->api = $map['Api'];
        }
        if (isset($map['Confirmed'])) {
            $model->confirmed = $map['Confirmed'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Fixed'])) {
            $model->fixed = $map['Fixed'];
        }
        if (isset($map['High'])) {
            $model->high = $map['High'];
        }
        if (isset($map['Ignore'])) {
            $model->ignore = $map['Ignore'];
        }
        if (isset($map['Low'])) {
            $model->low = $map['Low'];
        }
        if (isset($map['Medium'])) {
            $model->medium = $map['Medium'];
        }
        if (isset($map['ToBeConfirmed'])) {
            $model->toBeConfirmed = $map['ToBeConfirmed'];
        }
        if (isset($map['ToBeFixed'])) {
            $model->toBeFixed = $map['ToBeFixed'];
        }
        if (isset($map['TodayHigh'])) {
            $model->todayHigh = $map['TodayHigh'];
        }
        if (isset($map['TodayLow'])) {
            $model->todayLow = $map['TodayLow'];
        }
        if (isset($map['TodayMedium'])) {
            $model->todayMedium = $map['TodayMedium'];
        }
        if (isset($map['TodayTotal'])) {
            $model->todayTotal = $map['TodayTotal'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}