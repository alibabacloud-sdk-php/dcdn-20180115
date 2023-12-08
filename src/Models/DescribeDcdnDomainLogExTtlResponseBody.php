<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainLogExTtlResponseBody\domainLogDetails;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainLogExTtlResponseBody extends Model
{
    /**
     * @var domainLogDetails
     */
    public $domainLogDetails;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainLogDetails' => 'DomainLogDetails',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainLogDetails) {
            $res['DomainLogDetails'] = null !== $this->domainLogDetails ? $this->domainLogDetails->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainLogExTtlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainLogDetails'])) {
            $model->domainLogDetails = domainLogDetails::fromMap($map['DomainLogDetails']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
