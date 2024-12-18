<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Dss/DssSign.proto

namespace Diadoc\Api\Proto\Dss;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.Dss.DssFileSigningStatus</code>
 */
class DssFileSigningStatus
{
    /**
     * Generated from protobuf enum <code>UnknownSigningStatus = 0;</code>
     */
    const UnknownSigningStatus = 0;
    /**
     * Generated from protobuf enum <code>SigningCompleted = 1;</code>
     */
    const SigningCompleted = 1;
    /**
     * Generated from protobuf enum <code>SigningError = 2;</code>
     */
    const SigningError = 2;

    private static $valueToName = [
        self::UnknownSigningStatus => 'UnknownSigningStatus',
        self::SigningCompleted => 'SigningCompleted',
        self::SigningError => 'SigningError',
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
