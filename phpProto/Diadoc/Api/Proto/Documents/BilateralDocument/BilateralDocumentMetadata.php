<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/BilateralDocument.proto

namespace Diadoc\Api\Proto\Documents\BilateralDocument;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Documents.BilateralDocument.BilateralDocumentMetadata</code>
 */
class BilateralDocumentMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.BilateralDocument.BilateralDocumentStatus DocumentStatus = 1;</code>
     */
    protected $DocumentStatus = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.ReceiptStatus ReceiptStatus = 2;</code>
     */
    protected $ReceiptStatus = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $DocumentStatus
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.ReceiptStatus ReceiptStatus = 2;</code>
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.ReceiptStatus ReceiptStatus = 2;</code>
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

