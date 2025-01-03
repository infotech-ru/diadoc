<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/InvoiceDocument.proto

namespace Diadoc\Api\Proto\Documents\InvoiceDocument;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Documents.InvoiceDocument.InvoiceCorrectionMetadata</code>
 */
class InvoiceCorrectionMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.InvoiceDocument.InvoiceStatus InvoiceCorrectionStatus = 1;</code>
     */
    protected $InvoiceCorrectionStatus = null;
    /**
     * Generated from protobuf field <code>string OriginalInvoiceNumber = 2;</code>
     */
    protected $OriginalInvoiceNumber = '';
    /**
     * Generated from protobuf field <code>string OriginalInvoiceDate = 3;</code>
     */
    protected $OriginalInvoiceDate = '';
    /**
     * Generated from protobuf field <code>optional string OriginalInvoiceRevisionNumber = 4;</code>
     */
    protected $OriginalInvoiceRevisionNumber = null;
    /**
     * Generated from protobuf field <code>optional string OriginalInvoiceRevisionDate = 5;</code>
     */
    protected $OriginalInvoiceRevisionDate = null;
    /**
     * Generated from protobuf field <code>string TotalInc = 6;</code>
     */
    protected $TotalInc = '';
    /**
     * Generated from protobuf field <code>string TotalDec = 7;</code>
     */
    protected $TotalDec = '';
    /**
     * Generated from protobuf field <code>string VatInc = 8;</code>
     */
    protected $VatInc = '';
    /**
     * Generated from protobuf field <code>string VatDec = 9;</code>
     */
    protected $VatDec = '';
    /**
     * Generated from protobuf field <code>int32 Currency = 10;</code>
     */
    protected $Currency = 0;
    /**
     * Generated from protobuf field <code>sfixed64 ConfirmationDateTimeTicks = 11;</code>
     */
    protected $ConfirmationDateTimeTicks = 0;
    /**
     * Generated from protobuf field <code>int32 InvoiceAmendmentFlags = 12;</code>
     */
    protected $InvoiceAmendmentFlags = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $InvoiceCorrectionStatus
     *     @type string $OriginalInvoiceNumber
     *     @type string $OriginalInvoiceDate
     *     @type string $OriginalInvoiceRevisionNumber
     *     @type string $OriginalInvoiceRevisionDate
     *     @type string $TotalInc
     *     @type string $TotalDec
     *     @type string $VatInc
     *     @type string $VatDec
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.InvoiceDocument.InvoiceStatus InvoiceCorrectionStatus = 1;</code>
     * @return int
     */
    public function getInvoiceCorrectionStatus()
    {
        return isset($this->InvoiceCorrectionStatus) ? $this->InvoiceCorrectionStatus : 0;
    }

    public function hasInvoiceCorrectionStatus()
    {
        return isset($this->InvoiceCorrectionStatus);
    }

    public function clearInvoiceCorrectionStatus()
    {
        unset($this->InvoiceCorrectionStatus);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.InvoiceDocument.InvoiceStatus InvoiceCorrectionStatus = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setInvoiceCorrectionStatus($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Documents\InvoiceDocument\InvoiceStatus::class);
        $this->InvoiceCorrectionStatus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string OriginalInvoiceNumber = 2;</code>
     * @return string
     */
    public function getOriginalInvoiceNumber()
    {
        return $this->OriginalInvoiceNumber;
    }

    /**
     * Generated from protobuf field <code>string OriginalInvoiceNumber = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOriginalInvoiceNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->OriginalInvoiceNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string OriginalInvoiceDate = 3;</code>
     * @return string
     */
    public function getOriginalInvoiceDate()
    {
        return $this->OriginalInvoiceDate;
    }

    /**
     * Generated from protobuf field <code>string OriginalInvoiceDate = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOriginalInvoiceDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->OriginalInvoiceDate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string OriginalInvoiceRevisionNumber = 4;</code>
     * @return string
     */
    public function getOriginalInvoiceRevisionNumber()
    {
        return isset($this->OriginalInvoiceRevisionNumber) ? $this->OriginalInvoiceRevisionNumber : '';
    }

    public function hasOriginalInvoiceRevisionNumber()
    {
        return isset($this->OriginalInvoiceRevisionNumber);
    }

    public function clearOriginalInvoiceRevisionNumber()
    {
        unset($this->OriginalInvoiceRevisionNumber);
    }

    /**
     * Generated from protobuf field <code>optional string OriginalInvoiceRevisionNumber = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOriginalInvoiceRevisionNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->OriginalInvoiceRevisionNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string OriginalInvoiceRevisionDate = 5;</code>
     * @return string
     */
    public function getOriginalInvoiceRevisionDate()
    {
        return isset($this->OriginalInvoiceRevisionDate) ? $this->OriginalInvoiceRevisionDate : '';
    }

    public function hasOriginalInvoiceRevisionDate()
    {
        return isset($this->OriginalInvoiceRevisionDate);
    }

    public function clearOriginalInvoiceRevisionDate()
    {
        unset($this->OriginalInvoiceRevisionDate);
    }

    /**
     * Generated from protobuf field <code>optional string OriginalInvoiceRevisionDate = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOriginalInvoiceRevisionDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->OriginalInvoiceRevisionDate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TotalInc = 6;</code>
     * @return string
     */
    public function getTotalInc()
    {
        return $this->TotalInc;
    }

    /**
     * Generated from protobuf field <code>string TotalInc = 6;</code>
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
     * Generated from protobuf field <code>string TotalDec = 7;</code>
     * @return string
     */
    public function getTotalDec()
    {
        return $this->TotalDec;
    }

    /**
     * Generated from protobuf field <code>string TotalDec = 7;</code>
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
     * Generated from protobuf field <code>string VatInc = 8;</code>
     * @return string
     */
    public function getVatInc()
    {
        return $this->VatInc;
    }

    /**
     * Generated from protobuf field <code>string VatInc = 8;</code>
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
     * Generated from protobuf field <code>string VatDec = 9;</code>
     * @return string
     */
    public function getVatDec()
    {
        return $this->VatDec;
    }

    /**
     * Generated from protobuf field <code>string VatDec = 9;</code>
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
     * Generated from protobuf field <code>int32 Currency = 10;</code>
     * @return int
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Generated from protobuf field <code>int32 Currency = 10;</code>
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
     * Generated from protobuf field <code>sfixed64 ConfirmationDateTimeTicks = 11;</code>
     * @return int|string
     */
    public function getConfirmationDateTimeTicks()
    {
        return $this->ConfirmationDateTimeTicks;
    }

    /**
     * Generated from protobuf field <code>sfixed64 ConfirmationDateTimeTicks = 11;</code>
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
     * Generated from protobuf field <code>int32 InvoiceAmendmentFlags = 12;</code>
     * @return int
     */
    public function getInvoiceAmendmentFlags()
    {
        return $this->InvoiceAmendmentFlags;
    }

    /**
     * Generated from protobuf field <code>int32 InvoiceAmendmentFlags = 12;</code>
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

