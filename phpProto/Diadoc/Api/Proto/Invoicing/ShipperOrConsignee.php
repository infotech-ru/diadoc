<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/InvoiceInfo.proto

namespace Diadoc\Api\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Invoicing.ShipperOrConsignee</code>
 */
class ShipperOrConsignee extends \Google\Protobuf\Internal\Message
{
    /**
     * Совпадает с продавцом/покупателем
     *
     * Generated from protobuf field <code>optional bool SameAsSellerOrBuyer = 1;</code>
     */
    protected $SameAsSellerOrBuyer = null;
    /**
     * Реквизиты организации
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OrganizationInfo OrgInfo = 2;</code>
     */
    protected $OrgInfo = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $SameAsSellerOrBuyer
     *           Совпадает с продавцом/покупателем
     *     @type \Diadoc\Api\Proto\Invoicing\OrganizationInfo $OrgInfo
     *           Реквизиты организации
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\InvoiceInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Совпадает с продавцом/покупателем
     *
     * Generated from protobuf field <code>optional bool SameAsSellerOrBuyer = 1;</code>
     * @return bool
     */
    public function getSameAsSellerOrBuyer()
    {
        return isset($this->SameAsSellerOrBuyer) ? $this->SameAsSellerOrBuyer : false;
    }

    public function hasSameAsSellerOrBuyer()
    {
        return isset($this->SameAsSellerOrBuyer);
    }

    public function clearSameAsSellerOrBuyer()
    {
        unset($this->SameAsSellerOrBuyer);
    }

    /**
     * Совпадает с продавцом/покупателем
     *
     * Generated from protobuf field <code>optional bool SameAsSellerOrBuyer = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSameAsSellerOrBuyer($var)
    {
        GPBUtil::checkBool($var);
        $this->SameAsSellerOrBuyer = $var;

        return $this;
    }

    /**
     * Реквизиты организации
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OrganizationInfo OrgInfo = 2;</code>
     * @return \Diadoc\Api\Proto\Invoicing\OrganizationInfo|null
     */
    public function getOrgInfo()
    {
        return $this->OrgInfo;
    }

    public function hasOrgInfo()
    {
        return isset($this->OrgInfo);
    }

    public function clearOrgInfo()
    {
        unset($this->OrgInfo);
    }

    /**
     * Реквизиты организации
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OrganizationInfo OrgInfo = 2;</code>
     * @param \Diadoc\Api\Proto\Invoicing\OrganizationInfo $var
     * @return $this
     */
    public function setOrgInfo($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\OrganizationInfo::class);
        $this->OrgInfo = $var;

        return $this;
    }

}

