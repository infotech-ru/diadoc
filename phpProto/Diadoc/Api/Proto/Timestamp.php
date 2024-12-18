<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Timestamp.proto

namespace Diadoc\Api\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Timestamp</code>
 */
class Timestamp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>sfixed64 Ticks = 1;</code>
     */
    protected $Ticks = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $Ticks
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Timestamp::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>sfixed64 Ticks = 1;</code>
     * @return int|string
     */
    public function getTicks()
    {
        return $this->Ticks;
    }

    /**
     * Generated from protobuf field <code>sfixed64 Ticks = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTicks($var)
    {
        GPBUtil::checkInt64($var);
        $this->Ticks = $var;

        return $this;
    }

}
