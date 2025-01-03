<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Employees/Employee.proto

namespace Diadoc\Api\Proto\Employees;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Employees.Employee</code>
 */
class Employee extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.UserV2 User = 1;</code>
     */
    protected $User = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Employees.EmployeePermissions Permissions = 2;</code>
     */
    protected $Permissions = null;
    /**
     * Generated from protobuf field <code>string Position = 3;</code>
     */
    protected $Position = '';
    /**
     * Generated from protobuf field <code>bool CanBeInvitedForChat = 4;</code>
     */
    protected $CanBeInvitedForChat = false;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp CreationTimestamp = 5;</code>
     */
    protected $CreationTimestamp = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\UserV2 $User
     *     @type \Diadoc\Api\Proto\Employees\EmployeePermissions $Permissions
     *     @type string $Position
     *     @type bool $CanBeInvitedForChat
     *     @type \Diadoc\Api\Proto\Timestamp $CreationTimestamp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Employees\Employee::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.UserV2 User = 1;</code>
     * @return \Diadoc\Api\Proto\UserV2|null
     */
    public function getUser()
    {
        return $this->User;
    }

    public function hasUser()
    {
        return isset($this->User);
    }

    public function clearUser()
    {
        unset($this->User);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.UserV2 User = 1;</code>
     * @param \Diadoc\Api\Proto\UserV2 $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\UserV2::class);
        $this->User = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Employees.EmployeePermissions Permissions = 2;</code>
     * @return \Diadoc\Api\Proto\Employees\EmployeePermissions|null
     */
    public function getPermissions()
    {
        return $this->Permissions;
    }

    public function hasPermissions()
    {
        return isset($this->Permissions);
    }

    public function clearPermissions()
    {
        unset($this->Permissions);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Employees.EmployeePermissions Permissions = 2;</code>
     * @param \Diadoc\Api\Proto\Employees\EmployeePermissions $var
     * @return $this
     */
    public function setPermissions($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Employees\EmployeePermissions::class);
        $this->Permissions = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Position = 3;</code>
     * @return string
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * Generated from protobuf field <code>string Position = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPosition($var)
    {
        GPBUtil::checkString($var, True);
        $this->Position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool CanBeInvitedForChat = 4;</code>
     * @return bool
     */
    public function getCanBeInvitedForChat()
    {
        return $this->CanBeInvitedForChat;
    }

    /**
     * Generated from protobuf field <code>bool CanBeInvitedForChat = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanBeInvitedForChat($var)
    {
        GPBUtil::checkBool($var);
        $this->CanBeInvitedForChat = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp CreationTimestamp = 5;</code>
     * @return \Diadoc\Api\Proto\Timestamp|null
     */
    public function getCreationTimestamp()
    {
        return $this->CreationTimestamp;
    }

    public function hasCreationTimestamp()
    {
        return isset($this->CreationTimestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->CreationTimestamp);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Timestamp CreationTimestamp = 5;</code>
     * @param \Diadoc\Api\Proto\Timestamp $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Timestamp::class);
        $this->CreationTimestamp = $var;

        return $this;
    }

}

