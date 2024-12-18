<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/UniversalTransferDocumentInfo.proto

namespace Diadoc\Api\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Invoicing.UniversalTransferDocumentBuyerTitleInfo</code>
 */
class UniversalTransferDocumentBuyerTitleInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * НаимЭконСубСост - Наименование экономического субъекта - составителя файла обмена информации покупателя
     *
     * Generated from protobuf field <code>string DocumentCreator = 1;</code>
     */
    protected $DocumentCreator = '';
    /**
     * ОснДоверОргСост - Основание, по которому экономический субъект является составителем файла обмена информации покупателя
     *
     * Generated from protobuf field <code>optional string DocumentCreatorBase = 2;</code>
     */
    protected $DocumentCreatorBase = null;
    /**
     * ВидОперации - ВидОперации
     *
     * Generated from protobuf field <code>optional string OperationCode = 3;</code>
     */
    protected $OperationCode = null;
    /**
     * СодОпер - Содержание операции
     *
     * Generated from protobuf field <code>string OperationContent = 4;</code>
     */
    protected $OperationContent = '';
    /**
     * ДатаПрин - Дата принятия товаров (результатов выполненных работ), имущественных прав (подтверждения факта оказания услуг)
     *
     * Generated from protobuf field <code>optional string AcceptanceDate = 5;</code>
     */
    protected $AcceptanceDate = null;
    /**
     * РабОргПок - работник организации покупателя
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Employee Employee = 6;</code>
     */
    protected $Employee = null;
    /**
     * ИнЛицо - Иное Лицо
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OtherIssuer OtherIssuer = 7;</code>
     */
    protected $OtherIssuer = null;
    /**
     * ИнфПолФХЖ4
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.AdditionalInfoId AdditionalInfoId = 8;</code>
     */
    protected $AdditionalInfoId = null;
    /**
     * Подписант
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.Signers.ExtendedSigner Signers = 9;</code>
     */
    private $Signers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $DocumentCreator
     *           НаимЭконСубСост - Наименование экономического субъекта - составителя файла обмена информации покупателя
     *     @type string $DocumentCreatorBase
     *           ОснДоверОргСост - Основание, по которому экономический субъект является составителем файла обмена информации покупателя
     *     @type string $OperationCode
     *           ВидОперации - ВидОперации
     *     @type string $OperationContent
     *           СодОпер - Содержание операции
     *     @type string $AcceptanceDate
     *           ДатаПрин - Дата принятия товаров (результатов выполненных работ), имущественных прав (подтверждения факта оказания услуг)
     *     @type \Diadoc\Api\Proto\Invoicing\Employee $Employee
     *           РабОргПок - работник организации покупателя
     *     @type \Diadoc\Api\Proto\Invoicing\OtherIssuer $OtherIssuer
     *           ИнЛицо - Иное Лицо
     *     @type \Diadoc\Api\Proto\Invoicing\AdditionalInfoId $AdditionalInfoId
     *           ИнфПолФХЖ4
     *     @type array<\Diadoc\Api\Proto\Invoicing\Signers\ExtendedSigner>|\Google\Protobuf\Internal\RepeatedField $Signers
     *           Подписант
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\UniversalTransferDocumentInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * НаимЭконСубСост - Наименование экономического субъекта - составителя файла обмена информации покупателя
     *
     * Generated from protobuf field <code>string DocumentCreator = 1;</code>
     * @return string
     */
    public function getDocumentCreator()
    {
        return $this->DocumentCreator;
    }

    /**
     * НаимЭконСубСост - Наименование экономического субъекта - составителя файла обмена информации покупателя
     *
     * Generated from protobuf field <code>string DocumentCreator = 1;</code>
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
     * ОснДоверОргСост - Основание, по которому экономический субъект является составителем файла обмена информации покупателя
     *
     * Generated from protobuf field <code>optional string DocumentCreatorBase = 2;</code>
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
     * ОснДоверОргСост - Основание, по которому экономический субъект является составителем файла обмена информации покупателя
     *
     * Generated from protobuf field <code>optional string DocumentCreatorBase = 2;</code>
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
     * ВидОперации - ВидОперации
     *
     * Generated from protobuf field <code>optional string OperationCode = 3;</code>
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
     * ВидОперации - ВидОперации
     *
     * Generated from protobuf field <code>optional string OperationCode = 3;</code>
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
     * СодОпер - Содержание операции
     *
     * Generated from protobuf field <code>string OperationContent = 4;</code>
     * @return string
     */
    public function getOperationContent()
    {
        return $this->OperationContent;
    }

    /**
     * СодОпер - Содержание операции
     *
     * Generated from protobuf field <code>string OperationContent = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOperationContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->OperationContent = $var;

        return $this;
    }

    /**
     * ДатаПрин - Дата принятия товаров (результатов выполненных работ), имущественных прав (подтверждения факта оказания услуг)
     *
     * Generated from protobuf field <code>optional string AcceptanceDate = 5;</code>
     * @return string
     */
    public function getAcceptanceDate()
    {
        return isset($this->AcceptanceDate) ? $this->AcceptanceDate : '';
    }

    public function hasAcceptanceDate()
    {
        return isset($this->AcceptanceDate);
    }

    public function clearAcceptanceDate()
    {
        unset($this->AcceptanceDate);
    }

    /**
     * ДатаПрин - Дата принятия товаров (результатов выполненных работ), имущественных прав (подтверждения факта оказания услуг)
     *
     * Generated from protobuf field <code>optional string AcceptanceDate = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAcceptanceDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->AcceptanceDate = $var;

        return $this;
    }

    /**
     * РабОргПок - работник организации покупателя
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Employee Employee = 6;</code>
     * @return \Diadoc\Api\Proto\Invoicing\Employee|null
     */
    public function getEmployee()
    {
        return $this->Employee;
    }

    public function hasEmployee()
    {
        return isset($this->Employee);
    }

    public function clearEmployee()
    {
        unset($this->Employee);
    }

    /**
     * РабОргПок - работник организации покупателя
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Employee Employee = 6;</code>
     * @param \Diadoc\Api\Proto\Invoicing\Employee $var
     * @return $this
     */
    public function setEmployee($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\Employee::class);
        $this->Employee = $var;

        return $this;
    }

    /**
     * ИнЛицо - Иное Лицо
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OtherIssuer OtherIssuer = 7;</code>
     * @return \Diadoc\Api\Proto\Invoicing\OtherIssuer|null
     */
    public function getOtherIssuer()
    {
        return $this->OtherIssuer;
    }

    public function hasOtherIssuer()
    {
        return isset($this->OtherIssuer);
    }

    public function clearOtherIssuer()
    {
        unset($this->OtherIssuer);
    }

    /**
     * ИнЛицо - Иное Лицо
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.OtherIssuer OtherIssuer = 7;</code>
     * @param \Diadoc\Api\Proto\Invoicing\OtherIssuer $var
     * @return $this
     */
    public function setOtherIssuer($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\OtherIssuer::class);
        $this->OtherIssuer = $var;

        return $this;
    }

    /**
     * ИнфПолФХЖ4
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.AdditionalInfoId AdditionalInfoId = 8;</code>
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
     * ИнфПолФХЖ4
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.AdditionalInfoId AdditionalInfoId = 8;</code>
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
     * Подписант
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.Signers.ExtendedSigner Signers = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSigners()
    {
        return $this->Signers;
    }

    /**
     * Подписант
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

}
