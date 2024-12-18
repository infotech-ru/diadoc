<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: CloudSign.proto

namespace Diadoc\Api\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.CloudSignConfirmResult</code>
 */
class CloudSignConfirmResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Content_v2 Signatures = 1;</code>
     */
    private $Signatures;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Diadoc\Api\Proto\Content_v2>|\Google\Protobuf\Internal\RepeatedField $Signatures
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\CloudSign::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Content_v2 Signatures = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSignatures()
    {
        return $this->Signatures;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Content_v2 Signatures = 1;</code>
     * @param array<\Diadoc\Api\Proto\Content_v2>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSignatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Content_v2::class);
        $this->Signatures = $arr;

        return $this;
    }

}
