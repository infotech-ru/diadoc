<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/InvoiceDocflow.proto

namespace GPBMetadata\Docflow;

class InvoiceDocflow
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Timestamp::initOnce();
        \GPBMetadata\Docflow\Attachment::initOnce();
        \GPBMetadata\Docflow\ReceiptDocflow::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Docflow/InvoiceDocflow.protoDiadoc.Api.Proto.DocflowDocflow/Attachment.protoDocflow/ReceiptDocflow.proto"�
InboundInvoiceDocflow

IsFinished (H �S
ReceiptDocflow (26.Diadoc.Api.Proto.Docflow.InboundInvoiceReceiptDocflowH�V
ConfirmationDocflow (24.Diadoc.Api.Proto.Docflow.InvoiceConfirmationDocflowH�`
CorrectionRequestDocflow (29.Diadoc.Api.Proto.Docflow.InvoiceCorrectionRequestDocflowH�?
ConfirmationTimestamp (2.Diadoc.Api.Proto.TimestampH�!
IsAmendmentRequested (H�
	IsRevised (H�
IsCorrected (H�B
_IsFinishedB
_ReceiptDocflowB
_ConfirmationDocflowB
_CorrectionRequestDocflowB
_ConfirmationTimestampB
_IsAmendmentRequestedB

_IsRevisedB
_IsCorrected"�
OutboundInvoiceDocflow

IsFinished (H �E
ReceiptDocflow (2(.Diadoc.Api.Proto.Docflow.ReceiptDocflowH�V
ConfirmationDocflow (24.Diadoc.Api.Proto.Docflow.InvoiceConfirmationDocflowH�`
CorrectionRequestDocflow (29.Diadoc.Api.Proto.Docflow.InvoiceCorrectionRequestDocflowH�?
ConfirmationTimestamp (2.Diadoc.Api.Proto.TimestampH�!
IsAmendmentRequested (H�
	IsRevised (H�
IsCorrected (H�(
CanDocumentBeSignedBySender	 (H�B
_IsFinishedB
_ReceiptDocflowB
_ConfirmationDocflowB
_CorrectionRequestDocflowB
_ConfirmationTimestampB
_IsAmendmentRequestedB

_IsRevisedB
_IsCorrectedB
_CanDocumentBeSignedBySender"�
InvoiceConfirmationDocflow

IsFinished (H �O
ConfirmationAttachment (2*.Diadoc.Api.Proto.Docflow.SignedAttachmentH�E
ReceiptDocflow (2(.Diadoc.Api.Proto.Docflow.ReceiptDocflowH�B
_IsFinishedB
_ConfirmationAttachmentB
_ReceiptDocflow"�
InboundInvoiceReceiptDocflow

IsFinished (H �J
ReceiptAttachment (2*.Diadoc.Api.Proto.Docflow.SignedAttachmentH�V
ConfirmationDocflow (24.Diadoc.Api.Proto.Docflow.InvoiceConfirmationDocflowH�B
_IsFinishedB
_ReceiptAttachmentB
_ConfirmationDocflow"�
InvoiceCorrectionRequestDocflow

IsFinished (H �T
CorrectionRequestAttachment (2*.Diadoc.Api.Proto.Docflow.SignedAttachmentH�E
ReceiptDocflow (2(.Diadoc.Api.Proto.Docflow.ReceiptDocflowH�B
_IsFinishedB
_CorrectionRequestAttachmentB
_ReceiptDocflowbproto3'
        , true);

        static::$is_initialized = true;
    }
}

