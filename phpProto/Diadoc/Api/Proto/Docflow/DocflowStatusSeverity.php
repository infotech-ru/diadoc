<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/Docflow.proto

namespace Diadoc\Api\Proto\Docflow;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.Docflow.DocflowStatusSeverity</code>
 */
class DocflowStatusSeverity
{
    /**
     * Generated from protobuf enum <code>UnknownDocflowStatusSeverity = 0;</code>
     */
    const UnknownDocflowStatusSeverity = 0;
    /**
     * Generated from protobuf enum <code>Info = 1;</code>
     */
    const Info = 1;
    /**
     * Generated from protobuf enum <code>Success = 2;</code>
     */
    const Success = 2;
    /**
     * Generated from protobuf enum <code>Warning = 3;</code>
     */
    const Warning = 3;
    /**
     * Generated from protobuf enum <code>Error = 4;</code>
     */
    const Error = 4;

    private static $valueToName = [
        self::UnknownDocflowStatusSeverity => 'UnknownDocflowStatusSeverity',
        self::Info => 'Info',
        self::Success => 'Success',
        self::Warning => 'Warning',
        self::Error => 'Error',
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

