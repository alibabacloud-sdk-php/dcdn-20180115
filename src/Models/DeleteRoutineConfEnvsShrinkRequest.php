<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DeleteRoutineConfEnvsShrinkRequest extends Model
{
    /**
     * @example ["Preset_Canary_ZheJiang"]
     *
     * @var string
     */
    public $envsShrink;

    /**
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'envsShrink' => 'Envs',
        'name'       => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envsShrink) {
            $res['Envs'] = $this->envsShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRoutineConfEnvsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Envs'])) {
            $model->envsShrink = $map['Envs'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
