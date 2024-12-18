<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/UniversalTransferDocumentInfo.proto

namespace Diadoc\Api\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Invoicing.TransferBase</code>
 */
class TransferBase extends \Google\Protobuf\Internal\Message
{
    /**
     * Наименование документа-основания отгрузки // НаимОсн
     *
     * Generated from protobuf field <code>string BaseDocumentName = 1;</code>
     */
    protected $BaseDocumentName = '';
    /**
     * Номер документа-основания отгрузки // НомОсн
     *
     * Generated from protobuf field <code>optional string BaseDocumentNumber = 2;</code>
     */
    protected $BaseDocumentNumber = null;
    /**
     * Дата документа-основания отгрузки // ДатаОсн
     *
     * Generated from protobuf field <code>optional string BaseDocumentDate = 3;</code>
     */
    protected $BaseDocumentDate = null;
    /**
     * Дополнительные сведения документа-основания отгрузки // ДопСвОсн
     *
     * Generated from protobuf field <code>optional string BaseDocumentInfo = 4;</code>
     */
    protected $BaseDocumentInfo = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $BaseDocumentName
     *           Наименование документа-основания отгрузки // НаимОсн
     *     @type string $BaseDocumentNumber
     *           Номер документа-основания отгрузки // НомОсн
     *     @type string $BaseDocumentDate
     *           Дата документа-основания отгрузки // ДатаОсн
     *     @type string $BaseDocumentInfo
     *           Дополнительные сведения документа-основания отгрузки // ДопСвОсн
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\UniversalTransferDocumentInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Наименование документа-основания отгрузки // НаимОсн
     *
     * Generated from protobuf field <code>string BaseDocumentName = 1;</code>
     * @return string
     */
    public function getBaseDocumentName()
    {
        return $this->BaseDocumentName;
    }

    /**
     * Наименование документа-основания отгрузки // НаимОсн
     *
     * Generated from protobuf field <code>string BaseDocumentName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseDocumentName($var)
    {
        GPBUtil::checkString($var, True);
        $this->BaseDocumentName = $var;

        return $this;
    }

    /**
     * Номер документа-основания отгрузки // НомОсн
     *
     * Generated from protobuf field <code>optional string BaseDocumentNumber = 2;</code>
     * @return string
     */
    public function getBaseDocumentNumber()
    {
        return isset($this->BaseDocumentNumber) ? $this->BaseDocumentNumber : '';
    }

    public function hasBaseDocumentNumber()
    {
        return isset($this->BaseDocumentNumber);
    }

    public function clearBaseDocumentNumber()
    {
        unset($this->BaseDocumentNumber);
    }

    /**
     * Номер документа-основания отгрузки // НомОсн
     *
     * Generated from protobuf field <code>optional string BaseDocumentNumber = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseDocumentNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->BaseDocumentNumber = $var;

        return $this;
    }

    /**
     * Дата документа-основания отгрузки // ДатаОсн
     *
     * Generated from protobuf field <code>optional string BaseDocumentDate = 3;</code>
     * @return string
     */
    public function getBaseDocumentDate()
    {
        return isset($this->BaseDocumentDate) ? $this->BaseDocumentDate : '';
    }

    public function hasBaseDocumentDate()
    {
        return isset($this->BaseDocumentDate);
    }

    public function clearBaseDocumentDate()
    {
        unset($this->BaseDocumentDate);
    }

    /**
     * Дата документа-основания отгрузки // ДатаОсн
     *
     * Generated from protobuf field <code>optional string BaseDocumentDate = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseDocumentDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->BaseDocumentDate = $var;

        return $this;
    }

    /**
     * Дополнительные сведения документа-основания отгрузки // ДопСвОсн
     *
     * Generated from protobuf field <code>optional string BaseDocumentInfo = 4;</code>
     * @return string
     */
    public function getBaseDocumentInfo()
    {
        return isset($this->BaseDocumentInfo) ? $this->BaseDocumentInfo : '';
    }

    public function hasBaseDocumentInfo()
    {
        return isset($this->BaseDocumentInfo);
    }

    public function clearBaseDocumentInfo()
    {
        unset($this->BaseDocumentInfo);
    }

    /**
     * Дополнительные сведения документа-основания отгрузки // ДопСвОсн
     *
     * Generated from protobuf field <code>optional string BaseDocumentInfo = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseDocumentInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->BaseDocumentInfo = $var;

        return $this;
    }

}

