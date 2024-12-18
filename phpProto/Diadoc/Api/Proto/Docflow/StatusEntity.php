<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocflowV3.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.StatusEntity</code>
 */
class StatusEntity extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.SignedAttachmentV3 Attachment = 1;</code>
     */
    protected $Attachment = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.OuterDocflows.Status Status = 2;</code>
     */
    protected $Status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\Docflow\SignedAttachmentV3 $Attachment
     *     @type \Diadoc\Api\Proto\OuterDocflows\Status $Status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\DocflowV3::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.SignedAttachmentV3 Attachment = 1;</code>
     * @return \Diadoc\Api\Proto\Docflow\SignedAttachmentV3|null
     */
    public function getAttachment()
    {
        return $this->Attachment;
    }

    public function hasAttachment()
    {
        return isset($this->Attachment);
    }

    public function clearAttachment()
    {
        unset($this->Attachment);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.SignedAttachmentV3 Attachment = 1;</code>
     * @param \Diadoc\Api\Proto\Docflow\SignedAttachmentV3 $var
     * @return $this
     */
    public function setAttachment($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\SignedAttachmentV3::class);
        $this->Attachment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.OuterDocflows.Status Status = 2;</code>
     * @return \Diadoc\Api\Proto\OuterDocflows\Status|null
     */
    public function getStatus()
    {
        return $this->Status;
    }

    public function hasStatus()
    {
        return isset($this->Status);
    }

    public function clearStatus()
    {
        unset($this->Status);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.OuterDocflows.Status Status = 2;</code>
     * @param \Diadoc\Api\Proto\OuterDocflows\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\OuterDocflows\Status::class);
        $this->Status = $var;

        return $this;
    }

}

