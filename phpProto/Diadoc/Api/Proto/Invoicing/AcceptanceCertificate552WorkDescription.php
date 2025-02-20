<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/AcceptanceCertificate552Info.proto

namespace Diadoc\Api\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Invoicing.AcceptanceCertificate552WorkDescription</code>
 */
class AcceptanceCertificate552WorkDescription extends \Google\Protobuf\Internal\Message
{
    /**
     * Начало периода выполнения работ // НачРабот
     *
     * Generated from protobuf field <code>optional string StartingDate = 1;</code>
     */
    protected $StartingDate = null;
    /**
     * Окончание периода выполнения работ // КонРабот
     *
     * Generated from protobuf field <code>optional string CompletionDate = 2;</code>
     */
    protected $CompletionDate = null;
    /**
     * Сумма без учета НДС - итого // СтБезНДСИт
     *
     * Generated from protobuf field <code>optional string TotalWithVatExcluded = 3;</code>
     */
    protected $TotalWithVatExcluded = null;
    /**
     * Сумма НДС - итого // СумНДСИт
     *
     * Generated from protobuf field <code>optional string TotalVat = 4;</code>
     */
    protected $TotalVat = null;
    /**
     * Сумма с учетом НДС - итого // СтУчНДСИт
     *
     * Generated from protobuf field <code>string Total = 5;</code>
     */
    protected $Total = '';
    /**
     * Сведения о произведенной работе // Работа
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.AcceptanceCertificate552WorkItem Items = 6;</code>
     */
    private $Items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $StartingDate
     *           Начало периода выполнения работ // НачРабот
     *     @type string $CompletionDate
     *           Окончание периода выполнения работ // КонРабот
     *     @type string $TotalWithVatExcluded
     *           Сумма без учета НДС - итого // СтБезНДСИт
     *     @type string $TotalVat
     *           Сумма НДС - итого // СумНДСИт
     *     @type string $Total
     *           Сумма с учетом НДС - итого // СтУчНДСИт
     *     @type array<\Diadoc\Api\Proto\Invoicing\AcceptanceCertificate552WorkItem>|\Google\Protobuf\Internal\RepeatedField $Items
     *           Сведения о произведенной работе // Работа
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\AcceptanceCertificate552Info::initOnce();
        parent::__construct($data);
    }

    /**
     * Начало периода выполнения работ // НачРабот
     *
     * Generated from protobuf field <code>optional string StartingDate = 1;</code>
     * @return string
     */
    public function getStartingDate()
    {
        return isset($this->StartingDate) ? $this->StartingDate : '';
    }

    public function hasStartingDate()
    {
        return isset($this->StartingDate);
    }

    public function clearStartingDate()
    {
        unset($this->StartingDate);
    }

    /**
     * Начало периода выполнения работ // НачРабот
     *
     * Generated from protobuf field <code>optional string StartingDate = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStartingDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->StartingDate = $var;

        return $this;
    }

    /**
     * Окончание периода выполнения работ // КонРабот
     *
     * Generated from protobuf field <code>optional string CompletionDate = 2;</code>
     * @return string
     */
    public function getCompletionDate()
    {
        return isset($this->CompletionDate) ? $this->CompletionDate : '';
    }

    public function hasCompletionDate()
    {
        return isset($this->CompletionDate);
    }

    public function clearCompletionDate()
    {
        unset($this->CompletionDate);
    }

    /**
     * Окончание периода выполнения работ // КонРабот
     *
     * Generated from protobuf field <code>optional string CompletionDate = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCompletionDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->CompletionDate = $var;

        return $this;
    }

    /**
     * Сумма без учета НДС - итого // СтБезНДСИт
     *
     * Generated from protobuf field <code>optional string TotalWithVatExcluded = 3;</code>
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
     * Сумма без учета НДС - итого // СтБезНДСИт
     *
     * Generated from protobuf field <code>optional string TotalWithVatExcluded = 3;</code>
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
     * Сумма НДС - итого // СумНДСИт
     *
     * Generated from protobuf field <code>optional string TotalVat = 4;</code>
     * @return string
     */
    public function getTotalVat()
    {
        return isset($this->TotalVat) ? $this->TotalVat : '';
    }

    public function hasTotalVat()
    {
        return isset($this->TotalVat);
    }

    public function clearTotalVat()
    {
        unset($this->TotalVat);
    }

    /**
     * Сумма НДС - итого // СумНДСИт
     *
     * Generated from protobuf field <code>optional string TotalVat = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTotalVat($var)
    {
        GPBUtil::checkString($var, True);
        $this->TotalVat = $var;

        return $this;
    }

    /**
     * Сумма с учетом НДС - итого // СтУчНДСИт
     *
     * Generated from protobuf field <code>string Total = 5;</code>
     * @return string
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * Сумма с учетом НДС - итого // СтУчНДСИт
     *
     * Generated from protobuf field <code>string Total = 5;</code>
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
     * Сведения о произведенной работе // Работа
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.AcceptanceCertificate552WorkItem Items = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->Items;
    }

    /**
     * Сведения о произведенной работе // Работа
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.AcceptanceCertificate552WorkItem Items = 6;</code>
     * @param array<\Diadoc\Api\Proto\Invoicing\AcceptanceCertificate552WorkItem>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Invoicing\AcceptanceCertificate552WorkItem::class);
        $this->Items = $arr;

        return $this;
    }

}

