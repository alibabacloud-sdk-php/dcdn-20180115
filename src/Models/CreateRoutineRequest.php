<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class CreateRoutineRequest extends Model
{
    /**
     * @example the description of this routine
     *
     * @var string
     */
    public $description;

    /**
     * @example {"Staging":{"SpecName":"50ms"},"Production":{"SpecName":"50ms"}}
     *
     * @var mixed[]
     */
    public $envConf;

    /**
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'envConf'     => 'EnvConf',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->envConf) {
            $res['EnvConf'] = $this->envConf;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRoutineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvConf'])) {
            $model->envConf = $map['EnvConf'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
