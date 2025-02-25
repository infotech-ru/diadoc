<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/Document.proto

namespace Diadoc\Api\Proto\Documents;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Documents.RecipientReceiptMetadata</code>
 */
class RecipientReceiptMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Documents.GeneralReceiptStatus ReceiptStatus = 1;</code>
     */
    protected $ReceiptStatus = 0;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.ConfirmationMetadata ConfirmationMetadata = 2;</code>
     */
    protected $ConfirmationMetadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ReceiptStatus
     *     @type \Diadoc\Api\Proto\Documents\ConfirmationMetadata $ConfirmationMetadata
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Documents\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Documents.GeneralReceiptStatus ReceiptStatus = 1;</code>
     * @return int
     */
    public function getReceiptStatus()
    {
        return $this->ReceiptStatus;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Documents.GeneralReceiptStatus ReceiptStatus = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setReceiptStatus($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Documents\GeneralReceiptStatus::class);
        $this->ReceiptStatus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.ConfirmationMetadata ConfirmationMetadata = 2;</code>
     * @return \Diadoc\Api\Proto\Documents\ConfirmationMetadata|null
     */
    public function getConfirmationMetadata()
    {
        return $this->ConfirmationMetadata;
    }

    public function hasConfirmationMetadata()
    {
        return isset($this->ConfirmationMetadata);
    }

    public function clearConfirmationMetadata()
    {
        unset($this->ConfirmationMetadata);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.ConfirmationMetadata ConfirmationMetadata = 2;</code>
     * @param \Diadoc\Api\Proto\Documents\ConfirmationMetadata $var
     * @return $this
     */
    public function setConfirmationMetadata($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Documents\ConfirmationMetadata::class);
        $this->ConfirmationMetadata = $var;

        return $this;
    }

}

