<?php

declare(strict_types=1);

use AbstractDatabase\Config\Paths;
use AbstractDatabase\core\TemplateEngine;

return [
    TemplateEngine::class  => fn () => new TemplateEngine(Paths::VIEWS)
];
