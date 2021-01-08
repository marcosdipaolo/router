<?php


namespace MDP\Router\Exceptions;

/**
 * Class PageNotFoundRouterException
 * @package MDP\Exceptions
 */
class PageNotFoundRouterException extends \Exception implements \Throwable
{
    /**
     * PageNotFoundRouterException constructor.
     * @param string $message
     */
    public function __construct(string $message = 'Page not found')
    {
        parent::__construct($message, 404);
    }
}
