<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocflowApi.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.SearchDocflowsRequest</code>
 */
class SearchDocflowsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string QueryString = 1;</code>
     */
    protected $QueryString = '';
    /**
     * Generated from protobuf field <code>optional int32 Count = 2;</code>
     */
    protected $Count = null;
    /**
     * Generated from protobuf field <code>optional int32 FirstIndex = 3;</code>
     */
    protected $FirstIndex = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.SearchScope Scope = 4;</code>
     */
    protected $Scope = null;
    /**
     * Generated from protobuf field <code>optional bool InjectEntityContent = 5;</code>
     */
    protected $InjectEntityContent = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $QueryString
     *     @type int $Count
     *     @type int $FirstIndex
     *     @type int $Scope
     *     @type bool $InjectEntityContent
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\DocflowApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string QueryString = 1;</code>
     * @return string
     */
    public function getQueryString()
    {
        return $this->QueryString;
    }

    /**
     * Generated from protobuf field <code>string QueryString = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryString($var)
    {
        GPBUtil::checkString($var, True);
        $this->QueryString = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional int32 Count = 2;</code>
     * @return int
     */
    public function getCount()
    {
        return isset($this->Count) ? $this->Count : 0;
    }

    public function hasCount()
    {
        return isset($this->Count);
    }

    public function clearCount()
    {
        unset($this->Count);
    }

    /**
     * Generated from protobuf field <code>optional int32 Count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->Count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional int32 FirstIndex = 3;</code>
     * @return int
     */
    public function getFirstIndex()
    {
        return isset($this->FirstIndex) ? $this->FirstIndex : 0;
    }

    public function hasFirstIndex()
    {
        return isset($this->FirstIndex);
    }

    public function clearFirstIndex()
    {
        unset($this->FirstIndex);
    }

    /**
     * Generated from protobuf field <code>optional int32 FirstIndex = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFirstIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->FirstIndex = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.SearchScope Scope = 4;</code>
     * @return int
     */
    public function getScope()
    {
        return isset($this->Scope) ? $this->Scope : 0;
    }

    public function hasScope()
    {
        return isset($this->Scope);
    }

    public function clearScope()
    {
        unset($this->Scope);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.SearchScope Scope = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Docflow\SearchScope::class);
        $this->Scope = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool InjectEntityContent = 5;</code>
     * @return bool
     */
    public function getInjectEntityContent()
    {
        return isset($this->InjectEntityContent) ? $this->InjectEntityContent : false;
    }

    public function hasInjectEntityContent()
    {
        return isset($this->InjectEntityContent);
    }

    public function clearInjectEntityContent()
    {
        unset($this->InjectEntityContent);
    }

    /**
     * Generated from protobuf field <code>optional bool InjectEntityContent = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setInjectEntityContent($var)
    {
        GPBUtil::checkBool($var);
        $this->InjectEntityContent = $var;

        return $this;
    }

}
