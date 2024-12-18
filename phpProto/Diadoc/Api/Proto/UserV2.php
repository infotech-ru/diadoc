<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: User.proto

namespace Diadoc\Api\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.UserV2</code>
 */
class UserV2 extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string UserId = 1;</code>
     */
    protected $UserId = '';
    /**
     * Generated from protobuf field <code>optional string Login = 2;</code>
     */
    protected $Login = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.FullName FullName = 3;</code>
     */
    protected $FullName = null;
    /**
     * Generated from protobuf field <code>bool IsRegistered = 4;</code>
     */
    protected $IsRegistered = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $UserId
     *     @type string $Login
     *     @type \Diadoc\Api\Proto\FullName $FullName
     *     @type bool $IsRegistered
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string UserId = 1;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->UserId;
    }

    /**
     * Generated from protobuf field <code>string UserId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->UserId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string Login = 2;</code>
     * @return string
     */
    public function getLogin()
    {
        return isset($this->Login) ? $this->Login : '';
    }

    public function hasLogin()
    {
        return isset($this->Login);
    }

    public function clearLogin()
    {
        unset($this->Login);
    }

    /**
     * Generated from protobuf field <code>optional string Login = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLogin($var)
    {
        GPBUtil::checkString($var, True);
        $this->Login = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.FullName FullName = 3;</code>
     * @return \Diadoc\Api\Proto\FullName|null
     */
    public function getFullName()
    {
        return $this->FullName;
    }

    public function hasFullName()
    {
        return isset($this->FullName);
    }

    public function clearFullName()
    {
        unset($this->FullName);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.FullName FullName = 3;</code>
     * @param \Diadoc\Api\Proto\FullName $var
     * @return $this
     */
    public function setFullName($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\FullName::class);
        $this->FullName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsRegistered = 4;</code>
     * @return bool
     */
    public function getIsRegistered()
    {
        return $this->IsRegistered;
    }

    /**
     * Generated from protobuf field <code>bool IsRegistered = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsRegistered($var)
    {
        GPBUtil::checkBool($var);
        $this->IsRegistered = $var;

        return $this;
    }

}

