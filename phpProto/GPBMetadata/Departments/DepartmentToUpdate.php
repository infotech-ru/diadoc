<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Departments/DepartmentToUpdate.proto

namespace GPBMetadata\Departments;

class DepartmentToUpdate
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Address::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
$Departments/DepartmentToUpdate.protoDiadoc.Api.Proto.Departments"�
DepartmentToUpdateR
ParentDepartment (23.Diadoc.Api.Proto.Departments.ParentDepartmentPatchH �R
DepartmentNaming (23.Diadoc.Api.Proto.Departments.DepartmentNamingPatchH�B
Kpp (20.Diadoc.Api.Proto.Departments.DepartmentKppPatchH�J
Address (24.Diadoc.Api.Proto.Departments.DepartmentAddressPatchH�J
Routing (24.Diadoc.Api.Proto.Departments.DepartmentRoutingPatchH�B
_ParentDepartmentB
_DepartmentNamingB
_KppB

_AddressB

_Routing"3
ParentDepartmentPatch
ParentDepartmentId (	";
DepartmentNamingPatch
Name (	
Abbreviation (	".
DepartmentKppPatch
Kpp (	H �B
_Kpp"U
DepartmentAddressPatch/
Address (2.Diadoc.Api.Proto.AddressH �B

_Address"6
DepartmentRoutingPatch
Kpp (
Address (bproto3'
        , true);

        static::$is_initialized = true;
    }
}

