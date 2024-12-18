<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/UniversalTransferDocumentInfo.proto

namespace Diadoc\Api\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Invoicing.ExtendedInvoiceItem</code>
 */
class ExtendedInvoiceItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Наименование товара // НаимТов
     *
     * Generated from protobuf field <code>string Product = 1;</code>
     */
    protected $Product = '';
    /**
     * Единицы измерения товара (код) // ОКЕИ_Тов
     *
     * Generated from protobuf field <code>optional string Unit = 2;</code>
     */
    protected $Unit = null;
    /**
     * Наименование единицы измерения товара. Пользователь заполняет, если ОКЕИ_Тов=0000 // НаимЕдИзм
     *
     * Generated from protobuf field <code>optional string UnitName = 3;</code>
     */
    protected $UnitName = null;
    /**
     * Количество единиц товара // КолТов
     *
     * Generated from protobuf field <code>optional string Quantity = 4;</code>
     */
    protected $Quantity = null;
    /**
     * Цена за единицу товара // ЦенаТов
     *
     * Generated from protobuf field <code>optional string Price = 5;</code>
     */
    protected $Price = null;
    /**
     * Акциз // СумАкциз
     *
     * Generated from protobuf field <code>optional string Excise = 6;</code>
     */
    protected $Excise = null;
    /**
     * Ставка налога // НалСт
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.TaxRate TaxRate = 7;</code>
     */
    protected $TaxRate = 0;
    /**
     * Сумма без учета налога // СтТовБезНДС
     *
     * Generated from protobuf field <code>optional string SubtotalWithVatExcluded = 8;</code>
     */
    protected $SubtotalWithVatExcluded = null;
    /**
     * Сумма налога // СумНал
     *
     * Generated from protobuf field <code>optional string Vat = 9;</code>
     */
    protected $Vat = null;
    /**
     * Сумма всего // СтТовУчНал
     *
     * Generated from protobuf field <code>string Subtotal = 10;</code>
     */
    protected $Subtotal = '';
    /**
     * Номера таможенных деклараций // СвТД
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.CustomsDeclaration CustomsDeclarations = 11;</code>
     */
    private $CustomsDeclarations;
    /**
     * Признак товар-работа-услуга // ПрТовРаб
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.ItemMark ItemMark = 12;</code>
     */
    protected $ItemMark = null;
    /**
     * Дополнительная информация о признаке //ДопПризн
     *
     * Generated from protobuf field <code>optional string AdditionalProperty = 13;</code>
     */
    protected $AdditionalProperty = null;
    /**
     * Характеристика/код/артикул/сорт товара // КодТов
     *
     * Generated from protobuf field <code>optional string ItemVendorCode = 14;</code>
     */
    protected $ItemVendorCode = null;
    /**
     * Количество надлежит отпустить // НадлОтп
     *
     * Generated from protobuf field <code>optional string ItemToRelease = 15;</code>
     */
    protected $ItemToRelease = null;
    /**
     * Корреспондирующие счета: дебет // КорСчДебет
     *
     * Generated from protobuf field <code>optional string ItemAccountDebit = 16;</code>
     */
    protected $ItemAccountDebit = null;
    /**
     * Корреспондирующие счета: кредит // КорСчКредит
     *
     * Generated from protobuf field <code>optional string ItemAccountCredit = 17;</code>
     */
    protected $ItemAccountCredit = null;
    /**
     * Информационное поле документа // ИнфПолФХЖ2
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.AdditionalInfo AdditionalInfo = 18;</code>
     */
    private $AdditionalInfo;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Product
     *           Наименование товара // НаимТов
     *     @type string $Unit
     *           Единицы измерения товара (код) // ОКЕИ_Тов
     *     @type string $UnitName
     *           Наименование единицы измерения товара. Пользователь заполняет, если ОКЕИ_Тов=0000 // НаимЕдИзм
     *     @type string $Quantity
     *           Количество единиц товара // КолТов
     *     @type string $Price
     *           Цена за единицу товара // ЦенаТов
     *     @type string $Excise
     *           Акциз // СумАкциз
     *     @type int $TaxRate
     *           Ставка налога // НалСт
     *     @type string $SubtotalWithVatExcluded
     *           Сумма без учета налога // СтТовБезНДС
     *     @type string $Vat
     *           Сумма налога // СумНал
     *     @type string $Subtotal
     *           Сумма всего // СтТовУчНал
     *     @type array<\Diadoc\Api\Proto\Invoicing\CustomsDeclaration>|\Google\Protobuf\Internal\RepeatedField $CustomsDeclarations
     *           Номера таможенных деклараций // СвТД
     *     @type int $ItemMark
     *           Признак товар-работа-услуга // ПрТовРаб
     *     @type string $AdditionalProperty
     *           Дополнительная информация о признаке //ДопПризн
     *     @type string $ItemVendorCode
     *           Характеристика/код/артикул/сорт товара // КодТов
     *     @type string $ItemToRelease
     *           Количество надлежит отпустить // НадлОтп
     *     @type string $ItemAccountDebit
     *           Корреспондирующие счета: дебет // КорСчДебет
     *     @type string $ItemAccountCredit
     *           Корреспондирующие счета: кредит // КорСчКредит
     *     @type array<\Diadoc\Api\Proto\Invoicing\AdditionalInfo>|\Google\Protobuf\Internal\RepeatedField $AdditionalInfo
     *           Информационное поле документа // ИнфПолФХЖ2
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\UniversalTransferDocumentInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Наименование товара // НаимТов
     *
     * Generated from protobuf field <code>string Product = 1;</code>
     * @return string
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * Наименование товара // НаимТов
     *
     * Generated from protobuf field <code>string Product = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProduct($var)
    {
        GPBUtil::checkString($var, True);
        $this->Product = $var;

        return $this;
    }

    /**
     * Единицы измерения товара (код) // ОКЕИ_Тов
     *
     * Generated from protobuf field <code>optional string Unit = 2;</code>
     * @return string
     */
    public function getUnit()
    {
        return isset($this->Unit) ? $this->Unit : '';
    }

    public function hasUnit()
    {
        return isset($this->Unit);
    }

    public function clearUnit()
    {
        unset($this->Unit);
    }

    /**
     * Единицы измерения товара (код) // ОКЕИ_Тов
     *
     * Generated from protobuf field <code>optional string Unit = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUnit($var)
    {
        GPBUtil::checkString($var, True);
        $this->Unit = $var;

        return $this;
    }

    /**
     * Наименование единицы измерения товара. Пользователь заполняет, если ОКЕИ_Тов=0000 // НаимЕдИзм
     *
     * Generated from protobuf field <code>optional string UnitName = 3;</code>
     * @return string
     */
    public function getUnitName()
    {
        return isset($this->UnitName) ? $this->UnitName : '';
    }

    public function hasUnitName()
    {
        return isset($this->UnitName);
    }

    public function clearUnitName()
    {
        unset($this->UnitName);
    }

    /**
     * Наименование единицы измерения товара. Пользователь заполняет, если ОКЕИ_Тов=0000 // НаимЕдИзм
     *
     * Generated from protobuf field <code>optional string UnitName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUnitName($var)
    {
        GPBUtil::checkString($var, True);
        $this->UnitName = $var;

        return $this;
    }

    /**
     * Количество единиц товара // КолТов
     *
     * Generated from protobuf field <code>optional string Quantity = 4;</code>
     * @return string
     */
    public function getQuantity()
    {
        return isset($this->Quantity) ? $this->Quantity : '';
    }

    public function hasQuantity()
    {
        return isset($this->Quantity);
    }

    public function clearQuantity()
    {
        unset($this->Quantity);
    }

    /**
     * Количество единиц товара // КолТов
     *
     * Generated from protobuf field <code>optional string Quantity = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkString($var, True);
        $this->Quantity = $var;

        return $this;
    }

    /**
     * Цена за единицу товара // ЦенаТов
     *
     * Generated from protobuf field <code>optional string Price = 5;</code>
     * @return string
     */
    public function getPrice()
    {
        return isset($this->Price) ? $this->Price : '';
    }

    public function hasPrice()
    {
        return isset($this->Price);
    }

    public function clearPrice()
    {
        unset($this->Price);
    }

    /**
     * Цена за единицу товара // ЦенаТов
     *
     * Generated from protobuf field <code>optional string Price = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkString($var, True);
        $this->Price = $var;

        return $this;
    }

    /**
     * Акциз // СумАкциз
     *
     * Generated from protobuf field <code>optional string Excise = 6;</code>
     * @return string
     */
    public function getExcise()
    {
        return isset($this->Excise) ? $this->Excise : '';
    }

    public function hasExcise()
    {
        return isset($this->Excise);
    }

    public function clearExcise()
    {
        unset($this->Excise);
    }

    /**
     * Акциз // СумАкциз
     *
     * Generated from protobuf field <code>optional string Excise = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setExcise($var)
    {
        GPBUtil::checkString($var, True);
        $this->Excise = $var;

        return $this;
    }

    /**
     * Ставка налога // НалСт
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.TaxRate TaxRate = 7;</code>
     * @return int
     */
    public function getTaxRate()
    {
        return $this->TaxRate;
    }

    /**
     * Ставка налога // НалСт
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.TaxRate TaxRate = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setTaxRate($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Invoicing\TaxRate::class);
        $this->TaxRate = $var;

        return $this;
    }

    /**
     * Сумма без учета налога // СтТовБезНДС
     *
     * Generated from protobuf field <code>optional string SubtotalWithVatExcluded = 8;</code>
     * @return string
     */
    public function getSubtotalWithVatExcluded()
    {
        return isset($this->SubtotalWithVatExcluded) ? $this->SubtotalWithVatExcluded : '';
    }

    public function hasSubtotalWithVatExcluded()
    {
        return isset($this->SubtotalWithVatExcluded);
    }

    public function clearSubtotalWithVatExcluded()
    {
        unset($this->SubtotalWithVatExcluded);
    }

    /**
     * Сумма без учета налога // СтТовБезНДС
     *
     * Generated from protobuf field <code>optional string SubtotalWithVatExcluded = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSubtotalWithVatExcluded($var)
    {
        GPBUtil::checkString($var, True);
        $this->SubtotalWithVatExcluded = $var;

        return $this;
    }

    /**
     * Сумма налога // СумНал
     *
     * Generated from protobuf field <code>optional string Vat = 9;</code>
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
     * Сумма налога // СумНал
     *
     * Generated from protobuf field <code>optional string Vat = 9;</code>
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
     * Сумма всего // СтТовУчНал
     *
     * Generated from protobuf field <code>string Subtotal = 10;</code>
     * @return string
     */
    public function getSubtotal()
    {
        return $this->Subtotal;
    }

    /**
     * Сумма всего // СтТовУчНал
     *
     * Generated from protobuf field <code>string Subtotal = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setSubtotal($var)
    {
        GPBUtil::checkString($var, True);
        $this->Subtotal = $var;

        return $this;
    }

    /**
     * Номера таможенных деклараций // СвТД
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.CustomsDeclaration CustomsDeclarations = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomsDeclarations()
    {
        return $this->CustomsDeclarations;
    }

    /**
     * Номера таможенных деклараций // СвТД
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.CustomsDeclaration CustomsDeclarations = 11;</code>
     * @param array<\Diadoc\Api\Proto\Invoicing\CustomsDeclaration>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomsDeclarations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Invoicing\CustomsDeclaration::class);
        $this->CustomsDeclarations = $arr;

        return $this;
    }

    /**
     * Признак товар-работа-услуга // ПрТовРаб
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.ItemMark ItemMark = 12;</code>
     * @return int
     */
    public function getItemMark()
    {
        return isset($this->ItemMark) ? $this->ItemMark : 0;
    }

    public function hasItemMark()
    {
        return isset($this->ItemMark);
    }

    public function clearItemMark()
    {
        unset($this->ItemMark);
    }

    /**
     * Признак товар-работа-услуга // ПрТовРаб
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.ItemMark ItemMark = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setItemMark($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Invoicing\ItemMark::class);
        $this->ItemMark = $var;

        return $this;
    }

    /**
     * Дополнительная информация о признаке //ДопПризн
     *
     * Generated from protobuf field <code>optional string AdditionalProperty = 13;</code>
     * @return string
     */
    public function getAdditionalProperty()
    {
        return isset($this->AdditionalProperty) ? $this->AdditionalProperty : '';
    }

    public function hasAdditionalProperty()
    {
        return isset($this->AdditionalProperty);
    }

    public function clearAdditionalProperty()
    {
        unset($this->AdditionalProperty);
    }

    /**
     * Дополнительная информация о признаке //ДопПризн
     *
     * Generated from protobuf field <code>optional string AdditionalProperty = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setAdditionalProperty($var)
    {
        GPBUtil::checkString($var, True);
        $this->AdditionalProperty = $var;

        return $this;
    }

    /**
     * Характеристика/код/артикул/сорт товара // КодТов
     *
     * Generated from protobuf field <code>optional string ItemVendorCode = 14;</code>
     * @return string
     */
    public function getItemVendorCode()
    {
        return isset($this->ItemVendorCode) ? $this->ItemVendorCode : '';
    }

    public function hasItemVendorCode()
    {
        return isset($this->ItemVendorCode);
    }

    public function clearItemVendorCode()
    {
        unset($this->ItemVendorCode);
    }

    /**
     * Характеристика/код/артикул/сорт товара // КодТов
     *
     * Generated from protobuf field <code>optional string ItemVendorCode = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setItemVendorCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->ItemVendorCode = $var;

        return $this;
    }

    /**
     * Количество надлежит отпустить // НадлОтп
     *
     * Generated from protobuf field <code>optional string ItemToRelease = 15;</code>
     * @return string
     */
    public function getItemToRelease()
    {
        return isset($this->ItemToRelease) ? $this->ItemToRelease : '';
    }

    public function hasItemToRelease()
    {
        return isset($this->ItemToRelease);
    }

    public function clearItemToRelease()
    {
        unset($this->ItemToRelease);
    }

    /**
     * Количество надлежит отпустить // НадлОтп
     *
     * Generated from protobuf field <code>optional string ItemToRelease = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setItemToRelease($var)
    {
        GPBUtil::checkString($var, True);
        $this->ItemToRelease = $var;

        return $this;
    }

    /**
     * Корреспондирующие счета: дебет // КорСчДебет
     *
     * Generated from protobuf field <code>optional string ItemAccountDebit = 16;</code>
     * @return string
     */
    public function getItemAccountDebit()
    {
        return isset($this->ItemAccountDebit) ? $this->ItemAccountDebit : '';
    }

    public function hasItemAccountDebit()
    {
        return isset($this->ItemAccountDebit);
    }

    public function clearItemAccountDebit()
    {
        unset($this->ItemAccountDebit);
    }

    /**
     * Корреспондирующие счета: дебет // КорСчДебет
     *
     * Generated from protobuf field <code>optional string ItemAccountDebit = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setItemAccountDebit($var)
    {
        GPBUtil::checkString($var, True);
        $this->ItemAccountDebit = $var;

        return $this;
    }

    /**
     * Корреспондирующие счета: кредит // КорСчКредит
     *
     * Generated from protobuf field <code>optional string ItemAccountCredit = 17;</code>
     * @return string
     */
    public function getItemAccountCredit()
    {
        return isset($this->ItemAccountCredit) ? $this->ItemAccountCredit : '';
    }

    public function hasItemAccountCredit()
    {
        return isset($this->ItemAccountCredit);
    }

    public function clearItemAccountCredit()
    {
        unset($this->ItemAccountCredit);
    }

    /**
     * Корреспондирующие счета: кредит // КорСчКредит
     *
     * Generated from protobuf field <code>optional string ItemAccountCredit = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setItemAccountCredit($var)
    {
        GPBUtil::checkString($var, True);
        $this->ItemAccountCredit = $var;

        return $this;
    }

    /**
     * Информационное поле документа // ИнфПолФХЖ2
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.AdditionalInfo AdditionalInfo = 18;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }

    /**
     * Информационное поле документа // ИнфПолФХЖ2
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.AdditionalInfo AdditionalInfo = 18;</code>
     * @param array<\Diadoc\Api\Proto\Invoicing\AdditionalInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdditionalInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Invoicing\AdditionalInfo::class);
        $this->AdditionalInfo = $arr;

        return $this;
    }

}

