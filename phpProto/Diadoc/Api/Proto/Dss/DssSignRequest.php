<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Dss/DssSign.proto

namespace Diadoc\Api\Proto\Dss;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Dss.DssSignRequest</code>
 */
class DssSignRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Dss.DssSignFile Files = 1;</code>
     */
    private $Files;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Diadoc\Api\Proto\Dss\DssSignFile>|\Google\Protobuf\Internal\RepeatedField $Files
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Dss\DssSign::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Dss.DssSignFile Files = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFiles()
    {
        return $this->Files;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Dss.DssSignFile Files = 1;</code>
     * @param array<\Diadoc\Api\Proto\Dss\DssSignFile>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Dss\DssSignFile::class);
        $this->Files = $arr;

        return $this;
    }

}

