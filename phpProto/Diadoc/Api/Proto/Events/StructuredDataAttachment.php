<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Api\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Events.StructuredDataAttachment</code>
 */
class StructuredDataAttachment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes Content = 1;</code>
     */
    protected $Content = '';
    /**
     * Generated from protobuf field <code>string FileName = 2;</code>
     */
    protected $FileName = '';
    /**
     * Generated from protobuf field <code>string ParentCustomDocumentId = 3;</code>
     */
    protected $ParentCustomDocumentId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Content
     *     @type string $FileName
     *     @type string $ParentCustomDocumentId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes Content = 1;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * Generated from protobuf field <code>bytes Content = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->Content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string FileName = 2;</code>
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * Generated from protobuf field <code>string FileName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ParentCustomDocumentId = 3;</code>
     * @return string
     */
    public function getParentCustomDocumentId()
    {
        return $this->ParentCustomDocumentId;
    }

    /**
     * Generated from protobuf field <code>string ParentCustomDocumentId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setParentCustomDocumentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ParentCustomDocumentId = $var;

        return $this;
    }

}

