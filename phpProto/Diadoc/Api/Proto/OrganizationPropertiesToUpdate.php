<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: OrganizationPropertiesToUpdate.proto

namespace Diadoc\Api\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.OrganizationPropertiesToUpdate</code>
 */
class OrganizationPropertiesToUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string OrgId = 1;</code>
     */
    protected $OrgId = '';
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.StringValue Ogrn = 2;</code>
     */
    protected $Ogrn = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.StringValue IfnsCode = 3;</code>
     */
    protected $IfnsCode = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Address Address = 4;</code>
     */
    protected $Address = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.HeadOrganizationPropertiesToUpdate HeadOrganizationProperties = 5;</code>
     */
    protected $HeadOrganizationProperties = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $OrgId
     *     @type \Diadoc\Api\Proto\StringValue $Ogrn
     *     @type \Diadoc\Api\Proto\StringValue $IfnsCode
     *     @type \Diadoc\Api\Proto\Address $Address
     *     @type \Diadoc\Api\Proto\HeadOrganizationPropertiesToUpdate $HeadOrganizationProperties
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\OrganizationPropertiesToUpdate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string OrgId = 1;</code>
     * @return string
     */
    public function getOrgId()
    {
        return $this->OrgId;
    }

    /**
     * Generated from protobuf field <code>string OrgId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOrgId($var)
    {
        GPBUtil::checkString($var, True);
        $this->OrgId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.StringValue Ogrn = 2;</code>
     * @return \Diadoc\Api\Proto\StringValue|null
     */
    public function getOgrn()
    {
        return $this->Ogrn;
    }

    public function hasOgrn()
    {
        return isset($this->Ogrn);
    }

    public function clearOgrn()
    {
        unset($this->Ogrn);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.StringValue Ogrn = 2;</code>
     * @param \Diadoc\Api\Proto\StringValue $var
     * @return $this
     */
    public function setOgrn($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\StringValue::class);
        $this->Ogrn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.StringValue IfnsCode = 3;</code>
     * @return \Diadoc\Api\Proto\StringValue|null
     */
    public function getIfnsCode()
    {
        return $this->IfnsCode;
    }

    public function hasIfnsCode()
    {
        return isset($this->IfnsCode);
    }

    public function clearIfnsCode()
    {
        unset($this->IfnsCode);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.StringValue IfnsCode = 3;</code>
     * @param \Diadoc\Api\Proto\StringValue $var
     * @return $this
     */
    public function setIfnsCode($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\StringValue::class);
        $this->IfnsCode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Address Address = 4;</code>
     * @return \Diadoc\Api\Proto\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }

    public function hasAddress()
    {
        return isset($this->Address);
    }

    public function clearAddress()
    {
        unset($this->Address);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Address Address = 4;</code>
     * @param \Diadoc\Api\Proto\Address $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Address::class);
        $this->Address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.HeadOrganizationPropertiesToUpdate HeadOrganizationProperties = 5;</code>
     * @return \Diadoc\Api\Proto\HeadOrganizationPropertiesToUpdate|null
     */
    public function getHeadOrganizationProperties()
    {
        return $this->HeadOrganizationProperties;
    }

    public function hasHeadOrganizationProperties()
    {
        return isset($this->HeadOrganizationProperties);
    }

    public function clearHeadOrganizationProperties()
    {
        unset($this->HeadOrganizationProperties);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.HeadOrganizationPropertiesToUpdate HeadOrganizationProperties = 5;</code>
     * @param \Diadoc\Api\Proto\HeadOrganizationPropertiesToUpdate $var
     * @return $this
     */
    public function setHeadOrganizationProperties($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\HeadOrganizationPropertiesToUpdate::class);
        $this->HeadOrganizationProperties = $var;

        return $this;
    }

}

