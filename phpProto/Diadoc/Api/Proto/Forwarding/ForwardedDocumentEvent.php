<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Forwarding/ForwardingApi.proto

namespace Diadoc\Api\Proto\Forwarding;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Forwarding.ForwardedDocumentEvent</code>
 */
class ForwardedDocumentEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp Timestamp = 1;</code>
     */
    protected $Timestamp = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Forwarding.ForwardedDocumentId ForwardedDocumentId = 2;</code>
     */
    protected $ForwardedDocumentId = null;
    /**
     * Generated from protobuf field <code>optional bytes IndexKey = 3;</code>
     */
    protected $IndexKey = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Forwarding.ForwardedDocument ForwardedDocument = 4;</code>
     */
    protected $ForwardedDocument = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\Timestamp $Timestamp
     *     @type \Diadoc\Api\Proto\Forwarding\ForwardedDocumentId $ForwardedDocumentId
     *     @type string $IndexKey
     *     @type \Diadoc\Api\Proto\Forwarding\ForwardedDocument $ForwardedDocument
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Forwarding\ForwardingApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp Timestamp = 1;</code>
     * @return \Diadoc\Api\Proto\Timestamp|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    public function hasTimestamp()
    {
        return isset($this->Timestamp);
    }

    public function clearTimestamp()
    {
        unset($this->Timestamp);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp Timestamp = 1;</code>
     * @param \Diadoc\Api\Proto\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Timestamp::class);
        $this->Timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Forwarding.ForwardedDocumentId ForwardedDocumentId = 2;</code>
     * @return \Diadoc\Api\Proto\Forwarding\ForwardedDocumentId|null
     */
    public function getForwardedDocumentId()
    {
        return $this->ForwardedDocumentId;
    }

    public function hasForwardedDocumentId()
    {
        return isset($this->ForwardedDocumentId);
    }

    public function clearForwardedDocumentId()
    {
        unset($this->ForwardedDocumentId);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Forwarding.ForwardedDocumentId ForwardedDocumentId = 2;</code>
     * @param \Diadoc\Api\Proto\Forwarding\ForwardedDocumentId $var
     * @return $this
     */
    public function setForwardedDocumentId($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Forwarding\ForwardedDocumentId::class);
        $this->ForwardedDocumentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bytes IndexKey = 3;</code>
     * @return string
     */
    public function getIndexKey()
    {
        return isset($this->IndexKey) ? $this->IndexKey : '';
    }

    public function hasIndexKey()
    {
        return isset($this->IndexKey);
    }

    public function clearIndexKey()
    {
        unset($this->IndexKey);
    }

    /**
     * Generated from protobuf field <code>optional bytes IndexKey = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIndexKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->IndexKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Forwarding.ForwardedDocument ForwardedDocument = 4;</code>
     * @return \Diadoc\Api\Proto\Forwarding\ForwardedDocument|null
     */
    public function getForwardedDocument()
    {
        return $this->ForwardedDocument;
    }

    public function hasForwardedDocument()
    {
        return isset($this->ForwardedDocument);
    }

    public function clearForwardedDocument()
    {
        unset($this->ForwardedDocument);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Forwarding.ForwardedDocument ForwardedDocument = 4;</code>
     * @param \Diadoc\Api\Proto\Forwarding\ForwardedDocument $var
     * @return $this
     */
    public function setForwardedDocument($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Forwarding\ForwardedDocument::class);
        $this->ForwardedDocument = $var;

        return $this;
    }

}

