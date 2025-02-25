<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Users/UserToUpdate.proto

namespace Diadoc\Api\Proto\Users;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Users.UserFullNamePatch</code>
 */
class UserFullNamePatch extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.FullName FullName = 1;</code>
     */
    protected $FullName = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\FullName $FullName
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Users\UserToUpdate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.FullName FullName = 1;</code>
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.FullName FullName = 1;</code>
     * @param \Diadoc\Api\Proto\FullName $var
     * @return $this
     */
    public function setFullName($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\FullName::class);
        $this->FullName = $var;

        return $this;
    }

}

