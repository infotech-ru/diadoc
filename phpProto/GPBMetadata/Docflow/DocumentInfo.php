<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocumentInfo.proto

namespace GPBMetadata\Docflow;

class DocumentInfo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\DocumentType::initOnce();
        \GPBMetadata\DocumentDirection::initOnce();
        \GPBMetadata\Invoicing\UniversalTransferDocumentInfo::initOnce();
        $pool->internalAddGeneratedFile(
            '
�#
Docflow/DocumentInfo.protoDiadoc.Api.Proto.DocflowDocumentDirection.proto-Invoicing/UniversalTransferDocumentInfo.proto"�
DocumentInfo9
DocumentType (2.Diadoc.Api.Proto.DocumentTypeH �C
DocumentDirection (2#.Diadoc.Api.Proto.DocumentDirectionH�
IsTest (H�
CustomDocumentId (	H�
FromDepartmentId (	H�
ToDepartmentId (	H�
CounteragentBoxId (	H�S
DocumentDateAndNumber (2/.Diadoc.Api.Proto.Docflow.DocumentDateAndNumberH�K
BasicDocumentInfo	 (2+.Diadoc.Api.Proto.Docflow.BasicDocumentInfoH�G
InvoiceInfo
 (2-.Diadoc.Api.Proto.Docflow.InvoiceDocumentInfoH	�[
InvoiceCorrectionInfo (27.Diadoc.Api.Proto.Docflow.InvoiceCorrectionDocumentInfoH
�K
PriceListInfo (2/.Diadoc.Api.Proto.Docflow.PriceListDocumentInfoH�I
ContractInfo (2..Diadoc.Api.Proto.Docflow.ContractDocumentInfoH�e
SupplementaryAgreementInfo (2<.Diadoc.Api.Proto.Docflow.SupplementaryAgreementDocumentInfoH�c
UniversalTransferDocumentInfo (27.Diadoc.Api.Proto.Docflow.UniversalTransferDocumentInfoH�g
UniversalCorrectionDocumentInfo (29.Diadoc.Api.Proto.Docflow.UniversalCorrectionDocumentInfoH�
AttachmentVersion (	H�
Version (	B
_DocumentTypeB
_DocumentDirectionB	
_IsTestB
_CustomDocumentIdB
_FromDepartmentIdB
_ToDepartmentIdB
_CounteragentBoxIdB
_DocumentDateAndNumberB
_BasicDocumentInfoB
_InvoiceInfoB
_InvoiceCorrectionInfoB
_PriceListInfoB
_ContractInfoB
_SupplementaryAgreementInfoB 
_UniversalTransferDocumentInfoB"
 _UniversalCorrectionDocumentInfoB
_AttachmentVersion"s
DocumentDateAndNumber
DocumentDate (	H �
DocumentNumber (	H�B
_DocumentDateB
_DocumentNumber"�
BasicDocumentInfo
Total (	H �
NoVat (H�
Vat (	H�
Grounds (	H�S
RevisionDateAndNumber (2/.Diadoc.Api.Proto.Docflow.DocumentDateAndNumberH�B
_TotalB
_NoVatB
_VatB

_GroundsB
_RevisionDateAndNumber"�
InvoiceDocumentInfo
Total (	H �
Vat (	H�
CurrencyCode (H�Z
OriginalInvoiceDateAndNumber (2/.Diadoc.Api.Proto.Docflow.DocumentDateAndNumberH�B
_TotalB
_VatB
_CurrencyCodeB
_OriginalInvoiceDateAndNumber"�
InvoiceCorrectionDocumentInfo
TotalInc (	H �
TotalDec (	H�
VatInc (	H�
VatDec (	H�
CurrencyCode (H�Z
OriginalInvoiceDateAndNumber (2/.Diadoc.Api.Proto.Docflow.DocumentDateAndNumberH�b
$OriginalInvoiceRevisionDateAndNumber (2/.Diadoc.Api.Proto.Docflow.DocumentDateAndNumberH�d
&OriginalInvoiceCorrectionDateAndNumber (2/.Diadoc.Api.Proto.Docflow.DocumentDateAndNumberH�B
	_TotalIncB
	_TotalDecB	
_VatIncB	
_VatDecB
_CurrencyCodeB
_OriginalInvoiceDateAndNumberB\'
%_OriginalInvoiceRevisionDateAndNumberB)
\'_OriginalInvoiceCorrectionDateAndNumber"�
PriceListDocumentInfo#
PriceListEffectiveDate (	H �[
ContractDocumentDateAndNumber (2/.Diadoc.Api.Proto.Docflow.DocumentDateAndNumberH�B
_PriceListEffectiveDateB 
_ContractDocumentDateAndNumber"p
ContractDocumentInfo
ContractPrice (	H �
ContractType (	H�B
_ContractPriceB
_ContractType"�
"SupplementaryAgreementDocumentInfo
ContractType (	H �V
ContractDocumentDateAndNumber (2/.Diadoc.Api.Proto.Docflow.DocumentDateAndNumberN
DocumentDateAndNumber (2/.Diadoc.Api.Proto.Docflow.DocumentDateAndNumber
Total (	H�B
_ContractTypeB
_Total"�
UniversalTransferDocumentInfo
Total (	H �
Vat (	H�
CurrencyCode (H�
Grounds (	H�:
Function (2(.Diadoc.Api.Proto.Invoicing.FunctionType[
OriginalDocumentDateAndNumber (2/.Diadoc.Api.Proto.Docflow.DocumentDateAndNumberH�B
_TotalB
_VatB
_CurrencyCodeB

_GroundsB 
_OriginalDocumentDateAndNumber"�
UniversalCorrectionDocumentInfo
TotalInc (	H �
TotalDec (	H�
VatInc (	H�
VatDec (	H�
CurrencyCode (H�
Grounds (	H�:
Function (2(.Diadoc.Api.Proto.Invoicing.FunctionType[
OriginalDocumentDateAndNumber (2/.Diadoc.Api.Proto.Docflow.DocumentDateAndNumberH�c
%OriginalDocumentRevisionDateAndNumber	 (2/.Diadoc.Api.Proto.Docflow.DocumentDateAndNumberH�e
\'OriginalDocumentCorrectionDateAndNumber
 (2/.Diadoc.Api.Proto.Docflow.DocumentDateAndNumberH�B
	_TotalIncB
	_TotalDecB	
_VatIncB	
_VatDecB
_CurrencyCodeB

_GroundsB 
_OriginalDocumentDateAndNumberB(
&_OriginalDocumentRevisionDateAndNumberB*
(_OriginalDocumentCorrectionDateAndNumberbproto3'
        , true);

        static::$is_initialized = true;
    }
}

