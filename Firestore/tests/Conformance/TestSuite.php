<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: test.proto

namespace Google\Cloud\Firestore\Tests\Conformance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of tests.
 *
 * Generated from protobuf message <code>tests.TestSuite</code>
 */
class TestSuite extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .tests.Test tests = 1;</code>
     */
    private $tests;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Firestore\Tests\Conformance\Test[]|\Google\Protobuf\Internal\RepeatedField $tests
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Test::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .tests.Test tests = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTests()
    {
        return $this->tests;
    }

    /**
     * Generated from protobuf field <code>repeated .tests.Test tests = 1;</code>
     * @param \Google\Cloud\Firestore\Tests\Conformance\Test[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Firestore\Tests\Conformance\Test::class);
        $this->tests = $arr;

        return $this;
    }

}
