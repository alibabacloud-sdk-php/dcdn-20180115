<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaDomainDetailResponseBody\domainDetail\sources;

use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @description The address of the origin server.
     *
     * @example xxx.oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $content;

    /**
     * @description The status.
     *
     * @example online
     *
     * @var string
     */
    public $enabled;

    /**
     * @description The custom port. Valid values: **0** to **65535**.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The priority.
     *
     * @example 50
     *
     * @var string
     */
    public $priority;

    /**
     * @description The type of the origin server. Valid values:
     *
     *   **ipaddr**: an origin IP address
     *   **domain**: a domain name.
     *   **oss**: Object Storage Service (OSS) buckets are not supported.
     *
     * @example oss
     *
     * @var string
     */
    public $type;

    /**
     * @description The weight of the origin server if multiple origin servers have been specified.
     *
     * @example 10
     *
     * @var string
     */
    public $weight;
    protected $_name = [
        'content'  => 'Content',
        'enabled'  => 'Enabled',
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
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
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
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
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
