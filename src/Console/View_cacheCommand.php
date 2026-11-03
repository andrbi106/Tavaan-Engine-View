<?php

declare(strict_types=1);

namespace Tavaan\Engine\View\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * view:cache command.
 */
final class View_cacheCommand implements CommandInterface
{
    public function name(): string
    {
        return 'view:cache';
    }

    public function description(): string
    {
        return 'Run view:cache (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
