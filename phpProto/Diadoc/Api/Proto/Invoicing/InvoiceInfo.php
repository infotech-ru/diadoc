<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/InvoiceInfo.proto

namespace Diadoc\Api\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Invoicing.InvoiceInfo</code>
 */
class InvoiceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Дата СФ
     *
     * Generated from protobuf field <code>string InvoiceDate = 1;</code>
     */
    protected $InvoiceDate = '';
    /**
     * Номер СФ
     *
     * Generated from protobuf field <code>string InvoiceNumber = 2;</code>
     */
    protected $InvoiceNumber = '';
    /**
     * Продавец
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.DiadocOrganizationInfo Seller = 3;</code>
     */
    protected $Seller = null;
    /**
     * Покупатель
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.DiadocOrganizationInfo Buyer = 4;</code>
     */
    protected $Buyer = null;
    /**
     * Грузоотправитель
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.ShipperOrConsignee Shipper = 5;</code>
     */
    protected $Shipper = null;
    /**
     * Грузополучатель
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.ShipperOrConsignee Consignee = 6;</code>
     */
    protected $Consignee = null;
    /**
     * Подписант
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Signer Signer = 7;</code>
     */
    protected $Signer = null;
    /**
     * Платежно-расчетные документы
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.PaymentDocumentInfo PaymentDocuments = 8;</code>
     */
    private $PaymentDocuments;
    /**
     * Информация о товарах
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.InvoiceItem Items = 9;</code>
     */
    private $Items;
    /**
     * Валюта (код)
     *
     * Generated from protobuf field <code>optional string Currency = 10;</code>
     */
    protected $Currency = null;
    /**
     * Сумма без учета налога
     *
     * Generated from protobuf field <code>optional string TotalWithVatExcluded = 11;</code>
     */
    protected $TotalWithVatExcluded = null;
    /**
     * Сумма налога
     *
     * Generated from protobuf field <code>optional string Vat = 12;</code>
     */
    protected $Vat = null;
    /**
     * Сумма всего
     *
     * Generated from protobuf field <code>string Total = 13;</code>
     */
    protected $Total = '';
    /**
     * Информационное поле документа v5.01
     *
     * Generated from protobuf field <code>optional string AdditionalInfo = 14;</code>
     */
    protected $AdditionalInfo = null;
    /**
     * Дата ИСФ (обязательно при формировании InvoiceRevision)
     *
     * Generated from protobuf field <code>optional string InvoiceRevisionDate = 15;</code>
     */
    protected $InvoiceRevisionDate = null;
    /**
     * Номер ИСФ (обязательно при формировании InvoiceRevision)
     *
     * Generated from protobuf field <code>optional string InvoiceRevisionNumber = 16;</code>
     */
    protected $InvoiceRevisionNumber = null;
    /**
     * Информационное поле документа v5.02
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.AdditionalInfo AdditionalInfos = 17;</code>
     */
    private $AdditionalInfos;
    /**
     * Версия формата ФУФа (для тестирования систем в переходном периоде)
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.InvoiceFormatVersion Version = 18;</code>
     */
    protected $Version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $InvoiceDate
     *           Дата СФ
     *     @type string $InvoiceNumber
     *           Номер СФ
     *     @type \Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo $Seller
     *           Продавец
     *     @type \Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo $Buyer
     *           Покупатель
     *     @type \Diadoc\Api\Proto\Invoicing\ShipperOrConsignee $Shipper
     *           Грузоотправитель
     *     @type \Diadoc\Api\Proto\Invoicing\ShipperOrConsignee $Consignee
     *           Грузополучатель
     *     @type \Diadoc\Api\Proto\Invoicing\Signer $Signer
     *           Подписант
     *     @type array<\Diadoc\Api\Proto\Invoicing\PaymentDocumentInfo>|\Google\Protobuf\Internal\RepeatedField $PaymentDocuments
     *           Платежно-расчетные документы
     *     @type array<\Diadoc\Api\Proto\Invoicing\InvoiceItem>|\Google\Protobuf\Internal\RepeatedField $Items
     *           Информация о товарах
     *     @type string $Currency
     *           Валюта (код)
     *     @type string $TotalWithVatExcluded
     *           Сумма без учета налога
     *     @type string $Vat
     *           Сумма налога
     *     @type string $Total
     *           Сумма всего
     *     @type string $AdditionalInfo
     *           Информационное поле документа v5.01
     *     @type string $InvoiceRevisionDate
     *           Дата ИСФ (обязательно при формировании InvoiceRevision)
     *     @type string $InvoiceRevisionNumber
     *           Номер ИСФ (обязательно при формировании InvoiceRevision)
     *     @type array<\Diadoc\Api\Proto\Invoicing\AdditionalInfo>|\Google\Protobuf\Internal\RepeatedField $AdditionalInfos
     *           Информационное поле документа v5.02
     *     @type int $Version
     *           Версия формата ФУФа (для тестирования систем в переходном периоде)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\InvoiceInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Дата СФ
     *
     * Generated from protobuf field <code>string InvoiceDate = 1;</code>
     * @return string
     */
    public function getInvoiceDate()
    {
        return $this->InvoiceDate;
    }

    /**
     * Дата СФ
     *
     * Generated from protobuf field <code>string InvoiceDate = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInvoiceDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->InvoiceDate = $var;

        return $this;
    }

    /**
     * Номер СФ
     *
     * Generated from protobuf field <code>string InvoiceNumber = 2;</code>
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->InvoiceNumber;
    }

    /**
     * Номер СФ
     *
     * Generated from protobuf field <code>string InvoiceNumber = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInvoiceNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->InvoiceNumber = $var;

        return $this;
    }

    /**
     * Продавец
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.DiadocOrganizationInfo Seller = 3;</code>
     * @return \Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo|null
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
     * Продавец
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.DiadocOrganizationInfo Seller = 3;</code>
     * @param \Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo $var
     * @return $this
     */
    public function setSeller($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo::class);
        $this->Seller = $var;

        return $this;
    }

    /**
     * Покупатель
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.DiadocOrganizationInfo Buyer = 4;</code>
     * @return \Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo|null
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
     * Покупатель
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.DiadocOrganizationInfo Buyer = 4;</code>
     * @param \Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo $var
     * @return $this
     */
    public function setBuyer($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\DiadocOrganizationInfo::class);
        $this->Buyer = $var;

        return $this;
    }

    /**
     * Грузоотправитель
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.ShipperOrConsignee Shipper = 5;</code>
     * @return \Diadoc\Api\Proto\Invoicing\ShipperOrConsignee|null
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.ShipperOrConsignee Shipper = 5;</code>
     * @param \Diadoc\Api\Proto\Invoicing\ShipperOrConsignee $var
     * @return $this
     */
    public function setShipper($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\ShipperOrConsignee::class);
        $this->Shipper = $var;

        return $this;
    }

    /**
     * Грузополучатель
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.ShipperOrConsignee Consignee = 6;</code>
     * @return \Diadoc\Api\Proto\Invoicing\ShipperOrConsignee|null
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.ShipperOrConsignee Consignee = 6;</code>
     * @param \Diadoc\Api\Proto\Invoicing\ShipperOrConsignee $var
     * @return $this
     */
    public function setConsignee($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\ShipperOrConsignee::class);
        $this->Consignee = $var;

        return $this;
    }

    /**
     * Подписант
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Signer Signer = 7;</code>
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
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Signer Signer = 7;</code>
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
     * Платежно-расчетные документы
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.PaymentDocumentInfo PaymentDocuments = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPaymentDocuments()
    {
        return $this->PaymentDocuments;
    }

    /**
     * Платежно-расчетные документы
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.PaymentDocumentInfo PaymentDocuments = 8;</code>
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
     * Информация о товарах
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.InvoiceItem Items = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->Items;
    }

    /**
     * Информация о товарах
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.InvoiceItem Items = 9;</code>
     * @param array<\Diadoc\Api\Proto\Invoicing\InvoiceItem>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Invoicing\InvoiceItem::class);
        $this->Items = $arr;

        return $this;
    }

    /**
     * Валюта (код)
     *
     * Generated from protobuf field <code>optional string Currency = 10;</code>
     * @return string
     */
    public function getCurrency()
    {
        return isset($this->Currency) ? $this->Currency : '';
    }

    public function hasCurrency()
    {
        return isset($this->Currency);
    }

    public function clearCurrency()
    {
        unset($this->Currency);
    }

    /**
     * Валюта (код)
     *
     * Generated from protobuf field <code>optional string Currency = 10;</code>
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
     * Сумма без учета налога
     *
     * Generated from protobuf field <code>optional string TotalWithVatExcluded = 11;</code>
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
     * Сумма без учета налога
     *
     * Generated from protobuf field <code>optional string TotalWithVatExcluded = 11;</code>
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
     * Сумма налога
     *
     * Generated from protobuf field <code>optional string Vat = 12;</code>
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
     * Сумма налога
     *
     * Generated from protobuf field <code>optional string Vat = 12;</code>
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
     * Сумма всего
     *
     * Generated from protobuf field <code>string Total = 13;</code>
     * @return string
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * Сумма всего
     *
     * Generated from protobuf field <code>string Total = 13;</code>
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
     * Информационное поле документа v5.01
     *
     * Generated from protobuf field <code>optional string AdditionalInfo = 14;</code>
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
     * Информационное поле документа v5.01
     *
     * Generated from protobuf field <code>optional string AdditionalInfo = 14;</code>
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
     * Дата ИСФ (обязательно при формировании InvoiceRevision)
     *
     * Generated from protobuf field <code>optional string InvoiceRevisionDate = 15;</code>
     * @return string
     */
    public function getInvoiceRevisionDate()
    {
        return isset($this->InvoiceRevisionDate) ? $this->InvoiceRevisionDate : '';
    }

    public function hasInvoiceRevisionDate()
    {
        return isset($this->InvoiceRevisionDate);
    }

    public function clearInvoiceRevisionDate()
    {
        unset($this->InvoiceRevisionDate);
    }

    /**
     * Дата ИСФ (обязательно при формировании InvoiceRevision)
     *
     * Generated from protobuf field <code>optional string InvoiceRevisionDate = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setInvoiceRevisionDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->InvoiceRevisionDate = $var;

        return $this;
    }

    /**
     * Номер ИСФ (обязательно при формировании InvoiceRevision)
     *
     * Generated from protobuf field <code>optional string InvoiceRevisionNumber = 16;</code>
     * @return string
     */
    public function getInvoiceRevisionNumber()
    {
        return isset($this->InvoiceRevisionNumber) ? $this->InvoiceRevisionNumber : '';
    }

    public function hasInvoiceRevisionNumber()
    {
        return isset($this->InvoiceRevisionNumber);
    }

    public function clearInvoiceRevisionNumber()
    {
        unset($this->InvoiceRevisionNumber);
    }

    /**
     * Номер ИСФ (обязательно при формировании InvoiceRevision)
     *
     * Generated from protobuf field <code>optional string InvoiceRevisionNumber = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setInvoiceRevisionNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->InvoiceRevisionNumber = $var;

        return $this;
    }

    /**
     * Информационное поле документа v5.02
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.AdditionalInfo AdditionalInfos = 17;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdditionalInfos()
    {
        return $this->AdditionalInfos;
    }

    /**
     * Информационное поле документа v5.02
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.AdditionalInfo AdditionalInfos = 17;</code>
     * @param array<\Diadoc\Api\Proto\Invoicing\AdditionalInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdditionalInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Invoicing\AdditionalInfo::class);
        $this->AdditionalInfos = $arr;

        return $this;
    }

    /**
     * Версия формата ФУФа (для тестирования систем в переходном периоде)
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.InvoiceFormatVersion Version = 18;</code>
     * @return int
     */
    public function getVersion()
    {
        return isset($this->Version) ? $this->Version : 0;
    }

    public function hasVersion()
    {
        return isset($this->Version);
    }

    public function clearVersion()
    {
        unset($this->Version);
    }

    /**
     * Версия формата ФУФа (для тестирования систем в переходном периоде)
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.InvoiceFormatVersion Version = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Invoicing\InvoiceFormatVersion::class);
        $this->Version = $var;

        return $this;
    }

}

