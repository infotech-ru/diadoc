<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: OrganizationUser.proto

namespace GPBMetadata;

class OrganizationUser
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\OrganizationUserPermissions::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
OrganizationUser.protoDiadoc.Api.Proto"�
OrganizationUser

Id (	
Name (	B
Permissions (2-.Diadoc.Api.Proto.OrganizationUserPermissions
Position (	"a
OrganizationUsersList1
Users (2".Diadoc.Api.Proto.OrganizationUser

        , true);

        static::$is_initialized = true;
    }
}
