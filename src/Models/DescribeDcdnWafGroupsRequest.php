<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnWafGroupsRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $language;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example {"RuleIds":"100001,200002"}
     *
     * @var string
     */
    public $queryArgs;
    protected $_name = [
        'language'   => 'Language',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'queryArgs'  => 'QueryArgs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryArgs) {
            $res['QueryArgs'] = $this->queryArgs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnWafGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryArgs'])) {
            $model->queryArgs = $map['QueryArgs'];
        }

        return $model;
    }
}