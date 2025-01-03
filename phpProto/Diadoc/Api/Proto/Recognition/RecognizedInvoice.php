<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Recognition/Recognition.proto

namespace Diadoc\Api\Proto\Recognition;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Recognition.RecognizedInvoice</code>
 */
class RecognizedInvoice extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string MetadataJson = 1;</code>
     */
    protected $MetadataJson = '';
    /**
     * Generated from protobuf field <code>optional string ValidationErrorMessage = 2;</code>
     */
    protected $ValidationErrorMessage = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $MetadataJson
     *     @type string $ValidationErrorMessage
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Recognition\Recognition::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string MetadataJson = 1;</code>
     * @return string
     */
    public function getMetadataJson()
    {
        return $this->MetadataJson;
    }

    /**
     * Generated from protobuf field <code>string MetadataJson = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMetadataJson($var)
    {
        GPBUtil::checkString($var, True);
        $this->MetadataJson = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string ValidationErrorMessage = 2;</code>
     * @return string
     */
    public function getValidationErrorMessage()
    {
        return isset($this->ValidationErrorMessage) ? $this->ValidationErrorMessage : '';
    }

    public function hasValidationErrorMessage()
    {
        return isset($this->ValidationErrorMessage);
    }

    public function clearValidationErrorMessage()
    {
        unset($this->ValidationErrorMessage);
    }

    /**
     * Generated from protobuf field <code>optional string ValidationErrorMessage = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValidationErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->ValidationErrorMessage = $var;

        return $this;
    }

}

