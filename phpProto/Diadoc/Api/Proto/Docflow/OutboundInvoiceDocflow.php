<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/InvoiceDocflow.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.OutboundInvoiceDocflow</code>
 */
class OutboundInvoiceDocflow extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional bool IsFinished = 1;</code>
     */
    protected $IsFinished = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.ReceiptDocflow ReceiptDocflow = 2;</code>
     */
    protected $ReceiptDocflow = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.InvoiceConfirmationDocflow ConfirmationDocflow = 3;</code>
     */
    protected $ConfirmationDocflow = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.InvoiceCorrectionRequestDocflow CorrectionRequestDocflow = 4;</code>
     */
    protected $CorrectionRequestDocflow = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp ConfirmationTimestamp = 5;</code>
     */
    protected $ConfirmationTimestamp = null;
    /**
     * Generated from protobuf field <code>optional bool IsAmendmentRequested = 6;</code>
     */
    protected $IsAmendmentRequested = null;
    /**
     * Generated from protobuf field <code>optional bool IsRevised = 7;</code>
     */
    protected $IsRevised = null;
    /**
     * Generated from protobuf field <code>optional bool IsCorrected = 8;</code>
     */
    protected $IsCorrected = null;
    /**
     * Generated from protobuf field <code>optional bool CanDocumentBeSignedBySender = 9;</code>
     */
    protected $CanDocumentBeSignedBySender = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $IsFinished
     *     @type \Diadoc\Api\Proto\Docflow\ReceiptDocflow $ReceiptDocflow
     *     @type \Diadoc\Api\Proto\Docflow\InvoiceConfirmationDocflow $ConfirmationDocflow
     *     @type \Diadoc\Api\Proto\Docflow\InvoiceCorrectionRequestDocflow $CorrectionRequestDocflow
     *     @type \Diadoc\Api\Proto\Timestamp $ConfirmationTimestamp
     *     @type bool $IsAmendmentRequested
     *     @type bool $IsRevised
     *     @type bool $IsCorrected
     *     @type bool $CanDocumentBeSignedBySender
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\InvoiceDocflow::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional bool IsFinished = 1;</code>
     * @return bool
     */
    public function getIsFinished()
    {
        return isset($this->IsFinished) ? $this->IsFinished : false;
    }

    public function hasIsFinished()
    {
        return isset($this->IsFinished);
    }

    public function clearIsFinished()
    {
        unset($this->IsFinished);
    }

    /**
     * Generated from protobuf field <code>optional bool IsFinished = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFinished($var)
    {
        GPBUtil::checkBool($var);
        $this->IsFinished = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.ReceiptDocflow ReceiptDocflow = 2;</code>
     * @return \Diadoc\Api\Proto\Docflow\ReceiptDocflow|null
     */
    public function getReceiptDocflow()
    {
        return $this->ReceiptDocflow;
    }

    public function hasReceiptDocflow()
    {
        return isset($this->ReceiptDocflow);
    }

    public function clearReceiptDocflow()
    {
        unset($this->ReceiptDocflow);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.ReceiptDocflow ReceiptDocflow = 2;</code>
     * @param \Diadoc\Api\Proto\Docflow\ReceiptDocflow $var
     * @return $this
     */
    public function setReceiptDocflow($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\ReceiptDocflow::class);
        $this->ReceiptDocflow = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.InvoiceConfirmationDocflow ConfirmationDocflow = 3;</code>
     * @return \Diadoc\Api\Proto\Docflow\InvoiceConfirmationDocflow|null
     */
    public function getConfirmationDocflow()
    {
        return $this->ConfirmationDocflow;
    }

    public function hasConfirmationDocflow()
    {
        return isset($this->ConfirmationDocflow);
    }

    public function clearConfirmationDocflow()
    {
        unset($this->ConfirmationDocflow);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.InvoiceConfirmationDocflow ConfirmationDocflow = 3;</code>
     * @param \Diadoc\Api\Proto\Docflow\InvoiceConfirmationDocflow $var
     * @return $this
     */
    public function setConfirmationDocflow($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\InvoiceConfirmationDocflow::class);
        $this->ConfirmationDocflow = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.InvoiceCorrectionRequestDocflow CorrectionRequestDocflow = 4;</code>
     * @return \Diadoc\Api\Proto\Docflow\InvoiceCorrectionRequestDocflow|null
     */
    public function getCorrectionRequestDocflow()
    {
        return $this->CorrectionRequestDocflow;
    }

    public function hasCorrectionRequestDocflow()
    {
        return isset($this->CorrectionRequestDocflow);
    }

    public function clearCorrectionRequestDocflow()
    {
        unset($this->CorrectionRequestDocflow);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.InvoiceCorrectionRequestDocflow CorrectionRequestDocflow = 4;</code>
     * @param \Diadoc\Api\Proto\Docflow\InvoiceCorrectionRequestDocflow $var
     * @return $this
     */
    public function setCorrectionRequestDocflow($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\InvoiceCorrectionRequestDocflow::class);
        $this->CorrectionRequestDocflow = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp ConfirmationTimestamp = 5;</code>
     * @return \Diadoc\Api\Proto\Timestamp|null
     */
    public function getConfirmationTimestamp()
    {
        return $this->ConfirmationTimestamp;
    }

    public function hasConfirmationTimestamp()
    {
        return isset($this->ConfirmationTimestamp);
    }

    public function clearConfirmationTimestamp()
    {
        unset($this->ConfirmationTimestamp);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp ConfirmationTimestamp = 5;</code>
     * @param \Diadoc\Api\Proto\Timestamp $var
     * @return $this
     */
    public function setConfirmationTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Timestamp::class);
        $this->ConfirmationTimestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool IsAmendmentRequested = 6;</code>
     * @return bool
     */
    public function getIsAmendmentRequested()
    {
        return isset($this->IsAmendmentRequested) ? $this->IsAmendmentRequested : false;
    }

    public function hasIsAmendmentRequested()
    {
        return isset($this->IsAmendmentRequested);
    }

    public function clearIsAmendmentRequested()
    {
        unset($this->IsAmendmentRequested);
    }

    /**
     * Generated from protobuf field <code>optional bool IsAmendmentRequested = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsAmendmentRequested($var)
    {
        GPBUtil::checkBool($var);
        $this->IsAmendmentRequested = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool IsRevised = 7;</code>
     * @return bool
     */
    public function getIsRevised()
    {
        return isset($this->IsRevised) ? $this->IsRevised : false;
    }

    public function hasIsRevised()
    {
        return isset($this->IsRevised);
    }

    public function clearIsRevised()
    {
        unset($this->IsRevised);
    }

    /**
     * Generated from protobuf field <code>optional bool IsRevised = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsRevised($var)
    {
        GPBUtil::checkBool($var);
        $this->IsRevised = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool IsCorrected = 8;</code>
     * @return bool
     */
    public function getIsCorrected()
    {
        return isset($this->IsCorrected) ? $this->IsCorrected : false;
    }

    public function hasIsCorrected()
    {
        return isset($this->IsCorrected);
    }

    public function clearIsCorrected()
    {
        unset($this->IsCorrected);
    }

    /**
     * Generated from protobuf field <code>optional bool IsCorrected = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsCorrected($var)
    {
        GPBUtil::checkBool($var);
        $this->IsCorrected = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool CanDocumentBeSignedBySender = 9;</code>
     * @return bool
     */
    public function getCanDocumentBeSignedBySender()
    {
        return isset($this->CanDocumentBeSignedBySender) ? $this->CanDocumentBeSignedBySender : false;
    }

    public function hasCanDocumentBeSignedBySender()
    {
        return isset($this->CanDocumentBeSignedBySender);
    }

    public function clearCanDocumentBeSignedBySender()
    {
        unset($this->CanDocumentBeSignedBySender);
    }

    /**
     * Generated from protobuf field <code>optional bool CanDocumentBeSignedBySender = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanDocumentBeSignedBySender($var)
    {
        GPBUtil::checkBool($var);
        $this->CanDocumentBeSignedBySender = $var;

        return $this;
    }

}

