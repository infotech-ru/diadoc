<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/InvoiceCorrectionRequestInfo.proto

namespace Diadoc\Api\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Invoicing.InvoiceCorrectionRequestGenerationRequestV2</code>
 */
class InvoiceCorrectionRequestGenerationRequestV2 extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ErrorMessage = 1;</code>
     */
    protected $ErrorMessage = '';
    /**
     * Generated from protobuf field <code>string MessageId = 2;</code>
     */
    protected $MessageId = '';
    /**
     * Generated from protobuf field <code>string AttachmentId = 3;</code>
     */
    protected $AttachmentId = '';
    /**
     * Generated from protobuf field <code>bytes SignerContent = 4;</code>
     */
    protected $SignerContent = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ErrorMessage
     *     @type string $MessageId
     *     @type string $AttachmentId
     *     @type string $SignerContent
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\InvoiceCorrectionRequestInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ErrorMessage = 1;</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }

    /**
     * Generated from protobuf field <code>string ErrorMessage = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->ErrorMessage = $var;

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

    /**
     * Generated from protobuf field <code>string AttachmentId = 3;</code>
     * @return string
     */
    public function getAttachmentId()
    {
        return $this->AttachmentId;
    }

    /**
     * Generated from protobuf field <code>string AttachmentId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAttachmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->AttachmentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes SignerContent = 4;</code>
     * @return string
     */
    public function getSignerContent()
    {
        return $this->SignerContent;
    }

    /**
     * Generated from protobuf field <code>bytes SignerContent = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSignerContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->SignerContent = $var;

        return $this;
    }

}

