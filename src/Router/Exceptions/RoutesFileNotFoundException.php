<?php

namespace MDP\Router\Exceptions;

class RoutesFileNotFoundException extends \Exception implements \Throwable
{

    /**
     * RoutesPathNotFoundException constructor.
     * @param string $string
     */
    public function __construct(string $string = 'You must set the routes file path first.')
    {
        parent::__construct($string);
    }
}
