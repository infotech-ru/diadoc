<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocflowApiV3.proto

namespace GPBMetadata\Docflow;

class DocflowApiV3
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Timestamp::initOnce();
        \GPBMetadata\DocumentId::initOnce();
        \GPBMetadata\TotalCountType::initOnce();
        \GPBMetadata\Docflow\DocumentWithDocflowV3::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
Docflow/DocflowApiV3.protoDiadoc.Api.Proto.DocflowDocumentId.protoTotalCountType.proto#Docflow/DocumentWithDocflowV3.proto"_
GetDocflowBatchResponseV3B
	Documents (2/.Diadoc.Api.Proto.Docflow.DocumentWithDocflowV3"y
SearchDocflowsResponseV3B
	Documents (2/.Diadoc.Api.Proto.Docflow.DocumentWithDocflowV3
HaveMoreDocuments ("h
FetchedDocumentV3A
Document (2/.Diadoc.Api.Proto.Docflow.DocumentWithDocflowV3
IndexKey ("�
GetDocflowsByPacketIdResponseV3>
	Documents (2+.Diadoc.Api.Proto.Docflow.FetchedDocumentV3
NextPageIndexKey (H �B
_NextPageIndexKey"�
GetDocflowEventsResponseV3

TotalCount (8
Events (2(.Diadoc.Api.Proto.Docflow.DocflowEventV38
TotalCountType (2 .Diadoc.Api.Proto.TotalCountType"�
DocflowEventV3
EventId (	.
	Timestamp (2.Diadoc.Api.Proto.Timestamp0

DocumentId (2.Diadoc.Api.Proto.DocumentId
IndexKey (F
Document (2/.Diadoc.Api.Proto.Docflow.DocumentWithDocflowV3H �
PreviousEventId (	H�S
PreviousDocumentState (2/.Diadoc.Api.Proto.Docflow.DocumentWithDocflowV3H�B
	_DocumentB
_PreviousEventIdB
_PreviousDocumentStatebproto3'
        , true);

        static::$is_initialized = true;
    }
}

