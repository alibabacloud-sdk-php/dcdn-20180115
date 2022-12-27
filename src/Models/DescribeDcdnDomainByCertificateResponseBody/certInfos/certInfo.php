<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainByCertificateResponseBody\certInfos;

use AlibabaCloud\Tea\Model;

class certInfo extends Model
{
    /**
     * @example yes
     *
     * @var string
     */
    public $certCaIsLegacy;

    /**
     * @example Nov 29 00:00:00 2016 GMT
     *
     * @var string
     */
    public $certExpireTime;

    /**
     * @example yes
     *
     * @var string
     */
    public $certExpired;

    /**
     * @example Nov 29 23:59:59 2017 GMT
     *
     * @var string
     */
    public $certStartTime;

    /**
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $certSubjectCommonName;

    /**
     * @example RSA
     *
     * @var string
     */
    public $certType;

    /**
     * @example example.com,example.org
     *
     * @var string
     */
    public $domainList;

    /**
     * @example *.example.com,example.org
     *
     * @var string
     */
    public $domainNames;

    /**
     * @example C=US, O=Symantec Corporation, OU=Symantec Trust Network, OU=Domain Validated SSL, CN=Symantec Basic DV SSL CA - G1
     *
     * @var string
     */
    public $issuer;
    protected $_name = [
        'certCaIsLegacy'        => 'CertCaIsLegacy',
        'certExpireTime'        => 'CertExpireTime',
        'certExpired'           => 'CertExpired',
        'certStartTime'         => 'CertStartTime',
        'certSubjectCommonName' => 'CertSubjectCommonName',
        'certType'              => 'CertType',
        'domainList'            => 'DomainList',
        'domainNames'           => 'DomainNames',
        'issuer'                => 'Issuer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certCaIsLegacy) {
            $res['CertCaIsLegacy'] = $this->certCaIsLegacy;
        }
        if (null !== $this->certExpireTime) {
            $res['CertExpireTime'] = $this->certExpireTime;
        }
        if (null !== $this->certExpired) {
            $res['CertExpired'] = $this->certExpired;
        }
        if (null !== $this->certStartTime) {
            $res['CertStartTime'] = $this->certStartTime;
        }
        if (null !== $this->certSubjectCommonName) {
            $res['CertSubjectCommonName'] = $this->certSubjectCommonName;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->domainList) {
            $res['DomainList'] = $this->domainList;
        }
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertCaIsLegacy'])) {
            $model->certCaIsLegacy = $map['CertCaIsLegacy'];
        }
        if (isset($map['CertExpireTime'])) {
            $model->certExpireTime = $map['CertExpireTime'];
        }
        if (isset($map['CertExpired'])) {
            $model->certExpired = $map['CertExpired'];
        }
        if (isset($map['CertStartTime'])) {
            $model->certStartTime = $map['CertStartTime'];
        }
        if (isset($map['CertSubjectCommonName'])) {
            $model->certSubjectCommonName = $map['CertSubjectCommonName'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['DomainList'])) {
            $model->domainList = $map['DomainList'];
        }
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        return $model;
    }
}
