<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/AcceptanceCertificate552Info.proto

namespace GPBMetadata\Invoicing;

class AcceptanceCertificate552Info
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Invoicing\InvoiceInfo::initOnce();
        \GPBMetadata\Invoicing\ExtendedSigner::initOnce();
        \GPBMetadata\Invoicing\ExtendedOrganizationInfo::initOnce();
        \GPBMetadata\Invoicing\UniversalTransferDocumentInfo::initOnce();
        \GPBMetadata\Invoicing\TovTorgInfo::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,Invoicing/AcceptanceCertificate552Info.protoDiadoc.Api.Proto.InvoicingInvoicing/ExtendedSigner.proto(Invoicing/ExtendedOrganizationInfo.proto-Invoicing/UniversalTransferDocumentInfo.protoInvoicing/TovTorgInfo.proto"�
\'AcceptanceCertificate552SellerTitleInfoR
Seller (2B.Diadoc.Api.Proto.Invoicing.Organizations.ExtendedOrganizationInfoQ
Buyer (2B.Diadoc.Api.Proto.Invoicing.Organizations.ExtendedOrganizationInfoC
Signers (22.Diadoc.Api.Proto.Invoicing.Signers.ExtendedSigner7
Grounds (2&.Diadoc.Api.Proto.Invoicing.GroundInfo
Currency (	
CurrencyRate (	H �R
Works (2C.Diadoc.Api.Proto.Invoicing.AcceptanceCertificate552WorkDescription
DocumentDate (	
DocumentNumber	 (	H�
RevisionDate
 (	H�
RevisionNumber (	H�
DocumentCreator (	 
DocumentCreatorBase (	H�
OperationType (	H�
OperationTitle (	H�#
GovernmentContractInfo (	H�K
AdditionalInfoId (2,.Diadoc.Api.Proto.Invoicing.AdditionalInfoIdH�
DocumentName (	V
TransferInfo (2@.Diadoc.Api.Proto.Invoicing.AcceptanceCertificate552TransferInfoB
_CurrencyRateB
_DocumentNumberB
_RevisionDateB
_RevisionNumberB
_DocumentCreatorBaseB
_OperationTypeB
_OperationTitleB
_GovernmentContractInfoB
_AdditionalInfoId"�
$AcceptanceCertificate552TransferInfo
OperationInfo (	
TransferDate (	H �%
CreatedThingTransferDate (	H�
CreatedThingInfo (	H�C
AdditionalInfos (2*.Diadoc.Api.Proto.Invoicing.AdditionalInfoB
_TransferDateB
_CreatedThingTransferDateB
_CreatedThingInfo"�
\'AcceptanceCertificate552WorkDescription
StartingDate (	H �
CompletionDate (	H�!
TotalWithVatExcluded (	H�
TotalVat (	H�
Total (	K
Items (2<.Diadoc.Api.Proto.Invoicing.AcceptanceCertificate552WorkItemB
_StartingDateB
_CompletionDateB
_TotalWithVatExcludedB
	_TotalVat"�
 AcceptanceCertificate552WorkItem
Name (	H �
Description (	H�
UnitCode (	H�
UnitName (	H�
Price (	H�
Quantity (	H�$
SubtotalWithVatExcluded (	H�
Vat (	H�
Subtotal	 (	H�C
AdditionalInfos
 (2*.Diadoc.Api.Proto.Invoicing.AdditionalInfo9
TaxRate (2#.Diadoc.Api.Proto.Invoicing.TaxRateH	�
ItemAccountDebit (	H
�
ItemAccountCredit (	H�B
_NameB
_DescriptionB
	_UnitCodeB
	_UnitNameB
_PriceB
	_QuantityB
_SubtotalWithVatExcludedB
_VatB
	_SubtotalB

_TaxRateB
_ItemAccountDebitB
_ItemAccountCredit"�
&AcceptanceCertificate552BuyerTitleInfoC
Signers (22.Diadoc.Api.Proto.Invoicing.Signers.ExtendedSigner
DocumentCreator (	 
DocumentCreatorBase (	H �
OperationType (	H�
OperationContent (	
AcceptanceDate (	H�#
CreatedThingAcceptDate (	H�
CreatedThingInfo	 (	H�K
AdditionalInfoId
 (2,.Diadoc.Api.Proto.Invoicing.AdditionalInfoIdH�B
_DocumentCreatorBaseB
_OperationTypeB
_AcceptanceDateB
_CreatedThingAcceptDateB
_CreatedThingInfoB
_AdditionalInfoIdbproto3'
        , true);

        static::$is_initialized = true;
    }
}

