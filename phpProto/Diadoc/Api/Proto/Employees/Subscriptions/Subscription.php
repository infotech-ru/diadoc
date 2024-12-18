<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Employees/Subscriptions/Subscription.proto

namespace Diadoc\Api\Proto\Employees\Subscriptions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Employees.Subscriptions.Subscription</code>
 */
class Subscription extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Id = 1;</code>
     */
    protected $Id = '';
    /**
     * Generated from protobuf field <code>bool IsSubscribed = 2;</code>
     */
    protected $IsSubscribed = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Id
     *     @type bool $IsSubscribed
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Employees\Subscriptions\Subscription::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Generated from protobuf field <code>string Id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->Id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsSubscribed = 2;</code>
     * @return bool
     */
    public function getIsSubscribed()
    {
        return $this->IsSubscribed;
    }

    /**
     * Generated from protobuf field <code>bool IsSubscribed = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsSubscribed($var)
    {
        GPBUtil::checkBool($var);
        $this->IsSubscribed = $var;

        return $this;
    }

}
