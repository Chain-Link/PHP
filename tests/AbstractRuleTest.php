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
}
