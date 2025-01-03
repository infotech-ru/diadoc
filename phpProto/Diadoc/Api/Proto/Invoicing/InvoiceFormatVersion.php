<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/InvoiceInfo.proto

namespace Diadoc\Api\Proto\Invoicing;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.Invoicing.InvoiceFormatVersion</code>
 */
class InvoiceFormatVersion
{
    /**
     * Generated from protobuf enum <code>DefaultInvoiceFormatVersion = 0;</code>
     */
    const DefaultInvoiceFormatVersion = 0;
    /**
     * Generated from protobuf enum <code>v5_01 = 1;</code>
     */
    const v5_01 = 1;
    /**
     * Generated from protobuf enum <code>v5_02 = 2;</code>
     */
    const v5_02 = 2;

    private static $valueToName = [
        self::DefaultInvoiceFormatVersion => 'DefaultInvoiceFormatVersion',
        self::v5_01 => 'v5_01',
        self::v5_02 => 'v5_02',
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

