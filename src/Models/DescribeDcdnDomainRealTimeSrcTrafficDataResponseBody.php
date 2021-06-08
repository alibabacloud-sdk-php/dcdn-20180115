<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeSrcTrafficDataResponseBody\realTimeSrcTrafficDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainRealTimeSrcTrafficDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var realTimeSrcTrafficDataPerInterval
     */
    public $realTimeSrcTrafficDataPerInterval;
    protected $_name = [
        'endTime'                           => 'EndTime',
        'startTime'                         => 'StartTime',
        'requestId'                         => 'RequestId',
        'domainName'                        => 'DomainName',
        'dataInterval'                      => 'DataInterval',
        'realTimeSrcTrafficDataPerInterval' => 'RealTimeSrcTrafficDataPerInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->realTimeSrcTrafficDataPerInterval) {
            $res['RealTimeSrcTrafficDataPerInterval'] = null !== $this->realTimeSrcTrafficDataPerInterval ? $this->realTimeSrcTrafficDataPerInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainRealTimeSrcTrafficDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['RealTimeSrcTrafficDataPerInterval'])) {
            $model->realTimeSrcTrafficDataPerInterval = realTimeSrcTrafficDataPerInterval::fromMap($map['RealTimeSrcTrafficDataPerInterval']);
        }

        return $model;
    }
}
