<?php

namespace ChainLink\PHP\Tests;

use Mockery;

class TestChainLinkHarness extends AbstractChainLinkTest
{

    public function setUp ()
    {
        $this->chainLink = Mockery::mock('ChainLink\PHP\ChainLink');
        parent::setUp();
    }

    public function tearDown ()
    {
        Mockery::close();
        parent::tearDown();
    }


}
