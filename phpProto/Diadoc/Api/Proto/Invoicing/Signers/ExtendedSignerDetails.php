<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/ExtendedSigner.proto

namespace Diadoc\Api\Proto\Invoicing\Signers;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Invoicing.Signers.ExtendedSignerDetails</code>
 */
class ExtendedSignerDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Surname = 1;</code>
     */
    protected $Surname = '';
    /**
     * Generated from protobuf field <code>string FirstName = 2;</code>
     */
    protected $FirstName = '';
    /**
     * Generated from protobuf field <code>optional string Patronymic = 3;</code>
     */
    protected $Patronymic = null;
    /**
     * Generated from protobuf field <code>optional string JobTitle = 4;</code>
     */
    protected $JobTitle = null;
    /**
     * Generated from protobuf field <code>optional string Inn = 5;</code>
     */
    protected $Inn = null;
    /**
     * Generated from protobuf field <code>optional string RegistrationCertificate = 6;</code>
     */
    protected $RegistrationCertificate = null;
    /**
     * Физическое лицо-Индивидуальный предприниматель – представитель юридического лица (ФЛ-ИП-ЮЛ)
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Signers.SignerType SignerType = 7;</code>
     */
    protected $SignerType = 0;
    /**
     * Наименование (НаимОрг)
     *
     * Generated from protobuf field <code>optional string SignerOrganizationName = 8;</code>
     */
    protected $SignerOrganizationName = null;
    /**
     * Иные сведения, идентифицирующие физическое лицо (ИныеСвед)
     *
     * Generated from protobuf field <code>optional string SignerInfo = 9;</code>
     */
    protected $SignerInfo = null;
    /**
     * Область полномочий (ОблПолн)
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Signers.SignerPowers SignerPowers = 10;</code>
     */
    protected $SignerPowers = 0;
    /**
     * Статус (Статус)
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Signers.SignerStatus SignerStatus = 11;</code>
     */
    protected $SignerStatus = 0;
    /**
     * Основание полномочий (доверия) (ОснПолн)
     *
     * Generated from protobuf field <code>optional string SignerPowersBase = 12;</code>
     */
    protected $SignerPowersBase = null;
    /**
     * Основание полномочий (доверия) организации (ОснПолнОрг)
     *
     * Generated from protobuf field <code>optional string SignerOrgPowersBase = 13;</code>
     */
    protected $SignerOrgPowersBase = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Surname
     *     @type string $FirstName
     *     @type string $Patronymic
     *     @type string $JobTitle
     *     @type string $Inn
     *     @type string $RegistrationCertificate
     *     @type int $SignerType
     *           Физическое лицо-Индивидуальный предприниматель – представитель юридического лица (ФЛ-ИП-ЮЛ)
     *     @type string $SignerOrganizationName
     *           Наименование (НаимОрг)
     *     @type string $SignerInfo
     *           Иные сведения, идентифицирующие физическое лицо (ИныеСвед)
     *     @type int $SignerPowers
     *           Область полномочий (ОблПолн)
     *     @type int $SignerStatus
     *           Статус (Статус)
     *     @type string $SignerPowersBase
     *           Основание полномочий (доверия) (ОснПолн)
     *     @type string $SignerOrgPowersBase
     *           Основание полномочий (доверия) организации (ОснПолнОрг)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\ExtendedSigner::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Surname = 1;</code>
     * @return string
     */
    public function getSurname()
    {
        return $this->Surname;
    }

    /**
     * Generated from protobuf field <code>string Surname = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSurname($var)
    {
        GPBUtil::checkString($var, True);
        $this->Surname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string FirstName = 2;</code>
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * Generated from protobuf field <code>string FirstName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFirstName($var)
    {
        GPBUtil::checkString($var, True);
        $this->FirstName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string Patronymic = 3;</code>
     * @return string
     */
    public function getPatronymic()
    {
        return isset($this->Patronymic) ? $this->Patronymic : '';
    }

    public function hasPatronymic()
    {
        return isset($this->Patronymic);
    }

    public function clearPatronymic()
    {
        unset($this->Patronymic);
    }

    /**
     * Generated from protobuf field <code>optional string Patronymic = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPatronymic($var)
    {
        GPBUtil::checkString($var, True);
        $this->Patronymic = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string JobTitle = 4;</code>
     * @return string
     */
    public function getJobTitle()
    {
        return isset($this->JobTitle) ? $this->JobTitle : '';
    }

    public function hasJobTitle()
    {
        return isset($this->JobTitle);
    }

    public function clearJobTitle()
    {
        unset($this->JobTitle);
    }

    /**
     * Generated from protobuf field <code>optional string JobTitle = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setJobTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->JobTitle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string Inn = 5;</code>
     * @return string
     */
    public function getInn()
    {
        return isset($this->Inn) ? $this->Inn : '';
    }

    public function hasInn()
    {
        return isset($this->Inn);
    }

    public function clearInn()
    {
        unset($this->Inn);
    }

    /**
     * Generated from protobuf field <code>optional string Inn = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setInn($var)
    {
        GPBUtil::checkString($var, True);
        $this->Inn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string RegistrationCertificate = 6;</code>
     * @return string
     */
    public function getRegistrationCertificate()
    {
        return isset($this->RegistrationCertificate) ? $this->RegistrationCertificate : '';
    }

    public function hasRegistrationCertificate()
    {
        return isset($this->RegistrationCertificate);
    }

    public function clearRegistrationCertificate()
    {
        unset($this->RegistrationCertificate);
    }

    /**
     * Generated from protobuf field <code>optional string RegistrationCertificate = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRegistrationCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->RegistrationCertificate = $var;

        return $this;
    }

    /**
     * Физическое лицо-Индивидуальный предприниматель – представитель юридического лица (ФЛ-ИП-ЮЛ)
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Signers.SignerType SignerType = 7;</code>
     * @return int
     */
    public function getSignerType()
    {
        return $this->SignerType;
    }

    /**
     * Физическое лицо-Индивидуальный предприниматель – представитель юридического лица (ФЛ-ИП-ЮЛ)
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Signers.SignerType SignerType = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setSignerType($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Invoicing\Signers\SignerType::class);
        $this->SignerType = $var;

        return $this;
    }

    /**
     * Наименование (НаимОрг)
     *
     * Generated from protobuf field <code>optional string SignerOrganizationName = 8;</code>
     * @return string
     */
    public function getSignerOrganizationName()
    {
        return isset($this->SignerOrganizationName) ? $this->SignerOrganizationName : '';
    }

    public function hasSignerOrganizationName()
    {
        return isset($this->SignerOrganizationName);
    }

    public function clearSignerOrganizationName()
    {
        unset($this->SignerOrganizationName);
    }

    /**
     * Наименование (НаимОрг)
     *
     * Generated from protobuf field <code>optional string SignerOrganizationName = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSignerOrganizationName($var)
    {
        GPBUtil::checkString($var, True);
        $this->SignerOrganizationName = $var;

        return $this;
    }

    /**
     * Иные сведения, идентифицирующие физическое лицо (ИныеСвед)
     *
     * Generated from protobuf field <code>optional string SignerInfo = 9;</code>
     * @return string
     */
    public function getSignerInfo()
    {
        return isset($this->SignerInfo) ? $this->SignerInfo : '';
    }

    public function hasSignerInfo()
    {
        return isset($this->SignerInfo);
    }

    public function clearSignerInfo()
    {
        unset($this->SignerInfo);
    }

    /**
     * Иные сведения, идентифицирующие физическое лицо (ИныеСвед)
     *
     * Generated from protobuf field <code>optional string SignerInfo = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setSignerInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->SignerInfo = $var;

        return $this;
    }

    /**
     * Область полномочий (ОблПолн)
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Signers.SignerPowers SignerPowers = 10;</code>
     * @return int
     */
    public function getSignerPowers()
    {
        return $this->SignerPowers;
    }

    /**
     * Область полномочий (ОблПолн)
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Signers.SignerPowers SignerPowers = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setSignerPowers($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Invoicing\Signers\SignerPowers::class);
        $this->SignerPowers = $var;

        return $this;
    }

    /**
     * Статус (Статус)
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Signers.SignerStatus SignerStatus = 11;</code>
     * @return int
     */
    public function getSignerStatus()
    {
        return $this->SignerStatus;
    }

    /**
     * Статус (Статус)
     *
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.Signers.SignerStatus SignerStatus = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setSignerStatus($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Invoicing\Signers\SignerStatus::class);
        $this->SignerStatus = $var;

        return $this;
    }

    /**
     * Основание полномочий (доверия) (ОснПолн)
     *
     * Generated from protobuf field <code>optional string SignerPowersBase = 12;</code>
     * @return string
     */
    public function getSignerPowersBase()
    {
        return isset($this->SignerPowersBase) ? $this->SignerPowersBase : '';
    }

    public function hasSignerPowersBase()
    {
        return isset($this->SignerPowersBase);
    }

    public function clearSignerPowersBase()
    {
        unset($this->SignerPowersBase);
    }

    /**
     * Основание полномочий (доверия) (ОснПолн)
     *
     * Generated from protobuf field <code>optional string SignerPowersBase = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setSignerPowersBase($var)
    {
        GPBUtil::checkString($var, True);
        $this->SignerPowersBase = $var;

        return $this;
    }

    /**
     * Основание полномочий (доверия) организации (ОснПолнОрг)
     *
     * Generated from protobuf field <code>optional string SignerOrgPowersBase = 13;</code>
     * @return string
     */
    public function getSignerOrgPowersBase()
    {
        return isset($this->SignerOrgPowersBase) ? $this->SignerOrgPowersBase : '';
    }

    public function hasSignerOrgPowersBase()
    {
        return isset($this->SignerOrgPowersBase);
    }

    public function clearSignerOrgPowersBase()
    {
        unset($this->SignerOrgPowersBase);
    }

    /**
     * Основание полномочий (доверия) организации (ОснПолнОрг)
     *
     * Generated from protobuf field <code>optional string SignerOrgPowersBase = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setSignerOrgPowersBase($var)
    {
        GPBUtil::checkString($var, True);
        $this->SignerOrgPowersBase = $var;

        return $this;
    }

}

