<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: PowersOfAttorney/PowerOfAttorneyValidation.proto

namespace Diadoc\Api\Proto\PowersOfAttorney;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.PowersOfAttorney.ValidationCheckResult</code>
 */
class ValidationCheckResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationCheckStatus Status = 1;</code>
     */
    protected $Status = null;
    /**
     * Generated from protobuf field <code>string Name = 2;</code>
     */
    protected $Name = '';
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationError Error = 3;</code>
     */
    protected $Error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Status
     *     @type string $Name
     *     @type \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorneyValidationError $Error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PowersOfAttorney\PowerOfAttorneyValidation::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationCheckStatus Status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return isset($this->Status) ? $this->Status : 0;
    }

    public function hasStatus()
    {
        return isset($this->Status);
    }

    public function clearStatus()
    {
        unset($this->Status);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationCheckStatus Status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorneyValidationCheckStatus::class);
        $this->Status = $var;

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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationError Error = 3;</code>
     * @return \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorneyValidationError|null
     */
    public function getError()
    {
        return $this->Error;
    }

    public function hasError()
    {
        return isset($this->Error);
    }

    public function clearError()
    {
        unset($this->Error);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationError Error = 3;</code>
     * @param \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorneyValidationError $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorneyValidationError::class);
        $this->Error = $var;

        return $this;
    }

}

