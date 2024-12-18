<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/AcceptanceCertificateInfo.proto

namespace Diadoc\Api\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Invoicing.AcceptanceCertificateSignatureInfo</code>
 */
class AcceptanceCertificateSignatureInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Дата подписи акта исполнителем / заказчиком
     *
     * Generated from protobuf field <code>optional string SignatureDate = 1;</code>
     */
    protected $SignatureDate = null;
    /**
     * Лицо, подписывающее со стороны исполнителя / заказчика
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Official Official = 2;</code>
     */
    protected $Official = null;
    /**
     * Сведения о доверенности подписывающего со стороны исполнителя / заказчика
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Attorney Attorney = 3;</code>
     */
    protected $Attorney = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SignatureDate
     *           Дата подписи акта исполнителем / заказчиком
     *     @type \Diadoc\Api\Proto\Invoicing\Official $Official
     *           Лицо, подписывающее со стороны исполнителя / заказчика
     *     @type \Diadoc\Api\Proto\Invoicing\Attorney $Attorney
     *           Сведения о доверенности подписывающего со стороны исполнителя / заказчика
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\AcceptanceCertificateInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Дата подписи акта исполнителем / заказчиком
     *
     * Generated from protobuf field <code>optional string SignatureDate = 1;</code>
     * @return string
     */
    public function getSignatureDate()
    {
        return isset($this->SignatureDate) ? $this->SignatureDate : '';
    }

    public function hasSignatureDate()
    {
        return isset($this->SignatureDate);
    }

    public function clearSignatureDate()
    {
        unset($this->SignatureDate);
    }

    /**
     * Дата подписи акта исполнителем / заказчиком
     *
     * Generated from protobuf field <code>optional string SignatureDate = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSignatureDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->SignatureDate = $var;

        return $this;
    }

    /**
     * Лицо, подписывающее со стороны исполнителя / заказчика
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Official Official = 2;</code>
     * @return \Diadoc\Api\Proto\Invoicing\Official|null
     */
    public function getOfficial()
    {
        return $this->Official;
    }

    public function hasOfficial()
    {
        return isset($this->Official);
    }

    public function clearOfficial()
    {
        unset($this->Official);
    }

    /**
     * Лицо, подписывающее со стороны исполнителя / заказчика
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Official Official = 2;</code>
     * @param \Diadoc\Api\Proto\Invoicing\Official $var
     * @return $this
     */
    public function setOfficial($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\Official::class);
        $this->Official = $var;

        return $this;
    }

    /**
     * Сведения о доверенности подписывающего со стороны исполнителя / заказчика
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Attorney Attorney = 3;</code>
     * @return \Diadoc\Api\Proto\Invoicing\Attorney|null
     */
    public function getAttorney()
    {
        return $this->Attorney;
    }

    public function hasAttorney()
    {
        return isset($this->Attorney);
    }

    public function clearAttorney()
    {
        unset($this->Attorney);
    }

    /**
     * Сведения о доверенности подписывающего со стороны исполнителя / заказчика
     *
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Attorney Attorney = 3;</code>
     * @param \Diadoc\Api\Proto\Invoicing\Attorney $var
     * @return $this
     */
    public function setAttorney($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\Attorney::class);
        $this->Attorney = $var;

        return $this;
    }

}
