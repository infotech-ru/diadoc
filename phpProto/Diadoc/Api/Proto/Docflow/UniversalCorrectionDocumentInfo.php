<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocumentInfo.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.UniversalCorrectionDocumentInfo</code>
 */
class UniversalCorrectionDocumentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string TotalInc = 1;</code>
     */
    protected $TotalInc = null;
    /**
     * Generated from protobuf field <code>optional string TotalDec = 2;</code>
     */
    protected $TotalDec = null;
    /**
     * Generated from protobuf field <code>optional string VatInc = 3;</code>
     */
    protected $VatInc = null;
    /**
     * Generated from protobuf field <code>optional string VatDec = 4;</code>
     */
    protected $VatDec = null;
    /**
     * Generated from protobuf field <code>optional int32 CurrencyCode = 5;</code>
     */
    protected $CurrencyCode = null;
    /**
     * Generated from protobuf field <code>optional string Grounds = 6;</code>
     */
    protected $Grounds = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.FunctionType Function = 7;</code>
     */
    protected $Function = 0;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber OriginalDocumentDateAndNumber = 8;</code>
     */
    protected $OriginalDocumentDateAndNumber = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber OriginalDocumentRevisionDateAndNumber = 9;</code>
     */
    protected $OriginalDocumentRevisionDateAndNumber = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber OriginalDocumentCorrectionDateAndNumber = 10;</code>
     */
    protected $OriginalDocumentCorrectionDateAndNumber = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $TotalInc
     *     @type string $TotalDec
     *     @type string $VatInc
     *     @type string $VatDec
     *     @type int $CurrencyCode
     *     @type string $Grounds
     *     @type int $Function
     *     @type \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $OriginalDocumentDateAndNumber
     *     @type \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $OriginalDocumentRevisionDateAndNumber
     *     @type \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $OriginalDocumentCorrectionDateAndNumber
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\DocumentInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string TotalInc = 1;</code>
     * @return string
     */
    public function getTotalInc()
    {
        return isset($this->TotalInc) ? $this->TotalInc : '';
    }

    public function hasTotalInc()
    {
        return isset($this->TotalInc);
    }

    public function clearTotalInc()
    {
        unset($this->TotalInc);
    }

    /**
     * Generated from protobuf field <code>optional string TotalInc = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTotalInc($var)
    {
        GPBUtil::checkString($var, True);
        $this->TotalInc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string TotalDec = 2;</code>
     * @return string
     */
    public function getTotalDec()
    {
        return isset($this->TotalDec) ? $this->TotalDec : '';
    }

    public function hasTotalDec()
    {
        return isset($this->TotalDec);
    }

    public function clearTotalDec()
    {
        unset($this->TotalDec);
    }

    /**
     * Generated from protobuf field <code>optional string TotalDec = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTotalDec($var)
    {
        GPBUtil::checkString($var, True);
        $this->TotalDec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string VatInc = 3;</code>
     * @return string
     */
    public function getVatInc()
    {
        return isset($this->VatInc) ? $this->VatInc : '';
    }

    public function hasVatInc()
    {
        return isset($this->VatInc);
    }

    public function clearVatInc()
    {
        unset($this->VatInc);
    }

    /**
     * Generated from protobuf field <code>optional string VatInc = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setVatInc($var)
    {
        GPBUtil::checkString($var, True);
        $this->VatInc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string VatDec = 4;</code>
     * @return string
     */
    public function getVatDec()
    {
        return isset($this->VatDec) ? $this->VatDec : '';
    }

    public function hasVatDec()
    {
        return isset($this->VatDec);
    }

    public function clearVatDec()
    {
        unset($this->VatDec);
    }

    /**
     * Generated from protobuf field <code>optional string VatDec = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVatDec($var)
    {
        GPBUtil::checkString($var, True);
        $this->VatDec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional int32 CurrencyCode = 5;</code>
     * @return int
     */
    public function getCurrencyCode()
    {
        return isset($this->CurrencyCode) ? $this->CurrencyCode : 0;
    }

    public function hasCurrencyCode()
    {
        return isset($this->CurrencyCode);
    }

    public function clearCurrencyCode()
    {
        unset($this->CurrencyCode);
    }

    /**
     * Generated from protobuf field <code>optional int32 CurrencyCode = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->CurrencyCode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string Grounds = 6;</code>
     * @return string
     */
    public function getGrounds()
    {
        return isset($this->Grounds) ? $this->Grounds : '';
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
     * Generated from protobuf field <code>optional string Grounds = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setGrounds($var)
    {
        GPBUtil::checkString($var, True);
        $this->Grounds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.FunctionType Function = 7;</code>
     * @return int
     */
    public function getFunction()
    {
        return $this->Function;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Invoicing.FunctionType Function = 7;</code>
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber OriginalDocumentDateAndNumber = 8;</code>
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber|null
     */
    public function getOriginalDocumentDateAndNumber()
    {
        return $this->OriginalDocumentDateAndNumber;
    }

    public function hasOriginalDocumentDateAndNumber()
    {
        return isset($this->OriginalDocumentDateAndNumber);
    }

    public function clearOriginalDocumentDateAndNumber()
    {
        unset($this->OriginalDocumentDateAndNumber);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber OriginalDocumentDateAndNumber = 8;</code>
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $var
     * @return $this
     */
    public function setOriginalDocumentDateAndNumber($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber::class);
        $this->OriginalDocumentDateAndNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber OriginalDocumentRevisionDateAndNumber = 9;</code>
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber|null
     */
    public function getOriginalDocumentRevisionDateAndNumber()
    {
        return $this->OriginalDocumentRevisionDateAndNumber;
    }

    public function hasOriginalDocumentRevisionDateAndNumber()
    {
        return isset($this->OriginalDocumentRevisionDateAndNumber);
    }

    public function clearOriginalDocumentRevisionDateAndNumber()
    {
        unset($this->OriginalDocumentRevisionDateAndNumber);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber OriginalDocumentRevisionDateAndNumber = 9;</code>
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $var
     * @return $this
     */
    public function setOriginalDocumentRevisionDateAndNumber($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber::class);
        $this->OriginalDocumentRevisionDateAndNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber OriginalDocumentCorrectionDateAndNumber = 10;</code>
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber|null
     */
    public function getOriginalDocumentCorrectionDateAndNumber()
    {
        return $this->OriginalDocumentCorrectionDateAndNumber;
    }

    public function hasOriginalDocumentCorrectionDateAndNumber()
    {
        return isset($this->OriginalDocumentCorrectionDateAndNumber);
    }

    public function clearOriginalDocumentCorrectionDateAndNumber()
    {
        unset($this->OriginalDocumentCorrectionDateAndNumber);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber OriginalDocumentCorrectionDateAndNumber = 10;</code>
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $var
     * @return $this
     */
    public function setOriginalDocumentCorrectionDateAndNumber($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber::class);
        $this->OriginalDocumentCorrectionDateAndNumber = $var;

        return $this;
    }

}

