<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/ExtendedSigner.proto

namespace Diadoc\Api\Proto\Invoicing\Signers;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.Invoicing.Signers.DocumentTitleType</code>
 */
class DocumentTitleType
{
    /**
     * Данные для титула продавца УПД
     *
     * Generated from protobuf enum <code>UtdSeller = 0;</code>
     */
    const UtdSeller = 0;
    /**
     * Данные для титула покупателя УПД
     *
     * Generated from protobuf enum <code>UtdBuyer = 1;</code>
     */
    const UtdBuyer = 1;
    /**
     * Данные для титула продавца УКД
     *
     * Generated from protobuf enum <code>UcdSeller = 2;</code>
     */
    const UcdSeller = 2;
    /**
     * Данные для титула покупателя УКД
     *
     * Generated from protobuf enum <code>UcdBuyer = 3;</code>
     */
    const UcdBuyer = 3;
    /**
     * Данные для титула продавца формата приказа 551
     *
     * Generated from protobuf enum <code>TovTorg551Seller = 4;</code>
     */
    const TovTorg551Seller = 4;
    /**
     * Данные для титула покупателя формата приказа 551
     *
     * Generated from protobuf enum <code>TovTorg551Buyer = 5;</code>
     */
    const TovTorg551Buyer = 5;
    /**
     * Данные для титула исполнителя формата приказа 552
     *
     * Generated from protobuf enum <code>AccCert552Seller = 6;</code>
     */
    const AccCert552Seller = 6;
    /**
     * Данные для титула заказчика формата приказа 552
     *
     * Generated from protobuf enum <code>AccCert552Buyer = 7;</code>
     */
    const AccCert552Buyer = 7;
    /**
     * Данные для титула покупателя УПД формата приказа 820
     *
     * Generated from protobuf enum <code>Utd820Buyer = 8;</code>
     */
    const Utd820Buyer = 8;
    /**
     * Данные для титула покупателя приказа 423
     *
     * Generated from protobuf enum <code>Torg2Buyer = 9;</code>
     */
    const Torg2Buyer = 9;
    /**
     * Данные для титула дополнительных сведений приказа 423
     *
     * Generated from protobuf enum <code>Torg2AdditionalInfo = 10;</code>
     */
    const Torg2AdditionalInfo = 10;
    /**
     * Данные для титула покупателя УКД формата приказа 736
     *
     * Generated from protobuf enum <code>Ucd736Buyer = 11;</code>
     */
    const Ucd736Buyer = 11;
    /**
     * Данные для титула продавца УПД формата приказа 970
     *
     * Generated from protobuf enum <code>Utd970Seller = 12;</code>
     */
    const Utd970Seller = 12;
    /**
     * Данные для титула покупателя УПД формата приказа 970
     *
     * Generated from protobuf enum <code>Utd970Buyer = 13;</code>
     */
    const Utd970Buyer = 13;

    private static $valueToName = [
        self::UtdSeller => 'UtdSeller',
        self::UtdBuyer => 'UtdBuyer',
        self::UcdSeller => 'UcdSeller',
        self::UcdBuyer => 'UcdBuyer',
        self::TovTorg551Seller => 'TovTorg551Seller',
        self::TovTorg551Buyer => 'TovTorg551Buyer',
        self::AccCert552Seller => 'AccCert552Seller',
        self::AccCert552Buyer => 'AccCert552Buyer',
        self::Utd820Buyer => 'Utd820Buyer',
        self::Torg2Buyer => 'Torg2Buyer',
        self::Torg2AdditionalInfo => 'Torg2AdditionalInfo',
        self::Ucd736Buyer => 'Ucd736Buyer',
        self::Utd970Seller => 'Utd970Seller',
        self::Utd970Buyer => 'Utd970Buyer',
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
