<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/BilateralDocflow.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.BilateralDocflow</code>
 */
class BilateralDocflow extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.RecipientSignatureDocflow RecipientSignatureDocflow = 3;</code>
     */
    protected $RecipientSignatureDocflow = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.RecipientSignatureRejectionDocflow RecipientSignatureRejectionDocflow = 4;</code>
     */
    protected $RecipientSignatureRejectionDocflow = null;
    /**
     * Generated from protobuf field <code>optional bool IsReceiptRequested = 5;</code>
     */
    protected $IsReceiptRequested = null;
    /**
     * Generated from protobuf field <code>optional bool IsRecipientSignatureRequested = 6;</code>
     */
    protected $IsRecipientSignatureRequested = null;
    /**
     * Generated from protobuf field <code>optional bool IsDocumentSignedByRecipient = 7;</code>
     */
    protected $IsDocumentSignedByRecipient = null;
    /**
     * Generated from protobuf field <code>optional bool IsDocumentRejectedByRecipient = 8;</code>
     */
    protected $IsDocumentRejectedByRecipient = null;
    /**
     * Generated from protobuf field <code>optional bool CanDocumentBeReceipted = 9;</code>
     */
    protected $CanDocumentBeReceipted = null;
    /**
     * Generated from protobuf field <code>optional bool CanDocumentBeSignedBySender = 10;</code>
     */
    protected $CanDocumentBeSignedBySender = null;
    /**
     * Generated from protobuf field <code>optional bool CanDocumentBeSignedOrRejectedByRecipient = 11;</code>
     */
    protected $CanDocumentBeSignedOrRejectedByRecipient = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $IsFinished
     *     @type \Diadoc\Api\Proto\Docflow\ReceiptDocflow $ReceiptDocflow
     *     @type \Diadoc\Api\Proto\Docflow\RecipientSignatureDocflow $RecipientSignatureDocflow
     *     @type \Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow $RecipientSignatureRejectionDocflow
     *     @type bool $IsReceiptRequested
     *     @type bool $IsRecipientSignatureRequested
     *     @type bool $IsDocumentSignedByRecipient
     *     @type bool $IsDocumentRejectedByRecipient
     *     @type bool $CanDocumentBeReceipted
     *     @type bool $CanDocumentBeSignedBySender
     *     @type bool $CanDocumentBeSignedOrRejectedByRecipient
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\BilateralDocflow::initOnce();
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.RecipientSignatureDocflow RecipientSignatureDocflow = 3;</code>
     * @return \Diadoc\Api\Proto\Docflow\RecipientSignatureDocflow|null
     */
    public function getRecipientSignatureDocflow()
    {
        return $this->RecipientSignatureDocflow;
    }

    public function hasRecipientSignatureDocflow()
    {
        return isset($this->RecipientSignatureDocflow);
    }

    public function clearRecipientSignatureDocflow()
    {
        unset($this->RecipientSignatureDocflow);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.RecipientSignatureDocflow RecipientSignatureDocflow = 3;</code>
     * @param \Diadoc\Api\Proto\Docflow\RecipientSignatureDocflow $var
     * @return $this
     */
    public function setRecipientSignatureDocflow($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\RecipientSignatureDocflow::class);
        $this->RecipientSignatureDocflow = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.RecipientSignatureRejectionDocflow RecipientSignatureRejectionDocflow = 4;</code>
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.RecipientSignatureRejectionDocflow RecipientSignatureRejectionDocflow = 4;</code>
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
     * Generated from protobuf field <code>optional bool IsReceiptRequested = 5;</code>
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
     * Generated from protobuf field <code>optional bool IsReceiptRequested = 5;</code>
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
     * Generated from protobuf field <code>optional bool IsRecipientSignatureRequested = 6;</code>
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
     * Generated from protobuf field <code>optional bool IsRecipientSignatureRequested = 6;</code>
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
     * Generated from protobuf field <code>optional bool IsDocumentSignedByRecipient = 7;</code>
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
     * Generated from protobuf field <code>optional bool IsDocumentSignedByRecipient = 7;</code>
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
     * Generated from protobuf field <code>optional bool IsDocumentRejectedByRecipient = 8;</code>
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
     * Generated from protobuf field <code>optional bool IsDocumentRejectedByRecipient = 8;</code>
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
     * Generated from protobuf field <code>optional bool CanDocumentBeReceipted = 9;</code>
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
     * Generated from protobuf field <code>optional bool CanDocumentBeReceipted = 9;</code>
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
     * Generated from protobuf field <code>optional bool CanDocumentBeSignedBySender = 10;</code>
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
     * Generated from protobuf field <code>optional bool CanDocumentBeSignedBySender = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanDocumentBeSignedBySender($var)
    {
        GPBUtil::checkBool($var);
        $this->CanDocumentBeSignedBySender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool CanDocumentBeSignedOrRejectedByRecipient = 11;</code>
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
     * Generated from protobuf field <code>optional bool CanDocumentBeSignedOrRejectedByRecipient = 11;</code>
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

