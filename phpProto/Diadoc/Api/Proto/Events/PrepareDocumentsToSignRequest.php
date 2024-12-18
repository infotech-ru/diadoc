<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Api\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Events.PrepareDocumentsToSignRequest</code>
 */
class PrepareDocumentsToSignRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string BoxId = 1;</code>
     */
    protected $BoxId = '';
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.DraftDocumentToPatch DraftDocuments = 2;</code>
     */
    private $DraftDocuments;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.DocumentToPatch Documents = 3;</code>
     */
    private $Documents;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.ContentToPatch Contents = 4;</code>
     */
    private $Contents;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $BoxId
     *     @type array<\Diadoc\Api\Proto\Events\DraftDocumentToPatch>|\Google\Protobuf\Internal\RepeatedField $DraftDocuments
     *     @type array<\Diadoc\Api\Proto\Events\DocumentToPatch>|\Google\Protobuf\Internal\RepeatedField $Documents
     *     @type array<\Diadoc\Api\Proto\Events\ContentToPatch>|\Google\Protobuf\Internal\RepeatedField $Contents
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string BoxId = 1;</code>
     * @return string
     */
    public function getBoxId()
    {
        return $this->BoxId;
    }

    /**
     * Generated from protobuf field <code>string BoxId = 1;</code>
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
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.DraftDocumentToPatch DraftDocuments = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDraftDocuments()
    {
        return $this->DraftDocuments;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.DraftDocumentToPatch DraftDocuments = 2;</code>
     * @param array<\Diadoc\Api\Proto\Events\DraftDocumentToPatch>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDraftDocuments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Events\DraftDocumentToPatch::class);
        $this->DraftDocuments = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.DocumentToPatch Documents = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDocuments()
    {
        return $this->Documents;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.DocumentToPatch Documents = 3;</code>
     * @param array<\Diadoc\Api\Proto\Events\DocumentToPatch>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDocuments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Events\DocumentToPatch::class);
        $this->Documents = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.ContentToPatch Contents = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContents()
    {
        return $this->Contents;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Events.ContentToPatch Contents = 4;</code>
     * @param array<\Diadoc\Api\Proto\Events\ContentToPatch>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Events\ContentToPatch::class);
        $this->Contents = $arr;

        return $this;
    }

}
