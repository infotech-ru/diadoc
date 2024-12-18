<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/UniversalTransferDocument.proto

namespace Diadoc\Api\Proto\Documents\UniversalTransferDocument;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Documents.UniversalTransferDocument.UniversalTransferDocumentRevisionMetadata</code>
 */
class UniversalTransferDocumentRevisionMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Documents.UniversalTransferDocument.UniversalTransferDocumentStatus DocumentStatus = 1;</code>
     */
    protected $DocumentStatus = 0;
    /**
     * Generated from protobuf field <code>string Total = 2;</code>
     */
    protected $Total = '';
    /**
     * Generated from protobuf field <code>optional string Vat = 3;</code>
     */
    protected $Vat = null;
    /**
     * Generated from protobuf field <code>optional string Grounds = 4;</code>
     */
    protected $Grounds = null;
    /**
     * Generated from protobuf field <code>string DocumentFunction = 5;</code>
     */
    protected $DocumentFunction = '';
    /**
     * Generated from protobuf field <code>int32 Currency = 6;</code>
     */
    protected $Currency = 0;
    /**
     * Generated from protobuf field <code>optional sfixed64 ConfirmationDateTimeTicks = 7;</code>
     */
    protected $ConfirmationDateTimeTicks = null;
    /**
     * Generated from protobuf field <code>int32 InvoiceAmendmentFlags = 8;</code>
     */
    protected $InvoiceAmendmentFlags = 0;
    /**
     * Generated from protobuf field <code>string OriginalInvoiceNumber = 9;</code>
     */
    protected $OriginalInvoiceNumber = '';
    /**
     * Generated from protobuf field <code>string OriginalInvoiceDate = 10;</code>
     */
    protected $OriginalInvoiceDate = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $DocumentStatus
     *     @type string $Total
     *     @type string $Vat
     *     @type string $Grounds
     *     @type string $DocumentFunction
     *     @type int $Currency
     *     @type int|string $ConfirmationDateTimeTicks
     *     @type int $InvoiceAmendmentFlags
     *     @type string $OriginalInvoiceNumber
     *     @type string $OriginalInvoiceDate
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Documents\UniversalTransferDocument::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Documents.UniversalTransferDocument.UniversalTransferDocumentStatus DocumentStatus = 1;</code>
     * @return int
     */
    public function getDocumentStatus()
    {
        return $this->DocumentStatus;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Documents.UniversalTransferDocument.UniversalTransferDocumentStatus DocumentStatus = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDocumentStatus($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Documents\UniversalTransferDocument\UniversalTransferDocumentStatus::class);
        $this->DocumentStatus = $var;

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
     * Generated from protobuf field <code>optional string Vat = 3;</code>
     * @return string
     */
    public function getVat()
    {
        return isset($this->Vat) ? $this->Vat : '';
    }

    public function hasVat()
    {
        return isset($this->Vat);
    }

    public function clearVat()
    {
        unset($this->Vat);
    }

    /**
     * Generated from protobuf field <code>optional string Vat = 3;</code>
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
     * Generated from protobuf field <code>optional string Grounds = 4;</code>
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
     * Generated from protobuf field <code>optional string Grounds = 4;</code>
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
     * Generated from protobuf field <code>string DocumentFunction = 5;</code>
     * @return string
     */
    public function getDocumentFunction()
    {
        return $this->DocumentFunction;
    }

    /**
     * Generated from protobuf field <code>string DocumentFunction = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentFunction($var)
    {
        GPBUtil::checkString($var, True);
        $this->DocumentFunction = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Currency = 6;</code>
     * @return int
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Generated from protobuf field <code>int32 Currency = 6;</code>
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
     * Generated from protobuf field <code>optional sfixed64 ConfirmationDateTimeTicks = 7;</code>
     * @return int|string
     */
    public function getConfirmationDateTimeTicks()
    {
        return isset($this->ConfirmationDateTimeTicks) ? $this->ConfirmationDateTimeTicks : 0;
    }

    public function hasConfirmationDateTimeTicks()
    {
        return isset($this->ConfirmationDateTimeTicks);
    }

    public function clearConfirmationDateTimeTicks()
    {
        unset($this->ConfirmationDateTimeTicks);
    }

    /**
     * Generated from protobuf field <code>optional sfixed64 ConfirmationDateTimeTicks = 7;</code>
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
     * Generated from protobuf field <code>int32 InvoiceAmendmentFlags = 8;</code>
     * @return int
     */
    public function getInvoiceAmendmentFlags()
    {
        return $this->InvoiceAmendmentFlags;
    }

    /**
     * Generated from protobuf field <code>int32 InvoiceAmendmentFlags = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setInvoiceAmendmentFlags($var)
    {
        GPBUtil::checkInt32($var);
        $this->InvoiceAmendmentFlags = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string OriginalInvoiceNumber = 9;</code>
     * @return string
     */
    public function getOriginalInvoiceNumber()
    {
        return $this->OriginalInvoiceNumber;
    }

    /**
     * Generated from protobuf field <code>string OriginalInvoiceNumber = 9;</code>
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
     * Generated from protobuf field <code>string OriginalInvoiceDate = 10;</code>
     * @return string
     */
    public function getOriginalInvoiceDate()
    {
        return $this->OriginalInvoiceDate;
    }

    /**
     * Generated from protobuf field <code>string OriginalInvoiceDate = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setOriginalInvoiceDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->OriginalInvoiceDate = $var;

        return $this;
    }

}

