<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: task.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use GPBMetadata\Task;

/**
 * Protobuf type <code>protos.Query</code>
 */
class Query extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string attr = 1;</code>
     */
    private $attr = '';
    /**
     * <pre>
     * language list for attribute
     * </pre>
     *
     * <code>repeated string langs = 2;</code>
     */
    private $langs;
    /**
     * <pre>
     * Only return UIDs greater than this.
     * </pre>
     *
     * <code>fixed64 after_uid = 3;</code>
     */
    private $after_uid = 0;
    /**
     * <pre>
     * Are we just getting lengths?
     * </pre>
     *
     * <code>bool do_count = 4;</code>
     */
    private $do_count = false;
    /**
     * <pre>
     * Exactly one of uids and terms is populated.
     * </pre>
     *
     * <code>.protos.PBList uid_list = 5;</code>
     */
    private $uid_list = null;
    /**
     * <pre>
     * Function to generate or filter UIDs.
     * </pre>
     *
     * <code>.protos.SrcFunction src_func = 6;</code>
     */
    private $src_func = null;
    /**
     * <pre>
     * Whether this is a reverse edge.
     * </pre>
     *
     * <code>bool reverse = 7;</code>
     */
    private $reverse = false;
    /**
     * <pre>
     * which facets to fetch
     * </pre>
     *
     * <code>.protos.Param facet_param = 8;</code>
     */
    private $facet_param = null;
    /**
     * <pre>
     * filtering on facets : has Op (and/or/not) tree
     * </pre>
     *
     * <code>.protos.FilterTree facets_filter = 9;</code>
     */
    private $facets_filter = null;
    /**
     * <code>uint64 read_ts = 13;</code>
     */
    private $read_ts = 0;
    /**
     * <code>.protos.LinRead lin_read = 14;</code>
     */
    private $lin_read = null;

    public function __construct() {
        Task::initOnce();
        parent::__construct();
    }

    /**
     * <code>string attr = 1;</code>
     */
    public function getAttr()
    {
        return $this->attr;
    }

    /**
     * <code>string attr = 1;</code>
     */
    public function setAttr($var)
    {
        GPBUtil::checkString($var, True);
        $this->attr = $var;

        return $this;
    }

    /**
     * <pre>
     * language list for attribute
     * </pre>
     *
     * <code>repeated string langs = 2;</code>
     */
    public function getLangs()
    {
        return $this->langs;
    }

    /**
     * <pre>
     * language list for attribute
     * </pre>
     *
     * <code>repeated string langs = 2;</code>
     */
    public function setLangs(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->langs = $arr;

        return $this;
    }

    /**
     * <pre>
     * Only return UIDs greater than this.
     * </pre>
     *
     * <code>fixed64 after_uid = 3;</code>
     */
    public function getAfterUid()
    {
        return $this->after_uid;
    }

    /**
     * <pre>
     * Only return UIDs greater than this.
     * </pre>
     *
     * <code>fixed64 after_uid = 3;</code>
     */
    public function setAfterUid($var)
    {
        GPBUtil::checkUint64($var);
        $this->after_uid = $var;

        return $this;
    }

    /**
     * <pre>
     * Are we just getting lengths?
     * </pre>
     *
     * <code>bool do_count = 4;</code>
     */
    public function getDoCount()
    {
        return $this->do_count;
    }

    /**
     * <pre>
     * Are we just getting lengths?
     * </pre>
     *
     * <code>bool do_count = 4;</code>
     */
    public function setDoCount($var)
    {
        GPBUtil::checkBool($var);
        $this->do_count = $var;

        return $this;
    }

    /**
     * <pre>
     * Exactly one of uids and terms is populated.
     * </pre>
     *
     * <code>.protos.PBList uid_list = 5;</code>
     */
    public function getUidList()
    {
        return $this->uid_list;
    }

    /**
     * <pre>
     * Exactly one of uids and terms is populated.
     * </pre>
     *
     * <code>.protos.PBList uid_list = 5;</code>
     */
    public function setUidList(&$var)
    {
        GPBUtil::checkMessage($var, PBList::class);
        $this->uid_list = $var;

        return $this;
    }

    /**
     * <pre>
     * Function to generate or filter UIDs.
     * </pre>
     *
     * <code>.protos.SrcFunction src_func = 6;</code>
     */
    public function getSrcFunc()
    {
        return $this->src_func;
    }

    /**
     * <pre>
     * Function to generate or filter UIDs.
     * </pre>
     *
     * <code>.protos.SrcFunction src_func = 6;</code>
     */
    public function setSrcFunc(&$var)
    {
        GPBUtil::checkMessage($var, SrcFunction::class);
        $this->src_func = $var;

        return $this;
    }

    /**
     * <pre>
     * Whether this is a reverse edge.
     * </pre>
     *
     * <code>bool reverse = 7;</code>
     */
    public function getReverse()
    {
        return $this->reverse;
    }

    /**
     * <pre>
     * Whether this is a reverse edge.
     * </pre>
     *
     * <code>bool reverse = 7;</code>
     */
    public function setReverse($var)
    {
        GPBUtil::checkBool($var);
        $this->reverse = $var;

        return $this;
    }

    /**
     * <pre>
     * which facets to fetch
     * </pre>
     *
     * <code>.protos.Param facet_param = 8;</code>
     */
    public function getFacetParam()
    {
        return $this->facet_param;
    }

    /**
     * <pre>
     * which facets to fetch
     * </pre>
     *
     * <code>.protos.Param facet_param = 8;</code>
     */
    public function setFacetParam(&$var)
    {
        GPBUtil::checkMessage($var, Param::class);
        $this->facet_param = $var;

        return $this;
    }

    /**
     * <pre>
     * filtering on facets : has Op (and/or/not) tree
     * </pre>
     *
     * <code>.protos.FilterTree facets_filter = 9;</code>
     */
    public function getFacetsFilter()
    {
        return $this->facets_filter;
    }

    /**
     * <pre>
     * filtering on facets : has Op (and/or/not) tree
     * </pre>
     *
     * <code>.protos.FilterTree facets_filter = 9;</code>
     */
    public function setFacetsFilter(&$var)
    {
        GPBUtil::checkMessage($var, FilterTree::class);
        $this->facets_filter = $var;

        return $this;
    }

    /**
     * <code>uint64 read_ts = 13;</code>
     */
    public function getReadTs()
    {
        return $this->read_ts;
    }

    /**
     * <code>uint64 read_ts = 13;</code>
     */
    public function setReadTs($var)
    {
        GPBUtil::checkUint64($var);
        $this->read_ts = $var;

        return $this;
    }

    /**
     * <code>.protos.LinRead lin_read = 14;</code>
     */
    public function getLinRead()
    {
        return $this->lin_read;
    }

    /**
     * <code>.protos.LinRead lin_read = 14;</code>
     */
    public function setLinRead(&$var)
    {
        GPBUtil::checkMessage($var, LinRead::class);
        $this->lin_read = $var;

        return $this;
    }

}
