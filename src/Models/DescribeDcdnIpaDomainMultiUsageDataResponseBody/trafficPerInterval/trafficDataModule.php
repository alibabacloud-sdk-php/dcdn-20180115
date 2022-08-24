<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaDomainMultiUsageDataResponseBody\trafficPerInterval;

use AlibabaCloud\Tea\Model;

class trafficDataModule extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @var float
     */
    public $bps;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'area'      => 'Area',
        'bps'       => 'Bps',
        'domain'    => 'Domain',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficDataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}