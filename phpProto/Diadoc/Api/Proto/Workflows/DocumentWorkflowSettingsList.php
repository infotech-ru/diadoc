<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Workflows/DocumentWorkflowSettings.proto

namespace Diadoc\Api\Proto\Workflows;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Workflows.DocumentWorkflowSettingsList</code>
 */
class DocumentWorkflowSettingsList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Workflows.DocumentWorkflowSettings DocumentWorkflowSettings = 1;</code>
     */
    private $DocumentWorkflowSettings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Diadoc\Api\Proto\Workflows\DocumentWorkflowSettings>|\Google\Protobuf\Internal\RepeatedField $DocumentWorkflowSettings
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Workflows\DocumentWorkflowSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Workflows.DocumentWorkflowSettings DocumentWorkflowSettings = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDocumentWorkflowSettings()
    {
        return $this->DocumentWorkflowSettings;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.Workflows.DocumentWorkflowSettings DocumentWorkflowSettings = 1;</code>
     * @param array<\Diadoc\Api\Proto\Workflows\DocumentWorkflowSettings>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDocumentWorkflowSettings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\Workflows\DocumentWorkflowSettings::class);
        $this->DocumentWorkflowSettings = $arr;

        return $this;
    }

}
