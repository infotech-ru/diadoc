<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Departments/Department.proto

namespace GPBMetadata\Departments;

class Department
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Address::initOnce();
        \GPBMetadata\Timestamp::initOnce();
        \GPBMetadata\Departments\Routing::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Departments/Department.protoDiadoc.Api.Proto.DepartmentsTimestamp.protoDepartments/Routing.proto"�

Department

Id (	
ParentDepartmentId (	H �
Name (	
Abbreviation (	
Kpp (	H�/
Address (2.Diadoc.Api.Proto.AddressH�6
Routing (2%.Diadoc.Api.Proto.Departments.Routing6
CreationTimestamp (2.Diadoc.Api.Proto.TimestampB
_ParentDepartmentIdB
_KppB

_Addressbproto3'
        , true);

        static::$is_initialized = true;
    }
}

