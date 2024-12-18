<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Api\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Events.ResolutionRequestAttachment</code>
 */
class ResolutionRequestAttachment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string InitialDocumentId = 1;</code>
     */
    protected $InitialDocumentId = '';
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.ResolutionRequestType Type = 2;</code>
     */
    protected $Type = 0;
    /**
     * Generated from protobuf field <code>optional string TargetUserId = 3;</code>
     */
    protected $TargetUserId = null;
    /**
     * Generated from protobuf field <code>optional string TargetDepartmentId = 4;</code>
     */
    protected $TargetDepartmentId = null;
    /**
     * Generated from protobuf field <code>optional string Comment = 5;</code>
     */
    protected $Comment = null;
    /**
     * Generated from protobuf field <code>repeated string Labels = 6;</code>
     */
    private $Labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $InitialDocumentId
     *     @type int $Type
     *     @type string $TargetUserId
     *     @type string $TargetDepartmentId
     *     @type string $Comment
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $Labels
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string InitialDocumentId = 1;</code>
     * @return string
     */
    public function getInitialDocumentId()
    {
        return $this->InitialDocumentId;
    }

    /**
     * Generated from protobuf field <code>string InitialDocumentId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInitialDocumentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->InitialDocumentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.ResolutionRequestType Type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.ResolutionRequestType Type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\ResolutionRequestType::class);
        $this->Type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string TargetUserId = 3;</code>
     * @return string
     */
    public function getTargetUserId()
    {
        return isset($this->TargetUserId) ? $this->TargetUserId : '';
    }

    public function hasTargetUserId()
    {
        return isset($this->TargetUserId);
    }

    public function clearTargetUserId()
    {
        unset($this->TargetUserId);
    }

    /**
     * Generated from protobuf field <code>optional string TargetUserId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->TargetUserId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string TargetDepartmentId = 4;</code>
     * @return string
     */
    public function getTargetDepartmentId()
    {
        return isset($this->TargetDepartmentId) ? $this->TargetDepartmentId : '';
    }

    public function hasTargetDepartmentId()
    {
        return isset($this->TargetDepartmentId);
    }

    public function clearTargetDepartmentId()
    {
        unset($this->TargetDepartmentId);
    }

    /**
     * Generated from protobuf field <code>optional string TargetDepartmentId = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetDepartmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->TargetDepartmentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string Comment = 5;</code>
     * @return string
     */
    public function getComment()
    {
        return isset($this->Comment) ? $this->Comment : '';
    }

    public function hasComment()
    {
        return isset($this->Comment);
    }

    public function clearComment()
    {
        unset($this->Comment);
    }

    /**
     * Generated from protobuf field <code>optional string Comment = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setComment($var)
    {
        GPBUtil::checkString($var, True);
        $this->Comment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string Labels = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->Labels;
    }

    /**
     * Generated from protobuf field <code>repeated string Labels = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->Labels = $arr;

        return $this;
    }

}
