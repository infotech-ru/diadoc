<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: PowersOfAttorney/PowerOfAttorneyValidation.proto

namespace Diadoc\Api\Proto\PowersOfAttorney;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.PowersOfAttorney.ValidationProtocol</code>
 */
class ValidationProtocol extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.PowersOfAttorney.ValidationCheckResult CheckResults = 1;</code>
     */
    private $CheckResults;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Diadoc\Api\Proto\PowersOfAttorney\ValidationCheckResult>|\Google\Protobuf\Internal\RepeatedField $CheckResults
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PowersOfAttorney\PowerOfAttorneyValidation::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.PowersOfAttorney.ValidationCheckResult CheckResults = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCheckResults()
    {
        return $this->CheckResults;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.PowersOfAttorney.ValidationCheckResult CheckResults = 1;</code>
     * @param array<\Diadoc\Api\Proto\PowersOfAttorney\ValidationCheckResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCheckResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\PowersOfAttorney\ValidationCheckResult::class);
        $this->CheckResults = $arr;

        return $this;
    }

}

