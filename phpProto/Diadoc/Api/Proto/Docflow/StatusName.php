<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/PowerOfAttorneyAttachmentStatus.proto

namespace Diadoc\Api\Proto\Docflow;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.Docflow.StatusName</code>
 */
class StatusName
{
    /**
     * Generated from protobuf enum <code>Unknown = 0;</code>
     */
    const Unknown = 0;
    /**
     * Generated from protobuf enum <code>PowerOfAttorneyAttached = 1;</code>
     */
    const PowerOfAttorneyAttached = 1;
    /**
     * Generated from protobuf enum <code>PowerOfAttorneyNotRequired = 2;</code>
     */
    const PowerOfAttorneyNotRequired = 2;
    /**
     * Generated from protobuf enum <code>PowerOfAttorneyRequired = 3;</code>
     */
    const PowerOfAttorneyRequired = 3;

    private static $valueToName = [
        self::Unknown => 'Unknown',
        self::PowerOfAttorneyAttached => 'PowerOfAttorneyAttached',
        self::PowerOfAttorneyNotRequired => 'PowerOfAttorneyNotRequired',
        self::PowerOfAttorneyRequired => 'PowerOfAttorneyRequired',
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

