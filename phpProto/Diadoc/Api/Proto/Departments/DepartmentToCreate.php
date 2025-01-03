<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Departments/DepartmentToCreate.proto

namespace Diadoc\Api\Proto\Departments;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Departments.DepartmentToCreate</code>
 */
class DepartmentToCreate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string ParentDepartmentId = 1;</code>
     */
    protected $ParentDepartmentId = null;
    /**
     * Generated from protobuf field <code>string Name = 2;</code>
     */
    protected $Name = '';
    /**
     * Generated from protobuf field <code>string Abbreviation = 3;</code>
     */
    protected $Abbreviation = '';
    /**
     * Generated from protobuf field <code>optional string Kpp = 4;</code>
     */
    protected $Kpp = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Address Address = 5;</code>
     */
    protected $Address = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Departments.Routing Routing = 6;</code>
     */
    protected $Routing = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ParentDepartmentId
     *     @type string $Name
     *     @type string $Abbreviation
     *     @type string $Kpp
     *     @type \Diadoc\Api\Proto\Address $Address
     *     @type \Diadoc\Api\Proto\Departments\Routing $Routing
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Departments\DepartmentToCreate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string ParentDepartmentId = 1;</code>
     * @return string
     */
    public function getParentDepartmentId()
    {
        return isset($this->ParentDepartmentId) ? $this->ParentDepartmentId : '';
    }

    public function hasParentDepartmentId()
    {
        return isset($this->ParentDepartmentId);
    }

    public function clearParentDepartmentId()
    {
        unset($this->ParentDepartmentId);
    }

    /**
     * Generated from protobuf field <code>optional string ParentDepartmentId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParentDepartmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ParentDepartmentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Generated from protobuf field <code>string Name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->Name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Abbreviation = 3;</code>
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->Abbreviation;
    }

    /**
     * Generated from protobuf field <code>string Abbreviation = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAbbreviation($var)
    {
        GPBUtil::checkString($var, True);
        $this->Abbreviation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string Kpp = 4;</code>
     * @return string
     */
    public function getKpp()
    {
        return isset($this->Kpp) ? $this->Kpp : '';
    }

    public function hasKpp()
    {
        return isset($this->Kpp);
    }

    public function clearKpp()
    {
        unset($this->Kpp);
    }

    /**
     * Generated from protobuf field <code>optional string Kpp = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setKpp($var)
    {
        GPBUtil::checkString($var, True);
        $this->Kpp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Address Address = 5;</code>
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Address Address = 5;</code>
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
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Departments.Routing Routing = 6;</code>
     * @return \Diadoc\Api\Proto\Departments\Routing|null
     */
    public function getRouting()
    {
        return $this->Routing;
    }

    public function hasRouting()
    {
        return isset($this->Routing);
    }

    public function clearRouting()
    {
        unset($this->Routing);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Departments.Routing Routing = 6;</code>
     * @param \Diadoc\Api\Proto\Departments\Routing $var
     * @return $this
     */
    public function setRouting($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Departments\Routing::class);
        $this->Routing = $var;

        return $this;
    }

}

