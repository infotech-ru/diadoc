<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Users/UserToUpdate.proto

namespace Diadoc\Api\Proto\Users;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Users.UserToUpdate</code>
 */
class UserToUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Users.UserLoginPatch Login = 1;</code>
     */
    protected $Login = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Users.UserFullNamePatch FullName = 2;</code>
     */
    protected $FullName = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\Users\UserLoginPatch $Login
     *     @type \Diadoc\Api\Proto\Users\UserFullNamePatch $FullName
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Users\UserToUpdate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Users.UserLoginPatch Login = 1;</code>
     * @return \Diadoc\Api\Proto\Users\UserLoginPatch|null
     */
    public function getLogin()
    {
        return $this->Login;
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Users.UserLoginPatch Login = 1;</code>
     * @param \Diadoc\Api\Proto\Users\UserLoginPatch $var
     * @return $this
     */
    public function setLogin($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Users\UserLoginPatch::class);
        $this->Login = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Users.UserFullNamePatch FullName = 2;</code>
     * @return \Diadoc\Api\Proto\Users\UserFullNamePatch|null
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Users.UserFullNamePatch FullName = 2;</code>
     * @param \Diadoc\Api\Proto\Users\UserFullNamePatch $var
     * @return $this
     */
    public function setFullName($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Users\UserFullNamePatch::class);
        $this->FullName = $var;

        return $this;
    }

}

