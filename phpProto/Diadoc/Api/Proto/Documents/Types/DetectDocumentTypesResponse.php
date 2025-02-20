<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/Types/DocumentTypeDescription.proto

namespace Diadoc\Api\Proto\Documents\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Documents.Types.DetectDocumentTypesResponse</code>
 */
class DetectDocumentTypesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Documents.Types.DetectedDocumentType DocumentTypes = 1;</code>
     */
    private $DocumentTypes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Diadoc\Api\Proto\Documents\Types\DetectedDocumentType>|\Google\Protobuf\Internal\RepeatedField $DocumentTypes
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Documents\Types\DocumentTypeDescription::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Documents.Types.DetectedDocumentType DocumentTypes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDocumentTypes()
    {
        return $this->DocumentTypes;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Documents.Types.DetectedDocumentType DocumentTypes = 1;</code>
     * @param array<\Diadoc\Api\Proto\Documents\Types\DetectedDocumentType>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDocumentTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Documents\Types\DetectedDocumentType::class);
        $this->DocumentTypes = $arr;

        return $this;
    }

}

