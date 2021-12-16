<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnConfigOfVersionRequest extends Model
{
    /**
     * @var int
     */
    public $functionId;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'functionId'    => 'FunctionId',
        'functionName'  => 'FunctionName',
        'groupId'       => 'GroupId',
        'ownerId'       => 'OwnerId',
        'securityToken' => 'SecurityToken',
        'versionId'     => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionId) {
            $res['FunctionId'] = $this->functionId;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnConfigOfVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionId'])) {
            $model->functionId = $map['FunctionId'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
