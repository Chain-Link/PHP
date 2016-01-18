<?php

namespace ChainLink\PHP\Tests;


class AbstractTest extends \PHPUnit_Framework_TestCase
{
    protected $testSubject;
    public function __construct ($object)
    {
        $this->testSubject = $object;
    }
}
