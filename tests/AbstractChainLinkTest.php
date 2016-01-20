<?php

namespace ChainLink\PHP\Tests;


use Mockery;

abstract class AbstractChainLinkTest extends \PHPUnit_Framework_TestCase
{
    protected $chainLink;

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
        $this->assertInstanceOf('ChainLink\PHP\ChainLink', $this->chainLink);

    }
}
