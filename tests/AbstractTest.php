<?php

namespace ChainLink\PHP\Tests;


use Mockery;

abstract class AbstractTest extends \PHPUnit_Framework_TestCase
{
    protected $testSubject;

    public function setUp ()
    {
        parent::setUp();
    }

    public function tearDown ()
    {
        Mockery::close();
        parent::tearDown();
    }

    public function testIsInstanceOf() {
        $this->assertInstanceOf('ChainLink\PHP\ChainLink', $this->testSubject);
    }
}
