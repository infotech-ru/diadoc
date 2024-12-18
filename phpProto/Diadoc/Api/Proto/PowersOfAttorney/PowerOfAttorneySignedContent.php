<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: PowersOfAttorney/PowerOfAttorney.proto

namespace Diadoc\Api\Proto\PowersOfAttorney;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneySignedContent</code>
 */
class PowerOfAttorneySignedContent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Content_v3 Content = 1;</code>
     */
    protected $Content = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Content_v3 Signature = 2;</code>
     */
    protected $Signature = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\Content_v3 $Content
     *     @type \Diadoc\Api\Proto\Content_v3 $Signature
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PowersOfAttorney\PowerOfAttorney::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Content_v3 Content = 1;</code>
     * @return \Diadoc\Api\Proto\Content_v3|null
     */
    public function getContent()
    {
        return $this->Content;
    }

    public function hasContent()
    {
        return isset($this->Content);
    }

    public function clearContent()
    {
        unset($this->Content);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Content_v3 Content = 1;</code>
     * @param \Diadoc\Api\Proto\Content_v3 $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Content_v3::class);
        $this->Content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Content_v3 Signature = 2;</code>
     * @return \Diadoc\Api\Proto\Content_v3|null
     */
    public function getSignature()
    {
        return $this->Signature;
    }

    public function hasSignature()
    {
        return isset($this->Signature);
    }

    public function clearSignature()
    {
        unset($this->Signature);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Content_v3 Signature = 2;</code>
     * @param \Diadoc\Api\Proto\Content_v3 $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Content_v3::class);
        $this->Signature = $var;

        return $this;
    }

}
