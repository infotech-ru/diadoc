<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: User.proto

namespace GPBMetadata;

class User
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\CertificateInfo::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

User.protoDiadoc.Api.Proto"�
User
Id (	H �
LastName (	H�
	FirstName (	H�

MiddleName (	H�<
CloudCertificates (2!.Diadoc.Api.Proto.CertificateInfoB
_IdB
	_LastNameB

_FirstNameB
_MiddleName"�
UserV2
UserId (	
Login (	H �1
FullName (2.Diadoc.Api.Proto.FullNameH�
IsRegistered (B
_LoginB
	_FullName"W
FullName
LastName (	
	FirstName (	

MiddleName (	H �B
_MiddleNamebproto3'
        , true);

        static::$is_initialized = true;
    }
}

