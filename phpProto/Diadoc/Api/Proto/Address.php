<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Address.proto

namespace Diadoc\Api\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Address</code>
 */
class Address extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.RussianAddress RussianAddress = 1;</code>
     */
    protected $RussianAddress = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.ForeignAddress ForeignAddress = 2;</code>
     */
    protected $ForeignAddress = null;
    /**
     * Generated from protobuf field <code>optional string AddressCode = 3;</code>
     */
    protected $AddressCode = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\RussianAddress $RussianAddress
     *     @type \Diadoc\Api\Proto\ForeignAddress $ForeignAddress
     *     @type string $AddressCode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Address::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.RussianAddress RussianAddress = 1;</code>
     * @return \Diadoc\Api\Proto\RussianAddress|null
     */
    public function getRussianAddress()
    {
        return $this->RussianAddress;
    }

    public function hasRussianAddress()
    {
        return isset($this->RussianAddress);
    }

    public function clearRussianAddress()
    {
        unset($this->RussianAddress);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.RussianAddress RussianAddress = 1;</code>
     * @param \Diadoc\Api\Proto\RussianAddress $var
     * @return $this
     */
    public function setRussianAddress($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\RussianAddress::class);
        $this->RussianAddress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.ForeignAddress ForeignAddress = 2;</code>
     * @return \Diadoc\Api\Proto\ForeignAddress|null
     */
    public function getForeignAddress()
    {
        return $this->ForeignAddress;
    }

    public function hasForeignAddress()
    {
        return isset($this->ForeignAddress);
    }

    public function clearForeignAddress()
    {
        unset($this->ForeignAddress);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.ForeignAddress ForeignAddress = 2;</code>
     * @param \Diadoc\Api\Proto\ForeignAddress $var
     * @return $this
     */
    public function setForeignAddress($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\ForeignAddress::class);
        $this->ForeignAddress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string AddressCode = 3;</code>
     * @return string
     */
    public function getAddressCode()
    {
        return isset($this->AddressCode) ? $this->AddressCode : '';
    }

    public function hasAddressCode()
    {
        return isset($this->AddressCode);
    }

    public function clearAddressCode()
    {
        unset($this->AddressCode);
    }

    /**
     * Generated from protobuf field <code>optional string AddressCode = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAddressCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->AddressCode = $var;

        return $this;
    }

}

