<?php

namespace ChainLink\PHP;

/**
 * Interface Rule
 * @package ChainLink\PHP
 * @version 1.2.0
 * @license MIT
 */
interface Rule
{

    /**
     * evaluate
     * @param string $ruleName
     * @param array  $parameters
     *
     * @return boolean
     */
    public function evaluate($ruleName, array $parameters);
}