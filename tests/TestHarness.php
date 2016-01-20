<?php

namespace ChainLink\PHP\Tests;

use Mockery;

class TestHarness extends AbstractTest
{

    public function setUp ()
    {
        $this->testSubject = Mockery::mock('ChainLink\PHP\ChainLink');
        parent::setUp();
    }

    public function tearDown ()
    {
        Mockery::close();
        parent::tearDown();
    }


}
