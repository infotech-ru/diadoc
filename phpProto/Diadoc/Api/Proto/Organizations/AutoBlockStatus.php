<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Organizations/AutoBlockStatus.proto

namespace Diadoc\Api\Proto\Organizations;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Organizations.AutoBlockStatus</code>
 */
class AutoBlockStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool IsBlocked = 1;</code>
     */
    protected $IsBlocked = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $IsBlocked
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Organizations\AutoBlockStatus::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool IsBlocked = 1;</code>
     * @return bool
     */
    public function getIsBlocked()
    {
        return $this->IsBlocked;
    }

    /**
     * Generated from protobuf field <code>bool IsBlocked = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsBlocked($var)
    {
        GPBUtil::checkBool($var);
        $this->IsBlocked = $var;

        return $this;
    }

}

