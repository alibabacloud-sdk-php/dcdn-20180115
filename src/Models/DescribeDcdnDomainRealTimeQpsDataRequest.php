<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainRealTimeQpsDataRequest extends Model
{
    /**
     * @description The accelerated domain name. Separate multiple accelerated domain names with commas (,).
     *
     * This parameter is required.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query.
     *
     * > The end time must be later than the start time.
     * @example 2018-01-02T11:27:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the Internet service provider (ISP).
     *
     * You can call the [DescribeDcdnRegionAndIsp](https://help.aliyun.com/document_detail/207199.html) operation to query ISPs.
     * @example telecom
     *
     * @var string
     */
    public $ispNameEn;

    /**
     * @description The name of the region.
     *
     * You can call the [DescribeDcdnRegionAndIsp](https://help.aliyun.com/document_detail/207199.html) operation to query regions.
     * @example beijing
     *
     * @var string
     */
    public $locationNameEn;

    /**
     * @description The beginning of the time range to query.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     * @example 2018-01-02T11:26:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'domainName'     => 'DomainName',
        'endTime'        => 'EndTime',
        'ispNameEn'      => 'IspNameEn',
        'locationNameEn' => 'LocationNameEn',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ispNameEn) {
            $res['IspNameEn'] = $this->ispNameEn;
        }
        if (null !== $this->locationNameEn) {
            $res['LocationNameEn'] = $this->locationNameEn;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainRealTimeQpsDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IspNameEn'])) {
            $model->ispNameEn = $map['IspNameEn'];
        }
        if (isset($map['LocationNameEn'])) {
            $model->locationNameEn = $map['LocationNameEn'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
