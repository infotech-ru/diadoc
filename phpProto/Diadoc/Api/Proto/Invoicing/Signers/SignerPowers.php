<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/ExtendedSigner.proto

namespace Diadoc\Api\Proto\Invoicing\Signers;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.Invoicing.Signers.SignerPowers</code>
 */
class SignerPowers
{
    /**
     * Лицо, ответственное за подписание счетов-фактур
     *
     * Generated from protobuf enum <code>InvoiceSigner = 0;</code>
     */
    const InvoiceSigner = 0;
    /**
     * Лицо, совершившее сделку, операцию
     *
     * Generated from protobuf enum <code>PersonMadeOperation = 1;</code>
     */
    const PersonMadeOperation = 1;
    /**
     * Лицо, совершившее сделку, операцию и ответственное за её оформление;
     *
     * Generated from protobuf enum <code>MadeAndSignOperation = 2;</code>
     */
    const MadeAndSignOperation = 2;
    /**
     * Лицо, ответственное за оформление свершившегося события;
     *
     * Generated from protobuf enum <code>PersonDocumentedOperation = 3;</code>
     */
    const PersonDocumentedOperation = 3;
    /**
     * Лицо, совершившее сделку, операцию и ответственное за подписание счетов-фактур;
     *
     * Generated from protobuf enum <code>MadeOperationAndSignedInvoice = 4;</code>
     */
    const MadeOperationAndSignedInvoice = 4;
    /**
     * Лицо, совершившее сделку, операцию и ответственное за её оформление и за подписание счетов-фактур;
     *
     * Generated from protobuf enum <code>MadeAndResponsibleForOperationAndSignedInvoice = 5;</code>
     */
    const MadeAndResponsibleForOperationAndSignedInvoice = 5;
    /**
     * Лицо, ответственное за оформление свершившегося события и за подписание счетов-фактур
     *
     * Generated from protobuf enum <code>ResponsibleForOperationAndSignerForInvoice = 6;</code>
     */
    const ResponsibleForOperationAndSignerForInvoice = 6;
    /**
     * Председатель комиссии
     *
     * Generated from protobuf enum <code>ChairmanCommission = 7;</code>
     */
    const ChairmanCommission = 7;
    /**
     * Член комиссии
     *
     * Generated from protobuf enum <code>MemberCommission = 8;</code>
     */
    const MemberCommission = 8;
    /**
     * Лицо, в полномочия которого входит утверждение документа, оформляющего событие (факт хозяйственной жизни)
     *
     * Generated from protobuf enum <code>PersonApprovedDocument = 21;</code>
     */
    const PersonApprovedDocument = 21;
    /**
     * Лицо, в полномочия которого входит подтверждение оформленного события (факта хозяйственной жизни)
     *
     * Generated from protobuf enum <code>PersonConfirmedDocument = 22;</code>
     */
    const PersonConfirmedDocument = 22;
    /**
     * Лицо, в полномочия которого входит согласование документа, оформляющего событие (факт хозяйственной жизни)
     *
     * Generated from protobuf enum <code>PersonAgreedOnDocument = 23;</code>
     */
    const PersonAgreedOnDocument = 23;
    /**
     * Лицо с иными полномочиями
     *
     * Generated from protobuf enum <code>PersonOtherPower = 29;</code>
     */
    const PersonOtherPower = 29;

    private static $valueToName = [
        self::InvoiceSigner => 'InvoiceSigner',
        self::PersonMadeOperation => 'PersonMadeOperation',
        self::MadeAndSignOperation => 'MadeAndSignOperation',
        self::PersonDocumentedOperation => 'PersonDocumentedOperation',
        self::MadeOperationAndSignedInvoice => 'MadeOperationAndSignedInvoice',
        self::MadeAndResponsibleForOperationAndSignedInvoice => 'MadeAndResponsibleForOperationAndSignedInvoice',
        self::ResponsibleForOperationAndSignerForInvoice => 'ResponsibleForOperationAndSignerForInvoice',
        self::ChairmanCommission => 'ChairmanCommission',
        self::MemberCommission => 'MemberCommission',
        self::PersonApprovedDocument => 'PersonApprovedDocument',
        self::PersonConfirmedDocument => 'PersonConfirmedDocument',
        self::PersonAgreedOnDocument => 'PersonAgreedOnDocument',
        self::PersonOtherPower => 'PersonOtherPower',
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

