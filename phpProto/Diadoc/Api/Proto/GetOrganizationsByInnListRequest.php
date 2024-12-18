<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GetOrganizationsByInnList.proto

namespace Diadoc\Api\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.GetOrganizationsByInnListRequest</code>
 */
class GetOrganizationsByInnListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string InnList = 1;</code>
     */
    private $InnList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $InnList
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GetOrganizationsByInnList::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string InnList = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInnList()
    {
        return $this->InnList;
    }

    /**
     * Generated from protobuf field <code>repeated string InnList = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInnList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->InnList = $arr;

        return $this;
    }

}

