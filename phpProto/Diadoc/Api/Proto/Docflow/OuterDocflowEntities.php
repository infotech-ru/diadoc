<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocflowV3.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.OuterDocflowEntities</code>
 */
class OuterDocflowEntities extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string DocflowNamedId = 1;</code>
     */
    protected $DocflowNamedId = '';
    /**
     * Generated from protobuf field <code>string DocflowFriendlyName = 2;</code>
     */
    protected $DocflowFriendlyName = '';
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Docflow.StatusEntity StatusEntities = 3;</code>
     */
    private $StatusEntities;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $DocflowNamedId
     *     @type string $DocflowFriendlyName
     *     @type array<\Diadoc\Api\Proto\Docflow\StatusEntity>|\Google\Protobuf\Internal\RepeatedField $StatusEntities
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\DocflowV3::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string DocflowNamedId = 1;</code>
     * @return string
     */
    public function getDocflowNamedId()
    {
        return $this->DocflowNamedId;
    }

    /**
     * Generated from protobuf field <code>string DocflowNamedId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDocflowNamedId($var)
    {
        GPBUtil::checkString($var, True);
        $this->DocflowNamedId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string DocflowFriendlyName = 2;</code>
     * @return string
     */
    public function getDocflowFriendlyName()
    {
        return $this->DocflowFriendlyName;
    }

    /**
     * Generated from protobuf field <code>string DocflowFriendlyName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDocflowFriendlyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->DocflowFriendlyName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Docflow.StatusEntity StatusEntities = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatusEntities()
    {
        return $this->StatusEntities;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Docflow.StatusEntity StatusEntities = 3;</code>
     * @param array<\Diadoc\Api\Proto\Docflow\StatusEntity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatusEntities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Docflow\StatusEntity::class);
        $this->StatusEntities = $arr;

        return $this;
    }

}

