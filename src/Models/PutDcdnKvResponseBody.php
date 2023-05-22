<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class PutDcdnKvResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 5
     *
     * @var int
     */
    public $length;

    /**
     * @example 96ED3127-EC7A-57C5-AFA6-A689B24B2530
     *
     * @var string
     */
    public $requestId;

    /**
     * @example value1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'length'    => 'Length',
        'requestId' => 'RequestId',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutDcdnKvResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
