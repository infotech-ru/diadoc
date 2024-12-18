<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Employees/EmployeeToUpdate.proto

namespace Diadoc\Api\Proto\Employees;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Employees.EmployeeCanBeInvitedForChatPatch</code>
 */
class EmployeeCanBeInvitedForChatPatch extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool CanBeInvitedForChat = 1;</code>
     */
    protected $CanBeInvitedForChat = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $CanBeInvitedForChat
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Employees\EmployeeToUpdate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool CanBeInvitedForChat = 1;</code>
     * @return bool
     */
    public function getCanBeInvitedForChat()
    {
        return $this->CanBeInvitedForChat;
    }

    /**
     * Generated from protobuf field <code>bool CanBeInvitedForChat = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanBeInvitedForChat($var)
    {
        GPBUtil::checkBool($var);
        $this->CanBeInvitedForChat = $var;

        return $this;
    }

}

