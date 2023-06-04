<?php

namespace MDP\Router\Attributes;

use Attribute;

#[Attribute]
class Get extends Route
{
    public function __construct(string $path)
    {
        parent::__construct($path, "get");
    }
}