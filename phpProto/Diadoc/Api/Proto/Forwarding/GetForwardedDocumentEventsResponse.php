<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Forwarding/ForwardingApi.proto

namespace Diadoc\Api\Proto\Forwarding;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Forwarding.GetForwardedDocumentEventsResponse</code>
 */
class GetForwardedDocumentEventsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional int32 TotalCount = 1;</code>
     */
    protected $TotalCount = null;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Forwarding.ForwardedDocumentEvent Events = 2;</code>
     */
    private $Events;
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.TotalCountType TotalCountType = 3;</code>
     */
    protected $TotalCountType = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $TotalCount
     *     @type array<\Diadoc\Api\Proto\Forwarding\ForwardedDocumentEvent>|\Google\Protobuf\Internal\RepeatedField $Events
     *     @type int $TotalCountType
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Forwarding\ForwardingApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional int32 TotalCount = 1;</code>
     * @return int
     */
    public function getTotalCount()
    {
        return isset($this->TotalCount) ? $this->TotalCount : 0;
    }

    public function hasTotalCount()
    {
        return isset($this->TotalCount);
    }

    public function clearTotalCount()
    {
        unset($this->TotalCount);
    }

    /**
     * Generated from protobuf field <code>optional int32 TotalCount = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->TotalCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Forwarding.ForwardedDocumentEvent Events = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvents()
    {
        return $this->Events;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Forwarding.ForwardedDocumentEvent Events = 2;</code>
     * @param array<\Diadoc\Api\Proto\Forwarding\ForwardedDocumentEvent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Forwarding\ForwardedDocumentEvent::class);
        $this->Events = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.TotalCountType TotalCountType = 3;</code>
     * @return int
     */
    public function getTotalCountType()
    {
        return $this->TotalCountType;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.TotalCountType TotalCountType = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalCountType($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\TotalCountType::class);
        $this->TotalCountType = $var;

        return $this;
    }

}

