<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: PowersOfAttorney/PowerOfAttorney.proto

namespace Diadoc\Api\Proto\PowersOfAttorney;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyPermissionsInfo</code>
 */
class PowerOfAttorneyPermissionsInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyPermissions Permissions = 1;</code>
     */
    private $Permissions;
    /**
     * Generated from protobuf field <code>optional string TransferPermissionLoss = 2;</code>
     */
    protected $TransferPermissionLoss = null;
    /**
     * Generated from protobuf field <code>string JointPermissions = 3;</code>
     */
    protected $JointPermissions = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorneyPermissions>|\Google\Protobuf\Internal\RepeatedField $Permissions
     *     @type string $TransferPermissionLoss
     *     @type string $JointPermissions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PowersOfAttorney\PowerOfAttorney::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyPermissions Permissions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPermissions()
    {
        return $this->Permissions;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Api.Proto.PowersOfAttorney.PowerOfAttorneyPermissions Permissions = 1;</code>
     * @param array<\Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorneyPermissions>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPermissions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Api\Proto\PowersOfAttorney\PowerOfAttorneyPermissions::class);
        $this->Permissions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string TransferPermissionLoss = 2;</code>
     * @return string
     */
    public function getTransferPermissionLoss()
    {
        return isset($this->TransferPermissionLoss) ? $this->TransferPermissionLoss : '';
    }

    public function hasTransferPermissionLoss()
    {
        return isset($this->TransferPermissionLoss);
    }

    public function clearTransferPermissionLoss()
    {
        unset($this->TransferPermissionLoss);
    }

    /**
     * Generated from protobuf field <code>optional string TransferPermissionLoss = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTransferPermissionLoss($var)
    {
        GPBUtil::checkString($var, True);
        $this->TransferPermissionLoss = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string JointPermissions = 3;</code>
     * @return string
     */
    public function getJointPermissions()
    {
        return $this->JointPermissions;
    }

    /**
     * Generated from protobuf field <code>string JointPermissions = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setJointPermissions($var)
    {
        GPBUtil::checkString($var, True);
        $this->JointPermissions = $var;

        return $this;
    }

}

