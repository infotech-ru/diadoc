<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocflowApi.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.FetchedDocument</code>
 */
class FetchedDocument extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.DocumentWithDocflow Document = 1;</code>
     */
    protected $Document = null;
    /**
     * Generated from protobuf field <code>bytes IndexKey = 2;</code>
     */
    protected $IndexKey = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\Docflow\DocumentWithDocflow $Document
     *     @type string $IndexKey
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\DocflowApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.DocumentWithDocflow Document = 1;</code>
     * @return \Diadoc\Api\Proto\Docflow\DocumentWithDocflow|null
     */
    public function getDocument()
    {
        return $this->Document;
    }

    public function hasDocument()
    {
        return isset($this->Document);
    }

    public function clearDocument()
    {
        unset($this->Document);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.DocumentWithDocflow Document = 1;</code>
     * @param \Diadoc\Api\Proto\Docflow\DocumentWithDocflow $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\DocumentWithDocflow::class);
        $this->Document = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes IndexKey = 2;</code>
     * @return string
     */
    public function getIndexKey()
    {
        return $this->IndexKey;
    }

    /**
     * Generated from protobuf field <code>bytes IndexKey = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIndexKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->IndexKey = $var;

        return $this;
    }

}

