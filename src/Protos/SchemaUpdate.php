<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: task.proto

namespace Protos;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use GPBMetadata\Task;

/**
 * Protobuf type <code>protos.SchemaUpdate</code>
 */
class SchemaUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string predicate = 1;</code>
     */
    private $predicate = '';
    /**
     * <code>.protos.Posting.ValType value_type = 2;</code>
     */
    private $value_type = 0;
    /**
     * <code>.protos.SchemaUpdate.Directive directive = 3;</code>
     */
    private $directive = 0;
    /**
     * <code>repeated string tokenizer = 4;</code>
     */
    private $tokenizer;
    /**
     * <code>bool count = 5;</code>
     */
    private $count = false;
    /**
     * <code>bool list = 6;</code>
     */
    private $list = false;
    /**
     * <pre>
     * whether schema was set by the user.
     * </pre>
     *
     * <code>bool explicit = 7;</code>
     */
    private $explicit = false;

    public function __construct() {
        Task::initOnce();
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
     * <code>.protos.Posting.ValType value_type = 2;</code>
     */
    public function getValueType()
    {
        return $this->value_type;
    }

    /**
     * <code>.protos.Posting.ValType value_type = 2;</code>
     */
    public function setValueType($var)
    {
        GPBUtil::checkEnum($var);
        $this->value_type = $var;

        return $this;
    }

    /**
     * <code>.protos.SchemaUpdate.Directive directive = 3;</code>
     */
    public function getDirective()
    {
        return $this->directive;
    }

    /**
     * <code>.protos.SchemaUpdate.Directive directive = 3;</code>
     */
    public function setDirective($var)
    {
        GPBUtil::checkEnum($var);
        $this->directive = $var;

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
     * <code>bool count = 5;</code>
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <code>bool count = 5;</code>
     */
    public function setCount($var)
    {
        GPBUtil::checkBool($var);
        $this->count = $var;

        return $this;
    }

    /**
     * <code>bool list = 6;</code>
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * <code>bool list = 6;</code>
     */
    public function setList($var)
    {
        GPBUtil::checkBool($var);
        $this->list = $var;

        return $this;
    }

    /**
     * <pre>
     * whether schema was set by the user.
     * </pre>
     *
     * <code>bool explicit = 7;</code>
     */
    public function getExplicit()
    {
        return $this->explicit;
    }

    /**
     * <pre>
     * whether schema was set by the user.
     * </pre>
     *
     * <code>bool explicit = 7;</code>
     */
    public function setExplicit($var)
    {
        GPBUtil::checkBool($var);
        $this->explicit = $var;

        return $this;
    }

}
