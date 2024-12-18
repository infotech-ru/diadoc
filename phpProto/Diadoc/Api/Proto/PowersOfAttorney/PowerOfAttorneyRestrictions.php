<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: PowersOfAttorney/PowerOfAttorney.proto

namespace Diadoc\Api\Proto\PowersOfAttorney;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyRestrictions</code>
 */
class PowerOfAttorneyRestrictions extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 Id = 1;</code>
     */
    protected $Id = 0;
    /**
     * Generated from protobuf field <code>string Code = 2;</code>
     */
    protected $Code = '';
    /**
     * Generated from protobuf field <code>string Name = 3;</code>
     */
    protected $Name = '';
    /**
     * Generated from protobuf field <code>optional string ValueName = 4;</code>
     */
    protected $ValueName = null;
    /**
     * Generated from protobuf field <code>optional string ValueCode = 5;</code>
     */
    protected $ValueCode = null;
    /**
     * Generated from protobuf field <code>optional string ValueText = 6;</code>
     */
    protected $ValueText = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Id
     *     @type string $Code
     *     @type string $Name
     *     @type string $ValueName
     *     @type string $ValueCode
     *     @type string $ValueText
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PowersOfAttorney\PowerOfAttorney::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 Id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Generated from protobuf field <code>int32 Id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->Id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Code = 2;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * Generated from protobuf field <code>string Code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->Code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Generated from protobuf field <code>string Name = 3;</code>
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
     * Generated from protobuf field <code>optional string ValueName = 4;</code>
     * @return string
     */
    public function getValueName()
    {
        return isset($this->ValueName) ? $this->ValueName : '';
    }

    public function hasValueName()
    {
        return isset($this->ValueName);
    }

    public function clearValueName()
    {
        unset($this->ValueName);
    }

    /**
     * Generated from protobuf field <code>optional string ValueName = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setValueName($var)
    {
        GPBUtil::checkString($var, True);
        $this->ValueName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string ValueCode = 5;</code>
     * @return string
     */
    public function getValueCode()
    {
        return isset($this->ValueCode) ? $this->ValueCode : '';
    }

    public function hasValueCode()
    {
        return isset($this->ValueCode);
    }

    public function clearValueCode()
    {
        unset($this->ValueCode);
    }

    /**
     * Generated from protobuf field <code>optional string ValueCode = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setValueCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->ValueCode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string ValueText = 6;</code>
     * @return string
     */
    public function getValueText()
    {
        return isset($this->ValueText) ? $this->ValueText : '';
    }

    public function hasValueText()
    {
        return isset($this->ValueText);
    }

    public function clearValueText()
    {
        unset($this->ValueText);
    }

    /**
     * Generated from protobuf field <code>optional string ValueText = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setValueText($var)
    {
        GPBUtil::checkString($var, True);
        $this->ValueText = $var;

        return $this;
    }

}

