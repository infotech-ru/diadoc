<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocumentWithDocflowV3.proto

namespace GPBMetadata\Docflow;

class DocumentWithDocflowV3
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\DocumentId::initOnce();
        \GPBMetadata\Timestamp::initOnce();
        \GPBMetadata\Docflow\DocumentInfoV3::initOnce();
        \GPBMetadata\Docflow\DocflowV3::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#Docflow/DocumentWithDocflowV3.protoDiadoc.Api.Proto.DocflowTimestamp.protoDocflow/DocumentInfoV3.protoDocflow/DocflowV3.proto"�
DocumentWithDocflowV30

DocumentId (2.Diadoc.Api.Proto.DocumentId6
	LastEvent (2#.Diadoc.Api.Proto.Docflow.LastEvent>
DocumentInfo (2(.Diadoc.Api.Proto.Docflow.DocumentInfoV34
Docflow (2#.Diadoc.Api.Proto.Docflow.DocflowV3"L
	LastEvent
EventId (	.
	Timestamp (2.Diadoc.Api.Proto.Timestampbproto3'
        , true);

        static::$is_initialized = true;
    }
}

