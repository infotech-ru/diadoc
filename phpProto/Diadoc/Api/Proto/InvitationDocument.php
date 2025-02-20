<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: AcquireCounteragent.proto

namespace Diadoc\Api\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.InvitationDocument</code>
 */
class InvitationDocument extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Events.SignedContent SignedContent = 1;</code>
     */
    protected $SignedContent = null;
    /**
     * Generated from protobuf field <code>string FileName = 2;</code>
     */
    protected $FileName = '';
    /**
     * Generated from protobuf field <code>optional bool SignatureRequested = 3;</code>
     */
    protected $SignatureRequested = null;
    /**
     * Generated from protobuf field <code>optional string Type = 4;</code>
     */
    protected $Type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\Events\SignedContent $SignedContent
     *     @type string $FileName
     *     @type bool $SignatureRequested
     *     @type string $Type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\AcquireCounteragent::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Events.SignedContent SignedContent = 1;</code>
     * @return \Diadoc\Api\Proto\Events\SignedContent|null
     */
    public function getSignedContent()
    {
        return $this->SignedContent;
    }

    public function hasSignedContent()
    {
        return isset($this->SignedContent);
    }

    public function clearSignedContent()
    {
        unset($this->SignedContent);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Events.SignedContent SignedContent = 1;</code>
     * @param \Diadoc\Api\Proto\Events\SignedContent $var
     * @return $this
     */
    public function setSignedContent($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Events\SignedContent::class);
        $this->SignedContent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string FileName = 2;</code>
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * Generated from protobuf field <code>string FileName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool SignatureRequested = 3;</code>
     * @return bool
     */
    public function getSignatureRequested()
    {
        return isset($this->SignatureRequested) ? $this->SignatureRequested : false;
    }

    public function hasSignatureRequested()
    {
        return isset($this->SignatureRequested);
    }

    public function clearSignatureRequested()
    {
        unset($this->SignatureRequested);
    }

    /**
     * Generated from protobuf field <code>optional bool SignatureRequested = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setSignatureRequested($var)
    {
        GPBUtil::checkBool($var);
        $this->SignatureRequested = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string Type = 4;</code>
     * @return string
     */
    public function getType()
    {
        return isset($this->Type) ? $this->Type : '';
    }

    public function hasType()
    {
        return isset($this->Type);
    }

    public function clearType()
    {
        unset($this->Type);
    }

    /**
     * Generated from protobuf field <code>optional string Type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->Type = $var;

        return $this;
    }

}

