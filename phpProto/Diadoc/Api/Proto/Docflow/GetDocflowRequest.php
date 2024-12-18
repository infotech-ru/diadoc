<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocflowApi.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.GetDocflowRequest</code>
 */
class GetDocflowRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.DocumentId DocumentId = 1;</code>
     */
    protected $DocumentId = null;
    /**
     * Generated from protobuf field <code>optional string LastEventId = 2;</code>
     */
    protected $LastEventId = null;
    /**
     * Generated from protobuf field <code>optional bool InjectEntityContent = 3;</code>
     */
    protected $InjectEntityContent = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\DocumentId $DocumentId
     *     @type string $LastEventId
     *     @type bool $InjectEntityContent
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\DocflowApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.DocumentId DocumentId = 1;</code>
     * @return \Diadoc\Api\Proto\DocumentId|null
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }

    public function hasDocumentId()
    {
        return isset($this->DocumentId);
    }

    public function clearDocumentId()
    {
        unset($this->DocumentId);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.DocumentId DocumentId = 1;</code>
     * @param \Diadoc\Api\Proto\DocumentId $var
     * @return $this
     */
    public function setDocumentId($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\DocumentId::class);
        $this->DocumentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string LastEventId = 2;</code>
     * @return string
     */
    public function getLastEventId()
    {
        return isset($this->LastEventId) ? $this->LastEventId : '';
    }

    public function hasLastEventId()
    {
        return isset($this->LastEventId);
    }

    public function clearLastEventId()
    {
        unset($this->LastEventId);
    }

    /**
     * Generated from protobuf field <code>optional string LastEventId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLastEventId($var)
    {
        GPBUtil::checkString($var, True);
        $this->LastEventId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool InjectEntityContent = 3;</code>
     * @return bool
     */
    public function getInjectEntityContent()
    {
        return isset($this->InjectEntityContent) ? $this->InjectEntityContent : false;
    }

    public function hasInjectEntityContent()
    {
        return isset($this->InjectEntityContent);
    }

    public function clearInjectEntityContent()
    {
        unset($this->InjectEntityContent);
    }

    /**
     * Generated from protobuf field <code>optional bool InjectEntityContent = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setInjectEntityContent($var)
    {
        GPBUtil::checkBool($var);
        $this->InjectEntityContent = $var;

        return $this;
    }

}

