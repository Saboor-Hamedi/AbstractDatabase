<?php

declare(strict_types=1);

namespace AbstractDatabase\core;

use AbstractDatabase\core\Exception\ContainerException;
use ReflectionClass; // this is a default class of php
use ReflectionNamedType;

class Container
{
    protected array $definitions = [];
    public function addDefinitions(array $newDefinitions)
    {
        $this->definitions = [...$this->definitions, ...$newDefinitions];
    }
    public function resolve(string $className)
    {
        // validation construction
        $reflectionClass = new ReflectionClass($className);
        if (!$reflectionClass->isInstantiable()) {
            throw new ContainerException("Class {$className} is not instantiable");
        }
        $constructor = $reflectionClass->getConstructor();
        if (!$constructor) {
            return new $className;
        }

        $params = $constructor->getParameters();
        if (count($params) === 0) {
            return new $className;
        }
        $dependencies = [];
        foreach ($params as $param) {
            $name = $param->getName();
            $type = $param->getType();
        }
        if (!$type) {
            throw new ContainerException("Failed to resolve class {$className} because param {$param} is missing a type hint.");
        }
        if (!$type instanceof ReflectionNamedType || $type->isBuiltin()) {
            throw new ContainerException("Failed to resolve class {$className} because invalid param name.");
        }
        dd($params);
    }
}
