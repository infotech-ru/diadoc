<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Employees/EmployeeToUpdate.proto

namespace Diadoc\Api\Proto\Employees;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Employees.EmployeeSelectedDepartmentsPatch</code>
 */
class EmployeeSelectedDepartmentsPatch extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string SelectedDepartmentIds = 1;</code>
     */
    private $SelectedDepartmentIds;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $SelectedDepartmentIds
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Employees\EmployeeToUpdate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string SelectedDepartmentIds = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSelectedDepartmentIds()
    {
        return $this->SelectedDepartmentIds;
    }

    /**
     * Generated from protobuf field <code>repeated string SelectedDepartmentIds = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSelectedDepartmentIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->SelectedDepartmentIds = $arr;

        return $this;
    }

}

