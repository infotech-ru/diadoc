<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Employees/EmployeeToCreate.proto

namespace GPBMetadata\Employees;

class EmployeeToCreate
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\User::initOnce();
        \GPBMetadata\Employees\Employee::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 Employees/EmployeeToCreate.protoDiadoc.Api.Proto.EmployeesEmployees/Employee.proto"�
EmployeeToCreateL
Credentials (27.Diadoc.Api.Proto.Employees.EmployeeToCreateCredentials
Position (	H �
CanBeInvitedForChat (D
Permissions (2/.Diadoc.Api.Proto.Employees.EmployeePermissionsB
	_Position"�
EmployeeToCreateCredentialsG
Login (23.Diadoc.Api.Proto.Employees.EmployeeToCreateByLoginH �S
Certificate (29.Diadoc.Api.Proto.Employees.EmployeeToCreateByCertificateH�B
_LoginB
_Certificate"h
EmployeeToCreateByLogin
Login (	1
FullName (2.Diadoc.Api.Proto.FullNameH �B
	_FullName"x
EmployeeToCreateByCertificate
Content (
AccessBasis (	H �
Email (	H�B
_AccessBasisB
_Emailbproto3'
        , true);

        static::$is_initialized = true;
    }
}

