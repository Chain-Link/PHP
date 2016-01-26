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

    public function testEvaluate() {
        $this->rule->shouldReceive('evaluate')
                   ->withAnyArgs('name', array('expected', 'input'))
                   ->andReturn(true)
                   ->getMock();
        parent::testEvaluate();
    }


}
