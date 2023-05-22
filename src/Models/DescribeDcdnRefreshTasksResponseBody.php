<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnRefreshTasksResponseBody\tasks;
use AlibabaCloud\Tea\Model;

class DescribeDcdnRefreshTasksResponseBody extends Model
{
    /**
     * @description The status of the task.
     *
     *   **Complete**: The task has completed.
     *   **Refreshing**: The task is in progress.
     *   **Failed**: The task failed.
     *
     * @example 2
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The time when the task was created. The time is displayed in UTC.
     *
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Details about tasks.
     *
     * @example 174F6032-AA26-470D-B90E-36F0EB205BEE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The progress of the task, in percentage.
     *
     * @var tasks
     */
    public $tasks;

    /**
     * @description The type of the task.
     *
     *   **file**: URL-based refresh
     *   **path**: directory-based refresh
     *   **preload**: URL-based prefetch
     *
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'tasks'      => 'Tasks',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tasks) {
            $res['Tasks'] = null !== $this->tasks ? $this->tasks->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnRefreshTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Tasks'])) {
            $model->tasks = tasks::fromMap($map['Tasks']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
