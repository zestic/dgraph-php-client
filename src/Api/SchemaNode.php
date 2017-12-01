<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>api.SchemaNode</code>
 */
class SchemaNode extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string predicate = 1;</code>
     */
    private $predicate = '';
    /**
     * <code>string type = 2;</code>
     */
    private $type = '';
    /**
     * <code>bool index = 3;</code>
     */
    private $index = false;
    /**
     * <code>repeated string tokenizer = 4;</code>
     */
    private $tokenizer;
    /**
     * <code>bool reverse = 5;</code>
     */
    private $reverse = false;
    /**
     * <code>bool count = 6;</code>
     */
    private $count = false;
    /**
     * <code>bool list = 7;</code>
     */
    private $list = false;

    public function __construct() {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>string predicate = 1;</code>
     */
    public function getPredicate()
    {
        return $this->predicate;
    }

    /**
     * <code>string predicate = 1;</code>
     */
    public function setPredicate($var)
    {
        GPBUtil::checkString($var, True);
        $this->predicate = $var;

        return $this;
    }

    /**
     * <code>string type = 2;</code>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <code>string type = 2;</code>
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * <code>bool index = 3;</code>
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * <code>bool index = 3;</code>
     */
    public function setIndex($var)
    {
        GPBUtil::checkBool($var);
        $this->index = $var;

        return $this;
    }

    /**
     * <code>repeated string tokenizer = 4;</code>
     */
    public function getTokenizer()
    {
        return $this->tokenizer;
    }

    /**
     * <code>repeated string tokenizer = 4;</code>
     */
    public function setTokenizer(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tokenizer = $arr;

        return $this;
    }

    /**
     * <code>bool reverse = 5;</code>
     */
    public function getReverse()
    {
        return $this->reverse;
    }

    /**
     * <code>bool reverse = 5;</code>
     */
    public function setReverse($var)
    {
        GPBUtil::checkBool($var);
        $this->reverse = $var;

        return $this;
    }

    /**
     * <code>bool count = 6;</code>
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <code>bool count = 6;</code>
     */
    public function setCount($var)
    {
        GPBUtil::checkBool($var);
        $this->count = $var;

        return $this;
    }

    /**
     * <code>bool list = 7;</code>
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * <code>bool list = 7;</code>
     */
    public function setList($var)
    {
        GPBUtil::checkBool($var);
        $this->list = $var;

        return $this;
    }

}
