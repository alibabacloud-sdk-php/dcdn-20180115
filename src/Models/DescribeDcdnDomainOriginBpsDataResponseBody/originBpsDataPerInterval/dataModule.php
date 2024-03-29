<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainOriginBpsDataResponseBody\originBpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The bandwidth that was consumed for fetching dynamic content from the origin over HTTP.
     *
     * @example 100
     *
     * @var float
     */
    public $dynamicHttpOriginBps;

    /**
     * @description The bandwidth that was consumed for fetching dynamic content from the origin over HTTPS.
     *
     * @example 100
     *
     * @var float
     */
    public $dynamicHttpsOriginBps;

    /**
     * @description The bandwidth that was consumed for fetching content from the origin.
     *
     * @example 100
     *
     * @var float
     */
    public $originBps;

    /**
     * @description The bandwidth that was consumed for fetching static content from the origin over HTTP.
     *
     * @example 100
     *
     * @var float
     */
    public $staticHttpOriginBps;

    /**
     * @description The bandwidth that was consumed for fetching static content from the origin over HTTPS.
     *
     * @example 100
     *
     * @var float
     */
    public $staticHttpsOriginBps;

    /**
     * @description The timestamp of the returned data.
     *
     * @example 2019-12-10T00:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'dynamicHttpOriginBps'  => 'DynamicHttpOriginBps',
        'dynamicHttpsOriginBps' => 'DynamicHttpsOriginBps',
        'originBps'             => 'OriginBps',
        'staticHttpOriginBps'   => 'StaticHttpOriginBps',
        'staticHttpsOriginBps'  => 'StaticHttpsOriginBps',
        'timeStamp'             => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicHttpOriginBps) {
            $res['DynamicHttpOriginBps'] = $this->dynamicHttpOriginBps;
        }
        if (null !== $this->dynamicHttpsOriginBps) {
            $res['DynamicHttpsOriginBps'] = $this->dynamicHttpsOriginBps;
        }
        if (null !== $this->originBps) {
            $res['OriginBps'] = $this->originBps;
        }
        if (null !== $this->staticHttpOriginBps) {
            $res['StaticHttpOriginBps'] = $this->staticHttpOriginBps;
        }
        if (null !== $this->staticHttpsOriginBps) {
            $res['StaticHttpsOriginBps'] = $this->staticHttpsOriginBps;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicHttpOriginBps'])) {
            $model->dynamicHttpOriginBps = $map['DynamicHttpOriginBps'];
        }
        if (isset($map['DynamicHttpsOriginBps'])) {
            $model->dynamicHttpsOriginBps = $map['DynamicHttpsOriginBps'];
        }
        if (isset($map['OriginBps'])) {
            $model->originBps = $map['OriginBps'];
        }
        if (isset($map['StaticHttpOriginBps'])) {
            $model->staticHttpOriginBps = $map['StaticHttpOriginBps'];
        }
        if (isset($map['StaticHttpsOriginBps'])) {
            $model->staticHttpsOriginBps = $map['StaticHttpsOriginBps'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
