<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserDomainsResponseBody\domains\pageData\sources;

use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $content;

    /**
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @example 20
     *
     * @var string
     */
    public $priority;

    /**
     * @example oss
     *
     * @var string
     */
    public $type;

    /**
     * @example 20
     *
     * @var string
     */
    public $weight;
    protected $_name = [
        'content'  => 'Content',
        'port'     => 'Port',
        'priority' => 'Priority',
        'type'     => 'Type',
        'weight'   => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return source
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
