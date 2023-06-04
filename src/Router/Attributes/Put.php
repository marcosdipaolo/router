<?php

namespace MDP\Router\Attributes;

use Attribute;

#[Attribute]
class Put extends Route
{
    public function __construct(string $path)
    {
        parent::__construct($path, "put");
    }
}