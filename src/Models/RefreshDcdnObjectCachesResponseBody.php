<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class RefreshDcdnObjectCachesResponseBody extends Model
{
    /**
     * @description The ID of the refresh task. Multiple IDs are separated by commas (,).
     *
     * @example 95248880
     *
     * @var string
     */
    public $refreshTaskId;

    /**
     * @description The ID of the request.
     *
     * @example E5BD4B50-7A02-493A-AE0B-97B9024B4135
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'refreshTaskId' => 'RefreshTaskId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->refreshTaskId) {
            $res['RefreshTaskId'] = $this->refreshTaskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshDcdnObjectCachesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RefreshTaskId'])) {
            $model->refreshTaskId = $map['RefreshTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
