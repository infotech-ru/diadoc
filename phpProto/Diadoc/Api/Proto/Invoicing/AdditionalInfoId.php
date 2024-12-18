<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/UniversalTransferDocumentInfo.proto

namespace Diadoc\Api\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Invoicing.AdditionalInfoId</code>
 */
class AdditionalInfoId extends \Google\Protobuf\Internal\Message
{
    /**
     * Идентификатор файла информационного поля // ИдФайлИнфПол
     *
     * Generated from protobuf field <code>optional string InfoFileId = 1;</code>
     */
    protected $InfoFileId = null;
    /**
     * Текстовая информация // ТекстИнф
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.AdditionalInfo AdditionalInfo = 2;</code>
     */
    private $AdditionalInfo;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $InfoFileId
     *           Идентификатор файла информационного поля // ИдФайлИнфПол
     *     @type array<\Diadoc\Api\Proto\Invoicing\AdditionalInfo>|\Google\Protobuf\Internal\RepeatedField $AdditionalInfo
     *           Текстовая информация // ТекстИнф
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\UniversalTransferDocumentInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Идентификатор файла информационного поля // ИдФайлИнфПол
     *
     * Generated from protobuf field <code>optional string InfoFileId = 1;</code>
     * @return string
     */
    public function getInfoFileId()
    {
        return isset($this->InfoFileId) ? $this->InfoFileId : '';
    }

    public function hasInfoFileId()
    {
        return isset($this->InfoFileId);
    }

    public function clearInfoFileId()
    {
        unset($this->InfoFileId);
    }

    /**
     * Идентификатор файла информационного поля // ИдФайлИнфПол
     *
     * Generated from protobuf field <code>optional string InfoFileId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInfoFileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->InfoFileId = $var;

        return $this;
    }

    /**
     * Текстовая информация // ТекстИнф
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.AdditionalInfo AdditionalInfo = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }

    /**
     * Текстовая информация // ТекстИнф
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.AdditionalInfo AdditionalInfo = 2;</code>
     * @param array<\Diadoc\Api\Proto\Invoicing\AdditionalInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdditionalInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Invoicing\AdditionalInfo::class);
        $this->AdditionalInfo = $arr;

        return $this;
    }

}

