<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: CounteragentGroups/CounteragentGroupToCreate.proto

namespace Diadoc\Api\Proto\CounteragentGroups;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.CounteragentGroups.CounteragentGroupToCreate</code>
 */
class CounteragentGroupToCreate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     */
    protected $Name = '';
    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.CounteragentGroups.DepartmentsInGroup Departments = 2;</code>
     */
    protected $Departments = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Name
     *     @type \Diadoc\Api\Proto\CounteragentGroups\DepartmentsInGroup $Departments
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\CounteragentGroups\CounteragentGroupToCreate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->Name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.CounteragentGroups.DepartmentsInGroup Departments = 2;</code>
     * @return \Diadoc\Api\Proto\CounteragentGroups\DepartmentsInGroup|null
     */
    public function getDepartments()
    {
        return $this->Departments;
    }

    public function hasDepartments()
    {
        return isset($this->Departments);
    }

    public function clearDepartments()
    {
        unset($this->Departments);
    }

    /**
     * Generated from protobuf field <code>optional .Diadoc.Api.Proto.CounteragentGroups.DepartmentsInGroup Departments = 2;</code>
     * @param \Diadoc\Api\Proto\CounteragentGroups\DepartmentsInGroup $var
     * @return $this
     */
    public function setDepartments($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Api\Proto\CounteragentGroups\DepartmentsInGroup::class);
        $this->Departments = $var;

        return $this;
    }

}

