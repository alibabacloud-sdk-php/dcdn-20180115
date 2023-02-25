<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainIpaTrafficDataResponseBody\trafficDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The total amount of network traffic.
     *
     * @example 423304182
     *
     * @var float
     */
    public $ipaTraffic;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'ipaTraffic' => 'IpaTraffic',
        'timeStamp'  => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipaTraffic) {
            $res['IpaTraffic'] = $this->ipaTraffic;
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
        if (isset($map['IpaTraffic'])) {
            $model->ipaTraffic = $map['IpaTraffic'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
