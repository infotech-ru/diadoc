<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/SignaturePowerOfAttorney.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.PowerOfAttorneyStatusChange</code>
 */
class PowerOfAttorneyStatusChange extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.Entity Entity = 1;</code>
     */
    protected $Entity = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationStatus PowerOfAttorneyStatus = 2;</code>
     */
    protected $PowerOfAttorneyStatus = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\Docflow\Entity $Entity
     *     @type \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorneyValidationStatus $PowerOfAttorneyStatus
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\SignaturePowerOfAttorney::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.Entity Entity = 1;</code>
     * @return \Diadoc\Api\Proto\Docflow\Entity|null
     */
    public function getEntity()
    {
        return $this->Entity;
    }

    public function hasEntity()
    {
        return isset($this->Entity);
    }

    public function clearEntity()
    {
        unset($this->Entity);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.Entity Entity = 1;</code>
     * @param \Diadoc\Api\Proto\Docflow\Entity $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\Entity::class);
        $this->Entity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationStatus PowerOfAttorneyStatus = 2;</code>
     * @return \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorneyValidationStatus|null
     */
    public function getPowerOfAttorneyStatus()
    {
        return $this->PowerOfAttorneyStatus;
    }

    public function hasPowerOfAttorneyStatus()
    {
        return isset($this->PowerOfAttorneyStatus);
    }

    public function clearPowerOfAttorneyStatus()
    {
        unset($this->PowerOfAttorneyStatus);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationStatus PowerOfAttorneyStatus = 2;</code>
     * @param \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorneyValidationStatus $var
     * @return $this
     */
    public function setPowerOfAttorneyStatus($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorneyValidationStatus::class);
        $this->PowerOfAttorneyStatus = $var;

        return $this;
    }

}
