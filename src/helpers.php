<?php

if (!function_exists('getControllers')) {
    function getControllers(
        string $controllersDirectory = __DIR__ . "/src/Http/Controllers", 
        string $namespace = "App\\Http\\Controllers\\"
        ): array {
        $scan = scandir($controllersDirectory);
        if (!$scan) {
            throw new Error("Controller directory does not exist");
        }
        array_splice($scan, 0, 2);
        return array_map(function($class) use ($namespace) {
            $classNoExt = str_replace(".php", "", $class);
            return $namespace . $classNoExt;
        }, $scan);
    }
}