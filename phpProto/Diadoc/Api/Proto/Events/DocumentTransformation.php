<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Api\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Events.DocumentTransformation</code>
 */
class DocumentTransformation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string DocumentId = 1;</code>
     */
    protected $DocumentId = '';
    /**
     * Generated from protobuf field <code>optional string CustomDocumentId = 2;</code>
     */
    protected $CustomDocumentId = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $DocumentId
     *     @type string $CustomDocumentId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string DocumentId = 1;</code>
     * @return string
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }

    /**
     * Generated from protobuf field <code>string DocumentId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->DocumentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string CustomDocumentId = 2;</code>
     * @return string
     */
    public function getCustomDocumentId()
    {
        return isset($this->CustomDocumentId) ? $this->CustomDocumentId : '';
    }

    public function hasCustomDocumentId()
    {
        return isset($this->CustomDocumentId);
    }

    public function clearCustomDocumentId()
    {
        unset($this->CustomDocumentId);
    }

    /**
     * Generated from protobuf field <code>optional string CustomDocumentId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomDocumentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->CustomDocumentId = $var;

        return $this;
    }

}

