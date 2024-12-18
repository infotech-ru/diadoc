<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/UniversalTransferDocumentInfo.proto

namespace Diadoc\Api\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Invoicing.UniversalTransferDocumentSellerTitleInfo</code>
 */
class UniversalTransferDocumentSellerTitleInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Функция документа // Функция
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.FunctionType Function = 1;</code>
     */
    protected $Function = 0;
    /**
     * Наименование первичного документа, определенное организацией // НаимДокОпр
     *
     * Generated from protobuf field <code>optional string DocumentName = 2;</code>
     */
    protected $DocumentName = null;
    /**
     * Дата УПД // ДатаСчФ
     *
     * Generated from protobuf field <code>string DocumentDate = 3;</code>
     */
    protected $DocumentDate = '';
    /**
     * Номер УПД // НомерСчФ
     *
     * Generated from protobuf field <code>string DocumentNumber = 4;</code>
     */
    protected $DocumentNumber = '';
    /**
     * Продавец // СвПрод
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Organizations.ExtendedOrganizationInfo Seller = 5;</code>
     */
    protected $Seller = null;
    /**
     * Покупатель // СвПокуп
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Organizations.ExtendedOrganizationInfo Buyer = 6;</code>
     */
    protected $Buyer = null;
    /**
     * Грузоотправитель // ГрузОт
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Shipper Shipper = 7;</code>
     */
    protected $Shipper = null;
    /**
     * Грузополучатель // ГрузПолуч
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Organizations.ExtendedOrganizationInfo Consignee = 8;</code>
     */
    protected $Consignee = null;
    /**
     * Подписант // Подписант
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.Signers.ExtendedSigner Signers = 9;</code>
     */
    private $Signers;
    /**
     * Платежно-расчетные документы // СвПРД
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.PaymentDocumentInfo PaymentDocuments = 10;</code>
     */
    private $PaymentDocuments;
    /**
     * Сведения таблицы счет фактуры // ТаблСчФакт
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.InvoiceTable InvoiceTable = 11;</code>
     */
    protected $InvoiceTable = null;
    /**
     * Валюта (код) // КодОКВ
     *
     * Generated from protobuf field <code>string Currency = 12;</code>
     */
    protected $Currency = '';
    /**
     * Курс валюты // КурсВал
     *
     * Generated from protobuf field <code>optional string CurrencyRate = 13;</code>
     */
    protected $CurrencyRate = null;
    /**
     * Дата ИСФ (обязательно при формировании UniversalTransferDocumentSellerTitleRevision) // ДатаИспрСчФ
     *
     * Generated from protobuf field <code>optional string RevisionDate = 14;</code>
     */
    protected $RevisionDate = null;
    /**
     * Номер ИСФ (обязательно при формировании UniversalTransferDocumentSellerTitleRevision) // НомИспрСчФ
     *
     * Generated from protobuf field <code>optional string RevisionNumber = 15;</code>
     */
    protected $RevisionNumber = null;
    /**
     * Информационное поле документа // ИнфПолФХЖ1
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.AdditionalInfoId AdditionalInfoId = 16;</code>
     */
    protected $AdditionalInfoId = null;
    /**
     * Сведения о передаче (сдаче) // СвПер
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.TransferInfo TransferInfo = 17;</code>
     */
    protected $TransferInfo = null;
    /**
     * Составитель файла обмена счета-фактуры (информации продавца) // НаимЭконСубСост
     *
     * Generated from protobuf field <code>string DocumentCreator = 18;</code>
     */
    protected $DocumentCreator = '';
    /**
     * Основание, по которому экономический субъект является составителем файла обмена счета-фактуры //ОснДоверОргСост
     *
     * Generated from protobuf field <code>optional string DocumentCreatorBase = 19;</code>
     */
    protected $DocumentCreatorBase = null;
    /**
     * ИдГосКон
     *
     * Generated from protobuf field <code>optional string GovernmentContractInfo = 20;</code>
     */
    protected $GovernmentContractInfo = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $Function
     *           Функция документа // Функция
     *     @type string $DocumentName
     *           Наименование первичного документа, определенное организацией // НаимДокОпр
     *     @type string $DocumentDate
     *           Дата УПД // ДатаСчФ
     *     @type string $DocumentNumber
     *           Номер УПД // НомерСчФ
     *     @type \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $Seller
     *           Продавец // СвПрод
     *     @type \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $Buyer
     *           Покупатель // СвПокуп
     *     @type \Diadoc\Api\Proto\Invoicing\Shipper $Shipper
     *           Грузоотправитель // ГрузОт
     *     @type \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $Consignee
     *           Грузополучатель // ГрузПолуч
     *     @type array<\Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner>|\Google\Protobuf\Internal\RepeatedField $Signers
     *           Подписант // Подписант
     *     @type array<\Diadoc\Api\Proto\Invoicing\PaymentDocumentInfo>|\Google\Protobuf\Internal\RepeatedField $PaymentDocuments
     *           Платежно-расчетные документы // СвПРД
     *     @type \Diadoc\Api\Proto\Invoicing\InvoiceTable $InvoiceTable
     *           Сведения таблицы счет фактуры // ТаблСчФакт
     *     @type string $Currency
     *           Валюта (код) // КодОКВ
     *     @type string $CurrencyRate
     *           Курс валюты // КурсВал
     *     @type string $RevisionDate
     *           Дата ИСФ (обязательно при формировании UniversalTransferDocumentSellerTitleRevision) // ДатаИспрСчФ
     *     @type string $RevisionNumber
     *           Номер ИСФ (обязательно при формировании UniversalTransferDocumentSellerTitleRevision) // НомИспрСчФ
     *     @type \Diadoc\Api\Proto\Invoicing\AdditionalInfoId $AdditionalInfoId
     *           Информационное поле документа // ИнфПолФХЖ1
     *     @type \Diadoc\Api\Proto\Invoicing\TransferInfo $TransferInfo
     *           Сведения о передаче (сдаче) // СвПер
     *     @type string $DocumentCreator
     *           Составитель файла обмена счета-фактуры (информации продавца) // НаимЭконСубСост
     *     @type string $DocumentCreatorBase
     *           Основание, по которому экономический субъект является составителем файла обмена счета-фактуры //ОснДоверОргСост
     *     @type string $GovernmentContractInfo
     *           ИдГосКон
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\UniversalTransferDocumentInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Функция документа // Функция
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.FunctionType Function = 1;</code>
     * @return int
     */
    public function getFunction()
    {
        return $this->Function;
    }

    /**
     * Функция документа // Функция
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.FunctionType Function = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFunction($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Invoicing\FunctionType::class);
        $this->Function = $var;

        return $this;
    }

    /**
     * Наименование первичного документа, определенное организацией // НаимДокОпр
     *
     * Generated from protobuf field <code>optional string DocumentName = 2;</code>
     * @return string
     */
    public function getDocumentName()
    {
        return isset($this->DocumentName) ? $this->DocumentName : '';
    }

    public function hasDocumentName()
    {
        return isset($this->DocumentName);
    }

    public function clearDocumentName()
    {
        unset($this->DocumentName);
    }

    /**
     * Наименование первичного документа, определенное организацией // НаимДокОпр
     *
     * Generated from protobuf field <code>optional string DocumentName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentName($var)
    {
        GPBUtil::checkString($var, True);
        $this->DocumentName = $var;

        return $this;
    }

    /**
     * Дата УПД // ДатаСчФ
     *
     * Generated from protobuf field <code>string DocumentDate = 3;</code>
     * @return string
     */
    public function getDocumentDate()
    {
        return $this->DocumentDate;
    }

    /**
     * Дата УПД // ДатаСчФ
     *
     * Generated from protobuf field <code>string DocumentDate = 3;</code>
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
     * Номер УПД // НомерСчФ
     *
     * Generated from protobuf field <code>string DocumentNumber = 4;</code>
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }

    /**
     * Номер УПД // НомерСчФ
     *
     * Generated from protobuf field <code>string DocumentNumber = 4;</code>
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
     * Продавец // СвПрод
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Organizations.ExtendedOrganizationInfo Seller = 5;</code>
     * @return \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo|null
     */
    public function getSeller()
    {
        return $this->Seller;
    }

    public function hasSeller()
    {
        return isset($this->Seller);
    }

    public function clearSeller()
    {
        unset($this->Seller);
    }

    /**
     * Продавец // СвПрод
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Organizations.ExtendedOrganizationInfo Seller = 5;</code>
     * @param \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $var
     * @return $this
     */
    public function setSeller($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo::class);
        $this->Seller = $var;

        return $this;
    }

    /**
     * Покупатель // СвПокуп
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Organizations.ExtendedOrganizationInfo Buyer = 6;</code>
     * @return \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo|null
     */
    public function getBuyer()
    {
        return $this->Buyer;
    }

    public function hasBuyer()
    {
        return isset($this->Buyer);
    }

    public function clearBuyer()
    {
        unset($this->Buyer);
    }

    /**
     * Покупатель // СвПокуп
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Organizations.ExtendedOrganizationInfo Buyer = 6;</code>
     * @param \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $var
     * @return $this
     */
    public function setBuyer($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo::class);
        $this->Buyer = $var;

        return $this;
    }

    /**
     * Грузоотправитель // ГрузОт
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Shipper Shipper = 7;</code>
     * @return \Diadoc\Api\Proto\Invoicing\Shipper|null
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
     * Грузоотправитель // ГрузОт
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Shipper Shipper = 7;</code>
     * @param \Diadoc\Api\Proto\Invoicing\Shipper $var
     * @return $this
     */
    public function setShipper($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\Shipper::class);
        $this->Shipper = $var;

        return $this;
    }

    /**
     * Грузополучатель // ГрузПолуч
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Organizations.ExtendedOrganizationInfo Consignee = 8;</code>
     * @return \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo|null
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
     * Грузополучатель // ГрузПолуч
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Organizations.ExtendedOrganizationInfo Consignee = 8;</code>
     * @param \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo $var
     * @return $this
     */
    public function setConsignee($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\Organizations\ExtendedOrganizationInfo::class);
        $this->Consignee = $var;

        return $this;
    }

    /**
     * Подписант // Подписант
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.Signers.ExtendedSigner Signers = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSigners()
    {
        return $this->Signers;
    }

    /**
     * Подписант // Подписант
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.Signers.ExtendedSigner Signers = 9;</code>
     * @param array<\Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSigners($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner::class);
        $this->Signers = $arr;

        return $this;
    }

    /**
     * Платежно-расчетные документы // СвПРД
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.PaymentDocumentInfo PaymentDocuments = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPaymentDocuments()
    {
        return $this->PaymentDocuments;
    }

    /**
     * Платежно-расчетные документы // СвПРД
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.PaymentDocumentInfo PaymentDocuments = 10;</code>
     * @param array<\Diadoc\Api\Proto\Invoicing\PaymentDocumentInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPaymentDocuments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Invoicing\PaymentDocumentInfo::class);
        $this->PaymentDocuments = $arr;

        return $this;
    }

    /**
     * Сведения таблицы счет фактуры // ТаблСчФакт
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.InvoiceTable InvoiceTable = 11;</code>
     * @return \Diadoc\Api\Proto\Invoicing\InvoiceTable|null
     */
    public function getInvoiceTable()
    {
        return $this->InvoiceTable;
    }

    public function hasInvoiceTable()
    {
        return isset($this->InvoiceTable);
    }

    public function clearInvoiceTable()
    {
        unset($this->InvoiceTable);
    }

    /**
     * Сведения таблицы счет фактуры // ТаблСчФакт
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.InvoiceTable InvoiceTable = 11;</code>
     * @param \Diadoc\Api\Proto\Invoicing\InvoiceTable $var
     * @return $this
     */
    public function setInvoiceTable($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\InvoiceTable::class);
        $this->InvoiceTable = $var;

        return $this;
    }

    /**
     * Валюта (код) // КодОКВ
     *
     * Generated from protobuf field <code>string Currency = 12;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Валюта (код) // КодОКВ
     *
     * Generated from protobuf field <code>string Currency = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->Currency = $var;

        return $this;
    }

    /**
     * Курс валюты // КурсВал
     *
     * Generated from protobuf field <code>optional string CurrencyRate = 13;</code>
     * @return string
     */
    public function getCurrencyRate()
    {
        return isset($this->CurrencyRate) ? $this->CurrencyRate : '';
    }

    public function hasCurrencyRate()
    {
        return isset($this->CurrencyRate);
    }

    public function clearCurrencyRate()
    {
        unset($this->CurrencyRate);
    }

    /**
     * Курс валюты // КурсВал
     *
     * Generated from protobuf field <code>optional string CurrencyRate = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyRate($var)
    {
        GPBUtil::checkString($var, True);
        $this->CurrencyRate = $var;

        return $this;
    }

    /**
     * Дата ИСФ (обязательно при формировании UniversalTransferDocumentSellerTitleRevision) // ДатаИспрСчФ
     *
     * Generated from protobuf field <code>optional string RevisionDate = 14;</code>
     * @return string
     */
    public function getRevisionDate()
    {
        return isset($this->RevisionDate) ? $this->RevisionDate : '';
    }

    public function hasRevisionDate()
    {
        return isset($this->RevisionDate);
    }

    public function clearRevisionDate()
    {
        unset($this->RevisionDate);
    }

    /**
     * Дата ИСФ (обязательно при формировании UniversalTransferDocumentSellerTitleRevision) // ДатаИспрСчФ
     *
     * Generated from protobuf field <code>optional string RevisionDate = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setRevisionDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->RevisionDate = $var;

        return $this;
    }

    /**
     * Номер ИСФ (обязательно при формировании UniversalTransferDocumentSellerTitleRevision) // НомИспрСчФ
     *
     * Generated from protobuf field <code>optional string RevisionNumber = 15;</code>
     * @return string
     */
    public function getRevisionNumber()
    {
        return isset($this->RevisionNumber) ? $this->RevisionNumber : '';
    }

    public function hasRevisionNumber()
    {
        return isset($this->RevisionNumber);
    }

    public function clearRevisionNumber()
    {
        unset($this->RevisionNumber);
    }

    /**
     * Номер ИСФ (обязательно при формировании UniversalTransferDocumentSellerTitleRevision) // НомИспрСчФ
     *
     * Generated from protobuf field <code>optional string RevisionNumber = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setRevisionNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->RevisionNumber = $var;

        return $this;
    }

    /**
     * Информационное поле документа // ИнфПолФХЖ1
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.AdditionalInfoId AdditionalInfoId = 16;</code>
     * @return \Diadoc\Api\Proto\Invoicing\AdditionalInfoId|null
     */
    public function getAdditionalInfoId()
    {
        return $this->AdditionalInfoId;
    }

    public function hasAdditionalInfoId()
    {
        return isset($this->AdditionalInfoId);
    }

    public function clearAdditionalInfoId()
    {
        unset($this->AdditionalInfoId);
    }

    /**
     * Информационное поле документа // ИнфПолФХЖ1
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.AdditionalInfoId AdditionalInfoId = 16;</code>
     * @param \Diadoc\Api\Proto\Invoicing\AdditionalInfoId $var
     * @return $this
     */
    public function setAdditionalInfoId($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\AdditionalInfoId::class);
        $this->AdditionalInfoId = $var;

        return $this;
    }

    /**
     * Сведения о передаче (сдаче) // СвПер
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.TransferInfo TransferInfo = 17;</code>
     * @return \Diadoc\Api\Proto\Invoicing\TransferInfo|null
     */
    public function getTransferInfo()
    {
        return $this->TransferInfo;
    }

    public function hasTransferInfo()
    {
        return isset($this->TransferInfo);
    }

    public function clearTransferInfo()
    {
        unset($this->TransferInfo);
    }

    /**
     * Сведения о передаче (сдаче) // СвПер
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.TransferInfo TransferInfo = 17;</code>
     * @param \Diadoc\Api\Proto\Invoicing\TransferInfo $var
     * @return $this
     */
    public function setTransferInfo($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\TransferInfo::class);
        $this->TransferInfo = $var;

        return $this;
    }

    /**
     * Составитель файла обмена счета-фактуры (информации продавца) // НаимЭконСубСост
     *
     * Generated from protobuf field <code>string DocumentCreator = 18;</code>
     * @return string
     */
    public function getDocumentCreator()
    {
        return $this->DocumentCreator;
    }

    /**
     * Составитель файла обмена счета-фактуры (информации продавца) // НаимЭконСубСост
     *
     * Generated from protobuf field <code>string DocumentCreator = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentCreator($var)
    {
        GPBUtil::checkString($var, True);
        $this->DocumentCreator = $var;

        return $this;
    }

    /**
     * Основание, по которому экономический субъект является составителем файла обмена счета-фактуры //ОснДоверОргСост
     *
     * Generated from protobuf field <code>optional string DocumentCreatorBase = 19;</code>
     * @return string
     */
    public function getDocumentCreatorBase()
    {
        return isset($this->DocumentCreatorBase) ? $this->DocumentCreatorBase : '';
    }

    public function hasDocumentCreatorBase()
    {
        return isset($this->DocumentCreatorBase);
    }

    public function clearDocumentCreatorBase()
    {
        unset($this->DocumentCreatorBase);
    }

    /**
     * Основание, по которому экономический субъект является составителем файла обмена счета-фактуры //ОснДоверОргСост
     *
     * Generated from protobuf field <code>optional string DocumentCreatorBase = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentCreatorBase($var)
    {
        GPBUtil::checkString($var, True);
        $this->DocumentCreatorBase = $var;

        return $this;
    }

    /**
     * ИдГосКон
     *
     * Generated from protobuf field <code>optional string GovernmentContractInfo = 20;</code>
     * @return string
     */
    public function getGovernmentContractInfo()
    {
        return isset($this->GovernmentContractInfo) ? $this->GovernmentContractInfo : '';
    }

    public function hasGovernmentContractInfo()
    {
        return isset($this->GovernmentContractInfo);
    }

    public function clearGovernmentContractInfo()
    {
        unset($this->GovernmentContractInfo);
    }

    /**
     * ИдГосКон
     *
     * Generated from protobuf field <code>optional string GovernmentContractInfo = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setGovernmentContractInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->GovernmentContractInfo = $var;

        return $this;
    }

}

