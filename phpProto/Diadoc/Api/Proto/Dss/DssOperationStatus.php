<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Dss/DssSign.proto

namespace Diadoc\Api\Proto\Dss;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.Dss.DssOperationStatus</code>
 */
class DssOperationStatus
{
    /**
     * Generated from protobuf enum <code>Unknown = 0;</code>
     */
    const Unknown = 0;
    /**
     * Generated from protobuf enum <code>InProgress = 1;</code>
     */
    const InProgress = 1;
    /**
     * Generated from protobuf enum <code>Completed = 2;</code>
     */
    const Completed = 2;
    /**
     * Generated from protobuf enum <code>CanceledByUser = 3;</code>
     */
    const CanceledByUser = 3;
    /**
     * Generated from protobuf enum <code>Timeout = 4;</code>
     */
    const Timeout = 4;
    /**
     * Generated from protobuf enum <code>Crashed = 5;</code>
     */
    const Crashed = 5;
    /**
     * Generated from protobuf enum <code>UserHasUnconfirmedOperation = 6;</code>
     */
    const UserHasUnconfirmedOperation = 6;
    /**
     * Generated from protobuf enum <code>OperationRetryRequired = 7;</code>
     */
    const OperationRetryRequired = 7;

    private static $valueToName = [
        self::Unknown => 'Unknown',
        self::InProgress => 'InProgress',
        self::Completed => 'Completed',
        self::CanceledByUser => 'CanceledByUser',
        self::Timeout => 'Timeout',
        self::Crashed => 'Crashed',
        self::UserHasUnconfirmedOperation => 'UserHasUnconfirmedOperation',
        self::OperationRetryRequired => 'OperationRetryRequired',
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
