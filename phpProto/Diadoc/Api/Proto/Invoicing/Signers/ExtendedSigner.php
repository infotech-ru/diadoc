<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/ExtendedSigner.proto

namespace Diadoc\Api\Proto\Invoicing\Signers;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Invoicing.Signers.ExtendedSigner</code>
 */
class ExtendedSigner extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string BoxId = 1;</code>
     */
    protected $BoxId = null;
    /**
     * Generated from protobuf field <code>optional bytes SignerCertificate = 2;</code>
     */
    protected $SignerCertificate = null;
    /**
     * Generated from protobuf field <code>optional string SignerCertificateThumbprint = 3;</code>
     */
    protected $SignerCertificateThumbprint = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Signers.ExtendedSignerDetails SignerDetails = 4;</code>
     */
    protected $SignerDetails = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Events.PowerOfAttorneyToPost PowerOfAttorney = 5;</code>
     */
    protected $PowerOfAttorney = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $BoxId
     *     @type string $SignerCertificate
     *     @type string $SignerCertificateThumbprint
     *     @type \Diadoc\Api\Proto\Invoicing\Signers\ExtendedSignerDetails $SignerDetails
     *     @type \Diadoc\Api\Proto\Events\PowerOfAttorneyToPost $PowerOfAttorney
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\ExtendedSigner::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string BoxId = 1;</code>
     * @return string
     */
    public function getBoxId()
    {
        return isset($this->BoxId) ? $this->BoxId : '';
    }

    public function hasBoxId()
    {
        return isset($this->BoxId);
    }

    public function clearBoxId()
    {
        unset($this->BoxId);
    }

    /**
     * Generated from protobuf field <code>optional string BoxId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBoxId($var)
    {
        GPBUtil::checkString($var, True);
        $this->BoxId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bytes SignerCertificate = 2;</code>
     * @return string
     */
    public function getSignerCertificate()
    {
        return isset($this->SignerCertificate) ? $this->SignerCertificate : '';
    }

    public function hasSignerCertificate()
    {
        return isset($this->SignerCertificate);
    }

    public function clearSignerCertificate()
    {
        unset($this->SignerCertificate);
    }

    /**
     * Generated from protobuf field <code>optional bytes SignerCertificate = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSignerCertificate($var)
    {
        GPBUtil::checkString($var, False);
        $this->SignerCertificate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string SignerCertificateThumbprint = 3;</code>
     * @return string
     */
    public function getSignerCertificateThumbprint()
    {
        return isset($this->SignerCertificateThumbprint) ? $this->SignerCertificateThumbprint : '';
    }

    public function hasSignerCertificateThumbprint()
    {
        return isset($this->SignerCertificateThumbprint);
    }

    public function clearSignerCertificateThumbprint()
    {
        unset($this->SignerCertificateThumbprint);
    }

    /**
     * Generated from protobuf field <code>optional string SignerCertificateThumbprint = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSignerCertificateThumbprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->SignerCertificateThumbprint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Signers.ExtendedSignerDetails SignerDetails = 4;</code>
     * @return \Diadoc\Api\Proto\Invoicing\Signers\ExtendedSignerDetails|null
     */
    public function getSignerDetails()
    {
        return $this->SignerDetails;
    }

    public function hasSignerDetails()
    {
        return isset($this->SignerDetails);
    }

    public function clearSignerDetails()
    {
        unset($this->SignerDetails);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Invoicing.Signers.ExtendedSignerDetails SignerDetails = 4;</code>
     * @param \Diadoc\Api\Proto\Invoicing\Signers\ExtendedSignerDetails $var
     * @return $this
     */
    public function setSignerDetails($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Invoicing\Signers\ExtendedSignerDetails::class);
        $this->SignerDetails = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Events.PowerOfAttorneyToPost PowerOfAttorney = 5;</code>
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
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Events.PowerOfAttorneyToPost PowerOfAttorney = 5;</code>
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
