<?php

namespace MDP\Router\Attributes;

#[\Attribute(\Attribute::TARGET_METHOD)]
class Patch extends Route
{
    public function __construct(string $path)
    {
        parent::__construct($path, 'PATCH');
    }
}
