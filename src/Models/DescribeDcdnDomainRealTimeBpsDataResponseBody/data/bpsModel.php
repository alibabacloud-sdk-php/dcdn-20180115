<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeBpsDataResponseBody\data;

use AlibabaCloud\Tea\Model;

class bpsModel extends Model
{
    /**
     * @example 16710625.733333332
     *
     * @var float
     */
    public $bps;

    /**
     * @example 2018-01-02T11:05:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'bps'       => 'Bps',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bpsModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
