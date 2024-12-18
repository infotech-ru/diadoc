<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Workflows/OperatorConfirmationBehavior.proto

namespace Diadoc\Api\Proto\Workflows\OperatorConfirmationBehavior;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.Workflows.OperatorConfirmationBehavior.OperatorConfirmationBehavior</code>
 */
class OperatorConfirmationBehavior
{
    /**
     * Generated from protobuf enum <code>Unknown = 0;</code>
     */
    const Unknown = 0;
    /**
     * Generated from protobuf enum <code>Never = 1;</code>
     */
    const Never = 1;
    /**
     * Generated from protobuf enum <code>Initiator = 2;</code>
     */
    const Initiator = 2;
    /**
     * Generated from protobuf enum <code>InitiatorCounterpart = 3;</code>
     */
    const InitiatorCounterpart = 3;

    private static $valueToName = [
        self::Unknown => 'Unknown',
        self::Never => 'Never',
        self::Initiator => 'Initiator',
        self::InitiatorCounterpart => 'InitiatorCounterpart',
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
