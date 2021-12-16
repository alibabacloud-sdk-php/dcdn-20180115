<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnServiceResponseBody\operationLocks;
use AlibabaCloud\Tea\Model;

class DescribeDcdnServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $changingAffectTime;

    /**
     * @var string
     */
    public $changingChargeType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $openingTime;

    /**
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $websocketChangingTime;

    /**
     * @var string
     */
    public $websocketChangingType;

    /**
     * @var string
     */
    public $websocketType;
    protected $_name = [
        'changingAffectTime'    => 'ChangingAffectTime',
        'changingChargeType'    => 'ChangingChargeType',
        'instanceId'            => 'InstanceId',
        'internetChargeType'    => 'InternetChargeType',
        'openingTime'           => 'OpeningTime',
        'operationLocks'        => 'OperationLocks',
        'requestId'             => 'RequestId',
        'websocketChangingTime' => 'WebsocketChangingTime',
        'websocketChangingType' => 'WebsocketChangingType',
        'websocketType'         => 'WebsocketType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changingAffectTime) {
            $res['ChangingAffectTime'] = $this->changingAffectTime;
        }
        if (null !== $this->changingChargeType) {
            $res['ChangingChargeType'] = $this->changingChargeType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->openingTime) {
            $res['OpeningTime'] = $this->openingTime;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->websocketChangingTime) {
            $res['WebsocketChangingTime'] = $this->websocketChangingTime;
        }
        if (null !== $this->websocketChangingType) {
            $res['WebsocketChangingType'] = $this->websocketChangingType;
        }
        if (null !== $this->websocketType) {
            $res['WebsocketType'] = $this->websocketType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangingAffectTime'])) {
            $model->changingAffectTime = $map['ChangingAffectTime'];
        }
        if (isset($map['ChangingChargeType'])) {
            $model->changingChargeType = $map['ChangingChargeType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['OpeningTime'])) {
            $model->openingTime = $map['OpeningTime'];
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WebsocketChangingTime'])) {
            $model->websocketChangingTime = $map['WebsocketChangingTime'];
        }
        if (isset($map['WebsocketChangingType'])) {
            $model->websocketChangingType = $map['WebsocketChangingType'];
        }
        if (isset($map['WebsocketType'])) {
            $model->websocketType = $map['WebsocketType'];
        }

        return $model;
    }
}
