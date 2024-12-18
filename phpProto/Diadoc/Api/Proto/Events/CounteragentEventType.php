<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/CounteragentEventType.proto

namespace Diadoc\Api\Proto\Events;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.Events.CounteragentEventType</code>
 */
class CounteragentEventType
{
    /**
     * Generated from protobuf enum <code>UnknownCounteragentEventType = 0;</code>
     */
    const UnknownCounteragentEventType = 0;
    /**
     * Generated from protobuf enum <code>IInvitedCounteragent = 1;</code>
     */
    const IInvitedCounteragent = 1;
    /**
     * Generated from protobuf enum <code>CounteragentInvitedMe = 2;</code>
     */
    const CounteragentInvitedMe = 2;
    /**
     * Generated from protobuf enum <code>CounteragentAcceptedInvitation = 3;</code>
     */
    const CounteragentAcceptedInvitation = 3;
    /**
     * Generated from protobuf enum <code>IAcceptedInvitation = 4;</code>
     */
    const IAcceptedInvitation = 4;
    /**
     * Generated from protobuf enum <code>IWithdrewInvitation = 5;</code>
     */
    const IWithdrewInvitation = 5;
    /**
     * Generated from protobuf enum <code>CounteragentWithdrewInvitation = 6;</code>
     */
    const CounteragentWithdrewInvitation = 6;
    /**
     * Generated from protobuf enum <code>IRejectedInvitation = 7;</code>
     */
    const IRejectedInvitation = 7;
    /**
     * Generated from protobuf enum <code>CounteragentRejectedInvitation = 8;</code>
     */
    const CounteragentRejectedInvitation = 8;
    /**
     * Generated from protobuf enum <code>IBrokeUpWithCounteragent = 9;</code>
     */
    const IBrokeUpWithCounteragent = 9;
    /**
     * Generated from protobuf enum <code>CounteragentBrokeUpWithMe = 10;</code>
     */
    const CounteragentBrokeUpWithMe = 10;
    /**
     * Generated from protobuf enum <code>IForgotCounteragent = 11;</code>
     */
    const IForgotCounteragent = 11;
    /**
     * Generated from protobuf enum <code>CounteragentForgotMe = 12;</code>
     */
    const CounteragentForgotMe = 12;
    /**
     * Generated from protobuf enum <code>IMadeCounteragent = 13;</code>
     */
    const IMadeCounteragent = 13;
    /**
     * Generated from protobuf enum <code>CounteragentMadeMe = 14;</code>
     */
    const CounteragentMadeMe = 14;

    private static $valueToName = [
        self::UnknownCounteragentEventType => 'UnknownCounteragentEventType',
        self::IInvitedCounteragent => 'IInvitedCounteragent',
        self::CounteragentInvitedMe => 'CounteragentInvitedMe',
        self::CounteragentAcceptedInvitation => 'CounteragentAcceptedInvitation',
        self::IAcceptedInvitation => 'IAcceptedInvitation',
        self::IWithdrewInvitation => 'IWithdrewInvitation',
        self::CounteragentWithdrewInvitation => 'CounteragentWithdrewInvitation',
        self::IRejectedInvitation => 'IRejectedInvitation',
        self::CounteragentRejectedInvitation => 'CounteragentRejectedInvitation',
        self::IBrokeUpWithCounteragent => 'IBrokeUpWithCounteragent',
        self::CounteragentBrokeUpWithMe => 'CounteragentBrokeUpWithMe',
        self::IForgotCounteragent => 'IForgotCounteragent',
        self::CounteragentForgotMe => 'CounteragentForgotMe',
        self::IMadeCounteragent => 'IMadeCounteragent',
        self::CounteragentMadeMe => 'CounteragentMadeMe',
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

