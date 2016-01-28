<?php

namespace ChainLink\PHP\Tests;

use Mockery;

abstract class AbstractRuleTest extends \PHPUnit_Framework_TestCase
{
    protected $rule;

    public function setUp ()
    {
        parent::setUp();
    }

    public function tearDown ()
    {
        Mockery::close();
        parent::tearDown();
    }

    /**
     * testIsInstanceOf
     *
     * Determine if object implements the Chain-Link Interface
     */
    public function testIsInstanceOf() {
        $this->assertInstanceOf('ChainLink\PHP\Rule', $this->rule);

    }

    public function testEvaluateReturnsTrue() {
       $this->assertTrue($this->rule->evaluate($name = "Equals", $paramaters = [true, true]));
    }

    public function testEvaluateReturnsFalse() {
        $this->assertFalse($this->rule->evaluate($name = "Equals", $paramaters = [false, true]));
    }

    public function testEqualsTrue() {
        $this->assertTrue($this->rule->evaluate($name = "Equals", $paramaters = [true, true]));
    }

    public function testEqualsFalse() {
        $this->assertFalse($this->rule->evaluate($name = "Equals", $paramaters = [false, true]));
    }

    public function testNotEqualTrue() {
        $this->assertTrue($this->rule->evaluate($name = "NotEqual", $paramaters = [false, true]));
    }

    public function testNotEqualFalse() {
        $this->assertFalse($this->rule->evaluate($name = "NotEqual", $paramaters = [true, true]));
    }

}
