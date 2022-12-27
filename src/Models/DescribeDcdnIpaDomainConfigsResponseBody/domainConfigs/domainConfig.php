<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaDomainConfigsResponseBody\domainConfigs;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaDomainConfigsResponseBody\domainConfigs\domainConfig\functionArgs;
use AlibabaCloud\Tea\Model;

class domainConfig extends Model
{
    /**
     * @example 5003576
     *
     * @var string
     */
    public $configId;

    /**
     * @var functionArgs
     */
    public $functionArgs;

    /**
     * @example protogw
     *
     * @var string
     */
    public $functionName;

    /**
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'configId'     => 'ConfigId',
        'functionArgs' => 'FunctionArgs',
        'functionName' => 'FunctionName',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->functionArgs) {
            $res['FunctionArgs'] = null !== $this->functionArgs ? $this->functionArgs->toMap() : null;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['FunctionArgs'])) {
            $model->functionArgs = functionArgs::fromMap($map['FunctionArgs']);
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
