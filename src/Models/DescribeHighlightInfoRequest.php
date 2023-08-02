<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeHighlightInfoRequest extends Model
{
    /**
     * @example 2023-04-10T02:43:34Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example en_US
     *
     * @var string
     */
    public $lang;

    /**
     * @example 2023-02-19T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 800e749616838513398137319e
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'endTime'   => 'EndTime',
        'lang'      => 'Lang',
        'startTime' => 'StartTime',
        'traceId'   => 'TraceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHighlightInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
