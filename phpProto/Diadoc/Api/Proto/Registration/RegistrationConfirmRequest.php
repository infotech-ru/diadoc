<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Registration/RegistrationRequest.proto

namespace Diadoc\Api\Proto\Registration;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Registration.RegistrationConfirmRequest</code>
 */
class RegistrationConfirmRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional bytes CertificateContent = 1;</code>
     */
    protected $CertificateContent = null;
    /**
     * Generated from protobuf field <code>optional string Thumbprint = 2;</code>
     */
    protected $Thumbprint = null;
    /**
     * Generated from protobuf field <code>bytes DataToSign = 3;</code>
     */
    protected $DataToSign = '';
    /**
     * Generated from protobuf field <code>bytes Signature = 4;</code>
     */
    protected $Signature = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $CertificateContent
     *     @type string $Thumbprint
     *     @type string $DataToSign
     *     @type string $Signature
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Registration\RegistrationRequest::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional bytes CertificateContent = 1;</code>
     * @return string
     */
    public function getCertificateContent()
    {
        return isset($this->CertificateContent) ? $this->CertificateContent : '';
    }

    public function hasCertificateContent()
    {
        return isset($this->CertificateContent);
    }

    public function clearCertificateContent()
    {
        unset($this->CertificateContent);
    }

    /**
     * Generated from protobuf field <code>optional bytes CertificateContent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCertificateContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->CertificateContent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string Thumbprint = 2;</code>
     * @return string
     */
    public function getThumbprint()
    {
        return isset($this->Thumbprint) ? $this->Thumbprint : '';
    }

    public function hasThumbprint()
    {
        return isset($this->Thumbprint);
    }

    public function clearThumbprint()
    {
        unset($this->Thumbprint);
    }

    /**
     * Generated from protobuf field <code>optional string Thumbprint = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setThumbprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->Thumbprint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes DataToSign = 3;</code>
     * @return string
     */
    public function getDataToSign()
    {
        return $this->DataToSign;
    }

    /**
     * Generated from protobuf field <code>bytes DataToSign = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDataToSign($var)
    {
        GPBUtil::checkString($var, False);
        $this->DataToSign = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes Signature = 4;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->Signature;
    }

    /**
     * Generated from protobuf field <code>bytes Signature = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->Signature = $var;

        return $this;
    }

}

