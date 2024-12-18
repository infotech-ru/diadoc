<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Api\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Events.UnsignedContent</code>
 */
class UnsignedContent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional bytes Content = 1;</code>
     */
    protected $Content = null;
    /**
     * Generated from protobuf field <code>optional string NameOnShelf = 2;</code>
     */
    protected $NameOnShelf = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Content
     *     @type string $NameOnShelf
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional bytes Content = 1;</code>
     * @return string
     */
    public function getContent()
    {
        return isset($this->Content) ? $this->Content : '';
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
     * Generated from protobuf field <code>optional bytes Content = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->Content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string NameOnShelf = 2;</code>
     * @return string
     */
    public function getNameOnShelf()
    {
        return isset($this->NameOnShelf) ? $this->NameOnShelf : '';
    }

    public function hasNameOnShelf()
    {
        return isset($this->NameOnShelf);
    }

    public function clearNameOnShelf()
    {
        unset($this->NameOnShelf);
    }

    /**
     * Generated from protobuf field <code>optional string NameOnShelf = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNameOnShelf($var)
    {
        GPBUtil::checkString($var, True);
        $this->NameOnShelf = $var;

        return $this;
    }

}
