<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Dss/DssSign.proto

namespace Diadoc\Api\Proto\Dss;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.Dss.DssOperator</code>
 */
class DssOperator
{
    /**
     * Generated from protobuf enum <code>OperatorUnknown = 0;</code>
     */
    const OperatorUnknown = 0;
    /**
     * Generated from protobuf enum <code>Megafon = 1;</code>
     */
    const Megafon = 1;
    /**
     * Generated from protobuf enum <code>Kontur = 2;</code>
     */
    const Kontur = 2;

    private static $valueToName = [
        self::OperatorUnknown => 'OperatorUnknown',
        self::Megafon => 'Megafon',
        self::Kontur => 'Kontur',
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

