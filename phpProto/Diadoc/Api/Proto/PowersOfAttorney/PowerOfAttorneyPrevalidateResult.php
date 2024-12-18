<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: PowersOfAttorney/PowerOfAttorneyValidation.proto

namespace Diadoc\Api\Proto\PowersOfAttorney;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyPrevalidateResult</code>
 */
class PowerOfAttorneyPrevalidateResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationStatus PrevalidateStatus = 1;</code>
     */
    protected $PrevalidateStatus = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorneyValidationStatus $PrevalidateStatus
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PowersOfAttorney\PowerOfAttorneyValidation::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationStatus PrevalidateStatus = 1;</code>
     * @return \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorneyValidationStatus|null
     */
    public function getPrevalidateStatus()
    {
        return $this->PrevalidateStatus;
    }

    public function hasPrevalidateStatus()
    {
        return isset($this->PrevalidateStatus);
    }

    public function clearPrevalidateStatus()
    {
        unset($this->PrevalidateStatus);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationStatus PrevalidateStatus = 1;</code>
     * @param \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorneyValidationStatus $var
     * @return $this
     */
    public function setPrevalidateStatus($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorneyValidationStatus::class);
        $this->PrevalidateStatus = $var;

        return $this;
    }

}
