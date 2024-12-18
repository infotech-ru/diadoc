<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Api\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Events.SupplementaryAgreementAttachment</code>
 */
class SupplementaryAgreementAttachment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Events.SignedContent SignedContent = 1;</code>
     */
    protected $SignedContent = null;
    /**
     * Generated from protobuf field <code>string FileName = 2;</code>
     */
    protected $FileName = '';
    /**
     * Generated from protobuf field <code>optional string Comment = 3;</code>
     */
    protected $Comment = null;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.DocumentId InitialDocumentIds = 4;</code>
     */
    private $InitialDocumentIds;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.DocumentId SubordinateDocumentIds = 5;</code>
     */
    private $SubordinateDocumentIds;
    /**
     * Generated from protobuf field <code>optional string CustomDocumentId = 6;</code>
     */
    protected $CustomDocumentId = null;
    /**
     * Generated from protobuf field <code>string DocumentDate = 7;</code>
     */
    protected $DocumentDate = '';
    /**
     * Generated from protobuf field <code>string DocumentNumber = 8;</code>
     */
    protected $DocumentNumber = '';
    /**
     * Generated from protobuf field <code>optional string Total = 9;</code>
     */
    protected $Total = null;
    /**
     * Generated from protobuf field <code>string ContractNumber = 10;</code>
     */
    protected $ContractNumber = '';
    /**
     * Generated from protobuf field <code>string ContractDate = 11;</code>
     */
    protected $ContractDate = '';
    /**
     * Generated from protobuf field <code>optional string ContractType = 12;</code>
     */
    protected $ContractType = null;
    /**
     * Generated from protobuf field <code>optional bool NeedReceipt = 13;</code>
     */
    protected $NeedReceipt = null;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.CustomDataItem CustomData = 14;</code>
     */
    private $CustomData;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\Events\SignedContent $SignedContent
     *     @type string $FileName
     *     @type string $Comment
     *     @type array<\Diadoc\Api\Proto\DocumentId>|\Google\Protobuf\Internal\RepeatedField $InitialDocumentIds
     *     @type array<\Diadoc\Api\Proto\DocumentId>|\Google\Protobuf\Internal\RepeatedField $SubordinateDocumentIds
     *     @type string $CustomDocumentId
     *     @type string $DocumentDate
     *     @type string $DocumentNumber
     *     @type string $Total
     *     @type string $ContractNumber
     *     @type string $ContractDate
     *     @type string $ContractType
     *     @type bool $NeedReceipt
     *     @type array<\Diadoc\Api\Proto\CustomDataItem>|\Google\Protobuf\Internal\RepeatedField $CustomData
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Events.SignedContent SignedContent = 1;</code>
     * @return \Diadoc\Api\Proto\Events\SignedContent|null
     */
    public function getSignedContent()
    {
        return $this->SignedContent;
    }

    public function hasSignedContent()
    {
        return isset($this->SignedContent);
    }

    public function clearSignedContent()
    {
        unset($this->SignedContent);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.Events.SignedContent SignedContent = 1;</code>
     * @param \Diadoc\Api\Proto\Events\SignedContent $var
     * @return $this
     */
    public function setSignedContent($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\Events\SignedContent::class);
        $this->SignedContent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string FileName = 2;</code>
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * Generated from protobuf field <code>string FileName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string Comment = 3;</code>
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
     * Generated from protobuf field <code>optional string Comment = 3;</code>
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
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.DocumentId InitialDocumentIds = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInitialDocumentIds()
    {
        return $this->InitialDocumentIds;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.DocumentId InitialDocumentIds = 4;</code>
     * @param array<\Diadoc\Api\Proto\DocumentId>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInitialDocumentIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\DocumentId::class);
        $this->InitialDocumentIds = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.DocumentId SubordinateDocumentIds = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubordinateDocumentIds()
    {
        return $this->SubordinateDocumentIds;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.DocumentId SubordinateDocumentIds = 5;</code>
     * @param array<\Diadoc\Api\Proto\DocumentId>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubordinateDocumentIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\DocumentId::class);
        $this->SubordinateDocumentIds = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string CustomDocumentId = 6;</code>
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
     * Generated from protobuf field <code>optional string CustomDocumentId = 6;</code>
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
     * Generated from protobuf field <code>string DocumentDate = 7;</code>
     * @return string
     */
    public function getDocumentDate()
    {
        return $this->DocumentDate;
    }

    /**
     * Generated from protobuf field <code>string DocumentDate = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->DocumentDate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string DocumentNumber = 8;</code>
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }

    /**
     * Generated from protobuf field <code>string DocumentNumber = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->DocumentNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string Total = 9;</code>
     * @return string
     */
    public function getTotal()
    {
        return isset($this->Total) ? $this->Total : '';
    }

    public function hasTotal()
    {
        return isset($this->Total);
    }

    public function clearTotal()
    {
        unset($this->Total);
    }

    /**
     * Generated from protobuf field <code>optional string Total = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkString($var, True);
        $this->Total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ContractNumber = 10;</code>
     * @return string
     */
    public function getContractNumber()
    {
        return $this->ContractNumber;
    }

    /**
     * Generated from protobuf field <code>string ContractNumber = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setContractNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->ContractNumber = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ContractDate = 11;</code>
     * @return string
     */
    public function getContractDate()
    {
        return $this->ContractDate;
    }

    /**
     * Generated from protobuf field <code>string ContractDate = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setContractDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->ContractDate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string ContractType = 12;</code>
     * @return string
     */
    public function getContractType()
    {
        return isset($this->ContractType) ? $this->ContractType : '';
    }

    public function hasContractType()
    {
        return isset($this->ContractType);
    }

    public function clearContractType()
    {
        unset($this->ContractType);
    }

    /**
     * Generated from protobuf field <code>optional string ContractType = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setContractType($var)
    {
        GPBUtil::checkString($var, True);
        $this->ContractType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool NeedReceipt = 13;</code>
     * @return bool
     */
    public function getNeedReceipt()
    {
        return isset($this->NeedReceipt) ? $this->NeedReceipt : false;
    }

    public function hasNeedReceipt()
    {
        return isset($this->NeedReceipt);
    }

    public function clearNeedReceipt()
    {
        unset($this->NeedReceipt);
    }

    /**
     * Generated from protobuf field <code>optional bool NeedReceipt = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setNeedReceipt($var)
    {
        GPBUtil::checkBool($var);
        $this->NeedReceipt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.CustomDataItem CustomData = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomData()
    {
        return $this->CustomData;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.CustomDataItem CustomData = 14;</code>
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

