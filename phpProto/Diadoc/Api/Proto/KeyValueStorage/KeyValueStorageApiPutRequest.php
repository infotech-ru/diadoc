<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: KeyValueStorage/KeyValueStorage.proto

namespace Diadoc\Api\Proto\KeyValueStorage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.KeyValueStorage.KeyValueStorageApiPutRequest</code>
 */
class KeyValueStorageApiPutRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.KeyValueStorage.KeyValueStorageEntry Entries = 1;</code>
     */
    private $Entries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Diadoc\Api\Proto\KeyValueStorage\KeyValueStorageEntry>|\Google\Protobuf\Internal\RepeatedField $Entries
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\KeyValueStorage\KeyValueStorage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.KeyValueStorage.KeyValueStorageEntry Entries = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->Entries;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.KeyValueStorage.KeyValueStorageEntry Entries = 1;</code>
     * @param array<\Diadoc\Api\Proto\KeyValueStorage\KeyValueStorageEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\KeyValueStorage\KeyValueStorageEntry::class);
        $this->Entries = $arr;

        return $this;
    }

}

