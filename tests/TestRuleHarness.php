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
}
