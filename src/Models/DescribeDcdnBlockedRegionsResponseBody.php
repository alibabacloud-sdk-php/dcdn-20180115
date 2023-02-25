<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBlockedRegionsResponseBody\infoList;
use AlibabaCloud\Tea\Model;

class DescribeDcdnBlockedRegionsResponseBody extends Model
{
    /**
     * @description The information about the country or region.
     *
     * @var infoList
     */
    public $infoList;

    /**
     * @description The ID of the request.
     *
     * @example BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'infoList'  => 'InfoList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->infoList) {
            $res['InfoList'] = null !== $this->infoList ? $this->infoList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnBlockedRegionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InfoList'])) {
            $model->infoList = infoList::fromMap($map['InfoList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
