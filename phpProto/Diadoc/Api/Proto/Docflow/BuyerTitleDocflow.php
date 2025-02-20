<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/XmlBilateralDocflow.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.BuyerTitleDocflow</code>
 */
class BuyerTitleDocflow extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional bool IsFinished = 1;</code>
     */
    protected $IsFinished = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.SignedAttachment BuyerTitleAttachment = 2;</code>
     */
    protected $BuyerTitleAttachment = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp SendTimestamp = 3;</code>
     */
    protected $SendTimestamp = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp DeliveryTimestamp = 4;</code>
     */
    protected $DeliveryTimestamp = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $IsFinished
     *     @type \Diadoc\Api\Proto\Docflow\SignedAttachment $BuyerTitleAttachment
     *     @type \Diadoc\Api\Proto\Timestamp $SendTimestamp
     *     @type \Diadoc\Api\Proto\Timestamp $DeliveryTimestamp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\XmlBilateralDocflow::initOnce();
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.SignedAttachment BuyerTitleAttachment = 2;</code>
     * @return \Diadoc\Api\Proto\Docflow\SignedAttachment|null
     */
    public function getBuyerTitleAttachment()
    {
        return $this->BuyerTitleAttachment;
    }

    public function hasBuyerTitleAttachment()
    {
        return isset($this->BuyerTitleAttachment);
    }

    public function clearBuyerTitleAttachment()
    {
        unset($this->BuyerTitleAttachment);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.SignedAttachment BuyerTitleAttachment = 2;</code>
     * @param \Diadoc\Api\Proto\Docflow\SignedAttachment $var
     * @return $this
     */
    public function setBuyerTitleAttachment($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\SignedAttachment::class);
        $this->BuyerTitleAttachment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp SendTimestamp = 3;</code>
     * @return \Diadoc\Api\Proto\Timestamp|null
     */
    public function getSendTimestamp()
    {
        return $this->SendTimestamp;
    }

    public function hasSendTimestamp()
    {
        return isset($this->SendTimestamp);
    }

    public function clearSendTimestamp()
    {
        unset($this->SendTimestamp);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp SendTimestamp = 3;</code>
     * @param \Diadoc\Api\Proto\Timestamp $var
     * @return $this
     */
    public function setSendTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Timestamp::class);
        $this->SendTimestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp DeliveryTimestamp = 4;</code>
     * @return \Diadoc\Api\Proto\Timestamp|null
     */
    public function getDeliveryTimestamp()
    {
        return $this->DeliveryTimestamp;
    }

    public function hasDeliveryTimestamp()
    {
        return isset($this->DeliveryTimestamp);
    }

    public function clearDeliveryTimestamp()
    {
        unset($this->DeliveryTimestamp);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp DeliveryTimestamp = 4;</code>
     * @param \Diadoc\Api\Proto\Timestamp $var
     * @return $this
     */
    public function setDeliveryTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Timestamp::class);
        $this->DeliveryTimestamp = $var;

        return $this;
    }

}

