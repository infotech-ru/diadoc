<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Employees/EmployeeToUpdate.proto

namespace Diadoc\Api\Proto\Employees;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.Employees.EmployeeIsAdministratorPatch</code>
 */
class EmployeeIsAdministratorPatch extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool IsAdministrator = 1;</code>
     */
    protected $IsAdministrator = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $IsAdministrator
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Employees\EmployeeToUpdate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool IsAdministrator = 1;</code>
     * @return bool
     */
    public function getIsAdministrator()
    {
        return $this->IsAdministrator;
    }

    /**
     * Generated from protobuf field <code>bool IsAdministrator = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsAdministrator($var)
    {
        GPBUtil::checkBool($var);
        $this->IsAdministrator = $var;

        return $this;
    }

}

