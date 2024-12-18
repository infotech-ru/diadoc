<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/InvoiceDocument.proto

namespace Diadoc\Api\Proto\Documents\InvoiceDocument;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.Documents.InvoiceDocument.InvoiceStatus</code>
 */
class InvoiceStatus
{
    /**
     * Generated from protobuf enum <code>UnknownInvoiceStatus = 0;</code>
     */
    const UnknownInvoiceStatus = 0;
    /**
     * Generated from protobuf enum <code>OutboundWaitingForInvoiceReceipt = 1;</code>
     */
    const OutboundWaitingForInvoiceReceipt = 1;
    /**
     * Generated from protobuf enum <code>OutboundNotFinished = 2;</code>
     */
    const OutboundNotFinished = 2;
    /**
     * Generated from protobuf enum <code>OutboundFinished = 3;</code>
     */
    const OutboundFinished = 3;
    /**
     * Generated from protobuf enum <code>OutboundWaitingForSenderSignature = 6;</code>
     */
    const OutboundWaitingForSenderSignature = 6;
    /**
     * Generated from protobuf enum <code>OutboundInvalidSenderSignature = 7;</code>
     */
    const OutboundInvalidSenderSignature = 7;
    /**
     * Generated from protobuf enum <code>InboundNotFinished = 4;</code>
     */
    const InboundNotFinished = 4;
    /**
     * Generated from protobuf enum <code>InboundFinished = 5;</code>
     */
    const InboundFinished = 5;

    private static $valueToName = [
        self::UnknownInvoiceStatus => 'UnknownInvoiceStatus',
        self::OutboundWaitingForInvoiceReceipt => 'OutboundWaitingForInvoiceReceipt',
        self::OutboundNotFinished => 'OutboundNotFinished',
        self::OutboundFinished => 'OutboundFinished',
        self::OutboundWaitingForSenderSignature => 'OutboundWaitingForSenderSignature',
        self::OutboundInvalidSenderSignature => 'OutboundInvalidSenderSignature',
        self::InboundNotFinished => 'InboundNotFinished',
        self::InboundFinished => 'InboundFinished',
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

