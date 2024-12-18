<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/TovTorgInfo.proto

namespace Diadoc\Api\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Invoicing.GroundInfo</code>
 */
class GroundInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * НаимОсн
     *
     * Generated from protobuf field <code>string Name = 1;</code>
     */
    protected $Name = '';
    /**
     * НомОсн
     *
     * Generated from protobuf field <code>optional string Number = 2;</code>
     */
    protected $Number = null;
    /**
     * ДатаОсн
     *
     * Generated from protobuf field <code>optional string Date = 3;</code>
     */
    protected $Date = null;
    /**
     * ДопСвОсн
     *
     * Generated from protobuf field <code>optional string Info = 4;</code>
     */
    protected $Info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Name
     *           НаимОсн
     *     @type string $Number
     *           НомОсн
     *     @type string $Date
     *           ДатаОсн
     *     @type string $Info
     *           ДопСвОсн
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\TovTorgInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * НаимОсн
     *
     * Generated from protobuf field <code>string Name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * НаимОсн
     *
     * Generated from protobuf field <code>string Name = 1;</code>
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
     * НомОсн
     *
     * Generated from protobuf field <code>optional string Number = 2;</code>
     * @return string
     */
    public function getNumber()
    {
        return isset($this->Number) ? $this->Number : '';
    }

    public function hasNumber()
    {
        return isset($this->Number);
    }

    public function clearNumber()
    {
        unset($this->Number);
    }

    /**
     * НомОсн
     *
     * Generated from protobuf field <code>optional string Number = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->Number = $var;

        return $this;
    }

    /**
     * ДатаОсн
     *
     * Generated from protobuf field <code>optional string Date = 3;</code>
     * @return string
     */
    public function getDate()
    {
        return isset($this->Date) ? $this->Date : '';
    }

    public function hasDate()
    {
        return isset($this->Date);
    }

    public function clearDate()
    {
        unset($this->Date);
    }

    /**
     * ДатаОсн
     *
     * Generated from protobuf field <code>optional string Date = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->Date = $var;

        return $this;
    }

    /**
     * ДопСвОсн
     *
     * Generated from protobuf field <code>optional string Info = 4;</code>
     * @return string
     */
    public function getInfo()
    {
        return isset($this->Info) ? $this->Info : '';
    }

    public function hasInfo()
    {
        return isset($this->Info);
    }

    public function clearInfo()
    {
        unset($this->Info);
    }

    /**
     * ДопСвОсн
     *
     * Generated from protobuf field <code>optional string Info = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->Info = $var;

        return $this;
    }

}

