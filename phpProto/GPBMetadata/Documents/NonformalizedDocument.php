<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/NonformalizedDocument.proto

namespace GPBMetadata\Documents;

class NonformalizedDocument
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Documents\ReceiptStatus::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%Documents/NonformalizedDocument.proto0Diadoc.Api.Proto.Documents.NonformalizedDocument"�
NonformalizedDocumentMetadataj
DocumentStatus (2M.Diadoc.Api.Proto.Documents.NonformalizedDocument.NonformalizedDocumentStatusH �E
ReceiptStatus (2).Diadoc.Api.Proto.Documents.ReceiptStatusH�B
_DocumentStatusB
_ReceiptStatus*�
NonformalizedDocumentStatus&
"UnknownNonformalizedDocumentStatus \'
#OutboundNoRecipientSignatureRequest(
$OutboundWaitingForRecipientSignature"
OutboundWithRecipientSignature-
)OutboundRecipientSignatureRequestRejected%
!OutboundWaitingForSenderSignature"
OutboundInvalidSenderSignature&
"InboundNoRecipientSignatureRequest\'
#InboundWaitingForRecipientSignature!
InboundWithRecipientSignature,
(InboundRecipientSignatureRequestRejected$
 InboundInvalidRecipientSignature\'
#InternalNoRecipientSignatureRequest	(
$InternalWaitingForRecipientSignature
"
InternalWithRecipientSignature-
)InternalRecipientSignatureRequestRejected%
!InternalWaitingForSenderSignature"
InternalInvalidSenderSignature%
!InternalInvalidRecipientSignaturebproto3'
        , true);

        static::$is_initialized = true;
    }
}

