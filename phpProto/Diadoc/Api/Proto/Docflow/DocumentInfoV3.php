<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocumentInfoV3.proto

namespace Diadoc\Api\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Docflow.DocumentInfoV3</code>
 */
class DocumentInfoV3 extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.FullVersion FullVersion = 1;</code>
     */
    protected $FullVersion = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Documents.MessageType MessageType = 2;</code>
     */
    protected $MessageType = 0;
    /**
     * Generated from protobuf field <code>int32 WorkflowId = 3;</code>
     */
    protected $WorkflowId = 0;
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.DocumentParticipants Participants = 4;</code>
     */
    protected $Participants = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.DocumentDirection DocumentDirection = 5;</code>
     */
    protected $DocumentDirection = 0;
    /**
     * Generated from protobuf field <code>string DepartmentId = 6;</code>
     */
    protected $DepartmentId = '';
    /**
     * Generated from protobuf field <code>optional string CustomDocumentId = 7;</code>
     */
    protected $CustomDocumentId = null;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.MetadataItem Metadata = 8;</code>
     */
    private $Metadata;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.CustomDataItem CustomData = 9;</code>
     */
    private $CustomData;
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.DocumentLinks DocumentLinks = 10;</code>
     */
    protected $DocumentLinks = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.PacketInfo PacketInfo = 11;</code>
     */
    protected $PacketInfo = null;
    /**
     * Generated from protobuf field <code>bool IsRead = 12;</code>
     */
    protected $IsRead = false;
    /**
     * Generated from protobuf field <code>bool IsDeleted = 13;</code>
     */
    protected $IsDeleted = false;
    /**
     * Generated from protobuf field <code>bool IsInvitation = 14;</code>
     */
    protected $IsInvitation = false;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentLetterInfo LetterInfo = 15;</code>
     */
    protected $LetterInfo = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDraftInfo DraftInfo = 16;</code>
     */
    protected $DraftInfo = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentTemplateInfo TemplateInfo = 17;</code>
     */
    protected $TemplateInfo = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.Origin Origin = 18;</code>
     */
    protected $Origin = null;
    /**
     * Generated from protobuf field <code>optional string EditingSettingId = 19;</code>
     */
    protected $EditingSettingId = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\FullVersion $FullVersion
     *     @type int $MessageType
     *     @type int $WorkflowId
     *     @type \Diadoc\Api\Proto\Docflow\DocumentParticipants $Participants
     *     @type int $DocumentDirection
     *     @type string $DepartmentId
     *     @type string $CustomDocumentId
     *     @type array<\Diadoc\Api\Proto\Events\MetadataItem>|\Google\Protobuf\Internal\RepeatedField $Metadata
     *     @type array<\Diadoc\Api\Proto\CustomDataItem>|\Google\Protobuf\Internal\RepeatedField $CustomData
     *     @type \Diadoc\Api\Proto\Docflow\DocumentLinks $DocumentLinks
     *     @type \Diadoc\Api\Proto\Docflow\PacketInfo $PacketInfo
     *     @type bool $IsRead
     *     @type bool $IsDeleted
     *     @type bool $IsInvitation
     *     @type \Diadoc\Api\Proto\Docflow\DocumentLetterInfo $LetterInfo
     *     @type \Diadoc\Api\Proto\Docflow\DocumentDraftInfo $DraftInfo
     *     @type \Diadoc\Api\Proto\Docflow\DocumentTemplateInfo $TemplateInfo
     *     @type \Diadoc\Api\Proto\Documents\Origin $Origin
     *     @type string $EditingSettingId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\DocumentInfoV3::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.FullVersion FullVersion = 1;</code>
     * @return \Diadoc\Api\Proto\FullVersion|null
     */
    public function getFullVersion()
    {
        return $this->FullVersion;
    }

    public function hasFullVersion()
    {
        return isset($this->FullVersion);
    }

    public function clearFullVersion()
    {
        unset($this->FullVersion);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.FullVersion FullVersion = 1;</code>
     * @param \Diadoc\Api\Proto\FullVersion $var
     * @return $this
     */
    public function setFullVersion($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\FullVersion::class);
        $this->FullVersion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Documents.MessageType MessageType = 2;</code>
     * @return int
     */
    public function getMessageType()
    {
        return $this->MessageType;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Documents.MessageType MessageType = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMessageType($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Documents\MessageType::class);
        $this->MessageType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 WorkflowId = 3;</code>
     * @return int
     */
    public function getWorkflowId()
    {
        return $this->WorkflowId;
    }

    /**
     * Generated from protobuf field <code>int32 WorkflowId = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setWorkflowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->WorkflowId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.DocumentParticipants Participants = 4;</code>
     * @return \Diadoc\Api\Proto\Docflow\DocumentParticipants|null
     */
    public function getParticipants()
    {
        return $this->Participants;
    }

    public function hasParticipants()
    {
        return isset($this->Participants);
    }

    public function clearParticipants()
    {
        unset($this->Participants);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.DocumentParticipants Participants = 4;</code>
     * @param \Diadoc\Api\Proto\Docflow\DocumentParticipants $var
     * @return $this
     */
    public function setParticipants($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\DocumentParticipants::class);
        $this->Participants = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.DocumentDirection DocumentDirection = 5;</code>
     * @return int
     */
    public function getDocumentDirection()
    {
        return $this->DocumentDirection;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.DocumentDirection DocumentDirection = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDocumentDirection($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\DocumentDirection::class);
        $this->DocumentDirection = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string DepartmentId = 6;</code>
     * @return string
     */
    public function getDepartmentId()
    {
        return $this->DepartmentId;
    }

    /**
     * Generated from protobuf field <code>string DepartmentId = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDepartmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->DepartmentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string CustomDocumentId = 7;</code>
     * @return string
     */
    public function getCustomDocumentId()
    {
        return isset($this->CustomDocumentId) ? $this->CustomDocumentId : '';
    }

    public function hasCustomDocumentId()
    {
        return isset($this->CustomDocumentId);
    }

    public function clearCustomDocumentId()
    {
        unset($this->CustomDocumentId);
    }

    /**
     * Generated from protobuf field <code>optional string CustomDocumentId = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomDocumentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->CustomDocumentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.MetadataItem Metadata = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetadata()
    {
        return $this->Metadata;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.MetadataItem Metadata = 8;</code>
     * @param array<\Diadoc\Api\Proto\Events\MetadataItem>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Events\MetadataItem::class);
        $this->Metadata = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.CustomDataItem CustomData = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomData()
    {
        return $this->CustomData;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.CustomDataItem CustomData = 9;</code>
     * @param array<\Diadoc\Api\Proto\CustomDataItem>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\CustomDataItem::class);
        $this->CustomData = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.DocumentLinks DocumentLinks = 10;</code>
     * @return \Diadoc\Api\Proto\Docflow\DocumentLinks|null
     */
    public function getDocumentLinks()
    {
        return $this->DocumentLinks;
    }

    public function hasDocumentLinks()
    {
        return isset($this->DocumentLinks);
    }

    public function clearDocumentLinks()
    {
        unset($this->DocumentLinks);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.DocumentLinks DocumentLinks = 10;</code>
     * @param \Diadoc\Api\Proto\Docflow\DocumentLinks $var
     * @return $this
     */
    public function setDocumentLinks($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\DocumentLinks::class);
        $this->DocumentLinks = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.PacketInfo PacketInfo = 11;</code>
     * @return \Diadoc\Api\Proto\Docflow\PacketInfo|null
     */
    public function getPacketInfo()
    {
        return $this->PacketInfo;
    }

    public function hasPacketInfo()
    {
        return isset($this->PacketInfo);
    }

    public function clearPacketInfo()
    {
        unset($this->PacketInfo);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Docflow.PacketInfo PacketInfo = 11;</code>
     * @param \Diadoc\Api\Proto\Docflow\PacketInfo $var
     * @return $this
     */
    public function setPacketInfo($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\PacketInfo::class);
        $this->PacketInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsRead = 12;</code>
     * @return bool
     */
    public function getIsRead()
    {
        return $this->IsRead;
    }

    /**
     * Generated from protobuf field <code>bool IsRead = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsRead($var)
    {
        GPBUtil::checkBool($var);
        $this->IsRead = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsDeleted = 13;</code>
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->IsDeleted;
    }

    /**
     * Generated from protobuf field <code>bool IsDeleted = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->IsDeleted = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsInvitation = 14;</code>
     * @return bool
     */
    public function getIsInvitation()
    {
        return $this->IsInvitation;
    }

    /**
     * Generated from protobuf field <code>bool IsInvitation = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsInvitation($var)
    {
        GPBUtil::checkBool($var);
        $this->IsInvitation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentLetterInfo LetterInfo = 15;</code>
     * @return \Diadoc\Api\Proto\Docflow\DocumentLetterInfo|null
     */
    public function getLetterInfo()
    {
        return $this->LetterInfo;
    }

    public function hasLetterInfo()
    {
        return isset($this->LetterInfo);
    }

    public function clearLetterInfo()
    {
        unset($this->LetterInfo);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentLetterInfo LetterInfo = 15;</code>
     * @param \Diadoc\Api\Proto\Docflow\DocumentLetterInfo $var
     * @return $this
     */
    public function setLetterInfo($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\DocumentLetterInfo::class);
        $this->LetterInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDraftInfo DraftInfo = 16;</code>
     * @return \Diadoc\Api\Proto\Docflow\DocumentDraftInfo|null
     */
    public function getDraftInfo()
    {
        return $this->DraftInfo;
    }

    public function hasDraftInfo()
    {
        return isset($this->DraftInfo);
    }

    public function clearDraftInfo()
    {
        unset($this->DraftInfo);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentDraftInfo DraftInfo = 16;</code>
     * @param \Diadoc\Api\Proto\Docflow\DocumentDraftInfo $var
     * @return $this
     */
    public function setDraftInfo($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\DocumentDraftInfo::class);
        $this->DraftInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentTemplateInfo TemplateInfo = 17;</code>
     * @return \Diadoc\Api\Proto\Docflow\DocumentTemplateInfo|null
     */
    public function getTemplateInfo()
    {
        return $this->TemplateInfo;
    }

    public function hasTemplateInfo()
    {
        return isset($this->TemplateInfo);
    }

    public function clearTemplateInfo()
    {
        unset($this->TemplateInfo);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Docflow.DocumentTemplateInfo TemplateInfo = 17;</code>
     * @param \Diadoc\Api\Proto\Docflow\DocumentTemplateInfo $var
     * @return $this
     */
    public function setTemplateInfo($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Docflow\DocumentTemplateInfo::class);
        $this->TemplateInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.Origin Origin = 18;</code>
     * @return \Diadoc\Api\Proto\Documents\Origin|null
     */
    public function getOrigin()
    {
        return $this->Origin;
    }

    public function hasOrigin()
    {
        return isset($this->Origin);
    }

    public function clearOrigin()
    {
        unset($this->Origin);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Documents.Origin Origin = 18;</code>
     * @param \Diadoc\Api\Proto\Documents\Origin $var
     * @return $this
     */
    public function setOrigin($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Documents\Origin::class);
        $this->Origin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string EditingSettingId = 19;</code>
     * @return string
     */
    public function getEditingSettingId()
    {
        return isset($this->EditingSettingId) ? $this->EditingSettingId : '';
    }

    public function hasEditingSettingId()
    {
        return isset($this->EditingSettingId);
    }

    public function clearEditingSettingId()
    {
        unset($this->EditingSettingId);
    }

    /**
     * Generated from protobuf field <code>optional string EditingSettingId = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setEditingSettingId($var)
    {
        GPBUtil::checkString($var, True);
        $this->EditingSettingId = $var;

        return $this;
    }

}

