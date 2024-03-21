<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeEncryptRoutineUidResponseBody extends Model
{
    /**
     * @description The returned ciphertext, which contains the Alibaba Cloud account ID, timestamp, and time to live (TTL).
     *
     * @example XXXXXj20p4UB/xgdOH5LtXXXXXX
     *
     * @var string
     */
    public $content;

    /**
     * @description The request ID.
     *
     * @example 4DBA68F5-04A9-406B-B1E4-F2CB635E103F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'content'   => 'Content',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEncryptRoutineUidResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
