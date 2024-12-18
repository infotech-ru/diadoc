<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Certificates/CertificateInfoV2.proto

namespace Diadoc\Api\Proto\Certificates;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.Certificates.DssCertificateType</code>
 */
class DssCertificateType
{
    /**
     * Generated from protobuf enum <code>UnknownDssType = 0;</code>
     */
    const UnknownDssType = 0;
    /**
     * Generated from protobuf enum <code>MyDss = 1;</code>
     */
    const MyDss = 1;
    /**
     * Generated from protobuf enum <code>KSignServer = 2;</code>
     */
    const KSignServer = 2;
    /**
     * Generated from protobuf enum <code>KSignRutoken = 3;</code>
     */
    const KSignRutoken = 3;
    /**
     * Generated from protobuf enum <code>KSignMobile = 4;</code>
     */
    const KSignMobile = 4;

    private static $valueToName = [
        self::UnknownDssType => 'UnknownDssType',
        self::MyDss => 'MyDss',
        self::KSignServer => 'KSignServer',
        self::KSignRutoken => 'KSignRutoken',
        self::KSignMobile => 'KSignMobile',
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

