<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/DocumentList.proto

namespace GPBMetadata\Documents;

class DocumentList
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Documents\Document::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Documents/DocumentList.protoDiadoc.Api.Proto.Documents"�
DocumentList

TotalCount (7
	Documents (2$.Diadoc.Api.Proto.Documents.Document
HasMoreResults (H �B
_HasMoreResultsbproto3'
        , true);

        static::$is_initialized = true;
    }
}

