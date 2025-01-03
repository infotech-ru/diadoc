<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/TovTorgInfo.proto

namespace GPBMetadata\Invoicing;

class TovTorgInfo
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
        $pool->internalAddGeneratedFile(
            '
�
Invoicing/TovTorgInfo.protoDiadoc.Api.Proto.InvoicingInvoicing/ExtendedSigner.proto(Invoicing/ExtendedOrganizationInfo.proto-Invoicing/UniversalTransferDocumentInfo.proto"�

TovTorgSellerTitleInfoR
Seller (2B.Diadoc.Api.Proto.Invoicing.Organizations.ExtendedOrganizationInfoQ
Buyer (2B.Diadoc.Api.Proto.Invoicing.Organizations.ExtendedOrganizationInfoX
Shipper (2B.Diadoc.Api.Proto.Invoicing.Organizations.ExtendedOrganizationInfoH �Z
	Consignee (2B.Diadoc.Api.Proto.Invoicing.Organizations.ExtendedOrganizationInfoH�X
Carrier (2B.Diadoc.Api.Proto.Invoicing.Organizations.ExtendedOrganizationInfoH�C
Signers (22.Diadoc.Api.Proto.Invoicing.Signers.ExtendedSigner7
Grounds (2&.Diadoc.Api.Proto.Invoicing.GroundInfo
Currency (	
CurrencyRate	 (	H�
DocumentDate
 (	
DocumentNumber (	H�
RevisionDate (	H�
RevisionNumber (	H�E
TransferInfo (2/.Diadoc.Api.Proto.Invoicing.TovTorgTransferInfo
DocumentCreator (	 
DocumentCreatorBase (	H�
OperationType (	H�#
GovernmentContractInfo (	H	�<
Table (2(.Diadoc.Api.Proto.Invoicing.TovTorgTableH
�K
AdditionalInfoId (2,.Diadoc.Api.Proto.Invoicing.AdditionalInfoIdH�
DocumentName (	B

_ShipperB

_ConsigneeB

_CarrierB
_CurrencyRateB
_DocumentNumberB
_RevisionDateB
_RevisionNumberB
_DocumentCreatorBaseB
_OperationTypeB
_GovernmentContractInfoB
_TableB
_AdditionalInfoId"�
TovTorgBuyerTitleInfo
DocumentCreator (	 
DocumentCreatorBase (	H �
OperationCode (	H�
OperationContent (	
AcceptanceDate (	H�;
Employee (2$.Diadoc.Api.Proto.Invoicing.EmployeeH�A
OtherIssuer (2\'.Diadoc.Api.Proto.Invoicing.OtherIssuerH�K
AdditionalInfoId (2,.Diadoc.Api.Proto.Invoicing.AdditionalInfoIdH�C
Signers	 (22.Diadoc.Api.Proto.Invoicing.Signers.ExtendedSignerB
_DocumentCreatorBaseB
_OperationCodeB
_AcceptanceDateB
	_EmployeeB
_OtherIssuerB
_AdditionalInfoId"�
TovTorgTable6
Items (2\'.Diadoc.Api.Proto.Invoicing.TovTorgItem
TotalQuantity (	H �

TotalGross (	H�
TotalNet (	H�!
TotalWithVatExcluded (	H�
TotalVat (	H�
Total (	H�B
_TotalQuantityB
_TotalGrossB
	_TotalNetB
_TotalWithVatExcludedB
	_TotalVatB
_Total"�
TovTorgItem
Product (	H �
Feature (	H�
Sort (	H�

VendorCode (	H�
ProductCode (	H�
UnitName (	H�
Unit (	
PackageType (	H�
QuantityInPack	 (	H�
Quantity
 (	H�
Gross (	H	�
Net (	
ItemToRelease (	H
�
Price (	H�$
SubtotalWithVatExcluded (	H�9
TaxRate (2#.Diadoc.Api.Proto.Invoicing.TaxRateH�
Vat (	H�
Subtotal (	
ItemAccountDebit (	H�
ItemAccountCredit (	H�C
AdditionalInfos (2*.Diadoc.Api.Proto.Invoicing.AdditionalInfoB

_ProductB

_FeatureB
_SortB
_VendorCodeB
_ProductCodeB
	_UnitNameB
_PackageTypeB
_QuantityInPackB
	_QuantityB
_GrossB
_ItemToReleaseB
_PriceB
_SubtotalWithVatExcludedB

_TaxRateB
_VatB
_ItemAccountDebitB
_ItemAccountCredit"�
TovTorgTransferInfo
OperationInfo (	
TransferDate (	H �

Attachment (	H�5
Waybills (2#.Diadoc.Api.Proto.Invoicing.Waybill;
Employee (2$.Diadoc.Api.Proto.Invoicing.EmployeeH�A
OtherIssuer (2\'.Diadoc.Api.Proto.Invoicing.OtherIssuerH�C
AdditionalInfos (2*.Diadoc.Api.Proto.Invoicing.AdditionalInfoB
_TransferDateB
_AttachmentB
	_EmployeeB
_OtherIssuer"r

GroundInfo
Name (	
Number (	H �
Date (	H�
Info (	H�B	
_NumberB
_DateB
_Infobproto3'
        , true);

        static::$is_initialized = true;
    }
}

