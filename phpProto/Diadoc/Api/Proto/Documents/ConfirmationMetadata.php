<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/Document.proto

namespace Diadoc\Api\Proto\Documents;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Documents.ConfirmationMetadata</code>
 */
class ConfirmationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Documents.GeneralReceiptStatus ReceiptStatus = 1;</code>
     */
    protected $ReceiptStatus = 0;
    /**
     * Generated from protobuf field <code>sfixed64 DateTimeTicks = 2;</code>
     */
    protected $DateTimeTicks = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ReceiptStatus
     *     @type int|string $DateTimeTicks
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
     * Generated from protobuf field <code>sfixed64 DateTimeTicks = 2;</code>
     * @return int|string
     */
    public function getDateTimeTicks()
    {
        return $this->DateTimeTicks;
    }

    /**
     * Generated from protobuf field <code>sfixed64 DateTimeTicks = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDateTimeTicks($var)
    {
        GPBUtil::checkInt64($var);
        $this->DateTimeTicks = $var;

        return $this;
    }

}

