<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Content_v3.proto

namespace GPBMetadata;

class ContentV3
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\DocumentId::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Content_v3.protoDiadoc.Api.Proto"�

Content_v3
Content (H �
NameOnShelf (	H�3
EntityId (2.Diadoc.Api.Proto.DocumentIdH�
PatchedContentId (	H�B

_ContentB
_NameOnShelfB
	_EntityIdB
_PatchedContentIdbproto3'
        , true);

        static::$is_initialized = true;
    }
}

