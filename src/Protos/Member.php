<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: task.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use GPBMetadata\Task;

/**
 * <pre>
 * Member stores information about RAFT group member for a single RAFT node.
 * Note that each server can be serving multiple RAFT groups. Each group would have
 * one RAFT node per server serving that group.
 * </pre>
 *
 * Protobuf type <code>protos.Member</code>
 */
class Member extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>fixed64 id = 1;</code>
     */
    private $id = 0;
    /**
     * <code>uint32 group_id = 2;</code>
     */
    private $group_id = 0;
    /**
     * <code>string addr = 3;</code>
     */
    private $addr = '';
    /**
     * <code>bool leader = 4;</code>
     */
    private $leader = false;
    /**
     * <code>bool am_dead = 5;</code>
     */
    private $am_dead = false;
    /**
     * <code>uint64 last_update = 6;</code>
     */
    private $last_update = 0;
    /**
     * <code>bool cluter_info_only = 13;</code>
     */
    private $cluter_info_only = false;

    public function __construct() {
        Task::initOnce();
        parent::__construct();
    }

    /**
     * <code>fixed64 id = 1;</code>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <code>fixed64 id = 1;</code>
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * <code>uint32 group_id = 2;</code>
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * <code>uint32 group_id = 2;</code>
     */
    public function setGroupId($var)
    {
        GPBUtil::checkUint32($var);
        $this->group_id = $var;

        return $this;
    }

    /**
     * <code>string addr = 3;</code>
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * <code>string addr = 3;</code>
     */
    public function setAddr($var)
    {
        GPBUtil::checkString($var, True);
        $this->addr = $var;

        return $this;
    }

    /**
     * <code>bool leader = 4;</code>
     */
    public function getLeader()
    {
        return $this->leader;
    }

    /**
     * <code>bool leader = 4;</code>
     */
    public function setLeader($var)
    {
        GPBUtil::checkBool($var);
        $this->leader = $var;

        return $this;
    }

    /**
     * <code>bool am_dead = 5;</code>
     */
    public function getAmDead()
    {
        return $this->am_dead;
    }

    /**
     * <code>bool am_dead = 5;</code>
     */
    public function setAmDead($var)
    {
        GPBUtil::checkBool($var);
        $this->am_dead = $var;

        return $this;
    }

    /**
     * <code>uint64 last_update = 6;</code>
     */
    public function getLastUpdate()
    {
        return $this->last_update;
    }

    /**
     * <code>uint64 last_update = 6;</code>
     */
    public function setLastUpdate($var)
    {
        GPBUtil::checkUint64($var);
        $this->last_update = $var;

        return $this;
    }

    /**
     * <code>bool cluter_info_only = 13;</code>
     */
    public function getCluterInfoOnly()
    {
        return $this->cluter_info_only;
    }

    /**
     * <code>bool cluter_info_only = 13;</code>
     */
    public function setCluterInfoOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->cluter_info_only = $var;

        return $this;
    }

}
