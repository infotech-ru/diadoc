<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/InvoiceDocument.proto

namespace Diadoc\Api\Proto\Documents\InvoiceDocument;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Documents.InvoiceDocument.InvoiceMetadata</code>
 */
class InvoiceMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.InvoiceDocument.InvoiceStatus InvoiceStatus = 1;</code>
     */
    protected $InvoiceStatus = null;
    /**
     * Generated from protobuf field <code>string Total = 2;</code>
     */
    protected $Total = '';
    /**
     * Generated from protobuf field <code>string Vat = 3;</code>
     */
    protected $Vat = '';
    /**
     * Generated from protobuf field <code>int32 Currency = 4;</code>
     */
    protected $Currency = 0;
    /**
     * Generated from protobuf field <code>sfixed64 ConfirmationDateTimeTicks = 5;</code>
     */
    protected $ConfirmationDateTimeTicks = 0;
    /**
     * Generated from protobuf field <code>int32 InvoiceAmendmentFlags = 6;</code>
     */
    protected $InvoiceAmendmentFlags = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $InvoiceStatus
     *     @type string $Total
     *     @type string $Vat
     *     @type int $Currency
     *     @type int|string $ConfirmationDateTimeTicks
     *     @type int $InvoiceAmendmentFlags
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Documents\InvoiceDocument::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.InvoiceDocument.InvoiceStatus InvoiceStatus = 1;</code>
     * @return int
     */
    public function getInvoiceStatus()
    {
        return isset($this->InvoiceStatus) ? $this->InvoiceStatus : 0;
    }

    public function hasInvoiceStatus()
    {
        return isset($this->InvoiceStatus);
    }

    public function clearInvoiceStatus()
    {
        unset($this->InvoiceStatus);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.InvoiceDocument.InvoiceStatus InvoiceStatus = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setInvoiceStatus($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceStatus::class);
        $this->InvoiceStatus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Total = 2;</code>
     * @return string
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * Generated from protobuf field <code>string Total = 2;</code>
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
     * Generated from protobuf field <code>string Vat = 3;</code>
     * @return string
     */
    public function getVat()
    {
        return $this->Vat;
    }

    /**
     * Generated from protobuf field <code>string Vat = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setVat($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vat = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Currency = 4;</code>
     * @return int
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Generated from protobuf field <code>int32 Currency = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkInt32($var);
        $this->Currency = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>sfixed64 ConfirmationDateTimeTicks = 5;</code>
     * @return int|string
     */
    public function getConfirmationDateTimeTicks()
    {
        return $this->ConfirmationDateTimeTicks;
    }

    /**
     * Generated from protobuf field <code>sfixed64 ConfirmationDateTimeTicks = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setConfirmationDateTimeTicks($var)
    {
        GPBUtil::checkInt64($var);
        $this->ConfirmationDateTimeTicks = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 InvoiceAmendmentFlags = 6;</code>
     * @return int
     */
    public function getInvoiceAmendmentFlags()
    {
        return $this->InvoiceAmendmentFlags;
    }

    /**
     * Generated from protobuf field <code>int32 InvoiceAmendmentFlags = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setInvoiceAmendmentFlags($var)
    {
        GPBUtil::checkInt32($var);
        $this->InvoiceAmendmentFlags = $var;

        return $this;
    }

}

