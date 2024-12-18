<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: DocumentType.proto

namespace Diadoc\Api\Proto;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Api.Proto.DocumentType</code>
 */
class DocumentType
{
    /**
     * Generated from protobuf enum <code>Nonformalized = 0;</code>
     */
    const Nonformalized = 0;
    /**
     * Generated from protobuf enum <code>Invoice = 1;</code>
     */
    const Invoice = 1;
    /**
     * Generated from protobuf enum <code>TrustConnectionRequest = 11;</code>
     */
    const TrustConnectionRequest = 11;
    /**
     * Generated from protobuf enum <code>Torg12 = 12;</code>
     */
    const Torg12 = 12;
    /**
     * Generated from protobuf enum <code>InvoiceRevision = 13;</code>
     */
    const InvoiceRevision = 13;
    /**
     * Generated from protobuf enum <code>InvoiceCorrection = 14;</code>
     */
    const InvoiceCorrection = 14;
    /**
     * Generated from protobuf enum <code>InvoiceCorrectionRevision = 15;</code>
     */
    const InvoiceCorrectionRevision = 15;
    /**
     * Generated from protobuf enum <code>AcceptanceCertificate = 16;</code>
     */
    const AcceptanceCertificate = 16;
    /**
     * Generated from protobuf enum <code>ProformaInvoice = 18;</code>
     */
    const ProformaInvoice = 18;
    /**
     * Generated from protobuf enum <code>XmlTorg12 = 19;</code>
     */
    const XmlTorg12 = 19;
    /**
     * Generated from protobuf enum <code>XmlAcceptanceCertificate = 20;</code>
     */
    const XmlAcceptanceCertificate = 20;
    /**
     * Generated from protobuf enum <code>PriceList = 26;</code>
     */
    const PriceList = 26;
    /**
     * Generated from protobuf enum <code>PriceListAgreement = 30;</code>
     */
    const PriceListAgreement = 30;
    /**
     * Generated from protobuf enum <code>CertificateRegistry = 34;</code>
     */
    const CertificateRegistry = 34;
    /**
     * Generated from protobuf enum <code>ReconciliationAct = 35;</code>
     */
    const ReconciliationAct = 35;
    /**
     * Generated from protobuf enum <code>Contract = 36;</code>
     */
    const Contract = 36;
    /**
     * Generated from protobuf enum <code>Torg13 = 37;</code>
     */
    const Torg13 = 37;
    /**
     * Generated from protobuf enum <code>ServiceDetails = 38;</code>
     */
    const ServiceDetails = 38;
    /**
     * Generated from protobuf enum <code>SupplementaryAgreement = 40;</code>
     */
    const SupplementaryAgreement = 40;
    /**
     * Generated from protobuf enum <code>UniversalTransferDocument = 41;</code>
     */
    const UniversalTransferDocument = 41;
    /**
     * Generated from protobuf enum <code>UniversalTransferDocumentRevision = 45;</code>
     */
    const UniversalTransferDocumentRevision = 45;
    /**
     * Generated from protobuf enum <code>MesNotification = 46;</code>
     */
    const MesNotification = 46;
    /**
     * Generated from protobuf enum <code>UniversalCorrectionDocument = 49;</code>
     */
    const UniversalCorrectionDocument = 49;
    /**
     * Generated from protobuf enum <code>UniversalCorrectionDocumentRevision = 50;</code>
     */
    const UniversalCorrectionDocumentRevision = 50;

    private static $valueToName = [
        self::Nonformalized => 'Nonformalized',
        self::Invoice => 'Invoice',
        self::TrustConnectionRequest => 'TrustConnectionRequest',
        self::Torg12 => 'Torg12',
        self::InvoiceRevision => 'InvoiceRevision',
        self::InvoiceCorrection => 'InvoiceCorrection',
        self::InvoiceCorrectionRevision => 'InvoiceCorrectionRevision',
        self::AcceptanceCertificate => 'AcceptanceCertificate',
        self::ProformaInvoice => 'ProformaInvoice',
        self::XmlTorg12 => 'XmlTorg12',
        self::XmlAcceptanceCertificate => 'XmlAcceptanceCertificate',
        self::PriceList => 'PriceList',
        self::PriceListAgreement => 'PriceListAgreement',
        self::CertificateRegistry => 'CertificateRegistry',
        self::ReconciliationAct => 'ReconciliationAct',
        self::Contract => 'Contract',
        self::Torg13 => 'Torg13',
        self::ServiceDetails => 'ServiceDetails',
        self::SupplementaryAgreement => 'SupplementaryAgreement',
        self::UniversalTransferDocument => 'UniversalTransferDocument',
        self::UniversalTransferDocumentRevision => 'UniversalTransferDocumentRevision',
        self::MesNotification => 'MesNotification',
        self::UniversalCorrectionDocument => 'UniversalCorrectionDocument',
        self::UniversalCorrectionDocumentRevision => 'UniversalCorrectionDocumentRevision',
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

