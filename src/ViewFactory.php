<?php

declare(strict_types=1);

namespace Tavaan\Engine\View;

/**
 * ViewFactory — ساخت و مدیریت ویوها.
 */
final class ViewFactory
{
    /**
     * @var array<string, string>
     */
    private array $sharedData = [];

    public function __construct(
        private readonly string $viewPath = 'views',
        private readonly ?string $compiledPath = null,
    ) {
    }

    public function make(string $template, array $data = []): View
    {
        $file = $this->resolveTemplate($template);
        $data = \array_merge($this->sharedData, $data);
        return new View($file, $data);
    }

    public function share(string $key, mixed $value): self
    {
        $this->sharedData[$key] = $value;
        return $this;
    }

    public function exists(string $template): bool
    {
        return \file_exists($this->resolveTemplate($template));
    }

    private function resolveTemplate(string $template): string
    {
        if (\is_file($template)) return $template;
        // Look in viewPath
        $file = \rtrim($this->viewPath, '/') . '/' . $template;
        if (\is_file($file)) return $file;
        $file .= '.tv.php';
        if (\is_file($file)) return $file;
        return $template;  // may be inline template
    }
}
