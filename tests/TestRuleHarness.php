<?php

namespace ChainLink\PHP\Tests;

use Mockery;

class TestRuleHarness extends AbstractRuleTest
{
    public function setUp ()
    {
        $this->rule = Mockery::mock('ChainLink\PHP\Rule');
        parent::setUp();
    }

    public function tearDown ()
    {
        Mockery::close();
        parent::tearDown();
    }

    public function testEvaluateReturnsTrue() {
        $this->rule->shouldReceive('evaluate')
                   ->withAnyArgs('name', array('expected', 'input'))
                   ->andReturn(true)
                   ->getMock();
        parent::testEvaluateReturnsTrue();
    }

    public function testEvaluateReturnsFalse() {
        $this->rule->shouldReceive('evaluate')
                   ->withAnyArgs('name', array('expected', 'input'))
                   ->andReturn(false)
                   ->getMock();
        parent::testEvaluateReturnsFalse();
    }


}
