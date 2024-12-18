<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/InvoiceInfo.proto

namespace Diadoc\Api\Proto\Invoicing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Invoicing.PaymentDocumentInfo</code>
 */
class PaymentDocumentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string DocumentDate = 1;</code>
     */
    protected $DocumentDate = '';
    /**
     * Generated from protobuf field <code>string DocumentNumber = 2;</code>
     */
    protected $DocumentNumber = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $DocumentDate
     *     @type string $DocumentNumber
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Invoicing\InvoiceInfo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string DocumentDate = 1;</code>
     * @return string
     */
    public function getDocumentDate()
    {
        return $this->DocumentDate;
    }

    /**
     * Generated from protobuf field <code>string DocumentDate = 1;</code>
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
     * Generated from protobuf field <code>string DocumentNumber = 2;</code>
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }

    /**
     * Generated from protobuf field <code>string DocumentNumber = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->DocumentNumber = $var;

        return $this;
    }

}

