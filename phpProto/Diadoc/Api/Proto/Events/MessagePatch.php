<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-GetApi.proto

namespace Diadoc\Api\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Events.MessagePatch</code>
 */
class MessagePatch extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string MessageId = 1;</code>
     */
    protected $MessageId = '';
    /**
     * Generated from protobuf field <code>sfixed64 TimestampTicks = 2;</code>
     */
    protected $TimestampTicks = 0;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.Entity Entities = 3;</code>
     */
    private $Entities;
    /**
     * Generated from protobuf field <code>optional bool ForDraft = 4;</code>
     */
    protected $ForDraft = null;
    /**
     * Generated from protobuf field <code>optional bool DraftIsRecycled = 5;</code>
     */
    protected $DraftIsRecycled = null;
    /**
     * Generated from protobuf field <code>repeated string DraftIsTransformedToMessageIdList = 6;</code>
     */
    private $DraftIsTransformedToMessageIdList;
    /**
     * Generated from protobuf field <code>optional bool DraftIsLocked = 7;</code>
     */
    protected $DraftIsLocked = null;
    /**
     * Generated from protobuf field <code>optional bool MessageIsDeleted = 8;</code>
     */
    protected $MessageIsDeleted = null;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.EntityPatch EntityPatches = 9;</code>
     */
    private $EntityPatches;
    /**
     * Generated from protobuf field <code>optional bool MessageIsRestored = 10;</code>
     */
    protected $MessageIsRestored = null;
    /**
     * Generated from protobuf field <code>optional bool MessageIsDelivered = 11;</code>
     */
    protected $MessageIsDelivered = null;
    /**
     * Generated from protobuf field <code>optional string DeliveredPatchId = 12;</code>
     */
    protected $DeliveredPatchId = null;
    /**
     * Generated from protobuf field <code>string PatchId = 13;</code>
     */
    protected $PatchId = '';
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Documents.MessageType MessageType = 15;</code>
     */
    protected $MessageType = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $MessageId
     *     @type int|string $TimestampTicks
     *     @type array<\Diadoc\Api\Proto\Events\Entity>|\Google\Protobuf\Internal\RepeatedField $Entities
     *     @type bool $ForDraft
     *     @type bool $DraftIsRecycled
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $DraftIsTransformedToMessageIdList
     *     @type bool $DraftIsLocked
     *     @type bool $MessageIsDeleted
     *     @type array<\Diadoc\Api\Proto\Events\EntityPatch>|\Google\Protobuf\Internal\RepeatedField $EntityPatches
     *     @type bool $MessageIsRestored
     *     @type bool $MessageIsDelivered
     *     @type string $DeliveredPatchId
     *     @type string $PatchId
     *     @type int $MessageType
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessageGetApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string MessageId = 1;</code>
     * @return string
     */
    public function getMessageId()
    {
        return $this->MessageId;
    }

    /**
     * Generated from protobuf field <code>string MessageId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->MessageId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>sfixed64 TimestampTicks = 2;</code>
     * @return int|string
     */
    public function getTimestampTicks()
    {
        return $this->TimestampTicks;
    }

    /**
     * Generated from protobuf field <code>sfixed64 TimestampTicks = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestampTicks($var)
    {
        GPBUtil::checkInt64($var);
        $this->TimestampTicks = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.Entity Entities = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntities()
    {
        return $this->Entities;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.Entity Entities = 3;</code>
     * @param array<\Diadoc\Api\Proto\Events\Entity>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Events\Entity::class);
        $this->Entities = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool ForDraft = 4;</code>
     * @return bool
     */
    public function getForDraft()
    {
        return isset($this->ForDraft) ? $this->ForDraft : false;
    }

    public function hasForDraft()
    {
        return isset($this->ForDraft);
    }

    public function clearForDraft()
    {
        unset($this->ForDraft);
    }

    /**
     * Generated from protobuf field <code>optional bool ForDraft = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setForDraft($var)
    {
        GPBUtil::checkBool($var);
        $this->ForDraft = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool DraftIsRecycled = 5;</code>
     * @return bool
     */
    public function getDraftIsRecycled()
    {
        return isset($this->DraftIsRecycled) ? $this->DraftIsRecycled : false;
    }

    public function hasDraftIsRecycled()
    {
        return isset($this->DraftIsRecycled);
    }

    public function clearDraftIsRecycled()
    {
        unset($this->DraftIsRecycled);
    }

    /**
     * Generated from protobuf field <code>optional bool DraftIsRecycled = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setDraftIsRecycled($var)
    {
        GPBUtil::checkBool($var);
        $this->DraftIsRecycled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string DraftIsTransformedToMessageIdList = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDraftIsTransformedToMessageIdList()
    {
        return $this->DraftIsTransformedToMessageIdList;
    }

    /**
     * Generated from protobuf field <code>repeated string DraftIsTransformedToMessageIdList = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDraftIsTransformedToMessageIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->DraftIsTransformedToMessageIdList = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool DraftIsLocked = 7;</code>
     * @return bool
     */
    public function getDraftIsLocked()
    {
        return isset($this->DraftIsLocked) ? $this->DraftIsLocked : false;
    }

    public function hasDraftIsLocked()
    {
        return isset($this->DraftIsLocked);
    }

    public function clearDraftIsLocked()
    {
        unset($this->DraftIsLocked);
    }

    /**
     * Generated from protobuf field <code>optional bool DraftIsLocked = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setDraftIsLocked($var)
    {
        GPBUtil::checkBool($var);
        $this->DraftIsLocked = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool MessageIsDeleted = 8;</code>
     * @return bool
     */
    public function getMessageIsDeleted()
    {
        return isset($this->MessageIsDeleted) ? $this->MessageIsDeleted : false;
    }

    public function hasMessageIsDeleted()
    {
        return isset($this->MessageIsDeleted);
    }

    public function clearMessageIsDeleted()
    {
        unset($this->MessageIsDeleted);
    }

    /**
     * Generated from protobuf field <code>optional bool MessageIsDeleted = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setMessageIsDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->MessageIsDeleted = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.EntityPatch EntityPatches = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntityPatches()
    {
        return $this->EntityPatches;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.EntityPatch EntityPatches = 9;</code>
     * @param array<\Diadoc\Api\Proto\Events\EntityPatch>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntityPatches($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Events\EntityPatch::class);
        $this->EntityPatches = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool MessageIsRestored = 10;</code>
     * @return bool
     */
    public function getMessageIsRestored()
    {
        return isset($this->MessageIsRestored) ? $this->MessageIsRestored : false;
    }

    public function hasMessageIsRestored()
    {
        return isset($this->MessageIsRestored);
    }

    public function clearMessageIsRestored()
    {
        unset($this->MessageIsRestored);
    }

    /**
     * Generated from protobuf field <code>optional bool MessageIsRestored = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setMessageIsRestored($var)
    {
        GPBUtil::checkBool($var);
        $this->MessageIsRestored = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool MessageIsDelivered = 11;</code>
     * @return bool
     */
    public function getMessageIsDelivered()
    {
        return isset($this->MessageIsDelivered) ? $this->MessageIsDelivered : false;
    }

    public function hasMessageIsDelivered()
    {
        return isset($this->MessageIsDelivered);
    }

    public function clearMessageIsDelivered()
    {
        unset($this->MessageIsDelivered);
    }

    /**
     * Generated from protobuf field <code>optional bool MessageIsDelivered = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setMessageIsDelivered($var)
    {
        GPBUtil::checkBool($var);
        $this->MessageIsDelivered = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string DeliveredPatchId = 12;</code>
     * @return string
     */
    public function getDeliveredPatchId()
    {
        return isset($this->DeliveredPatchId) ? $this->DeliveredPatchId : '';
    }

    public function hasDeliveredPatchId()
    {
        return isset($this->DeliveredPatchId);
    }

    public function clearDeliveredPatchId()
    {
        unset($this->DeliveredPatchId);
    }

    /**
     * Generated from protobuf field <code>optional string DeliveredPatchId = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setDeliveredPatchId($var)
    {
        GPBUtil::checkString($var, True);
        $this->DeliveredPatchId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string PatchId = 13;</code>
     * @return string
     */
    public function getPatchId()
    {
        return $this->PatchId;
    }

    /**
     * Generated from protobuf field <code>string PatchId = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setPatchId($var)
    {
        GPBUtil::checkString($var, True);
        $this->PatchId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Documents.MessageType MessageType = 15;</code>
     * @return int
     */
    public function getMessageType()
    {
        return $this->MessageType;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Documents.MessageType MessageType = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setMessageType($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Api\Proto\Documents\MessageType::class);
        $this->MessageType = $var;

        return $this;
    }

}

