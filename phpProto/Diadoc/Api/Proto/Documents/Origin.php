<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/Document.proto

namespace Diadoc\Api\Proto\Documents;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Documents.Origin</code>
 */
class Origin extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Documents.MessageType MessageType = 1;</code>
     */
    protected $MessageType = 0;
    /**
     * Generated from protobuf field <code>string MessageId = 2;</code>
     */
    protected $MessageId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $MessageType
     *     @type string $MessageId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Documents\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Documents.MessageType MessageType = 1;</code>
     * @return int
     */
    public function getMessageType()
    {
        return $this->MessageType;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Documents.MessageType MessageType = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMessageType($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Documents\MessageType::class);
        $this->MessageType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string MessageId = 2;</code>
     * @return string
     */
    public function getMessageId()
    {
        return $this->MessageId;
    }

    /**
     * Generated from protobuf field <code>string MessageId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->MessageId = $var;

        return $this;
    }

}
