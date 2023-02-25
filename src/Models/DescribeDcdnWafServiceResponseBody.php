<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnWafServiceResponseBody extends Model
{
    /**
     * @description The edition of WAF.
     *
     * @example dcdnwaf_afterpay
     *
     * @var string
     */
    public $edition;

    /**
     * @description The activation status of WAF. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $enabled;

    /**
     * @description The time when WAF was enabled.
     *
     * @example 2021-09-26T16:00:00Z
     *
     * @var string
     */
    public $openingTime;

    /**
     * @description The billing method for requests.
     *
     * @example dcdn_waf_req
     *
     * @var string
     */
    public $requestBillingType;

    /**
     * @description The ID of the request.
     *
     * @example 4A95CA90-E0F2-1BF6-99E0-8C1510CAF649
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The billing method for rules. You are charged for the number of SeCUs.
     *
     * @example dcdn_waf_rule
     *
     * @var string
     */
    public $ruleBillingType;

    /**
     * @description The status of WAF. Valid values:
     *
     *   Normal
     *   WaitForExpire
     *   Expired
     *   Released
     *
     * @example Normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'edition'            => 'Edition',
        'enabled'            => 'Enabled',
        'openingTime'        => 'OpeningTime',
        'requestBillingType' => 'RequestBillingType',
        'requestId'          => 'RequestId',
        'ruleBillingType'    => 'RuleBillingType',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->openingTime) {
            $res['OpeningTime'] = $this->openingTime;
        }
        if (null !== $this->requestBillingType) {
            $res['RequestBillingType'] = $this->requestBillingType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleBillingType) {
            $res['RuleBillingType'] = $this->ruleBillingType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnWafServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['OpeningTime'])) {
            $model->openingTime = $map['OpeningTime'];
        }
        if (isset($map['RequestBillingType'])) {
            $model->requestBillingType = $map['RequestBillingType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleBillingType'])) {
            $model->ruleBillingType = $map['RuleBillingType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
