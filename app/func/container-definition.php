<?php

declare(strict_types=1);

use AbstractDatabase\Config\Paths;
use AbstractDatabase\core\TemplateEngine;
use AbstractDatabase\Services\ValidateService;

return [
    TemplateEngine::class  => fn () => new TemplateEngine(Paths::VIEWS),
    ValidateService::class => fn () => new ValidateService()
];
