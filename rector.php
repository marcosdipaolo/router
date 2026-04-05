<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\Php74\Rector\Assign\NullCoalescingOperatorRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/test',
    ])
    ->withSkip([
        __DIR__ . '/vendor',
        NullCoalescingOperatorRector::class, // Skip: creates new PHPStan errors with function parameters
    ])
    ->withPhpVersion(\Rector\ValueObject\PhpVersion::PHP_82)
    ->withSets([
        LevelSetList::UP_TO_PHP_82,
        SetList::CODE_QUALITY,
        SetList::CODING_STYLE,
    ]);

