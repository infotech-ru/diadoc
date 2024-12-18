<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/BilateralDocument.proto

namespace Diadoc\Api\Proto\Documents\BilateralDocument;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Documents.BilateralDocument.SupplementaryAgreementMetadata</code>
 */
class SupplementaryAgreementMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.BilateralDocument.BilateralDocumentStatus DocumentStatus = 1;</code>
     */
    protected $DocumentStatus = null;
    /**
     * Generated from protobuf field <code>optional string Total = 2;</code>
     */
    protected $Total = null;
    /**
     * Generated from protobuf field <code>optional string ContractType = 3;</code>
     */
    protected $ContractType = null;
    /**
     * Generated from protobuf field <code>string ContractNumber = 4;</code>
     */
    protected $ContractNumber = '';
    /**
     * Generated from protobuf field <code>string ContractDate = 5;</code>
     */
    protected $ContractDate = '';
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.ReceiptStatus ReceiptStatus = 6;</code>
     */
    protected $ReceiptStatus = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $DocumentStatus
     *     @type string $Total
     *     @type string $ContractType
     *     @type string $ContractNumber
     *     @type string $ContractDate
     *     @type int $ReceiptStatus
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Documents\BilateralDocument::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.BilateralDocument.BilateralDocumentStatus DocumentStatus = 1;</code>
     * @return int
     */
    public function getDocumentStatus()
    {
        return isset($this->DocumentStatus) ? $this->DocumentStatus : 0;
    }

    public function hasDocumentStatus()
    {
        return isset($this->DocumentStatus);
    }

    public function clearDocumentStatus()
    {
        unset($this->DocumentStatus);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.BilateralDocument.BilateralDocumentStatus DocumentStatus = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDocumentStatus($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus::class);
        $this->DocumentStatus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string Total = 2;</code>
     * @return string
     */
    public function getTotal()
    {
        return isset($this->Total) ? $this->Total : '';
    }

    public function hasTotal()
    {
        return isset($this->Total);
    }

    public function clearTotal()
    {
        unset($this->Total);
    }

    /**
     * Generated from protobuf field <code>optional string Total = 2;</code>
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
     * Generated from protobuf field <code>optional string ContractType = 3;</code>
     * @return string
     */
    public function getContractType()
    {
        return isset($this->ContractType) ? $this->ContractType : '';
    }

    public function hasContractType()
    {
        return isset($this->ContractType);
    }

    public function clearContractType()
    {
        unset($this->ContractType);
    }

    /**
     * Generated from protobuf field <code>optional string ContractType = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContractType($var)
    {
        GPBUtil::checkString($var, True);
        $this->ContractType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ContractNumber = 4;</code>
     * @return string
     */
    public function getContractNumber()
    {
        return $this->ContractNumber;
    }

    /**
     * Generated from protobuf field <code>string ContractNumber = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setContractNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->ContractNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ContractDate = 5;</code>
     * @return string
     */
    public function getContractDate()
    {
        return $this->ContractDate;
    }

    /**
     * Generated from protobuf field <code>string ContractDate = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setContractDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->ContractDate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.ReceiptStatus ReceiptStatus = 6;</code>
     * @return int
     */
    public function getReceiptStatus()
    {
        return isset($this->ReceiptStatus) ? $this->ReceiptStatus : 0;
    }

    public function hasReceiptStatus()
    {
        return isset($this->ReceiptStatus);
    }

    public function clearReceiptStatus()
    {
        unset($this->ReceiptStatus);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.ReceiptStatus ReceiptStatus = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setReceiptStatus($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Documents\ReceiptStatus::class);
        $this->ReceiptStatus = $var;

        return $this;
    }

}
