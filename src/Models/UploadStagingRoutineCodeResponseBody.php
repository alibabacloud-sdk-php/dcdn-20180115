<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class UploadStagingRoutineCodeResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $content;

    /**
     * @example DFA2027F-86C0-4421-9593-581A7993696C
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
     * @return UploadStagingRoutineCodeResponseBody
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
