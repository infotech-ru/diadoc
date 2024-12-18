<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Workflows/InvitationBehavior.proto

namespace Diadoc\Api\Proto\Workflows\InvitationBehavior;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.Workflows.InvitationBehavior.InvitationBehavior</code>
 */
class InvitationBehavior
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
     * Generated from protobuf enum <code>DefineByUser = 2;</code>
     */
    const DefineByUser = 2;
    /**
     * Generated from protobuf enum <code>Always = 3;</code>
     */
    const Always = 3;

    private static $valueToName = [
        self::Unknown => 'Unknown',
        self::Never => 'Never',
        self::DefineByUser => 'DefineByUser',
        self::Always => 'Always',
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
