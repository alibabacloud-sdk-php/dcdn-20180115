<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRegionAndIspResponseBody\regions;

use AlibabaCloud\Tea\Model;

class region extends Model
{
    /**
     * @example liaoning
     *
     * @var string
     */
    public $nameEn;

    /**
     * @var string
     */
    public $nameZh;
    protected $_name = [
        'nameEn' => 'NameEn',
        'nameZh' => 'NameZh',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nameEn) {
            $res['NameEn'] = $this->nameEn;
        }
        if (null !== $this->nameZh) {
            $res['NameZh'] = $this->nameZh;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return region
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NameEn'])) {
            $model->nameEn = $map['NameEn'];
        }
        if (isset($map['NameZh'])) {
            $model->nameZh = $map['NameZh'];
        }

        return $model;
    }
}
