<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/BilateralDocflow.proto

namespace GPBMetadata\Docflow;

class BilateralDocflow
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Docflow\ReceiptDocflow::initOnce();
        \GPBMetadata\Docflow\RecipientSignatureDocflow::initOnce();
        \GPBMetadata\Docflow\RecipientSignatureRejectionDocflow::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Docflow/BilateralDocflow.protoDiadoc.Api.Proto.Docflow\'Docflow/RecipientSignatureDocflow.proto0Docflow/RecipientSignatureRejectionDocflow.proto"�
BilateralDocflow

IsFinished (H �E
ReceiptDocflow (2(.Diadoc.Api.Proto.Docflow.ReceiptDocflowH�[
RecipientSignatureDocflow (23.Diadoc.Api.Proto.Docflow.RecipientSignatureDocflowH�m
"RecipientSignatureRejectionDocflow (2<.Diadoc.Api.Proto.Docflow.RecipientSignatureRejectionDocflowH�
IsReceiptRequested (H�*
IsRecipientSignatureRequested (H�(
IsDocumentSignedByRecipient (H�*
IsDocumentRejectedByRecipient (H�#
CanDocumentBeReceipted	 (H�(
CanDocumentBeSignedBySender
 (H	�5
(CanDocumentBeSignedOrRejectedByRecipient (H
�B
_IsFinishedB
_ReceiptDocflowB
_RecipientSignatureDocflowB%
#_RecipientSignatureRejectionDocflowB
_IsReceiptRequestedB 
_IsRecipientSignatureRequestedB
_IsDocumentSignedByRecipientB 
_IsDocumentRejectedByRecipientB
_CanDocumentBeReceiptedB
_CanDocumentBeSignedBySenderB+
)_CanDocumentBeSignedOrRejectedByRecipientbproto3'
        , true);

        static::$is_initialized = true;
    }
}

