<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserBillTypeResponseBody\billTypeData;
use AlibabaCloud\Tea\Model;

class DescribeDcdnUserBillTypeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var billTypeData
     */
    public $billTypeData;
    protected $_name = [
        'requestId'    => 'RequestId',
        'billTypeData' => 'BillTypeData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->billTypeData) {
            $res['BillTypeData'] = null !== $this->billTypeData ? $this->billTypeData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnUserBillTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BillTypeData'])) {
            $model->billTypeData = billTypeData::fromMap($map['BillTypeData']);
        }

        return $model;
    }
}
