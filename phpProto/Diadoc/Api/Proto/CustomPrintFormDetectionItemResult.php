<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: CustomPrintFormDetection.proto

namespace Diadoc\Api\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.CustomPrintFormDetectionItemResult</code>
 */
class CustomPrintFormDetectionItemResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.DocumentId DocumentId = 1;</code>
     */
    protected $DocumentId = null;
    /**
     * Generated from protobuf field <code>bool HasCustomPrintForm = 2;</code>
     */
    protected $HasCustomPrintForm = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Api\Proto\DocumentId $DocumentId
     *     @type bool $HasCustomPrintForm
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\CustomPrintFormDetection::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.DocumentId DocumentId = 1;</code>
     * @return \Diadoc\Api\Proto\DocumentId|null
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }

    public function hasDocumentId()
    {
        return isset($this->DocumentId);
    }

    public function clearDocumentId()
    {
        unset($this->DocumentId);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Api.Proto.DocumentId DocumentId = 1;</code>
     * @param \Diadoc\Api\Proto\DocumentId $var
     * @return $this
     */
    public function setDocumentId($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\DocumentId::class);
        $this->DocumentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool HasCustomPrintForm = 2;</code>
     * @return bool
     */
    public function getHasCustomPrintForm()
    {
        return $this->HasCustomPrintForm;
    }

    /**
     * Generated from protobuf field <code>bool HasCustomPrintForm = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasCustomPrintForm($var)
    {
        GPBUtil::checkBool($var);
        $this->HasCustomPrintForm = $var;

        return $this;
    }

}
