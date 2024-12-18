<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: PowersOfAttorney/PowerOfAttorneyValidation.proto

namespace Diadoc\Api\Proto\PowersOfAttorney;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationStatusNamedId</code>
 */
class PowerOfAttorneyValidationStatusNamedId
{
    /**
     * Generated from protobuf enum <code>UnknownStatus = 0;</code>
     */
    const UnknownStatus = 0;
    /**
     * Generated from protobuf enum <code>CanNotBeValidated = 1;</code>
     */
    const CanNotBeValidated = 1;
    /**
     * Generated from protobuf enum <code>IsValid = 2;</code>
     */
    const IsValid = 2;
    /**
     * Generated from protobuf enum <code>IsNotValid = 3;</code>
     */
    const IsNotValid = 3;
    /**
     * Generated from protobuf enum <code>ValidationError = 4;</code>
     */
    const ValidationError = 4;
    /**
     * Generated from protobuf enum <code>IsNotAttached = 5;</code>
     */
    const IsNotAttached = 5;
    /**
     * Generated from protobuf enum <code>HasWarnings = 6;</code>
     */
    const HasWarnings = 6;

    private static $valueToName = [
        self::UnknownStatus => 'UnknownStatus',
        self::CanNotBeValidated => 'CanNotBeValidated',
        self::IsValid => 'IsValid',
        self::IsNotValid => 'IsNotValid',
        self::ValidationError => 'ValidationError',
        self::IsNotAttached => 'IsNotAttached',
        self::HasWarnings => 'HasWarnings',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

