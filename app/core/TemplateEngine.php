<?php

declare(strict_types=1);

namespace AbstractDatabase\core;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;

class TemplateEngine
{
    protected array $globalTemplateData = [];

    public function __construct(private string $basePath)
    {
    }

    public function render(string $template, array $data = [])
    {
        extract($data, EXTR_SKIP);
        extract($this->globalTemplateData, EXTR_SKIP);
        ob_start();
        require_once $this->resolve($template);
        $output = ob_get_contents();
        ob_end_clean();
        return $output;
    }

    public function resolve(string $path)
    {
        return "{$this->basePath}/{$path}";
    }
    public function addGlobal(string $key, mixed $value)
    {
        $this->globalTemplateData[$key] = $value;
    }
}
