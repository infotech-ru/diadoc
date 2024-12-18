<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: DocumentDirection.proto

namespace Diadoc\Api\Proto;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.DocumentDirection</code>
 */
class DocumentDirection
{
    /**
     * Generated from protobuf enum <code>UnknownDocumentDirection = 0;</code>
     */
    const UnknownDocumentDirection = 0;
    /**
     * Generated from protobuf enum <code>Inbound = 1;</code>
     */
    const Inbound = 1;
    /**
     * Generated from protobuf enum <code>Outbound = 2;</code>
     */
    const Outbound = 2;
    /**
     * Generated from protobuf enum <code>Internal = 3;</code>
     */
    const Internal = 3;

    private static $valueToName = [
        self::UnknownDocumentDirection => 'UnknownDocumentDirection',
        self::Inbound => 'Inbound',
        self::Outbound => 'Outbound',
        self::Internal => 'Internal',
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

