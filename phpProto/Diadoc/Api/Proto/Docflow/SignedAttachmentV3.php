<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/AttachmentV3.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.SignedAttachmentV3</code>
 */
class SignedAttachmentV3 extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.Attachment Attachment = 1;</code>
     */
    protected $Attachment = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.SignatureV3 Signature = 2;</code>
     */
    protected $Signature = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.Entity Comment = 3;</code>
     */
    protected $Comment = null;
    /**
     * Generated from protobuf field <code>string ContentTypeId = 4;</code>
     */
    protected $ContentTypeId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\Docflow\Attachment $Attachment
     *     @type \Diadoc\Api\Proto\Docflow\SignatureV3 $Signature
     *     @type \Diadoc\Api\Proto\Docflow\Entity $Comment
     *     @type string $ContentTypeId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\AttachmentV3::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.Attachment Attachment = 1;</code>
     * @return \Diadoc\Api\Proto\Docflow\Attachment|null
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
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.Attachment Attachment = 1;</code>
     * @param \Diadoc\Api\Proto\Docflow\Attachment $var
     * @return $this
     */
    public function setAttachment($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\Attachment::class);
        $this->Attachment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.SignatureV3 Signature = 2;</code>
     * @return \Diadoc\Api\Proto\Docflow\SignatureV3|null
     */
    public function getSignature()
    {
        return $this->Signature;
    }

    public function hasSignature()
    {
        return isset($this->Signature);
    }

    public function clearSignature()
    {
        unset($this->Signature);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.SignatureV3 Signature = 2;</code>
     * @param \Diadoc\Api\Proto\Docflow\SignatureV3 $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\SignatureV3::class);
        $this->Signature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.Entity Comment = 3;</code>
     * @return \Diadoc\Api\Proto\Docflow\Entity|null
     */
    public function getComment()
    {
        return $this->Comment;
    }

    public function hasComment()
    {
        return isset($this->Comment);
    }

    public function clearComment()
    {
        unset($this->Comment);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.Entity Comment = 3;</code>
     * @param \Diadoc\Api\Proto\Docflow\Entity $var
     * @return $this
     */
    public function setComment($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\Entity::class);
        $this->Comment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ContentTypeId = 4;</code>
     * @return string
     */
    public function getContentTypeId()
    {
        return $this->ContentTypeId;
    }

    /**
     * Generated from protobuf field <code>string ContentTypeId = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setContentTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ContentTypeId = $var;

        return $this;
    }

}

