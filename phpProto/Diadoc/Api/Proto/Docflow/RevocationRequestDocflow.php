<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocflowV3.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.RevocationRequestDocflow</code>
 */
class RevocationRequestDocflow extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.SignedAttachmentV3 RevocationRequest = 1;</code>
     */
    protected $RevocationRequest = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp SentAt = 2;</code>
     */
    protected $SentAt = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp DeliveredAt = 3;</code>
     */
    protected $DeliveredAt = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.RoamingNotification RoamingNotification = 4;</code>
     */
    protected $RoamingNotification = null;
    /**
     * Generated from protobuf field <code>optional string PlainText = 5;</code>
     */
    protected $PlainText = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\Docflow\SignedAttachmentV3 $RevocationRequest
     *     @type \Diadoc\Api\Proto\Timestamp $SentAt
     *     @type \Diadoc\Api\Proto\Timestamp $DeliveredAt
     *     @type \Diadoc\Api\Proto\Docflow\RoamingNotification $RoamingNotification
     *     @type string $PlainText
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\DocflowV3::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.SignedAttachmentV3 RevocationRequest = 1;</code>
     * @return \Diadoc\Api\Proto\Docflow\SignedAttachmentV3|null
     */
    public function getRevocationRequest()
    {
        return $this->RevocationRequest;
    }

    public function hasRevocationRequest()
    {
        return isset($this->RevocationRequest);
    }

    public function clearRevocationRequest()
    {
        unset($this->RevocationRequest);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.SignedAttachmentV3 RevocationRequest = 1;</code>
     * @param \Diadoc\Api\Proto\Docflow\SignedAttachmentV3 $var
     * @return $this
     */
    public function setRevocationRequest($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\SignedAttachmentV3::class);
        $this->RevocationRequest = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp SentAt = 2;</code>
     * @return \Diadoc\Api\Proto\Timestamp|null
     */
    public function getSentAt()
    {
        return $this->SentAt;
    }

    public function hasSentAt()
    {
        return isset($this->SentAt);
    }

    public function clearSentAt()
    {
        unset($this->SentAt);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp SentAt = 2;</code>
     * @param \Diadoc\Api\Proto\Timestamp $var
     * @return $this
     */
    public function setSentAt($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Timestamp::class);
        $this->SentAt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp DeliveredAt = 3;</code>
     * @return \Diadoc\Api\Proto\Timestamp|null
     */
    public function getDeliveredAt()
    {
        return $this->DeliveredAt;
    }

    public function hasDeliveredAt()
    {
        return isset($this->DeliveredAt);
    }

    public function clearDeliveredAt()
    {
        unset($this->DeliveredAt);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp DeliveredAt = 3;</code>
     * @param \Diadoc\Api\Proto\Timestamp $var
     * @return $this
     */
    public function setDeliveredAt($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Timestamp::class);
        $this->DeliveredAt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.RoamingNotification RoamingNotification = 4;</code>
     * @return \Diadoc\Api\Proto\Docflow\RoamingNotification|null
     */
    public function getRoamingNotification()
    {
        return $this->RoamingNotification;
    }

    public function hasRoamingNotification()
    {
        return isset($this->RoamingNotification);
    }

    public function clearRoamingNotification()
    {
        unset($this->RoamingNotification);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.RoamingNotification RoamingNotification = 4;</code>
     * @param \Diadoc\Api\Proto\Docflow\RoamingNotification $var
     * @return $this
     */
    public function setRoamingNotification($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\RoamingNotification::class);
        $this->RoamingNotification = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string PlainText = 5;</code>
     * @return string
     */
    public function getPlainText()
    {
        return isset($this->PlainText) ? $this->PlainText : '';
    }

    public function hasPlainText()
    {
        return isset($this->PlainText);
    }

    public function clearPlainText()
    {
        unset($this->PlainText);
    }

    /**
     * Generated from protobuf field <code>optional string PlainText = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPlainText($var)
    {
        GPBUtil::checkString($var, True);
        $this->PlainText = $var;

        return $this;
    }

}

