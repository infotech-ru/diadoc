<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/UniversalTransferDocumentInfo.proto

namespace Diadoc\Api\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Invoicing.InvoiceForCorrectionInfo</code>
 */
class InvoiceForCorrectionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * ДатаСчФ
     *
     * Generated from protobuf field <code>string InvoiceDate = 1;</code>
     */
    protected $InvoiceDate = '';
    /**
     * НомерСчФ
     *
     * Generated from protobuf field <code>string InvoiceNumber = 2;</code>
     */
    protected $InvoiceNumber = '';
    /**
     * С учетом исправления // ИспрСчФ
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.InvoiceRevisionInfo InvoiceRevisions = 3;</code>
     */
    private $InvoiceRevisions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $InvoiceDate
     *           ДатаСчФ
     *     @type string $InvoiceNumber
     *           НомерСчФ
     *     @type array<\Diadoc\Api\Proto\Invoicing\InvoiceRevisionInfo>|\Google\Protobuf\Internal\RepeatedField $InvoiceRevisions
     *           С учетом исправления // ИспрСчФ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\UniversalTransferDocumentInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * ДатаСчФ
     *
     * Generated from protobuf field <code>string InvoiceDate = 1;</code>
     * @return string
     */
    public function getInvoiceDate()
    {
        return $this->InvoiceDate;
    }

    /**
     * ДатаСчФ
     *
     * Generated from protobuf field <code>string InvoiceDate = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInvoiceDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->InvoiceDate = $var;

        return $this;
    }

    /**
     * НомерСчФ
     *
     * Generated from protobuf field <code>string InvoiceNumber = 2;</code>
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->InvoiceNumber;
    }

    /**
     * НомерСчФ
     *
     * Generated from protobuf field <code>string InvoiceNumber = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInvoiceNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->InvoiceNumber = $var;

        return $this;
    }

    /**
     * С учетом исправления // ИспрСчФ
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.InvoiceRevisionInfo InvoiceRevisions = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInvoiceRevisions()
    {
        return $this->InvoiceRevisions;
    }

    /**
     * С учетом исправления // ИспрСчФ
     *
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Invoicing.InvoiceRevisionInfo InvoiceRevisions = 3;</code>
     * @param array<\Diadoc\Api\Proto\Invoicing\InvoiceRevisionInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInvoiceRevisions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Invoicing\InvoiceRevisionInfo::class);
        $this->InvoiceRevisions = $arr;

        return $this;
    }

}

