<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRegionDataResponseBody\value;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainRegionDataResponseBody extends Model
{
    /**
     * @description The average response time. Unit: milliseconds.
     *
     * @example 86400
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The average response speed. Unit: byte/s.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The total amount of network traffic.
     *
     * @example 2015-12-07T12:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The region.
     *
     * @example 2E5AD83F-BD7B-462E-8319-2E30E305519A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the region.
     *
     * @example 2015-12-05T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The proportion of requests from the specified region based on the total number of requests in percentile. For example, a value of 90 indicates that 90% of the requests were coming from the specified region.
     *
     * @var value
     */
    public $value;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'domainName'   => 'DomainName',
        'endTime'      => 'EndTime',
        'requestId'    => 'RequestId',
        'startTime'    => 'StartTime',
        'value'        => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->value) {
            $res['Value'] = null !== $this->value ? $this->value->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainRegionDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Value'])) {
            $model->value = value::fromMap($map['Value']);
        }

        return $model;
    }
}
