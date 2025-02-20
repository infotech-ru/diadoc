<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Api\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Events.TemplateTransformationToPost</code>
 */
class TemplateTransformationToPost extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string BoxId = 1;</code>
     */
    protected $BoxId = '';
    /**
     * Generated from protobuf field <code>string TemplateId = 2;</code>
     */
    protected $TemplateId = '';
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.DocumentTransformation DocumentTransformations = 3;</code>
     */
    private $DocumentTransformations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $BoxId
     *     @type string $TemplateId
     *     @type array<\Diadoc\Api\Proto\Events\DocumentTransformation>|\Google\Protobuf\Internal\RepeatedField $DocumentTransformations
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string BoxId = 1;</code>
     * @return string
     */
    public function getBoxId()
    {
        return $this->BoxId;
    }

    /**
     * Generated from protobuf field <code>string BoxId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBoxId($var)
    {
        GPBUtil::checkString($var, True);
        $this->BoxId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TemplateId = 2;</code>
     * @return string
     */
    public function getTemplateId()
    {
        return $this->TemplateId;
    }

    /**
     * Generated from protobuf field <code>string TemplateId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->TemplateId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.DocumentTransformation DocumentTransformations = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDocumentTransformations()
    {
        return $this->DocumentTransformations;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.DocumentTransformation DocumentTransformations = 3;</code>
     * @param array<\Diadoc\Api\Proto\Events\DocumentTransformation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDocumentTransformations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Events\DocumentTransformation::class);
        $this->DocumentTransformations = $arr;

        return $this;
    }

}

