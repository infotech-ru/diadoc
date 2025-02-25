<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/AcceptanceCertificate552Info.proto

namespace Diadoc\Api\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Invoicing.AcceptanceCertificate552WorkItem</code>
 */
class AcceptanceCertificate552WorkItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Наименование // НаимРабот
     *
     * Generated from protobuf field <code>optional string Name = 1;</code>
     */
    protected $Name = null;
    /**
     * Описание работы // Описание
     *
     * Generated from protobuf field <code>optional string Description = 2;</code>
     */
    protected $Description = null;
    /**
     * Код единицы измерения // ОКЕИ
     *
     * Generated from protobuf field <code>optional string UnitCode = 3;</code>
     */
    protected $UnitCode = null;
    /**
     * Наименование единицы измерения // НаимЕдИзм
     *
     * Generated from protobuf field <code>optional string UnitName = 4;</code>
     */
    protected $UnitName = null;
    /**
     * Цена // Цена
     *
     * Generated from protobuf field <code>optional string Price = 5;</code>
     */
    protected $Price = null;
    /**
     * Количество // Количество
     *
     * Generated from protobuf field <code>optional string Quantity = 6;</code>
     */
    protected $Quantity = null;
    /**
     * Сумма без учета НДС // СтоимБезНДС
     *
     * Generated from protobuf field <code>optional string SubtotalWithVatExcluded = 7;</code>
     */
    protected $SubtotalWithVatExcluded = null;
    /**
     * Сумма НДС // СумНДС
     *
     * Generated from protobuf field <code>optional string Vat = 8;</code>
     */
    protected $Vat = null;
    /**
     * Сумма с учетом НДС // СтоимУчНДС
     *
     * Generated from protobuf field <code>optional string Subtotal = 9;</code>
     */
    protected $Subtotal = null;
    /**
     * Информационное поле сведений о работе (услуге) // ИнфПолеОписРабот
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.AdditionalInfo AdditionalInfos = 10;</code>
     */
    private $AdditionalInfos;
    /**
     * Ставка налога // НалСт
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.TaxRate TaxRate = 11;</code>
     */
    protected $TaxRate = null;
    /**
     * Корреспондирующие счета: дебет // КоррСчДебет
     *
     * Generated from protobuf field <code>optional string ItemAccountDebit = 12;</code>
     */
    protected $ItemAccountDebit = null;
    /**
     * Корреспондирующие счета: кредит // КоррСчКредит
     *
     * Generated from protobuf field <code>optional string ItemAccountCredit = 13;</code>
     */
    protected $ItemAccountCredit = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Name
     *           Наименование // НаимРабот
     *     @type string $Description
     *           Описание работы // Описание
     *     @type string $UnitCode
     *           Код единицы измерения // ОКЕИ
     *     @type string $UnitName
     *           Наименование единицы измерения // НаимЕдИзм
     *     @type string $Price
     *           Цена // Цена
     *     @type string $Quantity
     *           Количество // Количество
     *     @type string $SubtotalWithVatExcluded
     *           Сумма без учета НДС // СтоимБезНДС
     *     @type string $Vat
     *           Сумма НДС // СумНДС
     *     @type string $Subtotal
     *           Сумма с учетом НДС // СтоимУчНДС
     *     @type array<\Diadoc\Api\Proto\Invoicing\AdditionalInfo>|\Google\Protobuf\Internal\RepeatedField $AdditionalInfos
     *           Информационное поле сведений о работе (услуге) // ИнфПолеОписРабот
     *     @type int $TaxRate
     *           Ставка налога // НалСт
     *     @type string $ItemAccountDebit
     *           Корреспондирующие счета: дебет // КоррСчДебет
     *     @type string $ItemAccountCredit
     *           Корреспондирующие счета: кредит // КоррСчКредит
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\AcceptanceCertificate552Info::initOnce();
        parent::__construct($data);
    }

    /**
     * Наименование // НаимРабот
     *
     * Generated from protobuf field <code>optional string Name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : '';
    }

    public function hasName()
    {
        return isset($this->Name);
    }

    public function clearName()
    {
        unset($this->Name);
    }

    /**
     * Наименование // НаимРабот
     *
     * Generated from protobuf field <code>optional string Name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->Name = $var;

        return $this;
    }

    /**
     * Описание работы // Описание
     *
     * Generated from protobuf field <code>optional string Description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : '';
    }

    public function hasDescription()
    {
        return isset($this->Description);
    }

    public function clearDescription()
    {
        unset($this->Description);
    }

    /**
     * Описание работы // Описание
     *
     * Generated from protobuf field <code>optional string Description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->Description = $var;

        return $this;
    }

    /**
     * Код единицы измерения // ОКЕИ
     *
     * Generated from protobuf field <code>optional string UnitCode = 3;</code>
     * @return string
     */
    public function getUnitCode()
    {
        return isset($this->UnitCode) ? $this->UnitCode : '';
    }

    public function hasUnitCode()
    {
        return isset($this->UnitCode);
    }

    public function clearUnitCode()
    {
        unset($this->UnitCode);
    }

    /**
     * Код единицы измерения // ОКЕИ
     *
     * Generated from protobuf field <code>optional string UnitCode = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUnitCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->UnitCode = $var;

        return $this;
    }

    /**
     * Наименование единицы измерения // НаимЕдИзм
     *
     * Generated from protobuf field <code>optional string UnitName = 4;</code>
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
     * Наименование единицы измерения // НаимЕдИзм
     *
     * Generated from protobuf field <code>optional string UnitName = 4;</code>
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
     * Цена // Цена
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
     * Цена // Цена
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
     * Количество // Количество
     *
     * Generated from protobuf field <code>optional string Quantity = 6;</code>
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
     * Количество // Количество
     *
     * Generated from protobuf field <code>optional string Quantity = 6;</code>
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
     * Сумма без учета НДС // СтоимБезНДС
     *
     * Generated from protobuf field <code>optional string SubtotalWithVatExcluded = 7;</code>
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
     * Сумма без учета НДС // СтоимБезНДС
     *
     * Generated from protobuf field <code>optional string SubtotalWithVatExcluded = 7;</code>
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
     * Сумма НДС // СумНДС
     *
     * Generated from protobuf field <code>optional string Vat = 8;</code>
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
     * Сумма НДС // СумНДС
     *
     * Generated from protobuf field <code>optional string Vat = 8;</code>
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
     * Сумма с учетом НДС // СтоимУчНДС
     *
     * Generated from protobuf field <code>optional string Subtotal = 9;</code>
     * @return string
     */
    public function getSubtotal()
    {
        return isset($this->Subtotal) ? $this->Subtotal : '';
    }

    public function hasSubtotal()
    {
        return isset($this->Subtotal);
    }

    public function clearSubtotal()
    {
        unset($this->Subtotal);
    }

    /**
     * Сумма с учетом НДС // СтоимУчНДС
     *
     * Generated from protobuf field <code>optional string Subtotal = 9;</code>
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
     * Информационное поле сведений о работе (услуге) // ИнфПолеОписРабот
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.AdditionalInfo AdditionalInfos = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdditionalInfos()
    {
        return $this->AdditionalInfos;
    }

    /**
     * Информационное поле сведений о работе (услуге) // ИнфПолеОписРабот
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.AdditionalInfo AdditionalInfos = 10;</code>
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
     * Ставка налога // НалСт
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.TaxRate TaxRate = 11;</code>
     * @return int
     */
    public function getTaxRate()
    {
        return isset($this->TaxRate) ? $this->TaxRate : 0;
    }

    public function hasTaxRate()
    {
        return isset($this->TaxRate);
    }

    public function clearTaxRate()
    {
        unset($this->TaxRate);
    }

    /**
     * Ставка налога // НалСт
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.TaxRate TaxRate = 11;</code>
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
     * Корреспондирующие счета: дебет // КоррСчДебет
     *
     * Generated from protobuf field <code>optional string ItemAccountDebit = 12;</code>
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
     * Корреспондирующие счета: дебет // КоррСчДебет
     *
     * Generated from protobuf field <code>optional string ItemAccountDebit = 12;</code>
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
     * Корреспондирующие счета: кредит // КоррСчКредит
     *
     * Generated from protobuf field <code>optional string ItemAccountCredit = 13;</code>
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
     * Корреспондирующие счета: кредит // КоррСчКредит
     *
     * Generated from protobuf field <code>optional string ItemAccountCredit = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setItemAccountCredit($var)
    {
        GPBUtil::checkString($var, True);
        $this->ItemAccountCredit = $var;

        return $this;
    }

}

