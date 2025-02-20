<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Certificates/CertificateInfoV2.proto

namespace Diadoc\Api\Proto\Certificates;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.Certificates.CertificateSubjectType</code>
 */
class CertificateSubjectType
{
    /**
     * Generated from protobuf enum <code>UnknownCertificateSubjectType = 0;</code>
     */
    const UnknownCertificateSubjectType = 0;
    /**
     * Generated from protobuf enum <code>LegalEntity = 1;</code>
     */
    const LegalEntity = 1;
    /**
     * Generated from protobuf enum <code>IndividualEntity = 2;</code>
     */
    const IndividualEntity = 2;
    /**
     * Generated from protobuf enum <code>PhysicalPerson = 3;</code>
     */
    const PhysicalPerson = 3;

    private static $valueToName = [
        self::UnknownCertificateSubjectType => 'UnknownCertificateSubjectType',
        self::LegalEntity => 'LegalEntity',
        self::IndividualEntity => 'IndividualEntity',
        self::PhysicalPerson => 'PhysicalPerson',
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

