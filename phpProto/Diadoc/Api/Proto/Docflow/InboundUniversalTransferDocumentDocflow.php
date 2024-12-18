<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/UniversalTransferDocumentDocflow.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.InboundUniversalTransferDocumentDocflow</code>
 */
class InboundUniversalTransferDocumentDocflow extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional bool IsFinished = 1;</code>
     */
    protected $IsFinished = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.InboundInvoiceReceiptDocflow ReceiptDocflow = 2;</code>
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.BuyerTitleDocflow BuyerTitleDocflow = 9;</code>
     */
    protected $BuyerTitleDocflow = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.RecipientSignatureRejectionDocflow RecipientSignatureRejectionDocflow = 10;</code>
     */
    protected $RecipientSignatureRejectionDocflow = null;
    /**
     * Generated from protobuf field <code>optional bool IsReceiptRequested = 11;</code>
     */
    protected $IsReceiptRequested = null;
    /**
     * Generated from protobuf field <code>optional bool IsRecipientSignatureRequested = 12;</code>
     */
    protected $IsRecipientSignatureRequested = null;
    /**
     * Generated from protobuf field <code>optional bool IsDocumentSignedByRecipient = 13;</code>
     */
    protected $IsDocumentSignedByRecipient = null;
    /**
     * Generated from protobuf field <code>optional bool IsDocumentRejectedByRecipient = 14;</code>
     */
    protected $IsDocumentRejectedByRecipient = null;
    /**
     * Generated from protobuf field <code>optional bool CanDocumentBeReceipted = 15;</code>
     */
    protected $CanDocumentBeReceipted = null;
    /**
     * Generated from protobuf field <code>optional bool CanDocumentBeSignedOrRejectedByRecipient = 16;</code>
     */
    protected $CanDocumentBeSignedOrRejectedByRecipient = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $IsFinished
     *     @type \Diadoc\Api\Proto\Docflow\InboundInvoiceReceiptDocflow $ReceiptDocflow
     *     @type \Diadoc\Api\Proto\Docflow\InvoiceConfirmationDocflow $ConfirmationDocflow
     *     @type \Diadoc\Api\Proto\Docflow\InvoiceCorrectionRequestDocflow $CorrectionRequestDocflow
     *     @type \Diadoc\Api\Proto\Timestamp $ConfirmationTimestamp
     *     @type bool $IsAmendmentRequested
     *     @type bool $IsRevised
     *     @type bool $IsCorrected
     *     @type \Diadoc\Api\Proto\Docflow\BuyerTitleDocflow $BuyerTitleDocflow
     *     @type \Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow $RecipientSignatureRejectionDocflow
     *     @type bool $IsReceiptRequested
     *     @type bool $IsRecipientSignatureRequested
     *     @type bool $IsDocumentSignedByRecipient
     *     @type bool $IsDocumentRejectedByRecipient
     *     @type bool $CanDocumentBeReceipted
     *     @type bool $CanDocumentBeSignedOrRejectedByRecipient
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\UniversalTransferDocumentDocflow::initOnce();
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.InboundInvoiceReceiptDocflow ReceiptDocflow = 2;</code>
     * @return \Diadoc\Api\Proto\Docflow\InboundInvoiceReceiptDocflow|null
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.InboundInvoiceReceiptDocflow ReceiptDocflow = 2;</code>
     * @param \Diadoc\Api\Proto\Docflow\InboundInvoiceReceiptDocflow $var
     * @return $this
     */
    public function setReceiptDocflow($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\InboundInvoiceReceiptDocflow::class);
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.BuyerTitleDocflow BuyerTitleDocflow = 9;</code>
     * @return \Diadoc\Api\Proto\Docflow\BuyerTitleDocflow|null
     */
    public function getBuyerTitleDocflow()
    {
        return $this->BuyerTitleDocflow;
    }

    public function hasBuyerTitleDocflow()
    {
        return isset($this->BuyerTitleDocflow);
    }

    public function clearBuyerTitleDocflow()
    {
        unset($this->BuyerTitleDocflow);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.BuyerTitleDocflow BuyerTitleDocflow = 9;</code>
     * @param \Diadoc\Api\Proto\Docflow\BuyerTitleDocflow $var
     * @return $this
     */
    public function setBuyerTitleDocflow($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\BuyerTitleDocflow::class);
        $this->BuyerTitleDocflow = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.RecipientSignatureRejectionDocflow RecipientSignatureRejectionDocflow = 10;</code>
     * @return \Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow|null
     */
    public function getRecipientSignatureRejectionDocflow()
    {
        return $this->RecipientSignatureRejectionDocflow;
    }

    public function hasRecipientSignatureRejectionDocflow()
    {
        return isset($this->RecipientSignatureRejectionDocflow);
    }

    public function clearRecipientSignatureRejectionDocflow()
    {
        unset($this->RecipientSignatureRejectionDocflow);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.RecipientSignatureRejectionDocflow RecipientSignatureRejectionDocflow = 10;</code>
     * @param \Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow $var
     * @return $this
     */
    public function setRecipientSignatureRejectionDocflow($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow::class);
        $this->RecipientSignatureRejectionDocflow = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool IsReceiptRequested = 11;</code>
     * @return bool
     */
    public function getIsReceiptRequested()
    {
        return isset($this->IsReceiptRequested) ? $this->IsReceiptRequested : false;
    }

    public function hasIsReceiptRequested()
    {
        return isset($this->IsReceiptRequested);
    }

    public function clearIsReceiptRequested()
    {
        unset($this->IsReceiptRequested);
    }

    /**
     * Generated from protobuf field <code>optional bool IsReceiptRequested = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsReceiptRequested($var)
    {
        GPBUtil::checkBool($var);
        $this->IsReceiptRequested = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool IsRecipientSignatureRequested = 12;</code>
     * @return bool
     */
    public function getIsRecipientSignatureRequested()
    {
        return isset($this->IsRecipientSignatureRequested) ? $this->IsRecipientSignatureRequested : false;
    }

    public function hasIsRecipientSignatureRequested()
    {
        return isset($this->IsRecipientSignatureRequested);
    }

    public function clearIsRecipientSignatureRequested()
    {
        unset($this->IsRecipientSignatureRequested);
    }

    /**
     * Generated from protobuf field <code>optional bool IsRecipientSignatureRequested = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsRecipientSignatureRequested($var)
    {
        GPBUtil::checkBool($var);
        $this->IsRecipientSignatureRequested = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool IsDocumentSignedByRecipient = 13;</code>
     * @return bool
     */
    public function getIsDocumentSignedByRecipient()
    {
        return isset($this->IsDocumentSignedByRecipient) ? $this->IsDocumentSignedByRecipient : false;
    }

    public function hasIsDocumentSignedByRecipient()
    {
        return isset($this->IsDocumentSignedByRecipient);
    }

    public function clearIsDocumentSignedByRecipient()
    {
        unset($this->IsDocumentSignedByRecipient);
    }

    /**
     * Generated from protobuf field <code>optional bool IsDocumentSignedByRecipient = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsDocumentSignedByRecipient($var)
    {
        GPBUtil::checkBool($var);
        $this->IsDocumentSignedByRecipient = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool IsDocumentRejectedByRecipient = 14;</code>
     * @return bool
     */
    public function getIsDocumentRejectedByRecipient()
    {
        return isset($this->IsDocumentRejectedByRecipient) ? $this->IsDocumentRejectedByRecipient : false;
    }

    public function hasIsDocumentRejectedByRecipient()
    {
        return isset($this->IsDocumentRejectedByRecipient);
    }

    public function clearIsDocumentRejectedByRecipient()
    {
        unset($this->IsDocumentRejectedByRecipient);
    }

    /**
     * Generated from protobuf field <code>optional bool IsDocumentRejectedByRecipient = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsDocumentRejectedByRecipient($var)
    {
        GPBUtil::checkBool($var);
        $this->IsDocumentRejectedByRecipient = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool CanDocumentBeReceipted = 15;</code>
     * @return bool
     */
    public function getCanDocumentBeReceipted()
    {
        return isset($this->CanDocumentBeReceipted) ? $this->CanDocumentBeReceipted : false;
    }

    public function hasCanDocumentBeReceipted()
    {
        return isset($this->CanDocumentBeReceipted);
    }

    public function clearCanDocumentBeReceipted()
    {
        unset($this->CanDocumentBeReceipted);
    }

    /**
     * Generated from protobuf field <code>optional bool CanDocumentBeReceipted = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanDocumentBeReceipted($var)
    {
        GPBUtil::checkBool($var);
        $this->CanDocumentBeReceipted = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool CanDocumentBeSignedOrRejectedByRecipient = 16;</code>
     * @return bool
     */
    public function getCanDocumentBeSignedOrRejectedByRecipient()
    {
        return isset($this->CanDocumentBeSignedOrRejectedByRecipient) ? $this->CanDocumentBeSignedOrRejectedByRecipient : false;
    }

    public function hasCanDocumentBeSignedOrRejectedByRecipient()
    {
        return isset($this->CanDocumentBeSignedOrRejectedByRecipient);
    }

    public function clearCanDocumentBeSignedOrRejectedByRecipient()
    {
        unset($this->CanDocumentBeSignedOrRejectedByRecipient);
    }

    /**
     * Generated from protobuf field <code>optional bool CanDocumentBeSignedOrRejectedByRecipient = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanDocumentBeSignedOrRejectedByRecipient($var)
    {
        GPBUtil::checkBool($var);
        $this->CanDocumentBeSignedOrRejectedByRecipient = $var;

        return $this;
    }

}

