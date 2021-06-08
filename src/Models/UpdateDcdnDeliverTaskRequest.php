<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class UpdateDcdnDeliverTaskRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $deliverId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $reports;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var mixed[]
     */
    public $deliver;

    /**
     * @var mixed[]
     */
    public $schedule;
    protected $_name = [
        'ownerId'    => 'OwnerId',
        'deliverId'  => 'DeliverId',
        'name'       => 'Name',
        'status'     => 'Status',
        'reports'    => 'Reports',
        'domainName' => 'DomainName',
        'deliver'    => 'Deliver',
        'schedule'   => 'Schedule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->deliverId) {
            $res['DeliverId'] = $this->deliverId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->reports) {
            $res['Reports'] = $this->reports;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->deliver) {
            $res['Deliver'] = $this->deliver;
        }
        if (null !== $this->schedule) {
            $res['Schedule'] = $this->schedule;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDcdnDeliverTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DeliverId'])) {
            $model->deliverId = $map['DeliverId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Reports'])) {
            $model->reports = $map['Reports'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Deliver'])) {
            $model->deliver = $map['Deliver'];
        }
        if (isset($map['Schedule'])) {
            $model->schedule = $map['Schedule'];
        }

        return $model;
    }
}
