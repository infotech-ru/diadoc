<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/DocumentZip.proto

namespace Diadoc\Api\Proto\Documents;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Documents.DocumentZipGenerationResult</code>
 */
class DocumentZipGenerationResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string ZipFileNameOnShelf = 1;</code>
     */
    protected $ZipFileNameOnShelf = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ZipFileNameOnShelf
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Documents\DocumentZip::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string ZipFileNameOnShelf = 1;</code>
     * @return string
     */
    public function getZipFileNameOnShelf()
    {
        return isset($this->ZipFileNameOnShelf) ? $this->ZipFileNameOnShelf : '';
    }

    public function hasZipFileNameOnShelf()
    {
        return isset($this->ZipFileNameOnShelf);
    }

    public function clearZipFileNameOnShelf()
    {
        unset($this->ZipFileNameOnShelf);
    }

    /**
     * Generated from protobuf field <code>optional string ZipFileNameOnShelf = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setZipFileNameOnShelf($var)
    {
        GPBUtil::checkString($var, True);
        $this->ZipFileNameOnShelf = $var;

        return $this;
    }

}

