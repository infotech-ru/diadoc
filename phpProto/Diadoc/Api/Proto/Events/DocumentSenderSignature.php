<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Api\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Events.DocumentSenderSignature</code>
 */
class DocumentSenderSignature extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ParentEntityId = 1;</code>
     */
    protected $ParentEntityId = '';
    /**
     * Generated from protobuf field <code>optional bytes Signature = 2;</code>
     */
    protected $Signature = null;
    /**
     * Generated from protobuf field <code>optional bool SignWithTestSignature = 4;</code>
     */
    protected $SignWithTestSignature = null;
    /**
     * Generated from protobuf field <code>optional string PatchedContentId = 5;</code>
     */
    protected $PatchedContentId = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Events.PowerOfAttorneyToPost PowerOfAttorney = 6;</code>
     */
    protected $PowerOfAttorney = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ParentEntityId
     *     @type string $Signature
     *     @type bool $SignWithTestSignature
     *     @type string $PatchedContentId
     *     @type \Diadoc\Api\Proto\Events\PowerOfAttorneyToPost $PowerOfAttorney
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ParentEntityId = 1;</code>
     * @return string
     */
    public function getParentEntityId()
    {
        return $this->ParentEntityId;
    }

    /**
     * Generated from protobuf field <code>string ParentEntityId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParentEntityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ParentEntityId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bytes Signature = 2;</code>
     * @return string
     */
    public function getSignature()
    {
        return isset($this->Signature) ? $this->Signature : '';
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
     * Generated from protobuf field <code>optional bytes Signature = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->Signature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool SignWithTestSignature = 4;</code>
     * @return bool
     */
    public function getSignWithTestSignature()
    {
        return isset($this->SignWithTestSignature) ? $this->SignWithTestSignature : false;
    }

    public function hasSignWithTestSignature()
    {
        return isset($this->SignWithTestSignature);
    }

    public function clearSignWithTestSignature()
    {
        unset($this->SignWithTestSignature);
    }

    /**
     * Generated from protobuf field <code>optional bool SignWithTestSignature = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setSignWithTestSignature($var)
    {
        GPBUtil::checkBool($var);
        $this->SignWithTestSignature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string PatchedContentId = 5;</code>
     * @return string
     */
    public function getPatchedContentId()
    {
        return isset($this->PatchedContentId) ? $this->PatchedContentId : '';
    }

    public function hasPatchedContentId()
    {
        return isset($this->PatchedContentId);
    }

    public function clearPatchedContentId()
    {
        unset($this->PatchedContentId);
    }

    /**
     * Generated from protobuf field <code>optional string PatchedContentId = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPatchedContentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->PatchedContentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Events.PowerOfAttorneyToPost PowerOfAttorney = 6;</code>
     * @return \Diadoc\Api\Proto\Events\PowerOfAttorneyToPost|null
     */
    public function getPowerOfAttorney()
    {
        return $this->PowerOfAttorney;
    }

    public function hasPowerOfAttorney()
    {
        return isset($this->PowerOfAttorney);
    }

    public function clearPowerOfAttorney()
    {
        unset($this->PowerOfAttorney);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Events.PowerOfAttorneyToPost PowerOfAttorney = 6;</code>
     * @param \Diadoc\Api\Proto\Events\PowerOfAttorneyToPost $var
     * @return $this
     */
    public function setPowerOfAttorney($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Events\PowerOfAttorneyToPost::class);
        $this->PowerOfAttorney = $var;

        return $this;
    }

}

