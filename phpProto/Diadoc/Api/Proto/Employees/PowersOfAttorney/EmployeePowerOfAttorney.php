<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Employees/PowersOfAttorney/EmployeePowerOfAttorney.proto

namespace Diadoc\Api\Proto\Employees\PowersOfAttorney;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Employees.PowersOfAttorney.EmployeePowerOfAttorney</code>
 */
class EmployeePowerOfAttorney extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorney PowerOfAttorney = 1;</code>
     */
    protected $PowerOfAttorney = null;
    /**
     * Generated from protobuf field <code>bool IsDefault = 2;</code>
     */
    protected $IsDefault = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorney $PowerOfAttorney
     *     @type bool $IsDefault
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Employees\PowersOfAttorney\EmployeePowerOfAttorney::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorney PowerOfAttorney = 1;</code>
     * @return \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorney|null
     */
    public function getPowerOfAttorney()
    {
        return $this->PowerOfAttorney;
    }

    public function hasPowerOfAttorney()
    {
        return isset($this->PowerOfAttorney);
    }

    public function clearPowerOfAttorney()
    {
        unset($this->PowerOfAttorney);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorney PowerOfAttorney = 1;</code>
     * @param \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorney $var
     * @return $this
     */
    public function setPowerOfAttorney($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorney::class);
        $this->PowerOfAttorney = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsDefault = 2;</code>
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->IsDefault;
    }

    /**
     * Generated from protobuf field <code>bool IsDefault = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsDefault($var)
    {
        GPBUtil::checkBool($var);
        $this->IsDefault = $var;

        return $this;
    }

}

