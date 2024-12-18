<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: PowersOfAttorney/PowerOfAttorney.proto

namespace Diadoc\Api\Proto\PowersOfAttorney;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyIssuerType</code>
 */
class PowerOfAttorneyIssuerType
{
    /**
     * Generated from protobuf enum <code>UnknownIssuerType = 0;</code>
     */
    const UnknownIssuerType = 0;
    /**
     * Generated from protobuf enum <code>LegalEntity = 1;</code>
     */
    const LegalEntity = 1;
    /**
     * Generated from protobuf enum <code>ForeignEntity = 2;</code>
     */
    const ForeignEntity = 2;
    /**
     * Generated from protobuf enum <code>IndividualEntity = 3;</code>
     */
    const IndividualEntity = 3;
    /**
     * Generated from protobuf enum <code>PhysicalEntity = 4;</code>
     */
    const PhysicalEntity = 4;

    private static $valueToName = [
        self::UnknownIssuerType => 'UnknownIssuerType',
        self::LegalEntity => 'LegalEntity',
        self::ForeignEntity => 'ForeignEntity',
        self::IndividualEntity => 'IndividualEntity',
        self::PhysicalEntity => 'PhysicalEntity',
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

