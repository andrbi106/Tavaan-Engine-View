<?php

declare(strict_types=1);

namespace Tavaan\Engine\View\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * view:directives command.
 */
final class View_directivesCommand implements CommandInterface
{
    public function name(): string
    {
        return 'view:directives';
    }

    public function description(): string
    {
        return 'Run view:directives (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
