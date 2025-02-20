<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-GetApi.proto

namespace Diadoc\Api\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Events.TemplateTransformationInfo</code>
 */
class TemplateTransformationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.DocumentId TransformedToDocumentId = 1;</code>
     */
    protected $TransformedToDocumentId = null;
    /**
     * Generated from protobuf field <code>optional string Author = 2;</code>
     */
    protected $Author = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\DocumentId $TransformedToDocumentId
     *     @type string $Author
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessageGetApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.DocumentId TransformedToDocumentId = 1;</code>
     * @return \Diadoc\Api\Proto\DocumentId|null
     */
    public function getTransformedToDocumentId()
    {
        return $this->TransformedToDocumentId;
    }

    public function hasTransformedToDocumentId()
    {
        return isset($this->TransformedToDocumentId);
    }

    public function clearTransformedToDocumentId()
    {
        unset($this->TransformedToDocumentId);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.DocumentId TransformedToDocumentId = 1;</code>
     * @param \Diadoc\Api\Proto\DocumentId $var
     * @return $this
     */
    public function setTransformedToDocumentId($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\DocumentId::class);
        $this->TransformedToDocumentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string Author = 2;</code>
     * @return string
     */
    public function getAuthor()
    {
        return isset($this->Author) ? $this->Author : '';
    }

    public function hasAuthor()
    {
        return isset($this->Author);
    }

    public function clearAuthor()
    {
        unset($this->Author);
    }

    /**
     * Generated from protobuf field <code>optional string Author = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthor($var)
    {
        GPBUtil::checkString($var, True);
        $this->Author = $var;

        return $this;
    }

}

