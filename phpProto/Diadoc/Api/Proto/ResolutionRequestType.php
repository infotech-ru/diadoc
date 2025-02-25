<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ResolutionRequestType.proto

namespace Diadoc\Api\Proto;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.ResolutionRequestType</code>
 */
class ResolutionRequestType
{
    /**
     * Generated from protobuf enum <code>ApprovementRequest = 0;</code>
     */
    const ApprovementRequest = 0;
    /**
     * Generated from protobuf enum <code>SignatureRequest = 1;</code>
     */
    const SignatureRequest = 1;
    /**
     * Generated from protobuf enum <code>ApprovementSignatureRequest = 2;</code>
     */
    const ApprovementSignatureRequest = 2;
    /**
     * Generated from protobuf enum <code>Custom = 3;</code>
     */
    const Custom = 3;

    private static $valueToName = [
        self::ApprovementRequest => 'ApprovementRequest',
        self::SignatureRequest => 'SignatureRequest',
        self::ApprovementSignatureRequest => 'ApprovementSignatureRequest',
        self::Custom => 'Custom',
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

