<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Registration/RegistrationRequest.proto

namespace Diadoc\Api\Proto\Registration;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Registration.RegistrationResponse</code>
 */
class RegistrationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Registration.RegistrationStatus RegistrationStatus = 1;</code>
     */
    protected $RegistrationStatus = 0;
    /**
     * Generated from protobuf field <code>optional string BoxId = 2;</code>
     */
    protected $BoxId = null;
    /**
     * Generated from protobuf field <code>optional bytes DataToSign = 3;</code>
     */
    protected $DataToSign = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $RegistrationStatus
     *     @type string $BoxId
     *     @type string $DataToSign
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Registration\RegistrationRequest::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Registration.RegistrationStatus RegistrationStatus = 1;</code>
     * @return int
     */
    public function getRegistrationStatus()
    {
        return $this->RegistrationStatus;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Registration.RegistrationStatus RegistrationStatus = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRegistrationStatus($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Registration\RegistrationStatus::class);
        $this->RegistrationStatus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string BoxId = 2;</code>
     * @return string
     */
    public function getBoxId()
    {
        return isset($this->BoxId) ? $this->BoxId : '';
    }

    public function hasBoxId()
    {
        return isset($this->BoxId);
    }

    public function clearBoxId()
    {
        unset($this->BoxId);
    }

    /**
     * Generated from protobuf field <code>optional string BoxId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBoxId($var)
    {
        GPBUtil::checkString($var, True);
        $this->BoxId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bytes DataToSign = 3;</code>
     * @return string
     */
    public function getDataToSign()
    {
        return isset($this->DataToSign) ? $this->DataToSign : '';
    }

    public function hasDataToSign()
    {
        return isset($this->DataToSign);
    }

    public function clearDataToSign()
    {
        unset($this->DataToSign);
    }

    /**
     * Generated from protobuf field <code>optional bytes DataToSign = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDataToSign($var)
    {
        GPBUtil::checkString($var, False);
        $this->DataToSign = $var;

        return $this;
    }

}
