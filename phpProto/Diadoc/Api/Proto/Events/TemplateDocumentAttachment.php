<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Api\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Events.TemplateDocumentAttachment</code>
 */
class TemplateDocumentAttachment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Events.UnsignedContent UnsignedContent = 1;</code>
     */
    protected $UnsignedContent = null;
    /**
     * Generated from protobuf field <code>optional string Comment = 2;</code>
     */
    protected $Comment = null;
    /**
     * Generated from protobuf field <code>string TypeNamedId = 3;</code>
     */
    protected $TypeNamedId = '';
    /**
     * Generated from protobuf field <code>optional string Function = 4;</code>
     */
    protected $Function = null;
    /**
     * Generated from protobuf field <code>optional string Version = 5;</code>
     */
    protected $Version = null;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.MetadataItem Metadata = 6;</code>
     */
    private $Metadata;
    /**
     * Generated from protobuf field <code>optional int32 WorkflowId = 7;</code>
     */
    protected $WorkflowId = null;
    /**
     * Generated from protobuf field <code>optional string CustomDocumentId = 8;</code>
     */
    protected $CustomDocumentId = null;
    /**
     * Generated from protobuf field <code>optional string EditingSettingId = 9;</code>
     */
    protected $EditingSettingId = null;
    /**
     * Generated from protobuf field <code>optional bool NeedRecipientSignature = 10;</code>
     */
    protected $NeedRecipientSignature = null;
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Events.PredefinedRecipientTitle PredefinedRecipientTitle = 11;</code>
     */
    protected $PredefinedRecipientTitle = null;
    /**
     * Generated from protobuf field <code>optional bool RefusalDisabled = 12;</code>
     */
    protected $RefusalDisabled = null;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.CustomDataItem CustomData = 13;</code>
     */
    private $CustomData;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\Events\UnsignedContent $UnsignedContent
     *     @type string $Comment
     *     @type string $TypeNamedId
     *     @type string $Function
     *     @type string $Version
     *     @type array<\Diadoc\Api\Proto\Events\MetadataItem>|\Google\Protobuf\Internal\RepeatedField $Metadata
     *     @type int $WorkflowId
     *     @type string $CustomDocumentId
     *     @type string $EditingSettingId
     *     @type bool $NeedRecipientSignature
     *     @type \Diadoc\Api\Proto\Events\PredefinedRecipientTitle $PredefinedRecipientTitle
     *     @type bool $RefusalDisabled
     *     @type array<\Diadoc\Api\Proto\CustomDataItem>|\Google\Protobuf\Internal\RepeatedField $CustomData
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Events.UnsignedContent UnsignedContent = 1;</code>
     * @return \Diadoc\Api\Proto\Events\UnsignedContent|null
     */
    public function getUnsignedContent()
    {
        return $this->UnsignedContent;
    }

    public function hasUnsignedContent()
    {
        return isset($this->UnsignedContent);
    }

    public function clearUnsignedContent()
    {
        unset($this->UnsignedContent);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Events.UnsignedContent UnsignedContent = 1;</code>
     * @param \Diadoc\Api\Proto\Events\UnsignedContent $var
     * @return $this
     */
    public function setUnsignedContent($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Events\UnsignedContent::class);
        $this->UnsignedContent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string Comment = 2;</code>
     * @return string
     */
    public function getComment()
    {
        return isset($this->Comment) ? $this->Comment : '';
    }

    public function hasComment()
    {
        return isset($this->Comment);
    }

    public function clearComment()
    {
        unset($this->Comment);
    }

    /**
     * Generated from protobuf field <code>optional string Comment = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setComment($var)
    {
        GPBUtil::checkString($var, True);
        $this->Comment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TypeNamedId = 3;</code>
     * @return string
     */
    public function getTypeNamedId()
    {
        return $this->TypeNamedId;
    }

    /**
     * Generated from protobuf field <code>string TypeNamedId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTypeNamedId($var)
    {
        GPBUtil::checkString($var, True);
        $this->TypeNamedId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string Function = 4;</code>
     * @return string
     */
    public function getFunction()
    {
        return isset($this->Function) ? $this->Function : '';
    }

    public function hasFunction()
    {
        return isset($this->Function);
    }

    public function clearFunction()
    {
        unset($this->Function);
    }

    /**
     * Generated from protobuf field <code>optional string Function = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFunction($var)
    {
        GPBUtil::checkString($var, True);
        $this->Function = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string Version = 5;</code>
     * @return string
     */
    public function getVersion()
    {
        return isset($this->Version) ? $this->Version : '';
    }

    public function hasVersion()
    {
        return isset($this->Version);
    }

    public function clearVersion()
    {
        unset($this->Version);
    }

    /**
     * Generated from protobuf field <code>optional string Version = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->Version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.MetadataItem Metadata = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetadata()
    {
        return $this->Metadata;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.MetadataItem Metadata = 6;</code>
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
     * Generated from protobuf field <code>optional int32 WorkflowId = 7;</code>
     * @return int
     */
    public function getWorkflowId()
    {
        return isset($this->WorkflowId) ? $this->WorkflowId : 0;
    }

    public function hasWorkflowId()
    {
        return isset($this->WorkflowId);
    }

    public function clearWorkflowId()
    {
        unset($this->WorkflowId);
    }

    /**
     * Generated from protobuf field <code>optional int32 WorkflowId = 7;</code>
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
     * Generated from protobuf field <code>optional string CustomDocumentId = 8;</code>
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
     * Generated from protobuf field <code>optional string CustomDocumentId = 8;</code>
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
     * Generated from protobuf field <code>optional string EditingSettingId = 9;</code>
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
     * Generated from protobuf field <code>optional string EditingSettingId = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setEditingSettingId($var)
    {
        GPBUtil::checkString($var, True);
        $this->EditingSettingId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool NeedRecipientSignature = 10;</code>
     * @return bool
     */
    public function getNeedRecipientSignature()
    {
        return isset($this->NeedRecipientSignature) ? $this->NeedRecipientSignature : false;
    }

    public function hasNeedRecipientSignature()
    {
        return isset($this->NeedRecipientSignature);
    }

    public function clearNeedRecipientSignature()
    {
        unset($this->NeedRecipientSignature);
    }

    /**
     * Generated from protobuf field <code>optional bool NeedRecipientSignature = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setNeedRecipientSignature($var)
    {
        GPBUtil::checkBool($var);
        $this->NeedRecipientSignature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Events.PredefinedRecipientTitle PredefinedRecipientTitle = 11;</code>
     * @return \Diadoc\Api\Proto\Events\PredefinedRecipientTitle|null
     */
    public function getPredefinedRecipientTitle()
    {
        return $this->PredefinedRecipientTitle;
    }

    public function hasPredefinedRecipientTitle()
    {
        return isset($this->PredefinedRecipientTitle);
    }

    public function clearPredefinedRecipientTitle()
    {
        unset($this->PredefinedRecipientTitle);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.Events.PredefinedRecipientTitle PredefinedRecipientTitle = 11;</code>
     * @param \Diadoc\Api\Proto\Events\PredefinedRecipientTitle $var
     * @return $this
     */
    public function setPredefinedRecipientTitle($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Events\PredefinedRecipientTitle::class);
        $this->PredefinedRecipientTitle = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool RefusalDisabled = 12;</code>
     * @return bool
     */
    public function getRefusalDisabled()
    {
        return isset($this->RefusalDisabled) ? $this->RefusalDisabled : false;
    }

    public function hasRefusalDisabled()
    {
        return isset($this->RefusalDisabled);
    }

    public function clearRefusalDisabled()
    {
        unset($this->RefusalDisabled);
    }

    /**
     * Generated from protobuf field <code>optional bool RefusalDisabled = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setRefusalDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->RefusalDisabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.CustomDataItem CustomData = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomData()
    {
        return $this->CustomData;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.CustomDataItem CustomData = 13;</code>
     * @param array<\Diadoc\Api\Proto\CustomDataItem>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\CustomDataItem::class);
        $this->CustomData = $arr;

        return $this;
    }

}

