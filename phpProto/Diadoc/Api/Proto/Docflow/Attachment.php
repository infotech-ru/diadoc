<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/Attachment.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.Attachment</code>
 */
class Attachment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.Entity Entity = 1;</code>
     */
    protected $Entity = null;
    /**
     * Generated from protobuf field <code>optional string AttachmentFilename = 2;</code>
     */
    protected $AttachmentFilename = null;
    /**
     * Generated from protobuf field <code>optional string DisplayFilename = 3;</code>
     */
    protected $DisplayFilename = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\Docflow\Entity $Entity
     *     @type string $AttachmentFilename
     *     @type string $DisplayFilename
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\Attachment::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.Entity Entity = 1;</code>
     * @return \Diadoc\Api\Proto\Docflow\Entity|null
     */
    public function getEntity()
    {
        return $this->Entity;
    }

    public function hasEntity()
    {
        return isset($this->Entity);
    }

    public function clearEntity()
    {
        unset($this->Entity);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.Entity Entity = 1;</code>
     * @param \Diadoc\Api\Proto\Docflow\Entity $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\Entity::class);
        $this->Entity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string AttachmentFilename = 2;</code>
     * @return string
     */
    public function getAttachmentFilename()
    {
        return isset($this->AttachmentFilename) ? $this->AttachmentFilename : '';
    }

    public function hasAttachmentFilename()
    {
        return isset($this->AttachmentFilename);
    }

    public function clearAttachmentFilename()
    {
        unset($this->AttachmentFilename);
    }

    /**
     * Generated from protobuf field <code>optional string AttachmentFilename = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAttachmentFilename($var)
    {
        GPBUtil::checkString($var, True);
        $this->AttachmentFilename = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string DisplayFilename = 3;</code>
     * @return string
     */
    public function getDisplayFilename()
    {
        return isset($this->DisplayFilename) ? $this->DisplayFilename : '';
    }

    public function hasDisplayFilename()
    {
        return isset($this->DisplayFilename);
    }

    public function clearDisplayFilename()
    {
        unset($this->DisplayFilename);
    }

    /**
     * Generated from protobuf field <code>optional string DisplayFilename = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayFilename($var)
    {
        GPBUtil::checkString($var, True);
        $this->DisplayFilename = $var;

        return $this;
    }

}
