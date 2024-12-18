<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-GetApi.proto

namespace Diadoc\Api\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Events.MoveDocumentInfo</code>
 */
class MoveDocumentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string MovedFromDepartment = 1;</code>
     */
    protected $MovedFromDepartment = '';
    /**
     * Generated from protobuf field <code>string MovedToDepartment = 2;</code>
     */
    protected $MovedToDepartment = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $MovedFromDepartment
     *     @type string $MovedToDepartment
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessageGetApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string MovedFromDepartment = 1;</code>
     * @return string
     */
    public function getMovedFromDepartment()
    {
        return $this->MovedFromDepartment;
    }

    /**
     * Generated from protobuf field <code>string MovedFromDepartment = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMovedFromDepartment($var)
    {
        GPBUtil::checkString($var, True);
        $this->MovedFromDepartment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string MovedToDepartment = 2;</code>
     * @return string
     */
    public function getMovedToDepartment()
    {
        return $this->MovedToDepartment;
    }

    /**
     * Generated from protobuf field <code>string MovedToDepartment = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMovedToDepartment($var)
    {
        GPBUtil::checkString($var, True);
        $this->MovedToDepartment = $var;

        return $this;
    }

}
