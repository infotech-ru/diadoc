<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Forwarding/ForwardingApi.proto

namespace Diadoc\Api\Proto\Forwarding;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Forwarding.GetForwardedDocumentEventsRequest</code>
 */
class GetForwardedDocumentEventsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.TimeBasedFilter Filter = 1;</code>
     */
    protected $Filter = null;
    /**
     * Generated from protobuf field <code>optional bytes AfterIndexKey = 2;</code>
     */
    protected $AfterIndexKey = null;
    /**
     * Generated from protobuf field <code>optional bool PopulateForwardedDocuments = 3;</code>
     */
    protected $PopulateForwardedDocuments = null;
    /**
     * Generated from protobuf field <code>optional bool InjectEntityContent = 4;</code>
     */
    protected $InjectEntityContent = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\TimeBasedFilter $Filter
     *     @type string $AfterIndexKey
     *     @type bool $PopulateForwardedDocuments
     *     @type bool $InjectEntityContent
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Forwarding\ForwardingApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.TimeBasedFilter Filter = 1;</code>
     * @return \Diadoc\Api\Proto\TimeBasedFilter|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    public function hasFilter()
    {
        return isset($this->Filter);
    }

    public function clearFilter()
    {
        unset($this->Filter);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.TimeBasedFilter Filter = 1;</code>
     * @param \Diadoc\Api\Proto\TimeBasedFilter $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\TimeBasedFilter::class);
        $this->Filter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bytes AfterIndexKey = 2;</code>
     * @return string
     */
    public function getAfterIndexKey()
    {
        return isset($this->AfterIndexKey) ? $this->AfterIndexKey : '';
    }

    public function hasAfterIndexKey()
    {
        return isset($this->AfterIndexKey);
    }

    public function clearAfterIndexKey()
    {
        unset($this->AfterIndexKey);
    }

    /**
     * Generated from protobuf field <code>optional bytes AfterIndexKey = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAfterIndexKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->AfterIndexKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool PopulateForwardedDocuments = 3;</code>
     * @return bool
     */
    public function getPopulateForwardedDocuments()
    {
        return isset($this->PopulateForwardedDocuments) ? $this->PopulateForwardedDocuments : false;
    }

    public function hasPopulateForwardedDocuments()
    {
        return isset($this->PopulateForwardedDocuments);
    }

    public function clearPopulateForwardedDocuments()
    {
        unset($this->PopulateForwardedDocuments);
    }

    /**
     * Generated from protobuf field <code>optional bool PopulateForwardedDocuments = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setPopulateForwardedDocuments($var)
    {
        GPBUtil::checkBool($var);
        $this->PopulateForwardedDocuments = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool InjectEntityContent = 4;</code>
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
     * Generated from protobuf field <code>optional bool InjectEntityContent = 4;</code>
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
