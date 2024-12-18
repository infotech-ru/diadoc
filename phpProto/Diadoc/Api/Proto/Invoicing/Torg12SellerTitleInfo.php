<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/Torg12Info.proto

namespace Diadoc\Api\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Со стороны продавца
 *
 * Generated from protobuf message <code>Diadoc.Api.Proto.Invoicing.Torg12SellerTitleInfo</code>
 */
class Torg12SellerTitleInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Дата товарной накладной
     *
     * Generated from protobuf field <code>string DocumentDate = 1;</code>
     */
    protected $DocumentDate = '';
    /**
     * Номер товарной накладной
     *
     * Generated from protobuf field <code>optional string DocumentNumber = 2;</code>
     */
    protected $DocumentNumber = null;
    /**
     * Участник документооборота, отпустивший товар
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.DocflowParticipant SellerDocflowParticipant = 3;</code>
     */
    protected $SellerDocflowParticipant = null;
    /**
     * Участник документооборота, которому отпущен товар
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.DocflowParticipant BuyerDocflowParticipant = 4;</code>
     */
    protected $BuyerDocflowParticipant = null;
    /**
     * Грузоотправитель
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OrganizationInfo Shipper = 5;</code>
     */
    protected $Shipper = null;
    /**
     * Грузополучатель
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OrganizationInfo Consignee = 6;</code>
     */
    protected $Consignee = null;
    /**
     * Поставщик
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OrganizationInfo Supplier = 7;</code>
     */
    protected $Supplier = null;
    /**
     * Плательщик
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OrganizationInfo Payer = 8;</code>
     */
    protected $Payer = null;
    /**
     * Основание
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Grounds Grounds = 9;</code>
     */
    protected $Grounds = null;
    /**
     * Дата составления транспортной накладной
     *
     * Generated from protobuf field <code>optional string WaybillDate = 10;</code>
     */
    protected $WaybillDate = null;
    /**
     * Номер транспортной накладной
     *
     * Generated from protobuf field <code>optional string WaybillNumber = 11;</code>
     */
    protected $WaybillNumber = null;
    /**
     * Код вида операции
     *
     * Generated from protobuf field <code>optional string OperationCode = 12;</code>
     */
    protected $OperationCode = null;
    /**
     * Табличные сведения товарной накладной
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.Torg12Item Items = 13;</code>
     */
    private $Items;
    /**
     * Количество мест, штук - всего по накладной
     *
     * Generated from protobuf field <code>optional string ParcelsQuantityTotal = 14;</code>
     */
    protected $ParcelsQuantityTotal = null;
    /**
     * Количество мест, штук - всего по накладной, прописью
     *
     * Generated from protobuf field <code>optional string ParcelsQuantityTotalInWords = 15;</code>
     */
    protected $ParcelsQuantityTotalInWords = null;
    /**
     * Брутто - всего по накладной
     *
     * Generated from protobuf field <code>optional string GrossQuantityTotal = 16;</code>
     */
    protected $GrossQuantityTotal = null;
    /**
     * Брутто - всего по накладной, прописью
     *
     * Generated from protobuf field <code>optional string GrossQuantityTotalInWords = 17;</code>
     */
    protected $GrossQuantityTotalInWords = null;
    /**
     * Нетто - всего по накладной
     *
     * Generated from protobuf field <code>optional string NetQuantityTotal = 18;</code>
     */
    protected $NetQuantityTotal = null;
    /**
     * Нетто - всего по накладной, прописью
     *
     * Generated from protobuf field <code>optional string NetQuantityTotalInWords = 19;</code>
     */
    protected $NetQuantityTotalInWords = null;
    /**
     * Количество (масса нетто) - всего по накладной
     *
     * Generated from protobuf field <code>optional string QuantityTotal = 20;</code>
     */
    protected $QuantityTotal = null;
    /**
     * Сумма без учета НДС - всего по накладной
     *
     * Generated from protobuf field <code>optional string TotalWithVatExcluded = 21;</code>
     */
    protected $TotalWithVatExcluded = null;
    /**
     * Сумма НДС - всего по накладной
     *
     * Generated from protobuf field <code>optional string Vat = 22;</code>
     */
    protected $Vat = null;
    /**
     * Сумма с учетом НДС - всего по накладной
     *
     * Generated from protobuf field <code>string Total = 23;</code>
     */
    protected $Total = '';
    /**
     * Сумма с учетом НДС - всего по накладной, прописью
     *
     * Generated from protobuf field <code>optional string TotalInWords = 24;</code>
     */
    protected $TotalInWords = null;
    /**
     * Дата отпуска
     *
     * Generated from protobuf field <code>optional string SupplyDate = 25;</code>
     */
    protected $SupplyDate = null;
    /**
     * Отпуск разрешил
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Official SupplyAllowedBy = 26;</code>
     */
    protected $SupplyAllowedBy = null;
    /**
     * Отпуск произвел
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Official SupplyPerformedBy = 27;</code>
     */
    protected $SupplyPerformedBy = null;
    /**
     * Главный бухгалтер
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Official ChiefAccountant = 28;</code>
     */
    protected $ChiefAccountant = null;
    /**
     * Подписант
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Signer Signer = 29;</code>
     */
    protected $Signer = null;
    /**
     * Дополнительные сведения
     *
     * Generated from protobuf field <code>optional string AdditionalInfo = 30;</code>
     */
    protected $AdditionalInfo = null;
    /**
     * Приложение, количество листов
     *
     * Generated from protobuf field <code>optional string AttachmentSheetsQuantity = 31;</code>
     */
    protected $AttachmentSheetsQuantity = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $DocumentDate
     *           Дата товарной накладной
     *     @type string $DocumentNumber
     *           Номер товарной накладной
     *     @type \Diadoc\Api\Proto\Invoicing\DocflowParticipant $SellerDocflowParticipant
     *           Участник документооборота, отпустивший товар
     *     @type \Diadoc\Api\Proto\Invoicing\DocflowParticipant $BuyerDocflowParticipant
     *           Участник документооборота, которому отпущен товар
     *     @type \Diadoc\Api\Proto\Invoicing\OrganizationInfo $Shipper
     *           Грузоотправитель
     *     @type \Diadoc\Api\Proto\Invoicing\OrganizationInfo $Consignee
     *           Грузополучатель
     *     @type \Diadoc\Api\Proto\Invoicing\OrganizationInfo $Supplier
     *           Поставщик
     *     @type \Diadoc\Api\Proto\Invoicing\OrganizationInfo $Payer
     *           Плательщик
     *     @type \Diadoc\Api\Proto\Invoicing\Grounds $Grounds
     *           Основание
     *     @type string $WaybillDate
     *           Дата составления транспортной накладной
     *     @type string $WaybillNumber
     *           Номер транспортной накладной
     *     @type string $OperationCode
     *           Код вида операции
     *     @type array<\Diadoc\Api\Proto\Invoicing\Torg12Item>|\Google\Protobuf\Internal\RepeatedField $Items
     *           Табличные сведения товарной накладной
     *     @type string $ParcelsQuantityTotal
     *           Количество мест, штук - всего по накладной
     *     @type string $ParcelsQuantityTotalInWords
     *           Количество мест, штук - всего по накладной, прописью
     *     @type string $GrossQuantityTotal
     *           Брутто - всего по накладной
     *     @type string $GrossQuantityTotalInWords
     *           Брутто - всего по накладной, прописью
     *     @type string $NetQuantityTotal
     *           Нетто - всего по накладной
     *     @type string $NetQuantityTotalInWords
     *           Нетто - всего по накладной, прописью
     *     @type string $QuantityTotal
     *           Количество (масса нетто) - всего по накладной
     *     @type string $TotalWithVatExcluded
     *           Сумма без учета НДС - всего по накладной
     *     @type string $Vat
     *           Сумма НДС - всего по накладной
     *     @type string $Total
     *           Сумма с учетом НДС - всего по накладной
     *     @type string $TotalInWords
     *           Сумма с учетом НДС - всего по накладной, прописью
     *     @type string $SupplyDate
     *           Дата отпуска
     *     @type \Diadoc\Api\Proto\Invoicing\Official $SupplyAllowedBy
     *           Отпуск разрешил
     *     @type \Diadoc\Api\Proto\Invoicing\Official $SupplyPerformedBy
     *           Отпуск произвел
     *     @type \Diadoc\Api\Proto\Invoicing\Official $ChiefAccountant
     *           Главный бухгалтер
     *     @type \Diadoc\Api\Proto\Invoicing\Signer $Signer
     *           Подписант
     *     @type string $AdditionalInfo
     *           Дополнительные сведения
     *     @type string $AttachmentSheetsQuantity
     *           Приложение, количество листов
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\Torg12Info::initOnce();
        parent::__construct($data);
    }

    /**
     * Дата товарной накладной
     *
     * Generated from protobuf field <code>string DocumentDate = 1;</code>
     * @return string
     */
    public function getDocumentDate()
    {
        return $this->DocumentDate;
    }

    /**
     * Дата товарной накладной
     *
     * Generated from protobuf field <code>string DocumentDate = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->DocumentDate = $var;

        return $this;
    }

    /**
     * Номер товарной накладной
     *
     * Generated from protobuf field <code>optional string DocumentNumber = 2;</code>
     * @return string
     */
    public function getDocumentNumber()
    {
        return isset($this->DocumentNumber) ? $this->DocumentNumber : '';
    }

    public function hasDocumentNumber()
    {
        return isset($this->DocumentNumber);
    }

    public function clearDocumentNumber()
    {
        unset($this->DocumentNumber);
    }

    /**
     * Номер товарной накладной
     *
     * Generated from protobuf field <code>optional string DocumentNumber = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->DocumentNumber = $var;

        return $this;
    }

    /**
     * Участник документооборота, отпустивший товар
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.DocflowParticipant SellerDocflowParticipant = 3;</code>
     * @return \Diadoc\Api\Proto\Invoicing\DocflowParticipant|null
     */
    public function getSellerDocflowParticipant()
    {
        return $this->SellerDocflowParticipant;
    }

    public function hasSellerDocflowParticipant()
    {
        return isset($this->SellerDocflowParticipant);
    }

    public function clearSellerDocflowParticipant()
    {
        unset($this->SellerDocflowParticipant);
    }

    /**
     * Участник документооборота, отпустивший товар
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.DocflowParticipant SellerDocflowParticipant = 3;</code>
     * @param \Diadoc\Api\Proto\Invoicing\DocflowParticipant $var
     * @return $this
     */
    public function setSellerDocflowParticipant($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\DocflowParticipant::class);
        $this->SellerDocflowParticipant = $var;

        return $this;
    }

    /**
     * Участник документооборота, которому отпущен товар
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.DocflowParticipant BuyerDocflowParticipant = 4;</code>
     * @return \Diadoc\Api\Proto\Invoicing\DocflowParticipant|null
     */
    public function getBuyerDocflowParticipant()
    {
        return $this->BuyerDocflowParticipant;
    }

    public function hasBuyerDocflowParticipant()
    {
        return isset($this->BuyerDocflowParticipant);
    }

    public function clearBuyerDocflowParticipant()
    {
        unset($this->BuyerDocflowParticipant);
    }

    /**
     * Участник документооборота, которому отпущен товар
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.DocflowParticipant BuyerDocflowParticipant = 4;</code>
     * @param \Diadoc\Api\Proto\Invoicing\DocflowParticipant $var
     * @return $this
     */
    public function setBuyerDocflowParticipant($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\DocflowParticipant::class);
        $this->BuyerDocflowParticipant = $var;

        return $this;
    }

    /**
     * Грузоотправитель
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OrganizationInfo Shipper = 5;</code>
     * @return \Diadoc\Api\Proto\Invoicing\OrganizationInfo|null
     */
    public function getShipper()
    {
        return $this->Shipper;
    }

    public function hasShipper()
    {
        return isset($this->Shipper);
    }

    public function clearShipper()
    {
        unset($this->Shipper);
    }

    /**
     * Грузоотправитель
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OrganizationInfo Shipper = 5;</code>
     * @param \Diadoc\Api\Proto\Invoicing\OrganizationInfo $var
     * @return $this
     */
    public function setShipper($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\OrganizationInfo::class);
        $this->Shipper = $var;

        return $this;
    }

    /**
     * Грузополучатель
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OrganizationInfo Consignee = 6;</code>
     * @return \Diadoc\Api\Proto\Invoicing\OrganizationInfo|null
     */
    public function getConsignee()
    {
        return $this->Consignee;
    }

    public function hasConsignee()
    {
        return isset($this->Consignee);
    }

    public function clearConsignee()
    {
        unset($this->Consignee);
    }

    /**
     * Грузополучатель
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OrganizationInfo Consignee = 6;</code>
     * @param \Diadoc\Api\Proto\Invoicing\OrganizationInfo $var
     * @return $this
     */
    public function setConsignee($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\OrganizationInfo::class);
        $this->Consignee = $var;

        return $this;
    }

    /**
     * Поставщик
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OrganizationInfo Supplier = 7;</code>
     * @return \Diadoc\Api\Proto\Invoicing\OrganizationInfo|null
     */
    public function getSupplier()
    {
        return $this->Supplier;
    }

    public function hasSupplier()
    {
        return isset($this->Supplier);
    }

    public function clearSupplier()
    {
        unset($this->Supplier);
    }

    /**
     * Поставщик
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OrganizationInfo Supplier = 7;</code>
     * @param \Diadoc\Api\Proto\Invoicing\OrganizationInfo $var
     * @return $this
     */
    public function setSupplier($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\OrganizationInfo::class);
        $this->Supplier = $var;

        return $this;
    }

    /**
     * Плательщик
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OrganizationInfo Payer = 8;</code>
     * @return \Diadoc\Api\Proto\Invoicing\OrganizationInfo|null
     */
    public function getPayer()
    {
        return $this->Payer;
    }

    public function hasPayer()
    {
        return isset($this->Payer);
    }

    public function clearPayer()
    {
        unset($this->Payer);
    }

    /**
     * Плательщик
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OrganizationInfo Payer = 8;</code>
     * @param \Diadoc\Api\Proto\Invoicing\OrganizationInfo $var
     * @return $this
     */
    public function setPayer($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\OrganizationInfo::class);
        $this->Payer = $var;

        return $this;
    }

    /**
     * Основание
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Grounds Grounds = 9;</code>
     * @return \Diadoc\Api\Proto\Invoicing\Grounds|null
     */
    public function getGrounds()
    {
        return $this->Grounds;
    }

    public function hasGrounds()
    {
        return isset($this->Grounds);
    }

    public function clearGrounds()
    {
        unset($this->Grounds);
    }

    /**
     * Основание
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Grounds Grounds = 9;</code>
     * @param \Diadoc\Api\Proto\Invoicing\Grounds $var
     * @return $this
     */
    public function setGrounds($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\Grounds::class);
        $this->Grounds = $var;

        return $this;
    }

    /**
     * Дата составления транспортной накладной
     *
     * Generated from protobuf field <code>optional string WaybillDate = 10;</code>
     * @return string
     */
    public function getWaybillDate()
    {
        return isset($this->WaybillDate) ? $this->WaybillDate : '';
    }

    public function hasWaybillDate()
    {
        return isset($this->WaybillDate);
    }

    public function clearWaybillDate()
    {
        unset($this->WaybillDate);
    }

    /**
     * Дата составления транспортной накладной
     *
     * Generated from protobuf field <code>optional string WaybillDate = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setWaybillDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->WaybillDate = $var;

        return $this;
    }

    /**
     * Номер транспортной накладной
     *
     * Generated from protobuf field <code>optional string WaybillNumber = 11;</code>
     * @return string
     */
    public function getWaybillNumber()
    {
        return isset($this->WaybillNumber) ? $this->WaybillNumber : '';
    }

    public function hasWaybillNumber()
    {
        return isset($this->WaybillNumber);
    }

    public function clearWaybillNumber()
    {
        unset($this->WaybillNumber);
    }

    /**
     * Номер транспортной накладной
     *
     * Generated from protobuf field <code>optional string WaybillNumber = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setWaybillNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->WaybillNumber = $var;

        return $this;
    }

    /**
     * Код вида операции
     *
     * Generated from protobuf field <code>optional string OperationCode = 12;</code>
     * @return string
     */
    public function getOperationCode()
    {
        return isset($this->OperationCode) ? $this->OperationCode : '';
    }

    public function hasOperationCode()
    {
        return isset($this->OperationCode);
    }

    public function clearOperationCode()
    {
        unset($this->OperationCode);
    }

    /**
     * Код вида операции
     *
     * Generated from protobuf field <code>optional string OperationCode = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setOperationCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->OperationCode = $var;

        return $this;
    }

    /**
     * Табличные сведения товарной накладной
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.Torg12Item Items = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->Items;
    }

    /**
     * Табличные сведения товарной накладной
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.Torg12Item Items = 13;</code>
     * @param array<\Diadoc\Api\Proto\Invoicing\Torg12Item>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Invoicing\Torg12Item::class);
        $this->Items = $arr;

        return $this;
    }

    /**
     * Количество мест, штук - всего по накладной
     *
     * Generated from protobuf field <code>optional string ParcelsQuantityTotal = 14;</code>
     * @return string
     */
    public function getParcelsQuantityTotal()
    {
        return isset($this->ParcelsQuantityTotal) ? $this->ParcelsQuantityTotal : '';
    }

    public function hasParcelsQuantityTotal()
    {
        return isset($this->ParcelsQuantityTotal);
    }

    public function clearParcelsQuantityTotal()
    {
        unset($this->ParcelsQuantityTotal);
    }

    /**
     * Количество мест, штук - всего по накладной
     *
     * Generated from protobuf field <code>optional string ParcelsQuantityTotal = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setParcelsQuantityTotal($var)
    {
        GPBUtil::checkString($var, True);
        $this->ParcelsQuantityTotal = $var;

        return $this;
    }

    /**
     * Количество мест, штук - всего по накладной, прописью
     *
     * Generated from protobuf field <code>optional string ParcelsQuantityTotalInWords = 15;</code>
     * @return string
     */
    public function getParcelsQuantityTotalInWords()
    {
        return isset($this->ParcelsQuantityTotalInWords) ? $this->ParcelsQuantityTotalInWords : '';
    }

    public function hasParcelsQuantityTotalInWords()
    {
        return isset($this->ParcelsQuantityTotalInWords);
    }

    public function clearParcelsQuantityTotalInWords()
    {
        unset($this->ParcelsQuantityTotalInWords);
    }

    /**
     * Количество мест, штук - всего по накладной, прописью
     *
     * Generated from protobuf field <code>optional string ParcelsQuantityTotalInWords = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setParcelsQuantityTotalInWords($var)
    {
        GPBUtil::checkString($var, True);
        $this->ParcelsQuantityTotalInWords = $var;

        return $this;
    }

    /**
     * Брутто - всего по накладной
     *
     * Generated from protobuf field <code>optional string GrossQuantityTotal = 16;</code>
     * @return string
     */
    public function getGrossQuantityTotal()
    {
        return isset($this->GrossQuantityTotal) ? $this->GrossQuantityTotal : '';
    }

    public function hasGrossQuantityTotal()
    {
        return isset($this->GrossQuantityTotal);
    }

    public function clearGrossQuantityTotal()
    {
        unset($this->GrossQuantityTotal);
    }

    /**
     * Брутто - всего по накладной
     *
     * Generated from protobuf field <code>optional string GrossQuantityTotal = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setGrossQuantityTotal($var)
    {
        GPBUtil::checkString($var, True);
        $this->GrossQuantityTotal = $var;

        return $this;
    }

    /**
     * Брутто - всего по накладной, прописью
     *
     * Generated from protobuf field <code>optional string GrossQuantityTotalInWords = 17;</code>
     * @return string
     */
    public function getGrossQuantityTotalInWords()
    {
        return isset($this->GrossQuantityTotalInWords) ? $this->GrossQuantityTotalInWords : '';
    }

    public function hasGrossQuantityTotalInWords()
    {
        return isset($this->GrossQuantityTotalInWords);
    }

    public function clearGrossQuantityTotalInWords()
    {
        unset($this->GrossQuantityTotalInWords);
    }

    /**
     * Брутто - всего по накладной, прописью
     *
     * Generated from protobuf field <code>optional string GrossQuantityTotalInWords = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setGrossQuantityTotalInWords($var)
    {
        GPBUtil::checkString($var, True);
        $this->GrossQuantityTotalInWords = $var;

        return $this;
    }

    /**
     * Нетто - всего по накладной
     *
     * Generated from protobuf field <code>optional string NetQuantityTotal = 18;</code>
     * @return string
     */
    public function getNetQuantityTotal()
    {
        return isset($this->NetQuantityTotal) ? $this->NetQuantityTotal : '';
    }

    public function hasNetQuantityTotal()
    {
        return isset($this->NetQuantityTotal);
    }

    public function clearNetQuantityTotal()
    {
        unset($this->NetQuantityTotal);
    }

    /**
     * Нетто - всего по накладной
     *
     * Generated from protobuf field <code>optional string NetQuantityTotal = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setNetQuantityTotal($var)
    {
        GPBUtil::checkString($var, True);
        $this->NetQuantityTotal = $var;

        return $this;
    }

    /**
     * Нетто - всего по накладной, прописью
     *
     * Generated from protobuf field <code>optional string NetQuantityTotalInWords = 19;</code>
     * @return string
     */
    public function getNetQuantityTotalInWords()
    {
        return isset($this->NetQuantityTotalInWords) ? $this->NetQuantityTotalInWords : '';
    }

    public function hasNetQuantityTotalInWords()
    {
        return isset($this->NetQuantityTotalInWords);
    }

    public function clearNetQuantityTotalInWords()
    {
        unset($this->NetQuantityTotalInWords);
    }

    /**
     * Нетто - всего по накладной, прописью
     *
     * Generated from protobuf field <code>optional string NetQuantityTotalInWords = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setNetQuantityTotalInWords($var)
    {
        GPBUtil::checkString($var, True);
        $this->NetQuantityTotalInWords = $var;

        return $this;
    }

    /**
     * Количество (масса нетто) - всего по накладной
     *
     * Generated from protobuf field <code>optional string QuantityTotal = 20;</code>
     * @return string
     */
    public function getQuantityTotal()
    {
        return isset($this->QuantityTotal) ? $this->QuantityTotal : '';
    }

    public function hasQuantityTotal()
    {
        return isset($this->QuantityTotal);
    }

    public function clearQuantityTotal()
    {
        unset($this->QuantityTotal);
    }

    /**
     * Количество (масса нетто) - всего по накладной
     *
     * Generated from protobuf field <code>optional string QuantityTotal = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setQuantityTotal($var)
    {
        GPBUtil::checkString($var, True);
        $this->QuantityTotal = $var;

        return $this;
    }

    /**
     * Сумма без учета НДС - всего по накладной
     *
     * Generated from protobuf field <code>optional string TotalWithVatExcluded = 21;</code>
     * @return string
     */
    public function getTotalWithVatExcluded()
    {
        return isset($this->TotalWithVatExcluded) ? $this->TotalWithVatExcluded : '';
    }

    public function hasTotalWithVatExcluded()
    {
        return isset($this->TotalWithVatExcluded);
    }

    public function clearTotalWithVatExcluded()
    {
        unset($this->TotalWithVatExcluded);
    }

    /**
     * Сумма без учета НДС - всего по накладной
     *
     * Generated from protobuf field <code>optional string TotalWithVatExcluded = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setTotalWithVatExcluded($var)
    {
        GPBUtil::checkString($var, True);
        $this->TotalWithVatExcluded = $var;

        return $this;
    }

    /**
     * Сумма НДС - всего по накладной
     *
     * Generated from protobuf field <code>optional string Vat = 22;</code>
     * @return string
     */
    public function getVat()
    {
        return isset($this->Vat) ? $this->Vat : '';
    }

    public function hasVat()
    {
        return isset($this->Vat);
    }

    public function clearVat()
    {
        unset($this->Vat);
    }

    /**
     * Сумма НДС - всего по накладной
     *
     * Generated from protobuf field <code>optional string Vat = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setVat($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vat = $var;

        return $this;
    }

    /**
     * Сумма с учетом НДС - всего по накладной
     *
     * Generated from protobuf field <code>string Total = 23;</code>
     * @return string
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * Сумма с учетом НДС - всего по накладной
     *
     * Generated from protobuf field <code>string Total = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkString($var, True);
        $this->Total = $var;

        return $this;
    }

    /**
     * Сумма с учетом НДС - всего по накладной, прописью
     *
     * Generated from protobuf field <code>optional string TotalInWords = 24;</code>
     * @return string
     */
    public function getTotalInWords()
    {
        return isset($this->TotalInWords) ? $this->TotalInWords : '';
    }

    public function hasTotalInWords()
    {
        return isset($this->TotalInWords);
    }

    public function clearTotalInWords()
    {
        unset($this->TotalInWords);
    }

    /**
     * Сумма с учетом НДС - всего по накладной, прописью
     *
     * Generated from protobuf field <code>optional string TotalInWords = 24;</code>
     * @param string $var
     * @return $this
     */
    public function setTotalInWords($var)
    {
        GPBUtil::checkString($var, True);
        $this->TotalInWords = $var;

        return $this;
    }

    /**
     * Дата отпуска
     *
     * Generated from protobuf field <code>optional string SupplyDate = 25;</code>
     * @return string
     */
    public function getSupplyDate()
    {
        return isset($this->SupplyDate) ? $this->SupplyDate : '';
    }

    public function hasSupplyDate()
    {
        return isset($this->SupplyDate);
    }

    public function clearSupplyDate()
    {
        unset($this->SupplyDate);
    }

    /**
     * Дата отпуска
     *
     * Generated from protobuf field <code>optional string SupplyDate = 25;</code>
     * @param string $var
     * @return $this
     */
    public function setSupplyDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->SupplyDate = $var;

        return $this;
    }

    /**
     * Отпуск разрешил
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Official SupplyAllowedBy = 26;</code>
     * @return \Diadoc\Api\Proto\Invoicing\Official|null
     */
    public function getSupplyAllowedBy()
    {
        return $this->SupplyAllowedBy;
    }

    public function hasSupplyAllowedBy()
    {
        return isset($this->SupplyAllowedBy);
    }

    public function clearSupplyAllowedBy()
    {
        unset($this->SupplyAllowedBy);
    }

    /**
     * Отпуск разрешил
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Official SupplyAllowedBy = 26;</code>
     * @param \Diadoc\Api\Proto\Invoicing\Official $var
     * @return $this
     */
    public function setSupplyAllowedBy($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\Official::class);
        $this->SupplyAllowedBy = $var;

        return $this;
    }

    /**
     * Отпуск произвел
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Official SupplyPerformedBy = 27;</code>
     * @return \Diadoc\Api\Proto\Invoicing\Official|null
     */
    public function getSupplyPerformedBy()
    {
        return $this->SupplyPerformedBy;
    }

    public function hasSupplyPerformedBy()
    {
        return isset($this->SupplyPerformedBy);
    }

    public function clearSupplyPerformedBy()
    {
        unset($this->SupplyPerformedBy);
    }

    /**
     * Отпуск произвел
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Official SupplyPerformedBy = 27;</code>
     * @param \Diadoc\Api\Proto\Invoicing\Official $var
     * @return $this
     */
    public function setSupplyPerformedBy($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\Official::class);
        $this->SupplyPerformedBy = $var;

        return $this;
    }

    /**
     * Главный бухгалтер
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Official ChiefAccountant = 28;</code>
     * @return \Diadoc\Api\Proto\Invoicing\Official|null
     */
    public function getChiefAccountant()
    {
        return $this->ChiefAccountant;
    }

    public function hasChiefAccountant()
    {
        return isset($this->ChiefAccountant);
    }

    public function clearChiefAccountant()
    {
        unset($this->ChiefAccountant);
    }

    /**
     * Главный бухгалтер
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Official ChiefAccountant = 28;</code>
     * @param \Diadoc\Api\Proto\Invoicing\Official $var
     * @return $this
     */
    public function setChiefAccountant($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\Official::class);
        $this->ChiefAccountant = $var;

        return $this;
    }

    /**
     * Подписант
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Signer Signer = 29;</code>
     * @return \Diadoc\Api\Proto\Invoicing\Signer|null
     */
    public function getSigner()
    {
        return $this->Signer;
    }

    public function hasSigner()
    {
        return isset($this->Signer);
    }

    public function clearSigner()
    {
        unset($this->Signer);
    }

    /**
     * Подписант
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Signer Signer = 29;</code>
     * @param \Diadoc\Api\Proto\Invoicing\Signer $var
     * @return $this
     */
    public function setSigner($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\Signer::class);
        $this->Signer = $var;

        return $this;
    }

    /**
     * Дополнительные сведения
     *
     * Generated from protobuf field <code>optional string AdditionalInfo = 30;</code>
     * @return string
     */
    public function getAdditionalInfo()
    {
        return isset($this->AdditionalInfo) ? $this->AdditionalInfo : '';
    }

    public function hasAdditionalInfo()
    {
        return isset($this->AdditionalInfo);
    }

    public function clearAdditionalInfo()
    {
        unset($this->AdditionalInfo);
    }

    /**
     * Дополнительные сведения
     *
     * Generated from protobuf field <code>optional string AdditionalInfo = 30;</code>
     * @param string $var
     * @return $this
     */
    public function setAdditionalInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->AdditionalInfo = $var;

        return $this;
    }

    /**
     * Приложение, количество листов
     *
     * Generated from protobuf field <code>optional string AttachmentSheetsQuantity = 31;</code>
     * @return string
     */
    public function getAttachmentSheetsQuantity()
    {
        return isset($this->AttachmentSheetsQuantity) ? $this->AttachmentSheetsQuantity : '';
    }

    public function hasAttachmentSheetsQuantity()
    {
        return isset($this->AttachmentSheetsQuantity);
    }

    public function clearAttachmentSheetsQuantity()
    {
        unset($this->AttachmentSheetsQuantity);
    }

    /**
     * Приложение, количество листов
     *
     * Generated from protobuf field <code>optional string AttachmentSheetsQuantity = 31;</code>
     * @param string $var
     * @return $this
     */
    public function setAttachmentSheetsQuantity($var)
    {
        GPBUtil::checkString($var, True);
        $this->AttachmentSheetsQuantity = $var;

        return $this;
    }

}

