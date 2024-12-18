<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocflowV3.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.RevocationResponseDocflow</code>
 */
class RevocationResponseDocflow extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.SignatureV3 RecipientSignature = 1;</code>
     */
    protected $RecipientSignature = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.SignatureRejectionDocflow SignatureRejection = 2;</code>
     */
    protected $SignatureRejection = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\Docflow\SignatureV3 $RecipientSignature
     *     @type \Diadoc\Api\Proto\Docflow\SignatureRejectionDocflow $SignatureRejection
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\DocflowV3::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.SignatureV3 RecipientSignature = 1;</code>
     * @return \Diadoc\Api\Proto\Docflow\SignatureV3|null
     */
    public function getRecipientSignature()
    {
        return $this->RecipientSignature;
    }

    public function hasRecipientSignature()
    {
        return isset($this->RecipientSignature);
    }

    public function clearRecipientSignature()
    {
        unset($this->RecipientSignature);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.SignatureV3 RecipientSignature = 1;</code>
     * @param \Diadoc\Api\Proto\Docflow\SignatureV3 $var
     * @return $this
     */
    public function setRecipientSignature($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\SignatureV3::class);
        $this->RecipientSignature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.SignatureRejectionDocflow SignatureRejection = 2;</code>
     * @return \Diadoc\Api\Proto\Docflow\SignatureRejectionDocflow|null
     */
    public function getSignatureRejection()
    {
        return $this->SignatureRejection;
    }

    public function hasSignatureRejection()
    {
        return isset($this->SignatureRejection);
    }

    public function clearSignatureRejection()
    {
        unset($this->SignatureRejection);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.SignatureRejectionDocflow SignatureRejection = 2;</code>
     * @param \Diadoc\Api\Proto\Docflow\SignatureRejectionDocflow $var
     * @return $this
     */
    public function setSignatureRejection($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\SignatureRejectionDocflow::class);
        $this->SignatureRejection = $var;

        return $this;
    }

}
