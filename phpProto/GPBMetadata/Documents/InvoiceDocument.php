<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/InvoiceDocument.proto

namespace GPBMetadata\Documents;

class InvoiceDocument
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Documents/InvoiceDocument.proto*Diadoc.Api.Proto.Documents.InvoiceDocument"�
InvoiceMetadataU
InvoiceStatus (29.Diadoc.Api.Proto.Documents.InvoiceDocument.InvoiceStatusH �
Total (	
Vat (	
Currency (!
ConfirmationDateTimeTicks (
InvoiceAmendmentFlags (B
_InvoiceStatus"�
InvoiceRevisionMetadata]
InvoiceRevisionStatus (29.Diadoc.Api.Proto.Documents.InvoiceDocument.InvoiceStatusH �
OriginalInvoiceNumber (	
OriginalInvoiceDate (	
Total (	
Vat (	
Currency (!
ConfirmationDateTimeTicks (
InvoiceAmendmentFlags (B
_InvoiceRevisionStatus"�
InvoiceCorrectionMetadata_
InvoiceCorrectionStatus (29.Diadoc.Api.Proto.Documents.InvoiceDocument.InvoiceStatusH �
OriginalInvoiceNumber (	
OriginalInvoiceDate (	*
OriginalInvoiceRevisionNumber (	H�(
OriginalInvoiceRevisionDate (	H�
TotalInc (	
TotalDec (	
VatInc (	
VatDec	 (	
Currency
 (!
ConfirmationDateTimeTicks (
InvoiceAmendmentFlags (B
_InvoiceCorrectionStatusB 
_OriginalInvoiceRevisionNumberB
_OriginalInvoiceRevisionDate"�
!InvoiceCorrectionRevisionMetadatag
InvoiceCorrectionRevisionStatus (29.Diadoc.Api.Proto.Documents.InvoiceDocument.InvoiceStatusH �
OriginalInvoiceNumber (	
OriginalInvoiceDate (	*
OriginalInvoiceRevisionNumber (	H�(
OriginalInvoiceRevisionDate (	H�\'
OriginalInvoiceCorrectionNumber (	%
OriginalInvoiceCorrectionDate (	
TotalInc (	
TotalDec	 (	
VatInc
 (	
VatDec (	
Currency (!
ConfirmationDateTimeTicks (
InvoiceAmendmentFlags (B"
 _InvoiceCorrectionRevisionStatusB 
_OriginalInvoiceRevisionNumberB
_OriginalInvoiceRevisionDate*�
InvoiceStatus
UnknownInvoiceStatus $
 OutboundWaitingForInvoiceReceipt
OutboundNotFinished
OutboundFinished%
!OutboundWaitingForSenderSignature"
OutboundInvalidSenderSignature
InboundNotFinished
InboundFinishedbproto3'
        , true);

        static::$is_initialized = true;
    }
}

