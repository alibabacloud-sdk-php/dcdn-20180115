<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class CreateDcdnDeliverTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $deliverId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deliverId' => 'DeliverId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliverId) {
            $res['DeliverId'] = $this->deliverId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDcdnDeliverTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliverId'])) {
            $model->deliverId = $map['DeliverId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
