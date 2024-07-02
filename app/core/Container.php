<?php

declare(strict_types=1);

namespace AbstractDatabase\core;


class Container
{
    protected array $definitions = [];
    public function addDefinitions(array $newDefinitions)
    {
        dd($newDefinitions);
    }
}
