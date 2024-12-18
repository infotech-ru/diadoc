<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocumentInfo.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.PriceListDocumentInfo</code>
 */
class PriceListDocumentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string PriceListEffectiveDate = 1;</code>
     */
    protected $PriceListEffectiveDate = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber ContractDocumentDateAndNumber = 2;</code>
     */
    protected $ContractDocumentDateAndNumber = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $PriceListEffectiveDate
     *     @type \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $ContractDocumentDateAndNumber
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\DocumentInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string PriceListEffectiveDate = 1;</code>
     * @return string
     */
    public function getPriceListEffectiveDate()
    {
        return isset($this->PriceListEffectiveDate) ? $this->PriceListEffectiveDate : '';
    }

    public function hasPriceListEffectiveDate()
    {
        return isset($this->PriceListEffectiveDate);
    }

    public function clearPriceListEffectiveDate()
    {
        unset($this->PriceListEffectiveDate);
    }

    /**
     * Generated from protobuf field <code>optional string PriceListEffectiveDate = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPriceListEffectiveDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->PriceListEffectiveDate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber ContractDocumentDateAndNumber = 2;</code>
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber|null
     */
    public function getContractDocumentDateAndNumber()
    {
        return $this->ContractDocumentDateAndNumber;
    }

    public function hasContractDocumentDateAndNumber()
    {
        return isset($this->ContractDocumentDateAndNumber);
    }

    public function clearContractDocumentDateAndNumber()
    {
        unset($this->ContractDocumentDateAndNumber);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber ContractDocumentDateAndNumber = 2;</code>
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $var
     * @return $this
     */
    public function setContractDocumentDateAndNumber($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber::class);
        $this->ContractDocumentDateAndNumber = $var;

        return $this;
    }

}
