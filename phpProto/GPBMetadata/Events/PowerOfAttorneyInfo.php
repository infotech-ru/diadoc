<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/PowerOfAttorneyInfo.proto

namespace GPBMetadata\Events;

class PowerOfAttorneyInfo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\PowersOfAttorney\PowerOfAttorney::initOnce();
        \GPBMetadata\PowersOfAttorney\PowerOfAttorneyValidation::initOnce();
        \GPBMetadata\RoamingSendingStatus::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 Events/PowerOfAttorneyInfo.protoDiadoc.Api.Proto.Events0PowersOfAttorney/PowerOfAttorneyValidation.protoRoamingSendingStatus.proto"�
PowerOfAttorneyInfoH
FullId (28.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyFullIdW
Status (2B.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationStatusH �I
RoamingSendingStatus (2&.Diadoc.Api.Proto.RoamingSendingStatusH�W
SendingType (2=.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneySendingTypeH�B	
_StatusB
_RoamingSendingStatusB
_SendingTypebproto3'
        , true);

        static::$is_initialized = true;
    }
}

