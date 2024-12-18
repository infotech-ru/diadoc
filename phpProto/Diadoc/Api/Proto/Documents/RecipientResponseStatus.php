<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/Document.proto

namespace Diadoc\Api\Proto\Documents;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.Documents.RecipientResponseStatus</code>
 */
class RecipientResponseStatus
{
    /**
     * Generated from protobuf enum <code>RecipientResponseStatusUnknown = 0;</code>
     */
    const RecipientResponseStatusUnknown = 0;
    /**
     * Generated from protobuf enum <code>RecipientResponseStatusNotAcceptable = 1;</code>
     */
    const RecipientResponseStatusNotAcceptable = 1;
    /**
     * Generated from protobuf enum <code>WaitingForRecipientSignature = 2;</code>
     */
    const WaitingForRecipientSignature = 2;
    /**
     * Generated from protobuf enum <code>WithRecipientSignature = 3;</code>
     */
    const WithRecipientSignature = 3;
    /**
     * Generated from protobuf enum <code>RecipientSignatureRequestRejected = 4;</code>
     */
    const RecipientSignatureRequestRejected = 4;
    /**
     * Generated from protobuf enum <code>InvalidRecipientSignature = 5;</code>
     */
    const InvalidRecipientSignature = 5;
    /**
     * Generated from protobuf enum <code>WithRecipientPartiallySignature = 6;</code>
     */
    const WithRecipientPartiallySignature = 6;

    private static $valueToName = [
        self::RecipientResponseStatusUnknown => 'RecipientResponseStatusUnknown',
        self::RecipientResponseStatusNotAcceptable => 'RecipientResponseStatusNotAcceptable',
        self::WaitingForRecipientSignature => 'WaitingForRecipientSignature',
        self::WithRecipientSignature => 'WithRecipientSignature',
        self::RecipientSignatureRequestRejected => 'RecipientSignatureRequestRejected',
        self::InvalidRecipientSignature => 'InvalidRecipientSignature',
        self::WithRecipientPartiallySignature => 'WithRecipientPartiallySignature',
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

