<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/ReceiptDocflow.proto

namespace GPBMetadata\Docflow;

class ReceiptDocflow
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Docflow\Attachment::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Docflow/ReceiptDocflow.protoDiadoc.Api.Proto.Docflow"�
ReceiptDocflow

IsFinished (H �J
ReceiptAttachment (2*.Diadoc.Api.Proto.Docflow.SignedAttachmentH�B
_IsFinishedB
_ReceiptAttachmentbproto3'
        , true);

        static::$is_initialized = true;
    }
}

