<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Recognition/Recognition.proto

namespace Diadoc\Api\Proto\Recognition;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.Recognition.RecognizedDocumentType</code>
 */
class RecognizedDocumentType
{
    /**
     * Generated from protobuf enum <code>Unknown = 0;</code>
     */
    const Unknown = 0;
    /**
     * Generated from protobuf enum <code>Invoice = 1;</code>
     */
    const Invoice = 1;

    private static $valueToName = [
        self::Unknown => 'Unknown',
        self::Invoice => 'Invoice',
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

