<?php

declare(strict_types=1);

namespace AbstractDatabase\core;

use AbstractDatabase\core\Exception\ContainerException;
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
        if (!$reflectionClass->isInstantiable()) {
            throw new ContainerException('Class' . $className . 'is not instantiable');
        }
        $constructor = $reflectionClass->getConstructor();
        if (!$constructor) {
            return new $className;
        }
        $params = $constructor->getParameters();
        if (count($params) === 0) {
            return new $className;
        }
        dd($params);
    }
}
