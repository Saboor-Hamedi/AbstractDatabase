<?php

declare(strict_types=1);

namespace AbstractDatabase\Config;

// paths call it on templatengine, controllers
class Paths
{
    public const VIEWS = __DIR__ . '/../views';
    public const SOURCE = __DIR__ .  '/../../app'; // point to the source directory of the project
}
