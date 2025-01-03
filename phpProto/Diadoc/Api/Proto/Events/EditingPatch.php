<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Api\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Events.EditingPatch</code>
 */
class EditingPatch extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ParentEntityId = 1;</code>
     */
    protected $ParentEntityId = '';
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Events.UnsignedContent Content = 2;</code>
     */
    protected $Content = null;
    /**
     * Generated from protobuf field <code>repeated string Labels = 3;</code>
     */
    private $Labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ParentEntityId
     *     @type \Diadoc\Api\Proto\Events\UnsignedContent $Content
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $Labels
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ParentEntityId = 1;</code>
     * @return string
     */
    public function getParentEntityId()
    {
        return $this->ParentEntityId;
    }

    /**
     * Generated from protobuf field <code>string ParentEntityId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParentEntityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ParentEntityId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Events.UnsignedContent Content = 2;</code>
     * @return \Diadoc\Api\Proto\Events\UnsignedContent|null
     */
    public function getContent()
    {
        return $this->Content;
    }

    public function hasContent()
    {
        return isset($this->Content);
    }

    public function clearContent()
    {
        unset($this->Content);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Events.UnsignedContent Content = 2;</code>
     * @param \Diadoc\Api\Proto\Events\UnsignedContent $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Events\UnsignedContent::class);
        $this->Content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string Labels = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->Labels;
    }

    /**
     * Generated from protobuf field <code>repeated string Labels = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->Labels = $arr;

        return $this;
    }

}

