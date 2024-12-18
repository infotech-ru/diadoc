<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RoamingSendingStatus.proto

namespace Diadoc\Api\Proto;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.RoamingSendingStatusNamedId</code>
 */
class RoamingSendingStatusNamedId
{
    /**
     * Generated from protobuf enum <code>UnknownStatus = 0;</code>
     */
    const UnknownStatus = 0;
    /**
     * Generated from protobuf enum <code>IsSent = 1;</code>
     */
    const IsSent = 1;
    /**
     * Generated from protobuf enum <code>SendingError = 2;</code>
     */
    const SendingError = 2;

    private static $valueToName = [
        self::UnknownStatus => 'UnknownStatus',
        self::IsSent => 'IsSent',
        self::SendingError => 'SendingError',
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

