<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocumentInfoV3.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.DocumentParticipant</code>
 */
class DocumentParticipant extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string BoxId = 1;</code>
     */
    protected $BoxId = '';
    /**
     * Generated from protobuf field <code>optional string DepartmentId = 2;</code>
     */
    protected $DepartmentId = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $BoxId
     *     @type string $DepartmentId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\DocumentInfoV3::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string BoxId = 1;</code>
     * @return string
     */
    public function getBoxId()
    {
        return $this->BoxId;
    }

    /**
     * Generated from protobuf field <code>string BoxId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBoxId($var)
    {
        GPBUtil::checkString($var, True);
        $this->BoxId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string DepartmentId = 2;</code>
     * @return string
     */
    public function getDepartmentId()
    {
        return isset($this->DepartmentId) ? $this->DepartmentId : '';
    }

    public function hasDepartmentId()
    {
        return isset($this->DepartmentId);
    }

    public function clearDepartmentId()
    {
        unset($this->DepartmentId);
    }

    /**
     * Generated from protobuf field <code>optional string DepartmentId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDepartmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->DepartmentId = $var;

        return $this;
    }

}
