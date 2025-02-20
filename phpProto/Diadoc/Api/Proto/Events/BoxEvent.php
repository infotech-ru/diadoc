<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-GetApi.proto

namespace Diadoc\Api\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Events.BoxEvent</code>
 */
class BoxEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string EventId = 1;</code>
     */
    protected $EventId = '';
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Events.Message Message = 2;</code>
     */
    protected $Message = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Events.MessagePatch Patch = 3;</code>
     */
    protected $Patch = null;
    /**
     * Generated from protobuf field <code>optional string IndexKey = 4;</code>
     */
    protected $IndexKey = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $EventId
     *     @type \Diadoc\Api\Proto\Events\Message $Message
     *     @type \Diadoc\Api\Proto\Events\MessagePatch $Patch
     *     @type string $IndexKey
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessageGetApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string EventId = 1;</code>
     * @return string
     */
    public function getEventId()
    {
        return $this->EventId;
    }

    /**
     * Generated from protobuf field <code>string EventId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkString($var, True);
        $this->EventId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Events.Message Message = 2;</code>
     * @return \Diadoc\Api\Proto\Events\Message|null
     */
    public function getMessage()
    {
        return $this->Message;
    }

    public function hasMessage()
    {
        return isset($this->Message);
    }

    public function clearMessage()
    {
        unset($this->Message);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Events.Message Message = 2;</code>
     * @param \Diadoc\Api\Proto\Events\Message $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Events\Message::class);
        $this->Message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Events.MessagePatch Patch = 3;</code>
     * @return \Diadoc\Api\Proto\Events\MessagePatch|null
     */
    public function getPatch()
    {
        return $this->Patch;
    }

    public function hasPatch()
    {
        return isset($this->Patch);
    }

    public function clearPatch()
    {
        unset($this->Patch);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Events.MessagePatch Patch = 3;</code>
     * @param \Diadoc\Api\Proto\Events\MessagePatch $var
     * @return $this
     */
    public function setPatch($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Events\MessagePatch::class);
        $this->Patch = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string IndexKey = 4;</code>
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
     * Generated from protobuf field <code>optional string IndexKey = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setIndexKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->IndexKey = $var;

        return $this;
    }

}

