<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserRealTimeDeliveryFieldResponseBody\content;

use AlibabaCloud\Tea\Model;

class fields extends Model
{
    /**
     * @description The description of the field.
     *
     * @example The timestamp of the request
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the field.
     *
     * @example unixtime
     *
     * @var string
     */
    public $fieldName;

    /**
     * @description Indicates whether the field was selected.
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $selected;
    protected $_name = [
        'description' => 'Description',
        'fieldName'   => 'FieldName',
        'selected'    => 'Selected',
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
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->selected) {
            $res['Selected'] = $this->selected;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['Selected'])) {
            $model->selected = $map['Selected'];
        }

        return $model;
    }
}
