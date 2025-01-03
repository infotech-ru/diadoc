<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: OuterDocflows/OuterDocflowStatus.proto

namespace Diadoc\Api\Proto\OuterDocflows;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.OuterDocflows.Status</code>
 */
class Status extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string NamedId = 1;</code>
     */
    protected $NamedId = '';
    /**
     * Generated from protobuf field <code>string FriendlyName = 2;</code>
     */
    protected $FriendlyName = '';
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.OuterDocflows.OuterStatusType Type = 3;</code>
     */
    protected $Type = 0;
    /**
     * Generated from protobuf field <code>optional string Description = 4;</code>
     */
    protected $Description = null;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.OuterDocflows.StatusDetail Details = 5;</code>
     */
    private $Details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $NamedId
     *     @type string $FriendlyName
     *     @type int $Type
     *     @type string $Description
     *     @type array<\Diadoc\Api\Proto\OuterDocflows\StatusDetail>|\Google\Protobuf\Internal\RepeatedField $Details
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\OuterDocflows\OuterDocflowStatus::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string NamedId = 1;</code>
     * @return string
     */
    public function getNamedId()
    {
        return $this->NamedId;
    }

    /**
     * Generated from protobuf field <code>string NamedId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNamedId($var)
    {
        GPBUtil::checkString($var, True);
        $this->NamedId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string FriendlyName = 2;</code>
     * @return string
     */
    public function getFriendlyName()
    {
        return $this->FriendlyName;
    }

    /**
     * Generated from protobuf field <code>string FriendlyName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFriendlyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->FriendlyName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.OuterDocflows.OuterStatusType Type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.OuterDocflows.OuterStatusType Type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\OuterDocflows\OuterStatusType::class);
        $this->Type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string Description = 4;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : '';
    }

    public function hasDescription()
    {
        return isset($this->Description);
    }

    public function clearDescription()
    {
        unset($this->Description);
    }

    /**
     * Generated from protobuf field <code>optional string Description = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->Description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.OuterDocflows.StatusDetail Details = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDetails()
    {
        return $this->Details;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.OuterDocflows.StatusDetail Details = 5;</code>
     * @param array<\Diadoc\Api\Proto\OuterDocflows\StatusDetail>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\OuterDocflows\StatusDetail::class);
        $this->Details = $arr;

        return $this;
    }

}

