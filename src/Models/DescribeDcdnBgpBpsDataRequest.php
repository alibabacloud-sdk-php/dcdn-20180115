<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnBgpBpsDataRequest extends Model
{
    /**
     * @example devicename
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example 123
     *
     * @var string
     */
    public $devicePort;

    /**
     * @example 2018-11-30T00:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 300
     *
     * @var string
     */
    public $interval;

    /**
     * @example cu
     *
     * @var string
     */
    public $isp;

    /**
     * @example 2018-11-29T00:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'devicePort' => 'DevicePort',
        'endTime'    => 'EndTime',
        'interval'   => 'Interval',
        'isp'        => 'Isp',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->devicePort) {
            $res['DevicePort'] = $this->devicePort;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnBgpBpsDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DevicePort'])) {
            $model->devicePort = $map['DevicePort'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
