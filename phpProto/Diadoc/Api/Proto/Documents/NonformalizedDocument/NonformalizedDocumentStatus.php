<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/NonformalizedDocument.proto

namespace Diadoc\Api\Proto\Documents\NonformalizedDocument;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.Documents.NonformalizedDocument.NonformalizedDocumentStatus</code>
 */
class NonformalizedDocumentStatus
{
    /**
     * Generated from protobuf enum <code>UnknownNonformalizedDocumentStatus = 0;</code>
     */
    const UnknownNonformalizedDocumentStatus = 0;
    /**
     * Generated from protobuf enum <code>OutboundNoRecipientSignatureRequest = 1;</code>
     */
    const OutboundNoRecipientSignatureRequest = 1;
    /**
     * Generated from protobuf enum <code>OutboundWaitingForRecipientSignature = 2;</code>
     */
    const OutboundWaitingForRecipientSignature = 2;
    /**
     * Generated from protobuf enum <code>OutboundWithRecipientSignature = 3;</code>
     */
    const OutboundWithRecipientSignature = 3;
    /**
     * Generated from protobuf enum <code>OutboundRecipientSignatureRequestRejected = 4;</code>
     */
    const OutboundRecipientSignatureRequestRejected = 4;
    /**
     * Generated from protobuf enum <code>OutboundWaitingForSenderSignature = 13;</code>
     */
    const OutboundWaitingForSenderSignature = 13;
    /**
     * Generated from protobuf enum <code>OutboundInvalidSenderSignature = 14;</code>
     */
    const OutboundInvalidSenderSignature = 14;
    /**
     * Generated from protobuf enum <code>InboundNoRecipientSignatureRequest = 5;</code>
     */
    const InboundNoRecipientSignatureRequest = 5;
    /**
     * Generated from protobuf enum <code>InboundWaitingForRecipientSignature = 6;</code>
     */
    const InboundWaitingForRecipientSignature = 6;
    /**
     * Generated from protobuf enum <code>InboundWithRecipientSignature = 7;</code>
     */
    const InboundWithRecipientSignature = 7;
    /**
     * Generated from protobuf enum <code>InboundRecipientSignatureRequestRejected = 8;</code>
     */
    const InboundRecipientSignatureRequestRejected = 8;
    /**
     * Generated from protobuf enum <code>InboundInvalidRecipientSignature = 15;</code>
     */
    const InboundInvalidRecipientSignature = 15;
    /**
     * Generated from protobuf enum <code>InternalNoRecipientSignatureRequest = 9;</code>
     */
    const InternalNoRecipientSignatureRequest = 9;
    /**
     * Generated from protobuf enum <code>InternalWaitingForRecipientSignature = 10;</code>
     */
    const InternalWaitingForRecipientSignature = 10;
    /**
     * Generated from protobuf enum <code>InternalWithRecipientSignature = 11;</code>
     */
    const InternalWithRecipientSignature = 11;
    /**
     * Generated from protobuf enum <code>InternalRecipientSignatureRequestRejected = 12;</code>
     */
    const InternalRecipientSignatureRequestRejected = 12;
    /**
     * Generated from protobuf enum <code>InternalWaitingForSenderSignature = 16;</code>
     */
    const InternalWaitingForSenderSignature = 16;
    /**
     * Generated from protobuf enum <code>InternalInvalidSenderSignature = 17;</code>
     */
    const InternalInvalidSenderSignature = 17;
    /**
     * Generated from protobuf enum <code>InternalInvalidRecipientSignature = 18;</code>
     */
    const InternalInvalidRecipientSignature = 18;

    private static $valueToName = [
        self::UnknownNonformalizedDocumentStatus => 'UnknownNonformalizedDocumentStatus',
        self::OutboundNoRecipientSignatureRequest => 'OutboundNoRecipientSignatureRequest',
        self::OutboundWaitingForRecipientSignature => 'OutboundWaitingForRecipientSignature',
        self::OutboundWithRecipientSignature => 'OutboundWithRecipientSignature',
        self::OutboundRecipientSignatureRequestRejected => 'OutboundRecipientSignatureRequestRejected',
        self::OutboundWaitingForSenderSignature => 'OutboundWaitingForSenderSignature',
        self::OutboundInvalidSenderSignature => 'OutboundInvalidSenderSignature',
        self::InboundNoRecipientSignatureRequest => 'InboundNoRecipientSignatureRequest',
        self::InboundWaitingForRecipientSignature => 'InboundWaitingForRecipientSignature',
        self::InboundWithRecipientSignature => 'InboundWithRecipientSignature',
        self::InboundRecipientSignatureRequestRejected => 'InboundRecipientSignatureRequestRejected',
        self::InboundInvalidRecipientSignature => 'InboundInvalidRecipientSignature',
        self::InternalNoRecipientSignatureRequest => 'InternalNoRecipientSignatureRequest',
        self::InternalWaitingForRecipientSignature => 'InternalWaitingForRecipientSignature',
        self::InternalWithRecipientSignature => 'InternalWithRecipientSignature',
        self::InternalRecipientSignatureRequestRejected => 'InternalRecipientSignatureRequestRejected',
        self::InternalWaitingForSenderSignature => 'InternalWaitingForSenderSignature',
        self::InternalInvalidSenderSignature => 'InternalInvalidSenderSignature',
        self::InternalInvalidRecipientSignature => 'InternalInvalidRecipientSignature',
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

