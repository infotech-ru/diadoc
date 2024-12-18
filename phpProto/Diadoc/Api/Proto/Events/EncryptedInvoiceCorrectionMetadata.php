<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Api\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Events.EncryptedInvoiceCorrectionMetadata</code>
 */
class EncryptedInvoiceCorrectionMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.DocumentDateAndNumber OriginalInvoiceDateAndNumber = 1;</code>
     */
    protected $OriginalInvoiceDateAndNumber = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber OriginalInvoiceRevisionDateAndNumber = 2;</code>
     */
    protected $OriginalInvoiceRevisionDateAndNumber = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber InvoiceCorrectionRevisionDateAndNumber = 3;</code>
     */
    protected $InvoiceCorrectionRevisionDateAndNumber = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $OriginalInvoiceDateAndNumber
     *     @type \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $OriginalInvoiceRevisionDateAndNumber
     *     @type \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $InvoiceCorrectionRevisionDateAndNumber
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.DocumentDateAndNumber OriginalInvoiceDateAndNumber = 1;</code>
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber|null
     */
    public function getOriginalInvoiceDateAndNumber()
    {
        return $this->OriginalInvoiceDateAndNumber;
    }

    public function hasOriginalInvoiceDateAndNumber()
    {
        return isset($this->OriginalInvoiceDateAndNumber);
    }

    public function clearOriginalInvoiceDateAndNumber()
    {
        unset($this->OriginalInvoiceDateAndNumber);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.DocumentDateAndNumber OriginalInvoiceDateAndNumber = 1;</code>
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $var
     * @return $this
     */
    public function setOriginalInvoiceDateAndNumber($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber::class);
        $this->OriginalInvoiceDateAndNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber OriginalInvoiceRevisionDateAndNumber = 2;</code>
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber|null
     */
    public function getOriginalInvoiceRevisionDateAndNumber()
    {
        return $this->OriginalInvoiceRevisionDateAndNumber;
    }

    public function hasOriginalInvoiceRevisionDateAndNumber()
    {
        return isset($this->OriginalInvoiceRevisionDateAndNumber);
    }

    public function clearOriginalInvoiceRevisionDateAndNumber()
    {
        unset($this->OriginalInvoiceRevisionDateAndNumber);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber OriginalInvoiceRevisionDateAndNumber = 2;</code>
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $var
     * @return $this
     */
    public function setOriginalInvoiceRevisionDateAndNumber($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber::class);
        $this->OriginalInvoiceRevisionDateAndNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber InvoiceCorrectionRevisionDateAndNumber = 3;</code>
     * @return \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber|null
     */
    public function getInvoiceCorrectionRevisionDateAndNumber()
    {
        return $this->InvoiceCorrectionRevisionDateAndNumber;
    }

    public function hasInvoiceCorrectionRevisionDateAndNumber()
    {
        return isset($this->InvoiceCorrectionRevisionDateAndNumber);
    }

    public function clearInvoiceCorrectionRevisionDateAndNumber()
    {
        unset($this->InvoiceCorrectionRevisionDateAndNumber);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDateAndNumber InvoiceCorrectionRevisionDateAndNumber = 3;</code>
     * @param \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $var
     * @return $this
     */
    public function setInvoiceCorrectionRevisionDateAndNumber($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\DocumentDateAndNumber::class);
        $this->InvoiceCorrectionRevisionDateAndNumber = $var;

        return $this;
    }

}
