<?php

declare(strict_types=1);

namespace AbstractDatabase\core;

use ReflectionClass; // this is a default class of php

class Container
{
    protected array $definitions = [];
    public function addDefinitions(array $newDefinitions)
    {
        $this->definitions = [...$this->definitions, ...$newDefinitions];
    }
    public function resolve(string $className)
    {
        $reflectionClass = new ReflectionClass($className);
        dd($reflectionClass);
    }
}
