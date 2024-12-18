<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: CloudSign.proto

namespace Diadoc\Api\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.AutosignReceiptsResult</code>
 */
class AutosignReceiptsResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 SignedReceiptsCount = 1;</code>
     */
    protected $SignedReceiptsCount = 0;
    /**
     * Generated from protobuf field <code>string NextBatchKey = 2;</code>
     */
    protected $NextBatchKey = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $SignedReceiptsCount
     *     @type string $NextBatchKey
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\CloudSign::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 SignedReceiptsCount = 1;</code>
     * @return int|string
     */
    public function getSignedReceiptsCount()
    {
        return $this->SignedReceiptsCount;
    }

    /**
     * Generated from protobuf field <code>int64 SignedReceiptsCount = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSignedReceiptsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->SignedReceiptsCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string NextBatchKey = 2;</code>
     * @return string
     */
    public function getNextBatchKey()
    {
        return $this->NextBatchKey;
    }

    /**
     * Generated from protobuf field <code>string NextBatchKey = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextBatchKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->NextBatchKey = $var;

        return $this;
    }

}

