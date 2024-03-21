<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class BatchPutDcdnKvResponseBody extends Model
{
    /**
     * @description The keys that failed to be written.
     *
     * @var string[]
     */
    public $failKeys;

    /**
     * @description The request ID.
     *
     * @example 156A6B-677B1A-4297B7-9187B7-2B44792
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The keys that were written.
     *
     * @var string[]
     */
    public $successKeys;
    protected $_name = [
        'failKeys'    => 'FailKeys',
        'requestId'   => 'RequestId',
        'successKeys' => 'SuccessKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failKeys) {
            $res['FailKeys'] = $this->failKeys;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successKeys) {
            $res['SuccessKeys'] = $this->successKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchPutDcdnKvResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailKeys'])) {
            if (!empty($map['FailKeys'])) {
                $model->failKeys = $map['FailKeys'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessKeys'])) {
            if (!empty($map['SuccessKeys'])) {
                $model->successKeys = $map['SuccessKeys'];
            }
        }

        return $model;
    }
}
