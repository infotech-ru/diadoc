<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/UniversalTransferDocument.proto

namespace GPBMetadata\Documents;

class UniversalTransferDocument
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
)Documents/UniversalTransferDocument.proto4Diadoc.Api.Proto.Documents.UniversalTransferDocument"�
!UniversalTransferDocumentMetadatar
DocumentStatus (2U.Diadoc.Api.Proto.Documents.UniversalTransferDocument.UniversalTransferDocumentStatusH �
Total (	
Vat (	H�
Grounds (	H�
DocumentFunction (	
Currency (&
ConfirmationDateTimeTicks (H�"
InvoiceAmendmentFlags	 (H�B
_DocumentStatusB
_VatB

_GroundsB
_ConfirmationDateTimeTicksB
_InvoiceAmendmentFlags"�
)UniversalTransferDocumentRevisionMetadatam
DocumentStatus (2U.Diadoc.Api.Proto.Documents.UniversalTransferDocument.UniversalTransferDocumentStatus
Total (	
Vat (	H �
Grounds (	H�
DocumentFunction (	
Currency (&
ConfirmationDateTimeTicks (H�
InvoiceAmendmentFlags (
OriginalInvoiceNumber	 (	
OriginalInvoiceDate
 (	B
_VatB

_GroundsB
_ConfirmationDateTimeTicks"�
#UniversalCorrectionDocumentMetadatam
DocumentStatus (2U.Diadoc.Api.Proto.Documents.UniversalTransferDocument.UniversalTransferDocumentStatus
TotalInc (	
TotalDec (	
VatInc (	
VatDec (	
Grounds (	H �
DocumentFunction (	
Currency (!
ConfirmationDateTimeTicks	 (
InvoiceAmendmentFlags
 (
OriginalInvoiceNumber (	
OriginalInvoiceDate (	*
OriginalInvoiceRevisionNumber (	H�(
OriginalInvoiceRevisionDate (	H�B

_GroundsB 
_OriginalInvoiceRevisionNumberB
_OriginalInvoiceRevisionDate"�
+UniversalCorrectionDocumentRevisionMetadatam
DocumentStatus (2U.Diadoc.Api.Proto.Documents.UniversalTransferDocument.UniversalTransferDocumentStatus
TotalInc (	
TotalDec (	
VatInc (	
VatDec (	
Grounds (	H �
DocumentFunction (	
Currency (!
ConfirmationDateTimeTicks	 (
InvoiceAmendmentFlags
 (
OriginalInvoiceNumber (	
OriginalInvoiceDate (	*
OriginalInvoiceRevisionNumber (	H�(
OriginalInvoiceRevisionDate (	H�\'
OriginalInvoiceCorrectionNumber (	%
OriginalInvoiceCorrectionDate (	B

_GroundsB 
_OriginalInvoiceRevisionNumberB
_OriginalInvoiceRevisionDate*�
UniversalTransferDocumentStatus
UnknownDocumentStatus %
!OutboundWaitingForSenderSignature9
5OutboundWaitingForInvoiceReceiptAndRecipientSignature$
 OutboundWaitingForInvoiceReceipt(
$OutboundWaitingForRecipientSignature"
OutboundWithRecipientSignature-
)OutboundRecipientSignatureRequestRejected"
OutboundInvalidSenderSignature
OutboundNotFinished
OutboundFinished	\'
#InboundWaitingForRecipientSignature!
InboundWithRecipientSignature,
(InboundRecipientSignatureRequestRejected$
 InboundInvalidRecipientSignature
InboundNotFinished
InboundFinishedbproto3'
        , true);

        static::$is_initialized = true;
    }
}

