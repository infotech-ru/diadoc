<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GetOrganizationsByInnList.proto

namespace Diadoc\Api\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.OrganizationWithCounteragentStatus</code>
 */
class OrganizationWithCounteragentStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Organization Organization = 1;</code>
     */
    protected $Organization = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.CounteragentStatus CounteragentStatus = 2;</code>
     */
    protected $CounteragentStatus = null;
    /**
     * Generated from protobuf field <code>optional sfixed64 LastEventTimestampTicks = 3;</code>
     */
    protected $LastEventTimestampTicks = null;
    /**
     * Generated from protobuf field <code>optional string MessageFromCounteragent = 4;</code>
     */
    protected $MessageFromCounteragent = null;
    /**
     * Generated from protobuf field <code>optional string MessageToCounteragent = 5;</code>
     */
    protected $MessageToCounteragent = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.DocumentId InvitationDocumentId = 6;</code>
     */
    protected $InvitationDocumentId = null;
    /**
     * Generated from protobuf field <code>optional string CounteragentGroupId = 7;</code>
     */
    protected $CounteragentGroupId = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\Organization $Organization
     *     @type int $CounteragentStatus
     *     @type int|string $LastEventTimestampTicks
     *     @type string $MessageFromCounteragent
     *     @type string $MessageToCounteragent
     *     @type \Diadoc\Api\Proto\DocumentId $InvitationDocumentId
     *     @type string $CounteragentGroupId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GetOrganizationsByInnList::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Organization Organization = 1;</code>
     * @return \Diadoc\Api\Proto\Organization|null
     */
    public function getOrganization()
    {
        return $this->Organization;
    }

    public function hasOrganization()
    {
        return isset($this->Organization);
    }

    public function clearOrganization()
    {
        unset($this->Organization);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Organization Organization = 1;</code>
     * @param \Diadoc\Api\Proto\Organization $var
     * @return $this
     */
    public function setOrganization($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Organization::class);
        $this->Organization = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.CounteragentStatus CounteragentStatus = 2;</code>
     * @return int
     */
    public function getCounteragentStatus()
    {
        return isset($this->CounteragentStatus) ? $this->CounteragentStatus : 0;
    }

    public function hasCounteragentStatus()
    {
        return isset($this->CounteragentStatus);
    }

    public function clearCounteragentStatus()
    {
        unset($this->CounteragentStatus);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.CounteragentStatus CounteragentStatus = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCounteragentStatus($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\CounteragentStatus::class);
        $this->CounteragentStatus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional sfixed64 LastEventTimestampTicks = 3;</code>
     * @return int|string
     */
    public function getLastEventTimestampTicks()
    {
        return isset($this->LastEventTimestampTicks) ? $this->LastEventTimestampTicks : 0;
    }

    public function hasLastEventTimestampTicks()
    {
        return isset($this->LastEventTimestampTicks);
    }

    public function clearLastEventTimestampTicks()
    {
        unset($this->LastEventTimestampTicks);
    }

    /**
     * Generated from protobuf field <code>optional sfixed64 LastEventTimestampTicks = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastEventTimestampTicks($var)
    {
        GPBUtil::checkInt64($var);
        $this->LastEventTimestampTicks = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string MessageFromCounteragent = 4;</code>
     * @return string
     */
    public function getMessageFromCounteragent()
    {
        return isset($this->MessageFromCounteragent) ? $this->MessageFromCounteragent : '';
    }

    public function hasMessageFromCounteragent()
    {
        return isset($this->MessageFromCounteragent);
    }

    public function clearMessageFromCounteragent()
    {
        unset($this->MessageFromCounteragent);
    }

    /**
     * Generated from protobuf field <code>optional string MessageFromCounteragent = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageFromCounteragent($var)
    {
        GPBUtil::checkString($var, True);
        $this->MessageFromCounteragent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string MessageToCounteragent = 5;</code>
     * @return string
     */
    public function getMessageToCounteragent()
    {
        return isset($this->MessageToCounteragent) ? $this->MessageToCounteragent : '';
    }

    public function hasMessageToCounteragent()
    {
        return isset($this->MessageToCounteragent);
    }

    public function clearMessageToCounteragent()
    {
        unset($this->MessageToCounteragent);
    }

    /**
     * Generated from protobuf field <code>optional string MessageToCounteragent = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageToCounteragent($var)
    {
        GPBUtil::checkString($var, True);
        $this->MessageToCounteragent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.DocumentId InvitationDocumentId = 6;</code>
     * @return \Diadoc\Api\Proto\DocumentId|null
     */
    public function getInvitationDocumentId()
    {
        return $this->InvitationDocumentId;
    }

    public function hasInvitationDocumentId()
    {
        return isset($this->InvitationDocumentId);
    }

    public function clearInvitationDocumentId()
    {
        unset($this->InvitationDocumentId);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.DocumentId InvitationDocumentId = 6;</code>
     * @param \Diadoc\Api\Proto\DocumentId $var
     * @return $this
     */
    public function setInvitationDocumentId($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\DocumentId::class);
        $this->InvitationDocumentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string CounteragentGroupId = 7;</code>
     * @return string
     */
    public function getCounteragentGroupId()
    {
        return isset($this->CounteragentGroupId) ? $this->CounteragentGroupId : '';
    }

    public function hasCounteragentGroupId()
    {
        return isset($this->CounteragentGroupId);
    }

    public function clearCounteragentGroupId()
    {
        unset($this->CounteragentGroupId);
    }

    /**
     * Generated from protobuf field <code>optional string CounteragentGroupId = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCounteragentGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->CounteragentGroupId = $var;

        return $this;
    }

}

