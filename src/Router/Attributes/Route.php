<?php

namespace MDP\Router\Attributes;

use Attribute;

#[Attribute]
class Route
{
    public function __construct(public string $path, public string $verb)
    {
    }
}