<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: PowersOfAttorney/PowerOfAttorneyValidation.proto

namespace GPBMetadata\PowersOfAttorney;

class PowerOfAttorneyValidation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Severity::initOnce();
        \GPBMetadata\ContentV3::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
0PowersOfAttorney/PowerOfAttorneyValidation.proto!Diadoc.Api.Proto.PowersOfAttorneyContent_v3.proto"�
PowerOfAttorneyValidationStatus1
Severity (2.Diadoc.Api.Proto.SeverityH �e
StatusNamedId (2I.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationStatusNamedIdH�

StatusText (	H�U
Errors (2A.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationErrorBV
ValidationProtocol (25.Diadoc.Api.Proto.PowersOfAttorney.ValidationProtocolH�^
OperationError (2A.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationErrorH�B
	_SeverityB
_StatusNamedIdB
_StatusTextB
_ValidationProtocolB
_OperationError"<
PowerOfAttorneyValidationError
Code (	
Text (	"�
!PowerOfAttorneyPrevalidateRequestb
ConfidantCertificate (2D.Diadoc.Api.Proto.PowersOfAttorney.ConfidantCertificateToPrevalidate"�
!ConfidantCertificateToPrevalidate

Thumbprint (	H �2
Content (2.Diadoc.Api.Proto.Content_v3H�B
_ThumbprintB

_Content"�
 PowerOfAttorneyPrevalidateResult]
PrevalidateStatus (2B.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationStatus"d
ValidationProtocolN
CheckResults (28.Diadoc.Api.Proto.PowersOfAttorney.ValidationCheckResult"�
ValidationCheckResult\\
Status (2G.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationCheckStatusH �
Name (	U
Error (2A.Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyValidationErrorH�B	
_StatusB
_Error*�
&PowerOfAttorneyValidationStatusNamedId
UnknownStatus 
CanNotBeValidated
IsValid

IsNotValid
ValidationError
IsNotAttached
HasWarnings*^
$PowerOfAttorneyValidationCheckStatus
UnknownCheckStatus 
Ok
Warning	
Errorbproto3'
        , true);

        static::$is_initialized = true;
    }
}

